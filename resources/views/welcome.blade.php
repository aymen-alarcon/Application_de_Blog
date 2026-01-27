<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Public Blog Home Page</title>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Google Fonts: Inter -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              colors: {
                "primary": "#137fec",
                "background-light": "#f6f7f8",
                "background-dark": "#101922",
              },
              fontFamily: {
                "display": ["Inter", "sans-serif"]
              },
              borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
            },
          },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-[#0d141b] dark:text-slate-100 min-h-screen">
<!-- TopNavBar -->
<header class="sticky top-0 z-50 bg-white dark:bg-background-dark border-b border-[#e7edf3] dark:border-slate-800">
<div class="max-w-[1200px] mx-auto px-4 lg:px-10 h-16 flex items-center justify-between">
<div class="flex items-center gap-8">
<div class="flex items-center gap-3">
<div class="text-primary">
<svg class="size-8" fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M44 11.2727C44 14.0109 39.8386 16.3957 33.69 17.6364C39.8386 18.877 44 21.2618 44 24C44 26.7382 39.8386 29.123 33.69 30.3636C39.8386 31.6043 44 33.9891 44 36.7273C44 40.7439 35.0457 44 24 44C12.9543 44 4 40.7439 4 36.7273C4 33.9891 8.16144 31.6043 14.31 30.3636C8.16144 29.123 4 26.7382 4 24C4 21.2618 8.16144 18.877 14.31 17.6364C8.16144 16.3957 4 14.0109 4 11.2727C4 7.25611 12.9543 4 24 4C35.0457 4 44 7.25611 44 11.2727Z"></path>
</svg>
</div>
<h2 class="text-xl font-bold tracking-tight">Laravel Blog</h2>
</div>
<nav class="hidden md:flex items-center gap-6">
<a class="text-primary text-sm font-semibold" href="#">Home</a>
<div class="relative group">
<button class="flex items-center gap-1 text-sm font-medium hover:text-primary transition-colors">
                            Categories
                            <span class="material-symbols-outlined text-sm">expand_more</span>
</button>
</div>
</nav>
</div>
<div class="flex items-center gap-4">
<label class="hidden sm:flex items-center bg-[#e7edf3] dark:bg-slate-800 rounded-lg px-3 py-1.5 w-64">
<span class="material-symbols-outlined text-[#4c739a] text-xl">search</span>
<input class="bg-transparent border-none focus:ring-0 text-sm w-full placeholder:text-[#4c739a]" placeholder="Search articles..." type="text"/>
</label>
<div class="flex items-center gap-2">
<button class="px-4 py-2 text-sm font-bold text-white bg-primary rounded-lg hover:bg-primary/90 transition-all">Login</button>
<button class="px-4 py-2 text-sm font-bold bg-[#e7edf3] dark:bg-slate-800 rounded-lg hover:bg-[#d7e1ea] dark:hover:bg-slate-700 transition-all">Sign Up</button>
</div>
</div>
</div>
</header>
<main class="max-w-[1200px] mx-auto py-8 px-4 lg:px-10">
<!-- Flash Message Area (ActionPanel) -->
<div class="mb-8">
<div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 rounded-xl border border-primary/20 bg-primary/5 dark:bg-primary/10 p-5">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-2xl">check_circle</span>
<div>
<p class="text-primary text-base font-bold leading-tight">Welcome back!</p>
<p class="text-[#4c739a] dark:text-slate-400 text-sm font-normal">You are browsing the latest updates from our engineering team.</p>
</div>
</div>
<button class="flex min-w-[84px] cursor-pointer items-center justify-center rounded-lg h-9 px-4 bg-primary text-white text-sm font-medium hover:bg-primary/90">
                    Dismiss
                </button>
</div>
</div>
<!-- Headline -->
<div class="flex items-center justify-between mb-6">
<h1 class="text-[#0d141b] dark:text-slate-50 text-3xl font-bold tracking-tight">Latest Articles</h1>
<div class="flex gap-2">
<button class="p-2 rounded-lg bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 flex items-center justify-center">
<span class="material-symbols-outlined">filter_list</span>
</button>
</div>
</div>
<!-- Blog Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
<!-- Post Card 1 -->
<article class="bg-white dark:bg-slate-800 rounded-xl overflow-hidden border border-[#e7edf3] dark:border-slate-800 hover:shadow-lg transition-shadow duration-300">
<div class="w-full aspect-video bg-cover bg-center" data-alt="Laptop with code on screen showing laravel framework" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDi_qiRYJmIrVVOSM2eZZUBcN4IZaG716DPObNTBdQLcPLxQSMiOwX-Pjg7npjCEUPER2ZmFfdFB1c_WjdDNm5gcRIsKWAeykhgvblFZXRxAnEBa015-PUEQ9Pxuo3XpMjQS-_xh5lbvF58mHyQnYPci6cSbvOYNyqoto7TdW1VTg5DJwMICeu9mB05VBzMFatGujAeZajixzRo04fdu2DI7fVR25EKX6OrJHss1yQF-X-Uuko99BgQpwvioW6uPIF5Bf5TZ5h9Nh0");'></div>
<div class="p-5 flex flex-col gap-3">
<div class="flex items-center gap-2">
<span class="px-2 py-0.5 bg-primary/10 text-primary text-[10px] font-bold uppercase tracking-wider rounded">Web Development</span>
</div>
<h3 class="text-lg font-bold leading-snug hover:text-primary transition-colors cursor-pointer">The Future of Laravel 11</h3>
<p class="text-[#4c739a] dark:text-slate-400 text-sm line-clamp-2">Discover what's new in the upcoming major release of Laravel, from minimalist skeletons to improved performance.</p>
<div class="flex flex-wrap gap-1.5 mt-2">
<span class="text-[11px] text-[#4c739a] dark:text-slate-500 bg-slate-100 dark:bg-slate-900 px-2 py-0.5 rounded">#laravel</span>
<span class="text-[11px] text-[#4c739a] dark:text-slate-500 bg-slate-100 dark:bg-slate-900 px-2 py-0.5 rounded">#php</span>
</div>
<button class="mt-4 flex items-center justify-center gap-2 bg-primary text-white py-2 px-4 rounded-lg font-bold text-sm hover:bg-primary/90 transition-colors">
                        Read More
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
</button>
</div>
</article>
<!-- Post Card 2 -->
<article class="bg-white dark:bg-slate-800 rounded-xl overflow-hidden border border-[#e7edf3] dark:border-slate-800 hover:shadow-lg transition-shadow duration-300">
<div class="w-full aspect-video bg-cover bg-center" data-alt="Abstract colorful lines representing speed optimization" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCZ2N-dN9w22aEMObJC5a7ilPtzu7JBNsL1gsFLuf414j427hNxGyNL4uHzxn5Mv0f10jHMlfLk9zWrmKodFCKlym8yAca8a5VEFK-T2FO0O8yitg_RWOlMW8QygXDjDKPiXKqwuXOGg0rjdZ4gdCrlRXNN-e6qCZq4YeavgaSmdChDa6aKdoRkgS3Hp6FinPDnC0QFdsSKE3Pjwu2X-ynJoI7768P8QRNCdJi67ix9B2fhJA5p02wb6ktdbSxSWkFBOk6r-NpVcWY");'></div>
<div class="p-5 flex flex-col gap-3">
<div class="flex items-center gap-2">
<span class="px-2 py-0.5 bg-green-500/10 text-green-600 text-[10px] font-bold uppercase tracking-wider rounded">Performance</span>
</div>
<h3 class="text-lg font-bold leading-snug hover:text-primary transition-colors cursor-pointer">Optimizing Bootstrap 5</h3>
<p class="text-[#4c739a] dark:text-slate-400 text-sm line-clamp-2">Learn how to prune your CSS and JS bundles for lightning performance and better Core Web Vitals.</p>
<div class="flex flex-wrap gap-1.5 mt-2">
<span class="text-[11px] text-[#4c739a] dark:text-slate-500 bg-slate-100 dark:bg-slate-900 px-2 py-0.5 rounded">#bootstrap</span>
<span class="text-[11px] text-[#4c739a] dark:text-slate-500 bg-slate-100 dark:bg-slate-900 px-2 py-0.5 rounded">#css</span>
</div>
<button class="mt-4 flex items-center justify-center gap-2 bg-primary text-white py-2 px-4 rounded-lg font-bold text-sm hover:bg-primary/90 transition-colors">
                        Read More
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
</button>
</div>
</article>
<!-- Post Card 3 -->
<article class="bg-white dark:bg-slate-800 rounded-xl overflow-hidden border border-[#e7edf3] dark:border-slate-800 hover:shadow-lg transition-shadow duration-300">
<div class="w-full aspect-video bg-cover bg-center" data-alt="Database diagram with connected nodes" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCRKPt0nO1_Z-K4q9Pv_veZrWqzVUFT3z8f-3PVgeq1xwsRCTe1l25kWJORnUNyQ1lIVXz2uKuimMyowtP0h3RD_Od0tpz9AjYkSpuVU-MgkDQdjNDUBcZdNv0RuLmStFnWkY4wisubHAjCaiSYoakEXQsRm6WVTSEQwTFssU_NHB80DSQ_g-iDw196ymIpe8NDT0QM6WrBI672HMVfPpVZHeD-3nHhuJRLYwsVKa2ZyH7oWCEan41e1Bx_j1UVOwFqGyVpeUh8X7s");'></div>
<div class="p-5 flex flex-col gap-3">
<div class="flex items-center gap-2">
<span class="px-2 py-0.5 bg-orange-500/10 text-orange-600 text-[10px] font-bold uppercase tracking-wider rounded">Backend</span>
</div>
<h3 class="text-lg font-bold leading-snug hover:text-primary transition-colors cursor-pointer">Mastering Eloquent</h3>
<p class="text-[#4c739a] dark:text-slate-400 text-sm line-clamp-2">A deep dive into complex database relationships, eager loading, and query optimizations in Laravel.</p>
<div class="flex flex-wrap gap-1.5 mt-2">
<span class="text-[11px] text-[#4c739a] dark:text-slate-500 bg-slate-100 dark:bg-slate-900 px-2 py-0.5 rounded">#database</span>
<span class="text-[11px] text-[#4c739a] dark:text-slate-500 bg-slate-100 dark:bg-slate-900 px-2 py-0.5 rounded">#eloquent</span>
</div>
<button class="mt-4 flex items-center justify-center gap-2 bg-primary text-white py-2 px-4 rounded-lg font-bold text-sm hover:bg-primary/90 transition-colors">
                        Read More
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
</button>
</div>
</article>
<!-- Post Card 4 -->
<article class="bg-white dark:bg-slate-800 rounded-xl overflow-hidden border border-[#e7edf3] dark:border-slate-800 hover:shadow-lg transition-shadow duration-300">
<div class="w-full aspect-video bg-cover bg-center" data-alt="Geometric building architecture minimal style" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC8myiipCBIaUiTiMB2LFemeUX9dQ99L8-RZr3zU7UxPdQAI65tzqjoWS3N0MBfod7llZZT--4XlopOhtLq4U90Nu3dE8CbccMwTUlrL4TE-zeeCG7ukPZYW9nqIW1rx2lpipEn0kn4NKOypc3SIdwaaveAqte7L1qR2uDf1n1mHn7Cc8GpWggyZh4WLnl1QYtvirk_gc7e3GofLenoMsclyFp6B2191CR4XO5D4At_tD-uzkHuo8I44Be-27U6NAVcLdkxCblAz68");'></div>
<div class="p-5 flex flex-col gap-3">
<div class="flex items-center gap-2">
<span class="px-2 py-0.5 bg-indigo-500/10 text-indigo-600 text-[10px] font-bold uppercase tracking-wider rounded">Architecture</span>
</div>
<h3 class="text-lg font-bold leading-snug hover:text-primary transition-colors cursor-pointer">Clean PHP Design Patterns</h3>
<p class="text-[#4c739a] dark:text-slate-400 text-sm line-clamp-2">How to structure your Laravel applications for long-term maintainability and easier testing.</p>
<div class="flex flex-wrap gap-1.5 mt-2">
<span class="text-[11px] text-[#4c739a] dark:text-slate-500 bg-slate-100 dark:bg-slate-900 px-2 py-0.5 rounded">#architecture</span>
<span class="text-[11px] text-[#4c739a] dark:text-slate-500 bg-slate-100 dark:bg-slate-900 px-2 py-0.5 rounded">#design-patterns</span>
</div>
<button class="mt-4 flex items-center justify-center gap-2 bg-primary text-white py-2 px-4 rounded-lg font-bold text-sm hover:bg-primary/90 transition-colors">
                        Read More
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
</button>
</div>
</article>
<!-- Post Card 5 -->
<article class="bg-white dark:bg-slate-800 rounded-xl overflow-hidden border border-[#e7edf3] dark:border-slate-800 hover:shadow-lg transition-shadow duration-300">
<div class="w-full aspect-video bg-cover bg-center" data-alt="Brushing paint with tailwind colors" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD8sGwAfqQcucxfTvUBgCqswL5-1-GM9MOytMMWn6W_GsEt73yrBNqqOxxZOoyAP0SSHa-_6JVxrgxARExeg4V8Mlk6hQogsb4mc15GLGlV7rOn2xSguBFhZRBMc2FXwOb9RXFAXqJv2Zqw0pkFq0YKkgIHSXxi189PjOgs_aU4TCigPXTJK3N7oz4XMIK12gNJS6FRNMIGMiwq1Acih6FarhVgkIcc0OR4rUkitqJsnr1gjQ9YyRI-xNNCyXglmpS1xSbCJ4rjbJ0");'></div>
<div class="p-5 flex flex-col gap-3">
<div class="flex items-center gap-2">
<span class="px-2 py-0.5 bg-cyan-500/10 text-cyan-600 text-[10px] font-bold uppercase tracking-wider rounded">Frontend</span>
</div>
<h3 class="text-lg font-bold leading-snug hover:text-primary transition-colors cursor-pointer">Top 10 Tailwind CSS Tips</h3>
<p class="text-[#4c739a] dark:text-slate-400 text-sm line-clamp-2">Speed up your styling workflow with these essential Tailwind utility patterns and configuration tricks.</p>
<div class="flex flex-wrap gap-1.5 mt-2">
<span class="text-[11px] text-[#4c739a] dark:text-slate-500 bg-slate-100 dark:bg-slate-900 px-2 py-0.5 rounded">#tailwind</span>
<span class="text-[11px] text-[#4c739a] dark:text-slate-500 bg-slate-100 dark:bg-slate-900 px-2 py-0.5 rounded">#ui-design</span>
</div>
<button class="mt-4 flex items-center justify-center gap-2 bg-primary text-white py-2 px-4 rounded-lg font-bold text-sm hover:bg-primary/90 transition-colors">
                        Read More
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
</button>
</div>
</article>
<!-- Post Card 6 -->
<article class="bg-white dark:bg-slate-800 rounded-xl overflow-hidden border border-[#e7edf3] dark:border-slate-800 hover:shadow-lg transition-shadow duration-300">
<div class="w-full aspect-video bg-cover bg-center" data-alt="Cloud server icons in a blue sky" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAN5PhiCnTMZJBBsRrHlKM86yCzvHFNVReM3lXR4QNXF3uEp7KLPLZ014y_oX3WswDPuBsDXtBjbTCKVMYMP1jAtmfkXHqwKfTEYkqLuSPSEO4AiGFZYcf_Qp2CRwnUE0ESeLtskYm55C0pK75nnFElmOsemoI468Mi6UfJmLhhKUQC7mFs52EePytUHi1kBR9brLoP21ED2BhbHfldeCovvM9clp3nxXazSpACMxmwPQ5c2jn6Y-EZyL6GGeS-rWkFLsa8F6vhyMA");'></div>
<div class="p-5 flex flex-col gap-3">
<div class="flex items-center gap-2">
<span class="px-2 py-0.5 bg-pink-500/10 text-pink-600 text-[10px] font-bold uppercase tracking-wider rounded">DevOps</span>
</div>
<h3 class="text-lg font-bold leading-snug hover:text-primary transition-colors cursor-pointer">Deploying to AWS with Ease</h3>
<p class="text-[#4c739a] dark:text-slate-400 text-sm line-clamp-2">A step-by-step guide to hosting your Laravel applications on the cloud using modern deployment tools.</p>
<div class="flex flex-wrap gap-1.5 mt-2">
<span class="text-[11px] text-[#4c739a] dark:text-slate-500 bg-slate-100 dark:bg-slate-900 px-2 py-0.5 rounded">#aws</span>
<span class="text-[11px] text-[#4c739a] dark:text-slate-500 bg-slate-100 dark:bg-slate-900 px-2 py-0.5 rounded">#deployment</span>
</div>
<button class="mt-4 flex items-center justify-center gap-2 bg-primary text-white py-2 px-4 rounded-lg font-bold text-sm hover:bg-primary/90 transition-colors">
                        Read More
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
</button>
</div>
</article>
</div>
<!-- Pagination -->
<div class="flex items-center justify-center py-8">
<nav class="flex items-center gap-1">
<a class="flex size-10 items-center justify-center rounded-lg hover:bg-[#e7edf3] dark:hover:bg-slate-800 text-[#0d141b] dark:text-slate-100 transition-colors" href="#">
<span class="material-symbols-outlined">chevron_left</span>
</a>
<a class="flex size-10 items-center justify-center rounded-lg bg-primary text-white text-sm font-bold" href="#">1</a>
<a class="flex size-10 items-center justify-center rounded-lg hover:bg-[#e7edf3] dark:hover:bg-slate-800 text-[#0d141b] dark:text-slate-100 text-sm font-medium transition-colors" href="#">2</a>
<a class="flex size-10 items-center justify-center rounded-lg hover:bg-[#e7edf3] dark:hover:bg-slate-800 text-[#0d141b] dark:text-slate-100 text-sm font-medium transition-colors" href="#">3</a>
<span class="px-2 text-slate-400">...</span>
<a class="flex size-10 items-center justify-center rounded-lg hover:bg-[#e7edf3] dark:hover:bg-slate-800 text-[#0d141b] dark:text-slate-100 text-sm font-medium transition-colors" href="#">12</a>
<a class="flex size-10 items-center justify-center rounded-lg hover:bg-[#e7edf3] dark:hover:bg-slate-800 text-[#0d141b] dark:text-slate-100 transition-colors" href="#">
<span class="material-symbols-outlined">chevron_right</span>
</a>
</nav>
</div>
</main>
<!-- Footer -->
<footer class="bg-white dark:bg-background-dark border-t border-[#e7edf3] dark:border-slate-800 py-10 mt-12">
<div class="max-w-[1200px] mx-auto px-4 lg:px-10">
<div class="flex flex-col md:flex-row justify-between items-center gap-6">
<div class="flex items-center gap-3">
<div class="text-primary/60">
<svg class="size-6" fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M44 11.2727C44 14.0109 39.8386 16.3957 33.69 17.6364C39.8386 18.877 44 21.2618 44 24C44 26.7382 39.8386 29.123 33.69 30.3636C39.8386 31.6043 44 33.9891 44 36.7273C44 40.7439 35.0457 44 24 44C12.9543 44 4 40.7439 4 36.7273C4 33.9891 8.16144 31.6043 14.31 30.3636C8.16144 29.123 4 26.7382 4 24C4 21.2618 8.16144 18.877 14.31 17.6364C8.16144 16.3957 4 14.0109 4 11.2727C4 7.25611 12.9543 4 24 4C35.0457 4 44 7.25611 44 11.2727Z"></path>
</svg>
</div>
<p class="text-sm text-[#4c739a] dark:text-slate-400">© 2024 Laravel Blog. All rights reserved.</p>
</div>
<div class="flex gap-6">
<a class="text-sm text-[#4c739a] dark:text-slate-400 hover:text-primary" href="#">Privacy Policy</a>
<a class="text-sm text-[#4c739a] dark:text-slate-400 hover:text-primary" href="#">Terms of Service</a>
<a class="text-sm text-[#4c739a] dark:text-slate-400 hover:text-primary" href="#">Contact</a>
</div>
<div class="flex gap-4">
<a class="p-2 rounded-full bg-[#e7edf3] dark:bg-slate-800 text-[#4c739a] dark:text-slate-400 hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined text-lg">public</span>
</a>
<a class="p-2 rounded-full bg-[#e7edf3] dark:bg-slate-800 text-[#4c739a] dark:text-slate-400 hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined text-lg">rss_feed</span>
</a>
</div>
</div>
</div>
</footer>
</body></html>