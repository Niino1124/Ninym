<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
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
            display: inline-block;
            line-height: 1;
        }
        .editorial-shadow {
            box-shadow: 0 16px 48px rgba(25, 28, 29, 0.06);
        }
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-surface text-on-surface">
<!-- TopNavBar -->
<nav class="sticky top-0 w-full z-50 bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl shadow-sm dark:shadow-none">
<div class="flex justify-between items-center px-8 py-4 max-w-screen-2xl mx-auto">
<div class="text-2xl font-black text-slate-900 dark:text-white tracking-tighter">Ninym</div>
<div class="hidden md:flex items-center space-x-8">
<a class="text-slate-600 dark:text-slate-400 hover:text-indigo-500 font-['Inter'] font-bold tracking-tight text-sm transition-all duration-300 ease-in-out hover:opacity-80" href="/">Explore</a>
<a class="text-slate-600 dark:text-slate-400 hover:text-indigo-500 font-['Inter'] font-bold tracking-tight text-sm transition-all duration-300 ease-in-out hover:opacity-80" href="/reserve">Reserve</a>
<a class="text-indigo-600 dark:text-indigo-400 font-bold border-b-2 border-indigo-600 font-['Inter'] tracking-tight text-sm transition-all duration-300 ease-in-out hover:opacity-80" href="/userdashboard">Dashboard</a>
<a class="text-slate-600 dark:text-slate-400 hover:text-indigo-500 font-['Inter'] font-bold tracking-tight text-sm transition-all duration-300 ease-in-out hover:opacity-80" href="/support">Support</a>
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
<div class="flex min-h-screen">
<!-- SideNavBar -->
<aside class="hidden lg:flex h-screen w-64 fixed left-0 top-0 pt-20 bg-slate-50 dark:bg-slate-950 flex-col p-6 space-y-2 font-['Inter'] font-medium text-sm">
<div class="mb-8 px-2">
<p class="text-xl font-bold text-indigo-600">Ninym Admin</p>
<p class="text-xs text-slate-500 uppercase tracking-widest mt-1">System Management</p>
</div>
<div class="space-y-1">
<a class="flex items-center space-x-3 px-4 py-3 bg-indigo-50 dark:bg-indigo-900/20 text-indigo-700 dark:text-indigo-300 rounded-xl cursor-pointer active:opacity-70 hover:translate-x-1 transition-transform duration-200">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">dashboard</span>
<span>Overview</span>
</a>
<a class="flex items-center space-x-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-900 rounded-xl cursor-pointer active:opacity-70 hover:translate-x-1 transition-transform duration-200">
<span class="material-symbols-outlined">event_seat</span>
<span>Reservations</span>
</a>
<a class="flex items-center space-x-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-900 rounded-xl cursor-pointer active:opacity-70 hover:translate-x-1 transition-transform duration-200">
<span class="material-symbols-outlined">insert_chart</span>
<span>Analytics</span>
</a>
<a class="flex items-center space-x-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-900 rounded-xl cursor-pointer active:opacity-70 hover:translate-x-1 transition-transform duration-200">
<span class="material-symbols-outlined">group</span>
<span>Users</span>
</a>
<a class="flex items-center space-x-3 px-4 py-3 text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-900 rounded-xl cursor-pointer active:opacity-70 hover:translate-x-1 transition-transform duration-200">
<span class="material-symbols-outlined">settings</span>
<span>Settings</span>
</a>
</div>
<div class="mt-auto pt-6 border-t border-slate-200 dark:border-slate-800">
<button class="w-full bg-indigo-600 text-white py-3 rounded-full font-bold tracking-tight hover:opacity-90 transition-opacity">
                    New Reservation
                </button>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 lg:ml-64 p-8 md:p-12">
<header class="mb-12">
<h1 class="text-4xl md:text-5xl font-bold text-on-surface tracking-tight mb-2">Welcome back, Julian</h1>
<p class="text-on-surface-variant font-medium">Your next concierge experience starts in 3 days.</p>
</header>
<!-- Stats Bento Grid -->
<section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
<div class="bg-surface-container-lowest p-8 rounded-lg editorial-shadow flex flex-col justify-between h-48 border-l-4 border-primary">
<div class="flex justify-between items-start">
<span class="material-symbols-outlined text-primary text-3xl">event_available</span>
<span class="text-[0.65rem] font-bold uppercase tracking-widest text-on-surface-variant">Live Status</span>
</div>
<div>
<p class="text-4xl font-bold text-on-surface">04</p>
<p class="text-sm font-medium text-on-surface-variant">Upcoming Bookings</p>
</div>
</div>
<div class="bg-surface-container-lowest p-8 rounded-lg editorial-shadow flex flex-col justify-between h-48">
<div class="flex justify-between items-start">
<span class="material-symbols-outlined text-secondary text-3xl">verified</span>
<span class="text-[0.65rem] font-bold uppercase tracking-widest text-on-surface-variant">Archived</span>
</div>
<div>
<p class="text-4xl font-bold text-on-surface">12</p>
<p class="text-sm font-medium text-on-surface-variant">Completed Experiences</p>
</div>
</div>
<div class="bg-primary text-on-primary p-8 rounded-lg editorial-shadow flex flex-col justify-between h-48 overflow-hidden relative">
<div class="absolute -right-4 -bottom-4 opacity-10">
<span class="material-symbols-outlined text-[120px]">payments</span>
</div>
<div class="flex justify-between items-start">
<span class="material-symbols-outlined text-3xl">wallet</span>
<span class="text-[0.65rem] font-bold uppercase tracking-widest opacity-80">Lifetime Value</span>
</div>
<div>
<p class="text-4xl font-bold">$12,450</p>
<p class="text-sm font-medium opacity-80">Total Spent</p>
</div>
</div>
</section>
<!-- Reservations Table Section -->
<section class="bg-surface-container-low rounded-xl p-1 overflow-hidden">
<div class="bg-surface-container-lowest rounded-lg p-8">
<div class="flex justify-between items-end mb-8">
<div>
<h2 class="text-2xl font-bold tracking-tight text-on-surface">My Reservations</h2>
<p class="text-sm text-on-surface-variant mt-1">Manage your upcoming curated experiences.</p>
</div>
<div class="flex space-x-2">
<button class="p-2 rounded-full hover:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined">filter_list</span>
</button>
<button class="p-2 rounded-full hover:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined">search</span>
</button>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-separate border-spacing-y-4">
<thead>
<tr class="text-[0.7rem] uppercase tracking-widest font-bold text-on-surface-variant">
<th class="px-4 pb-2">Experience &amp; Location</th>
<th class="px-4 pb-2">Date &amp; Time</th>
<th class="px-4 pb-2">Status</th>
<th class="px-4 pb-2 text-right">Actions</th>
</tr>
</thead>
<tbody>
<!-- Reservation Row 1 -->
<tr class="group hover:bg-primary-fixed/20 transition-colors">
<td class="px-4 py-6 rounded-l-lg bg-surface-container-low/50 group-hover:bg-transparent">
<div class="flex items-center space-x-4">
<div class="w-12 h-12 rounded-lg bg-surface-variant overflow-hidden flex-shrink-0">
<img class="w-full h-full object-cover" data-alt="moody interior of a luxury cocktail bar with soft amber lighting and velvet seating" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDksjXQaI1A-nMw6fDM8qXrX7ItlfMit11K6wq85p3smUMJC7dM234Mh-_IZt2zYI8qafjOGrH29WIRSN4KfpJ62qF5_Evtq7wTGsev7XCYQxc9iXcvFZ3vEav-E5dnOUUOatYB3cyOK5o39DSLAMotJ5oYPOUX1BFQO0g5-LtjRB05SmJ0ipzsEFvKISnFWjkrjM0iUW7i4fdrXLQDo7GwqpDaKew3hKKQ1ez9jbzpglrjtIMl6RF5_E0FLx8NJbUApHQOxLYYQruQ"/>
</div>
<div>
<p class="font-bold text-on-surface">Private Mixology Session</p>
<p class="text-xs text-on-surface-variant">The Alchemist’s Attic, London</p>
</div>
</div>
</td>
<td class="px-4 py-6 bg-surface-container-low/50 group-hover:bg-transparent">
<p class="font-semibold text-on-surface">Nov 24, 2024</p>
<p class="text-xs text-on-surface-variant">08:30 PM</p>
</td>
<td class="px-4 py-6 bg-surface-container-low/50 group-hover:bg-transparent">
<span class="inline-flex items-center px-3 py-1 rounded-full text-[10px] font-black uppercase bg-secondary-fixed text-on-secondary-container">
                                            Confirmed
                                        </span>
</td>
<td class="px-4 py-6 rounded-r-lg bg-surface-container-low/50 group-hover:bg-transparent text-right">
<div class="flex justify-end space-x-3">
<button class="text-primary font-bold text-xs hover:underline underline-offset-4">View Details</button>
<button class="text-on-surface-variant font-bold text-xs hover:text-on-surface">Edit</button>
<button class="text-error font-bold text-xs hover:opacity-70">Cancel</button>
</div>
</td>
</tr>
<!-- Reservation Row 2 -->
<tr class="group hover:bg-primary-fixed/20 transition-colors">
<td class="px-4 py-6 rounded-l-lg bg-surface-container-low/50 group-hover:bg-transparent">
<div class="flex items-center space-x-4">
<div class="w-12 h-12 rounded-lg bg-surface-variant overflow-hidden flex-shrink-0">
<img class="w-full h-full object-cover" data-alt="vibrant gourmet breakfast spread with fresh coffee and pastries on a minimalist wooden table" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB12xbIw3eRQFCGW6g5ikBh7xFrzJq-1yyOysR1kwbB4h1mtzC8NpPxMDnm85Yj2M1-eMHU5K59eKKOvacGyYFBnv-lK3BTMrcg_v9pxEohlvOixEvTgnUHpo80MJWatqK5q11vYUwj1_yJHk3z2VEvfgz0GEnWp2hq0fda7ud7avSuKeHV-niUx-uY_pJVSupNZ2cYYedO28opIt0H3hVFuzkmD5VTtv5fllNfsw0QHJQvHhk_oipouYH016_Fr-Rpj1DofV7M_5ZK"/>
</div>
<div>
<p class="font-bold text-on-surface">Sunrise Rooftop Yoga</p>
<p class="text-xs text-on-surface-variant">The Glass Pavilion, NYC</p>
</div>
</div>
</td>
<td class="px-4 py-6 bg-surface-container-low/50 group-hover:bg-transparent">
<p class="font-semibold text-on-surface">Dec 02, 2024</p>
<p class="text-xs text-on-surface-variant">06:00 AM</p>
</td>
<td class="px-4 py-6 bg-surface-container-low/50 group-hover:bg-transparent">
<span class="inline-flex items-center px-3 py-1 rounded-full text-[10px] font-black uppercase bg-surface-container-highest text-on-surface-variant">
                                            Pending
                                        </span>
</td>
<td class="px-4 py-6 rounded-r-lg bg-surface-container-low/50 group-hover:bg-transparent text-right">
<div class="flex justify-end space-x-3">
<button class="text-primary font-bold text-xs hover:underline underline-offset-4">View Details</button>
<button class="text-on-surface-variant font-bold text-xs hover:text-on-surface">Edit</button>
<button class="text-error font-bold text-xs hover:opacity-70">Cancel</button>
</div>
</td>
</tr>
<!-- Reservation Row 3 -->
<tr class="group hover:bg-primary-fixed/20 transition-colors">
<td class="px-4 py-6 rounded-l-lg bg-surface-container-low/50 group-hover:bg-transparent">
<div class="flex items-center space-x-4">
<div class="w-12 h-12 rounded-lg bg-surface-variant overflow-hidden flex-shrink-0">
<img class="w-full h-full object-cover" data-alt="fine dining table setup with white tablecloth crystal glasses and dim romantic lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6FBy7erB8DtKxtHSS9AWSpOjnWMB1nBvu8E1o914cWCb8-60M7jJvtO5QcykFovCjcSV2AeIz-M7FOATTTuXYTnwgYbyVXWaqFQPKSRkiwkRzjie4fb8XA69tLiOWs7WYGTYdtacHDt4_hxsMnQdrMlWsPoMEP4787dV1wnJgJZzzVCuWquX-C2aqPbkJbYT3Qp2bd_5RweXHRJMhEekCfvxp-Sr1KlUoc4N2Ntm1qp4yEJZUyQ0sLGz8odLjHaKGkii9vYQ3QjSX"/>
</div>
<div>
<p class="font-bold text-on-surface">Michelin Star Tasting</p>
<p class="text-xs text-on-surface-variant">Elysian Fields, Paris</p>
</div>
</div>
</td>
<td class="px-4 py-6 bg-surface-container-low/50 group-hover:bg-transparent">
<p class="font-semibold text-on-surface">Dec 15, 2024</p>
<p class="text-xs text-on-surface-variant">09:00 PM</p>
</td>
<td class="px-4 py-6 bg-surface-container-low/50 group-hover:bg-transparent">
<span class="inline-flex items-center px-3 py-1 rounded-full text-[10px] font-black uppercase bg-secondary-fixed text-on-secondary-container">
                                            Confirmed
                                        </span>
</td>
<td class="px-4 py-6 rounded-r-lg bg-surface-container-low/50 group-hover:bg-transparent text-right">
<div class="flex justify-end space-x-3">
<button class="text-primary font-bold text-xs hover:underline underline-offset-4">View Details</button>
<button class="text-on-surface-variant font-bold text-xs hover:text-on-surface">Edit</button>
<button class="text-error font-bold text-xs hover:opacity-70">Cancel</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</section>
<!-- Featured "Explore More" Asymmetric Section -->
<section class="mt-20">
<div class="flex flex-col md:flex-row items-center gap-12">
<div class="w-full md:w-1/2 relative">
<div class="aspect-[4/5] rounded-xl overflow-hidden editorial-shadow transform rotate-1">
<img class="w-full h-full object-cover" data-alt="luxury boutique hotel lobby with sculptural art pieces and warm designer lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBgXC48OQuBnpEv5oPrF_cNq875QmdAQhJ9jv6LEd62aOrGd3C4fu_icbnyBz1hLdZ1HrXy_CkFcGPo5vQggxaC8bCVsLr0o29SckrylWrlRg_WChijOj48TB8vaoJ4-6CzLy_qPRog137HsNvbLWO3RzlWngns3pupbtevKwQjtx0Vg5c7lxeEwujWmDZs0jGc83gYmLttPujG7oVM-noXa9XSGRqQBGmj51BmTke0s0ZNKupVK5YnEI2ubQ601-e93ByPpx7dRemQ"/>
</div>
<div class="absolute -bottom-8 -right-8 w-48 h-48 rounded-xl overflow-hidden editorial-shadow border-8 border-surface transform -rotate-3 hidden lg:block">
<img class="w-full h-full object-cover" data-alt="crystal clear infinity pool at a luxury resort overlooking a tropical ocean sunset" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBayal9NRcOGsspTOHrMehslmouXGk5caRh9GrWGQyBz5JAPtZXlPgzmoqEEzkpLE1ytL_vco2tkbGPLJIWjsDNAb7f_gqcWJ610k_Zo6twX0vOFNm2FzalSBOMAvm6ps6vqyoKEM3-3EY9RlBDsDUQx2w7oCT2M_deohwM3jiAGuMW7okLJic5iMx93o5fl20VUnyLx4f26_OKE4FgnEteCeKmakS0xLFZF5ylPRLWwoPsjRkcxwCrQbue8l28cLSCpxXo1BfMHk91"/>
</div>
</div>
<div class="w-full md:w-1/2 space-y-6 md:pl-12">
<span class="text-secondary font-black uppercase tracking-[0.3em] text-[10px]">Curated For You</span>
<h3 class="text-4xl font-bold tracking-tighter text-on-surface leading-tight">Unlock Private Destinations</h3>
<p class="text-on-surface-variant text-lg leading-relaxed">
                            Your membership status grants you access to off-market stays and culinary pop-ups that never reach the public eye.
                        </p>
<div class="pt-4">
<button class="px-8 py-4 rounded-full bg-gradient-to-r from-primary to-primary-container text-white font-bold tracking-tight shadow-lg hover:shadow-primary/20 transition-all active:scale-95">
                                Browse Collection
                            </button>
</div>
</div>
</div>
</section>
</main>
</div>
<!-- Footer -->
<footer class="w-full py-12 px-8 bg-slate-50 dark:bg-slate-950 border-t border-slate-100 dark:border-slate-800">
<div class="flex flex-col md:flex-row justify-between items-center max-w-7xl mx-auto space-y-6 md:space-y-0">
<div class="text-lg font-black text-slate-900 dark:text-white">Ninym</div>
<div class="flex flex-wrap justify-center gap-8 font-['Inter'] text-xs font-medium uppercase tracking-widest text-slate-400">
<a class="hover:text-cyan-600 transition-colors duration-200 underline-offset-4 hover:underline" href="#">Privacy Policy</a>
<a class="hover:text-cyan-600 transition-colors duration-200 underline-offset-4 hover:underline" href="#">Terms of Service</a>
<a class="hover:text-cyan-600 transition-colors duration-200 underline-offset-4 hover:underline" href="#">Help Center</a>
<a class="hover:text-cyan-600 transition-colors duration-200 underline-offset-4 hover:underline" href="#">Contact Us</a>
</div>
<div class="font-['Inter'] text-xs font-medium uppercase tracking-widest text-slate-400">
                © 2024 Ninym Concierge. All rights reserved.
            </div>
</div>
</footer>
<script type="module" src="js/auth.js"></script>
</body></html>