<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                        "lg": "1rem",
                        "xl": "1.25rem",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline": ["Inter"],
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
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-surface text-on-surface">
<!-- TopNavBar -->
<header class="sticky top-0 w-full z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl shadow-sm dark:shadow-none">
<nav class="flex justify-between items-center px-8 py-4 max-w-screen-2xl mx-auto">
<div class="flex items-center gap-12">
<span class="text-2xl font-black text-slate-900 dark:text-white tracking-tighter">Ninym</span>
<div class="hidden md:flex items-center gap-8 font-['Inter'] font-bold tracking-tight text-sm">
<a class="text-slate-600 dark:text-slate-400 hover:text-indigo-500 transition-all duration-300 ease-in-out hover:opacity-80" href="/">Explore</a>
<a class="text-indigo-600 dark:text-indigo-400 font-bold border-b-2 border-indigo-600 transition-all duration-300 ease-in-out hover:opacity-80" href="/reserve">Reserve</a>
<a class="text-slate-600 dark:text-slate-400 hover:text-indigo-500 transition-all duration-300 ease-in-out hover:opacity-80" href="/userdashboard">Dashboard</a>
<a class="text-slate-600 dark:text-slate-400 hover:text-indigo-500 transition-all duration-300 ease-in-out hover:opacity-80" href="/support">Support</a>
</div>
</div>
<div id="authButtons" class="flex items-center space-x-4">
<a href="/login" class="text-slate-600 dark:text-slate-400 font-['Inter'] font-bold tracking-tight text-sm transition-all duration-300 ease-in-out hover:opacity-80 scale-95 active:scale-100">Log In</a>
<a href="/signup" class="bg-indigo-600 text-white px-6 py-2 rounded-full font-['Inter'] font-bold tracking-tight text-sm transition-all duration-300 ease-in-out hover:opacity-80 scale-95 active:scale-100">Sign Up</a>
</div>
<div id="userBox" class="hidden flex items-center space-x-3 px-3 py-1.5 rounded-full border">
        <img class="w-8 h-8 rounded-full object-cover" src="https://i.pravatar.cc/100"/>
        <span id="userEmail" class="text-sm font-bold">User</span>
        <button id="logoutBtn" onclick="logout()" class="text-xs text-red-500 ml-2">
            Logout
        </button>
    </div>
</nav>
</header>
<main class="max-w-screen-2xl mx-auto px-8 py-12">
<div class="flex flex-col lg:flex-row gap-12">
<!-- Reservation Canvas (The "Editorial" Side) -->
<div class="flex-grow">
<div class="mb-12">
<h1 class="text-[3.5rem] font-bold leading-none tracking-tighter text-on-surface mb-4">Select Your Experience.</h1>
<p class="text-on-surface-variant max-w-lg text-lg">Choose your preferred seating for the Grand Hall evening. Every slot offers a curated view of the central performance.</p>
</div>
<!-- Legend -->
<div class="flex items-center gap-8 mb-10">
<div class="flex items-center gap-3">
<div class="w-5 h-5 rounded-lg border-2 border-primary-container"></div>
<span class="text-xs font-semibold uppercase tracking-widest text-on-surface-variant">Available</span>
</div>
<div class="flex items-center gap-3">
<div class="w-5 h-5 rounded-lg bg-primary"></div>
<span class="text-xs font-semibold uppercase tracking-widest text-on-surface-variant">Selected</span>
</div>
<div class="flex items-center gap-3">
<div class="w-5 h-5 rounded-lg bg-surface-variant opacity-60"></div>
<span class="text-xs font-semibold uppercase tracking-widest text-on-surface-variant">Booked</span>
</div>
</div>
<!-- Seat Grid -->
<div class="bg-surface-container-low p-12 rounded-xl">
<div class="grid grid-cols-4 sm:grid-cols-6 lg:grid-cols-10 gap-4">
<!-- Generative Slots -->
<!-- Row 1 -->
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="1A">1A</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="1B">1B</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="1C">1C</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="1D">1D</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="1E">1E</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="1F">1F</button>

<div class="hidden lg:block"></div>

<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="1G">1G</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="1H">1H</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="1I">1I</button>

<!-- Row 2 -->
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="2A">2A</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="2B">2B</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="2C">2C</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="2D">2D</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="2E">2E</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="2F">2F</button>

<div class="hidden lg:block"></div>

<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="2G">2G</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="2H">2H</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="2I">2I</button>

<!-- Row 3 -->
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="3A">3A</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="3B">3B</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="3C">3C</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="3D">3D</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="3E">3E</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="3F">3F</button>

<div class="hidden lg:block"></div>

<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="3G">3G</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="3H">3H</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="3I">3I</button>

<!-- Row 4 -->
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="4A">4A</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="4B">4B</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="4C">4C</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="4D">4D</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="4E">4E</button>
<button class="seat aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors" data-id="4F">4F</button>

<div class="hidden lg:block"></div> <!-- Aisle -->
<button class="aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors">4G</button>
<button class="aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors">4H</button>
<button class="aspect-square rounded-lg border-2 border-primary-container flex items-center justify-center text-[10px] font-bold text-primary hover:bg-primary-fixed transition-colors">4I</button>
</div>
<!-- Screen Indicator -->
<div class="mt-16 text-center">
<div class="w-3/4 mx-auto h-1 bg-gradient-to-r from-transparent via-primary-container to-transparent opacity-30 rounded-full mb-4"></div>
<span class="text-xs font-bold uppercase tracking-[0.4em] text-outline">Stage &amp; Audio Focus</span>
</div>
</div>
<!-- Bento Grid Detail Section -->
<div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-8">
<div class="md:col-span-2 bg-surface-container-lowest rounded-xl p-8 flex flex-col justify-between min-h-[300px]">
<div>
<span class="text-primary font-bold text-xs uppercase tracking-widest mb-4 block">Premium Amenity</span>
<h3 class="text-3xl font-bold tracking-tight mb-4">The Private Lounge</h3>
<p class="text-on-surface-variant leading-relaxed">Reserved seats in the front row grant exclusive access to the Ninym Lounge, featuring a selection of artisanal refreshments and a quiet sanctuary between acts.</p>
</div>
<div class="flex items-center gap-4 mt-8">
<img class="w-16 h-16 rounded-full object-cover" data-alt="Close up of high-end lounge interior with velvet chairs and soft ambient lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8im1T9l4G-QFjIn5D7Gf8Tiw5PfHRXMd7IgTJL0y7maktGXHILyqYemKdEF1fS6S8Mh0fpP3wv15ZZ2FH82X3In6i7y5kVb50K30YUF3I3FAJuxAWvT9g-i6QZfpPwRAwYY0KQ7dbHY-mAPOyGReNzLTeubk05yqRewmmKPTHQX8pe-wJc6MueSU7QEu4DW_WN1N2H4JtQzeqLDoR8dKqQUhflrpLv6pNqli9DEYLTQSNJwdRHARdp48tb2C_ec189zH4T1OP9Fcx"/>
<div>
<p class="font-bold text-sm">Concierge Ready</p>
<p class="text-xs text-on-surface-variant">Instant service via your mobile device</p>
</div>
</div>
</div>
<div class="bg-primary rounded-xl p-8 flex flex-col justify-end relative overflow-hidden text-white">
<img class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-30" data-alt="Dramatic lighting in a modern concert hall with deep blues and purples" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBsCsDafXyT2O2aY0LNJjEXq4HcuTokFAfPi1-qSBoHMHOuefFW6KQHpSiWBwenHLPZ7bIKy5NwGY6AU9n6I19iT-lVoOSFxOu9sUDHaKfRofiHG1BFcdFPq38lit_jeGdDgWDezmEDtAnpxL16jKyjHokLIHi90mAV0y32gTvV8c4QsVLWnH3jHmlDJO5xqlfRgga_AOeg4Txu8-fFpNSjx0fQ01Pgyb3V6k5lJZuTEh0wIvAXf2YT0YgVWCmYITTd1iY0g6emJHv2"/>
<div class="relative z-10">
<span class="material-symbols-outlined text-3xl mb-4">sound_sensing</span>
<h4 class="text-xl font-bold mb-2">Dolby Atmos</h4>
<p class="text-sm opacity-80">Full spatial immersion across all reserved zones.</p>
</div>
</div>
</div>
</div>
<!-- Booking Sidebar (The "Task-Focused" Shell) -->
<aside class="w-full lg:w-96">
<div class="sticky top-24 space-y-8">
<!-- Summary Card -->
<div class="bg-surface-container-lowest rounded-xl p-8 shadow-2xl shadow-on-surface/5">
<h2 class="text-xl font-bold tracking-tight mb-8">Reservation Summary</h2>
<div class="space-y-6 mb-10">
<!-- Selected Slot Item -->
<div class="flex justify-between items-center group">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-lg bg-primary-fixed flex items-center justify-center text-primary">
<span class="font-bold">1E</span>
</div>
<div>
<p class="font-bold text-sm">Front Row Premium</p>
<p class="text-xs text-on-surface-variant">Includes Lounge Access</p>
</div>
</div>
<span class="font-bold text-sm">$189.00</span>
</div>
<!-- Selected Slot Item -->
<div class="flex justify-between items-center group">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-lg bg-primary-fixed flex items-center justify-center text-primary">
<span class="font-bold">2I</span>
</div>
<div>
<p class="font-bold text-sm">Orchestra Side</p>
<p class="text-xs text-on-surface-variant">Enhanced Acoustics</p>
</div>
</div>
<span class="font-bold text-sm">$125.00</span>
</div>
</div>
<!-- Pricing Breakdown -->
<div class="border-t border-outline-variant/20 pt-6 space-y-3 mb-8">
<div class="flex justify-between text-sm">
<span class="text-on-surface-variant">Subtotal</span>
<span class="font-medium">$314.00</span>
</div>
<div class="flex justify-between text-sm">
<span class="text-on-surface-variant">Concierge Fee</span>
<span class="font-medium">$12.00</span>
</div>
<div class="flex justify-between text-lg font-bold pt-2">
<span>Total</span>
<span class="text-primary">$326.00</span>
</div>
</div>
<button id="confirmBtn" class="w-full bg-gradient-to-br from-primary to-primary-container text-on-primary py-4 rounded-full font-bold text-sm shadow-xl shadow-primary/30 active:scale-[0.98] transition-transform">
                            Confirm Reservation
                        </button>
<p class="text-[10px] text-center text-on-surface-variant mt-6 uppercase tracking-widest font-medium">
                            15-minute selection hold active
                        </p>
</div>
<!-- Location Insight -->
<div class="bg-surface-container-high rounded-xl p-8">
<div class="flex items-center gap-3 mb-4">
<span class="material-symbols-outlined text-secondary">location_on</span>
<span class="font-bold text-sm uppercase tracking-wider">Ninym Grand Hall</span>
</div>
<div class="w-full h-32 rounded-lg overflow-hidden relative grayscale hover:grayscale-0 transition-all duration-700">
<img class="w-full h-full object-cover" data-alt="Top down satellite view of a modern urban street with clean geometric layouts" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFgbVlVugI1nsWiGcWRNB4g_TRh2op5Bz4Ho-iPZ0HbXmf9kY9bxuUZBB9VGJegWNJDpZNcrLsaDxfzwyKxq8Gt_I1egUhD9o3tJ46tZ3lZrF4vxczXErq5MQcH9FVYce1v3pCj2vCGDe8ge__2hBH6JVHFvdck0_qFjIIOGVQTqox_60uWdOvFy5Yrc2ZBeBxOXgwYHVTSAzx93c2_N4Hh3qZZcvNU47pBePt0lx-Lg6CORsYkEV9_hiALHJm_vbbFfrm1jaW5lyz"/>
<div class="absolute inset-0 flex items-center justify-center">
<div class="w-4 h-4 bg-primary rounded-full ring-8 ring-primary/20 animate-pulse"></div>
</div>
</div>
<p class="text-xs text-on-surface-variant mt-4 leading-relaxed">
                            442 Royal Avenue, Suite 100.<br/>Parking validation available for all guests.
                        </p>
</div>
</div>
</aside>
</div>
</main>
<!-- Footer -->
<footer class="bg-slate-50 dark:bg-slate-950 w-full py-12 px-8 border-t border-slate-100 dark:border-slate-800">
<div class="flex flex-col md:flex-row justify-between items-center max-w-7xl mx-auto">
<div class="mb-8 md:mb-0">
<span class="text-lg font-black text-slate-900 dark:text-white uppercase tracking-tighter">Ninym</span>
<p class="text-slate-400 font-['Inter'] text-xs font-medium uppercase tracking-widest mt-2">© 2024 Ninym Concierge. All rights reserved.</p>
</div>
<div class="flex gap-8 font-['Inter'] text-xs font-medium uppercase tracking-widest">
<a class="text-slate-400 hover:text-cyan-600 transition-colors duration-200 underline-offset-4 hover:underline" href="#">Privacy Policy</a>
<a class="text-slate-400 hover:text-cyan-600 transition-colors duration-200 underline-offset-4 hover:underline" href="#">Terms of Service</a>
<a class="text-slate-400 hover:text-cyan-600 transition-colors duration-200 underline-offset-4 hover:underline" href="#">Help Center</a>
<a class="text-slate-400 hover:text-cyan-600 transition-colors duration-200 underline-offset-4 hover:underline" href="#">Contact Us</a>
</div>
</div>
</footer>
<script type="module" src="js/auth.js"></script>

<script type="module">
import { db, ref, onValue, auth, runTransaction } from "/js/firebase.js";
import { get } from "https://www.gstatic.com/firebasejs/10.12.2/firebase-database.js";

document.addEventListener("DOMContentLoaded", () => {

    let selectedSeats = [];

    const allSeats = document.querySelectorAll(".seat");

    // =======================
    // CLICK SEAT
    // =======================
    allSeats.forEach(seat => {
        seat.addEventListener("click", () => {

            let seatId = seat.dataset.id;

            // ❌ kalau sudah dibooking
            if (seat.classList.contains("booked")) {
                alert("Kursi sudah dibooking!");
                return;
            }

            // toggle (klik lagi = batal)
            if (selectedSeats.includes(seatId)) {
                selectedSeats = selectedSeats.filter(id => id !== seatId);
                seat.classList.remove("bg-primary", "text-white");
                return;
            }

            // max 4 kursi
            if (selectedSeats.length >= 4) {
                alert("Maksimal pilih 4 kursi!");
                return;
            }

            selectedSeats.push(seatId);
            seat.classList.add("bg-primary", "text-white");
        });
    });

    // =======================
    // CONFIRM BUTTON
    // =======================
    document.getElementById("confirmBtn").addEventListener("click", async () => {

        if (selectedSeats.length === 0) {
            alert("Pilih kursi dulu!");
            return;
        }

        const username = window.username;
        const userId = window.userId;

        if (!userId) {
            alert("Silakan login dulu!");
            return;
        }

        if (!username) {
            alert("Silakan login dulu!");
            return;
        }

        for (const seatId of selectedSeats) {

            await runTransaction(ref(db, "seats/" + seatId), (currentData) => {

                // ❌ kalau sudah dibooking orang lain
                if (currentData && currentData.status === "booked") {
                    return; // batal
                }

                return {
                    status: "booked",
                    username: window.username,
                    userId: window.userId,
                    
                };
            });
        }

        // simpan user booking
        await set(ref(db, "users/" + window.userId), {
            username: window.username,
            lastBooking: selectedSeats,
            expiredAt: expiredAt
        });

        alert("Reservasi berhasil");
        selectedSeats = [];

    });

    // =======================
    // REALTIME UPDATE
    // =======================
    onValue(ref(db, "seats"), snapshot => {

        const data = snapshot.val() || {};
        const now = Date.now();

        Object.keys(data).forEach(seatId => {

            const seatData = data[seatId];
            const seat = document.querySelector(`[data-id="${seatId}"]`);

            if (!seat) return;

            // ❌ kalau expired → reset kursi
            if (seatData.expiredAt && now > seatData.expiredAt) {
                set(ref(db, "seats/" + seatId), null);

                seat.className = seat.className
                    .replace("bg-surface-variant", "")
                    .replace("opacity-40", "")
                    .replace("cursor-not-allowed", "")
                    .replace("booked", "");

                seat.classList.add(
                    "border-primary-container",
                    "text-primary"
                );

                return;
            }

            // ✅ kalau masih booked
            if (seatData.status === "booked") {

                seat.classList.remove(
                    "border-primary-container",
                    "text-primary"
                );

                seat.classList.add(
                    "bg-surface-variant",
                    "opacity-40",
                    "cursor-not-allowed",
                    "booked"
                );

            } else {
                // 🔥 kalau kosong → HARUS bisa diklik lagi
                seat.classList.remove(
                    "bg-surface-variant",
                    "opacity-40",
                    "cursor-not-allowed",
                    "booked"
                );

                seat.classList.add(
                    "border-primary-container",
                    "text-primary"
                );
            }
        });
    });
});
</script>
</body></html>