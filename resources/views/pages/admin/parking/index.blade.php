@extends('templates.main_admin')
@php
    $no = 0;
@endphp
@section('main')
    <div class="overflow-hidden bg-white lg:w-full w-screen px-5">
      <!-- Header Info -->
      <h1 class="text-2xl font-bold mt-10 text-center lg:text-start">Tabel Parking Lot</h1>

      <!-- Fungsional -->
      <div class="flex flex-col sm:flex-row sm:items-center justify-between my-10 flex-wrap ">
        <a href="/dashboard/parking_lots/create" class="px-5 py-2 bg-gray-300 text-black border-b-[4px] border-gray-500 rounded-md -translate-y-[4px] active:translate-y-0 active:border-none  transition-all duration-100 capitalize font-bold flex items-center justify-center self-start"><img src="/assets/dashboard/parking-add.png" alt="" class="w-[20px] h-[20px]"><span class="ml-2">Tambah Parking Lot</span></a>
        <form action="/dashboard/parking_lots" method="get" class="mt-5 sm:mt-0">
          <input type="text" name="keyword" id="" class="py-2 px-2 rounded-md outline-none ring-1 ring-gray-600 focus:ring-2 focus:ring-black mr-2" placeholder="Masukkan kata pencarian">
          <button type="submit" class="px-5 py-2 bg-gray-600 border-b-[4px] border-gray-700 -translate-y-[2px] font-semibold text-white rounded-md ring-1 ring-gray-600 active:translate-y-0 active:border-none">Cari</button>
        </form>
      </div>

      <!-- Tabel -->
      <div class="overflow-auto w-full h-[390px] rounded-md shadow-md shadow-neutral-500 p-3">
        <table class="table table-lg w-full whitespace-nowrap table-pin-rows" cellpadding="10">
          <!-- head -->
          <thead>
            <tr class="sticky top-0 z-5">
              <th class="border border-black border-3 bg-gray-400 text-white text-center text-[18px]">No.</th>
              <th class="border border-black border-3 bg-gray-400 text-white text-center text-[18px]">Kode Parking Lot</th>
              <th class="border border-black border-3 bg-gray-400 text-white text-center text-[18px]">Status</th>
              <th class="border border-black border-3 bg-gray-400 text-white text-center text-[18px]">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            @if ($parking_lots->count())
                @foreach ($parking_lots as $parking)
                  <tr>
                    <th class="border border-black border-3 text-center">{{ ($parking_lots->currentPage() - 1) * $parking_lots->perPage() + $loop->iteration }}</th>
                    <td class="border border-black border-3">{{ $parking["kode_slot_parkir"] }}</td>
                    <td class="border border-black border-3 text-center"><span class="px-3 py-2 rounded-md {{ $parking["status"] == "perbaikan" ? "bg-red-600" : ($parking["status"] == "terisi" ? "bg-yellow-600" : "bg-green-600") }}  text-white">{{ ucwords($parking["status"]) }}</span></td>
                    <td class="border border-black border-3 p-5 text-center">
                      <a href="/dashboard/parking_lots/detail/{{ $parking["id_slot_parkir"] }}" class="px-5 py-2 bg-blue-600 font-semibold text-white rounded-md ring-1 ring-blue-600">Lihat</a>
                      <a href="/dashboard/parking_lots/edit/{{ $parking["id_slot_parkir"] }}" class="px-5 py-2 bg-yellow-400 font-semibold text-white rounded-md ring-1 ring-yellow-400">Edit</a>
                      <a href="/dashboard/parking_lots/delete/{{ $parking["id_slot_parkir"] }}" class="px-5 py-2 bg-red-600 font-semibold text-white rounded-md ring-1 ring-red-600 btn-delete">Hapus</a>
                    </td>
                  </tr>

                @endforeach
            @else
                <tr class="text-center">
                  <th colspan="4">
                    <p>Data tidak ditemukan</p>
                  </th>
                </tr>
            @endif
            
          </tbody>
        </table>
      </div>

      <!-- Pagination -->
      <div class="mt-5 mb-16">
        {{ $parking_lots->appends(['keyword' => $keyword])->links("components.pagination") }}
      </div>
    </div>
@endsection