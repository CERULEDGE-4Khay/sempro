<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register | Absensi Magang</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-yellow-400 via-blue-400 to-red-500 min-h-screen flex items-center justify-center">

    <div class="bg-white/80 backdrop-blur-md p-8 rounded-2xl shadow-xl w-[90%] md:w-[400px]">
        <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Register</h2>

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Nama Lengkap"
                   class="w-full mb-4 px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-400">
            <input type="email" name="email" placeholder="Email"
                   class="w-full mb-4 px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-400">
            <input type="password" name="password" placeholder="Password"
                   class="w-full mb-4 px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-400">
            <input type="password" name="password_confirmation" placeholder="Konfirmasi Password"
                   class="w-full mb-4 px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-yellow-400">

            <button type="submit"
                    class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 rounded-lg">
                Register
            </button>
        </form>

        <p class="mt-4 text-center text-gray-600">
            Sudah punya akun? <a href="{{ route('login') }}" class="text-yellow-600 font-semibold">Login</a>
        </p>
    </div>

</body>
</html>
