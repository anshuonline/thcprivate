    </main>

    <!-- Footer -->
    <footer class="bg-brand-950 text-white">
        <!-- Main Footer -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                <!-- Brand -->
                <div class="lg:col-span-1">
                    <a href="/" class="flex items-center gap-2 mb-4">
                        <img src="images/hypecrews-logo-white.png" alt="The Hype Crews" class="h-8 w-auto object-contain">
                    </a>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        India's trusted web development company delivering enterprise-grade websites, applications, and digital solutions since 2022.<br><span class="text-gray-500 text-xs mt-1 block">CIN: U73100AS2026PTC029838</span>
                    </p>
                    <div class="flex gap-3">
                        <a href="#" class="w-9 h-9 rounded-md bg-brand-900 flex items-center justify-center text-gray-400 hover:bg-brand-700 hover:text-white transition-all text-sm"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="w-9 h-9 rounded-md bg-brand-900 flex items-center justify-center text-gray-400 hover:bg-brand-700 hover:text-white transition-all text-sm"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="w-9 h-9 rounded-md bg-brand-900 flex items-center justify-center text-gray-400 hover:bg-brand-700 hover:text-white transition-all text-sm"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="w-9 h-9 rounded-md bg-brand-900 flex items-center justify-center text-gray-400 hover:bg-brand-700 hover:text-white transition-all text-sm"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>

                <!-- Services -->
                <div>
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-white mb-4">Our Services</h3>
                    <ul class="space-y-2.5">
                        <li><a href="/#services" class="text-sm text-gray-400 hover:text-white transition-colors">Business Websites</a></li>
                        <li><a href="/#services" class="text-sm text-gray-400 hover:text-white transition-colors">E-Commerce Solutions</a></li>
                        <li><a href="/#services" class="text-sm text-gray-400 hover:text-white transition-colors">Custom Web Applications</a></li>
                        <li><a href="/#services" class="text-sm text-gray-400 hover:text-white transition-colors">Mobile App Development</a></li>
                        <li><a href="/#services" class="text-sm text-gray-400 hover:text-white transition-colors">UI/UX Design</a></li>
                        <li><a href="/#services" class="text-sm text-gray-400 hover:text-white transition-colors">AI & Automation</a></li>
                    </ul>
                </div>

                <!-- Legal & Company -->
                <div>
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-white mb-4">Company & Legal</h3>
                    <ul class="space-y-2.5">
                        <li><a href="/#pricing" class="text-sm text-gray-400 hover:text-white transition-colors">Pricing Plans</a></li>
                        <li><a href="/#contact" class="text-sm text-gray-400 hover:text-white transition-colors">Contact Us</a></li>
                        <li><a href="terms.php" class="text-sm text-gray-400 hover:text-white transition-colors">Terms of Service</a></li>
                        <li><a href="privacy-policy.php" class="text-sm text-gray-400 hover:text-white transition-colors">Privacy Policy</a></li>
                        <li><a href="refund-policy.php" class="text-sm text-gray-400 hover:text-white transition-colors">Refund Policy</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-white mb-4">Contact Information</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-envelope text-brand-400 mt-0.5 text-sm"></i>
                            <span class="text-sm text-gray-400">support@hypecrews.com</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-phone text-brand-400 mt-0.5 text-sm"></i>
                            <span class="text-sm text-gray-400">+91 361 324 3276</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-location-dot text-brand-400 mt-0.5 text-sm"></i>
                            <span class="text-sm text-gray-400">Golaghat, Assam, 785621<br>India</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-clock text-brand-400 mt-0.5 text-sm"></i>
                            <span class="text-sm text-gray-400">Mon – Sat, 10 AM – 7 PM IST</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Bottom Bar -->
        <div class="border-t border-brand-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5 flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="text-center md:text-left">
                    <p class="text-xs text-gray-500 mb-1">&copy; <?php echo date('Y'); ?> Hypecrews Software Private Limited. All Rights Reserved.</p>
                    <p class="text-[10px] text-gray-600">Last Updated: <?php echo date('d F Y', filemtime($_SERVER['SCRIPT_FILENAME'])); ?></p>
                </div>
                <div class="flex gap-4">
                    <a href="terms.php" class="text-xs text-gray-500 hover:text-gray-300 transition-colors">Terms</a>
                    <a href="privacy-policy.php" class="text-xs text-gray-500 hover:text-gray-300 transition-colors">Privacy</a>
                    <a href="refund-policy.php" class="text-xs text-gray-500 hover:text-gray-300 transition-colors">Refund</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll Animation Script -->
    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));
    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6a74f49904e09a1d44f872f7/1jvcdmu2l';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</body>
</html>
