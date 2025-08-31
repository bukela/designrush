<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Service Providers')</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

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
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
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

        .pagination-container .pager {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
        }

        .pagination-container .pager ul {
            display: flex;
            list-style: none;
            padding: 0;
            gap: 0.5rem;
        }

        .pagination-container .pager li {
            display: inline;
        }

        .pagination-container .pager a,
        .pagination-container .pager span {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 40px;
            height: 40px;
            padding: 0 12px;
            border: 1px solid #e5e7eb;
            border-radius: 6px;
            text-decoration: none;
            color: #6b7280;
            font-weight: 500;
            transition: all 0.2s;
        }

        .pagination-container .pager a:hover {
            background-color: #3b82f6;
            color: white;
            border-color: #3b82f6;
        }

        .pagination-container .pager .active span {
            background-color: #3b82f6;
            color: white;
            border-color: #3b82f6;
        }

        .pagination-container .pager .disabled span {
            opacity: 0.5;
            cursor: not-allowed;
        }
    </style>

    @stack('styles')
</head>
<body>
<header class="header">
    <div class="container">
        <h1>@yield('page-title', 'Service Providers Directory')</h1>
    </div>
</header>

<main class="main-content">
    <div class="container">
        @yield('content')
    </div>
</main>

@stack('scripts')
</body>
</html>
