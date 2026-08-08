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
    
    // Listen for iframe postMessage from submit-career.php
    window.addEventListener('message', function(event) {
        if (submitted && (event.data === 'application_success' || event.data === 'application_error')) {
            if (event.data === 'application_success') {
                formMessages.textContent = 'Thank you for your application. We will be in touch soon!';
                formMessages.classList.add('bg-green-50', 'text-green-800', 'border', 'border-green-200');
            } else {
                formMessages.textContent = 'An error occurred while sending your application. Please try again.';
                formMessages.classList.add('bg-red-50', 'text-red-800', 'border', 'border-red-200');
            }
            formMessages.classList.remove('hidden');
            form.reset();
            generateMathCaptcha();
            submitBtn.disabled = false;
            submitBtn.querySelector('span').textContent = 'Submit Application';
            submitted = false;
        }
    });

    form.addEventListener('submit', function (e) {
        // Validate Math CAPTCHA
        if (parseInt(mathAnswer.value) !== (num1 + num2)) {
            e.preventDefault();
            mathError.classList.remove('hidden');
            generateMathCaptcha();
            return;
        }
        mathError.classList.add('hidden');

        // File check
        if (!fileInput.files.length) {
            e.preventDefault();
            return;
        }

        // Show loading state
        submitBtn.disabled = true;
        submitBtn.querySelector('span').textContent = 'Submitting...';
        
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
        
        // Let the form submit naturally to the hidden iframe
        submitted = true;
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
