<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Alif Bai'atur Ridhwan El Habibie | Web Developer & Informatics Student</title>

    <meta
        name="description"
        content="Mahasiswa Teknik Informatika dari Surabaya yang tertarik pada pengembangan aplikasi web, terus mempelajari teknologi modern, dan membangun berbagai project untuk mengembangkan kemampuan menuju dunia profesional."
    >

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F3EEEA] text-[#2C2621] font-sans antialiased min-h-screen flex flex-col justify-between selection:bg-[#776B5D] selection:text-white overflow-x-hidden">

    <main class="flex-1 flex flex-col justify-center">

        {{-- =========================================================
            SECTION 01 — HERO
        ========================================================== --}}
        <section aria-label="Hero Section" class="relative mx-auto w-full max-w-7xl px-6 sm:px-10 lg:px-16 py-12 lg:py-20 flex flex-col justify-center min-h-[85vh]">

            <div class="grid items-center gap-12 lg:grid-cols-[1.1fr_0.9fr] lg:gap-16">

                {{-- Left Column: Hero Content --}}
                <div class="flex flex-col justify-center z-10">

                    {{-- Top Pill Badge --}}
                    <div class="mb-6 inline-flex items-center gap-2 self-start rounded-full border border-[#B0A695]/40 bg-[#EBE3D5]/80 px-4 py-1.5 text-xs font-semibold tracking-wider text-[#776B5D] shadow-sm transition-transform duration-300 hover:scale-105">
                        <span class="h-2 w-2 rounded-full bg-[#776B5D] animate-pulse"></span>
                        <span class="uppercase">Web Developer & Informatics Student</span>
                    </div>

                    {{-- Main Headline --}}
                    <h1 class="text-4xl font-bold leading-[1.08] tracking-tight text-[#2C2621] sm:text-6xl lg:text-7xl xl:text-8xl">
                        Alif Bai'atur
                        <span class="block text-[#776B5D] transition-colors duration-500 hover:text-[#63574A]">
                            Ridhwan El Habibie.
                        </span>
                    </h1>

                    {{-- Description --}}
                    <p class="mt-6 max-w-2xl text-base leading-relaxed text-[#5E544A] sm:text-lg sm:leading-8">
                        Mahasiswa Teknik Informatika dari Surabaya yang tertarik pada pengembangan aplikasi web, terus mempelajari teknologi modern, dan membangun berbagai project untuk mengembangkan kemampuan menuju dunia profesional.
                    </p>

                    {{-- CTA Action Buttons & Social Links --}}
                    <div class="mt-8 flex flex-wrap items-center gap-4 sm:mt-10">

                        {{-- Primary Button: View Projects --}}
                        <a
                            href="#projects"
                            class="group inline-flex items-center gap-2.5 rounded-2xl bg-[#776B5D] px-7 py-3.5 text-sm font-semibold text-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:bg-[#63574A] hover:shadow-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#776B5D]"
                        >
                            <span>View Projects</span>
                            <svg class="h-4 w-4 transition-transform duration-300 group-hover:translate-y-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                            </svg>
                        </a>

                        {{-- Secondary Button: Download CV --}}
                        <a
                            href="{{ asset('files/CV-Alif-Baiatur-Ridhwan-El-Habibie.pdf') }}"
                            download="CV-Alif-Baiatur-Ridhwan-El-Habibie.pdf"
                            target="_blank"
                            class="group inline-flex items-center gap-2.5 rounded-2xl border border-[#B0A695]/60 bg-[#EBE3D5] px-7 py-3.5 text-sm font-semibold text-[#4A4036] transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/50 hover:bg-[#E2D8C7] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#776B5D]"
                        >
                            <svg class="h-4 w-4 text-[#776B5D] transition-transform duration-300 group-hover:-translate-y-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                            <span>Download CV</span>
                        </a>

                        {{-- Quick Social Icon Buttons --}}
                        <div class="flex items-center gap-2.5 sm:ml-2">

                            {{-- GitHub --}}
                            <a
                                href="https://github.com/alifbait"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="GitHub Profile (github.com/alifbait)"
                                title="GitHub: https://github.com/alifbait"
                                class="flex h-11 w-11 items-center justify-center rounded-2xl border border-[#B0A695]/50 bg-[#EBE3D5]/80 text-[#5E544A] transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/50 hover:bg-[#776B5D] hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-[#776B5D]"
                            >
                                <svg class="h-5 w-5 fill-current" viewBox="0 0 24 24">
                                    <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/>
                                </svg>
                            </a>

                            {{-- Email --}}
                            <a
                                href="mailto:alifbaiatur@gmail.com"
                                aria-label="Send Email to alifbaiatur@gmail.com"
                                title="Email: alifbaiatur@gmail.com"
                                class="flex h-11 w-11 items-center justify-center rounded-2xl border border-[#B0A695]/50 bg-[#EBE3D5]/80 text-[#5E544A] transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/50 hover:bg-[#776B5D] hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-[#776B5D]"
                            >
                                <svg class="h-5 w-5 fill-none stroke-current" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </a>

                            {{-- WhatsApp / Phone --}}
                            <a
                                href="https://wa.me/6283839996315"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="WhatsApp / Phone Contact (083839996315)"
                                title="WhatsApp: 083839996315"
                                class="flex h-11 w-11 items-center justify-center rounded-2xl border border-[#B0A695]/50 bg-[#EBE3D5]/80 text-[#5E544A] transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/50 hover:bg-[#776B5D] hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-[#776B5D]"
                            >
                                <svg class="h-5 w-5 fill-current" viewBox="0 0 24 24">
                                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                                </svg>
                            </a>

                        </div>

                    </div>

                    {{-- Contact & Social Info Bar --}}
                    <div class="mt-10 flex flex-wrap items-center gap-x-6 gap-y-3 border-t border-[#B0A695]/30 pt-6 text-xs sm:text-sm text-[#776B5D]">

                        <div class="flex items-center gap-1.5 font-medium">
                            <svg class="h-4 w-4 text-[#776B5D]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Surabaya, Indonesia</span>
                        </div>

                        <span class="hidden h-1 w-1 rounded-full bg-[#B0A695] sm:inline-block"></span>

                        <a href="mailto:alifbaiatur@gmail.com" class="transition-colors hover:text-[#2C2621]">
                            alifbaiatur@gmail.com
                        </a>

                        <span class="hidden h-1 w-1 rounded-full bg-[#B0A695] sm:inline-block"></span>

                        <a href="https://github.com/alifbait" target="_blank" rel="noopener noreferrer" class="transition-colors hover:text-[#2C2621]">
                            github.com/alifbait
                        </a>

                    </div>

                </div>

                {{-- Right Column: Transparent Profile Cut-Out directly on #F3EEEA --}}
                <div class="relative flex items-center justify-center lg:justify-end">

                    {{-- Interactive Scoped Container for Hero Photo --}}
                    <div id="hero-photo-container" class="relative w-full max-w-[340px] sm:max-w-[400px] cursor-pointer py-2">

                        {{-- Subtle Background Geometric Lines / Accents (No arch/circle/oval) --}}
                        <div class="absolute top-2 left-0 hidden h-24 w-24 rounded-full border border-[#B0A695]/30 pointer-events-none sm:block"></div>
                        <div class="absolute bottom-6 right-0 hidden h-32 w-32 rounded-full border border-[#B0A695]/20 pointer-events-none sm:block"></div>

                        {{-- Transparent Cut-out Profile Image standing directly on canvas --}}
                        <div class="relative z-10 mx-auto aspect-[4/5] w-full flex items-end justify-center">
                            <img
                                id="hero-photo-img"
                                src="{{ asset('images/profil.webp') }}"
                                alt="Alif Bai'atur Ridhwan El Habibie - Web Developer & Informatics Student"
                                class="w-full h-full object-cover object-top filter drop-shadow-[0_20px_35px_rgba(119,107,93,0.18)] transition-transform duration-300 ease-out pointer-events-auto"
                                style="will-change: transform;"
                            />
                        </div>

                        {{-- Floating Location Badge --}}
                        <div class="absolute bottom-0 right-2 z-20 flex items-center gap-1.5 rounded-full border border-[#B0A695]/40 bg-[#F3EEEA]/90 px-3.5 py-1.5 text-xs font-medium text-[#776B5D] shadow-sm backdrop-blur-sm transition-transform duration-300 hover:scale-105">
                            <svg class="h-3.5 w-3.5 text-[#776B5D]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Surabaya, Indonesia</span>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        {{-- =========================================================
            SECTION 02 — ABOUT ME
        ========================================================== --}}
        <section id="about" aria-label="About Me Section" class="relative w-full border-t border-[#B0A695]/30 bg-[#F3EEEA] pt-28 lg:pt-36 pb-24 lg:pb-36 overflow-hidden">
            
            <div class="relative mx-auto w-full max-w-7xl px-6 sm:px-10 lg:px-16">

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-8 items-center">

                    {{-- Left Column: Section Label, Main Heading & Narrative Paragraphs --}}
                    <div class="lg:col-span-4 space-y-6 relative z-10">

                        {{-- Section Label with Line --}}
                        <div class="flex items-center gap-3">
                            <span class="text-xs font-bold uppercase tracking-[0.25em] text-[#776B5D]">ABOUT ME</span>
                            <span class="h-px w-10 bg-[#776B5D]/40"></span>
                        </div>

                        {{-- Main Heading (Fully Unclipped & Spacious) --}}
                        <h2 class="text-3xl font-bold leading-tight text-[#2C2621] sm:text-4xl lg:text-4xl xl:text-5xl tracking-tight">
                            Building, learning, and <span class="text-[#776B5D]">growing through technology.</span>
                        </h2>

                        {{-- About Narrative Description --}}
                        <div class="space-y-4 text-sm sm:text-base leading-relaxed text-[#5E544A]">
                            <p>
                                Saya adalah mahasiswa S1 Teknik Informatika Universitas Trunojoyo Madura yang berasal dari Surabaya. Saya memiliki ketertarikan pada pengembangan aplikasi web dan senang mempelajari bagaimana sebuah ide dapat dikembangkan menjadi aplikasi yang dapat digunakan.
                            </p>
                            <p>
                                Selama perkuliahan, saya mengembangkan berbagai proyek melalui tugas akademik maupun proyek personal, mulai dari pengembangan website, pengolahan data, hingga integrasi teknologi dalam aplikasi. Saya terus memperdalam kemampuan teknis sekaligus belajar bekerja secara kolaboratif dan menyelesaikan masalah dalam proses pengembangan.
                            </p>
                            <p>
                                Saat ini, saya berfokus untuk mengembangkan kemampuan sebagai Web Developer dan mempersiapkan diri untuk mendapatkan pengalaman di lingkungan industri.
                            </p>
                        </div>

                        {{-- Decorative SVG Curves & Dot Grid at Bottom Left --}}
                        <div class="pt-4 flex items-center gap-4 opacity-40 pointer-events-none">
                            <div class="grid grid-cols-5 gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                                <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                                <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                                <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                                <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                                <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                                <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                                <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                                <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                                <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                            </div>
                        </div>

                    </div>

                    {{-- Center Column: Transparent Profile Cut-Out directly on #F3EEEA --}}
                    <div class="lg:col-span-4 flex justify-center relative my-6 lg:my-0">

                        {{-- Interactive Scoped Container for About Photo --}}
                        <div id="about-photo-container" class="relative w-full max-w-[320px] sm:max-w-[360px] cursor-pointer">

                            {{-- Dot Matrix Overlay behind Subject (Minimal Decorative Element) --}}
                            <div class="absolute -top-4 -right-2 z-0 grid grid-cols-4 gap-2 opacity-25 pointer-events-none">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                                <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                                <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                                <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                                <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                                <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                                <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                                <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                                <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                                <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                                <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                                <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                            </div>

                            {{-- Transparent Cut-out Profile Image directly on #F3EEEA --}}
                            <div class="relative z-10 mx-auto aspect-[4/5] w-full flex items-end justify-center">
                                <img
                                    id="about-photo-img"
                                    src="{{ asset('images/profil.webp') }}"
                                    alt="Alif Bai'atur Ridhwan El Habibie"
                                    class="w-full h-full object-cover object-top filter drop-shadow-[0_18px_30px_rgba(119,107,93,0.16)] transition-transform duration-300 ease-out pointer-events-auto"
                                    style="will-change: transform;"
                                />
                            </div>

                        </div>

                    </div>

                    {{-- Right Column: 4 Information Cards Stack --}}
                    <div class="lg:col-span-4 space-y-4 relative z-10">

                        {{-- Card 01: EDUCATION --}}
                        <div class="group rounded-2xl border border-[#B0A695]/40 bg-[#EBE3D5]/50 p-4 sm:p-5 flex items-start sm:items-center gap-4 shadow-sm hover:border-[#776B5D]/60 hover:bg-[#EBE3D5]/90 hover:-translate-y-1 transition-all duration-300">
                            <div class="w-12 h-12 rounded-full bg-[#E2D8C7] border border-[#B0A695]/30 flex items-center justify-center shrink-0 text-[#776B5D] group-hover:bg-[#776B5D] group-hover:text-white group-hover:scale-110 transition-all duration-300">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-[11px] font-bold uppercase tracking-wider text-[#776B5D]">EDUCATION</p>
                                <h3 class="text-base font-bold text-[#2C2621]">S1 Teknik Informatika</h3>
                                <p class="text-xs text-[#5E544A] mt-0.5">Universitas Trunojoyo Madura</p>
                                <p class="text-[11px] font-semibold text-[#776B5D] mt-1">2024 — Sekarang</p>
                            </div>
                        </div>

                        {{-- Card 02: FOCUS --}}
                        <div class="group rounded-2xl border border-[#B0A695]/40 bg-[#EBE3D5]/50 p-4 sm:p-5 flex items-start sm:items-center gap-4 shadow-sm hover:border-[#776B5D]/60 hover:bg-[#EBE3D5]/90 hover:-translate-y-1 transition-all duration-300">
                            <div class="w-12 h-12 rounded-full bg-[#E2D8C7] border border-[#B0A695]/30 flex items-center justify-center shrink-0 text-[#776B5D] group-hover:bg-[#776B5D] group-hover:text-white group-hover:scale-110 transition-all duration-300">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-[11px] font-bold uppercase tracking-wider text-[#776B5D]">FOCUS</p>
                                <h3 class="text-base font-bold text-[#2C2621]">Web Development</h3>
                                <p class="text-xs text-[#5E544A] mt-0.5">Pengembangan aplikasi web modern & fungsional.</p>
                            </div>
                        </div>

                        {{-- Card 03: CURRENTLY --}}
                        <div class="group rounded-2xl border border-[#B0A695]/40 bg-[#EBE3D5]/50 p-4 sm:p-5 flex items-start sm:items-center gap-4 shadow-sm hover:border-[#776B5D]/60 hover:bg-[#EBE3D5]/90 hover:-translate-y-1 transition-all duration-300">
                            <div class="w-12 h-12 rounded-full bg-[#E2D8C7] border border-[#B0A695]/30 flex items-center justify-center shrink-0 text-[#776B5D] group-hover:bg-[#776B5D] group-hover:text-white group-hover:scale-110 transition-all duration-300">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-[11px] font-bold uppercase tracking-wider text-[#776B5D]">CURRENTLY</p>
                                <h3 class="text-base font-bold text-[#2C2621]">Informatics Student</h3>
                                <p class="text-xs text-[#5E544A] mt-0.5">Mempersiapkan diri menuju dunia profesional.</p>
                            </div>
                        </div>

                        {{-- Card 04: LOCATION --}}
                        <div class="group rounded-2xl border border-[#B0A695]/40 bg-[#EBE3D5]/50 p-4 sm:p-5 flex items-start sm:items-center gap-4 shadow-sm hover:border-[#776B5D]/60 hover:bg-[#EBE3D5]/90 hover:-translate-y-1 transition-all duration-300">
                            <div class="w-12 h-12 rounded-full bg-[#E2D8C7] border border-[#B0A695]/30 flex items-center justify-center shrink-0 text-[#776B5D] group-hover:bg-[#776B5D] group-hover:text-white group-hover:scale-110 transition-all duration-300">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-[11px] font-bold uppercase tracking-wider text-[#776B5D]">LOCATION</p>
                                <h3 class="text-base font-bold text-[#2C2621]">Surabaya, Indonesia</h3>
                                <p class="text-xs text-[#5E544A] mt-0.5">Jawa Timur, Indonesia.</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        {{-- =========================================================
            SECTION 03 — SKILLS & TECHNOLOGIES
        ========================================================== --}}
        <section id="skills" aria-label="Skills & Technologies Section" class="relative w-full border-t border-[#B0A695]/30 bg-[#F3EEEA] py-24 lg:py-36 overflow-hidden">
            
            <div class="relative mx-auto w-full max-w-7xl px-6 sm:px-10 lg:px-16">

                {{-- Header Grid: Left Title & Description, Right Statement Quote Card --}}
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center mb-16 lg:mb-20">

                    {{-- Left Side: Label, Headline, Description --}}
                    <div class="lg:col-span-7 space-y-5">

                        {{-- Section Label with Line --}}
                        <div class="flex items-center gap-3">
                            <span class="text-xs font-bold uppercase tracking-[0.25em] text-[#776B5D]">SKILLS & TECHNOLOGIES</span>
                            <span class="h-px w-10 bg-[#776B5D]/40"></span>
                        </div>

                        {{-- Main Heading --}}
                        <h2 class="text-3xl font-bold leading-tight text-[#2C2621] sm:text-4xl lg:text-5xl xl:text-6xl tracking-tight">
                            Tools and technologies <br class="hidden sm:inline" />
                            <span class="text-[#776B5D]">I use</span>
                        </h2>

                        {{-- Supporting Description --}}
                        <p class="max-w-2xl text-base leading-relaxed text-[#5E544A] sm:text-lg sm:leading-8">
                            Berikut adalah tools dan teknologi yang saya gunakan dalam pengembangan proyek, mulai dari pengembangan web, pengelolaan data, hingga integrasi layanan eksternal.
                        </p>

                    </div>

                    {{-- Right Side: Statement Quote Card with Background Decorative Graphics --}}
                    <div class="lg:col-span-5 relative flex justify-center lg:justify-end">

                        {{-- Background Decorative Concentric Arches & Dots --}}
                        <div class="absolute -top-10 -right-6 h-48 w-48 rounded-full border border-[#B0A695]/20 pointer-events-none hidden sm:block"></div>
                        <div class="absolute -top-6 -right-2 z-0 grid grid-cols-5 gap-2 opacity-25 pointer-events-none">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                            <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                            <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                            <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                            <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                            <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                            <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                            <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                            <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                            <span class="w-1.5 h-1.5 rounded-full bg-[#776B5D]"></span>
                        </div>

                        {{-- Statement Card --}}
                        <div class="relative z-10 w-full max-w-md rounded-3xl border border-[#B0A695]/40 bg-[#EBE3D5]/70 p-6 sm:p-8 shadow-sm backdrop-blur-sm transition-all duration-300 hover:border-[#776B5D]/50 hover:bg-[#EBE3D5]/90">
                            
                            <div class="flex items-start gap-4">
                                {{-- Quote Icon Badge --}}
                                <div class="w-12 h-12 rounded-full bg-[#E2D8C7] border border-[#B0A695]/30 flex items-center justify-center shrink-0 text-[#776B5D] text-xl font-serif font-bold">
                                    “
                                </div>
                                
                                {{-- Statement Text --}}
                                <p class="text-sm sm:text-base font-medium leading-relaxed text-[#2C2621]">
                                    Saya terus mempelajari teknologi baru dan menyesuaikan tools yang digunakan sesuai kebutuhan proyek.
                                </p>
                            </div>

                            {{-- Bottom Accent Line --}}
                            <div class="mt-6 h-px w-12 bg-[#776B5D]/40"></div>
                        </div>

                    </div>

                </div>

                {{-- 6 Category Cards Grid (3 Columns on Desktop) --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">

                    {{-- Category 1: Programming --}}
                    <div class="group rounded-3xl border border-[#B0A695]/40 bg-[#EBE3D5]/40 p-6 sm:p-7 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/50 hover:bg-[#EBE3D5]/70 hover:shadow-md flex flex-col justify-between">
                        <div>
                            {{-- Header: Icon + Title + Description --}}
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-full bg-[#E2D8C7] border border-[#B0A695]/30 flex items-center justify-center shrink-0 text-[#776B5D] font-bold text-sm group-hover:bg-[#776B5D] group-hover:text-white transition-all duration-300">
                                    &lt;/&gt;
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-[#2C2621]">Programming</h3>
                                    <p class="text-xs text-[#5E544A] mt-1 leading-relaxed">
                                        Bahasa pemrograman yang saya gunakan dalam pengembangan aplikasi.
                                    </p>
                                </div>
                            </div>

                            {{-- Mini Tech Cards Grid --}}
                            <div class="grid grid-cols-3 gap-3 mt-6">
                                {{-- PHP --}}
                                <div class="group/item flex flex-col items-center justify-center gap-2 rounded-2xl border border-[#B0A695]/30 bg-[#F3EEEA]/90 p-3 text-center shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:bg-white">
                                    <img src="https://cdn.simpleicons.org/php" alt="PHP" class="h-8 w-8 object-contain transition-transform duration-300 group-hover/item:scale-110" loading="lazy" />
                                    <span class="text-xs font-semibold text-[#2C2621]">PHP</span>
                                </div>

                                {{-- JavaScript --}}
                                <div class="group/item flex flex-col items-center justify-center gap-2 rounded-2xl border border-[#B0A695]/30 bg-[#F3EEEA]/90 p-3 text-center shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:bg-white">
                                    <img src="https://cdn.simpleicons.org/javascript" alt="JavaScript" class="h-8 w-8 object-contain transition-transform duration-300 group-hover/item:scale-110" loading="lazy" />
                                    <span class="text-xs font-semibold text-[#2C2621]">JavaScript</span>
                                </div>

                                {{-- Python --}}
                                <div class="group/item flex flex-col items-center justify-center gap-2 rounded-2xl border border-[#B0A695]/30 bg-[#F3EEEA]/90 p-3 text-center shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:bg-white">
                                    <img src="https://cdn.simpleicons.org/python" alt="Python" class="h-8 w-8 object-contain transition-transform duration-300 group-hover/item:scale-110" loading="lazy" />
                                    <span class="text-xs font-semibold text-[#2C2621]">Python</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Category 2: Web Development --}}
                    <div class="group rounded-3xl border border-[#B0A695]/40 bg-[#EBE3D5]/40 p-6 sm:p-7 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/50 hover:bg-[#EBE3D5]/70 hover:shadow-md flex flex-col justify-between">
                        <div>
                            {{-- Header: Icon + Title + Description --}}
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-full bg-[#E2D8C7] border border-[#B0A695]/30 flex items-center justify-center shrink-0 text-[#776B5D] group-hover:bg-[#776B5D] group-hover:text-white transition-all duration-300">
                                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-[#2C2621]">Web Development</h3>
                                    <p class="text-xs text-[#5E544A] mt-1 leading-relaxed">
                                        Teknologi untuk membangun antarmuka dan backend aplikasi web.
                                    </p>
                                </div>
                            </div>

                            {{-- Mini Tech Cards Grid --}}
                            <div class="grid grid-cols-3 gap-2.5 sm:gap-3 mt-6">
                                {{-- HTML --}}
                                <div class="group/item flex flex-col items-center justify-center gap-2 rounded-2xl border border-[#B0A695]/30 bg-[#F3EEEA]/90 p-3 text-center shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:bg-white">
                                    <img src="https://cdn.simpleicons.org/html5" alt="HTML" class="h-8 w-8 object-contain transition-transform duration-300 group-hover/item:scale-110" loading="lazy" />
                                    <span class="text-xs font-semibold text-[#2C2621]">HTML</span>
                                </div>

                                {{-- CSS --}}
                                <div class="group/item flex flex-col items-center justify-center gap-2 rounded-2xl border border-[#B0A695]/30 bg-[#F3EEEA]/90 p-3 text-center shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:bg-white">
                                    <svg class="h-8 w-8 transition-transform duration-300 group-hover/item:scale-110" viewBox="0 0 512 512" aria-label="CSS3 Logo">
                                        <path fill="#264de4" d="M71.357 460.819L30.272 0h451.456l-41.085 460.619L256 512z"/>
                                        <path fill="#2965f1" d="M256 472.339l144.317-40.012L434.391 32H256z"/>
                                        <path fill="#ebebeb" d="M256 208.211h-88.718l-5.724-64.211H256V80H101.442l.551 6.173 17.442 195.839H256zM256 380.366l-.161.044-62.158-16.78-3.974-44.532H133.45l7.769 87.054L255.839 440l.161-.044z"/>
                                        <path fill="#fff" d="M256 208.211v63.8h83.005l-7.864 88.026-75.141 20.287v63.507l133.791-37.108 1.606-17.971 14.426-161.472.551-6.173H256zM256 80v63.999h154.144l.551-6.173L416.408 80z"/>
                                    </svg>
                                    <span class="text-xs font-semibold text-[#2C2621]">CSS</span>
                                </div>

                                {{-- Tailwind CSS --}}
                                <div class="group/item flex flex-col items-center justify-center gap-2 rounded-2xl border border-[#B0A695]/30 bg-[#F3EEEA]/90 p-3 text-center shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:bg-white">
                                    <img src="https://cdn.simpleicons.org/tailwindcss" alt="Tailwind CSS" class="h-8 w-8 object-contain transition-transform duration-300 group-hover/item:scale-110" loading="lazy" />
                                    <span class="text-[11px] font-semibold text-[#2C2621] leading-tight">Tailwind CSS</span>
                                </div>

                                {{-- Laravel --}}
                                <div class="group/item flex flex-col items-center justify-center gap-2 rounded-2xl border border-[#B0A695]/30 bg-[#F3EEEA]/90 p-3 text-center shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:bg-white">
                                    <img src="https://cdn.simpleicons.org/laravel" alt="Laravel" class="h-8 w-8 object-contain transition-transform duration-300 group-hover/item:scale-110" loading="lazy" />
                                    <span class="text-xs font-semibold text-[#2C2621]">Laravel</span>
                                </div>

                                {{-- CodeIgniter 4 --}}
                                <div class="group/item flex flex-col items-center justify-center gap-2 rounded-2xl border border-[#B0A695]/30 bg-[#F3EEEA]/90 p-3 text-center shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:bg-white col-span-2">
                                    <img src="https://cdn.simpleicons.org/codeigniter" alt="CodeIgniter 4" class="h-8 w-8 object-contain transition-transform duration-300 group-hover/item:scale-110" loading="lazy" />
                                    <span class="text-xs font-semibold text-[#2C2621]">CodeIgniter 4</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Category 3: Database --}}
                    <div class="group rounded-3xl border border-[#B0A695]/40 bg-[#EBE3D5]/40 p-6 sm:p-7 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/50 hover:bg-[#EBE3D5]/70 hover:shadow-md flex flex-col justify-between">
                        <div>
                            {{-- Header: Icon + Title + Description --}}
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-full bg-[#E2D8C7] border border-[#B0A695]/30 flex items-center justify-center shrink-0 text-[#776B5D] group-hover:bg-[#776B5D] group-hover:text-white transition-all duration-300">
                                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-[#2C2621]">Database</h3>
                                    <p class="text-xs text-[#5E544A] mt-1 leading-relaxed">
                                        Sistem manajemen basis data yang pernah saya gunakan.
                                    </p>
                                </div>
                            </div>

                            {{-- Mini Tech Cards Grid --}}
                            <div class="grid grid-cols-2 gap-3 mt-6">
                                {{-- MySQL --}}
                                <div class="group/item flex flex-col items-center justify-center gap-2 rounded-2xl border border-[#B0A695]/30 bg-[#F3EEEA]/90 p-3 text-center shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:bg-white">
                                    <img src="https://cdn.simpleicons.org/mysql" alt="MySQL" class="h-8 w-8 object-contain transition-transform duration-300 group-hover/item:scale-110" loading="lazy" />
                                    <span class="text-xs font-semibold text-[#2C2621]">MySQL</span>
                                </div>

                                {{-- PostgreSQL --}}
                                <div class="group/item flex flex-col items-center justify-center gap-2 rounded-2xl border border-[#B0A695]/30 bg-[#F3EEEA]/90 p-3 text-center shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:bg-white">
                                    <img src="https://cdn.simpleicons.org/postgresql" alt="PostgreSQL" class="h-8 w-8 object-contain transition-transform duration-300 group-hover/item:scale-110" loading="lazy" />
                                    <span class="text-xs font-semibold text-[#2C2621]">PostgreSQL</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Category 4: Tools & Design --}}
                    <div class="group rounded-3xl border border-[#B0A695]/40 bg-[#EBE3D5]/40 p-6 sm:p-7 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/50 hover:bg-[#EBE3D5]/70 hover:shadow-md flex flex-col justify-between">
                        <div>
                            {{-- Header: Icon + Title + Description --}}
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-full bg-[#E2D8C7] border border-[#B0A695]/30 flex items-center justify-center shrink-0 text-[#776B5D] group-hover:bg-[#776B5D] group-hover:text-white transition-all duration-300">
                                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-[#2C2621]">Tools & Design</h3>
                                    <p class="text-xs text-[#5E544A] mt-1 leading-relaxed">
                                        Tools yang mendukung proses pengembangan dan desain.
                                    </p>
                                </div>
                            </div>

                            {{-- Mini Tech Cards Grid --}}
                            <div class="grid grid-cols-2 gap-3 mt-6">
                                {{-- Git --}}
                                <div class="group/item flex flex-col items-center justify-center gap-2 rounded-2xl border border-[#B0A695]/30 bg-[#F3EEEA]/90 p-3 text-center shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:bg-white">
                                    <img src="https://cdn.simpleicons.org/git" alt="Git" class="h-8 w-8 object-contain transition-transform duration-300 group-hover/item:scale-110" loading="lazy" />
                                    <span class="text-xs font-semibold text-[#2C2621]">Git</span>
                                </div>

                                {{-- GitHub --}}
                                <div class="group/item flex flex-col items-center justify-center gap-2 rounded-2xl border border-[#B0A695]/30 bg-[#F3EEEA]/90 p-3 text-center shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:bg-white">
                                    <img src="https://cdn.simpleicons.org/github" alt="GitHub" class="h-8 w-8 object-contain transition-transform duration-300 group-hover/item:scale-110" loading="lazy" />
                                    <span class="text-xs font-semibold text-[#2C2621]">GitHub</span>
                                </div>

                                {{-- Figma --}}
                                <div class="group/item flex flex-col items-center justify-center gap-2 rounded-2xl border border-[#B0A695]/30 bg-[#F3EEEA]/90 p-3 text-center shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:bg-white">
                                    <img src="https://cdn.simpleicons.org/figma" alt="Figma" class="h-8 w-8 object-contain transition-transform duration-300 group-hover/item:scale-110" loading="lazy" />
                                    <span class="text-xs font-semibold text-[#2C2621]">Figma</span>
                                </div>

                                {{-- VS Code --}}
                                <div class="group/item flex flex-col items-center justify-center gap-2 rounded-2xl border border-[#B0A695]/30 bg-[#F3EEEA]/90 p-3 text-center shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:bg-white">
                                    <svg class="h-8 w-8 transition-transform duration-300 group-hover/item:scale-110" viewBox="0 0 24 24" aria-label="Visual Studio Code Logo">
                                        <path fill="#007ACC" d="M23.15 2.587L18.21.21a1.494 1.494 0 0 0-1.705.29l-9.46 8.63-4.12-3.12a.803.803 0 0 0-1.045.05L.27 7.42a.798.798 0 0 0 0 1.13l3.6 3.45-3.6 3.45a.798.798 0 0 0 0 1.13l1.61 1.37a.803.803 0 0 0 1.045.05l4.12-3.12 9.46 8.63a1.492 1.492 0 0 0 1.705.29l4.94-2.377A1.5 1.5 0 0 0 24 20.06V3.94a1.5 1.5 0 0 0-.85-1.353zm-6.52 14.333L10.29 12l6.34-4.92v9.84z"/>
                                    </svg>
                                    <span class="text-xs font-semibold text-[#2C2621]">VS Code</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Category 5: API & Integration --}}
                    <div class="group rounded-3xl border border-[#B0A695]/40 bg-[#EBE3D5]/40 p-6 sm:p-7 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/50 hover:bg-[#EBE3D5]/70 hover:shadow-md flex flex-col justify-between">
                        <div>
                            {{-- Header: Icon + Title + Description --}}
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-full bg-[#E2D8C7] border border-[#B0A695]/30 flex items-center justify-center shrink-0 text-[#776B5D] group-hover:bg-[#776B5D] group-hover:text-white transition-all duration-300">
                                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-[#2C2621]">API & Integration</h3>
                                    <p class="text-xs text-[#5E544A] mt-1 leading-relaxed">
                                        Teknologi untuk integrasi layanan eksternal dan pengembangan fitur tambahan.
                                    </p>
                                </div>
                            </div>

                            {{-- Mini Tech Cards Grid --}}
                            <div class="grid grid-cols-3 gap-2.5 sm:gap-3 mt-6">
                                {{-- REST API --}}
                                <div class="group/item flex flex-col items-center justify-center gap-2 rounded-2xl border border-[#B0A695]/30 bg-[#F3EEEA]/90 p-3 text-center shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:bg-white">
                                    <div class="h-8 w-8 flex items-center justify-center text-[#776B5D] group-hover/item:scale-110 transition-transform duration-300">
                                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <span class="text-xs font-semibold text-[#2C2621]">REST API</span>
                                </div>

                                {{-- Geolocation API --}}
                                <div class="group/item flex flex-col items-center justify-center gap-2 rounded-2xl border border-[#B0A695]/30 bg-[#F3EEEA]/90 p-3 text-center shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:bg-white">
                                    <div class="h-8 w-8 flex items-center justify-center text-[#776B5D] group-hover/item:scale-110 transition-transform duration-300">
                                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <span class="text-[11px] font-semibold text-[#2C2621] leading-tight">Geolocation API</span>
                                </div>

                                {{-- Cloudinary --}}
                                <div class="group/item flex flex-col items-center justify-center gap-2 rounded-2xl border border-[#B0A695]/30 bg-[#F3EEEA]/90 p-3 text-center shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:bg-white">
                                    <img src="https://cdn.simpleicons.org/cloudinary" alt="Cloudinary" class="h-8 w-8 object-contain transition-transform duration-300 group-hover/item:scale-110" loading="lazy" />
                                    <span class="text-xs font-semibold text-[#2C2621]">Cloudinary</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Category 6: Environment & Others --}}
                    <div class="group rounded-3xl border border-[#B0A695]/40 bg-[#EBE3D5]/40 p-6 sm:p-7 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/50 hover:bg-[#EBE3D5]/70 hover:shadow-md flex flex-col justify-between">
                        <div>
                            {{-- Header: Icon + Title + Description --}}
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-full bg-[#E2D8C7] border border-[#B0A695]/30 flex items-center justify-center shrink-0 text-[#776B5D] group-hover:bg-[#776B5D] group-hover:text-white transition-all duration-300">
                                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-[#2C2621]">Environment & Others</h3>
                                    <p class="text-xs text-[#5E544A] mt-1 leading-relaxed">
                                        Tools pendukung dalam pengembangan aplikasi.
                                    </p>
                                </div>
                            </div>

                            {{-- Mini Tech Cards Grid --}}
                            <div class="grid grid-cols-2 gap-3 mt-6">
                                {{-- XAMPP --}}
                                <div class="group/item flex flex-col items-center justify-center gap-2 rounded-2xl border border-[#B0A695]/30 bg-[#F3EEEA]/90 p-3 text-center shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:bg-white">
                                    <img src="https://cdn.simpleicons.org/xampp" alt="XAMPP" class="h-8 w-8 object-contain transition-transform duration-300 group-hover/item:scale-110" loading="lazy" />
                                    <span class="text-xs font-semibold text-[#2C2621]">XAMPP</span>
                                </div>

                                {{-- Node.js --}}
                                <div class="group/item flex flex-col items-center justify-center gap-2 rounded-2xl border border-[#B0A695]/30 bg-[#F3EEEA]/90 p-3 text-center shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:bg-white">
                                    <img src="https://cdn.simpleicons.org/nodedotjs" alt="Node.js" class="h-8 w-8 object-contain transition-transform duration-300 group-hover/item:scale-110" loading="lazy" />
                                    <span class="text-xs font-semibold text-[#2C2621]">Node.js</span>
                                </div>

                                {{-- npm --}}
                                <div class="group/item flex flex-col items-center justify-center gap-2 rounded-2xl border border-[#B0A695]/30 bg-[#F3EEEA]/90 p-3 text-center shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:bg-white">
                                    <img src="https://cdn.simpleicons.org/npm" alt="npm" class="h-8 w-8 object-contain transition-transform duration-300 group-hover/item:scale-110" loading="lazy" />
                                    <span class="text-xs font-semibold text-[#2C2621]">npm</span>
                                </div>

                                {{-- Composer --}}
                                <div class="group/item flex flex-col items-center justify-center gap-2 rounded-2xl border border-[#B0A695]/30 bg-[#F3EEEA]/90 p-3 text-center shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:bg-white">
                                    <img src="https://cdn.simpleicons.org/composer" alt="Composer" class="h-8 w-8 object-contain transition-transform duration-300 group-hover/item:scale-110" loading="lazy" />
                                    <span class="text-xs font-semibold text-[#2C2621]">Composer</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>

        {{-- =========================================================
            SECTION 04 — FEATURED PROJECTS
        ========================================================== --}}
        <section id="projects" aria-label="Featured Projects" class="relative mx-auto w-full max-w-7xl px-6 sm:px-10 lg:px-16 py-20 lg:py-28">

            {{-- Section Header --}}
            <div class="mb-12 lg:mb-16">
                {{-- Label --}}
                <span class="inline-block text-xs font-bold tracking-[0.2em] uppercase text-[#776B5D] mb-4">Featured Projects</span>

                {{-- Heading --}}
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight tracking-tight text-[#2C2621]">
                    Selected work that<br class="hidden sm:block"> I've built
                </h2>

                {{-- Description --}}
                <p class="mt-4 max-w-xl text-sm sm:text-base leading-relaxed text-[#5E544A]">
                    Beberapa project yang saya kerjakan secara mandiri maupun kolaboratif selama proses perkuliahan dan pengembangan kemampuan.
                </p>
            </div>

            {{-- ============================
                3 COMPACT PROJECT CARDS GRID
            ============================= --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">

                {{-- Card 1: Sistem Absensi Peserta Magang --}}
                <div id="project-card-1"
                     onclick="toggleProjectDetail('project-detail-1')"
                     class="project-card rounded-3xl border border-[#B0A695]/40 bg-[#EBE3D5]/30 hover:bg-[#EBE3D5]/50 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-lg cursor-pointer flex flex-col justify-between p-5 sm:p-6 group select-none">
                    <div>
                        {{-- Thumbnail --}}
                        <div class="overflow-hidden rounded-2xl aspect-[16/10] bg-[#EBE3D5]/60 mb-5 relative border border-[#B0A695]/20">
                            <img src="{{ asset('images/absensi_dashboard.jpeg') }}"
                                 alt="Thumbnail Sistem Absensi Peserta Magang"
                                 class="w-full h-full object-cover object-top transition-transform duration-500 ease-out group-hover:scale-105"
                                 loading="lazy">
                        </div>

                        {{-- Label / Category --}}
                        <div class="mb-2">
                            <span class="inline-block text-[10px] font-bold tracking-[0.18em] uppercase text-[#776B5D] bg-[#EBE3D5]/80 border border-[#B0A695]/40 px-2.5 py-0.5 rounded-full">
                                PERSONAL PROJECT
                            </span>
                        </div>

                        {{-- Title --}}
                        <h3 class="text-xl font-bold text-[#2C2621] group-hover:text-[#776B5D] transition-colors leading-snug mb-2">
                            Sistem Absensi Peserta Magang
                        </h3>

                        {{-- Role --}}
                        <div class="text-xs font-semibold text-[#776B5D] flex items-center gap-1.5 mb-2">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                            <span>Full-stack Development</span>
                        </div>

                        {{-- Short Tech --}}
                        <p class="text-xs text-[#5E544A]/80 font-medium leading-relaxed">
                            PHP • CodeIgniter 4 • MySQL
                        </p>
                    </div>

                    {{-- Affordance --}}
                    <div class="mt-6 pt-4 border-t border-[#B0A695]/20 flex items-center justify-between">
                        <span class="detail-btn-text text-xs font-bold text-[#776B5D] group-hover:text-[#2C2621] transition-colors">
                            View Details
                        </span>
                        <span class="flex h-7 w-7 items-center justify-center rounded-full bg-[#EBE3D5]/70 group-hover:bg-[#776B5D] group-hover:text-white text-[#776B5D] transition-all duration-300">
                            <svg class="detail-btn-icon w-3.5 h-3.5 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                        </span>
                    </div>
                </div>

                {{-- Card 2: Pendata --}}
                <div id="project-card-2"
                     onclick="toggleProjectDetail('project-detail-2')"
                     class="project-card rounded-3xl border border-[#B0A695]/40 bg-[#EBE3D5]/30 hover:bg-[#EBE3D5]/50 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-lg cursor-pointer flex flex-col justify-between p-5 sm:p-6 group select-none">
                    <div>
                        {{-- Thumbnail --}}
                        <div class="overflow-hidden rounded-2xl aspect-[16/10] bg-[#EBE3D5]/60 mb-5 relative border border-[#B0A695]/20">
                            <img src="{{ asset('images/pendat1.jpeg') }}"
                                 alt="Thumbnail Pendata Data Mining"
                                 class="w-full h-full object-cover object-top transition-transform duration-500 ease-out group-hover:scale-105"
                                 loading="lazy">
                        </div>

                        {{-- Label / Category --}}
                        <div class="mb-2">
                            <span class="inline-block text-[10px] font-bold tracking-[0.18em] uppercase text-[#776B5D] bg-[#EBE3D5]/80 border border-[#B0A695]/40 px-2.5 py-0.5 rounded-full">
                                ACADEMIC PROJECT
                            </span>
                        </div>

                        {{-- Title --}}
                        <h3 class="text-xl font-bold text-[#2C2621] group-hover:text-[#776B5D] transition-colors leading-snug mb-2">
                            Pendata
                        </h3>

                        {{-- Role --}}
                        <div class="text-xs font-semibold text-[#776B5D] flex items-center gap-1.5 mb-2">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                            <span>Individual Development</span>
                        </div>

                        {{-- Short Tech --}}
                        <p class="text-xs text-[#5E544A]/80 font-medium leading-relaxed">
                            Data Mining
                        </p>
                    </div>

                    {{-- Affordance --}}
                    <div class="mt-6 pt-4 border-t border-[#B0A695]/20 flex items-center justify-between">
                        <span class="detail-btn-text text-xs font-bold text-[#776B5D] group-hover:text-[#2C2621] transition-colors">
                            View Details
                        </span>
                        <span class="flex h-7 w-7 items-center justify-center rounded-full bg-[#EBE3D5]/70 group-hover:bg-[#776B5D] group-hover:text-white text-[#776B5D] transition-all duration-300">
                            <svg class="detail-btn-icon w-3.5 h-3.5 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                        </span>
                    </div>
                </div>

                {{-- Card 3: Omah ID --}}
                <div id="project-card-3"
                     onclick="toggleProjectDetail('project-detail-3')"
                     class="project-card rounded-3xl border border-[#B0A695]/40 bg-[#EBE3D5]/30 hover:bg-[#EBE3D5]/50 transition-all duration-300 hover:-translate-y-1.5 hover:shadow-lg cursor-pointer flex flex-col justify-between p-5 sm:p-6 group select-none">
                    <div>
                        {{-- Thumbnail --}}
                        <div class="overflow-hidden rounded-2xl aspect-[16/10] bg-[#EBE3D5]/60 mb-5 relative border border-[#B0A695]/20">
                            <img src="{{ asset('images/omah_landing.jpeg') }}"
                                 alt="Thumbnail Omah ID E-commerce"
                                 class="w-full h-full object-cover object-top transition-transform duration-500 ease-out group-hover:scale-105"
                                 loading="lazy">
                        </div>

                        {{-- Label / Category --}}
                        <div class="mb-2">
                            <span class="inline-block text-[10px] font-bold tracking-[0.18em] uppercase text-[#776B5D] bg-[#EBE3D5]/80 border border-[#B0A695]/40 px-2.5 py-0.5 rounded-full">
                                TEAM PROJECT
                            </span>
                        </div>

                        {{-- Title --}}
                        <h3 class="text-xl font-bold text-[#2C2621] group-hover:text-[#776B5D] transition-colors leading-snug mb-2">
                            Omah ID
                        </h3>

                        {{-- Role --}}
                        <div class="text-xs font-semibold text-[#776B5D] flex items-center gap-1.5 mb-2">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                            <span>UI/UX Designer & Frontend</span>
                        </div>

                        {{-- Short Tech --}}
                        <p class="text-xs text-[#5E544A]/80 font-medium leading-relaxed">
                            Figma • Frontend
                        </p>
                    </div>

                    {{-- Affordance --}}
                    <div class="mt-6 pt-4 border-t border-[#B0A695]/20 flex items-center justify-between">
                        <span class="detail-btn-text text-xs font-bold text-[#776B5D] group-hover:text-[#2C2621] transition-colors">
                            View Details
                        </span>
                        <span class="flex h-7 w-7 items-center justify-center rounded-full bg-[#EBE3D5]/70 group-hover:bg-[#776B5D] group-hover:text-white text-[#776B5D] transition-all duration-300">
                            <svg class="detail-btn-icon w-3.5 h-3.5 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                        </span>
                    </div>
                </div>

            </div>

            {{-- ============================
                EXPANDABLE PROJECT DETAILS PANEL
            ============================= --}}
            <div id="project-details-container" class="mt-10">

                {{-- Detail 1: Sistem Absensi Peserta Magang --}}
                <div id="project-detail-1" class="project-detail-panel hidden rounded-3xl border border-[#B0A695]/50 bg-[#EBE3D5]/25 p-6 sm:p-8 lg:p-10 shadow-sm transition-all duration-300">
                    {{-- Header --}}
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 pb-6 border-b border-[#B0A695]/30">
                        <div>
                            <span class="inline-block text-[11px] font-bold tracking-[0.18em] uppercase text-[#776B5D] bg-[#EBE3D5]/80 border border-[#B0A695]/40 px-3 py-1 rounded-full mb-2">
                                PERSONAL PROJECT
                            </span>
                            <h3 class="text-2xl sm:text-3xl font-bold text-[#2C2621]">
                                Sistem Absensi Peserta Magang
                            </h3>
                            <p class="text-xs sm:text-sm font-semibold text-[#776B5D] mt-1">
                                Role: Full-stack Development
                            </p>
                        </div>

                        {{-- Close Button --}}
                        <button type="button"
                                onclick="toggleProjectDetail(null)"
                                class="self-start sm:self-center inline-flex items-center gap-2 rounded-full border border-[#B0A695]/40 bg-[#EBE3D5]/80 hover:bg-[#EBE3D5] px-4 py-2 text-xs font-semibold text-[#5E544A] hover:text-[#2C2621] transition-all hover:scale-105 shadow-sm">
                            <span>Tutup Detail</span>
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </div>

                    {{-- Body Content --}}
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 pt-8">
                        {{-- Left Column: Description & Features --}}
                        <div class="lg:col-span-7 space-y-6">
                            <div>
                                <h4 class="text-xs font-bold tracking-[0.15em] uppercase text-[#776B5D] mb-2.5">
                                    Deskripsi Project
                                </h4>
                                <p class="text-sm sm:text-base leading-relaxed text-[#4A4036] bg-white/40 p-4 sm:p-5 rounded-2xl border border-[#B0A695]/20">
                                    Sistem absensi peserta magang berbasis web yang saya kembangkan dari awal untuk mengelola kehadiran, validasi lokasi, selfie verification, pengajuan izin, monitoring, dan pelaporan.
                                </p>
                            </div>

                            <div>
                                <h4 class="text-xs font-bold tracking-[0.15em] uppercase text-[#776B5D] mb-3">
                                    Fitur Utama
                                </h4>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
                                    <div class="flex items-center gap-2.5 p-3 rounded-xl bg-white/40 border border-[#B0A695]/20 text-xs font-semibold text-[#2C2621]">
                                        <svg class="w-4 h-4 text-[#776B5D] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                        <span>Check-in/Check-out</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-3 rounded-xl bg-white/40 border border-[#B0A695]/20 text-xs font-semibold text-[#2C2621]">
                                        <svg class="w-4 h-4 text-[#776B5D] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                        <span>GPS Validation</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-3 rounded-xl bg-white/40 border border-[#B0A695]/20 text-xs font-semibold text-[#2C2621]">
                                        <svg class="w-4 h-4 text-[#776B5D] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                        <span>Selfie Verification</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-3 rounded-xl bg-white/40 border border-[#B0A695]/20 text-xs font-semibold text-[#2C2621]">
                                        <svg class="w-4 h-4 text-[#776B5D] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                        <span>Leave/Permission Management</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-3 rounded-xl bg-white/40 border border-[#B0A695]/20 text-xs font-semibold text-[#2C2621]">
                                        <svg class="w-4 h-4 text-[#776B5D] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                        <span>Attendance Monitoring</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-3 rounded-xl bg-white/40 border border-[#B0A695]/20 text-xs font-semibold text-[#2C2621]">
                                        <svg class="w-4 h-4 text-[#776B5D] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                        <span>Reporting</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Right Column: Tech Details & GitHub Link --}}
                        <div class="lg:col-span-5 flex flex-col justify-between space-y-6">
                            <div>
                                <h4 class="text-xs font-bold tracking-[0.15em] uppercase text-[#776B5D] mb-3">
                                    Teknologi & Tools
                                </h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="inline-block px-3 py-1.5 rounded-xl bg-white/50 border border-[#B0A695]/30 text-xs font-semibold text-[#2C2621]">PHP</span>
                                    <span class="inline-block px-3 py-1.5 rounded-xl bg-white/50 border border-[#B0A695]/30 text-xs font-semibold text-[#2C2621]">CodeIgniter 4</span>
                                    <span class="inline-block px-3 py-1.5 rounded-xl bg-white/50 border border-[#B0A695]/30 text-xs font-semibold text-[#2C2621]">MySQL</span>
                                    <span class="inline-block px-3 py-1.5 rounded-xl bg-white/50 border border-[#B0A695]/30 text-xs font-semibold text-[#2C2621]">Tailwind CSS</span>
                                    <span class="inline-block px-3 py-1.5 rounded-xl bg-white/50 border border-[#B0A695]/30 text-xs font-semibold text-[#2C2621]">Alpine.js</span>
                                    <span class="inline-block px-3 py-1.5 rounded-xl bg-white/50 border border-[#B0A695]/30 text-xs font-semibold text-[#2C2621]">Cloudinary</span>
                                    <span class="inline-block px-3 py-1.5 rounded-xl bg-white/50 border border-[#B0A695]/30 text-xs font-semibold text-[#2C2621]">Geolocation API</span>
                                </div>
                            </div>

                            <div class="pt-6 border-t border-[#B0A695]/20">
                                <a href="https://github.com/alifbait/bakorwil-absensi"
                                   target="_blank"
                                   rel="noopener noreferrer"
                                   class="inline-flex items-center justify-center gap-2.5 w-full rounded-2xl bg-[#776B5D] px-6 py-3.5 text-xs font-bold uppercase tracking-wider text-white shadow-sm transition-all duration-300 hover:bg-[#63574A] hover:shadow-md hover:-translate-y-0.5">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
                                    <span>Lihat Source Code di GitHub</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Screenshots Gallery --}}
                    <div class="mt-8 pt-8 border-t border-[#B0A695]/30">
                        <div class="w-full max-w-[700px] mx-auto">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="text-xs font-bold tracking-[0.15em] uppercase text-[#776B5D]">
                                    Gallery & Tampilan Sistem
                                </h4>
                                <span class="text-xs text-[#5E544A]/70">4 Screenshots</span>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                {{-- Screenshot 1 --}}
                                <div class="rounded-2xl overflow-hidden border border-[#B0A695]/30 bg-white/40 shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between">
                                    <div class="h-[180px] sm:h-[220px] flex items-center justify-center bg-[#EBE3D5]/20 p-2 overflow-hidden">
                                        <img src="{{ asset('images/absensi_dashboard.jpeg') }}"
                                             alt="Dashboard Monitoring Sistem Absensi"
                                             class="max-h-full max-w-full w-auto h-auto object-contain object-center transition-transform duration-500 hover:scale-105"
                                             loading="lazy">
                                    </div>
                                    <div class="p-2.5 border-t border-[#B0A695]/20 bg-white/30 text-center">
                                        <p class="text-xs font-semibold text-[#5E544A]">Dashboard & Monitoring Kehadiran</p>
                                    </div>
                                </div>

                                {{-- Screenshot 2 --}}
                                <div class="rounded-2xl overflow-hidden border border-[#B0A695]/30 bg-white/40 shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between">
                                    <div class="h-[180px] sm:h-[220px] flex items-center justify-center bg-[#EBE3D5]/20 p-2 overflow-hidden">
                                        <img src="{{ asset('images/absensi_login.jpeg') }}"
                                             alt="Halaman Login Sistem Absensi"
                                             class="max-h-full max-w-full w-auto h-auto object-contain object-center transition-transform duration-500 hover:scale-105"
                                             loading="lazy">
                                    </div>
                                    <div class="p-2.5 border-t border-[#B0A695]/20 bg-white/30 text-center">
                                        <p class="text-xs font-semibold text-[#5E544A]">Halaman Autentikasi / Login</p>
                                    </div>
                                </div>

                                {{-- Screenshot 3 --}}
                                <div class="rounded-2xl overflow-hidden border border-[#B0A695]/30 bg-white/40 shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between">
                                    <div class="h-[180px] sm:h-[220px] flex items-center justify-center bg-[#EBE3D5]/20 p-2 overflow-hidden">
                                        <img src="{{ asset('images/absensi_profile.jpeg') }}"
                                             alt="Halaman Profile Peserta Magang"
                                             class="max-h-full max-w-full w-auto h-auto object-contain object-center transition-transform duration-500 hover:scale-105"
                                             loading="lazy">
                                    </div>
                                    <div class="p-2.5 border-t border-[#B0A695]/20 bg-white/30 text-center">
                                        <p class="text-xs font-semibold text-[#5E544A]">Profil & Validasi Peserta</p>
                                    </div>
                                </div>

                                {{-- Screenshot 4 --}}
                                <div class="rounded-2xl overflow-hidden border border-[#B0A695]/30 bg-white/40 shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between">
                                    <div class="h-[180px] sm:h-[220px] flex items-center justify-center bg-[#EBE3D5]/20 p-2 overflow-hidden">
                                        <img src="{{ asset('images/absensi_user.jpeg') }}"
                                             alt="Halaman Data Peserta Magang"
                                             class="max-h-full max-w-full w-auto h-auto object-contain object-center transition-transform duration-500 hover:scale-105"
                                             loading="lazy">
                                    </div>
                                    <div class="p-2.5 border-t border-[#B0A695]/20 bg-white/30 text-center">
                                        <p class="text-xs font-semibold text-[#5E544A]">Manajemen Data Peserta & Izin</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Detail 2: Pendata --}}
                <div id="project-detail-2" class="project-detail-panel hidden rounded-3xl border border-[#B0A695]/50 bg-[#EBE3D5]/25 p-6 sm:p-8 lg:p-10 shadow-sm transition-all duration-300">
                    {{-- Header --}}
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 pb-6 border-b border-[#B0A695]/30">
                        <div>
                            <span class="inline-block text-[11px] font-bold tracking-[0.18em] uppercase text-[#776B5D] bg-[#EBE3D5]/80 border border-[#B0A695]/40 px-3 py-1 rounded-full mb-2">
                                ACADEMIC PROJECT
                            </span>
                            <h3 class="text-2xl sm:text-3xl font-bold text-[#2C2621]">
                                Pendata
                            </h3>
                            <p class="text-xs sm:text-sm font-semibold text-[#776B5D] mt-1">
                                Role: Individual Development • Mata Kuliah Penambangan Data
                            </p>
                        </div>

                        {{-- Close Button --}}
                        <button type="button"
                                onclick="toggleProjectDetail(null)"
                                class="self-start sm:self-center inline-flex items-center gap-2 rounded-full border border-[#B0A695]/40 bg-[#EBE3D5]/80 hover:bg-[#EBE3D5] px-4 py-2 text-xs font-semibold text-[#5E544A] hover:text-[#2C2621] transition-all hover:scale-105 shadow-sm">
                            <span>Tutup Detail</span>
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </div>

                    {{-- Body Content --}}
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 pt-8">
                        {{-- Left Column: Description & Highlights --}}
                        <div class="lg:col-span-7 space-y-6">
                            <div>
                                <h4 class="text-xs font-bold tracking-[0.15em] uppercase text-[#776B5D] mb-2.5">
                                    Deskripsi Project
                                </h4>
                                <p class="text-sm sm:text-base leading-relaxed text-[#4A4036] bg-white/40 p-4 sm:p-5 rounded-2xl border border-[#B0A695]/20">
                                    Website dan dokumentasi pembelajaran mata kuliah Penambangan Data yang saya kerjakan secara mandiri, mencakup pemahaman data, persiapan data, pengolahan data, hingga penerapan metode analisis pada beberapa tugas dan studi kasus.
                                </p>
                            </div>

                            <div>
                                <h4 class="text-xs font-bold tracking-[0.15em] uppercase text-[#776B5D] mb-3">
                                    Key Highlights
                                </h4>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
                                    <div class="flex items-center gap-2.5 p-3 rounded-xl bg-white/40 border border-[#B0A695]/20 text-xs font-semibold text-[#2C2621]">
                                        <svg class="w-4 h-4 text-[#776B5D] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                        <span>Data Understanding</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-3 rounded-xl bg-white/40 border border-[#B0A695]/20 text-xs font-semibold text-[#2C2621]">
                                        <svg class="w-4 h-4 text-[#776B5D] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                        <span>Data Preparation</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-3 rounded-xl bg-white/40 border border-[#B0A695]/20 text-xs font-semibold text-[#2C2621]">
                                        <svg class="w-4 h-4 text-[#776B5D] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                        <span>Data Processing</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-3 rounded-xl bg-white/40 border border-[#B0A695]/20 text-xs font-semibold text-[#2C2621]">
                                        <svg class="w-4 h-4 text-[#776B5D] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                        <span>Data Analysis</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-3 rounded-xl bg-white/40 border border-[#B0A695]/20 text-xs font-semibold text-[#2C2621]">
                                        <svg class="w-4 h-4 text-[#776B5D] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                        <span>Decision Tree</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Right Column: Tech & Live Link --}}
                        <div class="lg:col-span-5 flex flex-col justify-between space-y-6">
                            <div>
                                <h4 class="text-xs font-bold tracking-[0.15em] uppercase text-[#776B5D] mb-3">
                                    Teknologi & Fokus
                                </h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="inline-block px-3 py-1.5 rounded-xl bg-white/50 border border-[#B0A695]/30 text-xs font-semibold text-[#2C2621]">Data Mining</span>
                                    <span class="inline-block px-3 py-1.5 rounded-xl bg-white/50 border border-[#B0A695]/30 text-xs font-semibold text-[#2C2621]">Decision Tree</span>
                                    <span class="inline-block px-3 py-1.5 rounded-xl bg-white/50 border border-[#B0A695]/30 text-xs font-semibold text-[#2C2621]">Data Analytics</span>
                                </div>
                            </div>

                            <div class="pt-6 border-t border-[#B0A695]/20">
                                <a href="https://alifbait.github.io/pendata/"
                                   target="_blank"
                                   rel="noopener noreferrer"
                                   class="inline-flex items-center justify-center gap-2.5 w-full rounded-2xl bg-[#776B5D] px-6 py-3.5 text-xs font-bold uppercase tracking-wider text-white shadow-sm transition-all duration-300 hover:bg-[#63574A] hover:shadow-md hover:-translate-y-0.5">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                    <span>Kunjungi Live Website</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Screenshots Gallery --}}
                    <div class="mt-8 pt-8 border-t border-[#B0A695]/30">
                        <div class="w-full max-w-[700px] mx-auto">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="text-xs font-bold tracking-[0.15em] uppercase text-[#776B5D]">
                                    Gallery & Dokumentasi Materi
                                </h4>
                                <span class="text-xs text-[#5E544A]/70">3 Screenshots</span>
                            </div>
                            <div class="flex flex-wrap justify-center gap-5">
                                {{-- Screenshot 1 --}}
                                <div class="w-full sm:w-[calc(50%-10px)] max-w-[340px] rounded-2xl overflow-hidden border border-[#B0A695]/30 bg-white/40 shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between">
                                    <div class="h-[180px] sm:h-[220px] flex items-center justify-center bg-[#EBE3D5]/20 p-2 overflow-hidden">
                                        <img src="{{ asset('images/pendat1.jpeg') }}"
                                             alt="Dokumentasi Pembelajaran Data Mining"
                                             class="max-h-full max-w-full w-auto h-auto object-contain object-center transition-transform duration-500 hover:scale-105"
                                             loading="lazy">
                                    </div>
                                    <div class="p-2.5 border-t border-[#B0A695]/20 bg-white/30 text-center">
                                        <p class="text-xs font-semibold text-[#5E544A]">Dokumentasi & Overview</p>
                                    </div>
                                </div>

                                {{-- Screenshot 2 --}}
                                <div class="w-full sm:w-[calc(50%-10px)] max-w-[340px] rounded-2xl overflow-hidden border border-[#B0A695]/30 bg-white/40 shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between">
                                    <div class="h-[180px] sm:h-[220px] flex items-center justify-center bg-[#EBE3D5]/20 p-2 overflow-hidden">
                                        <img src="{{ asset('images/pendat2.jpeg') }}"
                                             alt="Tahapan Data Preparation & Processing"
                                             class="max-h-full max-w-full w-auto h-auto object-contain object-center transition-transform duration-500 hover:scale-105"
                                             loading="lazy">
                                    </div>
                                    <div class="p-2.5 border-t border-[#B0A695]/20 bg-white/30 text-center">
                                        <p class="text-xs font-semibold text-[#5E544A]">Data Preparation & Processing</p>
                                    </div>
                                </div>

                                {{-- Screenshot 3 (Centered in row 2) --}}
                                <div class="w-full sm:w-[calc(50%-10px)] max-w-[340px] rounded-2xl overflow-hidden border border-[#B0A695]/30 bg-white/40 shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between">
                                    <div class="h-[180px] sm:h-[220px] flex items-center justify-center bg-[#EBE3D5]/20 p-2 overflow-hidden">
                                        <img src="{{ asset('images/pendat3.png') }}"
                                             alt="Analisis & Visualisasi Decision Tree"
                                             class="max-h-full max-w-full w-auto h-auto object-contain object-center transition-transform duration-500 hover:scale-105"
                                             loading="lazy">
                                    </div>
                                    <div class="p-2.5 border-t border-[#B0A695]/20 bg-white/30 text-center">
                                        <p class="text-xs font-semibold text-[#5E544A]">Analisis & Decision Tree</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Detail 3: Omah ID --}}
                <div id="project-detail-3" class="project-detail-panel hidden rounded-3xl border border-[#B0A695]/50 bg-[#EBE3D5]/25 p-6 sm:p-8 lg:p-10 shadow-sm transition-all duration-300">
                    {{-- Header --}}
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 pb-6 border-b border-[#B0A695]/30">
                        <div>
                            <span class="inline-block text-[11px] font-bold tracking-[0.18em] uppercase text-[#776B5D] bg-[#EBE3D5]/80 border border-[#B0A695]/40 px-3 py-1 rounded-full mb-2">
                                TEAM PROJECT
                            </span>
                            <h3 class="text-2xl sm:text-3xl font-bold text-[#2C2621]">
                                Omah ID
                            </h3>
                            <p class="text-xs sm:text-sm font-semibold text-[#776B5D] mt-1">
                                Role: UI/UX Designer & Frontend • Collaborative E-commerce Project
                            </p>
                        </div>

                        {{-- Close Button --}}
                        <button type="button"
                                onclick="toggleProjectDetail(null)"
                                class="self-start sm:self-center inline-flex items-center gap-2 rounded-full border border-[#B0A695]/40 bg-[#EBE3D5]/80 hover:bg-[#EBE3D5] px-4 py-2 text-xs font-semibold text-[#5E544A] hover:text-[#2C2621] transition-all hover:scale-105 shadow-sm">
                            <span>Tutup Detail</span>
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                    </div>

                    {{-- Body Content --}}
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 pt-8">
                        {{-- Left Column: Description & Highlights --}}
                        <div class="lg:col-span-7 space-y-6">
                            <div>
                                <h4 class="text-xs font-bold tracking-[0.15em] uppercase text-[#776B5D] mb-2.5">
                                    Deskripsi Project
                                </h4>
                                <p class="text-sm sm:text-base leading-relaxed text-[#4A4036] bg-white/40 p-4 sm:p-5 rounded-2xl border border-[#B0A695]/20">
                                    Project aplikasi e-commerce yang dikerjakan secara berkelompok. Saya bertanggung jawab pada UI/UX menggunakan Figma, menerapkan desain ke frontend, serta membantu beberapa bagian backend bersama anggota tim.
                                </p>
                            </div>

                            <div>
                                <h4 class="text-xs font-bold tracking-[0.15em] uppercase text-[#776B5D] mb-3">
                                    Key Highlights
                                </h4>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
                                    <div class="flex items-center gap-2.5 p-3 rounded-xl bg-white/40 border border-[#B0A695]/20 text-xs font-semibold text-[#2C2621]">
                                        <svg class="w-4 h-4 text-[#776B5D] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                        <span>UI/UX Design</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-3 rounded-xl bg-white/40 border border-[#B0A695]/20 text-xs font-semibold text-[#2C2621]">
                                        <svg class="w-4 h-4 text-[#776B5D] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                        <span>Figma</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-3 rounded-xl bg-white/40 border border-[#B0A695]/20 text-xs font-semibold text-[#2C2621]">
                                        <svg class="w-4 h-4 text-[#776B5D] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                        <span>Frontend Implementation</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-3 rounded-xl bg-white/40 border border-[#B0A695]/20 text-xs font-semibold text-[#2C2621]">
                                        <svg class="w-4 h-4 text-[#776B5D] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                        <span>Design System</span>
                                    </div>
                                    <div class="flex items-center gap-2.5 p-3 rounded-xl bg-white/40 border border-[#B0A695]/20 text-xs font-semibold text-[#2C2621]">
                                        <svg class="w-4 h-4 text-[#776B5D] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                        <span>Backend Assistance</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Right Column: Tech & Project Info (No GitHub Link) --}}
                        <div class="lg:col-span-5 flex flex-col justify-between space-y-6">
                            <div>
                                <h4 class="text-xs font-bold tracking-[0.15em] uppercase text-[#776B5D] mb-3">
                                    Teknologi & Tools
                                </h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="inline-block px-3 py-1.5 rounded-xl bg-white/50 border border-[#B0A695]/30 text-xs font-semibold text-[#2C2621]">Figma</span>
                                    <span class="inline-block px-3 py-1.5 rounded-xl bg-white/50 border border-[#B0A695]/30 text-xs font-semibold text-[#2C2621]">Frontend</span>
                                    <span class="inline-block px-3 py-1.5 rounded-xl bg-white/50 border border-[#B0A695]/30 text-xs font-semibold text-[#2C2621]">UI/UX Design</span>
                                    <span class="inline-block px-3 py-1.5 rounded-xl bg-white/50 border border-[#B0A695]/30 text-xs font-semibold text-[#2C2621]">Design System</span>
                                </div>
                            </div>

                            <div class="pt-6 border-t border-[#B0A695]/20">
                                <div class="flex items-center gap-3.5 p-4 rounded-2xl bg-white/40 border border-[#B0A695]/30">
                                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-[#EBE3D5]/80 text-[#776B5D]">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                                    </div>
                                    <div>
                                        <p class="text-xs font-bold text-[#2C2621]">Collaborative Team Project</p>
                                        <p class="text-[11px] text-[#5E544A] leading-tight mt-0.5">Dikerjakan bersama tim dengan fokus peran pada UI/UX Design & Frontend.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Screenshots Gallery --}}
                    <div class="mt-8 pt-8 border-t border-[#B0A695]/30">
                        <div class="w-full max-w-[700px] mx-auto">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="text-xs font-bold tracking-[0.15em] uppercase text-[#776B5D]">
                                    Gallery & Desain Antarmuka
                                </h4>
                                <span class="text-xs text-[#5E544A]/70">3 Screenshots</span>
                            </div>
                            <div class="flex flex-wrap justify-center gap-5">
                                {{-- Screenshot 1 --}}
                                <div class="w-full sm:w-[calc(50%-10px)] max-w-[340px] rounded-2xl overflow-hidden border border-[#B0A695]/30 bg-white/40 shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between">
                                    <div class="h-[180px] sm:h-[220px] flex items-center justify-center bg-[#EBE3D5]/20 p-2 overflow-hidden">
                                        <img src="{{ asset('images/omah_landing.jpeg') }}"
                                             alt="Landing Page Omah ID E-commerce"
                                             class="max-h-full max-w-full w-auto h-auto object-contain object-center transition-transform duration-500 hover:scale-105"
                                             loading="lazy">
                                    </div>
                                    <div class="p-2.5 border-t border-[#B0A695]/20 bg-white/30 text-center">
                                        <p class="text-xs font-semibold text-[#5E544A]">Landing Page & Hero Section</p>
                                    </div>
                                </div>

                                {{-- Screenshot 2 --}}
                                <div class="w-full sm:w-[calc(50%-10px)] max-w-[340px] rounded-2xl overflow-hidden border border-[#B0A695]/30 bg-white/40 shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between">
                                    <div class="h-[180px] sm:h-[220px] flex items-center justify-center bg-[#EBE3D5]/20 p-2 overflow-hidden">
                                        <img src="{{ asset('images/omah_login.jpeg') }}"
                                             alt="Halaman Login Omah ID"
                                             class="max-h-full max-w-full w-auto h-auto object-contain object-center transition-transform duration-500 hover:scale-105"
                                             loading="lazy">
                                    </div>
                                    <div class="p-2.5 border-t border-[#B0A695]/20 bg-white/30 text-center">
                                        <p class="text-xs font-semibold text-[#5E544A]">Halaman Autentikasi / Login</p>
                                    </div>
                                </div>

                                {{-- Screenshot 3 (Centered in row 2) --}}
                                <div class="w-full sm:w-[calc(50%-10px)] max-w-[340px] rounded-2xl overflow-hidden border border-[#B0A695]/30 bg-white/40 shadow-sm transition-all duration-300 hover:shadow-md flex flex-col justify-between">
                                    <div class="h-[180px] sm:h-[220px] flex items-center justify-center bg-[#EBE3D5]/20 p-2 overflow-hidden">
                                        <img src="{{ asset('images/omahg_catalog.jpeg') }}"
                                             alt="Katalog Produk Omah ID"
                                             class="max-h-full max-w-full w-auto h-auto object-contain object-center transition-transform duration-500 hover:scale-105"
                                             loading="lazy">
                                    </div>
                                    <div class="p-2.5 border-t border-[#B0A695]/20 bg-white/30 text-center">
                                        <p class="text-xs font-semibold text-[#5E544A]">Katalog Produk & Eksplorasi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Script for Project Details Toggle --}}
            <script>
                function toggleProjectDetail(targetId) {
                    const details = ['project-detail-1', 'project-detail-2', 'project-detail-3'];
                    const cards = ['project-card-1', 'project-card-2', 'project-card-3'];
                    const container = document.getElementById('project-details-container');

                    let currentlyActive = null;
                    details.forEach(id => {
                        const el = document.getElementById(id);
                        if (el && !el.classList.contains('hidden')) {
                            currentlyActive = id;
                        }
                    });

                    if (currentlyActive === targetId || !targetId) {
                        // Close all
                        details.forEach(id => {
                            const el = document.getElementById(id);
                            if (el) el.classList.add('hidden');
                        });
                        cards.forEach(id => {
                            const card = document.getElementById(id);
                            if (card) {
                                card.classList.remove('border-[#776B5D]', 'ring-2', 'ring-[#776B5D]/30', 'bg-[#EBE3D5]/70');
                                const btnText = card.querySelector('.detail-btn-text');
                                const btnIcon = card.querySelector('.detail-btn-icon');
                                if (btnText) btnText.textContent = 'View Details';
                                if (btnIcon) btnIcon.classList.remove('rotate-180');
                            }
                        });
                    } else {
                        // Open targetId, close others
                        details.forEach((id, idx) => {
                            const el = document.getElementById(id);
                            const card = document.getElementById(cards[idx]);
                            const btnText = card ? card.querySelector('.detail-btn-text') : null;
                            const btnIcon = card ? card.querySelector('.detail-btn-icon') : null;

                            if (id === targetId) {
                                if (el) el.classList.remove('hidden');
                                if (card) {
                                    card.classList.add('border-[#776B5D]', 'ring-2', 'ring-[#776B5D]/30', 'bg-[#EBE3D5]/70');
                                }
                                if (btnText) btnText.textContent = 'Close Details';
                                if (btnIcon) btnIcon.classList.add('rotate-180');
                            } else {
                                if (el) el.classList.add('hidden');
                                if (card) {
                                    card.classList.remove('border-[#776B5D]', 'ring-2', 'ring-[#776B5D]/30', 'bg-[#EBE3D5]/70');
                                }
                                if (btnText) btnText.textContent = 'View Details';
                                if (btnIcon) btnIcon.classList.remove('rotate-180');
                            }
                        });

                        // Smooth scroll to detail container with gentle delay
                        if (container) {
                            setTimeout(() => {
                                container.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                            }, 60);
                        }
                    }
                }
            </script>

        </section>

        {{-- =========================================================
            SECTION 05 — ORGANIZATIONAL EXPERIENCE
        ========================================================== --}}
        <section id="experience" aria-label="Organizational Experience" class="relative mx-auto w-full max-w-7xl px-6 sm:px-10 lg:px-16 py-20 lg:py-28">

            {{-- Section Header --}}
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start mb-14 lg:mb-18">
                {{-- Left: Titles --}}
                <div class="lg:col-span-7">
                    {{-- Label --}}
                    <div class="inline-flex items-center gap-2 mb-4">
                        <span class="text-xs font-bold tracking-[0.2em] uppercase text-[#776B5D]">Organizational Experience</span>
                        <div class="h-px w-8 bg-[#776B5D]/40"></div>
                    </div>

                    {{-- Heading --}}
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight tracking-tight text-[#2C2621]">
                        Leadership beyond<br class="hidden sm:block"> the classroom.
                    </h2>

                    {{-- Description --}}
                    <p class="mt-4 max-w-xl text-sm sm:text-base leading-relaxed text-[#5E544A]">
                        Pengalaman organisasi yang membantu saya mengembangkan kemampuan komunikasi, koordinasi, tanggung jawab, dan kerja sama dalam lingkungan organisasi mahasiswa.
                    </p>
                </div>

                {{-- Right: Quote Card --}}
                <div class="lg:col-span-5">
                    <div class="flex items-start gap-4 rounded-3xl border border-[#B0A695]/40 bg-[#EBE3D5]/35 p-6 sm:p-7 shadow-xs">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-2xl bg-[#776B5D]/10 text-[#776B5D]">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                        </div>
                        <p class="text-xs sm:text-sm italic leading-relaxed text-[#4A4036]">
                            "Organisasi memberi saya kesempatan untuk belajar memimpin, bekerja dalam tim, dan berkontribusi pada lingkungan kampus."
                        </p>
                    </div>
                </div>
            </div>

            {{-- 2 Cards Grid --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8 items-start">

                {{-- Card 1: BEM Fakultas Teknik --}}
                <div id="org-card-1"
                     onclick="toggleOrgDetail('org-detail-1')"
                     class="org-card group rounded-3xl border border-[#B0A695]/40 bg-[#EBE3D5]/30 hover:bg-[#EBE3D5]/50 transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:shadow-md cursor-pointer p-6 sm:p-8 flex flex-col justify-between select-none">
                    <div>
                        {{-- Top Bar: Logo & Period Badge --}}
                        <div class="flex items-start justify-between gap-4">
                            {{-- Transparent Logo (No background shape) --}}
                            <div class="h-16 w-16 sm:h-20 sm:w-20 shrink-0 flex items-center justify-start">
                                <img src="{{ asset('images/BEM.png') }}"
                                     alt="Logo BEM Fakultas Teknik"
                                     class="max-h-full max-w-full w-auto h-auto object-contain transition-transform duration-300 group-hover:scale-105"
                                     loading="lazy">
                            </div>

                            {{-- Period & Status Badge --}}
                            <div class="flex flex-col items-end gap-1.5">
                                <div class="inline-flex items-center gap-1.5 rounded-full border border-[#B0A695]/40 bg-[#EBE3D5]/80 px-3.5 py-1 text-xs font-semibold text-[#776B5D] shadow-2xs">
                                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    <span>2026 — Sekarang</span>
                                </div>
                                <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wider bg-[#776B5D]/10 text-[#776B5D]">
                                    <span class="h-1.5 w-1.5 rounded-full bg-[#776B5D] animate-pulse"></span>
                                    <span>Ongoing</span>
                                </span>
                            </div>
                        </div>

                        {{-- Role & Organization Info --}}
                        <div class="mt-6">
                            <span class="inline-block text-[11px] font-bold tracking-[0.15em] uppercase text-[#776B5D] mb-1.5">
                                Organizational Experience
                            </span>
                            <h3 class="text-xl sm:text-2xl font-bold text-[#2C2621] group-hover:text-[#776B5D] transition-colors leading-snug">
                                Kepala Departemen Advokesma
                            </h3>
                            <p class="text-sm font-semibold text-[#4A4036] mt-1.5 flex flex-wrap items-center gap-x-2 gap-y-1">
                                <span>BEM Fakultas Teknik</span>
                                <span class="text-[#B0A695]">•</span>
                                <span class="text-xs text-[#5E544A]/80 font-normal">Universitas Trunojoyo Madura</span>
                            </p>
                        </div>

                        {{-- Description --}}
                        <p class="mt-4 text-xs sm:text-sm leading-relaxed text-[#5E544A]">
                            Memimpin Departemen Advokesma dalam menjalankan program kerja dan mengoordinasikan kegiatan yang berkaitan dengan aspirasi, advokasi, serta kebutuhan mahasiswa di lingkungan Fakultas Teknik.
                        </p>

                        {{-- Expandable Detail Panel --}}
                        <div id="org-detail-1" class="org-detail hidden mt-5 pt-5 border-t border-[#B0A695]/30 space-y-3 transition-all duration-300">
                            <h4 class="text-xs font-bold tracking-[0.15em] uppercase text-[#776B5D]">
                                Tanggung Jawab & Kontribusi Utama
                            </h4>
                            <ul class="space-y-2 text-xs sm:text-sm text-[#4A4036]">
                                <li class="flex items-start gap-2.5">
                                    <svg class="w-4 h-4 text-[#776B5D] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                    <span>Memimpin dan mengoordinasikan seluruh program kerja departemen Advokesma.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <svg class="w-4 h-4 text-[#776B5D] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                    <span>Berperan sebagai penghubung antara mahasiswa Fakultas Teknik dengan pihak internal dan eksternal.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <svg class="w-4 h-4 text-[#776B5D] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                    <span>Merancang dan melaksanakan kegiatan advokasi serta peningkatan kesejahteraan mahasiswa.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <svg class="w-4 h-4 text-[#776B5D] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                    <span>Bekerja sama dengan departemen lain dalam pelaksanaan program kerja BEM FT.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- Bottom: Focus Tags & Affordance --}}
                    <div class="mt-6">
                        {{-- Focus Tags --}}
                        <div class="pt-5 border-t border-[#B0A695]/20">
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 rounded-xl bg-white/50 border border-[#B0A695]/30 text-xs font-semibold text-[#2C2621] transition-all duration-200 hover:border-[#776B5D]/50 hover:bg-white hover:scale-105">Leadership</span>
                                <span class="px-3 py-1 rounded-xl bg-white/50 border border-[#B0A695]/30 text-xs font-semibold text-[#2C2621] transition-all duration-200 hover:border-[#776B5D]/50 hover:bg-white hover:scale-105">Team Coordination</span>
                                <span class="px-3 py-1 rounded-xl bg-white/50 border border-[#B0A695]/30 text-xs font-semibold text-[#2C2621] transition-all duration-200 hover:border-[#776B5D]/50 hover:bg-white hover:scale-105">Communication</span>
                                <span class="px-3 py-1 rounded-xl bg-white/50 border border-[#B0A695]/30 text-xs font-semibold text-[#2C2621] transition-all duration-200 hover:border-[#776B5D]/50 hover:bg-white hover:scale-105">Student Advocacy</span>
                                <span class="px-3 py-1 rounded-xl bg-white/50 border border-[#B0A695]/30 text-xs font-semibold text-[#2C2621] transition-all duration-200 hover:border-[#776B5D]/50 hover:bg-white hover:scale-105">Program Management</span>
                            </div>
                        </div>

                        {{-- Affordance --}}
                        <div class="mt-4 pt-3 flex items-center justify-between text-xs text-[#776B5D]">
                            <span class="org-btn-text font-bold group-hover:text-[#2C2621] transition-colors">
                                Lihat Detail Tanggung Jawab
                            </span>
                            <span class="flex h-7 w-7 items-center justify-center rounded-full bg-[#EBE3D5]/70 group-hover:bg-[#776B5D] group-hover:text-white transition-all duration-300">
                                <svg class="org-btn-icon w-3.5 h-3.5 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </div>
                    </div>
                </div>

                {{-- Card 2: Himpunan Mahasiswa Teknik Informatika (HIMATIF) --}}
                <div id="org-card-2"
                     onclick="toggleOrgDetail('org-detail-2')"
                     class="org-card group rounded-3xl border border-[#B0A695]/40 bg-[#EBE3D5]/30 hover:bg-[#EBE3D5]/50 transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:shadow-md cursor-pointer p-6 sm:p-8 flex flex-col justify-between select-none">
                    <div>
                        {{-- Top Bar: Logo & Period Badge --}}
                        <div class="flex items-start justify-between gap-4">
                            {{-- Transparent Logo (No background shape) --}}
                            <div class="h-16 w-16 sm:h-20 sm:w-20 shrink-0 flex items-center justify-start">
                                <img src="{{ asset('images/himatif.png') }}"
                                     alt="Logo Himpunan Mahasiswa Teknik Informatika"
                                     class="max-h-full max-w-full w-auto h-auto object-contain transition-transform duration-300 group-hover:scale-105"
                                     loading="lazy">
                            </div>

                            {{-- Period & Status Badge --}}
                            <div class="flex flex-col items-end gap-1.5">
                                <div class="inline-flex items-center gap-1.5 rounded-full border border-[#B0A695]/40 bg-[#EBE3D5]/80 px-3.5 py-1 text-xs font-semibold text-[#776B5D] shadow-2xs">
                                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    <span>2025</span>
                                </div>
                                <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wider bg-[#B0A695]/20 text-[#5E544A]">
                                    <span>Completed</span>
                                </span>
                            </div>
                        </div>

                        {{-- Role & Organization Info --}}
                        <div class="mt-6">
                            <span class="inline-block text-[11px] font-bold tracking-[0.15em] uppercase text-[#776B5D] mb-1.5">
                                Organizational Experience
                            </span>
                            <h3 class="text-xl sm:text-2xl font-bold text-[#2C2621] group-hover:text-[#776B5D] transition-colors leading-snug">
                                Bendahara 1
                            </h3>
                            <p class="text-sm font-semibold text-[#4A4036] mt-1.5 flex flex-wrap items-center gap-x-2 gap-y-1">
                                <span>Himpunan Mahasiswa Teknik Informatika</span>
                                <span class="text-[#B0A695]">•</span>
                                <span class="text-xs text-[#5E544A]/80 font-normal">Universitas Trunojoyo Madura</span>
                            </p>
                        </div>

                        {{-- Description --}}
                        <p class="mt-4 text-xs sm:text-sm leading-relaxed text-[#5E544A]">
                            Bertanggung jawab dalam membantu pengelolaan administrasi dan keuangan organisasi serta mendukung kebutuhan operasional kegiatan Himpunan Mahasiswa Teknik Informatika.
                        </p>

                        {{-- Expandable Detail Panel --}}
                        <div id="org-detail-2" class="org-detail hidden mt-5 pt-5 border-t border-[#B0A695]/30 space-y-3 transition-all duration-300">
                            <h4 class="text-xs font-bold tracking-[0.15em] uppercase text-[#776B5D]">
                                Tanggung Jawab & Kontribusi Utama
                            </h4>
                            <ul class="space-y-2 text-xs sm:text-sm text-[#4A4036]">
                                <li class="flex items-start gap-2.5">
                                    <svg class="w-4 h-4 text-[#776B5D] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                    <span>Mengelola keuangan organisasi, termasuk perencanaan, pencatatan, dan pelaporan keuangan.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <svg class="w-4 h-4 text-[#776B5D] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                    <span>Menyusun anggaran untuk setiap program kerja himpunan.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <svg class="w-4 h-4 text-[#776B5D] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                    <span>Bekerja sama dengan pengurus lain dalam pelaksanaan kegiatan akademik dan non-akademik.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <svg class="w-4 h-4 text-[#776B5D] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                    <span>Menjaga transparansi dan akuntabilitas dalam penggunaan dana organisasi.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- Bottom: Focus Tags & Affordance --}}
                    <div class="mt-6">
                        {{-- Focus Tags --}}
                        <div class="pt-5 border-t border-[#B0A695]/20">
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 rounded-xl bg-white/50 border border-[#B0A695]/30 text-xs font-semibold text-[#2C2621] transition-all duration-200 hover:border-[#776B5D]/50 hover:bg-white hover:scale-105">Financial Administration</span>
                                <span class="px-3 py-1 rounded-xl bg-white/50 border border-[#B0A695]/30 text-xs font-semibold text-[#2C2621] transition-all duration-200 hover:border-[#776B5D]/50 hover:bg-white hover:scale-105">Responsibility</span>
                                <span class="px-3 py-1 rounded-xl bg-white/50 border border-[#B0A695]/30 text-xs font-semibold text-[#2C2621] transition-all duration-200 hover:border-[#776B5D]/50 hover:bg-white hover:scale-105">Teamwork</span>
                                <span class="px-3 py-1 rounded-xl bg-white/50 border border-[#B0A695]/30 text-xs font-semibold text-[#2C2621] transition-all duration-200 hover:border-[#776B5D]/50 hover:bg-white hover:scale-105">Organization Management</span>
                            </div>
                        </div>

                        {{-- Affordance --}}
                        <div class="mt-4 pt-3 flex items-center justify-between text-xs text-[#776B5D]">
                            <span class="org-btn-text font-bold group-hover:text-[#2C2621] transition-colors">
                                Lihat Detail Tanggung Jawab
                            </span>
                            <span class="flex h-7 w-7 items-center justify-center rounded-full bg-[#EBE3D5]/70 group-hover:bg-[#776B5D] group-hover:text-white transition-all duration-300">
                                <svg class="org-btn-icon w-3.5 h-3.5 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                            </span>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Script for Organizational Details Toggle --}}
            <script>
                function toggleOrgDetail(targetId) {
                    const details = ['org-detail-1', 'org-detail-2'];
                    const cards = ['org-card-1', 'org-card-2'];

                    let currentlyActive = null;
                    details.forEach(id => {
                        const el = document.getElementById(id);
                        if (el && !el.classList.contains('hidden')) {
                            currentlyActive = id;
                        }
                    });

                    if (currentlyActive === targetId || !targetId) {
                        details.forEach(id => {
                            const el = document.getElementById(id);
                            if (el) el.classList.add('hidden');
                        });
                        cards.forEach(id => {
                            const card = document.getElementById(id);
                            if (card) {
                                card.classList.remove('border-[#776B5D]', 'ring-2', 'ring-[#776B5D]/30', 'bg-[#EBE3D5]/60');
                                const btnText = card.querySelector('.org-btn-text');
                                const btnIcon = card.querySelector('.org-btn-icon');
                                if (btnText) btnText.textContent = 'Lihat Detail Tanggung Jawab';
                                if (btnIcon) btnIcon.classList.remove('rotate-180');
                            }
                        });
                    } else {
                        details.forEach((id, idx) => {
                            const el = document.getElementById(id);
                            const card = document.getElementById(cards[idx]);
                            const btnText = card ? card.querySelector('.org-btn-text') : null;
                            const btnIcon = card ? card.querySelector('.org-btn-icon') : null;

                            if (id === targetId) {
                                if (el) el.classList.remove('hidden');
                                if (card) {
                                    card.classList.add('border-[#776B5D]', 'ring-2', 'ring-[#776B5D]/30', 'bg-[#EBE3D5]/60');
                                }
                                if (btnText) btnText.textContent = 'Tutup Detail';
                                if (btnIcon) btnIcon.classList.add('rotate-180');
                            } else {
                                if (el) el.classList.add('hidden');
                                if (card) {
                                    card.classList.remove('border-[#776B5D]', 'ring-2', 'ring-[#776B5D]/30', 'bg-[#EBE3D5]/60');
                                }
                                if (btnText) btnText.textContent = 'Lihat Detail Tanggung Jawab';
                                if (btnIcon) btnIcon.classList.remove('rotate-180');
                            }
                        });
                    }
                }
            </script>

        </section>

        {{-- =========================================================
            SECTION 06 — EDUCATION
        ========================================================== --}}
        <section id="education" aria-label="Education & Academic Journey" class="relative mx-auto w-full max-w-7xl px-6 sm:px-10 lg:px-16 py-20 lg:py-28">

            {{-- Section Header --}}
            <div class="mb-12 lg:mb-16">
                {{-- Label --}}
                <div class="inline-flex items-center gap-2 mb-4">
                    <span class="text-xs font-bold tracking-[0.2em] uppercase text-[#776B5D]">Education</span>
                    <div class="h-px w-8 bg-[#776B5D]/40"></div>
                </div>

                {{-- Heading --}}
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight tracking-tight text-[#2C2621]">
                    Education & academic journey
                </h2>
            </div>

            {{-- Academic Timeline Cards --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 items-stretch">

                {{-- Item 1: Universitas Trunojoyo Madura --}}
                <div class="group relative flex flex-col justify-between rounded-3xl border border-[#B0A695]/40 bg-[#EBE3D5]/30 p-6 sm:p-7 transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:bg-[#EBE3D5]/50 hover:shadow-md">
                    <div>
                        {{-- Top: Visual Anchor Year Badge --}}
                        <div class="flex items-center justify-between gap-2">
                            <span class="inline-flex items-center gap-1.5 rounded-full border border-[#B0A695]/40 bg-[#EBE3D5]/80 px-3.5 py-1 text-xs font-semibold text-[#776B5D] shadow-2xs">
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                <span>2024 — Sekarang</span>
                            </span>
                            <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wider bg-[#776B5D]/10 text-[#776B5D]">
                                <span class="h-1.5 w-1.5 rounded-full bg-[#776B5D] animate-pulse"></span>
                                <span>Ongoing</span>
                            </span>
                        </div>

                        {{-- Institution & Degree --}}
                        <div class="mt-6">
                            <h3 class="text-lg sm:text-xl font-bold text-[#2C2621] group-hover:text-[#776B5D] transition-colors leading-snug">
                                Universitas Trunojoyo Madura
                            </h3>
                            <p class="mt-1.5 text-sm font-semibold text-[#776B5D]">
                                S1 Teknik Informatika
                            </p>
                        </div>

                        {{-- Brief Description --}}
                        <p class="mt-4 text-xs sm:text-sm leading-relaxed text-[#5E544A]">
                            Menempuh studi sarjana dengan fokus pada rekayasa perangkat lunak, pengembangan web, struktur data, dan teknologi komputasi modern.
                        </p>
                    </div>

                    {{-- Milestone Indicator --}}
                    <div class="mt-6 pt-4 border-t border-[#B0A695]/20 flex items-center justify-between text-[11px] font-semibold tracking-wider uppercase text-[#776B5D]/80">
                        <span>Higher Education</span>
                        <span class="flex h-6 w-6 items-center justify-center rounded-full bg-[#776B5D]/10 text-[#776B5D]">01</span>
                    </div>
                </div>

                {{-- Item 2: SMAN 1 Lamongan --}}
                <div class="group relative flex flex-col justify-between rounded-3xl border border-[#B0A695]/40 bg-[#EBE3D5]/30 p-6 sm:p-7 transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:bg-[#EBE3D5]/50 hover:shadow-md">
                    <div>
                        {{-- Top: Visual Anchor Year Badge --}}
                        <div class="flex items-center justify-between gap-2">
                            <span class="inline-flex items-center gap-1.5 rounded-full border border-[#B0A695]/40 bg-[#EBE3D5]/80 px-3.5 py-1 text-xs font-semibold text-[#776B5D] shadow-2xs">
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                <span>2021 — 2024</span>
                            </span>
                            <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wider bg-[#B0A695]/20 text-[#5E544A]">
                                <span>Completed</span>
                            </span>
                        </div>

                        {{-- Institution & Degree --}}
                        <div class="mt-6">
                            <h3 class="text-lg sm:text-xl font-bold text-[#2C2621] group-hover:text-[#776B5D] transition-colors leading-snug">
                                SMAN 1 Lamongan
                            </h3>
                            <p class="mt-1.5 text-sm font-semibold text-[#776B5D]">
                                Sekolah Menengah Atas
                            </p>
                        </div>

                        {{-- Brief Description --}}
                        <p class="mt-4 text-xs sm:text-sm leading-relaxed text-[#5E544A]">
                            Menyelesaikan pendidikan tingkat menengah atas dengan peminatan MIPA serta aktif dalam kegiatan akademik dan organisasi siswa.
                        </p>
                    </div>

                    {{-- Milestone Indicator --}}
                    <div class="mt-6 pt-4 border-t border-[#B0A695]/20 flex items-center justify-between text-[11px] font-semibold tracking-wider uppercase text-[#776B5D]/80">
                        <span>Senior High School</span>
                        <span class="flex h-6 w-6 items-center justify-center rounded-full bg-[#776B5D]/10 text-[#776B5D]">02</span>
                    </div>
                </div>

                {{-- Item 3: SMPN 12 Surabaya --}}
                <div class="group relative flex flex-col justify-between rounded-3xl border border-[#B0A695]/40 bg-[#EBE3D5]/30 p-6 sm:p-7 transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D]/60 hover:bg-[#EBE3D5]/50 hover:shadow-md">
                    <div>
                        {{-- Top: Visual Anchor Year Badge --}}
                        <div class="flex items-center justify-between gap-2">
                            <span class="inline-flex items-center gap-1.5 rounded-full border border-[#B0A695]/40 bg-[#EBE3D5]/80 px-3.5 py-1 text-xs font-semibold text-[#776B5D] shadow-2xs">
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                <span>2018 — 2021</span>
                            </span>
                            <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wider bg-[#B0A695]/20 text-[#5E544A]">
                                <span>Completed</span>
                            </span>
                        </div>

                        {{-- Institution & Degree --}}
                        <div class="mt-6">
                            <h3 class="text-lg sm:text-xl font-bold text-[#2C2621] group-hover:text-[#776B5D] transition-colors leading-snug">
                                SMPN 12 Surabaya
                            </h3>
                            <p class="mt-1.5 text-sm font-semibold text-[#776B5D]">
                                Sekolah Menengah Pertama
                            </p>
                        </div>

                        {{-- Brief Description --}}
                        <p class="mt-4 text-xs sm:text-sm leading-relaxed text-[#5E544A]">
                            Menempuh pendidikan dasar menengah pertama di Surabaya dan mulai membangun minat awal terhadap dunia teknologi dan komputasi.
                        </p>
                    </div>

                    {{-- Milestone Indicator --}}
                    <div class="mt-6 pt-4 border-t border-[#B0A695]/20 flex items-center justify-between text-[11px] font-semibold tracking-wider uppercase text-[#776B5D]/80">
                        <span>Junior High School</span>
                        <span class="flex h-6 w-6 items-center justify-center rounded-full bg-[#776B5D]/10 text-[#776B5D]">03</span>
                    </div>
                </div>

            </div>

        </section>

        {{-- =========================================================
            SECTION 07 — CONTACT / CTA
        ========================================================== --}}
        <section id="contact" aria-label="Contact and CTA" class="relative mx-auto w-full max-w-7xl px-6 sm:px-10 lg:px-16 py-20 lg:py-28">

            <div class="rounded-3xl border border-[#B0A695]/40 bg-[#EBE3D5]/35 p-8 sm:p-12 lg:p-16 shadow-xs">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">

                    {{-- Left Side: Text and Action CTAs --}}
                    <div class="lg:col-span-7">
                        {{-- Label --}}
                        <div class="inline-flex items-center gap-2 mb-4">
                            <span class="text-xs font-bold tracking-[0.2em] uppercase text-[#776B5D]">Get In Touch</span>
                            <div class="h-px w-8 bg-[#776B5D]/40"></div>
                        </div>

                        {{-- Heading --}}
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight tracking-tight text-[#2C2621]">
                            Let's build something together.
                        </h2>

                        {{-- Description --}}
                        <p class="mt-4 max-w-xl text-sm sm:text-base leading-relaxed text-[#5E544A]">
                            Saya terbuka untuk kesempatan magang, kolaborasi, dan pengalaman baru untuk terus berkembang sebagai Web Developer.
                        </p>

                        {{-- Action Buttons (Download CV & GitHub) --}}
                        <div class="mt-8 flex flex-wrap items-center gap-4">
                            {{-- Primary CTA: Download CV --}}
                            <a
                                href="{{ asset('files/CV-Alif-Baiatur-Ridhwan-El-Habibie.pdf') }}"
                                target="_blank"
                                download
                                class="group inline-flex items-center gap-2.5 rounded-2xl bg-[#776B5D] px-7 py-3.5 text-sm font-semibold text-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:bg-[#63574A] hover:shadow-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#776B5D]"
                            >
                                <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-y-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                <span>Download CV</span>
                            </a>

                            {{-- Secondary CTA: GitHub --}}
                            <a
                                href="https://github.com/alifbait"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="group inline-flex items-center gap-2.5 rounded-2xl border border-[#B0A695]/50 bg-white/60 px-7 py-3.5 text-sm font-semibold text-[#2C2621] shadow-2xs transition-all duration-300 hover:-translate-y-1 hover:border-[#776B5D] hover:bg-white hover:text-[#776B5D] hover:shadow-sm"
                            >
                                <svg class="w-4 h-4 fill-current transition-transform duration-300 group-hover:scale-110" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                                </svg>
                                <span>GitHub</span>
                            </a>
                        </div>
                    </div>

                    {{-- Right Side: Contact Options Cards --}}
                    <div class="lg:col-span-5 space-y-3.5">

                        {{-- Email Option --}}
                        <a
                            href="mailto:alifbaiatur@gmail.com"
                            class="group flex items-center justify-between gap-4 rounded-2xl border border-[#B0A695]/40 bg-white/50 p-4 transition-all duration-300 hover:-translate-y-0.5 hover:border-[#776B5D] hover:bg-white hover:shadow-xs"
                        >
                            <div class="flex items-center gap-3.5 min-w-0">
                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-[#776B5D]/10 text-[#776B5D] group-hover:bg-[#776B5D] group-hover:text-white transition-colors duration-300">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <span class="block text-[11px] font-bold tracking-wider uppercase text-[#776B5D]">Email</span>
                                    <span class="text-sm font-semibold text-[#2C2621] truncate block">alifbaiatur@gmail.com</span>
                                </div>
                            </div>
                            <svg class="w-4 h-4 text-[#B0A695] group-hover:text-[#776B5D] transition-colors shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>

                        {{-- WhatsApp Option --}}
                        <a
                            href="https://wa.me/6283839996315"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="group flex items-center justify-between gap-4 rounded-2xl border border-[#B0A695]/40 bg-white/50 p-4 transition-all duration-300 hover:-translate-y-0.5 hover:border-[#776B5D] hover:bg-white hover:shadow-xs"
                        >
                            <div class="flex items-center gap-3.5 min-w-0">
                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-[#776B5D]/10 text-[#776B5D] group-hover:bg-[#776B5D] group-hover:text-white transition-colors duration-300">
                                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <span class="block text-[11px] font-bold tracking-wider uppercase text-[#776B5D]">WhatsApp</span>
                                    <span class="text-sm font-semibold text-[#2C2621] truncate block">+62 838-3999-6315</span>
                                </div>
                            </div>
                            <svg class="w-4 h-4 text-[#B0A695] group-hover:text-[#776B5D] transition-colors shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>

                        {{-- GitHub Option --}}
                        <a
                            href="https://github.com/alifbait"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="group flex items-center justify-between gap-4 rounded-2xl border border-[#B0A695]/40 bg-white/50 p-4 transition-all duration-300 hover:-translate-y-0.5 hover:border-[#776B5D] hover:bg-white hover:shadow-xs"
                        >
                            <div class="flex items-center gap-3.5 min-w-0">
                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-[#776B5D]/10 text-[#776B5D] group-hover:bg-[#776B5D] group-hover:text-white transition-colors duration-300">
                                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <span class="block text-[11px] font-bold tracking-wider uppercase text-[#776B5D]">GitHub</span>
                                    <span class="text-sm font-semibold text-[#2C2621] truncate block">github.com/alifbait</span>
                                </div>
                            </div>
                            <svg class="w-4 h-4 text-[#B0A695] group-hover:text-[#776B5D] transition-colors shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>

                        {{-- Location Option --}}
                        <div class="flex items-center justify-between gap-4 rounded-2xl border border-[#B0A695]/40 bg-white/50 p-4">
                            <div class="flex items-center gap-3.5 min-w-0">
                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-[#776B5D]/10 text-[#776B5D]">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div class="truncate">
                                    <span class="block text-[11px] font-bold tracking-wider uppercase text-[#776B5D]">Location</span>
                                    <span class="text-sm font-semibold text-[#2C2621] truncate block">Surabaya, Indonesia</span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </section>

    </main>

    {{-- =========================================================
        SECTION 08 — FOOTER
    ========================================================== --}}
    <footer class="border-t border-[#B0A695]/30 bg-[#F3EEEA] py-12 text-[#5E544A]">
        <div class="mx-auto flex w-full max-w-7xl flex-col items-center justify-between gap-6 px-6 sm:px-10 lg:px-16 md:flex-row">

            {{-- Left: Identity & Role --}}
            <div class="text-center md:text-left">
                <p class="text-base font-bold text-[#2C2621]">
                    Alif Bai'atur Ridhwan El Habibie
                </p>
                <p class="mt-0.5 text-xs font-medium text-[#776B5D]">
                    Web Developer & Informatics Student
                </p>
            </div>

            {{-- Center: Social Links --}}
            <div class="flex items-center gap-6 text-xs font-semibold text-[#776B5D]">
                <a
                    href="https://github.com/alifbait"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="transition-colors hover:text-[#2C2621] hover:underline"
                >
                    GitHub
                </a>
                <span class="text-[#B0A695]">•</span>
                <a
                    href="mailto:alifbaiatur@gmail.com"
                    class="transition-colors hover:text-[#2C2621] hover:underline"
                >
                    Email
                </a>
                <span class="text-[#B0A695]">•</span>
                <a
                    href="https://wa.me/6283839996315"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="transition-colors hover:text-[#2C2621] hover:underline"
                >
                    WhatsApp
                </a>
            </div>

            {{-- Right: Copyright & Stack Note --}}
            <div class="text-center md:text-right">
                <p class="text-xs text-[#5E544A]">
                    © 2026 Alif Bai'atur Ridhwan El Habibie. All rights reserved.
                </p>
                <p class="mt-0.5 text-[11px] text-[#776B5D]/70">
                    Built with Laravel & Tailwind CSS.
                </p>
            </div>

        </div>
    </footer>

    {{-- Interactive Pointer Mouse-Tracking Script for Scoped Photo Containers --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const initInteractivePhoto = (containerId, imageId, maxTranslate = 14, maxTilt = 7) => {
                const container = document.getElementById(containerId);
                const image = document.getElementById(imageId);
                if (!container || !image) return;

                let rafId = null;

                container.addEventListener('mousemove', (e) => {
                    const rect = container.getBoundingClientRect();
                    const x = e.clientX - rect.left - rect.width / 2;
                    const y = e.clientY - rect.top - rect.height / 2;

                    const moveX = (x / (rect.width / 2)) * maxTranslate;
                    const moveY = (y / (rect.height / 2)) * maxTranslate;
                    const rotateY = (x / (rect.width / 2)) * maxTilt;
                    const rotateX = -(y / (rect.height / 2)) * maxTilt;

                    if (rafId) cancelAnimationFrame(rafId);
                    rafId = requestAnimationFrame(() => {
                        image.style.transform = `perspective(1000px) translate3d(${moveX.toFixed(2)}px, ${moveY.toFixed(2)}px, 0px) rotateX(${rotateX.toFixed(2)}deg) rotateY(${rotateY.toFixed(2)}deg) scale(1.025)`;
                    });
                });

                container.addEventListener('mouseleave', () => {
                    if (rafId) cancelAnimationFrame(rafId);
                    image.style.transform = `perspective(1000px) translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) scale(1)`;
                });
            };

            initInteractivePhoto('hero-photo-container', 'hero-photo-img', 14, 7);
            initInteractivePhoto('about-photo-container', 'about-photo-img', 9, 4);
        });
    </script>

</body>
</html>