<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMK Citra Negara</title>
        <!-- Tailwind - include CDN for quick dev; in production use compiled assets -->
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
            <script src="https://cdn.tailwindcss.com"></script>
            <style>
                body, html, * {
                    font-family: 'Poppins', sans-serif !important;
                }
            </style>
</head>
<body class="antialiased text-gray-900">
    <div id="app">
        @yield('content')
    </div>
</body>
</html>