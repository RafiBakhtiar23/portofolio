<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- RESPONSIVE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Rafi Bakhtiar – Cloud Enthusiast')</title>

    <!-- SEO BASIC -->
    <meta name="description"
          content="Rafi Bakhtiar is a Cloud Enthusiast specializing in scalable cloud infrastructure, backend systems, and modern web applications.">
    <meta name="keywords"
          content="Cloud Enthusiast, Laravel Developer, Backend Developer, AWS, Web Developer">
    <meta name="author" content="Rafi Bakhtiar">

    <!-- OPEN GRAPH -->
    <meta property="og:title" content="Rafi Bakhtiar – Cloud Enthusiast">
    <meta property="og:description" content="Building scalable and reliable cloud-based systems.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="{{ asset('img/og-image.jpg') }}">

    <!-- CSS -->
    @vite('resources/css/app.css')

    <style>
        /* ================= CURSOR DRAGON ================= */
        #cursor-dragon {
            position: fixed;
            inset: 0;
            z-index: 20;
            pointer-events: none;
            mix-blend-mode: screen;
        }

        @media (max-width: 768px) {
            #cursor-dragon {
                display: none;
            }
        }
    </style>
</head>

<body class="antialiased">

    <!-- CANVAS -->
    <canvas id="cursor-dragon"></canvas>

    <!-- NAVBAR -->
    @include('public.partials.navbar')

    <!-- MAIN CONTENT -->
    <main class="overflow-x-hidden pt-24 relative z-10">
        @yield('content')
    </main>

    <!-- ================= GLOBAL SCRIPT ================= -->
    <script>
    document.addEventListener("DOMContentLoaded", () => {

        /* =====================================================
           REVEAL ANIMATION (ONCE)
        ===================================================== */
        const revealEls = document.querySelectorAll(
            ".reveal, .reveal-left, .reveal-right"
        );

        const revealObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("active");
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        revealEls.forEach(el => revealObserver.observe(el));

        /* =====================================================
           NAVBAR ACTIVE LINK
        ===================================================== */
        const sections = document.querySelectorAll("section[id]");
        const navLinks = document.querySelectorAll("nav a[href^='#']");

        const navObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    navLinks.forEach(a => a.classList.remove("nav-active"));
                    const active = document.querySelector(
                        `nav a[href="#${entry.target.id}"]`
                    );
                    if (active) active.classList.add("nav-active");
                }
            });
        }, { rootMargin: "-40% 0px -55% 0px" });

        sections.forEach(sec => navObserver.observe(sec));



/* ================= CONTACT DYNAMIC ================= */

// Typing effect
const text = "Let’s Work Together";
let index = 0;

function typeContact() {
    if (index < text.length) {
        document.getElementById("contact-typing").textContent += text[index];
        index++;
        setTimeout(typeContact, 70);
    }
}

document.addEventListener("DOMContentLoaded", typeContact);

// Copy email
function copyEmail() {
    const email = "your@email.com";
    navigator.clipboard.writeText(email);

    const status = document.getElementById("copy-status");
    status.textContent = "Email copied to clipboard ✓";

    setTimeout(() => {
        status.textContent =
            "Available for remote or on-site opportunities. Based in Indonesia.";
    }, 2000);
}


        /* =====================================================
           HERO PARALLAX (DESKTOP ONLY)
        ===================================================== */
        if (window.innerWidth > 768) {
            const hero = document.querySelector("#home");
            let rafId = null;

            window.addEventListener("mousemove", e => {
                if (!hero || rafId) return;

                rafId = requestAnimationFrame(() => {
                    const x = (e.clientX / window.innerWidth - 0.5) * 4;
                    const y = (e.clientY / window.innerHeight - 0.5) * 4;
                    hero.style.transform = `translate3d(${x}px, ${y}px, 0)`;
                    rafId = null;
                });
            });
        }

        /* =====================================================
           SCROLL ANIMATION (sa-item / pc-animate)
        ===================================================== */
        const animated = document.querySelectorAll(".sa-item, .pc-animate");

        const saObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("is-active");
                    entry.target.classList.remove("is-exit");
                } else {
                    entry.target.classList.remove("is-active");
                    entry.target.classList.add("is-exit");
                }
            });
        }, {
            threshold: 0.15,
            rootMargin: "0px 0px -10% 0px"
        });

        animated.forEach(el => saObserver.observe(el));
    });

    /* =====================================================
       CURSOR DRAGON EFFECT
    ===================================================== */
(() => {
  const canvas = document.getElementById('cursor-dragon');
  if (!canvas) return;

  const ctx = canvas.getContext('2d');
  let w, h;

  const trail = [];
  const MAX = 28;

  const mouse = { x: innerWidth / 2, y: innerHeight / 2 };
  let energy = 0;

  function resize() {
    w = canvas.width = innerWidth;
    h = canvas.height = innerHeight;
  }
  window.addEventListener('resize', resize);
  resize();

  document.addEventListener('mousemove', e => {
    mouse.x = e.clientX;
    mouse.y = e.clientY;
    energy = 1;
  });

  function update() {
    energy *= 0.92;

    trail.unshift({
      x: mouse.x + Math.random() * 1.5 - 0.75,
      y: mouse.y + Math.random() * 1.5 - 0.75,
      life: 1
    });

    if (trail.length > MAX) trail.pop();

    trail.forEach(p => p.life *= 0.96);
  }

  function draw() {
    ctx.clearRect(0, 0, w, h);

    for (let i = 0; i < trail.length; i++) {
      const p = trail[i];
      const t = i / trail.length;

      const r = 10 - t * 8;
      const alpha = p.life * energy * (0.12 - t * 0.08);

      if (alpha <= 0.002) continue;

      ctx.beginPath();
      ctx.arc(p.x, p.y, r, 0, Math.PI * 2);
      ctx.fillStyle = `rgba(99,102,241,${alpha})`;
      ctx.shadowBlur = 28;
      ctx.shadowColor = 'rgba(99,102,241,0.45)';
      ctx.fill();
    }
  }

  function animate() {
    update();
    draw();
    requestAnimationFrame(animate);
  }

  animate();
})();

    const btn = document.getElementById('toggle-certificates');
    if (btn) {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.cert-hidden')
                .forEach(el => el.classList.toggle('hidden'));

            const text = document.getElementById('cert-btn-text');
            text.textContent =
                text.textContent.includes('Show')
                    ? 'Show less'
                    : 'Show all certificates';
        });
    }

function toggleCertificates() {
    const grid = document.getElementById('certificateGrid');
    const text = document.getElementById('cert-btn-text');
    const icon = document.getElementById('cert-btn-icon');

    const isOpen = grid.classList.contains('active');

    if (!isOpen) {
        grid.classList.add('active');
        grid.style.maxHeight = grid.scrollHeight + 'px';
        text.innerText = 'Hide Certificates';
        icon.style.transform = 'rotate(180deg)';
    } else {
        grid.style.maxHeight = '0px';
        grid.classList.remove('active');
        text.innerText = 'View All Certificates';
        icon.style.transform = 'rotate(0deg)';
    }
}

document.addEventListener('DOMContentLoaded', () => {

    // animate skill cards
    document.querySelectorAll('.skill-card, .skill-fade')
        .forEach((el, idx) => {
            setTimeout(() => {
                el.classList.add('opacity-100', 'translate-y-0');
            }, idx * 80);
        });

    // animate skill bars
    document.querySelectorAll('.skill-bar')
        .forEach((bar, idx) => {
            const value = bar.dataset.value;

            setTimeout(() => {
                bar.style.transition =
                    'width 1.4s cubic-bezier(.4,0,.2,1)';
                bar.style.width = value + '%';
            }, idx * 120);
        });

});


    </script>

<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body>
</html>
