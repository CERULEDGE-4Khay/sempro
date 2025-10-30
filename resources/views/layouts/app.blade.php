<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>{{ $title ?? 'Dashboard Magang' }}</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://kit.fontawesome.com/a2e0e9b6b8.js" crossorigin="anonymous"></script>

</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
  <nav class="bg-yellow-400 shadow p-4 flex justify-between items-center fixed w-full top-0 mb-15">
      <h1 class="font-bold text-xl text-gray-800">Sistem Absensi Magang</h1>
      <div class="flex items-center gap-4">
          <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="text-red-600 hover:text-red-800 font-semibold">Logout</button>
          </form>
          <div class="text-white font-semibold"><a href="/dashboard">Home</a></div>
            <div class="text-white font-semibold"><a href="/riwayat">Riwayat</a></div>
          {{-- <span class="text-gray-700">{{ Auth::user()->name }}</span> --}}
          <a href="profile">
          <img src="{{ Auth::user()->foto ? asset('storage/'.Auth::user()->foto) : asset('image/avatar1.avif') }}" alt="Avatar" class="w-10 h-10 rounded-full border">
          </a>
      </div>
  </nav>

  <main class="flex-grow p-6">
      @yield('content')
  </main>

  <footer class="text-center py-3 text-gray-500 text-sm">
      © {{ date('Y') }} Bandung Creative Hub
  </footer>
</body>
</html>
