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

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        // Validate Math CAPTCHA
        if (parseInt(mathAnswer.value) !== (num1 + num2)) {
            mathError.classList.remove('hidden');
            generateMathCaptcha();
            return;
        }
        mathError.classList.add('hidden');

        // File check (required is on input, but just in case)
        if (!fileInput.files.length) {
            return;
        }

        // Show loading state
        submitBtn.disabled = true;
        submitBtn.querySelector('span').textContent = 'Submitting...';
        
        formMessages.classList.add('hidden');
        formMessages.className = 'mb-4 hidden rounded-sm p-4 text-sm font-medium';

        // Prepare FormData
        const formData = new FormData(form);
        
        // Use intl-tel-input formatted number if exists
        const phoneInput = document.querySelector("#phone");
        if(phoneInput && window.intlTelInputGlobals) {
            const iti = window.intlTelInputGlobals.getInstance(phoneInput);
            if(iti && iti.isValidNumber()) {
                formData.set('phone', iti.getNumber());
            }
        }

        // Submit via AJAX
        fetch('https://formsubmit.co/ajax/thehypecrews@proton.me', {
            method: 'POST',
            body: formData,
            headers: {
                'Accept': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                formMessages.textContent = 'Thank you for your application. We will be in touch soon!';
                formMessages.classList.add('bg-green-50', 'text-green-800', 'border', 'border-green-200');
                formMessages.classList.remove('hidden');
                form.reset();
                generateMathCaptcha();
            } else {
                throw new Error('Submission failed');
            }
        })
        .catch(error => {
            formMessages.textContent = 'An error occurred. Please try again later.';
            formMessages.classList.add('bg-red-50', 'text-red-800', 'border', 'border-red-200');
            formMessages.classList.remove('hidden');
        })
        .finally(() => {
            submitBtn.disabled = false;
            submitBtn.querySelector('span').textContent = 'Submit Application';
        });
    });
});
