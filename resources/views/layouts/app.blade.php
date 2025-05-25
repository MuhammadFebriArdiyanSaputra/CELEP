<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - CELEP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white min-h-screen">
    <!-- Navbar -->
    <div class="bg-black py-4 px-6 flex items-center justify-between border-b-2 border-yellow-500">
        <div class="flex items-center space-x-4">
            <img src="{{ asset('img/celep1 1.png') }}" alt="Logo CELEP" class="w-10 h-10 rounded-full">
            <h1 class="text-yellow-400 text-xl font-semibold">Dashboard Admin</h1>
        </div>
        <span class="text-yellow-400 text-lg">Admin</span>
    </div>

    <div class="flex">
        <!-- Sidebar -->
        <div class="bg-black w-52 h-full p-4">
            @include('partials.sidebar') <!-- Pisahkan sidebar agar bisa dipakai ulang -->
        </div>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto p-6">
            @yield('content')
        </main>
    </div>
</body>
</html>
