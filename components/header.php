<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Hype Crews | Web & App Development Company in Guwahati, India</title>
    <meta name="description" content="Top web development company in Guwahati, India. We build enterprise-grade websites, e-commerce platforms, mobile apps, and custom software solutions globally.">
    <meta name="keywords" content="web development company guwahati, app development india, software agency, ecommerce development, website design guwahati, The Hype Crews">
    <meta name="author" content="The Hype Crews">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://thehypecrews.in/">
    <meta property="og:title" content="The Hype Crews | Web & App Development Company">
    <meta property="og:description" content="Top web development company in Guwahati, India. We build enterprise websites, e-commerce platforms, and mobile apps.">
    <meta property="og:image" content="https://thehypecrews.in/images/hypecrews logo white.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://thehypecrews.in/">
    <meta property="twitter:title" content="The Hype Crews | Web & App Development Company">
    <meta property="twitter:description" content="Top web development company in Guwahati, India. We build enterprise websites, e-commerce platforms, and mobile apps.">
    <meta property="twitter:image" content="https://thehypecrews.in/images/hypecrews logo white.png">
    
    <!-- Canonical -->
    <link rel="canonical" href="https://thehypecrews.in/">

    <!-- Schema.org JSON-LD for Google Search -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "The Hype Crews",
      "image": "https://thehypecrews.in/images/hypecrews logo white.png",
      "url": "https://thehypecrews.in/",
      "telephone": "+913613243276",
      "email": "support@hypecrews.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Golaghat",
        "addressLocality": "Guwahati",
        "addressRegion": "Assam",
        "postalCode": "785621",
        "addressCountry": "IN"
      },
      "description": "India's trusted web and app development company based in Guwahati, Assam.",
      "foundingDate": "2022",
      "priceRange": "$$"
    }
    </script>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="favicon/favicon.svg">
    <link rel="shortcut icon" href="favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="manifest" href="favicon/site.webmanifest">

    <!-- Fonts: Outfit (premium, corporate) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Outfit"', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            200: '#bfdbfe',
                            300: '#93c5fd',
                            400: '#60a5fa',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a',
                            950: '#172554',
                        }
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-15px)' },
                        },
                        slideRight: {
                            '0%': { transform: 'translateX(-100%)' },
                            '100%': { transform: 'translateX(300%)' },
                        },
                        shine: {
                            '0%': { transform: 'translateX(-200%) skewX(-15deg)' },
                            '15%': { transform: 'translateX(200%) skewX(-15deg)' },
                            '100%': { transform: 'translateX(200%) skewX(-15deg)' }
                        }
                    },
                    animation: {
                        'float': 'float 4s ease-in-out infinite',
                        'slide-right': 'slideRight 2s linear infinite',
                        'shine': 'shine 4s infinite',
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Intl Tel Input CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css">
    
    <style>
        html { scroll-behavior: smooth; font-size: 16px; transition: font-size 0.3s ease; }
        .nav-scrolled { background-color: rgba(0,0,0,0.85) !important; backdrop-filter: blur(16px) !important; -webkit-backdrop-filter: blur(16px) !important; box-shadow: 0 4px 30px rgba(0,0,0,0.5); border-bottom: 1px solid rgba(255,255,255,0.05); }
        .nav-logo-img { filter: brightness(0) invert(1); transition: filter 0.3s; }
        .nav-logo-text { color: white !important; }
        .card-hover { transition: all 0.3s ease; }
        .card-hover:hover { transform: translateY(-4px); box-shadow: 0 20px 25px -5px rgba(0,0,0,0.08); }
        .btn-shine { position: relative; overflow: hidden; }
        .btn-shine::after {
            content: ''; position: absolute; top: 0; left: -100%; width: 50%; height: 100%;
            background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.4) 50%, rgba(255,255,255,0) 100%);
            transform: skewX(-20deg); animation: shine-effect 3s infinite; pointer-events: none;
        }
        @keyframes shine-effect { 0% { left: -100%; } 20% { left: 200%; } 100% { left: 200%; } }
        .fade-up { opacity: 0; transform: translateY(20px); transition: all 0.6s ease; }
        .fade-up.visible { opacity: 1; transform: translateY(0); }
        /* Popup Overlay */
        .popup-overlay { position: fixed; inset: 0; background: rgba(0,0,0,0.6); z-index: 9999; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(4px); }
        .popup-overlay.hidden { display: none; }
        .popup-box { background: white; border-radius: 12px; max-width: 520px; width: 92%; position: relative; overflow: hidden; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.25); }
        .popup-carousel { display: flex; transition: transform 0.4s ease; }
        .popup-carousel img { min-width: 100%; width: 100%; object-fit: contain; }
        .popup-dot { width: 10px; height: 10px; border-radius: 50%; background: #cbd5e1; cursor: pointer; transition: background 0.2s; }
        .popup-dot.active { background: #2563eb; }
    </style>
</head>
<body class="bg-white text-gray-800 antialiased font-sans flex flex-col min-h-screen">

    <!-- Promo Popup (max 8 per session) -->
    <div id="promo-popup" class="popup-overlay hidden">
        <div class="popup-box">
            <button onclick="closePopup()" class="absolute top-3 right-3 z-10 w-8 h-8 bg-white rounded-full shadow flex items-center justify-center text-gray-500 hover:text-gray-800 hover:bg-gray-100 transition text-lg">&times;</button>
            <div class="overflow-hidden">
                <div class="popup-carousel" id="popup-carousel">
                    <img src="images/popup-1.jpg" alt="Starter Business Website Offer">
                    <img src="images/popup-2.jpg" alt="Grow Your Business Online">
                </div>
            </div>
            <div class="flex justify-center gap-2 py-3 bg-gray-50 border-t border-gray-100">
                <span class="popup-dot active" onclick="goSlide(0)"></span>
                <span class="popup-dot" onclick="goSlide(1)"></span>
            </div>
        </div>
    </div>
    <script>
        let currentSlide = 0;
        function goSlide(n) {
            currentSlide = n;
            document.getElementById('popup-carousel').style.transform = 'translateX(-' + (n * 100) + '%)';
            document.querySelectorAll('.popup-dot').forEach((d, i) => d.classList.toggle('active', i === n));
        }
        function closePopup() { document.getElementById('promo-popup').classList.add('hidden'); }
        (function() {
            let count = parseInt(sessionStorage.getItem('popup_count') || '0');
            if (count < 8) {
                setTimeout(() => document.getElementById('promo-popup').classList.remove('hidden'), 1500);
                sessionStorage.setItem('popup_count', count + 1);
            }
        })();
        // Auto slide every 4 seconds
        setInterval(() => { goSlide(currentSlide === 0 ? 1 : 0); }, 4000);
    </script>

    <!-- Top Info Bar -->
    <div class="bg-brand-900 text-white text-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center py-2">
            <div class="flex items-center gap-4">
                <span class="hidden md:flex items-center gap-1"><i class="fa-solid fa-envelope text-brand-300"></i> support@hypecrews.com</span>
                <span class="hidden sm:flex items-center gap-1"><i class="fa-solid fa-phone text-brand-300"></i> +91 361 324 3276</span>
            </div>
            <div class="flex items-center gap-4">
                <!-- Font Resizer -->
                <button onclick="toggleFontSize()" class="flex items-center justify-center w-6 h-6 bg-brand-800 rounded border border-brand-700 hover:bg-brand-700 transition-colors text-white font-bold text-xs" title="Change Font Size">A</button>
                
                <!-- Currency Selector -->
                <div class="flex items-center gap-1">
                    <i class="fa-solid fa-coins text-brand-300"></i>
                    <select class="currency-selector bg-brand-800 text-white text-xs border border-brand-700 rounded px-1.5 py-0.5 cursor-pointer focus:outline-none">
                        <option value="INR">₹ INR</option>
                        <option value="USD">$ USD</option>
                        <option value="EUR">€ EUR</option>
                    </select>
                </div>
                <a href="https://www.linkedin.com/company/hypecrews/" target="_blank" rel="noopener noreferrer" class="hidden sm:block hover:text-brand-300 transition-colors"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>

    <!-- Main Navbar -->
    <nav class="sticky top-0 z-50 bg-black border-b border-gray-800 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="flex items-center gap-3">
                        <img src="images/hypecrews logo white.png" alt="The Hype Crews" class="h-14 w-auto object-contain nav-logo-img">
                        <span class="font-bold text-xl text-white nav-logo-text">The Hype Crews</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="/#about" class="nav-link text-base font-semibold text-gray-300 hover:text-white transition-colors">About</a>
                    <a href="/#services" class="nav-link text-base font-semibold text-gray-300 hover:text-white transition-colors">Services</a>
                    <a href="/#how-it-works" class="nav-link text-base font-semibold text-gray-300 hover:text-white transition-colors">How It Works</a>
                    <a href="/#pricing" class="nav-link text-base font-semibold text-gray-300 hover:text-white transition-colors">Pricing</a>
                    <a href="/#contact" class="nav-link text-base font-semibold text-gray-300 hover:text-white transition-colors">Contact</a>
                    <a href="/#contact" class="btn-shine inline-flex items-center px-6 py-2.5 border border-transparent text-base font-semibold rounded-md text-white bg-brand-600 hover:bg-brand-700 transition-colors shadow-sm group">
                        <span class="relative z-10">Get Free Quote</span>
                    </a>
                </div>
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-300 hover:text-white p-2"><i class="fa-solid fa-bars text-xl"></i></button>
                </div>
            </div>
        </div>
        
    </nav>
    
    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="fixed inset-0 z-[100] bg-gray-900 bg-opacity-95 transform translate-x-full transition-transform duration-300 ease-in-out md:hidden flex flex-col pt-20 pb-6 px-6">
        <button id="mobile-menu-close" class="absolute top-4 right-4 text-gray-400 hover:text-white p-2"><i class="fa-solid fa-xmark text-3xl"></i></button>
        <div class="flex-1 flex flex-col justify-center space-y-6 text-center">
            <a href="/#about" class="mobile-link text-2xl font-bold text-gray-300 hover:text-white transition-colors">About</a>
            <a href="/#services" class="mobile-link text-2xl font-bold text-gray-300 hover:text-white transition-colors">Services</a>
            <a href="/#how-it-works" class="mobile-link text-2xl font-bold text-gray-300 hover:text-white transition-colors">How It Works</a>
            <a href="/#pricing" class="mobile-link text-2xl font-bold text-gray-300 hover:text-white transition-colors">Pricing</a>
            <a href="/#contact" class="mobile-link text-2xl font-bold text-gray-300 hover:text-white transition-colors">Contact</a>
        </div>
        <div class="mt-auto pt-6 border-t border-gray-800 text-center">
            <a href="/#contact" class="mobile-link w-full inline-flex justify-center items-center px-6 py-4 border border-transparent text-lg font-bold rounded-xl text-white bg-brand-600 hover:bg-brand-700 shadow-lg mb-6">
                Get Free Quote
            </a>
            <div class="flex justify-center gap-6 text-gray-400">
                <a href="mailto:support@hypecrews.com" class="hover:text-white text-xl"><i class="fa-solid fa-envelope"></i></a>
                <a href="https://www.linkedin.com/company/hypecrews/" class="hover:text-white text-xl"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
    <script>
        const mobileMenu = document.getElementById('mobile-menu');
        const openBtn = document.getElementById('mobile-menu-btn');
        const closeBtn = document.getElementById('mobile-menu-close');
        const mobileLinks = document.querySelectorAll('.mobile-link');
        
        function toggleMenu() {
            mobileMenu.classList.toggle('translate-x-full');
            document.body.classList.toggle('overflow-hidden');
        }
        
        if(openBtn) openBtn.addEventListener('click', toggleMenu);
        if(closeBtn) closeBtn.addEventListener('click', toggleMenu);
        mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));

        window.addEventListener('scroll', () => document.getElementById('navbar').classList.toggle('nav-scrolled', window.scrollY > 10));
        
        // Font size toggler logic
        let fontSizes = ['16px', '18px', '20px'];
        let currentFontLevel = 0;
        function toggleFontSize() {
            currentFontLevel = (currentFontLevel + 1) % fontSizes.length;
            document.documentElement.style.fontSize = fontSizes[currentFontLevel];
        }
    </script>

    <!-- Currency auto-detect by IP + conversion script -->
    <script>
        let rates = { INR: 1, USD: 0.012, EUR: 0.011 }; // Fallback rates
        const symbols = { INR: '₹', USD: '$', EUR: '€' };
        
        function convertPrices(currency) {
            // Update all selects to match
            document.querySelectorAll('.currency-selector').forEach(sel => sel.value = currency);
            
            document.querySelectorAll('[data-price-inr]').forEach(el => {
                const inr = parseFloat(el.getAttribute('data-price-inr'));
                let priceStr = '';
                if (currency === 'INR') {
                    priceStr = symbols.INR + inr.toLocaleString('en-IN');
                } else {
                    const converted = Math.round(inr * rates[currency]);
                    priceStr = symbols[currency] + converted.toLocaleString('en-US');
                }
                
                if (el.tagName === 'OPTION') {
                    const baseText = el.getAttribute('data-base-text');
                    el.textContent = `${baseText} (${priceStr})`;
                } else {
                    el.textContent = priceStr;
                }
            });
        }
        
        document.addEventListener('change', (e) => {
            if (e.target && e.target.classList.contains('currency-selector')) {
                convertPrices(e.target.value);
            }
        });
        
        // Fetch live exchange rates
        fetch('https://open.er-api.com/v6/latest/INR')
            .then(res => res.json())
            .then(data => {
                if(data && data.rates) {
                    rates.USD = data.rates.USD;
                    rates.EUR = data.rates.EUR;
                }
                detectCurrencyAndConvert();
            })
            .catch(() => {
                detectCurrencyAndConvert();
            });

        function detectCurrencyAndConvert() {
            // Auto-detect currency by IP
            fetch('https://ipapi.co/json/')
                .then(r => r.json())
                .then(data => {
                    let curr = 'INR';
                    if (data.currency === 'USD') curr = 'USD';
                    else if (data.currency === 'EUR') curr = 'EUR';
                    convertPrices(curr);
                })
                .catch(() => {
                    convertPrices(document.querySelector('.currency-selector').value);
                });
        }
    </script>

    <main class="flex-grow">
