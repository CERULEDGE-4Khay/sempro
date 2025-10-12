<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Absensi</title>
     @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-blue-500 via-yellow-400 to-red-500 min-h-screen flex flex-col justify-between">

  <!-- Bagian Tengah -->
  <div class="flex-grow flex items-center justify-center">
    <div class="bg-white/80 backdrop-blur-md rounded-2xl shadow-xl w-[90%] md:w-[700px] p-10 text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Selamat Datang di Sistem Absensi Magang</h1>
        <p class="text-gray-600 mb-8">
            Kelola data kehadiran dan informasi anak magang dengan mudah dan efisien.
        </p>
        <div class="flex flex-col md:flex-row gap-4 justify-center">
            <a href="{{ route('login') }}" 
               class="px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl transition">
               Login
            </a>
            <a href="{{ route('register') }}" 
               class="px-8 py-3 bg-yellow-500 hover:bg-yellow-600 text-white font-semibold rounded-xl transition">
               Register
            </a>
        </div>
    </div>
  </div>

</body>
 <footer class="text-center text-sm text-gray-100 mb-4">
      © {{ date('Y') }} Bandung Creative Hub — Sistem Absensi Magang
  </footer>
</html>