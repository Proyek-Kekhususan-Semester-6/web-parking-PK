@extends('templates.main_admin')
@section('main')
    <div class="overflow-hidden bg-white lg:w-full px-5 mt-10 sm:mt-5 sm:ml-10">
      <!-- Greeting -->
      <h1 class="text-2xl font-bold mt-10 text-center lg:text-start">Edit Slot Parkir - {{ $parking_lot['kode_slot_parkir'] }}</h1>

      <!-- Box Infografis -->
      <form action="/dashboard/parking_lots/update/{{ $parking_lot['id_slot_parkir'] }}" class="grid grid-cols-1 my-10 px-5 sm:px-0" method="post" id="edit-form">
        @csrf
        <label for="kode" class="block w-full sm:w-1/2">
          <span class="block text-md lg:text-lg font-bold text-slate-800 mb-3">Kode Slot Parkir</span>
          <input type="text" class="peer py-2 px-2 rounded-md outline-none ring-1 {{ $errors->has('kode_slot_parkir') ? 'ring-red-600' : 'ring-gray-600' }} focus:ring-2 focus:ring-black w-full lg:w-2/3" name="kode_slot_parkir" id="kode" value="{{ $parking_lot['kode_slot_parkir'] }}" placeholder="P-A001"  />
          @error('kode_slot_parkir')
            <p class="mt-2  text-md lg:text-lg text-red-500">
              {{ $message }} 
            </p>
          @enderror
        </label>


        <label class="block w-full sm:w-1/2 mt-5" for="letak">
          <span class="block text-md lg:text-lg font-bold text-slate-800 mb-3">Letak Parkir</span>
          <textarea name="letak_parkir" id="letak" class="peer py-2 px-2 rounded-md outline-none ring-1 {{ $errors->has('letak_parkir') ? 'ring-red-600' : 'ring-gray-600' }} focus:ring-2 focus:ring-black w-full lg:w-2/3 resize-y " placeholder="Dekat pintu masuk lobby barat">{{ $parking_lot['letak_parkir'] }}</textarea>
          @error('letak_parkir')
            <p class="mt-2 text-md lg:text-lg text-red-500">
              {{ $message }}
            </p>
          @enderror
        </label>

        <label class="block w-full sm:w-1/2 mt-5" for="status">
          <span class="block text-md lg:text-lg font-bold text-slate-800 mb-3">Status</span>
          <select class="peer py-2 px-2 rounded-md outline-none ring-1 {{ $errors->has('status') ? 'ring-red-600' : 'ring-gray-600' }} focus:ring-2 focus:ring-black w-full lg:w-2/3" name="status" id="status">
            <option disabled value="">-- Pilih salah satu --</option>
            @if($parking_lot['status'] == "terisi")
              <option selected value="terisi">Terisi</option>
              <option value="kosong">Kosong</option>
              <option value="perbaikan">Perbaikan</option>
            @endif
            @if($parking_lot['status'] == "kosong")
              <option value="terisi">Terisi</option>
              <option selected value="kosong">Kosong</option>
              <option value="perbaikan">Perbaikan</option>
            @endif
            @if($parking_lot['status'] == "perbaikan")
              <option value="terisi">Terisi</option>
              <option value="kosong">Kosong</option>
              <option selected value="perbaikan">Perbaikan</option>
            @endif
          </select>
          @error('status')
            <p class="mt-2 text-md lg:text-lg text-red-500">
              {{ $message }}
            </p>
          @enderror
        </label>


        <div class="text-center lg:text-start mb-16 mt-5">
          <a href="/dashboard/parking_lots" class="mr-3 px-5 py-2 bg-red-600 border-b-[4px] border-red-700 -translate-y-[2px] font-semibold text-white rounded-md ring-1 ring-red-600 active:translate-y-0 active:border-none mt-5 w-fit inline-block">Kembali</a>

          <button type="submit" name="add-btn" class="px-5 py-2 bg-green-600 border-b-[4px] border-green-700 -translate-y-[2px] font-semibold text-white rounded-md ring-1 ring-green-600 active:translate-y-0 active:border-none mt-5 w-fit cursor-pointer" id="btn-update">Ubah</button>
        </div>


      </form>

    </div>

@endsection