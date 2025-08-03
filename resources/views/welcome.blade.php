<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Selamat Datang di Toko Online</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="antialiased">

    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="text-center">
            <h1 class="text-3xl font-bold mb-4">Selamat Datang di Toko Online</h1>
            
            @auth
                <p class="mb-4">Halo, {{ Auth::user()->name }}</p>
                <a href="{{ route('products.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Lihat Produk</a>
                <form method="POST" action="{{ route('logout') }}" class="mt-4">
                    @csrf
                    <button type="submit" class="text-red-600 underline">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="bg-blue-500 text-white px-4 py-2 rounded mr-2">Login</a>
                <a href="{{ route('register') }}" class="bg-green-500 text-white px-4 py-2 rounded">Register</a>
            @endauth
        </div>
    </div>

</body>
</html>
