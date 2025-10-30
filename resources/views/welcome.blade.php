<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Absensi</title>
     @vite('resources/css/app.css')
      <style>
        /* CSS kustom untuk menetapkan gambar latar belakang */
        .bg-creative-space {
            /* Ganti dengan URL gambar profesional yang Anda inginkan. 
               Saya menggunakan gambar ruang kerja yang modern sebagai contoh. */
            background-image: url('/image/image-bch.jpg');
        }
    </style>
</head>
<body class="min-w-screen min-h-screen flex flex-col relative font-sans">
    <div class="absolute inset-0 z-0 bg-creative-space bg-cover bg-center">
        <!-- 1a. Shadow/Dark Overlay (Bayangan Hitam) -->
        <!-- bg-black/60 memberikan lapisan hitam semi-transparan untuk kontras yang lebih baik. -->
        <div class="absolute inset-0 bg-black/60"></div>
        
        <!-- 1b. Blur Filter (Efek Blur) -->
        <!-- backdrop-blur-md memberikan efek blur pada gambar di bawahnya. -->
        <div class="absolute inset-0 backdrop-blur-sm"></div>
    </div>
  <!-- Bagian Tengah -->
  <div class="flex-grow flex items-center justify-center relative z-10 p-4">
    <div class="items-center w-full">
      <img src="image/logo-bch3.png" alt="logo" class="h-30 object-cover bg-slate-50 mx-auto mb-10 md:mb-15 rounded-4xl">
          <div class="bg-white/90 backdrop-blur-md rounded-3xl shadow-2xl max-w-[95%] md:max-w-[700px] mx-auto p-8 md:p-12 text-center 
                    transform transition duration-500 hover:shadow-3xl border border-white/30">
          
          <h1 class="text-3xl md:text-4xl font-extrabold text-yellow-700 mb-4 animate-pulse">Selamat Datang di Sistem Absensi Magang</h1>
          
          <p class="text-gray-700 mb-10 text-md font-light">
              Kelola data kehadiran dan informasi anak magang dengan mudah dan efisien.
          </p>
          
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <!-- Tombol Login (menggunakan # sebagai placeholder untuk route Laravel) -->
            <a href="{{ route('login') }}" 
               class="px-10 py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-[1.02] text-lg">
                Login
            </a>
            <!-- Tombol Register (menggunakan # sebagai placeholder untuk route Laravel) -->
            <a href="{{ route('register') }}" 
               class="px-10 py-3 bg-yellow-500 hover:bg-yellow-600 text-white font-bold rounded-xl shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-[1.02] text-lg">
                Register
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer - Teks diubah menjadi putih (text-gray-200) agar terlihat di background gelap -->
    <footer class="text-center text-sm text-gray-200 mt-auto p-4 relative z-10">
        <!-- Menggunakan '2024' sebagai placeholder tahun -->
        © 2024 Bandung Creative Hub — Sistem Absensi Magang
    </footer>
</body>
</html>