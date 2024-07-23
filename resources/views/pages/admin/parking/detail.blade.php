@extends('templates.main_admin')
@section('main')
    <div class="overflow-hidden bg-white lg:w-full px-5 mt-10 sm:mt-5 sm:ml-10">
      <!-- Greeting -->
      <h1 class="text-2xl font-bold mt-10 text-center lg:text-start">Detail Slot Parkir - {{ $parking_lot['kode_slot_parkir'] }}</h1>

      <!-- Box Infografis -->
      <form action="" class="grid grid-cols-1 my-10 px-5 sm:px-0 add-form">
        <label for="kode" class="block w-full sm:w-1/2">
          <span class="block text-md lg:text-lg font-bold text-slate-800 mb-3">Kode Slot Parkir</span>
          <input type="text" class="peer py-2 px-2 rounded-md outline-none ring-1 ring-gray-600 focus:ring-2 focus:ring-black w-full lg:w-2/3" id="kode" value="{{ $parking_lot['kode_slot_parkir'] }}" readonly />
        </label>


        <label class="block w-full sm:w-1/2 mt-5" for="letak">
          <span class="block text-md lg:text-lg font-bold text-slate-800 mb-3">Letak Parkir</span>
          <textarea id="letak" class="peer py-2 px-2 rounded-md outline-none ring-1 ring-gray-600 focus:ring-2 focus:ring-black w-full lg:w-2/3 resize-y" readonly>{{ $parking_lot['letak_parkir'] }}</textarea>
          
        </label>

        <label for="status" class="block w-full sm:w-1/2 mt-5">
          <span class="block text-md lg:text-lg font-bold text-slate-800 mb-3">Status</span>
          <input type="text" class="peer py-2 px-2 rounded-md outline-none ring-1 ring-gray-600 focus:ring-2 focus:ring-black w-full lg:w-2/3"  id="status" value="{{ ucwords($parking_lot['status']) }}" readonly/>
        </label>

        <div class="text-center lg:text-start mb-16 mt-5">
          <a href="{{ session('previous_url') }}" class="px-5 py-2 bg-red-600 border-b-[4px] border-red-700 -translate-y-[2px] font-semibold text-white rounded-md ring-1 ring-red-600 active:translate-y-0 active:border-none mt-5 w-fit inline-block">Kembali</a>
        </div>
      </form>

    </div>
@endsection