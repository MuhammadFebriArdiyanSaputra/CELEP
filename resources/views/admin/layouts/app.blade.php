<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - CELEP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white min-h-screen">
    <!-- Navbar -->
    
    <div class="bg-black py-4 px-6 flex items-center justify-between border-b-2 border-yellow-500">
        <div class="flex items-center space-x-4">
            <img src="{{ asset('img/celep1 1.png') }}" alt="Logo CELEP" class="w-10 h-10 rounded-full">
            <h1 class="text-yellow-400 text-xl font-semibold">Dashboard Admin</h1>
        </div>
        <span class="text-yellow-400 text-lg hidden md:inline">Admin</span>
        <button id="toggleSidebar" class="md:hidden text-yellow-400 focus:outline-none">
            ☰
        </button>
    </div>

    <!-- Container utama -->
    <div class="flex flex-col md:flex-row h-auto md:h-[calc(100vh-72px)]">
        <!-- Sidebar -->
        <div id="sidebar" class="w-full md:w-52 bg-black p-4 hidden md:block">
            @include('admin.layouts.sidebar')
        </div>

        <script>
            document.getElementById('toggleSidebar').addEventListener('click', function () {
                const sidebar = document.getElementById('sidebar');
                sidebar.classList.toggle('hidden');
            });
        </script>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto p-6">
            @yield('content')
        </main>
    </div>
</body>
</html>