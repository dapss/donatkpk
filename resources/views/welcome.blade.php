<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donat KPK</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Poppins', 'ui-sans-serif', 'system-ui'],
                    },
                    colors: {
                        'donut-primary': '#FF6B6B',
                        'donut-secondary': '#4ECDC4',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gradient-to-br from-orange-50 to-orange-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8">
        <div class="text-center mb-8">
            <div class="w-32 h-32 mx-auto mb-4 bg-gradient-to-br from-orange-500 to-amber-500 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-white" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M19.739 7.45a8.406 8.406 0 0 0-1.628-2.207A8.606 8.606 0 0 0 12 3a8.613 8.613 0 0 0-6.111 2.243A8.406 8.406 0 0 0 4.26 7.45c-.054.107-.107.22-.161.333a8.576 8.576 0 0 0 .806 8.592 8.432 8.432 0 0 0 1.935 1.898l.017.012 3.345 2.245a1.399 1.399 0 0 0 1.65 0l3.345-2.245.017-.012a8.432 8.432 0 0 0 1.935-1.898 8.576 8.576 0 0 0 .806-8.592c-.054-.114-.107-.226-.161-.333Z"/>
                </svg>
            </div>
            <h1 class="text-3xl font-bold text-orange-900">Donat KPK</h1>
            <p class="text-gray-600 mt-2">Kita Pakai Kentang!</p>
        </div>

        <div class="space-y-4">
            <a 
                href="{{ route('login') }}" 
                class="w-full block text-center px-4 py-3 bg-orange-500 text-white rounded-full hover:bg-orange-600 transition font-semibold"
            >
                Masuk
            </a>

            @if (Route::has('register'))
                <a 
                    href="{{ route('register') }}" 
                    class="w-full block text-center px-4 py-3 bg-white text-orange-600 border border-orange-300 rounded-full hover:bg-orange-50 transition font-semibold"
                >
                    Daftar Akun
                </a>
            @endif
        </div>

        <div class="text-center mt-6 text-gray-500 text-sm">
            <p>&copy; {{ date('Y') }} Donat KPK. Hak Cipta Dilindungi.</p>
        </div>
    </div>
</body>
</html>