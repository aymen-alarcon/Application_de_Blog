<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Admin Category Management</title>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Google Fonts: Inter -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
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
                        "display": ["Inter"]
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
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark min-h-screen text-slate-900 dark:text-slate-100 font-display">
<!-- Header / TopNavBar -->
<header class="sticky top-0 z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 px-6 py-3 lg:px-10">
<div class="flex items-center gap-4 text-primary">
<div class="size-8 flex items-center justify-center bg-primary rounded-lg text-white">
<span class="material-symbols-outlined">dashboard_customize</span>
</div>
<h2 class="text-slate-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">BlogAdmin</h2>
</div>
<div class="flex flex-1 justify-end gap-4 lg:gap-8 items-center">
<label class="hidden md:flex flex-col min-w-40 !h-10 max-w-64">
<div class="flex w-full flex-1 items-stretch rounded-lg h-full">
<div class="text-slate-500 flex border-none bg-slate-100 dark:bg-slate-800 items-center justify-center pl-4 rounded-l-lg border-r-0">
<span class="material-symbols-outlined text-xl">search</span>
</div>
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-slate-900 dark:text-white focus:outline-0 focus:ring-0 border-none bg-slate-100 dark:bg-slate-800 focus:border-none h-full placeholder:text-slate-500 px-4 rounded-l-none border-l-0 pl-2 text-sm font-normal" placeholder="Global Search" value=""/>
</div>
</label>
<div class="flex gap-2">
<button class="flex items-center justify-center rounded-lg h-10 w-10 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300">
<span class="material-symbols-outlined">notifications</span>
</button>
<button class="flex items-center justify-center rounded-lg h-10 w-10 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300">
<span class="material-symbols-outlined">account_circle</span>
</button>
</div>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border border-slate-200 dark:border-slate-700" data-alt="Admin user profile picture" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBF30evtEAqe2jJ8DfljFMBzxZSck80RcLattZLfMiVYxcg-qlWA6ugiIZGNurLMkqg360Shk5tVWQgqq8QFUNu4njHG1lPpLsl86Mz_w-ysjATt63xxcCHQmwh_R7S2YXDza2_qNR6ZHyLtcRCn1wxdOhtDkoP6l5ejEA4yc8e21a7Es6rW6Y5vJW1_eYTEUGj831eV0Njh3sq07sJyd983pC410W_TkXMPZ51RMCsOOnS_ePTHjSYaEDj7eh_VJhLbDqT59AHwTA");'></div>
</div>
</header>
<div class="flex">
<!-- Sidebar / SideNavBar -->
<aside class="hidden lg:flex w-64 flex-col border-r border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 min-h-[calc(100vh-65px)] p-4">
<div class="flex flex-col gap-6">
<div class="px-3">
<h1 class="text-slate-900 dark:text-white text-base font-bold leading-normal">Blog Manager</h1>
<p class="text-slate-500 text-xs font-medium uppercase tracking-wider">Admin Portal</p>
</div>
<nav class="flex flex-col gap-1">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined text-[24px]">dashboard</span>
<p class="text-sm font-medium">Dashboard</p>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined text-[24px]">article</span>
<p class="text-sm font-medium">Posts</p>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary text-white shadow-md shadow-primary/20" href="#">
<span class="material-symbols-outlined text-[24px]">folder_open</span>
<p class="text-sm font-medium">Categories</p>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined text-[24px]">group</span>
<p class="text-sm font-medium">Users</p>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors" href="#">
<span class="material-symbols-outlined text-[24px]">settings</span>
<p class="text-sm font-medium">Settings</p>
</a>
</nav>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 overflow-x-hidden p-6 lg:p-10">
<div class="max-w-6xl mx-auto">
<!-- Breadcrumbs -->
<nav class="flex items-center gap-2 mb-2">
<a class="text-slate-500 dark:text-slate-400 text-sm font-medium hover:text-primary" href="#">Dashboard</a>
<span class="text-slate-400 text-sm font-medium">/</span>
<span class="text-slate-900 dark:text-white text-sm font-medium">Categories</span>
</nav>
<!-- PageHeading -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
<div>
<h1 class="text-slate-900 dark:text-white text-3xl font-black leading-tight tracking-[-0.033em]">Category Management</h1>
<p class="text-slate-500 dark:text-slate-400 text-sm mt-1">Organize and manage your blog topics and labels.</p>
</div>
<button class="flex items-center justify-center gap-2 px-6 py-2.5 bg-primary text-white text-sm font-bold rounded-lg hover:bg-primary/90 transition-all shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-lg">add_circle</span>
<span>Add Category</span>
</button>
</div>
<!-- Table Container -->
<div class="bg-white dark:bg-slate-900 rounded-xl shadow-sm border border-slate-200 dark:border-slate-800 overflow-hidden">
<!-- SearchBar & Filters -->
<div class="p-4 border-b border-slate-200 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-900/50 flex flex-col md:flex-row gap-4 items-center justify-between">
<label class="flex flex-col min-w-[280px] h-10 w-full md:w-1/3">
<div class="flex w-full flex-1 items-stretch rounded-lg h-full border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800">
<div class="text-slate-500 flex items-center justify-center pl-3">
<span class="material-symbols-outlined text-lg">search</span>
</div>
<input class="form-input flex w-full min-w-0 flex-1 border-none bg-transparent focus:ring-0 text-slate-900 dark:text-white placeholder:text-slate-400 text-sm" placeholder="Search categories..." value=""/>
</div>
</label>
<div class="flex gap-2 w-full md:w-auto">
<button class="flex-1 md:flex-none flex items-center justify-center gap-2 px-4 py-2 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg text-sm font-medium text-slate-700 dark:text-slate-200 hover:bg-slate-50">
<span class="material-symbols-outlined text-lg">filter_list</span>
<span>Filter</span>
</button>
<button class="flex-1 md:flex-none flex items-center justify-center gap-2 px-4 py-2 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg text-sm font-medium text-slate-700 dark:text-slate-200 hover:bg-slate-50">
<span class="material-symbols-outlined text-lg">download</span>
<span>Export</span>
</button>
</div>
</div>
<!-- Data Table -->
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-slate-50 dark:bg-slate-800/50">
<th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 border-b border-slate-200 dark:border-slate-800">ID</th>
<th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 border-b border-slate-200 dark:border-slate-800">Category Name</th>
<th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 border-b border-slate-200 dark:border-slate-800">Created At</th>
<th class="px-6 py-4 text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 border-b border-slate-200 dark:border-slate-800 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-200 dark:divide-slate-800">
<!-- Row 1 -->
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
<td class="px-6 py-4 text-sm font-medium text-slate-400">#001</td>
<td class="px-6 py-4 text-sm font-semibold text-slate-900 dark:text-white">Technology</td>
<td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">Oct 24, 2023</td>
<td class="px-6 py-4 text-right">
<div class="flex justify-end gap-2">
<button class="p-1.5 text-slate-500 hover:text-primary hover:bg-primary/10 rounded-lg transition-colors">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="p-1.5 text-slate-500 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
<td class="px-6 py-4 text-sm font-medium text-slate-400">#002</td>
<td class="px-6 py-4 text-sm font-semibold text-slate-900 dark:text-white">Lifestyle</td>
<td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">Oct 25, 2023</td>
<td class="px-6 py-4 text-right">
<div class="flex justify-end gap-2">
<button class="p-1.5 text-slate-500 hover:text-primary hover:bg-primary/10 rounded-lg transition-colors">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="p-1.5 text-slate-500 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
<td class="px-6 py-4 text-sm font-medium text-slate-400">#003</td>
<td class="px-6 py-4 text-sm font-semibold text-slate-900 dark:text-white">Health &amp; Fitness</td>
<td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">Nov 02, 2023</td>
<td class="px-6 py-4 text-right">
<div class="flex justify-end gap-2">
<button class="p-1.5 text-slate-500 hover:text-primary hover:bg-primary/10 rounded-lg transition-colors">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="p-1.5 text-slate-500 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
<td class="px-6 py-4 text-sm font-medium text-slate-400">#004</td>
<td class="px-6 py-4 text-sm font-semibold text-slate-900 dark:text-white">Business</td>
<td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">Nov 10, 2023</td>
<td class="px-6 py-4 text-right">
<div class="flex justify-end gap-2">
<button class="p-1.5 text-slate-500 hover:text-primary hover:bg-primary/10 rounded-lg transition-colors">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="p-1.5 text-slate-500 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 5 -->
<tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
<td class="px-6 py-4 text-sm font-medium text-slate-400">#005</td>
<td class="px-6 py-4 text-sm font-semibold text-slate-900 dark:text-white">Travel</td>
<td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">Dec 01, 2023</td>
<td class="px-6 py-4 text-right">
<div class="flex justify-end gap-2">
<button class="p-1.5 text-slate-500 hover:text-primary hover:bg-primary/10 rounded-lg transition-colors">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="p-1.5 text-slate-500 hover:text-red-600 hover:bg-red-50 rounded-lg transition-colors">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="p-4 bg-slate-50 dark:bg-slate-900/50 flex items-center justify-between border-t border-slate-200 dark:border-slate-800">
<p class="text-sm text-slate-500 dark:text-slate-400">Showing 1 to 5 of 12 categories</p>
<div class="flex gap-1">
<button class="px-3 py-1 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg text-slate-500 hover:bg-slate-50 transition-colors">
<span class="material-symbols-outlined text-lg">chevron_left</span>
</button>
<button class="px-3 py-1 bg-primary text-white border border-primary rounded-lg text-sm font-bold">1</button>
<button class="px-3 py-1 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg text-sm font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-50 transition-colors">2</button>
<button class="px-3 py-1 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg text-sm font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-50 transition-colors">3</button>
<button class="px-3 py-1 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg text-slate-500 hover:bg-slate-50 transition-colors">
<span class="material-symbols-outlined text-lg">chevron_right</span>
</button>
</div>
</div>
</div>
<!-- Footer / Help Info -->
<footer class="mt-10 py-6 border-t border-slate-200 dark:border-slate-800 flex flex-col md:flex-row justify-between items-center gap-4">
<p class="text-sm text-slate-400">© 2024 BlogAdmin Laravel Dashboard. All rights reserved.</p>
<div class="flex gap-6">
<a class="text-sm text-slate-400 hover:text-primary" href="#">Help Center</a>
<a class="text-sm text-slate-400 hover:text-primary" href="#">API Docs</a>
<a class="text-sm text-slate-400 hover:text-primary" href="#">Privacy Policy</a>
</div>
</footer>
</div>
</main>
</div>
</body></html>