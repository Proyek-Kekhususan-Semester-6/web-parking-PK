@extends('templates.main_admin')
@section('main')
    <div class="overflow-hidden bg-white lg:w-full px-5 mt-10 sm:mt-5 sm:ml-10">
      <!-- Greeting -->
      <h1 class="text-2xl font-bold mt-10 text-center lg:text-start">Tambah Data Parking Lot</h1>

      <!-- Box Infografis -->
      <form action="/dashboard/parking_lots/store" class="grid grid-cols-1 my-10 px-5 sm:px-0 add-form" method="post">
        @csrf
        <label for="kode" class="block w-full sm:w-1/2">
          <span class="block text-md lg:text-lg font-bold text-slate-800 mb-3">Kode Slot Parkir</span>
          <input type="text" class="peer py-2 px-2 rounded-md outline-none ring-1 {{ $errors->has('kode_slot_parkir') ? 'ring-red-600' : 'ring-gray-600' }} focus:ring-2 focus:ring-black w-full lg:w-2/3" name="kode_slot_parkir" id="kode" value="{{ old('kode_slot_parkir') }}" placeholder="P-A001"  />
          @error('kode_slot_parkir')
            <p class="mt-2  text-md lg:text-lg text-red-500">
              {{ $message }} 
            </p>
          @enderror
        </label>


        <label class="block w-full sm:w-1/2 mt-5" for="letak">
          <span class="block text-md lg:text-lg font-bold text-slate-800 mb-3">Letak Parkir</span>
          <textarea name="letak_parkir" id="letak" class="peer py-2 px-2 rounded-md outline-none ring-1 {{ $errors->has('kode_slot_parkir') ? 'ring-red-600' : 'ring-gray-600' }} focus:ring-2 focus:ring-black w-full lg:w-2/3 resize-y " placeholder="Dekat pintu masuk lobby barat">{{ old('letak_parkir') }}</textarea>
          @error('letak_parkir')
            <p class="mt-2 text-md lg:text-lg text-red-500">
              {{ $message }}
            </p>
          @enderror
        </label>


        <div class="text-center lg:text-start mb-16 mt-5">
          <a href="/dashboard/parking_lots" class="mr-3 px-5 py-2 bg-red-600 border-b-[4px] border-red-700 -translate-y-[2px] font-semibold text-white rounded-md ring-1 ring-red-600 active:translate-y-0 active:border-none mt-5 w-fit inline-block">Kembali</a>

          <button type="submit" name="add-btn" class="px-5 py-2 bg-green-600 border-b-[4px] border-green-700 -translate-y-[2px] font-semibold text-white rounded-md ring-1 ring-green-600 active:translate-y-0 active:border-none mt-5 w-fit cursor-pointer">Tambah</button>
        </div>


      </form>

    </div>
@endsection