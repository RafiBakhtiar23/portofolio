@extends('public.layout')

@section('title', 'Rafi Bakhtiar – Cloud Enthusiast')

@section('content')

<!-- ================= HOME ================= -->
<section
    id="home"
    class="section-animate relative flex items-start
           pt-24 md:pt-32
           pb-24 md:pb-32
           scroll-mt-24
           bg-transparent">

    <div class="hero-ambient"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">

        <!-- HERO CARD -->
        <div
            class="home-hero-card
                   grid items-center gap-14 lg:gap-24
                   {{ $home->profile_image ? 'grid-cols-1 lg:grid-cols-2' : 'grid-cols-1' }}">

            <!-- ================= TEXT ================= -->
            <div
                class="order-1 text-center lg:text-left relative
                       {{ $home->profile_image ? '' : 'lg:col-span-2' }}">

                <!-- subtle accent -->
                <span
                    class="absolute -top-6 left-1/2 lg:left-0
                           -translate-x-1/2 lg:translate-x-0
                           w-14 h-[2px]
                           bg-indigo-500/60
                           rounded-full">
                </span>

                <!-- ROLE -->
                <p class="home-role sa-item sa-top">
                    {{ $home->role_text }}
                </p>

                <!-- HEADLINE -->
                <h1 class="home-title sa-item sa-right">
                    {{ $home->headline_line_1 }}
                    <br class="hidden sm:block">
                    {{ $home->headline_line_2 }}
                </h1>

                <!-- DESCRIPTION -->
                <p class="home-desc sa-item sa-left">
                    {{ $home->description }}
                </p>

                <!-- CTA -->
                <div class="home-cta sa-item sa-left">
                    <a href="#projects" class="btn-primary">
                        View Deployment Projects
                    </a>

                    <a href="#contact" class="btn-secondary">
                        Contact for Internship
                    </a>
                </div>

                <!-- META -->
                <p class="home-meta sa-item sa-bottom">
                      Based in Indonesia · Open for Internship & Remote Work
                </p>
            </div>

            <!-- ================= IMAGE (ONLY IF EXISTS) ================= -->
            @if ($home->profile_image)
            <div class="order-2 flex justify-center mt-12 lg:mt-0 sa-item sa-right">

                <div class="home-photo-wrap relative">

                    <!-- soft glow -->
                    <div
                        class="absolute inset-0
                               rounded-[28px]
                               bg-indigo-500/10
                               blur-2xl
                               -z-10">
                    </div>

                    <img
                        src="{{ asset('storage/' . $home->profile_image) }}"
                        alt="Rafi Bakhtiar"
                        class="home-photo">
                </div>

            </div>
            @endif

        </div>
    </div>
</section>



<!-- ================= ABOUT ================= -->
<section
    id="about"
    class="section-animate section-lux lux-indigo
           pt-32 md:pt-36
           pb-28
           scroll-mt-24">

    <div class="max-w-5xl mx-auto px-6">

        <!-- HEADER -->
        <div class="max-w-2xl mb-20">

            <h2 class="sa-item sa-left text-3xl sm:text-4xl font-bold tracking-tight">
                {{ $about->title }}
            </h2>

            <p class="sa-item sa-left mt-5 text-gray-600 leading-relaxed">
                {{ $about->intro }}
            </p>

        </div>

        <!-- CONTENT GRID -->
        <div class="grid gap-14 md:grid-cols-2 items-start">

            <!-- LEFT : STORY -->
            <div class="space-y-6 text-gray-600 leading-relaxed">

                <p class="sa-item sa-left">
                    {{ $about->story_1 }}
                </p>

                <p class="sa-item sa-left">
                    {{ $about->story_2 }}
                </p>

                <p class="sa-item sa-left">
                    {{ $about->story_3 }}
                </p>

            </div>

            <!-- RIGHT : HIGHLIGHTS -->
            <div class="lux-card p-8 sa-item sa-right">

                <h3 class="text-lg font-semibold mb-6">
                    {{ $about->focus_title }}
                </h3>

                <ul class="grid gap-y-4 gap-x-6
                           sm:grid-cols-1
                           lg:grid-cols-2
                           text-sm text-gray-600">

                    @foreach ($about->focus_items as $focus)
                        <li class="sa-item sa-bottom flex gap-3">
                            <span class="text-indigo-600 flex-shrink-0">▸</span>
                            <span class="leading-relaxed">
                                {{ $focus }}
                            </span>
                        </li>
                    @endforeach

                </ul>

                @if (!empty($about->meta_tags))
                    <div
                        class="sa-item sa-bottom mt-8 pt-6
                               border-t border-gray-100
                               flex flex-wrap gap-3
                               text-xs text-gray-500">

                        @foreach ($about->meta_tags as $tag)
                            <span class="px-3 py-1 rounded-full bg-gray-100">
                                {{ $tag }}
                            </span>
                        @endforeach

                    </div>
                @endif

            </div>

        </div>
    </div>
</section>


<!-- ================= PROJECTS ================= -->
<section
    id="projects"
    class="section-animate section-lux lux-cyan
           py-32 relative scroll-mt-24 overflow-hidden">

    <!-- ambient glow -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-1/3 left-1/2 -translate-x-1/2
                    w-[600px] h-[600px]
                    bg-cyan-500/10 blur-[160px] rounded-full">
        </div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

        <!-- ================= HEADER ================= -->
        <div class="text-center max-w-3xl mx-auto mb-20">
            <span
                class="sa-item sa-left
                       inline-flex items-center gap-2
                       text-xs tracking-widest uppercase
                       text-cyan-400/80">
                Work Showcase
                <span class="w-8 h-px bg-cyan-400/40"></span>
            </span>

            <h2
                class="sa-item sa-left
                       mt-4 text-3xl sm:text-4xl
                       font-bold tracking-tight">
                Selected Projects
            </h2>

            <p
                class="sa-item sa-bottom
                       mt-6 text-gray-400 leading-relaxed">
                A selection of systems and applications I’ve designed and built,
                focusing on clean architecture, performance,
                and real-world usability.
            </p>

            <div class="mt-12 flex justify-center">
                <span
                    class="h-px w-36
                           bg-gradient-to-r
                           from-transparent
                           via-cyan-500/40
                           to-transparent">
                </span>
            </div>
        </div>

        <!-- ================= PROJECT GRID ================= -->
        <div
            class="sa-item sa-left
                   grid gap-14
                   sm:grid-cols-2
                   lg:grid-cols-3">

            @foreach ($projects as $project)
            @php
                $limit = 110;
                $isLong = strlen($project->description) > $limit;
                $short = Str::limit($project->description, $limit);
            @endphp

            <div
                class="group relative
                       overflow-hidden
                       rounded-2xl
                       bg-white/5
                       border border-white/10
                       backdrop-blur-xl
                       transition
                       hover:-translate-y-1
                       hover:shadow-[0_20px_60px_rgba(0,0,0,.25)]">

                <!-- ================= THUMBNAIL ================= -->
                <div class="relative overflow-hidden aspect-[16/9] bg-black/20">
                    <img
                        src="{{ asset('storage/' . $project->thumbnail) }}"
                        alt="{{ $project->title }}"
                        class="absolute inset-0 w-full h-full object-cover
                               transition duration-700
                               group-hover:scale-105">

                    <div class="absolute inset-0
                                bg-gradient-to-t
                                from-black/60 via-black/20 to-transparent">
                    </div>
                </div>

                <!-- ================= CONTENT ================= -->
                <div class="p-6 flex flex-col gap-4">

                    <!-- BADGE -->
                    <span
                        class="w-fit px-3 py-1
                               rounded-full text-xs font-medium
                               bg-cyan-500/10
                               text-cyan-300
                               border border-cyan-400/10">
                        {{ $project->category }}
                    </span>

                    <!-- TITLE -->
                    <h3 class="text-base font-semibold leading-snug tracking-tight">
                        {{ $project->title }}
                    </h3>

                    <!-- DESCRIPTION -->
                    <div
                        x-data="{ open: false }"
                        class="text-sm text-gray-400 leading-relaxed">

                        <!-- short -->
                        <p x-show="!open">
                            {{ $short }}
                            @if ($isLong)
                                <button
                                    @click="open = true"
                                    class="ml-1 text-cyan-400 hover:underline">
                                    Baca selengkapnya
                                </button>
                            @endif
                        </p>

                        <!-- full -->
                        @if ($isLong)
                        <p x-show="open" x-cloak>
                            {{ $project->description }}
                            <button
                                @click="open = false"
                                class="ml-1 text-cyan-400 hover:underline">
                                Tutup
                            </button>
                        </p>
                        @endif
                    </div>

                    <!-- TAGS -->
                    @if (is_array($project->tags))
                    <div class="pt-1 flex flex-wrap gap-2 text-xs">
                        @foreach ($project->tags as $tag)
                        <span
                            class="px-3 py-1 rounded-full
                                   bg-white/5
                                   border border-white/5
                                   text-gray-300">
                            {{ $tag }}
                        </span>
                        @endforeach
                    </div>
                    @endif

                    <!-- BUTTON -->
                    @if ($project->project_url)
                    <a
                        href="{{ $project->project_url }}"
                        target="_blank"
                        class="mt-4 inline-flex
                               items-center justify-center
                               px-5 py-2.5
                               rounded-lg
                               text-sm font-semibold
                               bg-cyan-500 text-black
                               hover:bg-cyan-400 transition">
                        View Live Project →
                    </a>
                    @endif

                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<!-- ================= SKILLS ================= -->
<section
    id="skills"
    class="relative py-20 sm:py-24 scroll-mt-24
           bg-gradient-to-b from-[#0b0f1a] to-[#0a0d17]
           overflow-hidden">

    <!-- ambient glow -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-1/3 left-1/2 -translate-x-1/2
                    w-[520px] h-[520px]
                    bg-purple-500/12 blur-[180px] rounded-full">
        </div>
    </div>

    <div class="relative max-w-6xl mx-auto px-6">

        <!-- HEADER -->
        <div class="max-w-3xl mb-14 opacity-0 translate-y-6 skill-fade">
            <span
                class="sa-item sa-left inline-flex items-center gap-2
                       text-xs tracking-widest uppercase
                       text-purple-400/80">
                Skill Arsenal
                <span class="w-8 h-px bg-purple-400/40"></span>
            </span>

            <h2 class="sa-item sa-left mt-4 text-3xl sm:text-4xl font-semibold tracking-tight">
                Technical Skills
            </h2>

            <p class="sa-item sa-left mt-4 text-gray-400 leading-relaxed max-w-2xl">
                Core technologies I use in real projects — focused on
                reliability, scalability, and maintainability.
            </p>
        </div>

        <!-- GRID -->
        <div class="sa-item sa-left grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

            @foreach ($skillCategories as $category)
            <div
                class="skill-card relative rounded-2xl
                       border border-white/10
                       bg-white/5 backdrop-blur-xl
                       p-6
                       opacity-0 translate-y-6">

                <!-- CATEGORY TITLE -->
                <div class="mb-6">
                    <h3 class="text-sm font-semibold tracking-wide uppercase">
                        {{ $category->name }}
                    </h3>

                    <div class="mt-2 h-px w-14
                                bg-gradient-to-r
                                from-purple-500/60 to-transparent">
                    </div>
                </div>

                <!-- SKILLS -->
                <div class="space-y-4 text-sm">
                    @foreach ($category->skills->take(6) as $skill)
                    <div class="skill-item">
                        <!-- LABEL -->
                        <div class="flex justify-between mb-1">
                            <span class="font-medium text-gray-200">
                                {{ $skill->name }}
                            </span>

                            <span class="text-xs text-gray-500">
                                {{ $skill->level }}
                            </span>
                        </div>

                        <!-- BAR -->



<div class="relative h-1.5 rounded-full overflow-hidden">
    <div
        class="skill-bar absolute inset-y-0 left-0 w-0 rounded-full
               bg-purple-400
               shadow-[0_0_20px_rgba(168,85,247,0.9)]"
        data-value="{{ $skill->value }}">
    </div>
</div>




                    </div>
                    @endforeach
                </div>

            </div>
            @endforeach

        </div>
    </div>
</section>



<!-- ================= EXPERIENCE ================= -->
<section
    id="experience"
    class="section-animate lux-indigo
           py-28 scroll-mt-24 relative overflow-hidden">

    <!-- ambient glow -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-1/3 left-0
                    w-[420px] h-[420px]
                    bg-indigo-500/10 blur-[140px] rounded-full">
        </div>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8">

        <!-- ================= HEADER ================= -->
        <div class="max-w-3xl mb-16">

            <span
                class="sa-item sa-left
                       inline-flex items-center gap-2
                       text-[11px] tracking-widest uppercase
                       text-indigo-400/80">
                Career Journey
                <span class="w-6 h-px bg-indigo-400/40"></span>
            </span>

            <h2
                class="sa-item sa-left
                       mt-3 text-3xl sm:text-4xl font-bold tracking-tight">
                Experience & Hands-on Learning
            </h2>

            <p
                class="sa-item sa-left
                       mt-4 text-gray-400 leading-relaxed max-w-2xl">
                Hands-on experience through real projects, labs, and
                self-directed learning, focused on cloud infrastructure,
                backend systems, and production readiness.
            </p>
        </div>

        <!-- ================= METRICS ================= -->
        <div
            class="sa-item sa-left
                   mb-20 grid grid-cols-2 sm:grid-cols-3 gap-8">

            <div>
                <p class="text-2xl font-semibold text-indigo-400">Hands-on</p>
                <p class="mt-1 text-xs text-gray-500">
                    Project-Based Learning
                </p>
            </div>

            <div>
                <p class="text-2xl font-semibold text-indigo-400">Cloud</p>
                <p class="mt-1 text-xs text-gray-500">
                    AWS & Linux Focus
                </p>
            </div>

            <div>
                <p class="text-2xl font-semibold text-indigo-400">Production</p>
                <p class="mt-1 text-xs text-gray-500">
                    Readiness Mindset
                </p>
            </div>

        </div>

        <!-- ================= EXPERIENCE LIST ================= -->
        <div class="space-y-12 max-w-4xl mx-auto">

            @if ($experienceItems->isEmpty())

                <!-- EMPTY STATE (PROFESSIONAL PLACEHOLDER) -->
                <div
                    class="lux-card
                           p-8 text-center
                           bg-white/5 backdrop-blur-xl
                           border border-white/10
                           rounded-2xl
                           sa-item sa-right">

                    <h3 class="text-lg font-semibold text-white">
                        Building Experience Through Real Projects
                    </h3>

                    <p
                        class="mt-3 text-sm text-gray-400
                               max-w-xl mx-auto leading-relaxed">
                        I am currently building hands-on experience through
                        personal projects, labs, and real-world simulations
                        focused on cloud infrastructure, backend systems,
                        and deployment workflows.
                    </p>

                    <div
                        class="mt-6 flex flex-wrap justify-center gap-2 text-[11px]">

                        <span class="px-3 py-1 rounded-full bg-white/5 border border-white/10 text-gray-300">
                            AWS IAM
                        </span>
                        <span class="px-3 py-1 rounded-full bg-white/5 border border-white/10 text-gray-300">
                            VPC
                        </span>
                        <span class="px-3 py-1 rounded-full bg-white/5 border border-white/10 text-gray-300">
                            EC2
                        </span>
                        <span class="px-3 py-1 rounded-full bg-white/5 border border-white/10 text-gray-300">
                            Linux Server
                        </span>
                        <span class="px-3 py-1 rounded-full bg-white/5 border border-white/10 text-gray-300">
                            Deployment Basics
                        </span>

                    </div>
                </div>

            @else

                @foreach ($experienceItems as $item)

                <article
                    class="lux-card
                           p-6 sm:p-7
                           bg-white/5 backdrop-blur-xl
                           border border-white/10
                           rounded-2xl
                           overflow-hidden
                           sa-item sa-bottom">

                    <!-- TOP -->
                    <div
                        class="flex flex-col sm:flex-row
                               sm:items-start sm:justify-between
                               gap-4">

                        <div class="min-w-0">
                            <h3
                                class="text-base font-semibold
                                       tracking-tight text-white">
                                {{ $item->title }}
                            </h3>

                            <p class="text-sm text-gray-400 mt-1">
                                {{ $item->company }}
                                @if ($item->location)
                                    · {{ $item->location }}
                                @endif
                            </p>
                        </div>

                        <span
                            class="shrink-0 text-[11px]
                                   px-3 py-1 rounded-md
                                   text-indigo-300
                                   bg-indigo-500/10
                                   border border-indigo-400/10">
                            {{ $item->period }}
                        </span>

                    </div>

                    @if ($item->description)
                    <p
                        class="mt-4 text-sm text-gray-400
                               leading-relaxed whitespace-pre-line">
                        {{ $item->description }}
                    </p>
                    @endif

                    @if (!empty($item->tech_stack))
                    <div class="mt-6 flex flex-wrap gap-2 text-[11px]">
                        @foreach ($item->tech_stack as $tech)
                        <span
                            class="px-3 py-1 rounded-full
                                   bg-white/5
                                   border border-white/10
                                   text-gray-300">
                            {{ $tech }}
                        </span>
                        @endforeach
                    </div>
                    @endif

                </article>

                @endforeach

            @endif

        </div>

    </div>
</section>

<!-- ================= CERTIFICATES ================= -->
<section
    id="certificates"
    class="section-animate section-lux lux-slate
           py-28 scroll-mt-24 relative overflow-hidden">

    <div class="relative max-w-6xl mx-auto px-6">

        <!-- ================= HEADER ================= -->
        <div class="max-w-3xl mb-14">

            <span
                class="sa-item sa-left
                       text-[11px] tracking-widest uppercase
                       text-slate-400/80">
                Professional Credentials
            </span>

            <h2
                class="sa-item sa-left
                       mt-3 text-3xl sm:text-4xl font-bold tracking-tight">
                Certifications & Training
            </h2>

            <p
                class="sa-item sa-left
                       mt-4 text-gray-400 max-w-2xl leading-relaxed">
A collection of certifications and structured learning programs
covering cloud fundamentals, backend development, system administration,
and practical software engineering foundations.

These credentials represent continuous learning and hands-on preparation
toward building reliable, production-ready systems. </br> </br>Focused on building strong fundamentals before specialization.

            </p>

        </div>

        <!-- ================= PLACEHOLDER (IF EMPTY) ================= -->
        @if ($certificates->isEmpty())
        <div
            class="lux-card
                   p-8 max-w-3xl
                   bg-white/5 backdrop-blur-xl
                   border border-white/10
                   rounded-2xl
                   text-center
                   sa-item sa-bottom">

            <p class="text-sm text-gray-400 leading-relaxed">
                Currently building hands-on experience through
                structured training programs, labs, and guided learning paths.
                Certifications will be added as they are completed.
            </p>

        </div>
        @endif

        <!-- ================= VIEW ALL BUTTON ================= -->
        @if ($certificates->count() > 0)
        <div class="mt-14 flex justify-center">
            <button
                onclick="toggleCertificates()"
                class="inline-flex items-center gap-2
                       px-6 py-3 rounded-xl
                       text-sm font-medium
                       bg-white/5 text-white
                       border border-white/10
                       backdrop-blur
                       hover:bg-white/10
                       transition">

                <span id="cert-btn-text">View All Certificates</span>
                <span id="cert-btn-icon" class="transition-transform">↓</span>
            </button>
        </div>
        @endif

        <!-- ================= CERTIFICATE GRID ================= -->
        <div
            id="certificateGrid"
            class="mt-12 grid gap-8
                   sm:grid-cols-2 lg:grid-cols-3
                   opacity-0 max-h-0 overflow-hidden
                   transition-all duration-700 ease-in-out">

            @foreach ($certificates as $cert)
            <article
                class="lux-card
                       p-7 bg-white/5 backdrop-blur-xl
                       border border-white/10 rounded-2xl
                       sa-item sa-right">

                @if ($cert->image)
                <div class="mb-6 aspect-[16/11]
                            bg-white rounded-xl overflow-hidden">
                    <img
                        src="{{ asset('storage/' . $cert->image) }}"
                        alt="{{ $cert->title }}"
                        class="w-full h-full object-contain p-3">
                </div>
                @endif

                <h3 class="text-sm font-semibold text-white">
                    {{ $cert->title }}
                </h3>

                <p class="mt-1 text-xs text-gray-400">
                    {{ $cert->issuer }}
                    @if ($cert->year)
                        · {{ $cert->year }}
                    @endif
                </p>

                @if ($cert->description)
                <p class="mt-4 text-sm text-gray-400 leading-relaxed line-clamp-4">
                    {{ $cert->description }}
                </p>
                @endif

                @if ($cert->credential_url)
                <a
                    href="{{ $cert->credential_url }}"
                    target="_blank"
                    class="inline-flex items-center gap-1 mt-5
                           text-xs text-indigo-400 hover:underline">
                    View credential →
                </a>
                @endif

            </article>
            @endforeach

        </div>

    </div>
</section>


<!-- ================= CONTACT ================= -->
<section
    id="contact"
    class="section-animate section-lux lux-cyan
           py-28 scroll-mt-24 relative overflow-hidden">

    <!-- ambient -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute bottom-0 right-1/4
                    w-[420px] h-[420px]
                    bg-cyan-500/10 blur-[140px] rounded-full">
        </div>
    </div>

    <div class="relative max-w-5xl mx-auto px-6">

        <div class="grid gap-16 md:grid-cols-2 items-center">

            <!-- ================= LEFT ================= -->
            <div>

                <!-- TITLE -->
                <h2
                    class="sa-item sa-right
                           text-3xl sm:text-4xl font-bold tracking-tight">
                    Let’s Work Together
                </h2>

                <p
                    class="sa-item sa-left
                           mt-6 text-gray-400 leading-relaxed max-w-md">
                    Open to internship and junior opportunities in
                    cloud infrastructure, backend systems,
                    and production-focused environments.
                </p>

                <!-- STATUS -->
                <div
                    class="sa-item sa-bottom
                           mt-6 flex items-center gap-2 text-sm text-gray-400">
                    <span class="w-2.5 h-2.5 rounded-full bg-green-400 animate-pulse"></span>
                    Actively seeking opportunities
                </div>

                <!-- CTA -->
                <a
                    href="mailto:rafibakhtiar@gmail.com"
                    class="sa-item sa-bottom
                           group inline-flex items-center gap-3 mt-10
                           px-7 py-3 rounded-xl
                           bg-indigo-600 text-white text-sm font-medium
                           hover:bg-indigo-700 transition">

                    <span>Send Email</span>

                    <span
                        class="transition-transform duration-300
                               group-hover:translate-x-1">
                        →
                    </span>
                </a>

            </div>

            <!-- ================= RIGHT ================= -->
            <div
                class="lux-card
                       p-8 sa-item sa-right
                       bg-white/5 backdrop-blur-xl
                       border border-white/10 rounded-2xl">

                <p class="text-sm text-gray-500 mb-6">
                    You can also find me on:
                </p>

                <div class="space-y-5 text-sm">

                    <!-- EMAIL -->
                    <div class="flex items-center justify-between">
                        <span class="text-gray-400">Email</span>

                        <button
                            onclick="copyEmail()"
                            class="text-indigo-400 hover:underline">
                            rafibakhtiar@gmail.com
                        </button>
                    </div>

                    <!-- LINKEDIN -->
                    <div class="flex items-center justify-between">
                        <span class="text-gray-400">LinkedIn</span>

                        <a href="https://www.linkedin.com/in/rafibakhtiar"
                           target="_blank"
                           class="text-indigo-400 hover:underline">
                            linkedin.com/in/rafibakhtiar
                        </a>
                    </div>

                    <!-- GITHUB -->
                    <div class="flex items-center justify-between">
                        <span class="text-gray-400">GitHub</span>

                        <a href="https://github.com/RafiBakhtiar23"
                           target="_blank"
                           class="text-indigo-400 hover:underline">
                            github.com/RafiBakhtiar23
                        </a>
                    </div>

                </div>

                <!-- FOOTNOTE -->
                <p
                    id="copy-status"
                    class="mt-8 text-xs text-gray-500 leading-relaxed">
                    Based in Indonesia · Open for remote or on-site opportunities
                </p>

            </div>

        </div>
    </div>
</section>


<!-- ================= FOOTER ================= -->
<footer class="relative section-lux bg-[#0b1220]">

    <!-- subtle top fade -->
    <div class="absolute inset-x-0 top-0 h-24
                bg-gradient-to-b from-transparent to-[#0b1220]
                pointer-events-none">
    </div>

    <div class="relative max-w-7xl mx-auto px-6 py-24">

        <!-- MAIN GRID -->
        <div class="grid gap-16 md:grid-cols-2 items-start">

            <!-- LEFT -->
            <div>
                <h3 class="text-xl font-semibold tracking-tight text-white sa-item sa-left">
                    Rafi Bakhtiar Cahyadi<span class="text-indigo-500">.</span>
                </h3>

                <p class="mt-4 max-w-md text-sm leading-relaxed text-gray-400 sa-item sa-bottom">
                    Junior Cloud & Backend Engineer with a strong focus on
                    infrastructure reliability, clean deployment workflows,
                    and long-term system maintainability.
                </p>
            </div>

            <!-- RIGHT -->
            <div class="flex flex-col md:items-end gap-6">

                <!-- LINKS -->
                <nav class="flex gap-8 text-sm sa-item sa-right">
                    <a href="#projects"
                       class="text-gray-400 hover:text-indigo-400 transition">
                        Projects
                    </a>
                    <a href="https://github.com/RafiBakhtiar23" target="_blank"
                       class="text-gray-400 hover:text-indigo-400 transition">
                        GitHub
                    </a>
                    <a href="https://linkedin.com/in/rafibakhtiar" target="_blank"
                       class="text-gray-400 hover:text-indigo-400 transition">
                        LinkedIn
                    </a>
                    <a href="#contact"
                       class="text-gray-400 hover:text-indigo-400 transition">
                        Contact
                    </a>
                </nav>

                <!-- LOCATION -->
                <p class="text-xs text-gray-500 sa-item sa-bottom">
                    Based in Indonesia · Open for Internship & Junior Roles
                </p>
            </div>

        </div>

        <!-- DIVIDER -->
        <div
            class="mt-20 pt-8
                   border-t border-white/10
                   flex flex-col sm:flex-row
                   gap-4 sm:justify-between
                   text-xs text-gray-500">

            <span class="sa-item sa-left">
                © {{ date('Y') }} Rafi Bakhtiar Cahyadi. All rights reserved.
            </span>

            <span class="sa-item sa-right text-gray-400">
                Built with focus on production readiness
            </span>
        </div>

    </div>
</footer>


