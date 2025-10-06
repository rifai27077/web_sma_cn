<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMK Citra Negara</title>
    <!-- Tailwind - include CDN for quick dev; in production use compiled assets -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <style>
        body, html, * {
            font-family: 'Poppins', sans-serif !important;
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="antialiased text-gray-900">
    <div id="app">
        @yield('content')
    </div>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
        });

        document.querySelectorAll('.group').forEach(card => {
            card.addEventListener('mousemove', e => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                card.style.transform = `rotateY(${x / 30}deg) rotateX(${-y / 30}deg) scale(1.03)`;
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = '';
            });
        });

    </script>
</body>
</html>