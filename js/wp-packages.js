// wp-packages.js
document.addEventListener('DOMContentLoaded', () => {
    // Handle "Get Free Quote" button clicks to auto-select the right package in the contact form
    const quoteButtons = document.querySelectorAll('.wp-quote-btn');
    const subjectSelect = document.getElementById('subject');
    const contactSection = document.getElementById('contact');

    if (quoteButtons.length > 0 && subjectSelect) {
        quoteButtons.forEach(btn => {
            btn.addEventListener('click', function(e) {
                const packageTitle = this.getAttribute('data-package');
                if (packageTitle) {
                    // Make sure the option exists, or create it if not
                    let optionExists = false;
                    Array.from(subjectSelect.options).forEach(opt => {
                        if (opt.value === `WordPress - ${packageTitle}`) {
                            optionExists = true;
                        }
                    });

                    if (!optionExists) {
                        const newOption = document.createElement('option');
                        newOption.value = `WordPress - ${packageTitle}`;
                        newOption.textContent = `WordPress - ${packageTitle}`;
                        subjectSelect.appendChild(newOption);
                    }
                    
                    subjectSelect.value = `WordPress - ${packageTitle}`;
                }
            });
        });
    }

    // Handle Contact Form Submission
    const form = document.getElementById('wp-contact-form');
    const msgDiv = document.getElementById('form-message');
    
    if(form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(form);
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin mr-2"></i> Sending...';
            submitBtn.disabled = true;
            
            // Send to FormSubmit
            fetch('https://formsubmit.co/ajax/thehypecrews@proton.me', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json'
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if(data.success) {
                    msgDiv.innerHTML = '<i class="fa-solid fa-circle-check mr-2"></i> Your message has been sent successfully. We will get back to you shortly.';
                    msgDiv.className = 'mb-4 p-4 rounded-xl text-sm font-semibold bg-green-50 text-green-700 border border-green-200 block';
                    form.reset();
                } else {
                    throw new Error('Form submission failed');
                }
            })
            .catch(error => {
                msgDiv.innerHTML = '<i class="fa-solid fa-circle-exclamation mr-2"></i> An error occurred. Please try again or email us directly.';
                msgDiv.className = 'mb-4 p-4 rounded-xl text-sm font-semibold bg-red-50 text-red-700 border border-red-200 block';
            })
            .finally(() => {
                submitBtn.innerHTML = originalBtnText;
                submitBtn.disabled = false;
                setTimeout(() => {
                    msgDiv.classList.add('hidden');
                }, 8000);
            });
        });
    }
});
