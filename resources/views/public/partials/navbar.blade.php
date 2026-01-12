<!-- ================= NAVBAR ================= -->
<nav id="mainNav"
     class="fixed top-0 left-0 w-full z-[9000]
            bg-[rgba(15,23,42,.55)]
            backdrop-blur-xl
            border-b border-white/10
            transition-all duration-500">

    <div class="max-w-7xl mx-auto px-6
                h-20 flex items-center justify-between">

        <!-- LOGO -->
        <a href="#home"
           class="relative text-lg font-extrabold tracking-tight
                  text-white group">
            Rafi Bakhtiar Cahyadi </br>
            <span class="absolute -bottom-1 left-0 w-0 h-[2px]
                         bg-gradient-to-r from-indigo-400 to-cyan-400
                         transition-all duration-500
                         group-hover:w-full"></span>
        </a>

        <!-- DESKTOP MENU -->
        <div class="hidden lg:flex items-center gap-10
                    text-sm font-medium text-gray-300">

            <a href="#home" class="nav-link-premium">Home</a>
            <a href="#about" class="nav-link-premium">About</a>
            <a href="#projects" class="nav-link-premium">Projects</a>
            <a href="#skills" class="nav-link-premium">Skills</a>
            <a href="#experience" class="nav-link-premium">Experience</a>
            <a href="#contact" class="nav-link-premium">Contact</a>
            <a href="#certificates" class="nav-link-premium">Certificates</a>

            <a href="/cv/Rafi-Bakhtiar-CV.pdf"
               target="_blank"
               class="ml-4 px-5 py-2 rounded-xl
                      bg-gradient-to-r from-indigo-500 to-cyan-500
                      text-white text-sm
                      hover:scale-[1.06] hover:shadow-xl
                      transition-all duration-300">
                CV
            </a>
        </div>

        <!-- HAMBURGER -->
        <button id="openSidebar"
                class="lg:hidden text-gray-200 text-2xl
                       hover:scale-110 transition">
            ☰
        </button>

    </div>
</nav>

<!-- ================= OVERLAY ================= -->
<div id="sidebarOverlay"
     class="fixed inset-0 bg-black/50 z-[8999]
            opacity-0 pointer-events-none
            transition-opacity duration-500"></div>

<!-- ================= SIDEBAR ================= -->
<aside id="mobileSidebar"
       class="fixed top-0 right-0 h-full w-72
              bg-[rgba(2,6,23,.92)]
              backdrop-blur-2xl
              z-[9000]
              translate-x-full
              transition-transform duration-500">

<!-- HEADER -->
<div class="px-5 pt-5 pb-4 border-b border-white/10">

    <div class="relative rounded-2xl
                bg-gradient-to-br from-slate-800/80 to-slate-900/80
                backdrop-blur-xl
                px-4 py-4 flex items-center gap-4">

        <!-- AVATAR -->
        <div class="w-12 h-12 rounded-full
                    bg-gradient-to-br from-indigo-500 to-cyan-500
                    flex items-center justify-center
                    text-white font-semibold">
            RB
        </div>

        <!-- INFO -->
        <div class="flex-1 leading-tight">
            <p class="text-sm font-semibold text-white">
                Rafi Bakhtiar Cahyadi
            </p>
            <p class="text-[11px] text-gray-400 mt-0.5">
                Cloud Enthusiast
            </p>
        </div>

        <!-- CLOSE -->
        <button id="closeSidebar"
                class="absolute top-3 right-3
                       text-gray-400 hover:text-white
                       transition">
            ✕
        </button>
    </div>

</div>

    <!-- MENU -->
    <nav class="px-6 py-10 flex flex-col gap-6
                text-sm font-medium text-gray-300">

        <a href="#home" class="sidebar-link-premium">Home</a>
        <a href="#about" class="sidebar-link-premium">About</a>
        <a href="#projects" class="sidebar-link-premium">Projects</a>
        <a href="#skills" class="sidebar-link-premium">Skills</a>
        <a href="#experience" class="sidebar-link-premium">Experience</a>
        <a href="#contact" class="sidebar-link-premium">Contact</a>
        <a href="#certificates" class="sidebar-link-premium">Certificates</a>

        <a href="/cv/Rafi-Bakhtiar-CV.pdf"
           target="_blank"
           class="mt-8 text-center px-5 py-3 rounded-xl
                  bg-gradient-to-r from-indigo-500 to-cyan-500
                  text-white
                  hover:scale-105 transition">
            Download CV
        </a>
    </nav>
</aside>

<script>
    const openBtn = document.getElementById('openSidebar');
    const closeBtn = document.getElementById('closeSidebar');
    const sidebar = document.getElementById('mobileSidebar');
    const overlay = document.getElementById('sidebarOverlay');
    const links = document.querySelectorAll('.sidebar-link-premium');
    const nav = document.getElementById('mainNav');

    function openSidebar() {
        sidebar.classList.remove('translate-x-full');
        overlay.classList.remove('opacity-0','pointer-events-none');

        links.forEach((link, i) => {
            setTimeout(() => link.classList.add('show'), i * 80);
        });
    }

    function closeSidebar() {
        sidebar.classList.add('translate-x-full');
        overlay.classList.add('opacity-0','pointer-events-none');

        links.forEach(link => link.classList.remove('show'));
    }

    openBtn.addEventListener('click', openSidebar);
    closeBtn.addEventListener('click', closeSidebar);
    overlay.addEventListener('click', closeSidebar);
    links.forEach(link => link.addEventListener('click', closeSidebar));

    /* SCROLL EFFECT */
    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
            nav.classList.add('h-16','backdrop-blur-2xl');
        } else {
            nav.classList.remove('h-16');
        }
    });
</script>

