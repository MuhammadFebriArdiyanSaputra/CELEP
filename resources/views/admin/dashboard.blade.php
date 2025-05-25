<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white min-h-screen flex">

  <!-- Sidebar -->
  <aside class="bg-black text-yellow-400 w-60 p-4 space-y-6 font-bold min-h-screen">
    <!-- Logo -->
    <div class="flex items-center space-x-2 mb-6">
      <img src="{{ asset('img/Celep1 1.png') }}" alt="Logo" class="w-10 h-10" />
    </div>

    <!-- Menu -->
    <nav class="space-y-6">
      <a href="#" class="flex items-center space-x-3 hover:text-yellow-300">
        <span class="text-2xl">⏱️</span>
        <span>Dashboard</span>
      </a>
      <a href="#" class="flex items-center space-x-3 hover:text-yellow-300">
        <span class="text-2xl">✏️</span>
        <span>Kelola Latihan</span>
      </a>
      <a href="#" class="flex items-center space-x-3 hover:text-yellow-300">
        <span class="text-2xl">📝</span>
        <span>Kelola Ujian Akhir</span>
      </a>
      <a href="#" class="flex items-center space-x-3 hover:text-yellow-300">
        <span class="text-2xl">👤</span>
        <span>Data Pengguna</span>
      </a>
      <a href="#" class="flex items-center space-x-3 hover:text-yellow-300">
        <span class="text-2xl">↩️</span>
        <span>Logout</span>
      </a>
    </nav>
  </aside>

  <!-- Main Content -->
  <div class="flex-1 p-6">
    <!-- Top bar -->
    <div class="flex justify-between items-center text-yellow-400 text-lg font-bold border-b border-yellow-400 pb-2 mb-6">
      <span>Dashboard Admin</span>
      <span>Admin</span>
    </div>

    <!-- Dashboard Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Card: Pengguna -->
      <div class="bg-blue-900 text-center rounded-lg p-4 text-yellow-400">
        <div class="text-xl font-bold mb-2">Jumlah Pengguna</div>
        <div class="text-4xl">👥</div>
        <div class="text-white text-2xl mt-2 font-semibold">100</div>
      </div>

      <!-- Card: Soal Latihan -->
      <div class="bg-blue-900 text-center rounded-lg p-4 text-yellow-400">
        <div class="text-xl font-bold mb-2">Jumlah Soal<br>Latihan</div>
        <div class="text-4xl">📄</div>
        <div class="text-white text-2xl mt-2 font-semibold">12</div>
      </div>

      <!-- Card: Soal Ujian -->
      <div class="bg-blue-900 text-center rounded-lg p-4 text-yellow-400">
        <div class="text-xl font-bold mb-2">Jumlah Soal<br>Ujian Akhir</div>
        <div class="text-4xl">📄</div>
        <div class="text-white text-2xl mt-2 font-semibold">10</div>
      </div>
    </div>
  </div>

</body>
</html>
