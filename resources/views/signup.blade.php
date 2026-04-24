<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>LuxeReserve | Sign Up</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary-container": "#4f46e5",
                        "inverse-surface": "#2e3132",
                        "on-secondary-fixed": "#001f26",
                        "primary-fixed": "#e2dfff",
                        "on-background": "#191c1d",
                        "on-tertiary-fixed-variant": "#7b2f00",
                        "surface-dim": "#d9dadb",
                        "primary-fixed-dim": "#c3c0ff",
                        "surface-container": "#edeeef",
                        "surface-tint": "#4d44e3",
                        "on-secondary-fixed-variant": "#004e5c",
                        "surface-variant": "#e1e3e4",
                        "secondary-container": "#57dffe",
                        "tertiary": "#7e3000",
                        "tertiary-fixed": "#ffdbcc",
                        "surface": "#f8f9fa",
                        "error": "#ba1a1a",
                        "on-tertiary-fixed": "#351000",
                        "outline-variant": "#c7c4d8",
                        "outline": "#777587",
                        "on-primary-fixed": "#0f0069",
                        "tertiary-container": "#a44100",
                        "surface-container-lowest": "#ffffff",
                        "tertiary-fixed-dim": "#ffb695",
                        "on-surface": "#191c1d",
                        "surface-container-low": "#f3f4f5",
                        "surface-container-high": "#e7e8e9",
                        "surface-container-highest": "#e1e3e4",
                        "on-tertiary-container": "#ffd2be",
                        "background": "#f8f9fa",
                        "on-secondary-container": "#006172",
                        "error-container": "#ffdad6",
                        "surface-bright": "#f8f9fa",
                        "on-primary": "#ffffff",
                        "primary": "#3525cd",
                        "on-secondary": "#ffffff",
                        "on-primary-fixed-variant": "#3323cc",
                        "inverse-primary": "#c3c0ff",
                        "secondary-fixed": "#acedff",
                        "secondary": "#00687a",
                        "inverse-on-surface": "#f0f1f2",
                        "secondary-fixed-dim": "#4cd7f6",
                        "on-tertiary": "#ffffff",
                        "on-error-container": "#93000a",
                        "on-surface-variant": "#464555",
                        "on-error": "#ffffff",
                        "on-primary-container": "#dad7ff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline": ["Inter"],
                        "display": ["Inter"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    }
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .modal-overlay {
            background: rgba(25, 28, 29, 0.4);
            backdrop-filter: blur(8px);
        }
        .custom-shadow {
            box-shadow: 0 16px 48px rgba(25, 28, 29, 0.06);
        }
    </style>
</head>
<body class="bg-surface font-body text-on-surface overflow-hidden">
<!-- Landing Page Background (Blurred) -->
<div class="fixed inset-0 z-0 overflow-hidden select-none grayscale-[20%] brightness-75">
<!-- TopAppBar Placeholder -->
<header class="sticky top-0 w-full z-50 bg-white/80 backdrop-blur-md flex justify-between items-center px-8 h-20 max-w-screen-2xl mx-auto">
<div class="text-2xl font-bold tracking-tighter text-indigo-700 uppercase">LuxeReserve</div>
<nav class="hidden md:flex gap-8 items-center font-inter text-sm font-medium tracking-tight">
<span class="text-slate-600">Destinations</span>
<span id="userEmail">Guest</span>
<span class="text-slate-600">Experiences</span>
<span class="text-slate-600">The Journal</span>
</nav>
<div class="flex gap-4">
<button class="px-6 py-2 rounded-full text-slate-600 font-medium">Login</button>
<button class="px-6 py-2 rounded-full bg-indigo-600 text-white font-medium">Sign Up</button>
</div>
</header>
<!-- Hero Canvas -->
<main class="relative h-screen flex items-center px-8">
<div class="max-w-3xl">
<h1 class="text-7xl font-bold tracking-tighter text-on-surface leading-tight mb-6">Redefining Private <br/><span class="text-primary">Sanctuaries.</span></h1>
<p class="text-xl text-on-surface-variant max-w-xl leading-relaxed mb-10">Curated estates for those who seek silence, service, and the sublime.</p>
<div class="flex gap-4">
<div class="h-16 w-64 bg-surface-container-lowest rounded-full custom-shadow"></div>
<div class="h-16 w-16 bg-primary rounded-full custom-shadow"></div>
</div>
</div>
<!-- Decorative Image Elements -->
<div class="absolute right-0 top-1/4 w-1/3 h-3/5 rounded-l-3xl overflow-hidden shadow-2xl">
<img class="w-full h-full object-cover" data-alt="ultra-luxury modern villa infinity pool at dusk with warm interior lighting and mountain silhouette background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAAgKo_lpTYTDodnF1t26p8-kNrNmzxt2_HVgO9OKTmComBPECcxBJMC_ec5gfBIEfiPpv6jR56euloZUO8m7sLD6UKNJiiAfxqu6qqExqAZz1HN-cjj508neCIbxsP3vMK8PLxSwusuVVOMr4sscSOc7ngzsdfa-ZVcbdKT2T7mrDie6CwJGUSi2j7XXquN1pW308FilfjuQm9vVFon18Q243sR3H-TlIqrLbthjh7wiUNmN5vVvKBT2hGKH59e9j_u24_Oz3u2CPx"/>
</div>
</main>
</div>
<!-- Modal Overlay -->
<div id="registerModal" class="fixed inset-0 z-[100] flex items-center justify-center p-4 modal-overlay">
<!-- Modal Container -->
<div class="w-full max-w-md bg-surface-container-lowest rounded-[2rem] overflow-hidden custom-shadow flex flex-col relative">
<!-- Close Button -->
<button onclick="closeRegister()" class="absolute top-6 right-6 p-2 rounded-full hover:bg-surface-container-low transition-colors text-on-surface-variant">
<span class="material-symbols-outlined">close</span>
</button>
<!-- Content -->
<div class="p-8 md:p-12">
<!-- Header -->
<div class="mb-10 text-center">
<h2 class="text-3xl font-bold tracking-tight text-on-surface mb-2">Create Your Account</h2>
<p class="text-on-surface-variant text-sm">Join the inner circle of global travelers.</p>
</div>
<!-- Signup Form -->
<form class="space-y-5" onsubmit="doRegister(); return false;">
<!-- Full Name -->
<div class="space-y-1.5">
<label class="block text-[10px] font-bold uppercase tracking-widest text-on-surface-variant px-1" for="name">Full Name</label>
<div class="relative">
<input class="w-full px-5 py-3.5 bg-surface-container-low border border-outline-variant/15 rounded-xl focus:ring-2 focus:ring-primary-container focus:bg-white focus:outline-none transition-all placeholder:text-outline" id="register_username" placeholder="Juhron Wafa" type="text"/>
</div>
</div>
<!-- Email -->
<div class="space-y-1.5">
<label class="block text-[10px] font-bold uppercase tracking-widest text-on-surface-variant px-1" for="email">Email Address</label>
<div class="relative">
<input class="w-full px-5 py-3.5 bg-surface-container-low border border-outline-variant/15 rounded-xl focus:ring-2 focus:ring-primary-container focus:bg-white focus:outline-none transition-all placeholder:text-outline" id="register_email" placeholder="juhron_wafa@gmail.com" type="email"/>
</div>
</div>
<!-- Password -->
<div class="space-y-1.5">
<label class="block text-[10px] font-bold uppercase tracking-widest text-on-surface-variant px-1" for="password">Password</label>
<div class="relative">
<input class="w-full px-5 py-3.5 bg-surface-container-low border border-outline-variant/15 rounded-xl focus:ring-2 focus:ring-primary-container focus:bg-white focus:outline-none transition-all placeholder:text-outline" id="register_password" placeholder="••••••••" type="password"/>
<span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-on-surface-variant text-xl cursor-pointer">visibility</span>
</div>
</div>
<!-- Terms Checkbox -->
<div class="flex items-start gap-3 py-2 px-1">
<div class="relative flex items-center mt-0.5">
<input class="peer h-5 w-5 appearance-none rounded border border-outline-variant/30 bg-surface-container-low checked:bg-primary-container checked:border-primary-container focus:ring-2 focus:ring-primary-container transition-all cursor-pointer" id="terms" type="checkbox"/>
<span class="material-symbols-outlined absolute text-white text-sm opacity-0 peer-checked:opacity-100 pointer-events-none left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2" style="font-variation-settings: 'FILL' 1;">check</span>
</div>
<label class="text-xs text-on-surface-variant leading-relaxed cursor-pointer" for="terms">
                            I agree to the <a class="text-primary font-semibold hover:underline" href="#">Terms and Conditions</a> and <a class="text-primary font-semibold hover:underline" href="#">Privacy Policy</a>.
                        </label>
</div>
<!-- CTA Button -->
<button type="submit"class="w-full py-4 rounded-full bg-gradient-to-tr from-primary to-primary-container text-white font-bold tracking-tight shadow-lg shadow-primary-container/20 active:scale-95 transition-all mt-4">
                        Sign Up
                    </button>
</form>
<!-- Divider -->
<div class="relative my-8 text-center">
<div class="absolute inset-0 flex items-center">
<div class="w-full border-t border-outline-variant/20"></div>
</div>
<span class="relative px-4 bg-surface-container-lowest text-[10px] font-bold uppercase tracking-widest text-outline">Or sign up with</span>
</div>
<!-- Social Grid -->
<div class="grid grid-cols-2 gap-4">
<button class="flex items-center justify-center gap-3 py-3 px-4 bg-surface-container-low rounded-xl hover:bg-surface-container-high transition-colors text-sm font-semibold border border-outline-variant/10">
<svg class="w-5 h-5" viewbox="0 0 24 24">
<path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"></path>
<path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"></path>
<path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"></path>
<path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"></path>
</svg>
                        Google
                    </button>
<button class="flex items-center justify-center gap-3 py-3 px-4 bg-surface-container-low rounded-xl hover:bg-surface-container-high transition-colors text-sm font-semibold border border-outline-variant/10">
<svg class="w-5 h-5 fill-on-surface" viewbox="0 0 24 24">
<path d="M17.05 20.28c-.98.95-2.05.8-3.08.35-1.09-.46-2.09-.48-3.24 0-1.44.62-2.2.44-3.06-.35C2.79 15.25 3.51 7.59 9.05 7.31c1.35.07 2.29.74 3.11.74.83 0 1.93-.89 3.65-.77 2.11.13 3.14 1.35 3.14 1.35s-2.11 2.22-2.11 4.7c0 3 2.59 4 2.59 4s-.89 2-2.38 3.55zM12.03 7.25c-.02-2.23 1.76-4.07 3.91-4.25.21 2.25-1.89 4.21-3.91 4.25z"></path>
</svg>
                        Apple
                    </button>
</div>
<!-- Footer Link -->
<div class="mt-10 text-center">
<p class="text-sm text-on-surface-variant">
                        Already have an account? 
                        <a class="text-primary font-bold hover:underline ml-1" href="#">Log In</a>
</p>
</div>
</div>
<!-- Modal Brand Bar -->
<div class="h-1 bg-gradient-to-r from-primary via-primary-container to-secondary"></div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="module" src="js/auth.js"></script>
</body></html>