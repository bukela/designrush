<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Service Providers')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <style>
        body {
            font-family: 'Figtree', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8fafc;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .header {
            background: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 2rem 0;
            margin-bottom: 2rem;
        }

        .header h1 {
            margin: 0;
            color: #1f2937;
            font-size: 2rem;
        }

        .main-content {
            min-height: calc(100vh - 200px);
        }
    </style>

    @stack('styles')
</head>
<body>
<!-- Header -->
<header class="header">
    <div class="container">
        <h1>@yield('page-title', 'Service Providers Directory')</h1>
    </div>
</header>

<!-- Main Content -->
<main class="main-content">
    <div class="container">
        @yield('content')
    </div>
</main>
</body>
</html>
