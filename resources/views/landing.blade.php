<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Ninym | Luxury Concierge &amp; Reservation System</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-secondary-fixed-variant": "#004e5c",
                        "on-surface": "#191c1d",
                        "surface-variant": "#e1e3e4",
                        "on-background": "#191c1d",
                        "on-tertiary-container": "#ffd2be",
                        "surface": "#f8f9fa",
                        "primary-container": "#4f46e5",
                        "secondary": "#00687a",
                        "surface-container-low": "#f3f4f5",
                        "surface-dim": "#d9dadb",
                        "on-primary-fixed": "#0f0069",
                        "inverse-surface": "#2e3132",
                        "surface-tint": "#4d44e3",
                        "inverse-on-surface": "#f0f1f2",
                        "on-primary-fixed-variant": "#3323cc",
                        "outline": "#777587",
                        "on-primary": "#ffffff",
                        "background": "#f8f9fa",
                        "error": "#ba1a1a",
                        "on-tertiary-fixed-variant": "#7b2f00",
                        "tertiary-container": "#a44100",
                        "primary-fixed": "#e2dfff",
                        "on-secondary": "#ffffff",
                        "surface-container-highest": "#e1e3e4",
                        "surface-container-lowest": "#ffffff",
                        "secondary-fixed-dim": "#4cd7f6",
                        "tertiary-fixed-dim": "#ffb695",
                        "on-error-container": "#93000a",
                        "on-secondary-container": "#006172",
                        "on-primary-container": "#dad7ff",
                        "error-container": "#ffdad6",
                        "primary-fixed-dim": "#c3c0ff",
                        "on-secondary-fixed": "#001f26",
                        "secondary-container": "#57dffe",
                        "surface-container": "#edeeef",
                        "on-surface-variant": "#464555",
                        "surface-bright": "#f8f9fa",
                        "tertiary": "#7e3000",
                        "primary": "#3525cd",
                        "outline-variant": "#c7c4d8",
                        "surface-container-high": "#e7e8e9",
                        "on-tertiary-fixed": "#351000",
                        "on-tertiary": "#ffffff",
                        "inverse-primary": "#c3c0ff",
                        "secondary-fixed": "#acedff",
                        "on-error": "#ffffff",
                        "tertiary-fixed": "#ffdbcc"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline": ["Inter"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    }
                },
            }
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .hero-gradient {
            background: linear-gradient(135deg, rgba(53, 37, 205, 0.05) 0%, rgba(0, 104, 122, 0.05) 100%);
        }
        .button-gradient {
            background: linear-gradient(135deg, #3525cd 0%, #4f46e5 100%);
        }
    </style>
</head>
<body class="bg-surface text-on-surface font-body selection:bg-primary-fixed selection:text-primary">
<!-- TopNavBar -->
<nav class="sticky top-0 w-full z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl shadow-sm dark:shadow-none">
<div class="flex justify-between items-center px-8 py-4 max-w-screen-2xl mx-auto">
<div class="text-2xl font-black text-slate-900 dark:text-white tracking-tighter">
                Ninym
            </div>
<div class="hidden md:flex items-center space-x-8">
<a class="text-indigo-600 dark:text-indigo-400 font-bold border-b-2 border-indigo-600 font-['Inter'] tracking-tight text-sm transition-all duration-300 ease-in-out hover:opacity-80" href="/">Explore</a>
<a class="text-slate-600 dark:text-slate-400 hover:text-indigo-500 font-['Inter'] font-bold tracking-tight text-sm transition-all duration-300 ease-in-out hover:opacity-80" href="/reserve">Reserve</a>
<a class="text-slate-600 dark:text-slate-400 hover:text-indigo-500 font-['Inter'] font-bold tracking-tight text-sm transition-all duration-300 ease-in-out hover:opacity-80" href="/dashboard">Dashboard</a>
<a class="text-slate-600 dark:text-slate-400 hover:text-indigo-500 font-['Inter'] font-bold tracking-tight text-sm transition-all duration-300 ease-in-out hover:opacity-80" href="/support">Support</a>
</div>
<div class="flex items-center space-x-4">
    <!--Belum login-->
    <div id="authButtons" class="flex gap-4">
        <a href="/login" class="px-4 py-2 text-sm font-bold text-slate-600">
            Login
        </a>
        <a href="/signup" class="px-4 py-2 bg-indigo-600 text-white rounded-full text-sm font-bold">
            signup
        </a>
    </div>
</div>
    <!-- Sudah login -->
    <div id="userBox" class="hidden flex items-center space-x-3 px-3 py-1.5 rounded-full border">
        <img class="w-8 h-8 rounded-full object-cover" src="https://i.pravatar.cc/100"/>
        <span id="userEmail" class="text-sm font-bold">User</span>
        <button id="logoutBtn" onclick="logout()" class="text-xs text-red-500 ml-2">
            Logout
        </button>
    </div>

</nav>
<main>
<!-- Hero Section -->
<section class="relative min-h-[921px] flex items-center overflow-hidden">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover" data-alt="Luxurious modern hotel lobby with marble floors, ambient golden lighting, and designer furniture in an airy open space" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAV1WX18mbr1vGoYrmznEOiKUgFQGAJlXBmAIKRyaa_5Hxn7E95SSAECsPFJjunglvdk4Ddd2kUfkKt4-GFznZSrNXNsg1ry0etLI064FmLKjCVV6nLXslU1IyrgHj0XqmncmQTZK0LHhvq3cTEpj9f-TnzCDWjLmgw9XsSltoqc4eKVtMWDR8w5oCAZwIDjNlXAbAoxr42Ini3vrmahmP0MSAkRiHYchB1yrpgCA35uIbMYkVQWfIZMKaKspJjTJbiCmQFqBOenYp-"/>
<div class="absolute inset-0 bg-gradient-to-r from-white via-white/80 to-transparent"></div>
</div>
<div class="relative z-10 max-w-screen-2xl mx-auto px-8 w-full">
<div class="max-w-2xl">
<span class="inline-block px-4 py-1.5 rounded-full bg-primary-fixed text-on-primary-fixed-variant text-xs font-bold tracking-widest uppercase mb-6">
                        Welcome Back, Julian
                    </span>
<h1 class="text-7xl font-black text-on-surface leading-[1.1] tracking-tighter mb-8">
                        Ready for your <br/>
<span class="text-primary">next</span> <br/>
                        Experience?
                    </h1>
<p class="text-xl text-on-surface-variant leading-relaxed mb-10 max-w-lg">
                        Your personalized concierge is ready. Explore curated stays and new premium destinations tailored specifically for your lifestyle.
                    </p>
<div class="flex items-center space-x-6">
<button class="button-gradient text-white px-10 py-5 rounded-full font-bold text-lg scale-95 active:scale-100 transition-transform shadow-2xl shadow-primary/30">
                            Book Now
                        </button>
<a class="flex items-center space-x-3 text-primary font-bold group hover:underline underline-offset-4" href="#">
<span class="material-symbols-outlined bg-primary-fixed p-3 rounded-full transition-colors group-hover:bg-primary-container group-hover:text-white" data-icon="calendar_month">calendar_month</span>
<span>View My Bookings</span>
</a>
</div>
</div>
</div>
</section>
<!-- Highlight Features: Bento Grid Layout -->
<section class="py-32 px-8 bg-surface">
<div class="max-w-7xl mx-auto">
<div class="mb-20 text-center md:text-left flex flex-col md:flex-row md:items-end justify-between gap-8">
<div>
<h2 class="text-4xl font-black tracking-tighter text-on-surface mb-4">Precision Engineering for Luxury.</h2>
<p class="text-on-surface-variant max-w-xl text-lg">Designed for those who value time and aesthetic. Every interaction is polished, every detail intentional.</p>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-12 gap-8 h-full">
<!-- Feature 1: Fast & Easy Booking -->
<div class="md:col-span-8 bg-surface-container-lowest rounded-[2rem] p-12 overflow-hidden relative group">
<div class="relative z-10 h-full flex flex-col justify-between">
<div>
<div class="bg-secondary/10 w-16 h-16 rounded-2xl flex items-center justify-center mb-8">
<span class="material-symbols-outlined text-secondary text-3xl" data-icon="bolt">bolt</span>
</div>
<h3 class="text-3xl font-bold mb-4">Fast &amp; Easy Booking</h3>
<p class="text-on-surface-variant max-w-sm text-lg leading-relaxed">
                                    From selection to confirmation in under sixty seconds. Our fluid interface anticipates your needs.
                                </p>
</div>
</div>
<div class="absolute -right-20 -bottom-20 w-80 h-80 bg-primary/5 rounded-full blur-3xl group-hover:bg-primary/10 transition-colors"></div>
</div>
<!-- Feature 2: Real-time Availability -->
<div class="md:col-span-4 bg-surface-container-low rounded-[2rem] p-12 flex flex-col justify-between overflow-hidden">
<div class="bg-primary/10 w-16 h-16 rounded-2xl flex items-center justify-center mb-8">
<span class="material-symbols-outlined text-primary text-3xl" data-icon="sync">sync</span>
</div>
<div>
<h3 class="text-2xl font-bold mb-4">Real-time Availability</h3>
<p class="text-on-surface-variant text-base">Live inventory updates ensure you never miss a slot. Accuracy at its peak.</p>
</div>
</div>
<!-- Feature 3: Secure Payments -->
<div class="md:col-span-4 bg-on-surface rounded-[2rem] p-12 flex flex-col justify-between text-white">
<div class="bg-white/10 w-16 h-16 rounded-2xl flex items-center justify-center mb-8">
<span class="material-symbols-outlined text-white text-3xl" data-icon="shield">shield</span>
</div>
<div>
<h3 class="text-2xl font-bold mb-4">Secure Payments</h3>
<p class="text-white/60 text-base">End-to-end encryption with global standards. Your security is our highest priority.</p>
</div>
</div>
<!-- Visual Accent Card -->
<div class="md:col-span-8 h-80 rounded-[2rem] overflow-hidden relative">
<img class="w-full h-full object-cover" data-alt="Elegant close-up of a high-end concierge desk with crystal vase and minimalist decor in a luxury setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBlA1FoEMfTFzxlK2MQ2hHKKWLpFSc4OFhepa_3m4uUOnE7WjcC0qsWl8msNi_03dOhyrz_jJ2GYTP7XnXGrX9pTLpv6aXil84OnEfE0O5ixM2V17ZWDnBOb0tt9MAYRl2Nohca7ehU3IkF7WKpbD4Ffs8NSll18kO0aXOjYZbGgLGCId8ioPD_B3Pbn4jfTnX0o8jNJcyM8E8LBzYCE-ikKRjljGDXi2ZSMM_g2aeJ7Ww7XBmXaZIp1-TB2YSGMh6he_KbjyyxNJR9"/>
<div class="absolute inset-0 bg-primary/20 mix-blend-overlay"></div>
</div>
</div>
</div>
</section>
<!-- Testimonials: Editorial Quote Wall -->
<section class="py-32 bg-surface-container-low overflow-hidden">
<div class="max-w-7xl mx-auto px-8">
<div class="flex flex-col md:flex-row items-center gap-20">
<div class="w-full md:w-1/2">
<img class="rounded-[3rem] shadow-2xl scale-105 transform -rotate-3" data-alt="Sophisticated woman smiling in a luxury restaurant setting with warm bokeh lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBk3_bsI5tE4GF7h-mW0prxpqH0PwksvikjIfmJAptfMFMlLDjjF9gaGhWB7_TAbSZlfWUv3lLcd4RenfUe9GNU9CMQm_sYY6bQNcQjVDX4Q3H4Atid_MfRBKKp0JPHlyxaFw19eYCyFhvsK8YjeEi9PhtVUu4ZwrSMplNTV6VCBqQNDxFkTqAQF1Ut8Iw4YuBfxTeKGLjjlzpPEOCBX1NL5zvTxW-hLgulHufnUmhULS_u5clTdlDegSXEgGacrgYlOCevK9W84Z0A"/>
</div>
<div class="w-full md:w-1/2">
<div class="mb-12">
<span class="text-primary font-bold tracking-widest uppercase text-xs">Testimonials</span>
<h2 class="text-5xl font-black tracking-tighter mt-4 leading-tight">What our guests say about Ninym.</h2>
</div>
<div class="space-y-16">
<div class="relative">
<span class="material-symbols-outlined text-primary-fixed-dim text-8xl absolute -left-12 -top-8 opacity-50" data-icon="format_quote">format_quote</span>
<p class="text-2xl font-medium text-on-surface leading-relaxed relative z-10 italic">
                                    "Ninym has completely redefined how we manage our executive travel. The interface is breathtaking and the speed is unmatched."
                                </p>
<div class="flex items-center mt-8 space-x-4">
<img class="w-12 h-12 rounded-full object-cover" data-alt="Professional man's portrait with neutral background and soft studio lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBjnhpdrjwcp-ritPl1-GWC2S8b6Mi0wEkbSI-An7PP2XBKR3dvJ82qZGeh6hk8R1fBaMdW1kCUhpV1_LtWajwKB02KlYvhesgRplIvPQqqD3IoBIbx9U7ktLyLItdKODqdwu7enTjHDorx1zAJh7ZwSipyKN1jm8yCLU4YORFXv_JM1Yt6dO2g6XpHJG2Fv5NRkGVBdMh_qX5hmHPcdgIuwqhvY3SGfCzCQz6ftgVmldWR8RfFZDQcbCd9gW5nhwZLQaOiKvbMuhW8"/>
<div>
<h4 class="font-bold text-on-surface">Julian Thorne</h4>
<p class="text-on-surface-variant text-sm">CEO, Lumina International</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="py-24 px-8">
<div class="max-w-7xl mx-auto bg-primary rounded-[3rem] p-16 md:p-24 text-center relative overflow-hidden shadow-[0_48px_100px_-12px_rgba(53,37,205,0.4)]">
<div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
<div class="absolute -top-1/2 -left-1/4 w-full h-full bg-white rounded-full blur-[120px]"></div>
<div class="absolute -bottom-1/2 -right-1/4 w-full h-full bg-secondary rounded-full blur-[120px]"></div>
</div>
<div class="relative z-10 max-w-3xl mx-auto">
<h2 class="text-5xl md:text-6xl font-black text-white tracking-tighter mb-8 leading-tight">Ready to elevate your reservations?</h2>
<p class="text-primary-fixed text-xl mb-12 opacity-80">Welcome back, Julian. Your exclusive member benefits are active.</p>
<div class="flex flex-col sm:flex-row justify-center items-center gap-6">
<button class="bg-white text-primary px-12 py-5 rounded-full font-bold text-lg hover:bg-primary-fixed transition-colors">Start Booking Now</button>
<button class="text-white border-2 border-white/20 px-12 py-5 rounded-full font-bold text-lg hover:bg-white/10 transition-colors">Contact Concierge</button>
</div>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="w-full py-12 px-8 bg-slate-50 dark:bg-slate-950 border-t border-slate-100 dark:border-slate-800">
<div class="flex flex-col md:flex-row justify-between items-center max-w-7xl mx-auto space-y-8 md:space-y-0">
<div class="text-lg font-black text-slate-900 dark:text-white">
                Ninym
            </div>
<div class="flex flex-wrap justify-center gap-8">
<a class="font-['Inter'] text-xs font-medium uppercase tracking-widest text-slate-400 hover:text-cyan-600 transition-colors duration-200 underline-offset-4 hover:underline" href="#">Privacy Policy</a>
<a class="font-['Inter'] text-xs font-medium uppercase tracking-widest text-slate-400 hover:text-cyan-600 transition-colors duration-200 underline-offset-4 hover:underline" href="#">Terms of Service</a>
<a class="font-['Inter'] text-xs font-medium uppercase tracking-widest text-slate-400 hover:text-cyan-600 transition-colors duration-200 underline-offset-4 hover:underline" href="#">Help Center</a>
<a class="font-['Inter'] text-xs font-medium uppercase tracking-widest text-slate-400 hover:text-cyan-600 transition-colors duration-200 underline-offset-4 hover:underline" href="#">Contact Us</a>
</div>
<p class="font-['Inter'] text-xs font-medium uppercase tracking-widest text-slate-400">
                © 2024 Ninym Concierge. All rights reserved.
            </p>
</div>
</footer>
<script type="module" src="js/auth.js"></script>
</body></html>