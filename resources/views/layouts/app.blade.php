<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="author" content="Tristan Elliott">
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="HTML, CSS, JavaScript, Web Hosting">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Site Title -->
        <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<body class="bg-gray-200">
    <div id="app" class="flex h-screen">


        <!-- Sidebar -->
        <aside class="w-64 bg-zinc-800">
            <!-- Brand Component -->
            <div class="block px-4 py-3">
                <a href="" class="flex items-center text-4xl font-medium tracking-widest text-green-500">
                    <span class="block pr-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                        </svg>
                    </span>
                    <span class="block pl-1">
                        {{ config('app.name', 'Laravel') }}
                    </span>
                </a>
            </div>

            <!-- Navigation Component -->
            <div class="block mt-3">
                <span class="block px-4 py-2 text-xs tracking-widest uppercase text-zinc-100">General</span>
                <ul class="block mt-4">
                    <li><a href="" class="block px-4 py-2 tracking-wide transition-all duration-150 ease-in-out text-zinc-100 hover:text-green-500 hover:bg-slate-700">Link 1</a></li>
                    <li><a href="" class="block px-4 py-2 tracking-wide transition-all duration-150 ease-in-out text-zinc-100 hover:text-green-500 hover:bg-slate-700">Link 2</a></li>
                    <li><a href="" class="block px-4 py-2 tracking-wide transition-all duration-150 ease-in-out text-zinc-100 hover:text-green-500 hover:bg-slate-700">Link 3</a></li>
                    <li><a href="" class="block px-4 py-2 tracking-wide transition-all duration-150 ease-in-out text-zinc-100 hover:text-green-500 hover:bg-slate-700">Link 4</a></li>
                </ul>
            </div>

            <!-- Brand Component -->
        </aside>

        <!-- Main Content -->
        <main class="flex-1">
            <!-- Main Page Header -->
            <div class="flex items-center justify-between px-10 py-6 bg-white shadow-lg">
                <!-- Left Header Section -->
                <div class="block">
                    <h1 class="block text-3xl font-medium tracking-wide capitalize text-zinc-700">Page Title</h1>
                    <span class="block pt-1 capitalize text-zinc-400">Page Description</span>
                </div>
                <!-- Right Header Section -->
                <div class="flex items-center">
                    <!-- Page Actions Sections -->
                    <div class="flex items-center mr-2 space-x-3">
                        <a href="" class="block px-4 py-2 font-medium tracking-wide capitalize transition-all duration-150 ease-in-out bg-green-500 rounded appearance-none ring-2 ring-green-500 ring-opacity-25 ring-offset-green-700 hover:bg-green-600 focus:bg-green-700 text-zinc-900">Action Button</a>
                        <a href="" class="block px-4 py-2 font-medium tracking-wide capitalize transition-all duration-150 ease-in-out bg-green-500 rounded appearance-none ring-2 ring-green-500 ring-opacity-25 ring-offset-green-700 hover:bg-green-600 focus:bg-green-700 text-zinc-900">Action Button</a>
                    </div>
                    <!-- Page Options Section -->
                    <div class="flex items-center ml-3">
                        <!-- Refresh Action -->
                        <a href="" class="block p-2 border rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                            </svg>
                        </a>
                        <!-- Settings Action -->
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Main Page Breadcrumbs -->
            <div class="block px-10 py-4">
                <ul class="flex items-center">
                    <li class="block px-1 text-zinc-700">Dashboard</li>
                    <span class="block px-1 text-zinc-400">/</span>
                    <li class="block px-1 text-zinc-700">Dashboard</li>
                    <span class="block px-1 text-zinc-400">/</span>
                    <li class="block px-1 text-zinc-900">Dashboard</li>
                </ul>
            </div>

            <!-- Main Page Content -->
            <div class="mx-10">
                <div class="block px-10 py-4 bg-white shadow-lg">Hello</div>
            </div>
        </main>


        <nav class="hidden bg-white shadow-sm navbar navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</body>
</html>
