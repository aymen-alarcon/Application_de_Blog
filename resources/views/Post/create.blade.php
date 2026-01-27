<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Admin Create Post Form</title>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Google Fonts: Inter -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols Outlined -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display min-h-screen">
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
<!-- TopNavBar Component -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-[#cfdbe7] dark:border-slate-700 bg-white dark:bg-slate-900 px-10 py-3">
<div class="flex items-center gap-8">
<div class="flex items-center gap-4 text-slate-900 dark:text-white">
<div class="size-6 text-primary">
<span class="material-symbols-outlined text-3xl">dashboard_customize</span>
</div>
<h2 class="text-slate-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">Admin Dashboard</h2>
</div>
<label class="flex flex-col min-w-40 !h-10 max-w-64 hidden md:flex">
<div class="flex w-full flex-1 items-stretch rounded-lg h-full">
<div class="text-slate-500 flex border-none bg-slate-100 dark:bg-slate-800 items-center justify-center pl-4 rounded-l-lg" data-icon="MagnifyingGlass">
<span class="material-symbols-outlined">search</span>
</div>
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-slate-900 dark:text-white focus:outline-0 focus:ring-0 border-none bg-slate-100 dark:bg-slate-800 placeholder:text-slate-400 px-4 rounded-l-none pl-2 text-sm font-normal" placeholder="Search resources..." value=""/>
</div>
</label>
</div>
<div class="flex flex-1 justify-end gap-8">
<nav class="hidden lg:flex items-center gap-6">
<a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="#">Dashboard</a>
<a class="text-primary text-sm font-semibold" href="#">Posts</a>
<a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="#">Categories</a>
<a class="text-slate-600 dark:text-slate-300 text-sm font-medium hover:text-primary transition-colors" href="#">Users</a>
</nav>
<div class="flex gap-2">
<button class="flex items-center justify-center rounded-lg h-10 w-10 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300">
<span class="material-symbols-outlined">notifications</span>
</button>
<button class="flex items-center justify-center rounded-lg h-10 w-10 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300">
<span class="material-symbols-outlined">settings</span>
</button>
</div>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-slate-200 dark:border-slate-700" data-alt="Admin user avatar" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAdz16yurBL34tfnxgsyoeFeqZCWS6qmoiK20Eh9H2xJ2dPviznjdqnsTS9MGCewwCtsEE_Qgzm_WWNeLWC_12_jSqFi9wAJFNLrND5cSv-GrUPP9a1TzsKlOLLn4OA2kUIUFprD1mAwLhdEw2SF-dBdG7OQ18uJikNHQuQtIir1F48NJWvOc3bv1tOjxkjKPxT5ULvInzBtMj-Ulx7i42i2d-amq6kbbvqFD5YDT4ivfSE_8f_mWHiWAyAxYGmOb0MHa3lyM7UcYM");'></div>
</div>
</header>
<main class="flex flex-1 justify-center py-8">
<div class="layout-content-container flex flex-col max-w-[960px] flex-1 px-4">
<!-- Breadcrumbs Component -->
<div class="flex flex-wrap gap-2 py-2">
<a class="text-slate-500 dark:text-slate-400 text-sm font-medium hover:text-primary" href="#">Home</a>
<span class="text-slate-400 text-sm">/</span>
<a class="text-slate-500 dark:text-slate-400 text-sm font-medium hover:text-primary" href="#">Posts</a>
<span class="text-slate-400 text-sm">/</span>
<span class="text-slate-900 dark:text-white text-sm font-semibold">Create New Post</span>
</div>
<!-- PageHeading Component -->
<div class="flex flex-wrap justify-between items-center gap-3 py-6">
<div>
<h1 class="text-slate-900 dark:text-white text-3xl font-black leading-tight tracking-tight">Create New Post</h1>
<p class="text-slate-500 dark:text-slate-400 text-sm mt-1">Compose and publish a new article to your blog.</p>
</div>
<button class="flex min-w-[84px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-slate-100 dark:bg-slate-800 text-slate-900 dark:text-white text-sm font-bold hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">
<span class="material-symbols-outlined mr-2 text-lg">arrow_back</span>
<span class="truncate">Back to List</span>
</button>
</div>
<!-- Main Form Card -->
<div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
<form action="#" class="p-6 md:p-8 space-y-8" method="POST">
<!-- CSRF Placeholder -->
<input name="_token" type="hidden" value="CSRF_TOKEN_PLACEHOLDER"/>
<!-- Post Title Field -->
<div class="flex flex-col gap-2">
<label class="text-slate-900 dark:text-white text-sm font-semibold">Post Title</label>
<input class="form-input w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white focus:border-primary focus:ring-2 focus:ring-primary/20 h-12 px-4 text-base placeholder:text-slate-400 transition-all" name="title" placeholder="e.g. 10 Tips for Better Web Design" type="text"/>
<!-- Validation Error Example -->
<p class="text-red-500 text-xs mt-1 hidden">The title field is required.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- Category Select -->
<div class="flex flex-col gap-2">
<label class="text-slate-900 dark:text-white text-sm font-semibold">Category</label>
<select class="form-select w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white focus:border-primary focus:ring-2 focus:ring-primary/20 h-12 px-4 transition-all" name="category_id">
<option value="">Select a category</option>
<option value="1">Technology</option>
<option value="2">Design</option>
<option value="3">Development</option>
<option value="4">Tutorial</option>
</select>
<p class="text-red-500 text-xs mt-1 hidden">Please select a valid category.</p>
</div>
<!-- Post Status/Visibility -->
<div class="flex flex-col gap-2">
<label class="text-slate-900 dark:text-white text-sm font-semibold">Visibility</label>
<div class="flex items-center h-12 gap-4">
<label class="flex items-center cursor-pointer">
<input checked="" class="w-4 h-4 text-primary bg-slate-100 border-slate-300 focus:ring-primary dark:bg-slate-700 dark:border-slate-600" name="status" type="radio" value="published"/>
<span class="ml-2 text-sm text-slate-700 dark:text-slate-300">Public</span>
</label>
<label class="flex items-center cursor-pointer">
<input class="w-4 h-4 text-primary bg-slate-100 border-slate-300 focus:ring-primary dark:bg-slate-700 dark:border-slate-600" name="status" type="radio" value="draft"/>
<span class="ml-2 text-sm text-slate-700 dark:text-slate-300">Draft</span>
</label>
</div>
</div>
</div>
<!-- Tags Checkbox Group -->
<div class="flex flex-col gap-3">
<label class="text-slate-900 dark:text-white text-sm font-semibold">Tags</label>
<div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3 p-4 bg-slate-50 dark:bg-slate-800/50 rounded-lg border border-slate-100 dark:border-slate-800">
<label class="inline-flex items-center cursor-pointer group">
<input class="w-4 h-4 rounded text-primary border-slate-300 focus:ring-primary dark:bg-slate-700 dark:border-slate-600" type="checkbox"/>
<span class="ml-2 text-sm text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">Laravel</span>
</label>
<label class="inline-flex items-center cursor-pointer group">
<input class="w-4 h-4 rounded text-primary border-slate-300 focus:ring-primary dark:bg-slate-700 dark:border-slate-600" type="checkbox"/>
<span class="ml-2 text-sm text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">PHP</span>
</label>
<label class="inline-flex items-center cursor-pointer group">
<input class="w-4 h-4 rounded text-primary border-slate-300 focus:ring-primary dark:bg-slate-700 dark:border-slate-600" type="checkbox"/>
<span class="ml-2 text-sm text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">Tailwind</span>
</label>
<label class="inline-flex items-center cursor-pointer group">
<input class="w-4 h-4 rounded text-primary border-slate-300 focus:ring-primary dark:bg-slate-700 dark:border-slate-600" type="checkbox"/>
<span class="ml-2 text-sm text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">UI Design</span>
</label>
<label class="inline-flex items-center cursor-pointer group">
<input class="w-4 h-4 rounded text-primary border-slate-300 focus:ring-primary dark:bg-slate-700 dark:border-slate-600" type="checkbox"/>
<span class="ml-2 text-sm text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">Vue.js</span>
</label>
<label class="inline-flex items-center cursor-pointer group">
<input class="w-4 h-4 rounded text-primary border-slate-300 focus:ring-primary dark:bg-slate-700 dark:border-slate-600" type="checkbox"/>
<span class="ml-2 text-sm text-slate-600 dark:text-slate-400 group-hover:text-primary transition-colors">Bootstrap</span>
</label>
</div>
</div>
<!-- Content Field -->
<div class="flex flex-col gap-2">
<label class="text-slate-900 dark:text-white text-sm font-semibold">Post Content</label>
<textarea class="form-textarea w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-900 dark:text-white focus:border-primary focus:ring-2 focus:ring-primary/20 p-4 text-base placeholder:text-slate-400 transition-all resize-y min-h-[300px]" name="content" placeholder="Write your story here... Markdown is supported." rows="12"></textarea>
<div class="flex justify-between mt-1">
<p class="text-slate-400 text-xs italic">Supports markdown formatting</p>
<!-- Example of an active validation error -->
<p class="text-red-500 text-xs font-medium">The content must be at least 10 characters.</p>
</div>
</div>
<!-- Form Actions -->
<div class="pt-6 border-t border-slate-100 dark:border-slate-800 flex flex-col sm:flex-row gap-4 justify-end">
<button class="px-6 h-12 text-sm font-bold text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white transition-colors" type="button">
                                    Save as Draft
                                </button>
<button class="px-10 h-12 bg-primary text-white text-sm font-bold rounded-lg shadow-md hover:bg-primary/90 hover:shadow-lg transition-all flex items-center justify-center gap-2" type="submit">
<span class="material-symbols-outlined">publish</span>
                                    Publish Post
                                </button>
</div>
</form>
</div>
<!-- Footer Help -->
<div class="mt-8 text-center">
<p class="text-slate-400 text-sm">Need help? Check out our <a class="text-primary hover:underline" href="#">Documentation</a> on how to write effective blog posts.</p>
</div>
</div>
</main>
</div>
</div>
</body></html>