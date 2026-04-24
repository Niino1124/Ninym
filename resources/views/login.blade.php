<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
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
                }
            }
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-surface text-on-surface antialiased overflow-hidden">
<!-- Landing Page Background (Blurred Context) -->
<div class="fixed inset-0 z-0 blur-md grayscale-[0.2] brightness-75">
<!-- TopAppBar Placeholder (Simulated for Background) -->
<header class="sticky top-0 w-full z-50 bg-white/80 backdrop-blur-md flex justify-between items-center px-8 h-20 max-w-screen-2xl mx-auto">
<div class="text-2xl font-bold tracking-tighter text-indigo-700 uppercase">LuxeReserve</div>
<div class="hidden md:flex gap-8 items-center">
<span class="text-slate-600 font-medium">Destinations</span>
<span class="text-slate-600 font-medium">Experiences</span>
<span class="text-slate-600 font-medium">The Journal</span>
</div>
<div class="flex gap-4">
<button onclick="openLogin()" class="px-6 py-2 rounded-full bg-slate-100 text-slate-900 font-medium">Login</button>
</div>
</header>
<!-- Hero Content Background -->
<main class="max-w-screen-2xl mx-auto px-8 pt-20">
<div class="grid grid-cols-12 gap-8">
<div class="col-span-7">
<h1 class="text-7xl font-bold tracking-tight text-on-background mb-8 leading-[1.1]">The art of<br/><span class="text-primary">refined travel</span></h1>
<p class="text-xl text-on-surface-variant max-w-xl mb-12">Experience curated escapes designed for the modern connoisseur. Every detail, orchestrated for excellence.</p>
</div>
<div class="col-span-5 relative">
<div class="w-full h-[600px] rounded-2xl bg-surface-container-highest overflow-hidden">
<img class="w-full h-full object-cover" data-alt="ultra-luxury modern hotel infinity pool at dusk overlooking the Mediterranean sea with warm cinematic lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQwHR6fxducqeHW3HpH1x-uEPhCKnzoDeM8ri671XwrYdaxEjsI4sio_3Thq2PSvI6rhlPZaffvRzCAsMHtEpZSSQC8ctEuz5Sa7npTpFTW55JjBesAq6l9IT0Th87NaDwW4OJ8z6dz0rVizXcf9BerRPgUcduU47at_HirqRjB8sXypblKsnPCgvOiYNRuAwU-oefpuOiO0X4JkKy7fS32IcLmsLgt76rwVj_vRZlCgYtwv6bF0tMrklGrF-PpJAm8FUKRLdJ2rT7"/>
</div>
</div>
</div>
</main>
</div>
<!-- Modal Backdrop -->
<div id="loginModal" class="fixed inset-0 z-[60] bg-on-background/40 backdrop-blur-sm flex items-center justify-center p-4">
<!-- Login Modal Container -->
<div class="bg-surface-container-lowest w-full max-w-[480px] rounded-[2rem] shadow-[0_16px_48px_rgba(25,28,29,0.08)] relative overflow-hidden flex flex-col">
<!-- Close Button (Aesthetic) -->
<button onclick="closeLogin()" class="absolute top-6 right-6 p-2 rounded-full hover:bg-surface-container-low transition-colors text-on-surface-variant">
<span class="material-symbols-outlined">close</span>
</button>
<!-- Modal Content -->
<div class="px-10 pt-12 pb-10">
<!-- Header -->
<div class="text-center mb-10">
<div class="text-indigo-700 font-bold tracking-tighter uppercase text-sm mb-6">LuxeReserve</div>
<h2 class="text-3xl font-bold tracking-tight text-on-surface mb-2">Welcome Back</h2>
<p class="text-on-surface-variant text-sm">Please enter your credentials to access your concierge.</p>
</div>
<!-- Login Form -->
<form class="space-y-5" onsubmit="doLogin(); return false;">
<!-- Email Field -->
<div class="group relative">
<label class="absolute left-4 -top-2.5 px-1 bg-surface-container-lowest text-xs font-semibold text-primary transition-all group-focus-within:text-primary" for="email">Email Address</label>
<input class="w-full px-4 py-4 rounded-xl border border-outline-variant/30 focus:border-primary focus:ring-4 focus:ring-primary-fixed/30 bg-transparent transition-all outline-none text-on-surface placeholder:text-on-surface-variant/40" id="login_email" placeholder="123@gmail.com" type="email"/>
</div>
<!-- Password Field -->
<div class="group relative">
<label class="absolute left-4 -top-2.5 px-1 bg-surface-container-lowest text-xs font-semibold text-on-surface-variant group-focus-within:text-primary transition-all" for="password">Password</label>
<input class="w-full px-4 py-4 rounded-xl border border-outline-variant/30 focus:border-primary focus:ring-4 focus:ring-primary-fixed/30 bg-transparent transition-all outline-none text-on-surface placeholder:text-on-surface-variant/40" id="login_password" placeholder="••••••••" type="password"/>
<button class="absolute right-4 top-1/2 -translate-y-1/2 text-on-surface-variant hover:text-primary transition-colors" type="button">
<span class="material-symbols-outlined text-xl">visibility</span>
</button>
</div>
<!-- Forgot Password -->
<div class="flex justify-end">
<a class="text-xs font-semibold text-primary hover:text-primary-container transition-colors tracking-tight" href="#">Forgot Password?</a>
</div>
<!-- Submit Button -->
<button class="w-full py-4 rounded-full bg-gradient-to-tr from-primary to-primary-container text-on-primary font-bold tracking-tight shadow-lg shadow-primary/20 active:scale-[0.98] transition-all duration-200 mt-2" type="submit">
                        Sign In
                    </button>
</form>
<!-- Divider -->
<div class="relative flex items-center my-8">
<div class="flex-grow border-t border-outline-variant/20"></div>
<span class="flex-shrink mx-4 text-[10px] font-bold uppercase tracking-widest text-on-surface-variant/60">Or continue with</span>
<div class="flex-grow border-t border-outline-variant/20"></div>
</div>
<!-- Social Logins -->
<div class="grid grid-cols-2 gap-4">
<button class="flex items-center justify-center gap-3 py-3.5 px-4 rounded-full border border-outline-variant/20 hover:bg-surface-container-low transition-all duration-300 active:scale-[0.98]">
<svg class="w-5 h-5" viewbox="0 0 24 24">
<path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"></path>
<path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"></path>
<path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"></path>
<path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 12-4.53z" fill="#EA4335"></path>
</svg>
<span class="text-sm font-semibold tracking-tight">Google</span>
</button>
<button class="flex items-center justify-center gap-3 py-3.5 px-4 rounded-full border border-outline-variant/20 hover:bg-surface-container-low transition-all duration-300 active:scale-[0.98]">
<svg class="w-5 h-5 fill-on-surface" viewbox="0 0 24 24">
<path d="M17.05 20.28c-.98.95-2.05 1.79-3.48 1.79-1.42 0-1.89-.88-3.56-.88s-2.2.85-3.56.85c-1.42 0-2.62-1.04-3.6-2.45-1.98-2.85-2.25-7.04-.32-9.25 1.15-1.32 2.62-2.12 4.1-2.12 1.42 0 2.25.75 3.3 1.05 1.05-.3 2.12-1.25 3.65-1.25 1.3 0 2.58.62 3.42 1.55-3.35 1.4-2.8 5.75.52 7.08-.72 1.58-1.55 2.78-2.47 3.63zm-3.1-15.65c-.32-2.28 1.5-4.4 3.65-4.62.28 2.55-2.3 4.88-3.65 4.62z"></path>
</svg>
<span class="text-sm font-semibold tracking-tight">Apple</span>
</button>
</div>
</div>
<!-- Modal Footer -->
<div class="bg-surface-container-low py-6 px-10 text-center">
<p class="text-sm text-on-surface-variant font-medium">
                    Don't have an account? <a class="text-primary font-bold hover:underline" href="#">Sign Up</a>
</p>
</div>
</div>
</div>
<!-- Hidden Navigation Shell Logic (Suppressing for focused transactional state) -->
<footer class="hidden">
<div class="bg-slate-50 dark:bg-slate-950 w-full py-12 border-t border-slate-200/20 flex flex-col md:flex-row justify-between items-center px-8 gap-6">
<span class="text-lg font-bold text-slate-900 dark:text-slate-100">LuxeReserve</span>
<div class="flex gap-6">
<span class="font-inter text-xs tracking-widest uppercase text-slate-500">Privacy</span>
<span class="font-inter text-xs tracking-widest uppercase text-slate-500">Terms</span>
<span class="font-inter text-xs tracking-widest uppercase text-slate-500">Concierge</span>
<span class="font-inter text-xs tracking-widest uppercase text-slate-500">Press</span>
</div>
<p class="font-inter text-xs tracking-widest uppercase text-slate-500">© 2024 LuxeReserve Global. Defined by Elegance.</p>
</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="module" src="js/auth.js"></script>
</body></html>