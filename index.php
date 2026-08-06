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
                Our service portfolio covers the complete digital transformation lifecycle, designed to meet government and enterprise standards.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            <?php
            $services = [
                [
                    'img' => 'images/service-webdev.jpg',
                    'icon' => 'fa-globe',
                    'title' => 'Official Website Development',
                    'desc' => 'GIGW-compliant, accessible, and secure websites for government departments, ministries, and public sector units. Includes bilingual support, screen reader compatibility, and high-contrast modes.',
                ],
                [
                    'img' => 'images/service-ecommerce.jpg',
                    'icon' => 'fa-cart-shopping',
                    'title' => 'GeM Integration & E-Commerce',
                    'desc' => 'Government e-Marketplace (GeM) integrated procurement platforms. Secure payment gateways with UPI, RuPay, and NetBanking. Complete audit trail and compliance reporting.',
                ],
                [
                    'img' => 'images/service-webapp.jpg',
                    'icon' => 'fa-laptop-code',
                    'title' => 'Custom Web Applications',
                    'desc' => 'Scalable CRM, ERP, HRMS, and workflow automation systems built with security-first architecture. Role-based access control, detailed audit logs, and data encryption at rest.',
                ],
                [
                    'img' => 'images/service-mobile.jpg',
                    'icon' => 'fa-mobile-screen',
                    'title' => 'Mobile Governance Apps',
                    'desc' => 'Citizen-centric mobile applications for Android and iOS. Aadhaar integration, DigiLocker connectivity, UMANG app compatibility, and offline-first architecture for rural areas.',
                ],
                [
                    'img' => 'images/service-uiux.jpg',
                    'icon' => 'fa-pen-nib',
                    'title' => 'Accessible UI/UX Design',
                    'desc' => 'WCAG 2.1 Level AA compliant interface design. User research with diverse demographics, usability testing with assistive technologies, and inclusive design principles.',
                ],
                [
                    'img' => 'images/service-admin.jpg',
                    'icon' => 'fa-gauge-high',
                    'title' => 'Admin Dashboard & MIS',
                    'desc' => 'Management Information Systems with real-time analytics, automated report generation, data visualization dashboards, and role-based access for hierarchical government structures.',
                ],
                [
                    'img' => 'images/service-api.jpg',
                    'icon' => 'fa-plug',
                    'title' => 'API Integration & Interoperability',
                    'desc' => 'Secure API gateways for government systems. Integration with DigiLocker, UMANG, Aadhaar, e-Sign, e-Hastakshar, and other National e-Governance Plan (NeGP) initiatives.',
                ],
                [
                    'img' => 'images/service-maintenance.jpg',
                    'icon' => 'fa-screwdriver-wrench',
                    'title' => 'O&M Support Services',
                    'desc' => 'Comprehensive Operations & Maintenance with defined SLAs. Regular security audits, vulnerability assessments, performance optimization, and 24x7 monitoring with incident response.',
                ],
                [
                    'img' => 'images/service-seo.jpg',
                    'icon' => 'fa-magnifying-glass-chart',
                    'title' => 'SEO & Digital Presence',
                    'desc' => 'Technical SEO optimization ensuring high visibility on search engines. Structured data markup for government schema, XML sitemaps, and compliance with GOI website guidelines.',
                ],
                [
                    'img' => 'images/service-cloud.jpg',
                    'icon' => 'fa-cloud',
                    'title' => 'Cloud & Data Centre Services',
                    'desc' => 'Deployment on MeitY-empanelled cloud service providers. NIC cloud, AWS GovCloud, or on-premise data center setup with complete security hardening and disaster recovery.',
                ],
                [
                    'img' => 'images/service-ai.jpg',
                    'icon' => 'fa-robot',
                    'title' => 'AI & Emerging Technologies',
                    'desc' => 'AI-powered citizen service portals with multilingual chatbots, document verification using OCR, predictive analytics for policy planning, and intelligent automation of routine government processes.',
                ],
                [
                    'img' => 'images/service-security.jpg',
                    'icon' => 'fa-shield-halved',
                    'title' => 'Cybersecurity Services',
                    'desc' => 'CERT-In empanelled security auditing. Vulnerability assessment, penetration testing, security code review, and implementation of security controls as per NCIIPC guidelines.',
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
                ['num' => '03', 'icon' => 'fa-pencil-ruler', 'title' => 'Design & Prototyping', 'desc' => 'Creation of wireframes, high-fidelity mockups with accessibility compliance. Stakeholder review and formal sign-off process.'],
                ['num' => '04', 'icon' => 'fa-code', 'title' => 'Secure Development', 'desc' => 'Development with OWASP top 10 mitigation. Regular code reviews, static analysis, and security testing integrated into CI/CD pipeline.'],
                ['num' => '05', 'icon' => 'fa-rocket', 'title' => 'UAT, Deployment & Handover', 'desc' => 'User Acceptance Testing with formal sign-off. Secure deployment with complete documentation, training manuals, and source code handover.'],
            ];
            foreach ($steps as $index => $step) {
                // Determine line visibility based on breakpoints
                // md: 2 columns -> hide on index 1, 3, 4
                // lg: 3 columns -> hide on index 2, 4
                $line_classes = "hidden absolute top-1/2 left-1/2 w-[calc(100%+2rem)] h-[3px] bg-slate-100 -translate-y-1/2 overflow-hidden ";
                
                if ($index == 0) $line_classes .= "md:block lg:block";
                elseif ($index == 1) $line_classes .= "md:hidden lg:block";
                elseif ($index == 2) $line_classes .= "md:block lg:hidden";
                elseif ($index == 3) $line_classes .= "md:hidden lg:block";
                
                echo '
                <div class="w-full md:w-[calc(50%-1rem)] lg:w-[calc(33.333%-1.5rem)] max-w-md relative">';
                
                if ($index < 4) {
                    echo '
                    <!-- Animated Beam Connector -->
                    <div class="'.$line_classes.' z-0">
                        <div class="h-full w-1/3 bg-gradient-to-r from-transparent via-amber-400 to-transparent animate-slide-right"></div>
                    </div>';
                }

                echo '
                    <!-- Card Body -->
                    <div class="bg-white rounded-sm border border-slate-200 p-8 text-center card-hover fade-up shadow-sm h-full relative z-10">
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-blue-800 text-white text-sm font-bold w-10 h-10 rounded-full flex items-center justify-center border-4 border-white shadow-md">'.$step['num'].'</div>
                        <div class="w-14 h-14 mx-auto rounded-full bg-blue-50 flex items-center justify-center text-blue-800 text-xl mb-5 mt-2">
                            <i class="fa-solid '.$step['icon'].'"></i>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 mb-3">'.$step['title'].'</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">'.$step['desc'].'</p>
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
                ['icon' => 'fa-medal', 'title' => 'Government Empanelment Ready', 'desc' => 'Our processes, documentation, and security posture meet requirements for government empanelment and tenders. We assist in the entire procurement process.'],
                ['icon' => 'fa-indian-rupee-sign', 'title' => 'Transparent Procurement', 'desc' => 'Detailed commercial proposals with clear cost breakdowns. No hidden costs. Compliant with GFR and procurement guidelines for government contracts.'],
                ['icon' => 'fa-clock', 'title' => 'SLA-Driven Delivery', 'desc' => 'Well-defined Service Level Agreements with penalty clauses for delays. Regular progress reports and milestone-based payments.'],
                ['icon' => 'fa-file-code', 'title' => 'Complete IP Transfer', 'desc' => 'Full source code ownership and intellectual property rights transferred to the client upon project completion and final payment.'],
                ['icon' => 'fa-headset', 'title' => 'Dedicated Project Manager', 'desc' => 'Single point of contact throughout the project lifecycle. Regular review meetings and comprehensive handholding during go-live.'],
                ['icon' => 'fa-lock', 'title' => 'CERT-In Compliant Security', 'desc' => 'Security practices aligned with CERT-In guidelines. Regular VAPT, security code review, and implementation of NCIIPC security controls.'],
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
<section class="py-24 bg-white border-t border-slate-200" id="pricing">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-up">
            <span class="inline-block bg-blue-50 text-blue-800 text-xs font-bold px-4 py-2 rounded-sm uppercase tracking-widest mb-4 border-l-4 border-blue-700">Rate Card</span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Transparent Pricing Structure</h2>
            <div class="w-20 h-1 bg-amber-400 mx-auto mt-4 mb-6"></div>
            <p class="text-slate-600">All prices indicative. Final pricing based on detailed scope of work and service level requirements.</p>
            
            <div class="mt-6 inline-flex items-center gap-2 bg-slate-50 border border-slate-200 rounded-sm px-4 py-2 shadow-sm">
                <span class="text-sm font-semibold text-slate-700">Currency:</span>
                <select class="currency-selector bg-transparent text-sm font-bold text-blue-800 cursor-pointer focus:outline-none ml-1">
                    <option value="INR">₹ INR</option>
                    <option value="USD">$ USD</option>
                    <option value="EUR">€ EUR</option>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start mt-12">
            
            <!-- Starter -->
            <div class="bg-white rounded-sm border border-slate-200 overflow-hidden card-hover fade-up shadow-sm hover:shadow-md transition-all">
                <div class="p-8 border-b border-slate-100 bg-slate-50">
                    <h3 class="text-xl font-bold text-slate-900">Basic Website</h3>
                    <p class="text-sm text-slate-500 mt-2">For small departments & local bodies</p>
                    <div class="mt-6 flex items-baseline gap-1">
                        <span class="text-4xl font-black text-slate-900" data-price-inr="9999">₹9,999</span>
                        <span class="text-sm font-medium text-slate-500">onwards</span>
                    </div>
                </div>
                <div class="p-8">
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-700 mt-1 text-sm"></i><span class="text-sm text-slate-700">Up to 5 pages GIGW compliant</span></li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-700 mt-1 text-sm"></i><span class="text-sm text-slate-700">Basic accessibility features</span></li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-700 mt-1 text-sm"></i><span class="text-sm text-slate-700">Contact form with captcha</span></li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-700 mt-1 text-sm"></i><span class="text-sm text-slate-700">Free SSL certificate</span></li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-700 mt-1 text-sm"></i><span class="text-sm text-slate-700">7 days support</span></li>
                    </ul>
                    <a href="#contact" class="mt-8 block w-full text-center py-3 text-sm font-semibold rounded-sm border-2 border-slate-300 text-slate-700 hover:bg-slate-50 transition-all">Submit Inquiry</a>
                </div>
            </div>

            <!-- Enterprise (Featured) -->
            <div class="bg-white rounded-sm border-2 border-blue-800 overflow-hidden card-hover fade-up relative shadow-xl lg:-mt-4 lg:mb-4 transform lg:scale-105 z-10">
                <div class="bg-blue-800 text-white text-center py-2 text-xs font-bold uppercase tracking-widest">Recommended for Government</div>
                <div class="p-8 border-b border-slate-100 bg-blue-50/20">
                    <h3 class="text-xl font-bold text-slate-900">Enterprise Solution</h3>
                    <p class="text-sm text-slate-500 mt-2">For ministries & public sector units</p>
                    <div class="mt-6 flex items-baseline gap-1">
                        <span class="text-4xl font-black text-slate-900" data-price-inr="29999">₹29,999</span>
                        <span class="text-sm font-medium text-slate-500">onwards</span>
                    </div>
                </div>
                <div class="p-8">
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-700 mt-1 text-sm"></i><span class="text-sm text-slate-700 font-semibold">Up to 15 pages premium design</span></li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-700 mt-1 text-sm"></i><span class="text-sm text-slate-700">Advanced admin with analytics</span></li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-700 mt-1 text-sm"></i><span class="text-sm text-slate-700">Document management system</span></li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-700 mt-1 text-sm"></i><span class="text-sm text-slate-700">RTI / Grievance portal</span></li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-700 mt-1 text-sm"></i><span class="text-sm text-slate-700">Payment gateway integration</span></li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-700 mt-1 text-sm"></i><span class="text-sm text-slate-700">Security audit & VAPT</span></li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-700 mt-1 text-sm"></i><span class="text-sm text-slate-700">30 days priority support</span></li>
                    </ul>
                    <a href="#contact" class="mt-8 block w-full text-center py-3 text-sm font-semibold rounded-sm text-white bg-blue-800 hover:bg-blue-900 transition-all shadow-md">Submit Official Inquiry</a>
                </div>
            </div>

            <!-- Custom -->
            <div class="bg-white rounded-sm border border-slate-200 overflow-hidden card-hover fade-up shadow-sm hover:shadow-md transition-all">
                <div class="p-8 border-b border-slate-100 bg-slate-50">
                    <h3 class="text-xl font-bold text-slate-900">Custom Tender</h3>
                    <p class="text-sm text-slate-500 mt-2">For large scale projects & NIC/SDI</p>
                    <div class="mt-6 flex items-baseline gap-1">
                        <span class="text-4xl font-black text-slate-900">Custom</span>
                        <span class="text-sm font-medium text-slate-500">bidding</span>
                    </div>
                </div>
                <div class="p-8">
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-700 mt-1 text-sm"></i><span class="text-sm text-slate-700">Fully custom application</span></li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-700 mt-1 text-sm"></i><span class="text-sm text-slate-700">NIC cloud / SDI deployment</span></li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-700 mt-1 text-sm"></i><span class="text-sm text-slate-700">Aadhaar / DigiLocker integration</span></li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-700 mt-1 text-sm"></i><span class="text-sm text-slate-700">Multi-tenant architecture</span></li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-700 mt-1 text-sm"></i><span class="text-sm text-slate-700">GeM / CPP portal integration</span></li>
                        <li class="flex items-start gap-3"><i class="fa-solid fa-check text-blue-700 mt-1 text-sm"></i><span class="text-sm text-slate-700">Dedicated team & SLA</span></li>
                    </ul>
                    <a href="#contact" class="mt-8 block w-full text-center py-3 text-sm font-semibold rounded-sm border-2 border-slate-300 text-slate-700 hover:bg-slate-50 transition-all">Request for Proposal</a>
                </div>
            </div>

        </div>
        <div class="mt-10 text-center fade-up">
            <p class="text-sm text-slate-500">All prices exclusive of GST. Domain, hosting, and SSL charges separate. <a href="refund-policy.php" class="text-blue-700 hover:underline font-semibold">Refund & Cancellation Policy</a>.</p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-24 bg-slate-50 border-t border-slate-200" id="contact">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12 fade-up">
            <span class="inline-block bg-blue-50 text-blue-800 text-xs font-bold px-4 py-2 rounded-sm uppercase tracking-widest mb-4 border-l-4 border-blue-700">Official Communication</span>
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Submit Your Inquiry</h2>
            <div class="w-20 h-1 bg-amber-400 mx-auto mt-4 mb-6"></div>
            <p class="text-slate-600">For official communications, please use the form below or email us directly. Response within 24 working hours.</p>
        </div>

        <div class="bg-white rounded-sm border border-slate-200 overflow-hidden shadow-md fade-up">
            <div class="grid grid-cols-1 lg:grid-cols-5">
                <div class="lg:col-span-2 bg-slate-900 text-white p-8">
                    <h3 class="text-xl font-bold mb-2">Office of The Hype Crews</h3>
                    <p class="text-slate-400 text-sm mb-8">Private Limited Company (CIN: U73100AS2026PTC029838)</p>
                    <div class="space-y-5">
                        <div class="flex items-start gap-3">
                            <i class="fa-solid fa-envelope text-amber-400 mt-0.5"></i>
                            <div>
                                <div class="text-xs text-slate-400">Official Email</div>
                                <div class="text-sm font-medium">support@hypecrews.com</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fa-solid fa-phone text-amber-400 mt-0.5"></i>
                            <div>
                                <div class="text-xs text-slate-400">Office Landline</div>
                                <div class="text-sm font-medium">+91 361 324 3276</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fa-solid fa-clock text-amber-400 mt-0.5"></i>
                            <div>
                                <div class="text-xs text-slate-400">Office Hours</div>
                                <div class="text-sm font-medium">Mon – Sat, 10 AM – 7 PM IST</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <i class="fa-solid fa-location-dot text-amber-400 mt-0.5"></i>
                            <div>
                                <div class="text-xs text-slate-400">Registered Office</div>
                                <div class="text-sm font-medium">Golaghat, Assam, 785621, India</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-3 p-8">
                    <div id="form-message" class="hidden mb-4 p-3 rounded-sm text-sm font-medium"></div>
                    <form id="contact-form" class="space-y-5">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="name" class="block text-sm font-semibold text-slate-700 mb-1">Full Name <span class="text-red-500">*</span></label>
                                <input type="text" name="name" id="name" required placeholder="Your full name" class="block w-full rounded-sm border-slate-300 shadow-sm focus:border-blue-700 focus:ring-blue-700 text-sm px-4 py-2.5 border">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-semibold text-slate-700 mb-1">Official Email <span class="text-red-500">*</span></label>
                                <input type="email" name="email" id="email" required placeholder="your@department.gov.in" class="block w-full rounded-sm border-slate-300 shadow-sm focus:border-blue-700 focus:ring-blue-700 text-sm px-4 py-2.5 border">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-slate-700 mb-1">Contact Number</label>
                                <input type="tel" name="phone" id="phone" placeholder="+91 XXXXX XXXXX" class="block w-full rounded-sm border-slate-300 shadow-sm focus:border-blue-700 focus:ring-blue-700 text-sm px-4 py-2.5 border">
                            </div>
                            <div>
                                <label for="service" class="block text-sm font-semibold text-slate-700 mb-1">Service Required <span class="text-red-500">*</span></label>
                                <select id="service" name="service" required class="block w-full rounded-sm border-slate-300 shadow-sm focus:border-blue-700 focus:ring-blue-700 text-sm px-4 py-2.5 border bg-white">
                                    <option value="">Select service</option>
                                    <option value="Basic Website">Basic Website (₹9,999 onwards)</option>
                                    <option value="Enterprise Solution">Enterprise Solution (₹29,999 onwards)</option>
                                    <option value="Custom Tender">Custom Tender / RFP</option>
                                    <option value="E-Commerce">E-Commerce / GeM Integration</option>
                                    <option value="Mobile App">Mobile Governance App</option>
                                    <option value="Other">Other Query</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-semibold text-slate-700 mb-1">Project Details <span class="text-red-500">*</span></label>
                            <textarea id="message" name="message" rows="4" required placeholder="Please describe your requirements, department name, expected timeline, and any compliance needs..." class="block w-full rounded-sm border-slate-300 shadow-sm focus:border-blue-700 focus:ring-blue-700 text-sm px-4 py-2.5 border"></textarea>
                        </div>
                        <button type="submit" class="w-full flex justify-center items-center gap-2 py-3 px-6 rounded-sm shadow-sm text-sm font-semibold text-white bg-blue-800 hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 transition-colors">
                            <i class="fa-solid fa-paper-plane"></i> Submit Official Inquiry
                        </button>
                        <p class="text-xs text-slate-500 text-center mt-2">By submitting, you agree to our <a href="terms.php" class="text-blue-700 hover:underline">Terms of Service</a> and <a href="privacy-policy.php" class="text-blue-700 hover:underline">Privacy Policy</a>.</p>
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

<script>
    document.getElementById('contact-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const form = e.target;
        const name = form.querySelector('#name').value;
        const email = form.querySelector('#email').value;
        const phone = form.querySelector('#phone').value;
        const service = form.querySelector('#service').value;
        const message = form.querySelector('#message').value;
        
        const subject = encodeURIComponent('Official Inquiry from ' + name + ' - ' + service);
        const body = encodeURIComponent(
            'Name: ' + name + '\n' +
            'Email: ' + email + '\n' +
            'Phone: ' + phone + '\n' +
            'Service Interest: ' + service + '\n\n' +
            'Message:\n' + message
        );
        
        window.location.href = 'mailto:support@hypecrews.com?subject=' + subject + '&body=' + body;
        
        const msgDiv = document.getElementById('form-message');
        msgDiv.classList.remove('hidden', 'bg-red-50', 'text-red-800');
        msgDiv.classList.add('bg-emerald-50', 'text-emerald-800');
        msgDiv.innerText = 'Opening your email client... Your official inquiry details have been prepared.';
        
        setTimeout(() => {
            msgDiv.classList.add('hidden');
            form.reset();
        }, 5000);
    });
</script>

<?php include 'components/footer.php'; ?>