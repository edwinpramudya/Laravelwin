<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title', 'Dashboard - SB Admin')</title>

    {{-- CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    {{-- PWA Manifest --}}
    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#3b82f6">

    {{-- iOS Support --}}
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="AppSaya">
    <link rel="apple-touch-icon" href="/images/icons/icon-192x192.png">
</head>

<body class="sb-nav-fixed">
    <x-navbar />

    <div id="layoutSidenav">
        <x-sidebar />

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    {{-- Ini tempat konten halaman --}}
                    @yield('content')
                </div>
            </main>

            <x-footeradmin />
        </div>
    </div>

    {{-- Scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    @stack('scripts')

    {{-- Service Worker (PWA) --}}
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/serviceworker.js')
                    .then(reg => console.log('SW registered:', reg))
                    .catch(err => console.log('SW registration failed:', err));
            });
        }
    </script>
</body>
</html>
