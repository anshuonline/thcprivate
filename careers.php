<?php
$pageTitle = "Careers - The Hype Crews";
include 'components/header.php'; 
?>

<!-- Add custom CSS -->
<link rel="stylesheet" href="css/careers.css">
<!-- intl-tel-input CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css">

<main class="bg-gray-50 pt-24 pb-12">
    <!-- Hero Section -->
    <section class="relative bg-white min-h-[60vh] flex items-center border-b border-gray-200 overflow-hidden">
        <!-- Dot pattern background -->
        <div class="absolute inset-0" style="background-image: radial-gradient(#cbd5e1 1px, transparent 1px); background-size: 20px 20px; opacity: 0.3;"></div>
        <!-- Gradient blobs -->
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-blue-100 opacity-50 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-blue-50 opacity-50 blur-3xl"></div>
        
        <div class="container mx-auto px-4 relative z-10 text-center max-w-4xl">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 text-blue-800 text-sm font-semibold mb-6 border border-blue-100">
                <i class="fa-solid fa-briefcase"></i> Careers
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 tracking-tight">Join Our Team</h1>
            <p class="text-lg md:text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                Grow your career with The Hype Crews. We're looking for passionate individuals to build innovative web and mobile solutions.
            </p>
            <div class="flex justify-center">
                <a href="#open-positions" class="bg-blue-800 hover:bg-blue-900 text-white font-medium py-3 px-8 rounded-sm shadow-sm transition-colors flex items-center gap-2">
                    View Open Positions <i class="fa-solid fa-arrow-down"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Open Positions Section -->
    <section id="open-positions" class="py-16 container mx-auto px-4 max-w-6xl">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Open Positions</h2>
            <p class="text-gray-600">Find the perfect role for your skills and experience.</p>
        </div>

        <div class="space-y-4">
            <!-- Job 1: Full Stack Web Developer -->
            <div class="job-accordion bg-white border border-gray-200 rounded-sm shadow-sm overflow-hidden">
                <button onclick="toggleJobDetail(this)" class="w-full flex items-center justify-between p-6 text-left hover:bg-gray-50 transition-colors">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-sm bg-blue-50 flex items-center justify-center text-blue-800 flex-shrink-0">
                            <i class="fa-solid fa-code text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Full Stack Web Developer</h3>
                            <div class="flex flex-wrap items-center gap-3 text-xs text-gray-500 mt-1">
                                <span class="bg-gray-100 px-2 py-0.5 rounded-sm font-medium">Engineering</span>
                                <span><i class="fa-solid fa-location-dot mr-1"></i>Remote / Guwahati</span>
                                <span><i class="fa-regular fa-clock mr-1"></i>Full-time</span>
                            </div>
                        </div>
                    </div>
                    <i class="fa-solid fa-chevron-down text-gray-400 transition-transform flex-shrink-0"></i>
                </button>
                <div class="job-detail hidden border-t border-gray-100 p-6 bg-gray-50">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h4 class="font-bold text-gray-900 mb-3"><i class="fa-solid fa-bullseye text-blue-600 mr-2"></i>Role Overview</h4>
                            <p class="text-sm text-gray-600 mb-4">Join our engineering team to build responsive, high-performance websites and custom web applications. You'll work on everything from front-end interfaces to back-end APIs, delivering scalable solutions for clients across India and globally.</p>
                            
                            <h4 class="font-bold text-gray-900 mb-3"><i class="fa-solid fa-list-check text-blue-600 mr-2"></i>Key Responsibilities</h4>
                            <ul class="text-sm text-gray-600 space-y-2 mb-4">
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>Build responsive, pixel-perfect websites and custom web applications from scratch</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>Develop e-commerce platforms with payment gateway integrations</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>Design and integrate RESTful APIs and third-party services</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>Collaborate with UI/UX designers, QA, and backend teams using Agile sprints</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-3"><i class="fa-solid fa-graduation-cap text-blue-600 mr-2"></i>Requirements</h4>
                            <ul class="text-sm text-gray-600 space-y-2 mb-4">
                                <li class="flex items-start gap-2"><i class="fa-solid fa-star text-amber-400 mt-1 text-xs"></i>Proficient in HTML5, CSS3, JavaScript (ES6+), React.js/Next.js</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-star text-amber-400 mt-1 text-xs"></i>Strong knowledge of PHP, Laravel, and MySQL/PostgreSQL</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-star text-amber-400 mt-1 text-xs"></i>Experience with Git, GitHub, and Agile/Scrum methodology</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-star text-amber-400 mt-1 text-xs"></i>1+ years of hands-on development experience (fresher with strong portfolio welcome)</li>
                            </ul>
                            <h4 class="font-bold text-gray-900 mb-3"><i class="fa-solid fa-wrench text-blue-600 mr-2"></i>Tech Stack</h4>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-sm font-medium">React</span>
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-sm font-medium">Next.js</span>
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-sm font-medium">PHP</span>
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-sm font-medium">MySQL</span>
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-sm font-medium">Tailwind CSS</span>
                            </div>
                        </div>
                    </div>
                    <button class="apply-btn mt-4 bg-blue-800 hover:bg-blue-900 text-white font-medium py-2.5 px-8 rounded-sm transition-colors text-sm" data-job="Full Stack Web Developer">
                        <i class="fa-solid fa-paper-plane mr-2"></i>Apply for this role
                    </button>
                </div>
            </div>

            <!-- Job 2: WordPress Developer -->
            <div class="job-accordion bg-white border border-gray-200 rounded-sm shadow-sm overflow-hidden">
                <button onclick="toggleJobDetail(this)" class="w-full flex items-center justify-between p-6 text-left hover:bg-gray-50 transition-colors">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-sm bg-blue-50 flex items-center justify-center text-[#21759b] flex-shrink-0">
                            <i class="fa-brands fa-wordpress text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">WordPress Developer</h3>
                            <div class="flex flex-wrap items-center gap-3 text-xs text-gray-500 mt-1">
                                <span class="bg-gray-100 px-2 py-0.5 rounded-sm font-medium">WordPress Division</span>
                                <span><i class="fa-solid fa-location-dot mr-1"></i>Remote / Guwahati</span>
                                <span><i class="fa-regular fa-clock mr-1"></i>Full-time</span>
                            </div>
                        </div>
                    </div>
                    <i class="fa-solid fa-chevron-down text-gray-400 transition-transform flex-shrink-0"></i>
                </button>
                <div class="job-detail hidden border-t border-gray-100 p-6 bg-gray-50">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h4 class="font-bold text-gray-900 mb-3"><i class="fa-solid fa-bullseye text-blue-600 mr-2"></i>Role Overview</h4>
                            <p class="text-sm text-gray-600 mb-4">Lead our WordPress division by building custom themes, plugins, and WooCommerce stores. You'll handle everything from client consultations to deploying fully optimized, secure WordPress websites.</p>
                            
                            <h4 class="font-bold text-gray-900 mb-3"><i class="fa-solid fa-list-check text-blue-600 mr-2"></i>Key Responsibilities</h4>
                            <ul class="text-sm text-gray-600 space-y-2 mb-4">
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>Develop custom WordPress themes from PSD/Figma designs</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>Build custom plugins and extend existing ones using WordPress APIs</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>Setup and optimize WooCommerce stores with payment gateways</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>Perform security hardening, malware cleanup, and speed optimization</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-3"><i class="fa-solid fa-graduation-cap text-blue-600 mr-2"></i>Requirements</h4>
                            <ul class="text-sm text-gray-600 space-y-2 mb-4">
                                <li class="flex items-start gap-2"><i class="fa-solid fa-star text-amber-400 mt-1 text-xs"></i>Deep PHP knowledge and WordPress hooks/filters/actions expertise</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-star text-amber-400 mt-1 text-xs"></i>Experience with Elementor, Gutenberg blocks, and ACF</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-star text-amber-400 mt-1 text-xs"></i>Strong MySQL database skills and query optimization</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-star text-amber-400 mt-1 text-xs"></i>SEO best practices and Core Web Vitals optimization</li>
                            </ul>
                            <h4 class="font-bold text-gray-900 mb-3"><i class="fa-solid fa-wrench text-blue-600 mr-2"></i>Tech Stack</h4>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-sm font-medium">WordPress</span>
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-sm font-medium">PHP</span>
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-sm font-medium">WooCommerce</span>
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-sm font-medium">Elementor</span>
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-sm font-medium">ACF</span>
                            </div>
                        </div>
                    </div>
                    <button class="apply-btn mt-4 bg-blue-800 hover:bg-blue-900 text-white font-medium py-2.5 px-8 rounded-sm transition-colors text-sm" data-job="WordPress Developer">
                        <i class="fa-solid fa-paper-plane mr-2"></i>Apply for this role
                    </button>
                </div>
            </div>

            <!-- Job 3: UI/UX Designer -->
            <div class="job-accordion bg-white border border-gray-200 rounded-sm shadow-sm overflow-hidden">
                <button onclick="toggleJobDetail(this)" class="w-full flex items-center justify-between p-6 text-left hover:bg-gray-50 transition-colors">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-sm bg-purple-50 flex items-center justify-center text-purple-700 flex-shrink-0">
                            <i class="fa-solid fa-palette text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">UI/UX Designer</h3>
                            <div class="flex flex-wrap items-center gap-3 text-xs text-gray-500 mt-1">
                                <span class="bg-gray-100 px-2 py-0.5 rounded-sm font-medium">Design</span>
                                <span><i class="fa-solid fa-location-dot mr-1"></i>Remote / Guwahati</span>
                                <span><i class="fa-regular fa-clock mr-1"></i>Full-time</span>
                            </div>
                        </div>
                    </div>
                    <i class="fa-solid fa-chevron-down text-gray-400 transition-transform flex-shrink-0"></i>
                </button>
                <div class="job-detail hidden border-t border-gray-100 p-6 bg-gray-50">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h4 class="font-bold text-gray-900 mb-3"><i class="fa-solid fa-bullseye text-blue-600 mr-2"></i>Role Overview</h4>
                            <p class="text-sm text-gray-600 mb-4">Shape the visual identity and user experience of our client projects. You'll research, prototype, and deliver designs that are both beautiful and functional, working closely with developers to bring them to life.</p>
                            
                            <h4 class="font-bold text-gray-900 mb-3"><i class="fa-solid fa-list-check text-blue-600 mr-2"></i>Key Responsibilities</h4>
                            <ul class="text-sm text-gray-600 space-y-2 mb-4">
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>Create wireframes, high-fidelity mockups, and interactive prototypes</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>Build and maintain scalable design systems and component libraries</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>Conduct user research, usability testing, and A/B experiments</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>Collaborate with developers to ensure pixel-perfect implementation</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-3"><i class="fa-solid fa-graduation-cap text-blue-600 mr-2"></i>Requirements</h4>
                            <ul class="text-sm text-gray-600 space-y-2 mb-4">
                                <li class="flex items-start gap-2"><i class="fa-solid fa-star text-amber-400 mt-1 text-xs"></i>Expert-level Figma proficiency (auto-layout, components, variables)</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-star text-amber-400 mt-1 text-xs"></i>Strong portfolio showcasing web and mobile design projects</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-star text-amber-400 mt-1 text-xs"></i>Understanding of responsive design, typography, and color theory</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-star text-amber-400 mt-1 text-xs"></i>Basic HTML/CSS knowledge for developer handoff</li>
                            </ul>
                            <h4 class="font-bold text-gray-900 mb-3"><i class="fa-solid fa-wrench text-blue-600 mr-2"></i>Tools</h4>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded-sm font-medium">Figma</span>
                                <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded-sm font-medium">Adobe XD</span>
                                <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded-sm font-medium">Photoshop</span>
                                <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded-sm font-medium">Framer</span>
                            </div>
                        </div>
                    </div>
                    <button class="apply-btn mt-4 bg-blue-800 hover:bg-blue-900 text-white font-medium py-2.5 px-8 rounded-sm transition-colors text-sm" data-job="UI/UX Designer">
                        <i class="fa-solid fa-paper-plane mr-2"></i>Apply for this role
                    </button>
                </div>
            </div>

            <!-- Job 4: Mobile App Developer -->
            <div class="job-accordion bg-white border border-gray-200 rounded-sm shadow-sm overflow-hidden">
                <button onclick="toggleJobDetail(this)" class="w-full flex items-center justify-between p-6 text-left hover:bg-gray-50 transition-colors">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-sm bg-green-50 flex items-center justify-center text-green-700 flex-shrink-0">
                            <i class="fa-solid fa-mobile-screen-button text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Mobile App Developer (React Native)</h3>
                            <div class="flex flex-wrap items-center gap-3 text-xs text-gray-500 mt-1">
                                <span class="bg-gray-100 px-2 py-0.5 rounded-sm font-medium">Engineering</span>
                                <span><i class="fa-solid fa-location-dot mr-1"></i>Remote / Guwahati</span>
                                <span><i class="fa-regular fa-clock mr-1"></i>Full-time</span>
                            </div>
                        </div>
                    </div>
                    <i class="fa-solid fa-chevron-down text-gray-400 transition-transform flex-shrink-0"></i>
                </button>
                <div class="job-detail hidden border-t border-gray-100 p-6 bg-gray-50">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h4 class="font-bold text-gray-900 mb-3"><i class="fa-solid fa-bullseye text-blue-600 mr-2"></i>Role Overview</h4>
                            <p class="text-sm text-gray-600 mb-4">Build cross-platform mobile applications for iOS and Android using React Native. You'll take full ownership from design implementation to App Store/Play Store deployment, delivering smooth, native-like experiences.</p>
                            
                            <h4 class="font-bold text-gray-900 mb-3"><i class="fa-solid fa-list-check text-blue-600 mr-2"></i>Key Responsibilities</h4>
                            <ul class="text-sm text-gray-600 space-y-2 mb-4">
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>Build and maintain cross-platform mobile apps with React Native</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>Integrate Firebase services (auth, Firestore, push notifications, analytics)</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>Connect to REST/GraphQL APIs and third-party SDKs</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>Handle full App Store and Google Play deployment pipeline</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-3"><i class="fa-solid fa-graduation-cap text-blue-600 mr-2"></i>Requirements</h4>
                            <ul class="text-sm text-gray-600 space-y-2 mb-4">
                                <li class="flex items-start gap-2"><i class="fa-solid fa-star text-amber-400 mt-1 text-xs"></i>Strong React Native and TypeScript expertise</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-star text-amber-400 mt-1 text-xs"></i>Hands-on experience with Firebase and cloud functions</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-star text-amber-400 mt-1 text-xs"></i>Understanding of native iOS/Android build processes</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-star text-amber-400 mt-1 text-xs"></i>Experience publishing at least 1 app on App Store or Play Store</li>
                            </ul>
                            <h4 class="font-bold text-gray-900 mb-3"><i class="fa-solid fa-wrench text-blue-600 mr-2"></i>Tech Stack</h4>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-sm font-medium">React Native</span>
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-sm font-medium">TypeScript</span>
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-sm font-medium">Firebase</span>
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-sm font-medium">Expo</span>
                            </div>
                        </div>
                    </div>
                    <button class="apply-btn mt-4 bg-blue-800 hover:bg-blue-900 text-white font-medium py-2.5 px-8 rounded-sm transition-colors text-sm" data-job="Mobile App Developer">
                        <i class="fa-solid fa-paper-plane mr-2"></i>Apply for this role
                    </button>
                </div>
            </div>

            <!-- Job 5: Digital Marketing Specialist -->
            <div class="job-accordion bg-white border border-gray-200 rounded-sm shadow-sm overflow-hidden">
                <button onclick="toggleJobDetail(this)" class="w-full flex items-center justify-between p-6 text-left hover:bg-gray-50 transition-colors">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-sm bg-orange-50 flex items-center justify-center text-orange-700 flex-shrink-0">
                            <i class="fa-solid fa-bullhorn text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Digital Marketing Specialist</h3>
                            <div class="flex flex-wrap items-center gap-3 text-xs text-gray-500 mt-1">
                                <span class="bg-gray-100 px-2 py-0.5 rounded-sm font-medium">Marketing</span>
                                <span><i class="fa-solid fa-location-dot mr-1"></i>Remote / Guwahati</span>
                                <span><i class="fa-regular fa-clock mr-1"></i>Full-time / Part-time</span>
                            </div>
                        </div>
                    </div>
                    <i class="fa-solid fa-chevron-down text-gray-400 transition-transform flex-shrink-0"></i>
                </button>
                <div class="job-detail hidden border-t border-gray-100 p-6 bg-gray-50">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h4 class="font-bold text-gray-900 mb-3"><i class="fa-solid fa-bullseye text-blue-600 mr-2"></i>Role Overview</h4>
                            <p class="text-sm text-gray-600 mb-4">Drive online visibility and lead generation for The Hype Crews and our clients. You'll plan and execute multi-channel digital marketing campaigns, analyze performance data, and continuously optimize for ROI.</p>
                            
                            <h4 class="font-bold text-gray-900 mb-3"><i class="fa-solid fa-list-check text-blue-600 mr-2"></i>Key Responsibilities</h4>
                            <ul class="text-sm text-gray-600 space-y-2 mb-4">
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>Plan and execute SEO, SEM, and Social Media Marketing campaigns</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>Manage Google Ads, Meta Ads, and LinkedIn Ads budgets and targeting</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>Develop content strategies, blog calendars, and email marketing funnels</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>Monitor GA4, Search Console, and social analytics; generate monthly reports</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-3"><i class="fa-solid fa-graduation-cap text-blue-600 mr-2"></i>Requirements</h4>
                            <ul class="text-sm text-gray-600 space-y-2 mb-4">
                                <li class="flex items-start gap-2"><i class="fa-solid fa-star text-amber-400 mt-1 text-xs"></i>Proven experience managing Google Ads and Meta Ads</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-star text-amber-400 mt-1 text-xs"></i>Proficiency with GA4, Google Search Console, SEMrush/Ahrefs</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-star text-amber-400 mt-1 text-xs"></i>Excellent copywriting and content creation skills</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-star text-amber-400 mt-1 text-xs"></i>Analytical and data-driven approach with ROI focus</li>
                            </ul>
                            <h4 class="font-bold text-gray-900 mb-3"><i class="fa-solid fa-wrench text-blue-600 mr-2"></i>Tools</h4>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-orange-100 text-orange-800 text-xs px-2 py-1 rounded-sm font-medium">Google Ads</span>
                                <span class="bg-orange-100 text-orange-800 text-xs px-2 py-1 rounded-sm font-medium">Meta Ads</span>
                                <span class="bg-orange-100 text-orange-800 text-xs px-2 py-1 rounded-sm font-medium">GA4</span>
                                <span class="bg-orange-100 text-orange-800 text-xs px-2 py-1 rounded-sm font-medium">SEMrush</span>
                            </div>
                        </div>
                    </div>
                    <button class="apply-btn mt-4 bg-blue-800 hover:bg-blue-900 text-white font-medium py-2.5 px-8 rounded-sm transition-colors text-sm" data-job="Digital Marketing Specialist">
                        <i class="fa-solid fa-paper-plane mr-2"></i>Apply for this role
                    </button>
                </div>
            </div>

            <!-- Job 6: Backend Developer -->
            <div class="job-accordion bg-white border border-gray-200 rounded-sm shadow-sm overflow-hidden">
                <button onclick="toggleJobDetail(this)" class="w-full flex items-center justify-between p-6 text-left hover:bg-gray-50 transition-colors">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-sm bg-slate-100 flex items-center justify-center text-slate-700 flex-shrink-0">
                            <i class="fa-solid fa-server text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900">Backend Developer (Node.js / Python)</h3>
                            <div class="flex flex-wrap items-center gap-3 text-xs text-gray-500 mt-1">
                                <span class="bg-gray-100 px-2 py-0.5 rounded-sm font-medium">Engineering</span>
                                <span><i class="fa-solid fa-location-dot mr-1"></i>Remote / Guwahati</span>
                                <span><i class="fa-regular fa-clock mr-1"></i>Full-time</span>
                            </div>
                        </div>
                    </div>
                    <i class="fa-solid fa-chevron-down text-gray-400 transition-transform flex-shrink-0"></i>
                </button>
                <div class="job-detail hidden border-t border-gray-100 p-6 bg-gray-50">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h4 class="font-bold text-gray-900 mb-3"><i class="fa-solid fa-bullseye text-blue-600 mr-2"></i>Role Overview</h4>
                            <p class="text-sm text-gray-600 mb-4">Architect and build the server-side infrastructure that powers our applications. You'll design robust APIs, scalable database architectures, and cloud-deployed microservices that handle thousands of concurrent users.</p>
                            
                            <h4 class="font-bold text-gray-900 mb-3"><i class="fa-solid fa-list-check text-blue-600 mr-2"></i>Key Responsibilities</h4>
                            <ul class="text-sm text-gray-600 space-y-2 mb-4">
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>Design and build scalable RESTful and GraphQL APIs</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>Architect microservices with proper separation of concerns</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>Design efficient database schemas (SQL and NoSQL) with indexing strategies</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-check text-green-500 mt-1 text-xs"></i>Setup CI/CD pipelines, Docker containers, and cloud deployments (AWS/GCP)</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 mb-3"><i class="fa-solid fa-graduation-cap text-blue-600 mr-2"></i>Requirements</h4>
                            <ul class="text-sm text-gray-600 space-y-2 mb-4">
                                <li class="flex items-start gap-2"><i class="fa-solid fa-star text-amber-400 mt-1 text-xs"></i>Node.js/Express or Python (Django/Flask) backend expertise</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-star text-amber-400 mt-1 text-xs"></i>Strong knowledge of MongoDB, PostgreSQL, and Redis</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-star text-amber-400 mt-1 text-xs"></i>Experience with AWS/GCP cloud services (EC2, S3, Lambda, Cloud Run)</li>
                                <li class="flex items-start gap-2"><i class="fa-solid fa-star text-amber-400 mt-1 text-xs"></i>Docker, Kubernetes, and CI/CD (GitHub Actions, Jenkins) proficiency</li>
                            </ul>
                            <h4 class="font-bold text-gray-900 mb-3"><i class="fa-solid fa-wrench text-blue-600 mr-2"></i>Tech Stack</h4>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="bg-slate-200 text-slate-800 text-xs px-2 py-1 rounded-sm font-medium">Node.js</span>
                                <span class="bg-slate-200 text-slate-800 text-xs px-2 py-1 rounded-sm font-medium">Python</span>
                                <span class="bg-slate-200 text-slate-800 text-xs px-2 py-1 rounded-sm font-medium">PostgreSQL</span>
                                <span class="bg-slate-200 text-slate-800 text-xs px-2 py-1 rounded-sm font-medium">AWS</span>
                            </div>
                        </div>
                    </div>
                    <button class="apply-btn mt-4 bg-blue-800 hover:bg-blue-900 text-white font-medium py-2.5 px-8 rounded-sm transition-colors text-sm" data-job="Backend Developer">
                        <i class="fa-solid fa-paper-plane mr-2"></i>Apply for this role
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Application Form Section -->
    <section id="apply" class="py-16 bg-white border-t border-gray-200">
        <div class="container mx-auto px-4 max-w-3xl">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Submit Your Application</h2>
                <p class="text-gray-600">Take the next step in your career. Fill out the form below to apply.</p>
            </div>

            <div class="bg-gray-50 p-8 rounded-sm border border-gray-200 shadow-sm">
                <!-- Hidden iframe for seamless submission -->
                <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;"></iframe>
                <form action="https://formsubmit.co/thehypecrews@proton.me" method="POST" target="hidden_iframe" id="career-form">
                    <!-- FormSubmit Configuration -->
                    <input type="hidden" name="_captcha" value="false">
                    <!-- Honeypot -->
                    <input type="text" name="_honey" style="display:none">
                    <!-- Hidden field for file.io link -->
                    <input type="hidden" name="Resume_Link" id="resume_link_input" value="">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name *</label>
                            <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:ring-blue-800 focus:border-blue-800 bg-white">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address *</label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:ring-blue-800 focus:border-blue-800 bg-white">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:ring-blue-800 focus:border-blue-800 bg-white">
                        </div>
                        <div>
                            <label for="position" class="block text-sm font-medium text-gray-700 mb-1">Position Applied For *</label>
                            <select id="position" name="position" required class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:ring-blue-800 focus:border-blue-800 bg-white">
                                <option value="" disabled selected>Select a position</option>
                                <option value="Full Stack Web Developer">Full Stack Web Developer</option>
                                <option value="WordPress Developer">WordPress Developer</option>
                                <option value="UI/UX Designer">UI/UX Designer</option>
                                <option value="Mobile App Developer">Mobile App Developer</option>
                                <option value="Digital Marketing Specialist">Digital Marketing Specialist</option>
                                <option value="Backend Developer">Backend Developer</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="experience" class="block text-sm font-medium text-gray-700 mb-1">Total Experience (Years) *</label>
                            <input type="number" id="experience" name="experience" min="0" step="0.5" required class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:ring-blue-800 focus:border-blue-800 bg-white" placeholder="e.g. 2.5">
                        </div>
                        <div>
                            <label for="portfolio" class="block text-sm font-medium text-gray-700 mb-1">Portfolio / LinkedIn URL *</label>
                            <input type="url" id="portfolio" name="portfolio" required class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:ring-blue-800 focus:border-blue-800 bg-white" placeholder="https://...">
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="resume" class="block text-sm font-medium text-gray-700 mb-1">Resume Upload (PDF only, max 5MB) *</label>
                        <input type="file" id="resume" accept=".pdf" required class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:ring-blue-800 focus:border-blue-800 bg-white text-sm file:mr-4 file:py-2 file:px-4 file:rounded-sm file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-800 hover:file:bg-blue-100">
                        <p id="file-error" class="text-red-500 text-xs mt-1 hidden">File must be a PDF and less than 5MB.</p>
                    </div>

                    <div class="mb-6">
                        <label for="cover_letter" class="block text-sm font-medium text-gray-700 mb-1">Cover Letter *</label>
                        <textarea id="cover_letter" name="cover_letter" rows="4" required placeholder="Why are you a great fit for this role?" class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:ring-blue-800 focus:border-blue-800 bg-white"></textarea>
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Math Verification *</label>
                        <div class="flex items-center gap-3">
                            <span id="math-question" class="font-bold text-gray-800 bg-gray-200 px-3 py-2 rounded-sm border border-gray-300 inline-block min-w-[80px] text-center"></span>
                            <input type="number" id="math-answer" required class="w-24 px-4 py-2 border border-gray-300 rounded-sm focus:ring-blue-800 focus:border-blue-800 bg-white" placeholder="=">
                        </div>
                        <p id="math-error" class="text-red-500 text-xs mt-1 hidden">Incorrect math answer. Try again.</p>
                    </div>

                    <div id="form-messages" class="mb-4 hidden rounded-sm p-4 text-sm font-medium"></div>

                    <button type="submit" id="submit-btn" class="w-full bg-blue-800 hover:bg-blue-900 text-white font-medium py-3 px-4 rounded-sm shadow-sm transition-colors flex items-center justify-center gap-2">
                        <span>Submit Application</span>
                        <i class="fa-solid fa-paper-plane hidden loading-icon"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js" defer></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var phoneInput = document.querySelector("#phone");
        if(phoneInput) {
            window.intlTelInput(phoneInput, {
                initialCountry: "in",
                preferredCountries: ["in", "us", "gb"],
                separateDialCode: true,
                utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js"
            });
        }
    });
</script>
<script src="js/careers.js" defer></script>

<?php include 'components/footer.php'; ?>
