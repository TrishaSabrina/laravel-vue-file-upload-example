<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <title>Laravel Vue JS File Upload Example</title>
 
    <script src="{{ asset('build/assets/app-1df9113c.js') }}" defer></script>
    <link href="{{ asset('build/assets/app-67dcdfd2.css') }}" rel="stylesheet">
 
</head>
<body>
    <div id="app">
 
        <main class="py-4">
            @yield('content')
        </main>
 
    </div>
</body>
</html>