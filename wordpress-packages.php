<?php include 'components/header.php'; ?>
<link rel="stylesheet" href="css/wp-packages.css?v=<?php echo time(); ?>">

<!-- Modern Hero Section (matching homepage layout) -->
<section class="relative overflow-hidden bg-white min-h-[90vh] flex items-center" id="home">
    <!-- Subtle geometric background pattern -->
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none">
        <div class="absolute top-0 left-0 w-full h-full" style="background-image: radial-gradient(circle at 25px 25px, #1e3a5f 1px, transparent 0); background-size: 50px 50px;"></div>
    </div>
    
    <!-- Optimized gradient blobs -->
    <div class="absolute top-[-20%] right-[-15%] w-[70%] h-[70%] bg-gradient-to-br from-blue-50 via-blue-50/30 to-transparent rounded-full pointer-events-none"></div>
    <div class="absolute bottom-[-15%] left-[-10%] w-[50%] h-[50%] bg-gradient-to-tr from-slate-50 via-slate-50/20 to-transparent rounded-full pointer-events-none"></div>
    
    <!-- Floating Particles (from wp-packages.css) -->
    <div class="wp-particle wp-particle-1"></div>
    <div class="wp-particle wp-particle-2"></div>
    <div class="wp-particle wp-particle-3"></div>
    <div class="wp-particle wp-particle-4"></div>
    
    <!-- Thin decorative lines -->
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-900 via-blue-600 to-blue-900"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-16 md:py-24 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Left Content -->
            <div class="order-2 lg:order-1">
                <!-- Badge -->
                <div class="inline-flex items-center gap-3 bg-slate-50 border border-slate-200 rounded-sm px-4 py-2 mb-8 shadow-sm">
                    <div class="flex items-center gap-1.5">
                        <i class="fa-brands fa-wordpress text-[#21759b]"></i>
                    </div>
                    <span class="text-slate-700 text-xs font-semibold uppercase tracking-widest">WordPress Excellence</span>
                </div>
                
                <!-- Heading -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 leading-tight tracking-tight">
                    Premium
                    <span class="relative inline-block">
                        <span class="relative z-10 text-[#21759b]">WordPress</span>
                        <span class="absolute bottom-1 left-0 w-full h-3 bg-blue-200/50 -z-0"></span>
                    </span><br>
                    Solutions
                </h1>
                
                <!-- Subtext -->
                <p class="mt-6 text-base md:text-lg text-slate-600 leading-relaxed max-w-xl font-medium">
                    From lightning-fast landing pages to complex e-commerce platforms. We build scalable, secure, and beautiful WordPress websites tailored to your exact needs.
                </p>
                
                <!-- CTA buttons -->
                <div class="mt-10 flex flex-col sm:flex-row gap-4">
                    <a href="#packages" class="group inline-flex items-center justify-center px-8 py-3.5 text-sm font-semibold rounded-sm text-white bg-[#21759b] hover:bg-[#1a5f7e] transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-0.5 border border-[#1a5f7e]">
                        <i class="fa-solid fa-rocket mr-2"></i>
                        <span>View Packages</span>
                    </a>
                    <a href="#contact" class="inline-flex items-center justify-center px-8 py-3.5 text-sm font-semibold rounded-sm text-slate-700 bg-white border-2 border-slate-300 hover:bg-slate-50 hover:border-[#21759b] transition-all duration-300 shadow-sm">
                        <i class="fa-regular fa-message text-[#21759b] mr-2"></i>
                        Get Custom Quote
                    </a>
                </div>
                
                <!-- Social Proof -->
                <div class="mt-8 flex flex-col sm:flex-row items-center sm:items-start gap-4">
                    <div class="flex -space-x-2">
                        <img src="images/avatar1.jpg" class="w-8 h-8 rounded-full border-2 border-white relative z-40 object-cover" alt="">
                        <img src="images/avatar2.jpg" class="w-8 h-8 rounded-full border-2 border-white relative z-30 object-cover" alt="">
                        <img src="images/avatar3.jpg" class="w-8 h-8 rounded-full border-2 border-white relative z-20 object-cover" alt="">
                        <img src="images/avatar4.jpg" class="w-8 h-8 rounded-full border-2 border-white relative z-10 object-cover" alt="">
                        <div class="w-8 h-8 rounded-full bg-[#21759b] text-white flex items-center justify-center text-[10px] font-bold border-2 border-white relative z-0">+</div>
                    </div>
                    <div class="text-xs sm:text-sm text-slate-600 font-medium pt-1">
                        <span class="font-bold text-slate-900">524+</span> Indian businesses launched <span class="mx-1 text-slate-300">•</span> <span class="font-bold text-[#f59e0b]">★ 4.9/5</span> average client rating
                    </div>
                </div>
                
                <!-- Bottom Feature Bar (Inline Version for Hero) -->
                <div class="mt-14 grid grid-cols-2 md:grid-cols-4 gap-6 border-t border-slate-200 pt-10">
                    <div>
                        <div class="text-xl font-bold text-slate-900"><i class="fa-solid fa-shield-halved text-[#21759b] mb-1"></i></div>
                        <div class="text-[10px] font-semibold text-slate-500 uppercase tracking-wide">100% Secure</div>
                    </div>
                    <div>
                        <div class="text-xl font-bold text-slate-900"><i class="fa-solid fa-headset text-[#21759b] mb-1"></i></div>
                        <div class="text-[10px] font-semibold text-slate-500 uppercase tracking-wide">Dedicated Support</div>
                    </div>
                    <div>
                        <div class="text-xl font-bold text-slate-900"><i class="fa-solid fa-bolt text-[#21759b] mb-1"></i></div>
                        <div class="text-[10px] font-semibold text-slate-500 uppercase tracking-wide">Fast Turnaround</div>
                    </div>
                    <div>
                        <div class="text-xl font-bold text-slate-900"><i class="fa-solid fa-code text-[#21759b] mb-1"></i></div>
                        <div class="text-[10px] font-semibold text-slate-500 uppercase tracking-wide">Clean Code</div>
                    </div>
                </div>
            </div>
            
            <!-- Right side - Image Placeholder -->
            <div class="order-1 lg:order-2 flex justify-center lg:justify-end">
                <div class="relative w-full max-w-lg">
                    <div class="relative z-10 rounded-sm overflow-hidden shadow-2xl border-4 border-white bg-slate-100">
                        <img 
                            src="images/placeholder3.webp" 
                            alt="WordPress Services" 
                            class="w-full h-auto object-cover relative z-10 transition-transform duration-1000 hover:scale-105"
                        >
                        <!-- Overlay gradient for depth -->
                        <div class="absolute inset-0 bg-gradient-to-tr from-blue-900/10 to-transparent z-20 pointer-events-none"></div>
                    </div>
                    <!-- Decorative elements behind the image -->
                    <div class="absolute -top-4 -right-4 w-full h-full border-2 border-[#21759b]/30 rounded-sm z-0"></div>
                    <div class="absolute -bottom-4 -left-4 w-full h-full border-2 border-slate-300 rounded-sm z-0"></div>
                </div>
            </div>
            
        </div>
    </div>
    
    <!-- Bottom subtle wave -->
    <div class="absolute bottom-0 left-0 right-0 pointer-events-none">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" class="w-full h-auto">
            <path fill="#f8fafc" fill-opacity="1" d="M0,40 C360,60 1080,20 1440,40 L1440,60 L0,60 Z"></path>
        </svg>
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
