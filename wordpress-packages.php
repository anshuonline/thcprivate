<?php include 'components/header.php'; ?>
<link rel="stylesheet" href="css/wp-packages.css">

<!-- Hero Section -->
<section class="wp-hero-section">
    <!-- 3D Sphere Background -->
    <div class="wp-hero-sphere"></div>
    
    <!-- Floating Particles -->
    <div class="wp-particle wp-particle-1"></div>
    <div class="wp-particle wp-particle-2"></div>
    <div class="wp-particle wp-particle-3"></div>
    <div class="wp-particle wp-particle-4"></div>

    <!-- Dot Pattern -->
    <div class="wp-hero-dots"></div>
    <!-- Main Content -->
    <div class="wp-hero-container">
        <div class="wp-hero-grid">
            <!-- LEFT COLUMN -->
            <div class="wp-hero-left">
                <div class="wp-hero-badge"><i class="fa-brands fa-wordpress"></i> WordPress Excellence</div>
                <h1 class="wp-hero-heading">Premium<br><span>WordPress</span><br>Solutions</h1>
                <p class="wp-hero-subtext">From lightning-fast landing pages to complex e-commerce platforms. We build scalable, secure, and beautiful WordPress websites tailored to your exact needs.</p>
                <div class="wp-hero-btns">
                    <a href="#packages" class="wp-hero-btn-primary"><i class="fa-solid fa-rocket"></i> View Packages</a>
                    <a href="#contact" class="wp-hero-btn-outline"><i class="fa-regular fa-message"></i> Get Custom Quote</a>
                </div>
                <div class="wp-hero-trust">
                    <div class="wp-hero-avatars">
                        <img src="images/avatar1.jpg" alt=""><img src="images/avatar2.jpg" alt=""><img src="images/avatar3.jpg" alt=""><img src="images/avatar4.jpg" alt="">
                        <div class="wp-hero-avatar-plus">+</div>
                    </div>
                    <div class="wp-hero-trust-text"><strong>524+</strong> Indian businesses launched<br><span class="wp-hero-star">★</span> <strong>4.9/5</strong> average client rating</div>
                </div>
            </div>
            <!-- RIGHT COLUMN -->
            <div class="wp-hero-right"><img src="images/placeholder3.webp" alt="WordPress Services" class="wp-hero-img"></div>
        </div>
    </div>
    <!-- Bottom Feature Bar -->
    <div class="wp-hero-bar">
        <div class="wp-hero-bar-inner">
            <div class="wp-hero-bar-item"><div class="wp-hero-bar-icon"><i class="fa-solid fa-shield-halved"></i></div><div><div class="wp-hero-bar-title">100% Secure</div><div class="wp-hero-bar-desc">SSL &amp; WAF Protected</div></div></div>
            <div class="wp-hero-bar-item"><div class="wp-hero-bar-icon"><i class="fa-solid fa-headset"></i></div><div><div class="wp-hero-bar-title">Dedicated Support</div><div class="wp-hero-bar-desc">Mon–Sat, 10AM – 7PM IST</div></div></div>
            <div class="wp-hero-bar-item"><div class="wp-hero-bar-icon"><i class="fa-solid fa-bolt"></i></div><div><div class="wp-hero-bar-title">Fast Turnaround</div><div class="wp-hero-bar-desc">Milestone-Based Delivery</div></div></div>
            <div class="wp-hero-bar-item wp-hero-bar-item-last"><div class="wp-hero-bar-icon"><i class="fa-solid fa-code"></i></div><div><div class="wp-hero-bar-title">Clean Code</div><div class="wp-hero-bar-desc">Documented &amp; Auditable</div></div></div>
        </div>
    </div>
</section>

<!-- Packages Section -->
<section id="packages" class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-black text-slate-900 mb-4">Choose Your WordPress Plan</h2>
            <p class="text-lg text-slate-600">Transparent pricing. No hidden fees. Select the package that fits your business goals.</p>
            
            <!-- Currency Toggle -->
            <div class="mt-8 inline-flex items-center gap-2 bg-white border border-slate-200 rounded-full px-5 py-2 shadow-sm">
                <span class="text-sm font-semibold text-slate-700">Currency:</span>
                <select class="currency-selector bg-transparent text-sm font-bold text-blue-800 cursor-pointer focus:outline-none ml-1">
                    <option value="INR">₹ INR</option>
                    <option value="USD">$ USD</option>
                    <option value="EUR">€ EUR</option>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
            
            <!-- Plan 1: Landing Page -->
            <div class="wp-card bg-white rounded-3xl border border-slate-200 p-8 flex flex-col h-full relative z-10">
                <div class="wp-icon-bg w-14 h-14 rounded-2xl flex items-center justify-center text-2xl mb-6">
                    <i class="fa-solid fa-file-lines"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900">Landing Page</h3>
                <p class="text-sm text-slate-500 mt-2">Perfect for marketing campaigns & simple portfolios.</p>
                <div class="my-6">
                    <div class="text-4xl font-black text-slate-900">
                        <span data-price-inr="4500">₹4,500</span>
                    </div>
                </div>
                <ul class="space-y-4 text-sm text-slate-600 mb-8 flex-1">
                    <li class="flex items-start"><i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i> 1-Page Responsive Design</li>
                    <li class="flex items-start"><i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i> Contact Form Integration</li>
                    <li class="flex items-start"><i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i> Basic SEO Setup</li>
                    <li class="flex items-start"><i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i> Speed Optimization</li>
                </ul>
                <a href="#contact" data-package="Landing Page" class="wp-quote-btn w-full block text-center py-3 rounded-xl border-2 border-[#21759b] text-[#21759b] font-bold hover:bg-[#21759b] hover:text-white transition-colors">Select Plan</a>
            </div>

            <!-- Plan 2: Blog / News -->
            <div class="wp-card wp-card-popular bg-white rounded-3xl border-2 p-8 flex flex-col h-full relative z-20 scale-105">
                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 bg-[#21759b] text-white text-xs font-bold px-4 py-1 rounded-b-lg">
                    MOST POPULAR
                </div>
                <div class="wp-icon-bg w-14 h-14 rounded-2xl flex items-center justify-center text-2xl mb-6 mt-2">
                    <i class="fa-solid fa-blog"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900">Blog / News</h3>
                <p class="text-sm text-slate-500 mt-2">Ideal for content creators, news portals, and small businesses.</p>
                <div class="my-6">
                    <div class="text-4xl font-black text-[#21759b]">
                        <span data-price-inr="8000">₹8,000</span>
                    </div>
                </div>
                <ul class="space-y-4 text-sm text-slate-600 mb-8 flex-1">
                    <li class="flex items-start"><i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i> Up to 5 Pages + Blog</li>
                    <li class="flex items-start"><i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i> Custom CMS Setup</li>
                    <li class="flex items-start"><i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i> Social Media Integration</li>
                    <li class="flex items-start"><i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i> Newsletter Integration</li>
                    <li class="flex items-start"><i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i> Standard Security</li>
                </ul>
                <a href="#contact" data-package="Blog/News" class="wp-quote-btn w-full block text-center py-3 rounded-xl wp-btn font-bold">Select Plan</a>
            </div>

            <!-- Plan 3: E-commerce -->
            <div class="wp-card bg-white rounded-3xl border border-slate-200 p-8 flex flex-col h-full relative z-10">
                <div class="wp-icon-bg w-14 h-14 rounded-2xl flex items-center justify-center text-2xl mb-6">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900">E-commerce</h3>
                <p class="text-sm text-slate-500 mt-2">Full-featured online store to sell physical or digital goods.</p>
                <div class="my-6">
                    <div class="text-4xl font-black text-slate-900">
                        <span data-price-inr="15000">₹15,000</span>
                    </div>
                </div>
                <ul class="space-y-4 text-sm text-slate-600 mb-8 flex-1">
                    <li class="flex items-start"><i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i> WooCommerce Setup</li>
                    <li class="flex items-start"><i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i> Up to 50 Products</li>
                    <li class="flex items-start"><i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i> Payment Gateway</li>
                    <li class="flex items-start"><i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i> Cart & Checkout Optimization</li>
                    <li class="flex items-start"><i class="fa-solid fa-check text-green-500 mt-1 mr-3"></i> Order Management</li>
                </ul>
                <a href="#contact" data-package="E-commerce" class="wp-quote-btn w-full block text-center py-3 rounded-xl border-2 border-[#21759b] text-[#21759b] font-bold hover:bg-[#21759b] hover:text-white transition-colors">Select Plan</a>
            </div>

            <!-- Plan 4: Custom Enterprise -->
            <div class="wp-card bg-slate-900 rounded-3xl border border-slate-800 p-8 flex flex-col h-full relative z-10">
                <div class="bg-slate-800 text-white w-14 h-14 rounded-2xl flex items-center justify-center text-2xl mb-6">
                    <i class="fa-solid fa-building"></i>
                </div>
                <h3 class="text-xl font-bold text-white">Custom Enterprise</h3>
                <p class="text-sm text-slate-400 mt-2">Bespoke WordPress development for large-scale operations.</p>
                <div class="my-6">
                    <div class="text-4xl font-black text-white">
                        Custom
                    </div>
                </div>
                <ul class="space-y-4 text-sm text-slate-300 mb-8 flex-1">
                    <li class="flex items-start"><i class="fa-solid fa-check text-[#21759b] mt-1 mr-3"></i> Custom WP Theme</li>
                    <li class="flex items-start"><i class="fa-solid fa-check text-[#21759b] mt-1 mr-3"></i> Complex Plugin Dev</li>
                    <li class="flex items-start"><i class="fa-solid fa-check text-[#21759b] mt-1 mr-3"></i> High-Traffic Architecture</li>
                    <li class="flex items-start"><i class="fa-solid fa-check text-[#21759b] mt-1 mr-3"></i> Advanced APIs</li>
                    <li class="flex items-start"><i class="fa-solid fa-check text-[#21759b] mt-1 mr-3"></i> 24/7 Priority Support</li>
                </ul>
                <a href="#contact" data-package="Custom Enterprise" class="wp-quote-btn w-full block text-center py-3 rounded-xl bg-white text-slate-900 font-bold hover:bg-slate-200 transition-colors">Contact Sales</a>
            </div>

        </div>
    </div>
</section>

<!-- Support & Features Section -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <span class="text-[#21759b] font-bold text-sm tracking-wider uppercase mb-2 block">Why Hype Crews?</span>
                <h2 class="text-3xl md:text-4xl font-black text-slate-900 mb-6">Beyond Just Development</h2>
                <p class="text-slate-600 text-lg mb-8 leading-relaxed">
                    We don't just hand over a website; we build a foundation for your digital success. Every WordPress package comes with our commitment to quality, security, and performance.
                </p>
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0 text-[#21759b]">
                            <i class="fa-solid fa-headset text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-slate-900">Dedicated Support</h4>
                            <p class="text-slate-600 mt-1 text-sm">Post-launch technical support to ensure your WordPress site runs smoothly without hiccups.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0 text-[#21759b]">
                            <i class="fa-solid fa-shield-halved text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-slate-900">Hardened Security</h4>
                            <p class="text-slate-600 mt-1 text-sm">Protection against malware, brute force attacks, and spam with industry-leading security practices.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center flex-shrink-0 text-[#21759b]">
                            <i class="fa-solid fa-gauge-high text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-bold text-slate-900">Blazing Fast Speed</h4>
                            <p class="text-slate-600 mt-1 text-sm">Optimized assets, caching, and clean code guarantee lightning-fast load times for better SEO.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <img src="images/placeholder2.webp" alt="WordPress Development" class="rounded-3xl object-cover w-full h-auto">
            </div>
        </div>
    </div>
</section>

<!-- Dedicated Contact Section -->
<section class="py-24 bg-slate-50 border-t border-slate-200" id="contact">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-black text-slate-900">Start Your WordPress Project</h2>
            <p class="text-slate-600 mt-4 text-lg">Select a package and send us your requirements. We'll get back within 24 hours.</p>
        </div>

        <div class="bg-white rounded-3xl shadow-xl border border-slate-100 p-8 md:p-12">
            <div id="form-message" class="hidden"></div>
            <form id="wp-contact-form" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-bold text-slate-700 mb-2">Full Name *</label>
                        <input type="text" id="name" name="name" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-[#21759b] focus:border-[#21759b] outline-none transition-all">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-bold text-slate-700 mb-2">Email Address *</label>
                        <input type="email" id="email" name="email" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-[#21759b] focus:border-[#21759b] outline-none transition-all">
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="phone" class="block text-sm font-bold text-slate-700 mb-2">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-[#21759b] focus:border-[#21759b] outline-none transition-all">
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-bold text-slate-700 mb-2">Selected Package *</label>
                        <select id="subject" name="subject" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-[#21759b] focus:border-[#21759b] outline-none transition-all bg-white">
                            <option value="" disabled selected>Select a package...</option>
                            <option value="WordPress - Landing Page">Landing Page (₹4,500)</option>
                            <option value="WordPress - Blog/News">Blog / News (₹8,000)</option>
                            <option value="WordPress - E-commerce">E-commerce (₹15,000)</option>
                            <option value="WordPress - Custom Enterprise">Custom Enterprise (Custom)</option>
                            <option value="WordPress - General Inquiry">General Inquiry</option>
                        </select>
                    </div>
                </div>
                
                <div>
                    <label for="message" class="block text-sm font-bold text-slate-700 mb-2">Project Details *</label>
                    <textarea id="message" name="message" rows="4" required placeholder="Tell us about your project, goals, and any specific requirements..." class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-[#21759b] focus:border-[#21759b] outline-none transition-all resize-none"></textarea>
                </div>
                
                <div>
                    <label for="captcha" class="block text-sm font-bold text-slate-700 mb-2">Security Question: What is <span id="captcha-question" class="text-blue-600 font-black"></span>? *</label>
                    <input type="text" id="captcha" required placeholder="Your Answer" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:ring-2 focus:ring-[#21759b] focus:border-[#21759b] outline-none transition-all">
                    <input type="hidden" id="captcha-answer" value="">
                    <input type="text" name="_honey" style="display:none">
                    <input type="hidden" name="_captcha" value="false">
                </div>
                
                <button type="submit" class="w-full py-4 rounded-xl wp-btn text-lg font-bold shadow-lg">
                    Submit Request
                </button>
            </form>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js" defer></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var phoneInput = document.querySelector("#phone");
        if(phoneInput) {
            window.intlTelInput(phoneInput, {
                initialCountry: "in",
                separateDialCode: true,
                utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js"
            });
        }
    });
</script>
<script src="js/wp-packages.js" defer></script>

<?php include 'components/footer.php'; ?>
