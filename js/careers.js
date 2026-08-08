document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById('career-form');
    const mathQuestion = document.getElementById('math-question');
    const mathAnswer = document.getElementById('math-answer');
    const mathError = document.getElementById('math-error');
    const fileInput = document.getElementById('resume');
    const fileError = document.getElementById('file-error');
    const formMessages = document.getElementById('form-messages');
    const submitBtn = document.getElementById('submit-btn');
    const positionSelect = document.getElementById('position');
    const applyBtns = document.querySelectorAll('.apply-btn');

    let num1, num2;

    function generateMathCaptcha() {
        num1 = Math.floor(Math.random() * 10) + 1;
        num2 = Math.floor(Math.random() * 10) + 1;
        mathQuestion.textContent = `${num1} + ${num2}`;
        mathAnswer.value = '';
    }

    generateMathCaptcha();

    // Auto-select position on job card button click and scroll
    applyBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const jobTitle = this.getAttribute('data-job');
            if (jobTitle && positionSelect) {
                positionSelect.value = jobTitle;
            }
            
            // Scroll to form
            document.getElementById('apply').scrollIntoView({ behavior: 'smooth' });
        });
    });

    fileInput.addEventListener('change', function() {
        const file = this.files[0];
        fileError.classList.add('hidden');
        
        if (file) {
            if (file.type !== 'application/pdf') {
                fileError.textContent = 'Only PDF files are allowed.';
                fileError.classList.remove('hidden');
                this.value = '';
            } else if (file.size > 5 * 1024 * 1024) {
                fileError.textContent = 'File size must be less than 5MB.';
                fileError.classList.remove('hidden');
                this.value = '';
            }
        }
    });

    let submitted = false;
    
    // We'll rely on the hidden iframe's load event for success since we're using FormSubmit again
    const hiddenIframe = document.getElementById('hidden_iframe');
    if (hiddenIframe) {
        hiddenIframe.onload = function() {
            if (submitted) {
                formMessages.textContent = 'Thank you for your application. We will be in touch soon!';
                formMessages.classList.add('bg-green-50', 'text-green-800', 'border', 'border-green-200');
                formMessages.classList.remove('hidden');
                form.reset();
                generateMathCaptcha();
                submitBtn.disabled = false;
                submitBtn.querySelector('span').textContent = 'Submit Application';
                submitted = false;
            }
        };
    }

    form.addEventListener('submit', async function (e) {
        e.preventDefault(); // Stop natural submission to handle file upload first

        // Validate Math CAPTCHA
        if (parseInt(mathAnswer.value) !== (num1 + num2)) {
            mathError.classList.remove('hidden');
            generateMathCaptcha();
            return;
        }
        mathError.classList.add('hidden');

        // File check
        if (!fileInput.files.length) {
            return;
        }

        // Show loading state
        submitBtn.disabled = true;
        submitBtn.querySelector('span').textContent = 'Uploading Resume...';
        
        formMessages.classList.add('hidden');
        formMessages.className = 'mb-4 hidden rounded-sm p-4 text-sm font-medium';

        // Update phone number if intl-tel-input is used
        const phoneInput = document.querySelector("#phone");
        if(phoneInput && window.intlTelInputGlobals) {
            const iti = window.intlTelInputGlobals.getInstance(phoneInput);
            if(iti && iti.isValidNumber()) {
                phoneInput.value = iti.getNumber();
            }
        }
        
        // 1. Upload file to file.io
        const file = fileInput.files[0];
        const formData = new FormData();
        formData.append('file', file);
        
        try {
            const response = await fetch('https://file.io/', {
                method: 'POST',
                body: formData
            });
            
            const result = await response.json();
            
            if (result.success && result.link) {
                // 2. Inject link into hidden input
                document.getElementById('resume_link_input').value = result.link;
                
                // 3. Submit the form naturally to the hidden iframe
                submitBtn.querySelector('span').textContent = 'Submitting...';
                submitted = true;
                form.submit();
            } else {
                throw new Error('Upload failed');
            }
        } catch(error) {
            formMessages.textContent = 'Failed to upload resume to secure storage. Please try again.';
            formMessages.classList.add('bg-red-50', 'text-red-800', 'border', 'border-red-200');
            formMessages.classList.remove('hidden');
            submitBtn.disabled = false;
            submitBtn.querySelector('span').textContent = 'Submit Application';
        }
    });
});

// Accordion toggle function for Job Details
function toggleJobDetail(button) {
    // Find the adjacent .job-detail div
    const accordion = button.closest('.job-accordion');
    const detailPanel = accordion.querySelector('.job-detail');
    const icon = button.querySelector('.fa-chevron-down');

    // Toggle hidden class
    detailPanel.classList.toggle('hidden');

    // Rotate chevron icon
    if (detailPanel.classList.contains('hidden')) {
        icon.classList.remove('rotate-180');
    } else {
        icon.classList.add('rotate-180');
    }
}
