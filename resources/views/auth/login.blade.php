<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | Absensi Magang</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-blue-500 via-yellow-400 to-red-500 min-h-screen flex items-center justify-center">

    <div class="bg-white/80 backdrop-blur-md p-8 rounded-2xl shadow-xl w-[90%] md:w-[400px]">
        <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Login</h2>

        @if(session('error'))
            <div class="bg-red-100 text-red-700 p-2 mb-3 rounded">{{ session('error') }}</div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email"
                   class="w-full mb-4 px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-400">
            <input type="password" name="password" placeholder="Password"
                   class="w-full mb-4 px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-400">
            <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-lg">
                Login
            </button>
        </form>

        <p class="mt-4 text-center text-gray-600">
            Belum punya akun? <a href="{{ route('register') }}" class="text-blue-600 font-semibold">Daftar</a>
        </p>
    </div>

</body>
</html>
