<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donut KPK - Donat Segar Setiap Hari</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>


    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Custom Tailwind Configuration -->
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

    <!-- Optional JavaScript for Mobile Menu Toggle -->
    <script>
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        }
    </script>

    <!-- Hero Section -->
    <section
        class="bg-gradient-to-br from-orange-50 to-orange-100 min-h-screen flex items-center justify-center py-20 px-6">
        <div
            class="container mx-auto flex flex-col lg:flex-row items-center justify-between space-y-10 lg:space-y-0 lg:space-x-16">
            <div class="hero-content text-center lg:text-left max-w-xl">
                <h1 class="text-5xl md:text-6xl font-extrabold text-orange-900 mb-4 tracking-tight leading-tight">
                    Donat KPK
                </h1>
                <p class="text-2xl text-orange-700 font-semibold mb-6 italic">
                    Kita Pakai Kentang!
                </p>
                <p class="text-gray-600 text-base leading-relaxed mb-8">
                    Nikmati sensasi donat premium dengan berbagai pilihan rasa yang menggoda.
                    Dibuat dengan bahan berkualitas tinggi fresh setiap hari, Donat KPK menghadirkan
                    pengalaman kuliner yang tak terlupakan.
                </p>
                <div class="hero-buttons flex flex-col sm:flex-row justify-center lg:justify-start gap-4 mb-12">
                    <a href="#footer"
                        class="btn bg-orange-600 hover:bg-orange-700 text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105 shadow-lg">
                        Informasi Outlet
                    </a>
                    <a href="/menu"
                        class="btn border-2 border-orange-600 text-orange-600 hover:bg-orange-600 hover:text-white font-bold py-3 px-6 rounded-full transition duration-300 ease-in-out transform hover:scale-105 shadow-md">
                        Lihat Menu
                    </a>
                </div>
                <div class="hero-stats flex flex-wrap justify-center lg:justify-start gap-6">
                    <div class="text-center">
                        <p class="text-3xl font-bold text-orange-800">10+</p>
                        <p class="text-sm text-gray-600">Varian Rasa</p>
                    </div>
                    <div class="text-center">
                        <p class="text-3xl font-bold text-orange-800">100%</p>
                        <p class="text-sm text-gray-600">Fresh Daily</p>
                    </div>
                    <div class="text-center">
                        <p class="text-3xl font-bold text-orange-800">5.0</p>
                        <p class="text-sm text-gray-600">Rating</p>
                    </div>
                </div>
            </div>

            <!-- Interaktif Donut Carousel -->
            <div class="hero-image w-full max-w-md hidden lg:block">
                <div class="carousel relative">
                    <div class="carousel-inner">
                        <img src="https://jcodonuts.com/assets/img/menu/cheese-cakelicious.webp" alt="Donut KPK 1"
                            class="w-full h-auto object-cover rounded-3xl shadow-2xl transform transition duration-500">
                        <img src="https://jcodonuts.com/assets/img/menu/candy-cane.webp" alt="Donut KPK 2"
                            class="w-full h-auto object-cover rounded-3xl shadow-2xl transform transition duration-500 hidden">
                        <img src="https://jcodonuts.com/assets/img/menu/avocado-dicaprio.webp" alt="Donut KPK 3"
                            class="w-full h-auto object-cover rounded-3xl shadow-2xl transform transition duration-500 hidden">
                    </div>
                    <button
                        class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-white text-orange-600 rounded-full p-2 hover:bg-orange-100 transition duration-300"
                        onclick="prevSlide()">❮</button>
                    <button
                        class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-white text-orange-600 rounded-full p-2 hover:bg-orange-100 transition duration-300"
                        onclick="nextSlide()">❯</button>
                </div>
            </div>
        </div>
    </section>

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-inner img');

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('hidden', i !== index);
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        // Auto slide every 5 seconds
        setInterval(nextSlide, 5000);
    </script>

    <!-- BestSeller -->
    <section class="bg-gradient-to-br from-orange-50 to-orange-100 h-screen flex items-center">
        <div
            class="container mx-auto max-w-7xl px-6 md:px-8 flex flex-col items-center justify-center h-full relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-orange-900 mb-10 md:mb-14" style="margin-bottom: 80px">
                BESTSELLER
            </h2>

            <!-- Mobile Grid -->
            <div class="grid grid-cols-2 gap-4 md:hidden">
                @foreach ($donuts->filter(fn($donut) => $donut->is_bestseller) as $donut)
                    <div
                        class="relative bg-white rounded-2xl shadow-lg transition-transform transform hover:scale-105 pt-4 pb-4 px-4 text-center mb-8">
                        <div
                            class="absolute -top-8 left-1/2 transform -translate-x-1/2 w-20 h-20 rounded-full overflow-hidden border-4 border-orange-200 shadow-xl">
                            <img src="{{ asset('storage/' . $donut->image) }}" alt="{{ $donut->description }}" class="w-full h-48 object-cover rounded-lg mb-2">
                        </div>
                        <div class="mt-12">
                            <h3 class="text-lg font-bold text-orange-900 mb-1">{{ $donut->name }}</h3>
                            <p class="text-base font-semibold text-orange-700 mb-1">Rp
                                {{ number_format($donut->price, 0, ',', '.') }}</p>
                            <p class="text-yellow-500 mb-1 text-sm">⭐⭐⭐⭐⭐</p>
                            <div class="space-y-1 text-gray-700 mb-2 text-xs">
                                <p><strong>Deskripsi:</strong> {{ Str::limit($donut->description, 40) }}</p>
                            </div>
                            <div class="flex flex-col items-center space-y-1">
                                <span
                                    class="flex items-center {{ $donut->status ? 'text-green-500' : 'text-red-500' }}">
                                    <i
                                        class="{{ $donut->status ? 'fas fa-check-circle' : 'fas fa-times-circle' }} mr-1"></i>
                                    <strong>{{ $donut->status ? 'Tersedia' : 'Habis' }}</strong>
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Desktop Grid -->
            <div class="hidden md:flex md:flex-wrap md:justify-center gap-4 md:gap-6">
                @foreach ($donuts->filter(fn($donut) => $donut->is_bestseller) as $donut)
                    <div
                        class="relative bg-white rounded-2xl shadow-xl transition-shadow hover:shadow-2xl p-4 text-center mb-10 w-full md:w-64">
                        <div
                            class="absolute -top-14 left-1/2 transform -translate-x-1/2 w-24 h-24 rounded-full overflow-hidden border-4 border-orange-200 shadow-xl">
                            <img src="{{ asset('storage/' . $donut->image) }}" alt="{{ $donut->description }}" class="w-full h-48 object-cover rounded-lg mb-2">
                        </div>
                        <div class="mt-16">
                            <h3 class="text-lg font-bold text-orange-900 mb-1">{{ $donut->name }}</h3>
                            <p class="text-base font-semibold text-orange-700 mb-1">Rp
                                {{ number_format($donut->price, 0, ',', '.') }}</p>
                            <p class="text-yellow-500 mb-2 text-sm">⭐⭐⭐⭐⭐</p>
                            <div class="space-y-1 text-gray-700 mb-3 text-xs">
                                <p><strong>Deskripsi:</strong> {{ Str::limit($donut->description, 50) }}</p>
                            </div>
                            <div class="flex flex-col items-center space-y-2">
                                <span
                                    class="flex items-center {{ $donut->status ? 'text-green-500' : 'text-red-500' }}">
                                    <i
                                        class="{{ $donut->status ? 'fas fa-check-circle' : 'fas fa-times-circle' }} mr-1"></i>
                                    <strong>{{ $donut->status ? 'Tersedia' : 'Habis' }}</strong>
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section
        class="bg-gradient-to-br from-orange-400 to-orange-600 min-h-screen flex items-center justify-center py-16 px-4 text-white text-center">
        <div class="container mx-auto">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Nikmati Kelezatan Donat KPK</h2>
            <p class="text-xl md:text-2xl mb-10 max-w-3xl mx-auto">
                Rasakan sensasi Donat KPK dengan cita rasa yang tak tertandingi.<br>
                Setiap gigitan adalah pengalaman yang tak terlupakan.
            </p>

            <div class="flex justify-center space-x-4 mb-12">
                <a href="https://shopee.co.id/universal-link/now-food/shop/21763406?deep_and_deferred=1&shareChannel=whatsapp"
                    class="bg-white text-orange-500 font-bold py-3 px-6 rounded-full hover:bg-gray-100 transition duration-300 ease-in-out transform hover:scale-105">
                    Pesan Sekarang
                </a>
                <a href="/menu"
                    class="border-2 border-white text-white font-bold py-3 px-6 rounded-full hover:bg-white hover:text-orange-500 transition duration-300 ease-in-out transform hover:scale-105">
                    Lihat Menu
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="text-center">
                    <div class="text-4xl mb-4">
                        <i class="bi bi-stars"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Premium Quality</h3>
                    <p class="text-white text-opacity-80">Bahan berkualitas tinggi untuk hasil terbaik</p>
                </div>

                <div class="text-center">
                    <div class="text-4xl mb-4">
                        <i class="bi bi-calendar3"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Fresh Daily</h3>
                    <p class="text-white text-opacity-80">Dibuat segar setiap hari untuk Anda</p>
                </div>

                <div class="text-center">
                    <div class="text-4xl mb-4">
                        <i class="bi bi-hand-thumbs-up"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Best Service</h3>
                    <p class="text-white text-opacity-80">Pelayanan terbaik untuk kepuasan Anda</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section id="footer">
        <footer class="bg-gradient-to-br from-orange-50 to-amber-100 py-16 px-4">
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Sosial Media -->
                <div class="bg-white rounded-2xl shadow-lg p-6 transform hover:scale-105 transition duration-300">
                    <h3 class="text-2xl font-bold text-orange-900 mb-4 border-b-2 border-orange-200 pb-2">
                        <i class="bi bi-share-fill mr-2 text-orange-500"></i>Sosial Media
                    </h3>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-center">
                            <i class="bi bi-instagram mr-2 text-pink-500"></i>
                            <strong>Instagram:</strong>
                            <a href="https://www.instagram.com/donat.kpk/" class="ml-2 text-blue-600">@donatkpk</a>
                        </li>
                        <li class="flex items-center">
                            <i class="bi bi-whatsapp mr-2 text-green-500"></i>
                            <strong>WhatsApp:</strong>
                            <a href="https://wa.me/6289502235919" class="ml-2 text-green-600">+62 895-0223-5919</a>
                        </li>
                    </ul>
                </div>

                <!-- Lokasi Kami -->
                <div class="bg-white rounded-2xl shadow-lg p-6 transform hover:scale-105 transition duration-300">
                    <h3 class="text-2xl font-bold text-orange-900 mb-4 border-b-2 border-orange-200 pb-2">
                        <i class="bi bi-geo-alt-fill mr-2 text-orange-500"></i>Lokasi Kami
                    </h3>
                    <div class="text-gray-700 space-y-3">
                        <p class="font-semibold">Donut KPK</p>
                        <p>
                            Jl. Danau Klp. Dua Raya No.17-35, Kabupaten, Kec. Klp. Dua, Kabupaten Tangerang, Banten
                            15810
                        </p>
                        <p class="italic text-gray-500">Depan Ayam Gepuk Pak Gembus Kelapa Dua, Tangerang</p>
                        <a href="https://maps.app.goo.gl/PUCwnXexznSn86rw7"
                            class="inline-block mt-4 bg-orange-500 text-white px-4 py-2 rounded-full hover:bg-orange-600 transition duration-300 flex items-center justify-center">
                            <i class="bi bi-map mr-2"></i>Lihat di Google Maps
                        </a>
                    </div>
                </div>

                <!-- Jam Operasional -->
                <div class="bg-white rounded-2xl shadow-lg p-6 transform hover:scale-105 transition duration-300">
                    <h3 class="text-2xl font-bold text-orange-900 mb-4 border-b-2 border-orange-200 pb-2">
                        <i class="bi bi-clock-fill mr-2 text-orange-500"></i>Jam Operasional
                    </h3>
                    <ul class="space-y-3 text-gray-700 mb-6">
                        <li class="flex justify-between">
                            <span>Senin - Jumat:</span>
                            <span class="font-semibold">08:00 - 21:00</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Sabtu:</span>
                            <span class="font-semibold">09:00 - 22:00</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Minggu:</span>
                            <span class="font-semibold">10:00 - 20:00</span>
                        </li>
                    </ul>
                    <div class="flex items-center text-green-600">
                        <i class="bi bi-check-circle-fill mr-2"></i>
                        <span>Buka Hari Ini</span>
                    </div>
                </div>
            </div>
        </footer>
    </section>
</body>

</html>
