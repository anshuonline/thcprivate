// Initialize intl-tel-input on the phone field
const phoneInput = document.querySelector("#phone");
let iti;
if (phoneInput) {
    iti = window.intlTelInput(phoneInput, {
        initialCountry: "auto",
        separateDialCode: true,
        geoIpLookup: function(success, failure) {
            fetch("https://get.geojs.io/v1/ip/country.json")
                .then(function(res) { return res.json(); })
                .then(function(data) { success(data.country); })
                .catch(function() { success("in"); });
        },
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
    });
}

let captchaExpected = 0;
function generateCaptcha() {
    const questionEl = document.getElementById('captcha-question');
    const answerEl = document.getElementById('captcha-answer');
    
    if (questionEl && answerEl) {
        const num1 = Math.floor(Math.random() * 10) + 1;
        const num2 = Math.floor(Math.random() * 10) + 1;
        captchaExpected = num1 + num2;
        questionEl.innerText = num1 + ' + ' + num2;
        answerEl.value = '';
    }
}

// Initialize captcha immediately if elements exist
generateCaptcha();

const contactForm = document.getElementById('contact-form');
if (contactForm) {
    contactForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        const form = e.target;
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalBtnText = submitBtn.innerHTML;
        const msgDiv = document.getElementById('form-message');
        
        const captchaAnswerEl = document.getElementById('captcha-answer');
        const captchaAnswer = captchaAnswerEl ? parseInt(captchaAnswerEl.value) : 0;
        
        if (captchaAnswer !== captchaExpected) {
            msgDiv.classList.remove('hidden', 'bg-emerald-50', 'text-emerald-800');
            msgDiv.classList.add('bg-red-50', 'text-red-800');
            msgDiv.innerText = 'Incorrect security check answer. Please try again.';
            generateCaptcha();
            return;
        }
        
        const name = form.querySelector('#name').value;
        const email = form.querySelector('#email').value;
        const phone = (iti && iti.isValidNumber()) ? iti.getNumber() : form.querySelector('#phone').value;
        const service = form.querySelector('#service').value;
        const message = form.querySelector('#message').value;
        
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Sending...';
        msgDiv.classList.add('hidden');
        
        try {
            const response = await fetch('https://formsubmit.co/ajax/57f604790efda6b45077ca88f94a4256', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    _subject: "New Official Inquiry from " + name,
                    Name: name,
                    Email: email,
                    Phone: phone,
                    Service_Interest: service,
                    Message: message,
                    _template: "table"
                })
            });
            
            const result = await response.json();
            
            msgDiv.classList.remove('hidden', 'bg-red-50', 'text-red-800', 'bg-emerald-50', 'text-emerald-800');
            if(result.success === "true" || response.ok) {
                msgDiv.classList.add('bg-emerald-50', 'text-emerald-800');
                msgDiv.innerText = 'Thank you! Your message has been sent successfully. We will contact you shortly.';
                form.reset();
                generateCaptcha();
            } else {
                msgDiv.classList.add('bg-red-50', 'text-red-800');
                msgDiv.innerText = 'Something went wrong. Please try again.';
            }
        } catch(error) {
            msgDiv.classList.remove('hidden', 'bg-emerald-50', 'text-emerald-800');
            msgDiv.classList.add('bg-red-50', 'text-red-800');
            msgDiv.innerText = 'Network error. Please try again later.';
        }
        
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalBtnText;
        
        setTimeout(() => {
            msgDiv.classList.add('hidden');
        }, 8000);
    });
}

// Auto-select plan in contact form based on clicked pricing card
document.addEventListener('DOMContentLoaded', function() {
    const planButtons = document.querySelectorAll('a[href="#contact"]');
    const serviceSelect = document.getElementById('service');
    
    planButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            // Find the closest card
            const card = this.closest('.bg-white, .bg-slate-900');
            if(card && serviceSelect) {
                const titleEl = card.querySelector('h3, h4');
                if(titleEl) {
                    const planName = titleEl.textContent.trim();
                    // Try to match the plan name with select options
                    for(let i = 0; i < serviceSelect.options.length; i++) {
                        if(serviceSelect.options[i].value === planName) {
                            serviceSelect.selectedIndex = i;
                            break;
                        }
                    }
                }
            }
        });
    });
});
