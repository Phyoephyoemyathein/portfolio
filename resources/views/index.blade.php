<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phyoe Phyoe Mya Thein - Software Developer Portfolio</title>
    
    <!-- Open Graph Meta Tags (Social Media Shares Preview အတွက်) -->
    <meta property="og:title" content="Phyoe Phyoe Mya Thein - Software Developer Portfolio" />
    <meta property="og:description" content="Specializing in PHP, Laravel framework, database maintenance, and building robust web applications." />
    <meta property="og:type" content="website" />
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-950 text-slate-100 font-sans antialiased">

    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-slate-950/80 backdrop-blur-md border-b border-slate-800/80">
        <div class="max-w-5xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="#" class="font-mono font-extrabold text-xl text-indigo-400 tracking-wider">&lt;PPMT/&gt;</a>
            <div class="hidden md:flex gap-6 text-sm font-medium text-slate-300">
                <a href="#about" class="hover:text-indigo-400 transition">About</a>
                <a href="#experience" class="hover:text-indigo-400 transition">Experience</a>
                <a href="#skills" class="hover:text-indigo-400 transition">Skills</a>
                <a href="#projects" class="hover:text-indigo-400 transition">Projects</a>
                <a href="#contact" class="hover:text-indigo-400 transition">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="min-h-screen flex flex-col justify-center items-center text-center px-6 pt-16">
        <div class="inline-flex items-center gap-2 bg-indigo-500/10 border border-indigo-500/20 px-4 py-2 rounded-full text-indigo-400 text-sm mb-6">
            <span class="w-2 h-2 rounded-full bg-indigo-400 animate-pulse"></span>
            Software Developer & Full-Stack Engineer
        </div>
        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-4">
            Hi, I'm <span class="text-indigo-400">Phyoe Phyoe Mya Thein</span> 👋
        </h1>
        <p class="text-lg md:text-xl text-slate-400 max-w-2xl mb-8 leading-relaxed">
            Specializing in PHP, Laravel framework, database maintenance, and building robust, scalable web applications.
        </p>
        <!-- Hero Buttons with Resume Download & View Projects -->
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="#projects" class="bg-indigo-600 hover:bg-indigo-500 text-white px-6 py-3 rounded-xl font-medium transition shadow-lg shadow-indigo-600/20">View Projects</a>
            <a href="{{ asset('resume.pdf') }}" target="_blank" class="border border-indigo-500/50 hover:bg-indigo-500/10 text-indigo-300 px-6 py-3 rounded-xl font-medium transition flex items-center gap-2">
                <span>📄 Download CV</span>
            </a>
            <a href="#contact" class="border border-slate-700 hover:border-slate-500 bg-slate-900/50 px-6 py-3 rounded-xl font-medium transition text-slate-200">Contact Me</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 px-6 max-w-5xl mx-auto border-t border-slate-800/80">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-6 text-indigo-400">About Me</h2>
                <p class="text-slate-300 leading-relaxed mb-4">
                    I am a dedicated Software Developer with a strong academic background in computer science, specializing in backend and full-stack web development using PHP, Laravel, and relational databases.
                </p>
                <p class="text-slate-300 leading-relaxed mb-6">
                    Experienced in maintaining enterprise software systems, performing database optimization, and ensuring high performance and reliability across web applications.
                </p>
                <div class="inline-flex items-center gap-2 bg-slate-900 border border-slate-800 px-4 py-2.5 rounded-xl text-slate-300 text-sm">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    Open to Software Development & Engineering Opportunities
                </div>
            </div>
            <div class="bg-slate-900/60 p-8 rounded-2xl border border-slate-800 shadow-xl">
                <h3 class="text-xl font-semibold mb-4 text-slate-200">Core Expertise</h3>
                <ul class="space-y-3 text-slate-300 text-sm">
                    <li class="flex items-center gap-3">✅ Full-Stack Web App Development (Laravel)</li>
                    <li class="flex items-center gap-3">✅ Enterprise Software Maintenance & ERP Systems</li>
                    <li class="flex items-center gap-3">✅ Database Design, Management & Optimization</li>
                    <li class="flex items-center gap-3">✅ Version Control & Clean Code Practices (Git/GitHub)</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="py-24 px-6 max-w-5xl mx-auto border-t border-slate-800/80">
        <h2 class="text-3xl font-bold mb-4 text-center text-indigo-400">Experience & Education</h2>
        <p class="text-slate-400 text-center mb-12 max-w-xl mx-auto text-sm">My professional milestones and academic background.</p>
        
        <div class="space-y-8 max-w-3xl mx-auto">
            <!-- Experience Item 1 -->
            <div class="bg-slate-900/60 border border-slate-800 p-8 rounded-2xl shadow-xl relative border-l-4 border-l-indigo-500">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                    <h3 class="text-xl font-bold text-slate-100">Software Development Internship</h3>
                    <span class="text-xs font-semibold bg-indigo-500/10 text-indigo-400 px-3 py-1 rounded-full border border-indigo-500/20 w-fit mt-1 sm:mt-0">2016</span>
                </div>
                <p class="text-indigo-300 text-sm font-medium mb-3">Zwenexsys Co., Ltd</p>
                <p class="text-slate-300 text-sm leading-relaxed mb-4">
                    Gained hands-on software development experience utilizing the PHP Laravel framework and database management systems.
                </p>
                <div class="bg-slate-800/60 border border-slate-700/50 p-4 rounded-xl flex items-start gap-3">
                    <span class="text-lg">🏆</span>
                    <div>
                        <h4 class="text-sm font-bold text-slate-200">Best Project Award</h4>
                        <p class="text-xs text-slate-400 mt-0.5">Recognized and awarded for developing the "Guidelines for Universities" project.</p>
                    </div>
                </div>
            </div>

            <!-- Experience Item 2 -->
            <div class="bg-slate-900/60 border border-slate-800 p-8 rounded-2xl shadow-xl relative border-l-4 border-l-indigo-500">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                    <h3 class="text-xl font-bold text-slate-100">IT & Software Engineer</h3>
                    <span class="text-xs font-semibold bg-indigo-500/10 text-indigo-400 px-3 py-1 rounded-full border border-indigo-500/20 w-fit mt-1 sm:mt-0">Professional Track</span>
                </div>
                <p class="text-indigo-300 text-sm font-medium mb-3">Enterprise Systems & Web Applications</p>
                <p class="text-slate-300 text-sm leading-relaxed">
                    Handling full-stack software development, database maintenance, ERP system updates, and web applications to deliver optimized and reliable solutions.
                </p>
            </div>

            <!-- Education Item -->
            <div class="bg-slate-900/60 border border-slate-800 p-8 rounded-2xl shadow-xl relative border-l-4 border-l-indigo-500">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                    <h3 class="text-xl font-bold text-slate-100">Bachelor of Computer Science (B.C.Sc.)</h3>
                    <span class="text-xs font-semibold bg-indigo-500/10 text-indigo-400 px-3 py-1 rounded-full border border-indigo-500/20 w-fit mt-1 sm:mt-0">5-Year Program</span>
                </div>
                <p class="text-indigo-300 text-sm font-medium mb-3">Computer Science & IT Fundamentals</p>
                <p class="text-slate-300 text-sm leading-relaxed mb-4">
                    Completed an intensive 5-year university program focusing on software engineering principles, database design, algorithms, and web application development.
                </p>
                <div class="bg-slate-800/60 border border-slate-700/50 p-4 rounded-xl flex items-start gap-3">
                    <span class="text-lg">🎓</span>
                    <div>
                        <h4 class="text-sm font-bold text-slate-200">Qualified for Master's Degree Program (M.C.Sc.)</h4>
                        <p class="text-xs text-slate-400 mt-0.5">Achieved academic qualification and eligibility for Master of Computer Science based on outstanding academic performance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-24 px-6 max-w-5xl mx-auto border-t border-slate-800/80">
        <h2 class="text-3xl font-bold mb-4 text-center text-indigo-400">Tech Stack & Tools</h2>
        <p class="text-slate-400 text-center mb-12 max-w-xl mx-auto text-sm">Technologies and tools I use to build scalable and maintainable applications.</p>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-slate-900/60 border border-slate-800 p-6 rounded-2xl text-center hover:border-indigo-500/50 transition">
                <h3 class="font-bold text-lg mb-1 text-slate-200">PHP & Laravel</h3>
                <p class="text-xs text-slate-400">Backend Framework</p>
            </div>
            <div class="bg-slate-900/60 border border-slate-800 p-6 rounded-2xl text-center hover:border-indigo-500/50 transition">
                <h3 class="font-bold text-lg mb-1 text-slate-200">Tailwind CSS</h3>
                <p class="text-xs text-slate-400">Modern Styling</p>
            </div>
            <div class="bg-slate-900/60 border border-slate-800 p-6 rounded-2xl text-center hover:border-indigo-500/50 transition">
                <h3 class="font-bold text-lg mb-1 text-slate-200">MySQL / SQL</h3>
                <p class="text-xs text-slate-400">Database Management</p>
            </div>
            <div class="bg-slate-900/60 border border-slate-800 p-6 rounded-2xl text-center hover:border-indigo-500/50 transition">
              <h3 class="font-bold text-lg mb-1 text-slate-200">Laragon & XAMPP</h3>
              <p class="text-xs text-slate-400">Local Development Environment</p>
            </div>
            <div class="bg-slate-900/60 border border-slate-800 p-6 rounded-2xl text-center hover:border-indigo-500/50 transition">
                <h3 class="font-bold text-lg mb-1 text-slate-200">Git & GitHub</h3>
                <p class="text-xs text-slate-400">Version Control</p>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-24 px-6 max-w-5xl mx-auto border-t border-slate-800/80">
        <h2 class="text-3xl font-bold mb-4 text-center text-indigo-400">Featured Projects</h2>
        <p class="text-slate-400 text-center mb-12 max-w-xl mx-auto text-sm">Selected repositories showcasing my practical experience in web development.</p>
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Project 1: SaaS Flow -->
            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl overflow-hidden hover:border-indigo-500/50 transition flex flex-col justify-between shadow-xl">
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-slate-100 mb-3">SaaS Flow</h3>
                    <p class="text-slate-300 text-sm leading-relaxed mb-6">
                        A modern web application featuring task management workflows, user permissions, and robust administrative dashboard controls built with Laravel and Tailwind CSS.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="bg-slate-800/80 text-slate-300 text-xs px-3 py-1 rounded-lg border border-slate-700/50">PHP</span>
                        <span class="bg-slate-800/80 text-slate-300 text-xs px-3 py-1 rounded-lg border border-slate-700/50">Laravel</span>
                        <span class="bg-slate-800/80 text-slate-300 text-xs px-3 py-1 rounded-lg border border-slate-700/50">MySQL</span>
                        <span class="bg-slate-800/80 text-slate-300 text-xs px-3 py-1 rounded-lg border border-slate-700/50">Tailwind CSS</span>
                    </div>
                </div>
                <div class="px-8 pb-8 pt-0 flex gap-4">
                    <a href="https://github.com/Phyoephyoemyathein/saas-flow" target="_blank" class="text-sm font-medium text-indigo-400 hover:text-indigo-300 transition inline-flex items-center gap-1">GitHub Repository &rarr;</a>
                </div>
            </div>

            <!-- Project 2: Laptop Service Management -->
            <div class="bg-slate-900/60 border border-slate-800 rounded-2xl overflow-hidden hover:border-indigo-500/50 transition flex flex-col justify-between shadow-xl">
                <div class="p-8">
                    <h3 class="text-2xl font-bold text-slate-100 mb-3">Laptop Service Management</h3>
                    <p class="text-slate-300 text-sm leading-relaxed mb-6">
                        A comprehensive service management system designed to track repairs, customer details, inventory, and workflow operations for hardware service businesses.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="bg-slate-800/80 text-slate-300 text-xs px-3 py-1 rounded-lg border border-slate-700/50">PHP</span>
                        <span class="bg-slate-800/80 text-slate-300 text-xs px-3 py-1 rounded-lg border border-slate-700/50">Laravel</span>
                        <span class="bg-slate-800/80 text-slate-300 text-xs px-3 py-1 rounded-lg border border-slate-700/50">MySQL</span>
                        <span class="bg-slate-800/80 text-slate-300 text-xs px-3 py-1 rounded-lg border border-slate-700/50">Tailwind CSS</span>
                    </div>
                </div>
                <div class="px-8 pb-8 pt-0 flex gap-4">
                    <a href="https://github.com/Phyoephyoemyathein/laptop-service-management" target="_blank" class="text-sm font-medium text-indigo-400 hover:text-indigo-300 transition inline-flex items-center gap-1">GitHub Repository &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 px-6 max-w-3xl mx-auto border-t border-slate-800/80 text-center">
        <h2 class="text-3xl font-bold mb-4 text-indigo-400">Get In Touch</h2>
        <p class="text-slate-300 mb-8 max-w-xl mx-auto text-sm leading-relaxed">
            I'm currently open to new career opportunities, professional collaborations, or technical inquiries. Feel free to connect!
        </p>
        <div class="flex flex-wrap justify-center gap-4 mb-16">
            <a href="mailto:phyoe572015@gmail.com" class="bg-indigo-600 hover:bg-indigo-500 text-white px-6 py-3 rounded-xl font-medium transition shadow-lg shadow-indigo-600/20">Send Email</a>
            <a href="https://github.com/Phyoephyoemyathein" target="_blank" class="border border-slate-700 hover:border-slate-500 bg-slate-900/50 px-6 py-3 rounded-xl font-medium transition text-slate-200">GitHub Profile</a>
            <a href="https://www.linkedin.com/in/phyophyomyathein96" target="_blank" class="border border-slate-700 hover:border-slate-500 bg-slate-900/50 px-6 py-3 rounded-xl font-medium transition text-slate-200">LinkedIn Profile</a>
        </div>
        
        <!-- Footer -->
        <footer class="text-xs text-slate-500 border-t border-slate-800/80 pt-8">
            &copy; 2026 Phyoe Phyoe Mya Thein. Built with Laravel & Tailwind CSS.
        </footer>
    </section>

</body>
</html>