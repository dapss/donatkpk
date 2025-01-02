<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar - Donat KPK</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

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
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8" style="margin: 50px">
        <div class="text-center mb-8">
            <div class="w-32 h-32 mx-auto mb-4 bg-gradient-to-br from-orange-500 to-amber-500 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-white" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M19.739 7.45a8.406 8.406 0 0 0-1.628-2.207A8.606 8.606 0 0 0 12 3a8.613 8.613 0 0 0-6.111 2.243A8.406 8.406 0 0 0 4.26 7.45c-.054.107-.107.22-.161.333a8.576 8.576 0 0 0 .806 8.592 8.432 8.432 0 0 0 1.935 1.898l.017.012 3.345 2.245a1.399 1.399 0 0 0 1.65 0l3.345-2.245.017-.012a8.432 8.432 0 0 0 1.935-1.898 8.576 8.576 0 0 0 .806-8.592c-.054-.114-.107-.226-.161-.333Z"/>
                </svg>
            </div>
            <h1 class="text-3xl font-bold text-orange-900">Daftar Akun</h1>
            <p class="text-gray-600 mt-2">Buat akun baru di Donat KPK</p>
        </div>

        <form class="space-y-4" method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    required 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-orange-500 focus:border-orange-500"
                >
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    required 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-orange-500 focus:border-orange-500"
                >
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    required 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-orange-500 focus:border-orange-500"
                >
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                <input 
                    type="password" 
                    id="password_confirmation" 
                    name="password_confirmation" 
                    required 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-orange-500 focus:border-orange-500"
                >
            </div>

            <div>
                <button 
                    type="submit" 
                    class="w-full flex justify-center py-3 px-4 border border-transparent rounded-full shadow-sm text-sm font-semibold text-white bg-orange-500 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500"
                >
                    Daftar
                </button>
            </div>
        </form>

        <div class="mt-4 text-center text-sm text-gray-600">
            Sudah punya akun? 
            <a href="login" class="text-orange-600 hover:underline">
                Masuk Sekarang
            </a>
        </div>
    </div>
</body>
</html>