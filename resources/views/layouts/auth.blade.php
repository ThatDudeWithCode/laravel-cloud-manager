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
<body class="auth-body">
    <div id="app" class="auth-container">
        <!-- Authentication Form Container -->
        <div class="auth-form-container">
            <!-- Authentication Form Content -->
            <div class="auth-form-card">
                <!-- Form Header -->
                <div class="mb-2 auth-form-card-header">
                    <span class="auth-form-brand">
                        <span class="block pr-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                            </svg>
                        </span>
                        <span>{{ config('app.name', 'Laravel') }}</span>
                    </span>
                    <h1 class="auth-form-title">@yield('title')</h1>
                </div>
                <!-- Form Content -->
                <div class="auth-form-content">
                    @yield('content')
                </div>
            </div>

            <!-- Authentication Form Actions -->
            <div class="auth-form-actions">
                @yield('actions')
            </div>
        </div>
    </div>
</body>
</html>
