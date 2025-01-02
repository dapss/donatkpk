<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promotions - Donut KPK</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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

    <style>
        html {
            scroll-behavior: smooth;
        }

        /* Media Query untuk perangkat dengan lebar maksimal 768px */
        @media (max-width: 768px) {
            .hero-content {
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <nav class="bg-gradient-to-r from-orange-500 to-amber-500 shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <a href="/home" class="text-white font-bold text-2xl tracking-wider">
                    Donat KPK
                </a>
            </div>

            <div class="hidden md:flex space-x-6">
                <a href="{{ route('home') }}"
                    class="text-white font-semibold hover:text-orange-100 transition duration-300 ease-in-out relative group">
                    Beranda
                    <span
                        class="absolute bottom-0 left-0 w-full h-0.5 bg-white transform scale-x-0 group-hover:scale-x-100 transition duration-300"></span>
                </a>
                <a href="{{ route('menu') }}"
                    class="text-white font-semibold hover:text-orange-100 transition duration-300 ease-in-out relative group">
                    Menu
                    <span
                        class="absolute bottom-0 left-0 w-full h-0.5 bg-white transform scale-x-0 group-hover:scale-x-100 transition duration-300"></span>
                </a>
                <a href="{{ route('promotions') }}"
                    class="text-white font-semibold hover:text-orange-100 transition duration-300 ease-in-out relative group">
                    Promo
                    <span
                        class="absolute bottom-0 left-0 w-full h-0.5 bg-white transform scale-x-0 group-hover:scale-x-100 transition duration-300"></span>
                </a>

                @guest
                    <a href="{{ route('login') }}"
                        class="text-white font-semibold hover:text-orange-100 transition duration-300 ease-in-out relative group">
                        Login
                        <span
                            class="absolute bottom-0 left-0 w-full h-0.5 bg-white transform scale-x-0 group-hover:scale-x-100 transition duration-300"></span>
                    </a>
                @endguest

                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="route('logout')"
                            class="text-white font-semibold hover:text-orange-100 transition duration-300 ease-in-out relative group"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            Logout
                            <span
                                class="absolute bottom-0 left-0 w-full h-0.5 bg-white transform scale-x-0 group-hover:scale-x-100 transition duration-300"></span>
                        </a>
                    </form>
                @endauth
            </div>

            <!-- Mobile Menu Toggle -->
            <div class="md:hidden">
                <button class="text-white focus:outline-none" onclick="toggleMobileMenu()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="md:hidden hidden bg-orange-500 absolute w-full">
            <div class="px-4 pt-2 pb-4 space-y-2">
                <a href="{{ route('home') }}" class="block text-white py-2 hover:bg-orange-600 rounded">Beranda</a>
                <a href="{{ route('menu') }}" class="block text-white py-2 hover:bg-orange-600 rounded">Menu</a>
                @guest
                <a href="{{ route('login') }}" class="block text-white py-2 hover:bg-orange-600 rounded">Login</a>
                @endguest
                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="route('logout')" class="block text-white py-2 hover:bg-orange-600 rounded"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        Logout
                    </a>
                </form>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Promotions Section -->
    <section class="bg-gradient-to-br from-orange-50 to-orange-100 min-h-screen flex items-center justify-center py-20 px-6">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl md:text-6xl font-extrabold text-orange-900 mb-4 tracking-tight leading-tight">
                Promosi Spesial
            </h1>
            <p class="text-2xl text-orange-700 font-semibold mb-6 italic">
                Dapatkan Penawaran Menarik!
            </p>
            <p class="text-gray-600 text-base leading-relaxed mb-8">
                Nikmati berbagai promosi menarik yang kami tawarkan. Jangan lewatkan kesempatan untuk mendapatkan donat favorit Anda dengan harga spesial!
            </p>

            <div class="flex justify-center">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h3 class="text-xl font-bold text-orange-900 mb-2">Promo 3 Donat</h3>
                        <p class="text-gray-700 mb-4">Dapatkan potongan harga dengan pembelian 3 donat.</p>
                        <p class="text-sm text-gray-500">Berlaku setiap pembelian.</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h3 class="text-xl font-bold text-orange-900 mb-2">Promo 6 Donat</h3>
                        <p class="text-gray-700 mb-4">Dapatkan potongan harga dengan pembelian 6 donat.</p>
                        <p class="text-sm text-gray-500">Berlaku setiap pembelian.</p>
                    </div>
                    {{-- <div class="bg-white rounded-lg shadow-lg p-6">
                        <h3 class="text-xl font-bold text-orange-900 mb-2">Promo Spesial Akhir Pekan</h3>
                        <p class="text-gray-700 mb-4">Nikmati 15% diskon untuk semua pembelian di akhir pekan.</p>
                        <p class="text-sm text-gray-500">Berlaku setiap Sabtu dan Minggu.</p>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-orange-50 to-amber-100 py-3 px-4">
        <div class="container mx-auto text-center">
            <p class="text-gray-600">© 2023 Donut KPK. Semua hak dilindungi.</p>
        </div>
    </footer>
</body>

</html>