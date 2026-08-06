<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Hype Crews - Professional Web & App Development Services</title>
    <meta name="description" content="India's trusted web development company. We build enterprise-grade websites, e-commerce platforms, mobile apps, and custom software solutions.">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="favicon/favicon.svg">
    <link rel="shortcut icon" href="favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="manifest" href="favicon/site.webmanifest">

    <!-- Fonts: Outfit (modern, clean, geometric) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
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
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        html { scroll-behavior: smooth; }
        .nav-scrolled { box-shadow: 0 1px 3px 0 rgba(0,0,0,0.1); }
        .card-hover { transition: all 0.3s ease; }
        .card-hover:hover { transform: translateY(-4px); box-shadow: 0 20px 25px -5px rgba(0,0,0,0.08); }
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
                <span class="flex items-center gap-1"><i class="fa-solid fa-envelope text-brand-300"></i> support@hypecrews.com</span>
                <span class="hidden sm:flex items-center gap-1"><i class="fa-solid fa-phone text-brand-300"></i> +91 361 324 3276</span>
            </div>
            <div class="flex items-center gap-4">
                <!-- Currency Selector -->
                <div class="flex items-center gap-1">
                    <i class="fa-solid fa-coins text-brand-300"></i>
                    <select class="currency-selector bg-brand-800 text-white text-xs border border-brand-700 rounded px-1.5 py-0.5 cursor-pointer focus:outline-none">
                        <option value="INR">₹ INR</option>
                        <option value="USD">$ USD</option>
                        <option value="EUR">€ EUR</option>
                    </select>
                </div>
                <a href="https://www.linkedin.com/company/hypecrews/" target="_blank" rel="noopener noreferrer" class="hover:text-brand-300 transition-colors"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>

    <!-- Main Navbar -->
    <nav class="sticky top-0 z-50 bg-white border-b border-gray-200 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="flex items-center gap-3">
                        <img src="images/hypecrews logo white.png" alt="The Hype Crews" class="h-9 w-auto bg-brand-900 rounded-md p-1 object-contain">
                        <span class="font-bold text-lg text-gray-900">The Hype Crews</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="#about" class="text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">About</a>
                    <a href="#services" class="text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">Services</a>
                    <a href="#how-it-works" class="text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">How It Works</a>
                    <a href="#pricing" class="text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">Pricing</a>
                    <a href="#contact" class="text-sm font-medium text-gray-600 hover:text-brand-600 transition-colors">Contact</a>
                    <a href="#contact" class="inline-flex items-center px-5 py-2 border border-transparent text-sm font-semibold rounded-md text-white bg-brand-600 hover:bg-brand-700 transition-colors shadow-sm">
                        Get Free Quote
                    </a>
                </div>
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-500 hover:text-gray-700 p-2"><i class="fa-solid fa-bars text-xl"></i></button>
                </div>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100">
            <div class="px-4 pt-2 pb-4 space-y-1">
                <a href="#about" class="block px-3 py-2 text-sm font-medium text-gray-700 hover:text-brand-600 hover:bg-gray-50 rounded-md">About</a>
                <a href="#services" class="block px-3 py-2 text-sm font-medium text-gray-700 hover:text-brand-600 hover:bg-gray-50 rounded-md">Services</a>
                <a href="#how-it-works" class="block px-3 py-2 text-sm font-medium text-gray-700 hover:text-brand-600 hover:bg-gray-50 rounded-md">How It Works</a>
                <a href="#pricing" class="block px-3 py-2 text-sm font-medium text-gray-700 hover:text-brand-600 hover:bg-gray-50 rounded-md">Pricing</a>
                <a href="#contact" class="block px-3 py-2 text-sm font-medium text-gray-700 hover:text-brand-600 hover:bg-gray-50 rounded-md">Contact</a>
                <a href="#contact" class="block mt-2 text-center px-5 py-2.5 text-sm font-semibold rounded-md text-white bg-brand-600 hover:bg-brand-700">Get Free Quote</a>
            </div>
        </div>
    </nav>
    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', () => document.getElementById('mobile-menu').classList.toggle('hidden'));
        window.addEventListener('scroll', () => document.getElementById('navbar').classList.toggle('nav-scrolled', window.scrollY > 10));
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
