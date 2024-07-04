@extends('templates.main_users')
@php
    function createSlotCode($id){
      for ($i = 1; $i <= 20; $i++) {
         // Menggunakan sprintf untuk menambahkan nol di depan angka
         $formattedNumber = sprintf("%03d", $i);
         echo $formattedNumber . "\n";
      }
    }
@endphp
@section('main')
   <div class="w-full flex flex-col items-center">
      <div class="sticky top-0 bg-white w-full px-10 flex flex-col items-center pb-5">
         <h1 class="text-2xl w-fit font-bold mt-10 px-3 py-2 bg-red-600 text-white rounded-md">Parking Slots</h1>
               
         {{-- Search --}}
         <div class="mt-10 w-full">
            <form action="" class="flex justify-between items-center ">
               <input type="text" placeholder="Search Parking Lot" class="input input-md w-[68%] max-w-xs border-black" />
               <button class="btn btn-active btn-neutral inline-block" type="submit">Search</button>
            </form>
         </div>
      </div>
      

      {{-- Card Parking Lot --}}
      <div class="grid grid-cols-2 gap-4 w-full mb-96 px-10">
         @foreach ($slots as $slot)
             <div class="w-full h-[170px] flex flex-col justify-between items-center rounded-xl border-black border-2 overflow-hidden" onclick="my_modal_5.showModal()">
               <div class="w-full h-[80%] {{ $slot['status'] === "terisi" ? "bg-slate-600" : "bg-yellow-600" }} text-white flex items-center justify-center">
                  <span class="font-semibold">{{ ucwords($slot['status']) }}</span>
               </div>
               <div class="w-full h-[20%] flex justify-center items-center ">
                  <p class="font-semibold">P - A{{ str_pad($slot['id_slot_parkir'], 3, '0', STR_PAD_LEFT) }}</p>
               </div>
            </div>
         @endforeach
      </div>

      {{-- Modal --}}
      <dialog id="my_modal_5" class="modal modal-middle">
         <div class="modal-box">
            <h3 class="text-lg font-bold">P - A01</h3>
            <table class="my-5">
               <tr>
                  <td>Status</td>
                  <td class="px-5">:</td>
                  <td><span class="px-3 bg-slate-600 rounded-full text-white">Terisi</span></td>
               </tr>
               <tr>
                  <td>Jam Pesan Awal</td>
                  <td class="px-5">:</td>
                  <td><span>15:00</span></td>
               </tr>
               <tr>
                  <td>Jam Pesan Berakhir</td>
                  <td class="px-5">:</td>
                  <td><span>17:00 (2 Jam)</span></td>
               </tr>
            </table>
            <div class="modal-action">
               <button class="btn bg-orange-500 text-white active:bg-orange-600 hover:bg-orange-600">Book</button>
               <form method="dialog">
                  <!-- if there is a button in form, it will close the modal -->
                  <button class="btn bg-gray-500 text-white active:bg-gray-600 hover:bg-gray-600">Close</button>
               </form>
            </div>
         </div>
      </dialog>

   </div>

@endsection