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

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Job 1 -->
            <div class="job-card bg-white border border-gray-200 p-6 rounded-sm shadow-sm flex flex-col h-full">
                <div class="mb-4">
                    <span class="inline-block bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded-sm mb-2 font-medium">Engineering</span>
                    <h3 class="text-xl font-bold text-gray-900 job-title">Full Stack Web Developer</h3>
                    <div class="flex items-center gap-4 text-sm text-gray-500 mt-2">
                        <span class="flex items-center gap-1"><i class="fa-solid fa-location-dot"></i> Remote / Guwahati</span>
                        <span class="flex items-center gap-1"><i class="fa-regular fa-clock"></i> Full-time</span>
                    </div>
                </div>
                <div class="flex-grow">
                    <h4 class="font-semibold text-gray-900 text-sm mb-2">Responsibilities:</h4>
                    <ul class="list-disc list-inside text-sm text-gray-600 mb-4 space-y-1">
                        <li>Build responsive websites and custom web apps</li>
                        <li>Develop e-commerce platforms</li>
                        <li>Integrate RESTful APIs</li>
                        <li>Collaborate with design and backend teams</li>
                    </ul>
                    <h4 class="font-semibold text-gray-900 text-sm mb-2">Requirements:</h4>
                    <ul class="list-disc list-inside text-sm text-gray-600 mb-6 space-y-1">
                        <li>Proficient in HTML, CSS, JS, React/Next.js</li>
                        <li>Strong PHP and MySQL skills</li>
                        <li>Experience with Git and Agile methodology</li>
                        <li>Problem-solving mindset</li>
                    </ul>
                </div>
                <button class="apply-btn w-full bg-white border border-blue-800 text-blue-800 hover:bg-blue-50 font-medium py-2 rounded-sm transition-colors text-sm" data-job="Full Stack Web Developer">
                    Apply Now
                </button>
            </div>

            <!-- Job 2 -->
            <div class="job-card bg-white border border-gray-200 p-6 rounded-sm shadow-sm flex flex-col h-full">
                <div class="mb-4">
                    <span class="inline-block bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded-sm mb-2 font-medium">WordPress Division</span>
                    <h3 class="text-xl font-bold text-gray-900 job-title">WordPress Developer</h3>
                    <div class="flex items-center gap-4 text-sm text-gray-500 mt-2">
                        <span class="flex items-center gap-1"><i class="fa-solid fa-location-dot"></i> Remote / Guwahati</span>
                        <span class="flex items-center gap-1"><i class="fa-regular fa-clock"></i> Full-time</span>
                    </div>
                </div>
                <div class="flex-grow">
                    <h4 class="font-semibold text-gray-900 text-sm mb-2">Responsibilities:</h4>
                    <ul class="list-disc list-inside text-sm text-gray-600 mb-4 space-y-1">
                        <li>Custom theme and plugin development</li>
                        <li>WooCommerce setup and optimization</li>
                        <li>Website performance and security hardening</li>
                        <li>Troubleshoot client site issues</li>
                    </ul>
                    <h4 class="font-semibold text-gray-900 text-sm mb-2">Requirements:</h4>
                    <ul class="list-disc list-inside text-sm text-gray-600 mb-6 space-y-1">
                        <li>Strong PHP and MySQL knowledge</li>
                        <li>Experience with WordPress hooks/filters</li>
                        <li>Proficient with Elementor and Gutenberg</li>
                        <li>Understanding of SEO best practices</li>
                    </ul>
                </div>
                <button class="apply-btn w-full bg-white border border-blue-800 text-blue-800 hover:bg-blue-50 font-medium py-2 rounded-sm transition-colors text-sm" data-job="WordPress Developer">
                    Apply Now
                </button>
            </div>

            <!-- Job 3 -->
            <div class="job-card bg-white border border-gray-200 p-6 rounded-sm shadow-sm flex flex-col h-full">
                <div class="mb-4">
                    <span class="inline-block bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded-sm mb-2 font-medium">Design</span>
                    <h3 class="text-xl font-bold text-gray-900 job-title">UI/UX Designer</h3>
                    <div class="flex items-center gap-4 text-sm text-gray-500 mt-2">
                        <span class="flex items-center gap-1"><i class="fa-solid fa-location-dot"></i> Remote / Guwahati</span>
                        <span class="flex items-center gap-1"><i class="fa-regular fa-clock"></i> Full-time</span>
                    </div>
                </div>
                <div class="flex-grow">
                    <h4 class="font-semibold text-gray-900 text-sm mb-2">Responsibilities:</h4>
                    <ul class="list-disc list-inside text-sm text-gray-600 mb-4 space-y-1">
                        <li>Create wireframes, mockups, and prototypes</li>
                        <li>Develop scalable design systems</li>
                        <li>Conduct user research and A/B testing</li>
                        <li>Collaborate with developers for implementation</li>
                    </ul>
                    <h4 class="font-semibold text-gray-900 text-sm mb-2">Requirements:</h4>
                    <ul class="list-disc list-inside text-sm text-gray-600 mb-6 space-y-1">
                        <li>Figma and Adobe XD proficiency</li>
                        <li>Strong portfolio of web and mobile designs</li>
                        <li>Solid understanding of responsive design</li>
                        <li>Excellent communication skills</li>
                    </ul>
                </div>
                <button class="apply-btn w-full bg-white border border-blue-800 text-blue-800 hover:bg-blue-50 font-medium py-2 rounded-sm transition-colors text-sm" data-job="UI/UX Designer">
                    Apply Now
                </button>
            </div>

            <!-- Job 4 -->
            <div class="job-card bg-white border border-gray-200 p-6 rounded-sm shadow-sm flex flex-col h-full">
                <div class="mb-4">
                    <span class="inline-block bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded-sm mb-2 font-medium">Engineering</span>
                    <h3 class="text-xl font-bold text-gray-900 job-title">Mobile App Developer</h3>
                    <div class="flex items-center gap-4 text-sm text-gray-500 mt-2">
                        <span class="flex items-center gap-1"><i class="fa-solid fa-location-dot"></i> Remote / Guwahati</span>
                        <span class="flex items-center gap-1"><i class="fa-regular fa-clock"></i> Full-time</span>
                    </div>
                </div>
                <div class="flex-grow">
                    <h4 class="font-semibold text-gray-900 text-sm mb-2">Responsibilities:</h4>
                    <ul class="list-disc list-inside text-sm text-gray-600 mb-4 space-y-1">
                        <li>Build cross-platform mobile apps</li>
                        <li>Integrate third-party services and APIs</li>
                        <li>Optimize app performance and UI</li>
                        <li>Manage App Store & Play Store deployment</li>
                    </ul>
                    <h4 class="font-semibold text-gray-900 text-sm mb-2">Requirements:</h4>
                    <ul class="list-disc list-inside text-sm text-gray-600 mb-6 space-y-1">
                        <li>React Native and TypeScript expertise</li>
                        <li>Experience with Firebase</li>
                        <li>Understanding of mobile design principles</li>
                        <li>Experience publishing apps</li>
                    </ul>
                </div>
                <button class="apply-btn w-full bg-white border border-blue-800 text-blue-800 hover:bg-blue-50 font-medium py-2 rounded-sm transition-colors text-sm" data-job="Mobile App Developer">
                    Apply Now
                </button>
            </div>

            <!-- Job 5 -->
            <div class="job-card bg-white border border-gray-200 p-6 rounded-sm shadow-sm flex flex-col h-full">
                <div class="mb-4">
                    <span class="inline-block bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded-sm mb-2 font-medium">Marketing</span>
                    <h3 class="text-xl font-bold text-gray-900 job-title">Digital Marketing Specialist</h3>
                    <div class="flex items-center gap-4 text-sm text-gray-500 mt-2">
                        <span class="flex items-center gap-1"><i class="fa-solid fa-location-dot"></i> Remote / Guwahati</span>
                        <span class="flex items-center gap-1"><i class="fa-regular fa-clock"></i> FT / PT</span>
                    </div>
                </div>
                <div class="flex-grow">
                    <h4 class="font-semibold text-gray-900 text-sm mb-2">Responsibilities:</h4>
                    <ul class="list-disc list-inside text-sm text-gray-600 mb-4 space-y-1">
                        <li>Execute SEO, SEM, and Social Media campaigns</li>
                        <li>Manage Google Ads and Meta Ads</li>
                        <li>Develop content strategy and email marketing</li>
                        <li>Monitor analytics and report on ROI</li>
                    </ul>
                    <h4 class="font-semibold text-gray-900 text-sm mb-2">Requirements:</h4>
                    <ul class="list-disc list-inside text-sm text-gray-600 mb-6 space-y-1">
                        <li>Experience with GA4 and Search Console</li>
                        <li>Proven track record in digital marketing</li>
                        <li>Excellent copywriting skills</li>
                        <li>Analytical and data-driven approach</li>
                    </ul>
                </div>
                <button class="apply-btn w-full bg-white border border-blue-800 text-blue-800 hover:bg-blue-50 font-medium py-2 rounded-sm transition-colors text-sm" data-job="Digital Marketing Specialist">
                    Apply Now
                </button>
            </div>

            <!-- Job 6 -->
            <div class="job-card bg-white border border-gray-200 p-6 rounded-sm shadow-sm flex flex-col h-full">
                <div class="mb-4">
                    <span class="inline-block bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded-sm mb-2 font-medium">Engineering</span>
                    <h3 class="text-xl font-bold text-gray-900 job-title">Backend Developer</h3>
                    <div class="flex items-center gap-4 text-sm text-gray-500 mt-2">
                        <span class="flex items-center gap-1"><i class="fa-solid fa-location-dot"></i> Remote / Guwahati</span>
                        <span class="flex items-center gap-1"><i class="fa-regular fa-clock"></i> Full-time</span>
                    </div>
                </div>
                <div class="flex-grow">
                    <h4 class="font-semibold text-gray-900 text-sm mb-2">Responsibilities:</h4>
                    <ul class="list-disc list-inside text-sm text-gray-600 mb-4 space-y-1">
                        <li>Build scalable APIs and microservices</li>
                        <li>Design robust database architectures</li>
                        <li>Implement security and data protection</li>
                        <li>Setup CI/CD pipelines</li>
                    </ul>
                    <h4 class="font-semibold text-gray-900 text-sm mb-2">Requirements:</h4>
                    <ul class="list-disc list-inside text-sm text-gray-600 mb-6 space-y-1">
                        <li>Node.js/Express or Python (Django/Flask)</li>
                        <li>MongoDB and PostgreSQL expertise</li>
                        <li>Experience with Cloud (AWS/GCP)</li>
                        <li>Familiarity with Docker</li>
                    </ul>
                </div>
                <button class="apply-btn w-full bg-white border border-blue-800 text-blue-800 hover:bg-blue-50 font-medium py-2 rounded-sm transition-colors text-sm" data-job="Backend Developer">
                    Apply Now
                </button>
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
                <form action="https://formsubmit.co/thehypecrews@proton.me" method="POST" target="hidden_iframe" id="career-form" enctype="multipart/form-data">
                    <!-- FormSubmit Configuration -->
                    <input type="hidden" name="_captcha" value="false">
                    <!-- Honeypot -->
                    <input type="text" name="_honey" style="display:none">
                    
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

                    <div class="mb-6">
                        <label for="portfolio" class="block text-sm font-medium text-gray-700 mb-1">Portfolio / LinkedIn URL</label>
                        <input type="url" id="portfolio" name="portfolio" class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:ring-blue-800 focus:border-blue-800 bg-white">
                    </div>

                    <div class="mb-6">
                        <label for="resume" class="block text-sm font-medium text-gray-700 mb-1">Resume Upload (PDF only, max 5MB) *</label>
                        <input type="file" id="resume" name="attachment" accept=".pdf" required class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:ring-blue-800 focus:border-blue-800 bg-white text-sm file:mr-4 file:py-2 file:px-4 file:rounded-sm file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-800 hover:file:bg-blue-100">
                        <p id="file-error" class="text-red-500 text-xs mt-1 hidden">File must be a PDF and less than 5MB.</p>
                    </div>

                    <div class="mb-6">
                        <label for="cover_letter" class="block text-sm font-medium text-gray-700 mb-1">Cover Letter (Optional)</label>
                        <textarea id="cover_letter" name="cover_letter" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-sm focus:ring-blue-800 focus:border-blue-800 bg-white"></textarea>
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
