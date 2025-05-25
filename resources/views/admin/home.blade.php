<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin - CELEP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white h-screen overflow-hidden">

    <!-- Navbar -->
    <div class="bg-black py-4 px-6 flex items-center justify-between border-b-2 border-yellow-500">
        <div class="flex items-center space-x-4">
            <img src="{{ asset('img/celep1 1.png') }}" alt="Logo CELEP" class="w-10 h-10 rounded-full">
            <h1 class="text-yellow-400 text-xl font-semibold">Dashboard Admin</h1>
        </div>
        <span class="text-yellow-400 text-lg">Admin</span>
    </div>

    <div class="flex h-[calc(100vh-72px)]">
        <!-- Sidebar -->
        <div class="bg-black w-52 h-full p-4">
            <ul class="space-y-6 mt-8 text-white font-medium text-base">
                <li class="hover:text-yellow-400 cursor-pointer flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6m-6 4h6m-6 4h6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Dashboard</span>
                </li>
                <li class="hover:text-yellow-400 cursor-pointer flex items-center space-x-2">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path d="M12 20h9M12 4h9M4 9h16M4 15h16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                  <span>Materi</span>
                </li>
                <li class="hover:text-yellow-400 cursor-pointer flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M12 8c1.657 0 3-1.343 3-3S13.657 2 12 2s-3 1.343-3 3 1.343 3 3 3zM5 21h14a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Kelola Latihan</span>
                </li>
                <li class="hover:text-yellow-400 cursor-pointer flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M12 14l9-5-9-5-9 5 9 5zm0 0v6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Kelola Ujian Akhir</span>
                </li>
                <li class="hover:text-yellow-400 cursor-pointer flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M17 20h5v-2a3 3 0 0 0-5.356-1.857M9 20H4v-2a3 3 0 0 1 5.356-1.857M12 14a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Data Pengguna</span>
                </li>
                <li class="hover:text-yellow-400 cursor-pointer flex items-center space-x-2">
                    <a href="{{ route('admin.tentang') }}" class="flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>Tentang</span>
                    </a>
                </li>
                <li class="hover:text-yellow-400 cursor-pointer flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Logout</span>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-blue-900 rounded-lg p-8 text-center text-yellow-400 shadow-lg">
                    <div class="text-xl font-bold">Jumlah Pengguna</div>
                    <div class="text-white text-2xl mt-2">100</div>
                </div>
                <div class="bg-blue-900 rounded-lg p-8 text-center text-yellow-400 shadow-lg">
                    <div class="text-xl font-bold">Jumlah Soal Latihan</div>
                    <div class="text-white text-2xl mt-2">12</div>
                </div>
                <div class="bg-blue-900 rounded-lg p-8 text-center text-yellow-400 shadow-lg">
                    <div class="text-xl font-bold">Jumlah Soal Ujian Akhir</div>
                    <div class="text-white text-2xl mt-2">10</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
