@extends('templates.main_admin')
@section('main')
    <div class="overflow-hidden bg-white z-10 lg:w-full w-screen flex flex-col items-center sm:items-start">
      <!-- Greeting -->
      <h1 class="sm:ml-10 text-2xl font-bold mt-20 sm:mt-10 text-center">Selamat Datang, {{ Auth::user()->name }}</h1>

      <!-- Box Infografis -->
      <div class="sm:ml-10 mt-10 flex flex-col sm:flex-row items-center flex-wrap gap-10 mb-16 w-full" >
        <div class="flex flex-col items-center w-[300px] bg-white ring-black ring-4 text-black rounded-md hover:bg-black hover:text-white transition-all duration-300 cursor-pointer">
          <h1 class="text-xl mt-5">Jumlah Parking Lot</h1>
          <h1 class="text-3xl font-bold my-5 mb-8"><?= $total_parking_lot; ?></h1>
        </div>
        <div class="flex flex-col items-center w-[300px] bg-white ring-black ring-4 text-black rounded-md hover:bg-black hover:text-white transition-all duration-300 cursor-pointer">
          <h1 class="text-xl mt-5">Jumlah Status Aktif</h1>
          <h1 class="text-3xl font-bold my-5 mb-8"><?= $total_aktif; ?></h1>
        </div>
        <div class="flex flex-col items-center w-[300px] bg-white ring-black ring-4 text-black rounded-md hover:bg-black hover:text-white transition-all duration-300 cursor-pointer">
          <h1 class="text-xl mt-5">Jumlah Status Terisi</h1>
          <h1 class="text-3xl font-bold my-5 mb-8"><?= $total_terisi; ?></h1>
        </div>
        <div class="flex flex-col items-center w-[300px] bg-white ring-black ring-4 text-black rounded-md hover:bg-black hover:text-white transition-all duration-300 cursor-pointer">
          <h1 class="text-xl mt-5">Jumlah Status Kosong</h1>
          <h1 class="text-3xl font-bold my-5 mb-8"><?= $total_kosong; ?></h1>
        </div>
        <div class="flex flex-col items-center w-[300px] bg-white ring-black ring-4 text-black rounded-md hover:bg-black hover:text-white transition-all duration-300 cursor-pointer">
          <h1 class="text-xl mt-5">Jumlah Status Perbaikan</h1>
          <h1 class="text-3xl font-bold my-5 mb-8"><?= $total_perbaikan; ?></h1>
        </div>
      </div>

    </div>
@endsection