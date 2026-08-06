<?php include 'components/header.php'; ?>

<!-- Modern Government-Style Hero Section with Optimized Animation -->
<section class="relative overflow-hidden bg-white min-h-[90vh] flex items-center" id="home">
    <!-- Subtle geometric background pattern - CSS only, no image loading -->
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none">
        <div class="absolute top-0 left-0 w-full h-full" style="background-image: radial-gradient(circle at 25px 25px, #1e3a5f 1px, transparent 0); background-size: 50px 50px;"></div>
    </div>
    
    <!-- Optimized gradient blobs - pure CSS, no blur performance hit -->
    <div class="absolute top-[-20%] right-[-15%] w-[70%] h-[70%] bg-gradient-to-br from-blue-50 via-blue-50/30 to-transparent rounded-full pointer-events-none"></div>
    <div class="absolute bottom-[-15%] left-[-10%] w-[50%] h-[50%] bg-gradient-to-tr from-slate-50 via-slate-50/20 to-transparent rounded-full pointer-events-none"></div>
    
    <!-- Thin decorative lines for government feel -->
    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-900 via-blue-600 to-blue-900"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-16 md:py-24 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Left Content -->
            <div class="order-2 lg:order-1">
                <!-- Government-style badge -->
                <div class="inline-flex items-center gap-3 bg-slate-50 border border-slate-200 rounded-sm px-4 py-2 mb-8 shadow-sm">
                    <div class="flex items-center gap-1.5">
                        <span class="relative flex h-2.5 w-2.5">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                        </span>
                    </div>
                    <span class="text-slate-700 text-xs font-semibold uppercase tracking-widest">Government Registered • CIN: U73100AS2026PTC029838</span>
                </div>
                
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 leading-tight tracking-tight">
                    Digital Solutions for
                    <span class="relative inline-block">
                        <span class="relative z-10 text-blue-700">Modern India</span>
                        <span class="absolute bottom-1 left-0 w-full h-3 bg-amber-400/30 -z-0"></span>
                    </span>
                </h1>
                
                <p class="mt-6 text-base md:text-lg text-slate-600 leading-relaxed max-w-xl font-medium">
                    Secure, scalable, and accessible web & software development services for government agencies, public sector units, and businesses. Built with transparency and delivered with precision.
                </p>
                
                <!-- Official-looking CTA buttons -->
                <div class="mt-10 flex flex-col sm:flex-row gap-4">
                    <a href="#contact" class="group inline-flex items-center justify-center px-8 py-3.5 text-sm font-semibold rounded-sm text-white bg-blue-800 hover:bg-blue-900 transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-0.5 border border-blue-900">
                        <span>Submit Official Inquiry</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                    <a href="#services" class="inline-flex items-center justify-center px-8 py-3.5 text-sm font-semibold rounded-sm text-slate-700 bg-white border-2 border-slate-300 hover:bg-slate-50 hover:border-slate-400 transition-all duration-300 shadow-sm">
                        View Service Catalogue
                    </a>
                </div>
                
                <!-- Social Proof -->
                <div class="mt-8 flex flex-col sm:flex-row items-center sm:items-start gap-4 fade-up" style="animation-delay: 0.3s;">
                    <div class="flex -space-x-2">
                        <div class="w-8 h-8 rounded-full bg-emerald-700 text-white flex items-center justify-center text-[10px] font-bold border-2 border-white relative z-40">RK</div>
                        <div class="w-8 h-8 rounded-full bg-amber-600 text-white flex items-center justify-center text-[10px] font-bold border-2 border-white relative z-30">SP</div>
                        <div class="w-8 h-8 rounded-full bg-slate-900 text-white flex items-center justify-center text-[10px] font-bold border-2 border-white relative z-20">AN</div>
                        <div class="w-8 h-8 rounded-full bg-slate-500 text-white flex items-center justify-center text-[10px] font-bold border-2 border-white relative z-10">+</div>
                    </div>
                    <div class="text-xs sm:text-sm text-slate-600 font-medium pt-1">
                        <span class="font-bold text-slate-900">524+</span> Indian businesses launched <span class="mx-1 text-slate-300">•</span> <span class="font-bold text-slate-900">4.9/5</span> average client rating
                    </div>
                </div>
                
                <!-- Statistics with government-style minimal design -->
                <div class="mt-14 grid grid-cols-3 gap-8 border-t border-slate-200 pt-10">
                    <div>
                        <div class="text-3xl font-bold text-slate-900">450<span class="text-blue-700">+</span></div>
                        <div class="text-xs font-semibold text-slate-500 mt-1 uppercase tracking-wide">Projects Completed</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-slate-900">121<span class="text-blue-700">+</span></div>
                        <div class="text-xs font-semibold text-slate-500 mt-1 uppercase tracking-wide">Clients</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-slate-900">100<span class="text-blue-700">%</span></div>
                        <div class="text-xs font-semibold text-slate-500 mt-1 uppercase tracking-wide">Compliance Rate</div>
                    </div>
                </div>
            </div>
            
            <!-- Right side - Optimized Hero Placeholder Animation -->
            <div class="order-1 lg:order-2 flex justify-center lg:justify-end">
                <div class="relative w-full max-w-lg">
                    <!-- Main image container with optimized CSS animation -->
                    <div class="relative z-10 rounded-sm overflow-hidden shadow-2xl border-4 border-white bg-slate-100 animate-hero-float">
                        <!-- Actual image with lazy loading placeholder effect -->
                        <img 
                            src="images/heroplaceholder.webp" 
                            alt="Digital India Initiative" 
                            class="w-full h-auto object-cover relative z-10 transition-transform duration-1000 hover:scale-105"
                            loading="eager"
                            decoding="async"
                            onerror="this.onerror=null; this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22600%22 height=%22400%22%3E%3Crect fill=%22%23f1f5f9%22 width=%22600%22 height=%22400%22/%3E%3Ctext fill=%22%23475569%22 font-family=%22sans-serif%22 font-size=%2220%22 x=%2250%25%22 y=%2250%25%22 text-anchor=%22middle%22%3EDigital India%3C/text%3E%3C/svg%3E';"
                        >
                        
                        <!-- Overlay gradient for depth -->
                        <div class="absolute inset-0 bg-gradient-to-tr from-blue-900/10 to-transparent z-20 pointer-events-none"></div>
                        
                        <!-- Animated scanning line effect - GPU accelerated -->
                        <div class="absolute inset-0 z-30 pointer-events-none overflow-hidden">
                            <div class="absolute top-0 left-[-100%] w-full h-[2px] bg-gradient-to-r from-transparent via-blue-400/60 to-transparent animate-scan-line"></div>
                        </div>
                    </div>
                    
                    <!-- Decorative elements behind the image -->
                    <div class="absolute -top-4 -right-4 w-full h-full border-2 border-blue-200 rounded-sm z-0"></div>
                    <div class="absolute -bottom-4 -left-4 w-full h-full border-2 border-slate-300 rounded-sm z-0"></div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bottom subtle wave -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60" class="w-full h-auto">
            <path fill="#f8fafc" fill-opacity="1" d="M0,40 C360,60 1080,20 1440,40 L1440,60 L0,60 Z"></path>
        </svg>
    </div>
</section>

<!-- About Us Section - Government Style -->
<section class="py-24 bg-white border-b border-slate-200 relative overflow-hidden" id="about">
    <!-- Subtle watermark pattern -->
    <div class="absolute inset-0 opacity-[0.02] pointer-events-none">
        <div class="absolute top-0 left-0 w-full h-full" style="background-image: url('data:image/svg+xml,%3Csvg width=%2260%22 height=%2260%22 viewBox=%220 0 60 60%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cg fill=%22none%22 fill-rule=%22evenodd%22%3E%3Cg fill=%22%231e3a5f%22 fill-opacity=%221%22%3E%3Cpath d=%22M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z%22/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="fade-up">
                <span class="inline-block bg-blue-50 text-blue-800 text-xs font-bold px-4 py-2 rounded-sm uppercase tracking-widest mb-4 border-l-4 border-blue-700">About the Organization</span>
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 leading-tight">
                    Serving the Nation Through Digital Excellence
                </h2>
                <div class="w-20 h-1 bg-amber-400 mt-4 mb-6"></div>
                <p class="mt-4 text-slate-600 text-base leading-relaxed">
                    Established in 2022 in Guwahati, Assam, The Hype Crews is a registered private limited company dedicated to providing secure, scalable, and accessible digital solutions. We serve government departments, public sector units, and enterprises across India with a commitment to transparency and technological excellence.
                </p>
                <p class="mt-4 text-slate-600 text-base leading-relaxed">
                    Our team of security-cleared professionals ensures every project meets the highest standards of data protection, accessibility guidelines, and performance benchmarks mandated for government and enterprise applications.
                </p>
                
                <div class="mt-8 grid grid-cols-2 gap-4">
                    <div class="bg-slate-50 border border-slate-200 rounded-sm p-5">
                        <div class="text-xs text-slate-500 uppercase tracking-wider font-semibold mb-1">Corporate Identity</div>
                        <div class="text-sm font-bold text-slate-900">U73100AS2026PTC029838</div>
                    </div>
                    <div class="bg-slate-50 border border-slate-200 rounded-sm p-5">
                        <div class="text-xs text-slate-500 uppercase tracking-wider font-semibold mb-1">Registered Office</div>
                        <div class="text-sm font-bold text-slate-900">Golaghat, Assam, 785621</div>
                    </div>
                    <div class="bg-slate-50 border border-slate-200 rounded-sm p-5">
                        <div class="text-xs text-slate-500 uppercase tracking-wider font-semibold mb-1">Establishment</div>
                        <div class="text-sm font-bold text-slate-900">2022, Guwahati, Assam</div>
                    </div>
                    <div class="bg-slate-50 border border-slate-200 rounded-sm p-5">
                        <div class="text-xs text-slate-500 uppercase tracking-wider font-semibold mb-1">Jurisdiction</div>
                        <div class="text-sm font-bold text-slate-900">Pan-India & International</div>
                    </div>
                </div>
            </div>
            <div class="fade-up">
                <div class="bg-slate-50 border border-slate-200 rounded-sm p-8 shadow-sm">
                    <h3 class="text-xl font-bold text-slate-900 mb-6 flex items-center gap-2">
                        <span class="w-8 h-8 bg-blue-800 text-white rounded-full flex items-center justify-center text-sm">1</span>
                        Mission & Values
                    </h3>
                    <div class="space-y-5">
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <div>
                                <span class="text-sm font-bold text-slate-900">Transparency First</span>
                                <p class="text-xs text-slate-600 mt-0.5">Clear communication, honest pricing, no hidden charges. Every line of code is documented.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <div>
                                <span class="text-sm font-bold text-slate-900">Security & Compliance</span>
                                <p class="text-xs text-slate-600 mt-0.5">GDPR, ISO standards, and Indian IT Act compliance built into every project from day one.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <div>
                                <span class="text-sm font-bold text-slate-900">Accessible by Design</span>
                                <p class="text-xs text-slate-600 mt-0.5">WCAG 2.1 compliance for all government-facing applications. Inclusive digital experiences.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <div>
                                <span class="text-sm font-bold text-slate-900">Made in India</span>
                                <p class="text-xs text-slate-600 mt-0.5">Proudly contributing to Digital India. All data stored on Indian servers (MeitY empanelled).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trust Bar - Government Style -->
<section class="bg-slate-900 py-6 border-b border-slate-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-amber-400 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                <span class="text-sm font-semibold text-white">100% Secure</span>
                <span class="text-xs text-slate-400">SSL & WAF Protected</span>
            </div>
            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-amber-400 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                <span class="text-sm font-semibold text-white">Dedicated Support</span>
                <span class="text-xs text-slate-400">Mon-Sat, 10AM - 7PM IST</span>
            </div>
            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-amber-400 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                <span class="text-sm font-semibold text-white">Fast Turnaround</span>
                <span class="text-xs text-slate-400">Milestone-Based Delivery</span>
            </div>
            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-amber-400 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                <span class="text-sm font-semibold text-white">Clean Code</span>
                <span class="text-xs text-slate-400">Documented & Auditable</span>
            </div>
        </div>
    </div>
</section>

<!-- Services Section - Government Style -->
<section class="py-24 bg-slate-50 relative overflow-hidden" id="services">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-20 fade-up">
            <span class="inline-block bg-blue-50 text-blue-800 text-xs font-bold px-4 py-2 rounded-sm uppercase tracking-widest mb-4 border-l-4 border-blue-700">Service Catalogue</span>
            <h2 class="text-3xl md:text-5xl font-bold text-slate-900 leading-tight">
                Comprehensive Digital Services
            </h2>
            <div class="w-20 h-1 bg-amber-400 mx-auto mt-4 mb-6"></div>
            <p class="mt-4 text-slate-600 text-lg leading-relaxed">
                Our service portfolio covers the complete digital transformation lifecycle, designed to meet global enterprise standards.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            <?php
            $services = [
                [
                    'img' => 'images/service-webdev.jpg',
                    'icon' => 'fa-globe',
                    'title' => 'Custom Website Development',
                    'desc' => 'Modern, responsive, and secure websites built for brands and enterprises. Includes SEO optimization, accessibility compliance, and lightning-fast performance.',
                ],
                [
                    'img' => 'images/service-ecommerce.jpg',
                    'icon' => 'fa-cart-shopping',
                    'title' => 'E-Commerce Solutions',
                    'desc' => 'Scalable and conversion-optimized e-commerce platforms. Secure payment gateways, inventory management, and seamless third-party API integrations.',
                ],
                [
                    'img' => 'images/service-webapp.jpg',
                    'icon' => 'fa-laptop-code',
                    'title' => 'Custom Web Applications',
                    'desc' => 'Scalable CRM, ERP, and workflow automation systems built with security-first architecture. Role-based access control, detailed audit logs, and data encryption.',
                ],
                [
                    'img' => 'images/service-mobile.jpg',
                    'icon' => 'fa-mobile-screen',
                    'title' => 'Mobile App Development',
                    'desc' => 'High-performance native and cross-platform mobile applications for iOS and Android. Offline-first architecture, seamless API integration, and beautiful UI.',
                ],
                [
                    'img' => 'images/service-uiux.jpg',
                    'icon' => 'fa-pen-nib',
                    'title' => 'Premium UI/UX Design',
                    'desc' => 'Data-driven, user-centric interface design. We create engaging wireframes, interactive prototypes, and conversion-optimized user journeys.',
                ],
                [
                    'img' => 'images/service-admin.jpg',
                    'icon' => 'fa-gauge-high',
                    'title' => 'Admin Dashboard & MIS',
                    'desc' => 'Custom Management Information Systems with real-time analytics, automated report generation, and dynamic data visualization dashboards.',
                ],
                [
                    'img' => 'images/service-api.jpg',
                    'icon' => 'fa-plug',
                    'title' => 'API & Backend Development',
                    'desc' => 'Robust and secure API development. Seamless integration with external services, CRM tools, payment gateways, and third-party SaaS platforms.',
                ],
                [
                    'img' => 'images/service-maintenance.jpg',
                    'icon' => 'fa-screwdriver-wrench',
                    'title' => 'Maintenance & Support',
                    'desc' => 'Comprehensive post-launch support with defined SLAs. Regular security audits, performance optimization, and 24x7 monitoring for absolute peace of mind.',
                ],
                [
                    'img' => 'images/service-seo.jpg',
                    'icon' => 'fa-magnifying-glass-chart',
                    'title' => 'SEO & Digital Presence',
                    'desc' => 'Technical SEO optimization ensuring high visibility on search engines. Structured data markup, high-speed delivery, and continuous performance tracking.',
                ],
                [
                    'img' => 'images/service-cloud.jpg',
                    'icon' => 'fa-cloud',
                    'title' => 'Cloud & DevOps Services',
                    'desc' => 'Scalable cloud deployment on AWS, Google Cloud, or Azure. CI/CD pipeline automation, serverless architecture, and disaster recovery planning.',
                ],
                [
                    'img' => 'images/service-ai.jpg',
                    'icon' => 'fa-robot',
                    'title' => 'AI & Emerging Technologies',
                    'desc' => 'AI-powered business solutions including smart chatbots, predictive analytics, process automation, and intelligent data processing systems.',
                ],
                [
                    'img' => 'images/service-security.jpg',
                    'icon' => 'fa-shield-halved',
                    'title' => 'Security & Compliance',
                    'desc' => 'Enterprise-grade security auditing. Regular vulnerability assessment, penetration testing, and security code reviews to protect your digital assets.',
                ],
            ];

            foreach ($services as $index => $service) {
                $bg_class = 'bg-white';
                $text_color = 'text-slate-900';
                $desc_color = 'text-slate-600';
                $icon_color = 'text-blue-600 bg-blue-50';
                
                if ($index == 0) {
                    $bg_class = 'bg-gradient-to-br from-blue-900 to-slate-900';
                    $text_color = 'text-white';
                    $desc_color = 'text-blue-100';
                    $icon_color = 'text-white bg-white/20 backdrop-blur-md';
                }

                echo '
                <div class="rounded-[2rem] border border-slate-200/60 overflow-hidden card-hover fade-up shadow-sm hover:shadow-xl transition-all duration-500 flex flex-col p-8 relative group ' . $bg_class . '">
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center text-3xl mb-8 shadow-sm transition-transform duration-500 group-hover:scale-110 group-hover:-rotate-3 z-10 ' . $icon_color . '">
                        <i class="fa-solid '.$service['icon'].'"></i>
                    </div>
                    <div class="flex-1 flex flex-col justify-start z-10">
                        <h3 class="text-xl font-extrabold mb-3 tracking-tight ' . $text_color . '">'.$service['title'].'</h3>
                        <p class="text-sm leading-relaxed font-medium ' . $desc_color . '">'.$service['desc'].'</p>
                    </div>
                    <!-- Decorative subtle icon in background -->
                    <i class="fa-solid '.$service['icon'].' absolute -bottom-6 -right-6 text-8xl opacity-[0.03] transition-transform duration-700 group-hover:rotate-12 group-hover:scale-125 z-0 ' . ($index == 0 ? 'text-white opacity-[0.06]' : 'text-slate-900') . '"></i>
                </div>';
            }
            ?>
        </div>
    </div>
</section>

<!-- How It Works - Government Process -->
<section class="py-20 bg-white border-t border-slate-200" id="how-it-works">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-up">
            <span class="inline-block bg-blue-50 text-blue-800 text-xs font-bold px-4 py-2 rounded-sm uppercase tracking-widest mb-4 border-l-4 border-blue-700">Standard Operating Procedure</span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Our Development Process</h2>
            <div class="w-20 h-1 bg-amber-400 mx-auto mt-4 mb-6"></div>
        </div>
        <div class="flex flex-wrap justify-center gap-8">
            <?php
            $steps = [
                ['num' => '01', 'icon' => 'fa-comments', 'title' => 'Requirement Analysis', 'desc' => 'Detailed discussion with stakeholders. Documentation of functional requirements, security needs, and compliance mandates. RFP response preparation.'],
                ['num' => '02', 'icon' => 'fa-file-contract', 'title' => 'Agreement & Security Clearance', 'desc' => 'Signing of NDA, SLA, and project charter. Security clearance verification for team members. Legal and compliance review.'],
                ['num' => '03', 'icon' => 'fa-sitemap', 'title' => 'Architecture & Planning', 'desc' => 'Detailed technical architecture, tech stack selection, and milestone planning. Stakeholder review and implementation plan sign-off.'],
                ['num' => '04', 'icon' => 'fa-code', 'title' => 'Secure Development', 'desc' => 'Development with OWASP top 10 mitigation. Regular code reviews, static analysis, and security testing integrated into CI/CD pipeline.'],
                ['num' => '05', 'icon' => 'fa-rocket', 'title' => 'UAT, Deployment & Handover', 'desc' => 'User Acceptance Testing with formal sign-off. Secure deployment with complete documentation, training manuals, and source code handover.'],
            ];
            ?>
            <style>
            <?php
            $total_time = 10;
            $card_percent = 15;
            $line_percent = 5;

            for ($i = 0; $i < 5; $i++) {
                $start_card = $i * ($card_percent + $line_percent);
                $end_card = $start_card + $card_percent;
                $start_line = $end_card;
                $end_line = $start_line + $line_percent;
                
                $smooth_end = min(96, $end_card + 1);
                $global_reset_start = 98;
                $global_reset_end = 100;
                
                echo "@keyframes drawBorder{$i} {
                    0%, ".max(0, $start_card - 0.1)."% { stroke-dashoffset: 3000; opacity: 0; }
                    {$start_card}% { stroke-dashoffset: 3000; opacity: 1; }
                    {$end_card}% { stroke-dashoffset: 0; opacity: 1; }
                    97% { stroke-dashoffset: 0; opacity: 1; }
                    98%, 100% { stroke-dashoffset: 0; opacity: 0; }
                }\n";
                
                echo "@keyframes drawLine{$i} {
                    0%, ".max(0, $start_line - 0.1)."% { width: 0%; opacity: 0; }
                    {$start_line}% { width: 0%; opacity: 1; }
                    {$end_line}% { width: 100%; opacity: 1; }
                    97% { width: 100%; opacity: 1; }
                    98%, 100% { width: 100%; opacity: 0; }
                }\n";
                
                echo "@keyframes cardBg{$i} {
                    0%, {$end_card}% { background-color: #ffffff; }
                    {$smooth_end}%, {$global_reset_start}% { background-color: #0f172a; } 
                    {$global_reset_end}%, 100% { background-color: #ffffff; }
                }\n";
                
                echo "@keyframes textTitle{$i} {
                    0%, {$end_card}% { color: #0f172a; }
                    {$smooth_end}%, {$global_reset_start}% { color: #ffffff; }
                    {$global_reset_end}%, 100% { color: #0f172a; }
                }\n";
                
                echo "@keyframes textDesc{$i} {
                    0%, {$end_card}% { color: #475569; }
                    {$smooth_end}%, {$global_reset_start}% { color: #cbd5e1; }
                    {$global_reset_end}%, 100% { color: #475569; }
                }\n";
                
                echo "@keyframes iconBg{$i} {
                    0%, {$end_card}% { background-color: #eff6ff; color: #1e40af; }
                    {$smooth_end}%, {$global_reset_start}% { background-color: #1e293b; color: #fbbf24; }
                    {$global_reset_end}%, 100% { background-color: #eff6ff; color: #1e40af; }
                }\n";
            }
            ?>
            .seq-border { stroke-dasharray: 3000; }
            </style>
            <?php
            foreach ($steps as $index => $step) {
                // Determine line visibility based on breakpoints
                $line_classes = "hidden absolute top-1/2 left-1/2 w-[calc(100%+2rem)] h-[3px] bg-slate-100 -translate-y-1/2 overflow-hidden ";
                
                if ($index == 0) $line_classes .= "md:block lg:block";
                elseif ($index == 1) $line_classes .= "md:hidden lg:block";
                elseif ($index == 2) $line_classes .= "md:block lg:hidden";
                elseif ($index == 3) $line_classes .= "md:hidden lg:block";
                
                echo '
                <div class="w-full md:w-[calc(50%-1rem)] lg:w-[calc(33.333%-1.5rem)] max-w-md relative">';
                
                if ($index < 4) {
                    echo '
                    <!-- Sequential Animated Line Connector -->
                    <div class="'.$line_classes.' z-0">
                        <div class="h-full bg-amber-500 shadow-[0_0_8px_#f59e0b]" style="animation: drawLine'.$index.' 10s linear infinite;"></div>
                    </div>';
                }

                echo '
                    <!-- Card Body -->
                    <div class="rounded-sm border border-slate-200 p-8 text-center fade-up shadow-sm h-full relative z-10" style="animation: cardBg'.$index.' 10s linear infinite;">
                        <!-- Sequential Animated SVG Border (Microdots + Shining) -->
                        <div class="absolute inset-0 w-full h-full pointer-events-none z-20 rounded-sm drop-shadow-[0_0_10px_rgba(245,158,11,0.9)]">
                            <svg class="w-full h-full">
                                <mask id="drawMask'.$index.'">
                                    <rect x="0" y="0" width="100%" height="100%" rx="4" fill="none" stroke="white" stroke-width="12" class="seq-border" style="animation: drawBorder'.$index.' 10s linear infinite;" />
                                </mask>
                                <rect x="0" y="0" width="100%" height="100%" rx="4" fill="none" stroke="#f59e0b" stroke-width="3" stroke-dasharray="4 6" mask="url(#drawMask'.$index.')" />
                            </svg>
                        </div>

                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-blue-800 text-white text-sm font-bold w-10 h-10 rounded-full flex items-center justify-center border-4 border-white shadow-md z-30">'.$step['num'].'</div>
                        <div class="w-14 h-14 mx-auto rounded-full flex items-center justify-center text-xl mb-5 mt-2 relative z-30" style="animation: iconBg'.$index.' 10s linear infinite;">
                            <i class="fa-solid '.$step['icon'].'"></i>
                        </div>
                        <h3 class="text-lg font-bold mb-3 relative z-30" style="animation: textTitle'.$index.' 10s linear infinite;">'.$step['title'].'</h3>
                        <p class="text-sm leading-relaxed relative z-30" style="animation: textDesc'.$index.' 10s linear infinite;">'.$step['desc'].'</p>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-20 bg-slate-50 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-up">
            <span class="inline-block bg-blue-50 text-blue-800 text-xs font-bold px-4 py-2 rounded-sm uppercase tracking-widest mb-4 border-l-4 border-blue-700">Why Choose Us</span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900">The Hype Crews Advantage</h2>
            <div class="w-20 h-1 bg-amber-400 mx-auto mt-4 mb-6"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            $reasons = [
                ['icon' => 'fa-medal', 'title' => 'Uncompromising Quality', 'desc' => 'We build highly scalable, pixel-perfect, and modern digital solutions using the latest technology stacks tailored to your business goals.'],
                ['icon' => 'fa-indian-rupee-sign', 'title' => '100% Transparent Pricing', 'desc' => 'Detailed commercial proposals with clear cost breakdowns. No hidden costs, no last-minute surprises, just honest and upfront pricing.'],
                ['icon' => 'fa-clock', 'title' => 'SLA-Driven Delivery', 'desc' => 'Well-defined Service Level Agreements to ensure your project is delivered on time, every time, with regular progress reports.'],
                ['icon' => 'fa-file-code', 'title' => 'Complete IP Transfer', 'desc' => 'Full source code ownership and intellectual property rights are completely transferred to you upon project completion.'],
                ['icon' => 'fa-headset', 'title' => 'Dedicated Project Manager', 'desc' => 'A single point of contact throughout the project lifecycle. Regular review meetings and comprehensive handholding during go-live.'],
                ['icon' => 'fa-lock', 'title' => 'Enterprise-Grade Security', 'desc' => 'Security is built-in from day one. We follow OWASP best practices, perform regular code reviews, and ensure your user data is strictly protected.'],
            ];
            foreach ($reasons as $r) {
                echo '
                <div class="flex gap-4 p-6 rounded-sm border border-slate-200 hover:border-blue-300 hover:bg-blue-50/20 transition-all fade-up bg-white shadow-sm">
                    <div class="w-12 h-12 rounded-sm bg-blue-50 flex items-center justify-center text-blue-800 text-lg flex-shrink-0">
                        <i class="fa-solid '.$r['icon'].'"></i>
                    </div>
                    <div>
                        <h3 class="text-sm font-bold text-slate-900 mb-1">'.$r['title'].'</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">'.$r['desc'].'</p>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<style>
@keyframes gradient-border {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}
.flowing-border {
    background: linear-gradient(90deg, #3b82f6, #8b5cf6, #ec4899, #3b82f6);
    background-size: 300% 300%;
    animation: gradient-border 4s ease infinite;
}
.card-scale:hover {
    transform: scale(1.02);
}
</style>
<section class="py-24 bg-slate-50 border-t border-slate-200" id="pricing">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-up">
            <span class="inline-block bg-blue-50 text-blue-800 text-xs font-bold px-4 py-2 rounded-sm uppercase tracking-widest mb-4 border-l-4 border-blue-700">Rate Card</span>
            <h2 class="text-3xl md:text-5xl font-bold text-slate-900 leading-tight">Transparent, Value-Driven Pricing</h2>
            <div class="w-20 h-1 bg-amber-400 mx-auto mt-6 mb-6"></div>
            <p class="text-slate-600 text-lg">No hidden fees, no surprises. Choose the perfect plan tailored to accelerate your digital growth.</p>
            
            <div class="mt-8 inline-flex items-center gap-2 bg-white border border-slate-200 rounded-full px-5 py-2 shadow-sm">
                <span class="text-sm font-semibold text-slate-700">Currency:</span>
                <select class="currency-selector bg-transparent text-sm font-bold text-blue-800 cursor-pointer focus:outline-none ml-1">
                    <option value="INR">₹ INR</option>
                    <option value="USD">$ USD</option>
                    <option value="EUR">€ EUR</option>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 items-stretch mt-12 max-w-7xl mx-auto">
            
            <!-- Starter -->
            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden card-scale fade-up shadow-sm hover:shadow-xl transition-all duration-300 h-full flex flex-col">
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-slate-900">Starter Business</h3>
                    <p class="text-xs text-slate-500 mt-2">Perfect for startups & small businesses</p>
                    <div class="mt-4 flex items-center gap-2">
                        <span class="text-xl font-medium text-slate-400 line-through" data-price-inr="14999">₹14,999</span>
                        <span class="text-4xl font-black text-slate-900" data-price-inr="9999">₹9,999</span>
                    </div>
                    <div class="mt-2">
                        <span class="inline-block px-2.5 py-1 bg-emerald-50 text-emerald-700 text-xs font-bold rounded-sm border border-emerald-100">Save <span data-price-inr="5000">₹5,000</span></span>
                    </div>
                    <p class="text-xs text-slate-400 mt-1">One-time payment</p>
                    
                    <ul class="space-y-3 mt-6">
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700">Up to 5 Responsive Pages</span></li>
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700">Mobile-Friendly Design</span></li>
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700">Admin Dashboard</span></li>
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700">Contact Form</span></li>
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700">WhatsApp Integration</span></li>
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700">Google Maps Integration</span></li>
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700">Social Media Integration</span></li>
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700">Basic SEO Setup</span></li>
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700">SSL Configuration</span></li>
                    </ul>
                    <a href="#contact" class="mt-auto block w-full text-center py-3 text-sm font-semibold rounded-xl border border-slate-300 text-slate-700 hover:bg-slate-50 transition-all">Get Started</a>
                </div>
            </div>

            <!-- Growth -->
            <div class="relative bg-white rounded-2xl border border-slate-200 card-scale fade-up shadow-sm hover:shadow-xl transition-all duration-300 h-full flex flex-col">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-emerald-500 to-teal-600 text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full shadow-md z-20 whitespace-nowrap">Recommended</div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-slate-900">Growth Plan</h3>
                    <p class="text-xs text-slate-500 mt-2">For growing businesses</p>
                    <div class="mt-4 flex items-center gap-2">
                        <span class="text-xl font-medium text-slate-400 line-through" data-price-inr="34999">₹34,999</span>
                        <span class="text-4xl font-black text-slate-900" data-price-inr="24999">₹24,999</span>
                    </div>
                    <div class="mt-2">
                        <span class="inline-block px-2.5 py-1 bg-emerald-50 text-emerald-700 text-xs font-bold rounded-sm border border-emerald-100">Save <span data-price-inr="10000">₹10,000</span></span>
                    </div>
                    <p class="text-xs text-slate-400 mt-1">One-time payment</p>
                    
                    <ul class="space-y-3 mt-6">
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700 font-medium">Up to 10 Premium Pages</span></li>
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700">Premium Responsive Design</span></li>
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700">Advanced Admin Dashboard</span></li>
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700">Blog Management</span></li>
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700">Appointment Booking</span></li>
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700">Payment Gateway</span></li>
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700">SEO Optimization</span></li>
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700">Analytics Integration</span></li>
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700">Priority Support (30 Days)</span></li>
                    </ul>
                    <a href="#contact" class="mt-8 block w-full text-center py-3 text-sm font-semibold rounded-xl border border-slate-300 text-slate-700 hover:bg-slate-50 transition-all">Get Started</a>
                </div>
            </div>

            <!-- Enterprise -->
            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden card-scale fade-up shadow-sm hover:shadow-xl transition-all duration-300 h-full flex flex-col">
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-slate-900">Enterprise</h3>
                    <p class="text-xs text-slate-500 mt-2">For established brands & companies</p>
                    <div class="mt-4 flex items-center gap-2">
                        <span class="text-xl font-medium text-slate-400 line-through" data-price-inr="74999">₹74,999</span>
                        <span class="text-4xl font-black text-slate-900" data-price-inr="49999">₹49,999</span>
                    </div>
                    <div class="mt-2">
                        <span class="inline-block px-2.5 py-1 bg-amber-50 text-amber-700 text-[11px] font-bold rounded-sm border border-amber-100">Save <span data-price-inr="25000">₹25,000</span> &ndash; the largest saving on this page</span>
                    </div>
                    <p class="text-xs text-slate-400 mt-1">One-time payment</p>
                    
                    <ul class="space-y-3 mt-6">
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700 font-medium">Up to 25 Premium Pages</span></li>
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700">Premium UI/UX Design</span></li>
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700">Enterprise Admin Panel</span></li>
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700">E-Commerce Integration</span></li>
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700">Multi-User Management</span></li>
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700">Advanced SEO Optimization</span></li>
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700">Performance Optimization</span></li>
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700">Security & Backup</span></li>
                        <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-green-500 mt-1 text-sm"></i><span class="text-sm text-slate-700">Priority Support (90 Days)</span></li>
                    </ul>
                    <a href="#contact" class="mt-auto block w-full text-center py-3 text-sm font-semibold rounded-xl border border-slate-300 text-slate-700 hover:bg-slate-50 transition-all">Choose Plan</a>
                </div>
            </div>

            <!-- Custom Solution (Featured / Mesmerizing Loop) -->
            <div class="relative flowing-border rounded-2xl p-[3px] fade-up shadow-[0_0_40px_rgba(59,130,246,0.3)] transform lg:scale-105 z-10 card-scale transition-all duration-300 h-full flex flex-col">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-blue-600 to-purple-600 text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full shadow-lg z-20 animate-pulse whitespace-nowrap">Most Popular</div>
                <div class="bg-slate-900 rounded-[13px] h-full overflow-hidden relative flex flex-col flex-grow">
                    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-blue-900/20 to-transparent pointer-events-none"></div>
                    
                    <div class="p-6 relative z-10 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-white">Custom Solution</h3>
                        <p class="text-xs text-slate-400 mt-2">Tailored to your business needs</p>
                        <div class="mt-4 flex items-baseline gap-1">
                            <span class="text-2xl font-black text-white">Fully Customized</span>
                        </div>
                        <p class="text-xs text-slate-400 mt-1">Contact Us</p>
                        
                        <ul class="space-y-3 mt-6 mb-8">
                            <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-blue-400 mt-1 text-sm"></i><span class="text-sm text-slate-200 font-medium">Fully custom architecture</span></li>
                            <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-blue-400 mt-1 text-sm"></i><span class="text-sm text-slate-200">Custom Dashboard</span></li>
                            <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-blue-400 mt-1 text-sm"></i><span class="text-sm text-slate-200">CRM / ERP Development</span></li>
                            <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-blue-400 mt-1 text-sm"></i><span class="text-sm text-slate-200">Advanced API integrations</span></li>
                            <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-blue-400 mt-1 text-sm"></i><span class="text-sm text-slate-200">Multi-tenant architecture</span></li>
                            <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-blue-400 mt-1 text-sm"></i><span class="text-sm text-slate-200">AWS / cloud deployment</span></li>
                            <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-blue-400 mt-1 text-sm"></i><span class="text-sm text-slate-200">Mobile App Integration</span></li>
                            <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-blue-400 mt-1 text-sm"></i><span class="text-sm text-slate-200">Dedicated Technical Support</span></li>
                            <li class="flex items-start gap-2"><i class="fa-solid fa-circle-check text-blue-400 mt-1 text-sm"></i><span class="text-sm text-slate-200">24/7 SLA support</span></li>
                        </ul>
                        <a href="#contact" class="mt-auto block w-full text-center py-3 text-sm font-semibold rounded-xl text-white bg-blue-600 hover:bg-blue-500 transition-all shadow-lg btn-shine">Contact Sales</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Trust Bar -->
        <div class="mt-10 max-w-5xl mx-auto bg-white border border-slate-200 rounded-xl p-4 md:p-6 shadow-sm fade-up flex flex-col md:flex-row items-center justify-center gap-6 md:gap-12">
            <div class="flex items-center gap-3 text-slate-700">
                <i class="fa-solid fa-shield-halved text-emerald-600 text-xl"></i>
                <span class="text-sm font-medium">100% Transparent Process</span>
            </div>
            <div class="flex items-center gap-3 text-slate-700">
                <i class="fa-solid fa-lock text-amber-600 text-xl"></i>
                <span class="text-sm font-medium">Secure payments, GST invoice</span>
            </div>
            <div class="flex items-center gap-3 text-slate-700">
                <i class="fa-regular fa-clock text-blue-600 text-xl"></i>
                <span class="text-sm font-medium">Kickoff call within 48 hours</span>
            </div>
        </div>

        <!-- Budget-based Custom Plans -->
        <div class="mt-20">
            <div class="text-center mb-10 fade-up">
                <h3 class="text-2xl md:text-3xl font-bold text-slate-900">Customized For Every Budget</h3>
                <p class="text-slate-600 mt-2">Specialized custom web development plans tailored to your specific budget range.</p>
                <div class="mt-6 inline-flex items-center gap-2 bg-white border border-slate-200 rounded-full px-5 py-2 shadow-sm">
                    <span class="text-sm font-semibold text-slate-700">Currency:</span>
                    <select class="currency-selector bg-transparent text-sm font-bold text-blue-800 cursor-pointer focus:outline-none ml-1">
                        <option value="INR">₹ INR</option>
                        <option value="USD">$ USD</option>
                        <option value="EUR">€ EUR</option>
                    </select>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
                <!-- Under 15k -->
                <div class="bg-white rounded-2xl border border-slate-200 p-8 card-scale fade-up shadow-sm hover:shadow-lg transition-all text-center">
                    <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900">For Individuals</h4>
                    <p class="text-xs text-slate-500 mt-1 uppercase tracking-wider font-semibold">Low Budget Customized</p>
                    <div class="my-5 text-2xl font-black text-blue-600">Under <span data-price-inr="15000">₹15,000</span></div>
                    <p class="text-sm text-slate-600 leading-relaxed">Perfect for portfolios, freelancers, and personal brands needing a professional online presence without breaking the bank.</p>
                    <a href="#contact" class="mt-6 inline-block text-sm font-bold text-blue-600 hover:text-blue-800 transition-colors">Get a Quote <i class="fa-solid fa-arrow-right ml-1 text-xs"></i></a>
                </div>

                <!-- 25k - 50k -->
                <div class="bg-white rounded-2xl border border-slate-200 p-8 card-scale fade-up shadow-sm hover:shadow-lg transition-all text-center">
                    <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">
                        <i class="fa-solid fa-store"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900">For Startups</h4>
                    <p class="text-xs text-slate-500 mt-1 uppercase tracking-wider font-semibold">Mid-Tier Customized</p>
                    <div class="my-5 text-2xl font-black text-emerald-600"><span data-price-inr="25000">₹25,000</span> - <span data-price-inr="50000">₹50,000</span></div>
                    <p class="text-sm text-slate-600 leading-relaxed">Ideal for small businesses and growing startups looking for custom functionalities, CMS, and dynamic content.</p>
                    <a href="#contact" class="mt-6 inline-block text-sm font-bold text-emerald-600 hover:text-emerald-800 transition-colors">Get a Quote <i class="fa-solid fa-arrow-right ml-1 text-xs"></i></a>
                </div>

                <!-- 50k - 1.5L -->
                <div class="bg-white rounded-2xl border border-slate-200 p-8 card-scale fade-up shadow-sm hover:shadow-lg transition-all text-center relative overflow-hidden">
                    <div class="absolute -right-6 -top-6 w-24 h-24 bg-purple-50 rounded-full z-0 opacity-50"></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-purple-50 text-purple-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">
                            <i class="fa-solid fa-building"></i>
                        </div>
                        <h4 class="text-xl font-bold text-slate-900">For Enterprises</h4>
                        <p class="text-xs text-slate-500 mt-1 uppercase tracking-wider font-semibold">High-End Platforms</p>
                        <div class="my-5 text-2xl font-black text-purple-600"><span data-price-inr="50000">₹50,000</span> - <span data-price-inr="150000">₹1,50,000</span></div>
                        <p class="text-sm text-slate-600 leading-relaxed">Comprehensive custom development for large-scale web apps, extensive e-commerce, and heavy API integrations.</p>
                        <a href="#contact" class="mt-6 inline-block text-sm font-bold text-purple-600 hover:text-purple-800 transition-colors">Get a Quote <i class="fa-solid fa-arrow-right ml-1 text-xs"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-16 text-center fade-up">
            <p class="text-sm text-slate-500">All prices exclusive of GST. Domain, hosting, and third-party API charges separate. <a href="refund-policy.php" class="text-blue-700 hover:underline font-semibold">Refund Policy</a>.</p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-24 bg-slate-50 border-t border-slate-200" id="contact">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 fade-up">
            <span class="inline-block bg-blue-50 text-blue-800 text-xs font-bold px-4 py-2 rounded-sm uppercase tracking-widest mb-4 border-l-4 border-blue-700">Get In Touch</span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Let's Discuss Your Project</h2>
            <div class="w-20 h-1 bg-amber-400 mx-auto mt-4 mb-6"></div>
            <p class="text-slate-600">Have a project in mind? Use the form below or email us directly. Our team will get back to you within 24 hours.</p>
        </div>

        <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xl fade-up">
            <div class="grid grid-cols-1 lg:grid-cols-5">
                <div class="lg:col-span-2 bg-slate-900 text-white p-10">
                    <h3 class="text-2xl font-bold mb-2">The Hype Crews</h3>
                    <p class="text-slate-400 text-sm mb-10">Premium Web & App Development Agency</p>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <i class="fa-solid fa-envelope text-blue-500 mt-1 text-xl"></i>
                            <div>
                                <div class="text-xs text-slate-400 uppercase tracking-wider font-semibold">Email Us</div>
                                <div class="text-base font-medium mt-1">support@hypecrews.com</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <i class="fa-solid fa-phone text-blue-500 mt-1 text-xl"></i>
                            <div>
                                <div class="text-xs text-slate-400 uppercase tracking-wider font-semibold">Call Us</div>
                                <div class="text-base font-medium mt-1">+91 361 324 3276</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <i class="fa-solid fa-clock text-blue-500 mt-1 text-xl"></i>
                            <div>
                                <div class="text-xs text-slate-400 uppercase tracking-wider font-semibold">Business Hours</div>
                                <div class="text-base font-medium mt-1">Mon – Sat, 10 AM – 7 PM IST</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <i class="fa-solid fa-location-dot text-blue-500 mt-1 text-xl"></i>
                            <div>
                                <div class="text-xs text-slate-400 uppercase tracking-wider font-semibold">Headquarters</div>
                                <div class="text-base font-medium mt-1">Golaghat, Assam, 785621, India</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-3 p-10">
                    <div id="form-message" class="hidden mb-4 p-3 rounded-sm text-sm font-medium"></div>
                    <form id="contact-form" class="space-y-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-semibold text-slate-700 mb-1.5">Full Name <span class="text-red-500">*</span></label>
                                <input type="text" name="name" id="name" required placeholder="John Doe" class="block w-full rounded-xl border-slate-300 shadow-sm focus:border-blue-600 focus:ring-blue-600 text-sm px-4 py-3 border bg-slate-50">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-semibold text-slate-700 mb-1.5">Work Email <span class="text-red-500">*</span></label>
                                <input type="email" name="email" id="email" required placeholder="john@company.com" class="block w-full rounded-xl border-slate-300 shadow-sm focus:border-blue-600 focus:ring-blue-600 text-sm px-4 py-3 border bg-slate-50">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-slate-700 mb-1.5">Phone Number <span class="text-red-500">*</span></label>
                                <input type="tel" name="phone" id="phone" required class="block w-full rounded-xl border-slate-300 shadow-sm focus:border-blue-600 focus:ring-blue-600 text-sm px-4 py-3 border bg-slate-50">
                            </div>
                            <div>
                                <label for="service" class="block text-sm font-semibold text-slate-700 mb-1.5">Interested In <span class="text-red-500">*</span></label>
                                <select id="service" name="service" required class="block w-full rounded-xl border-slate-300 shadow-sm focus:border-blue-600 focus:ring-blue-600 text-sm px-4 py-3 border bg-slate-50">
                                    <option value="">Select an option</option>
                                    <option value="Starter Business" data-price-inr="9999" data-base-text="Starter Business">Starter Business (₹9,999)</option>
                                    <option value="Growth Plan" data-price-inr="24999" data-base-text="Growth Plan">Growth Plan (₹24,999)</option>
                                    <option value="Enterprise" data-price-inr="49999" data-base-text="Enterprise">Enterprise (₹49,999)</option>
                                    <option value="Custom Solution">Custom Solution</option>
                                    <option value="For Individuals">Custom: Individuals (Under ₹15k)</option>
                                    <option value="For Startups">Custom: Startups (₹25k - ₹50k)</option>
                                    <option value="For Enterprises">Custom: Enterprises (₹50k - ₹1.5L)</option>
                                    <option value="General Inquiry">General Inquiry</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-semibold text-slate-700 mb-1.5">Project Details <span class="text-red-500">*</span></label>
                            <textarea id="message" name="message" rows="4" required placeholder="Tell us about your project goals, timeline, and any specific requirements..." class="block w-full rounded-xl border-slate-300 shadow-sm focus:border-blue-600 focus:ring-blue-600 text-sm px-4 py-3 border bg-slate-50"></textarea>
                        </div>
                        <div>
                            <label for="captcha-answer" class="block text-sm font-semibold text-slate-700 mb-1.5">Security Check: What is <span id="captcha-question" class="font-black text-blue-600 tracking-wider"></span>? <span class="text-red-500">*</span></label>
                            <input type="number" id="captcha-answer" required placeholder="Enter the sum" class="block w-full rounded-xl border-slate-300 shadow-sm focus:border-blue-600 focus:ring-blue-600 text-sm px-4 py-3 border bg-slate-50">
                        </div>
                        <button type="submit" class="w-full flex justify-center items-center gap-2 py-4 px-6 rounded-xl shadow-lg text-sm font-bold text-white bg-blue-600 hover:bg-blue-700 transition-all duration-200 card-scale">
                            <i class="fa-solid fa-paper-plane"></i> Send Message
                        </button>
                        <p class="text-xs text-slate-500 text-center mt-3">By submitting, you agree to our <a href="terms.php" class="text-blue-700 hover:underline">Terms of Service</a> and <a href="privacy-policy.php" class="text-blue-700 hover:underline">Privacy Policy</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Optimized Hero Animation Styles */
    @keyframes heroFloat {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
    }
    
    @keyframes scanLine {
        0% { left: -100%; }
        100% { left: 200%; }
    }
    
    .animate-hero-float {
        animation: heroFloat 6s cubic-bezier(0.25, 0.46, 0.45, 0.94) infinite;
        will-change: transform;
    }
    
    .animate-scan-line {
        animation: scanLine 3s linear infinite;
        will-change: left;
    }
    
    /* General animations */
    .fade-up {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeUp 0.8s ease-out forwards;
    }
    
    @keyframes fadeUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .card-hover {
        transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
    
    /* Smooth scrolling */
    html {
        scroll-behavior: smooth;
    }
</style>

<!-- Intl Tel Input JS -->
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>

<script>
    // Initialize intl-tel-input on the phone field
    const phoneInput = document.querySelector("#phone");
    const iti = window.intlTelInput(phoneInput, {
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

    let captchaExpected = 0;
    function generateCaptcha() {
        const num1 = Math.floor(Math.random() * 10) + 1;
        const num2 = Math.floor(Math.random() * 10) + 1;
        captchaExpected = num1 + num2;
        document.getElementById('captcha-question').innerText = num1 + ' + ' + num2;
        document.getElementById('captcha-answer').value = '';
    }
    
    // Initialize captcha immediately
    generateCaptcha();

    document.getElementById('contact-form').addEventListener('submit', async function(e) {
        e.preventDefault();
        const form = e.target;
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalBtnText = submitBtn.innerHTML;
        const msgDiv = document.getElementById('form-message');
        
        const captchaAnswer = parseInt(document.getElementById('captcha-answer').value);
        if (captchaAnswer !== captchaExpected) {
            msgDiv.classList.remove('hidden', 'bg-emerald-50', 'text-emerald-800');
            msgDiv.classList.add('bg-red-50', 'text-red-800');
            msgDiv.innerText = 'Incorrect security check answer. Please try again.';
            generateCaptcha();
            return;
        }
        const name = form.querySelector('#name').value;
        const email = form.querySelector('#email').value;
        const phone = iti.isValidNumber() ? iti.getNumber() : form.querySelector('#phone').value;
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
</script>

<script>
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
</script>

<?php include 'components/footer.php'; ?>