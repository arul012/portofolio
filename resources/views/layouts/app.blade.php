<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Primary Meta Tags -->
    <title>@yield('title', 'Khaerul Oktafiansyah — Junior Data Analyst & Software Developer')</title>
    <meta name="title" content="@yield('title', 'Khaerul Oktafiansyah — Portofolio Web')">
    <meta name="description" content="@yield('meta_description', 'Portofolio resmi Khaerul Oktafiansyah. Lulusan S1 Teknik Informatika Universitas Pamulang, BNSP Junior Data Analyst, dan spesialis Machine Learning serta Mobile Development.')">
    <meta name="author" content="Khaerul Oktafiansyah">
    <meta name="keywords" content="Khaerul Oktafiansyah, Data Analyst, Machine Learning, Prediksi Saham BBCA, Teknik Informatika, Universitas Pamulang, Android Developer, Portofolio">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Khaerul Oktafiansyah — Portofolio')">
    <meta property="og:description" content="Portofolio resmi Khaerul Oktafiansyah — Junior Data Analyst & Machine Learning Enthusiast.">
    
    <!-- Color Scheme & Anti-FOUC Theme Script -->
    <meta name="color-scheme" content="light dark">
    <script>
        (function() {
            try {
                const savedTheme = localStorage.getItem('theme');
                const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                if (savedTheme === 'dark' || (!savedTheme && systemPrefersDark)) {
                    document.documentElement.classList.add('dark');
                    document.documentElement.style.colorScheme = 'dark';
                } else {
                    document.documentElement.classList.remove('dark');
                    document.documentElement.style.colorScheme = 'light';
                }
            } catch (e) {}
        })();
    </script>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- Chart.js for Data Visualizations -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
    
    @stack('styles')
</head>
<body>
    <!-- Navigation Bar -->
    @include('components.navbar')

    <!-- Main Content -->
    <main id="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
