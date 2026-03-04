<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600&family=Syne:wght@600;700&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'DM Sans', sans-serif; }
        .brand-font { font-family: 'Syne', sans-serif; }

        :root {
            --sidebar-width: 256px;
        }

        /* Sidebar */
        #sidebar {
            width: var(--sidebar-width);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        #sidebar.sidebar-hidden {
            transform: translateX(-100%);
        }

        /* Main content shift on desktop */
        #main-content {
            transition: margin-left 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        #main-content.shifted {
            margin-left: var(--sidebar-width);
        }

        /* Overlay */
        #overlay {
            display: none;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        #overlay.active {
            display: block;
            opacity: 1;
        }

        /* Dropdown */
        #profile-dropdown {
            transform: translateY(-8px);
            opacity: 0;
            pointer-events: none;
            transition: transform 0.2s ease, opacity 0.2s ease;
        }
        #profile-dropdown.open {
            transform: translateY(0);
            opacity: 1;
            pointer-events: all;
        }

        /* Nav item active */
        .nav-item.active {
            background: #f0f4ff;
            color: #3b5bdb;
        }
        .nav-item.active svg {
            color: #3b5bdb;
        }

        /* Toggle button icon transition */
        #toggle-icon {
            transition: transform 0.3s ease;
        }

        .sidebar-toggle-btn {
            transition: background 0.2s ease;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800">

<!-- Overlay for mobile -->
<div id="overlay" class="fixed inset-0 bg-black/40 z-30 lg:hidden" onclick="closeSidebar()"></div>

<!-- TOP NAV -->
<nav class="fixed top-0 left-0 right-0 z-50 h-14 bg-white border-b border-slate-200 flex items-center px-4 justify-between shadow-sm">
    <div class="flex items-center gap-3">
        <!-- Sidebar Toggle Button -->
        <button onclick="toggleSidebar()" class="sidebar-toggle-btn w-9 h-9 flex items-center justify-center rounded-lg hover:bg-slate-100 text-slate-500 hover:text-slate-800 transition-colors">
            <svg id="toggle-icon" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>

        <!-- Logo -->
        <a href="#" class="flex items-center gap-2">
            <img src="{{ asset('images/company_logo1.png') }}" alt="" srcset="" class="w-[100px]">
            {{-- <div class="w-7 h-7 rounded-lg bg-indigo-600 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
            </div>
            <span class="brand-font text-base font-700 text-slate-900 tracking-tight">Flowbite</span> --}}
            {{-- <img src="{{ asset('images/company_logo1.png') }}" alt="" srcset=""> --}}
        </a>
    </div>

    <!-- Right side -->
    <div class="flex items-center gap-3">
        <!-- Notification Bell -->
        <button class="relative w-9 h-9 flex items-center justify-center rounded-lg hover:bg-slate-100 text-slate-500 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
            </svg>
            <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-500 rounded-full border border-white"></span>
        </button>

        <!-- Profile Button -->
        <div class="relative">
            <button onclick="toggleDropdown()" id="profile-btn" class="flex items-center gap-2 rounded-lg px-2 py-1 hover:bg-slate-100 transition-colors group">
                <img class="w-7 h-7 rounded-full object-cover ring-2 ring-indigo-100" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user">
                <div class="hidden sm:block text-left">
                    <p class="text-xs font-600 text-slate-800 leading-tight">Neil Sims</p>
                    <p class="text-xs text-slate-400 leading-tight">Admin</p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-slate-400 transition-transform duration-200" id="chevron-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>

            <!-- Profile Dropdown -->
            <div id="profile-dropdown" class="absolute right-0 top-full mt-2 w-56 bg-white rounded-xl shadow-xl border border-slate-100 overflow-hidden z-50">
                <!-- User info header -->
                <div class="px-4 py-3 bg-gradient-to-br from-indigo-50 to-blue-50 border-b border-slate-100">
                    <div class="flex items-center gap-3">
                        <img class="w-9 h-9 rounded-full object-cover" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user">
                        <div>
                            <p class="text-sm font-600 text-slate-800">Neil Sims</p>
                            <p class="text-xs text-slate-500">neil.sims@flowbite.com</p>
                        </div>
                    </div>
                </div>

                <!-- Menu items -->
                <div class="p-2">
                    <a href="#" class="flex items-center gap-3 px-3 py-2 text-sm text-slate-600 hover:bg-indigo-50 hover:text-indigo-700 rounded-lg transition-colors group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-slate-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>
                        </svg>
                        Dashboard
                    </a>
                    <a href="#" class="flex items-center gap-3 px-3 py-2 text-sm text-slate-600 hover:bg-indigo-50 hover:text-indigo-700 rounded-lg transition-colors group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-slate-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        My Profile
                    </a>
                    <a href="#" class="flex items-center gap-3 px-3 py-2 text-sm text-slate-600 hover:bg-indigo-50 hover:text-indigo-700 rounded-lg transition-colors group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-slate-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Settings
                    </a>
                    <a href="#" class="flex items-center gap-3 px-3 py-2 text-sm text-slate-600 hover:bg-indigo-50 hover:text-indigo-700 rounded-lg transition-colors group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-slate-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Earnings
                    </a>
                    <a href="#" class="flex items-center gap-3 px-3 py-2 text-sm text-slate-600 hover:bg-indigo-50 hover:text-indigo-700 rounded-lg transition-colors group">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-slate-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Help &amp; Support
                    </a>
                </div>

                <div class="p-2 border-t border-slate-100">
                    <form action="{{ url('/logout') }}" method="POST">
    @csrf
    <button type="submit"
        class="flex items-center gap-3 px-3 py-2 text-sm text-red-500 hover:bg-red-50 rounded-lg transition-colors group">

        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
        </svg>
        Sign out
    </button>
</form>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- SIDEBAR -->
<aside id="sidebar" class="fixed top-14 left-0 bottom-0 z-40 w-64 bg-white border-r border-slate-200 overflow-y-auto">
    <div class="px-3 py-4">
        <!-- Section label -->
        <p class="text-xs font-600 text-slate-400 uppercase tracking-wider px-2 mb-2">Menu</p>
        <ul class="space-y-0.5">
            <li>
                <a href="#" class="nav-item active flex items-center gap-3 px-3 py-2 text-sm font-500 rounded-lg transition-colors hover:bg-indigo-50 hover:text-indigo-700 group" onclick="setActive(this)">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#" class="nav-item flex items-center gap-3 px-3 py-2 text-sm font-500 text-slate-600 rounded-lg transition-colors hover:bg-indigo-50 hover:text-indigo-700 group" onclick="setActive(this)">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"/></svg>
                    Kanban
                    <span class="ms-auto text-xs bg-indigo-100 text-indigo-700 font-600 px-1.5 py-0.5 rounded-md">Pro</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-item flex items-center gap-3 px-3 py-2 text-sm font-500 text-slate-600 rounded-lg transition-colors hover:bg-indigo-50 hover:text-indigo-700 group" onclick="setActive(this)">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/></svg>
                    Inbox
                    <span class="ms-auto flex items-center justify-center w-5 h-5 text-xs font-600 text-white bg-red-500 rounded-full">2</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/showRequest') }}" class="nav-item flex items-center gap-3 px-3 py-2 text-sm font-500 text-slate-600 rounded-lg transition-colors hover:bg-indigo-50 hover:text-indigo-700 group" onclick="setActive(this)">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                    Users Request
                </a>
            </li>
            <li>
                <a href="{{ url('/teams') }}" class="nav-item flex items-center gap-3 px-3 py-2 text-sm font-500 text-slate-600 rounded-lg transition-colors hover:bg-indigo-50 hover:text-indigo-700 group" onclick="setActive(this)">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                    Team Members
                </a>
            </li>
            <li>
                <a href="#" class="nav-item flex items-center gap-3 px-3 py-2 text-sm font-500 text-slate-600 rounded-lg transition-colors hover:bg-indigo-50 hover:text-indigo-700 group" onclick="setActive(this)">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                    Products
                </a>
            </li>
        </ul>

        <p class="text-xs font-600 text-slate-400 uppercase tracking-wider px-2 mb-2 mt-6">Account</p>
        <ul class="space-y-0.5">
            <li>
                <a href="#" class="nav-item flex items-center gap-3 px-3 py-2 text-sm font-500 text-slate-600 rounded-lg transition-colors hover:bg-indigo-50 hover:text-indigo-700 group" onclick="setActive(this)">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Settings
                </a>
            </li>
            <li>
                 <form action="{{ url('/logout') }}" method="POST">
    @csrf
    <button type="submit"
        class="flex items-center gap-3 px-3 py-2 text-sm text-red-500 hover:bg-red-50 rounded-lg transition-colors group">

        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
        </svg>
        Sign out
    </button>
</form>
            </li>
        </ul>
    </div>
</aside>

<!-- MAIN CONTENT -->
<div id="main-content" class="pt-14 shifted min-h-screen transition-all duration-300">

    @yield('body')

    {{-- <div class="p-6">
        <div class="mb-6">
            <h1 class="brand-font text-2xl font-700 text-slate-900">Dashboard</h1>
            <p class="text-slate-500 text-sm mt-1">Welcome back, Neil! Here's what's happening today.</p>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <div class="bg-white rounded-xl p-4 border border-slate-100 shadow-sm">
                <p class="text-xs text-slate-400 font-500 uppercase tracking-wider">Total Users</p>
                <p class="text-2xl font-700 text-slate-800 mt-1">12,438</p>
                <p class="text-xs text-emerald-600 mt-1">↑ 12% this month</p>
            </div>
            <div class="bg-white rounded-xl p-4 border border-slate-100 shadow-sm">
                <p class="text-xs text-slate-400 font-500 uppercase tracking-wider">Revenue</p>
                <p class="text-2xl font-700 text-slate-800 mt-1">$48,295</p>
                <p class="text-xs text-emerald-600 mt-1">↑ 8.2% this month</p>
            </div>
            <div class="bg-white rounded-xl p-4 border border-slate-100 shadow-sm">
                <p class="text-xs text-slate-400 font-500 uppercase tracking-wider">Orders</p>
                <p class="text-2xl font-700 text-slate-800 mt-1">3,842</p>
                <p class="text-xs text-red-500 mt-1">↓ 2.1% this month</p>
            </div>
            <div class="bg-white rounded-xl p-4 border border-slate-100 shadow-sm">
                <p class="text-xs text-slate-400 font-500 uppercase tracking-wider">Conversion</p>
                <p class="text-2xl font-700 text-slate-800 mt-1">3.24%</p>
                <p class="text-xs text-emerald-600 mt-1">↑ 0.8% this month</p>
            </div>
        </div>

        <!-- Placeholder content -->
        <div class="bg-white rounded-xl border border-dashed border-slate-200 p-10 flex items-center justify-center">
            <p class="text-slate-400 text-sm">Your content goes here</p>
        </div>
    </div> --}}
</div>

<script>
    let sidebarOpen = true; // desktop: open by default
    let dropdownOpen = false;

    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');
        const overlay = document.getElementById('overlay');

        sidebarOpen = !sidebarOpen;

        if (sidebarOpen) {
            sidebar.classList.remove('sidebar-hidden');
            mainContent.classList.add('shifted');
            if (window.innerWidth < 1024) {
                overlay.classList.add('active');
            }
        } else {
            sidebar.classList.add('sidebar-hidden');
            mainContent.classList.remove('shifted');
            overlay.classList.remove('active');
        }
    }

    function closeSidebar() {
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');
        const overlay = document.getElementById('overlay');
        sidebarOpen = false;
        sidebar.classList.add('sidebar-hidden');
        mainContent.classList.remove('shifted');
        overlay.classList.remove('active');
    }

    function toggleDropdown() {
        const dropdown = document.getElementById('profile-dropdown');
        const chevron = document.getElementById('chevron-icon');
        dropdownOpen = !dropdownOpen;
        if (dropdownOpen) {
            dropdown.classList.add('open');
            chevron.style.transform = 'rotate(180deg)';
        } else {
            dropdown.classList.remove('open');
            chevron.style.transform = 'rotate(0deg)';
        }
    }

    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
        const profileBtn = document.getElementById('profile-btn');
        const dropdown = document.getElementById('profile-dropdown');
        if (!profileBtn.contains(e.target) && !dropdown.contains(e.target)) {
            dropdown.classList.remove('open');
            document.getElementById('chevron-icon').style.transform = 'rotate(0deg)';
            dropdownOpen = false;
        }
    });

    // On smaller screens, hide sidebar by default
    function handleResize() {
        if (window.innerWidth < 1024 && sidebarOpen) {
            closeSidebar();
            sidebarOpen = false;
        }
    }

    // Set initial state based on screen size
    if (window.innerWidth < 1024) {
        closeSidebar();
    }

    window.addEventListener('resize', handleResize);

    function setActive(el) {
        document.querySelectorAll('.nav-item').forEach(i => {
            i.classList.remove('active');
            i.classList.add('text-slate-600');
        });
        el.classList.add('active');
        el.classList.remove('text-slate-600');
    }
</script>
</body>
</html>
