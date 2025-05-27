@extends('admin.layouts.app')

@section('content')
<!-- Main Content -->
<div class="flex-1 p-4 sm:p-6">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
        <!-- Box 1 -->
        <div class="bg-blue-900 rounded-lg p-6 sm:p-8 text-center text-yellow-400 shadow-md hover:shadow-xl transition">
            <div class="text-lg sm:text-xl font-bold">Jumlah Pengguna</div>
            <div class="text-white text-xl sm:text-2xl mt-2">100</div>
        </div>
        <!-- Box 2 -->
        <div class="bg-blue-900 rounded-lg p-6 sm:p-8 text-center text-yellow-400 shadow-md hover:shadow-xl transition">
            <div class="text-lg sm:text-xl font-bold">Jumlah Soal Latihan</div>
            <div class="text-white text-xl sm:text-2xl mt-2">12</div>
        </div>
        <!-- Box 3 -->
        <div class="bg-blue-900 rounded-lg p-6 sm:p-8 text-center text-yellow-400 shadow-md hover:shadow-xl transition">
            <div class="text-lg sm:text-xl font-bold">Jumlah Soal Ujian Akhir</div>
            <div class="text-white text-xl sm:text-2xl mt-2">10</div>
        </div>
    </div>
</div>
@endsection