<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Donat KPK</title>
    
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

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
</head>

<body class="min-h-screen bg-orange-50">
    <!-- Navigation -->
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

                @can('isAdmin')
                    <a href="{{ route('menu.create') }}"
                        class="text-white font-semibold hover:text-orange-100 transition duration-300 ease-in-out relative group">
                        Add Menu
                        <span
                            class="absolute bottom-0 left-0 w-full h-0.5 bg-white transform scale-x-0 group-hover:scale-x-100 transition duration-300"></span>
                    </a>
                @endcan

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
                @can('isAdmin')
                <a href="{{ route('menu.create') }}" class="block text-white py-2 hover:bg-orange-600 rounded">Add Menu</a>
                @endcan
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

    <!-- Search Bar -->
    <div class="flex justify-center mt-6">
        <form action="{{ route('menu.search') }}" method="GET" class="relative flex items-center w-full max-w-md">
            <input type="text" name="query" placeholder="Cari donat, glaze, atau topping..." class="w-full pl-4 pr-10 py-2 rounded-full shadow focus:outline-none focus:ring-2 focus:ring-orange-500">
            <button type="submit" class="absolute right-2 text-orange-500 hover:text-orange-600">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>
    
<!-- Menu Section -->
<!-- Menu Section -->
<section class="menu min-h-screen py-2 px-4 md:px-6 bg-orange-50">
    <div class="flex justify-center mb-8">
        <button id="btn-donat-kpk" class="btn bg-orange-500 text-white font-bold py-2 px-4 rounded-l hover:bg-orange-600 transition duration-300" onclick="showSection('donat-kpk')">Pilihan Donat KPK</button>
        <button id="btn-glaze" class="btn bg-orange-300 text-white font-bold py-2 px-4 hover:bg-orange-400 transition duration-300" onclick="showSection('glaze-options')">Pilih Glaze</button>
        <button id="btn-topping" class="btn bg-orange-300 text-white font-bold py-2 px-4 rounded-r hover:bg-orange-400 transition duration-300" onclick="showSection('topping-options')">Pilih Topping</button>
    </div>

    <!-- Donat Section -->
    <div id="donat-kpk" class="menu-list grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-8">
        @foreach ($donuts as $donut)
            <div class="menu-item bg-white rounded-lg shadow-lg p-4 flex flex-col items-center">
                <img src="{{ asset('storage/' . $donut->image) }}" alt="{{ $donut->description }}" class="w-full h-48 object-cover rounded-lg mb-2">
                <div class="text-center flex-1">
                    <h3 class="text-lg font-semibold mb-1">{{ $donut->name }}</h3>
                    <p class="text-gray-600 mb-1">{{ $donut->description }}</p>
                    <p class="text-md font-bold">Harga: Rp {{ number_format($donut->price, 0, ',', '.') }}</p>
                </div>
                <div class="flex justify-center items-center mt-2">
                    @if ($donut->status)
                        <span class="text-green-500 font-bold flex items-center">
                            <i class="fas fa-check-circle mr-1"></i> Tersedia
                        </span>
                    @else
                        <span class="text-red-500 font-bold flex items-center">
                            <i class="fas fa-times-circle mr-1"></i> Habis
                        </span>
                    @endif
                </div>
                @can('isAdmin')
                    <div class="flex justify-center space-x-2 mt-4">
                        <button onclick="window.location.href='{{ route('menu.edit', $donut->id_donut) }}'" class="btn bg-yellow-400 text-white rounded-full p-2 hover:bg-yellow-500 transition duration-300" style="width: 150px" title="Edit">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <form action="{{ route('delete', $donut->id_donut) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn bg-red-600 text-white rounded-full p-2 hover:bg-red-700 transition duration-300" style="width: 150px" title="Delete">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                @endcan
            </div>
        @endforeach
    </div>

    <!-- Glaze Section -->
    <div id="glaze-options" class="menu-list hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-8">
        @foreach ($glazes as $glaze)
            <div class="menu-item bg-white rounded-lg shadow-lg p-4 flex flex-col items-center">
                <img src="{{ asset('storage/' . $glaze->image) }}" alt="{{ $glaze->description }}" class="w-full h-48 object-cover rounded-lg mb-2">
                <div class="text-center flex-1">
                    <h3 class="text-lg font-semibold mb-1">{{ $glaze->name }}</h3>
                    <p class="text-gray-600 mb-1">{{ $glaze->description }}</p>
                    <p class="text-md font-bold">Harga: Rp {{ number_format($glaze->price, 0, ',', '.') }}</p>
                </div>
                <div class="flex justify-center items-center mt-2">
                    @if ($glaze->status)
                        <span class="text-green-500 font-bold flex items-center">
                            <i class="fas fa-check-circle mr-1"></i> Tersedia
                        </span>
                    @else
                        <span class="text-red-500 font-bold flex items-center">
                            <i class="fas fa-times-circle mr-1"></i> Habis
                        </span>
                    @endif
                </div>
                @can('isAdmin')
                    <div class="flex justify-center space-x-2 mt-4">
                        <button onclick="window.location.href='{{ route('editGlaze', $glaze->id_glaze) }}'" class="btn bg-yellow-400 text-white rounded-full p-2 hover:bg-yellow-500 transition duration-300" style="width: 150px" title="Edit">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <form action="{{ route('destroyGlaze', $glaze->id_glaze) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn bg-red-600 text-white rounded-full p-2 hover:bg-red-700 transition duration-300" style="width: 150px" title="Delete">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                @endcan
            </div>
        @endforeach
    </div>

    <!-- Topping Section -->
    <div id="topping-options" class="menu-list hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-8">
        @foreach ($toppings as $topping)
            <div class="menu-item bg-white rounded-lg shadow-lg p-4 flex flex-col items-center">
                <img src="{{ asset('storage/' . $topping->image) }}" alt="{{ $topping->description }}" class="w-full h-48 object-cover rounded-lg mb-2">
                <div class="text-center flex-1">
                    <h3 class="text-lg font-semibold mb-1">{{ $topping->name }}</h3>
                    <p class="text-gray-600 mb-1">{{ $topping->description }}</p>
                    <p class="text-md font-bold">Harga: Rp {{ number_format($topping->price, 0, ',', '.') }}</p>
                </div>
                <div class="flex justify-center items-center mt-2">
                    @if ($topping->status)
                        <span class="text-green-500 font-bold flex items-center">
                            <i class="fas fa-check-circle mr-1"></i> Tersedia
                        </span>
                    @else
                        <span class="text-red-500 font-bold flex items-center">
                            <i class="fas fa-times-circle mr-1"></i> Habis
                        </span>
                    @endif
                </div>
                @can('isAdmin')
                    <div class="flex justify-center space-x-2 mt-4">
                        <button onclick="window.location.href='{{ route('editTopping', $topping->id_topping) }}'" class="btn bg-yellow-400 text-white rounded-full p-2 hover:bg-yellow-500 transition duration-300" style="width: 150px" title="Edit">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <form action="{{ route('destroyTopping', $topping->id_topping) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn bg-red-600 text-white rounded-full p-2 hover:bg-red-700 transition duration-300" style="width: 150px" title="Delete">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                @endcan
            </div>
        @endforeach
    </div>
</section>

    <script>
        function showSection(section) {
            const sections = {
                "donat-kpk": document.getElementById('donat-kpk'),
                "glaze-options": document.getElementById('glaze-options'),
                "topping-options": document.getElementById('topping-options')
            };

            const buttons = {
                "btn-donat-kpk": document.getElementById('btn-donat-kpk'),
                "btn-glaze": document.getElementById('btn-glaze'),
                "btn-topping": document.getElementById('btn-topping')
            };

            // Hide all sections and reset button styles
            Object.keys(sections).forEach(key => sections[key]?.classList.add('hidden'));
            Object.keys(buttons).forEach(key => {
                buttons[key]?.classList.remove('bg-orange-500', 'hover:bg-orange-600');
                buttons[key]?.classList.add('bg-orange-300', 'hover:bg-orange-400');
            });

            // Show the selected section and highlight the corresponding button
            sections[section]?.classList.remove('hidden');
            const buttonKey = `btn-${section.split('-')[0]}`; // Match button ID dynamically
            buttons[buttonKey]?.classList.add('bg-orange-500', 'hover:bg-orange-600');
            buttons[buttonKey]?.classList.remove('bg-orange-300', 'hover:bg-orange-400');
        }

        // Initialize by showing the first section
        showSection('donat-kpk');
    </script>
</body>

</html>