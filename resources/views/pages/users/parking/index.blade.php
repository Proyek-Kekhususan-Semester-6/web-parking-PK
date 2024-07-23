@extends('templates.main_users')

@section('main')
   <div class="w-full flex flex-col items-center ">
      <div class="sticky top-0 sm:block w-full px-10 flex flex-col sm:items-start items-center pb-5 sm:pb-10 bg-white">
         <h1 class="text-2xl w-fit font-bold mt-10  px-3 py-2 bg-slate-600 text-white rounded-md sm:hidden">Parking Slots</h1>
               
         {{-- Search --}}
         <div class="w-full flex justify-center items-center">
            <div class="mt-10 w-[800px] sm:flex sm:justify-between sm:mt-48 relative">
               <form action="/parking-lots" method="GET" class="w-full sm:w-[400px]  justify-between items-center sm:justify-start hidden sm:flex">
                  @if ($filter_selected === "all")
                     <select class="select select-bordered w-[200px] max-w-xs font-bold" id="filter-parking" name="filter">
                  @endif
                  @if ($filter_selected === "terisi")
                     <select class="select select-bordered w-[200px] max-w-xs font-bold bg-red-300" id="filter-parking" name="filter">
                  @endif
                  @if ($filter_selected === "kosong")
                     <select class="select select-bordered w-[200px] max-w-xs font-bold bg-green-300" id="filter-parking" name="filter">
                  @endif
                     @if ($filter_selected === "all")
                        <option value="all" class="bg-white" selected>Semua</option>
                        <option value="terisi" class="bg-white">Terisi</option>
                        <option value="kosong" class="bg-white">Kosong</option>
                     @endif
                     @if ($filter_selected === "terisi")
                        <option value="all" class="bg-white">Semua</option>
                        <option value="terisi" class="bg-white" selected>Terisi</option>
                        <option value="kosong" class="bg-white">Kosong</option>
                     @endif
                     @if ($filter_selected === "kosong")
                        <option value="all" class="bg-white">Semua</option>
                        <option value="terisi" class="bg-white">Terisi</option>
                        <option value="kosong" class="bg-white" selected>Kosong</option>
                     @endif
   
                  </select>
                  <button type="submit" class="btn btn-neutral sm:ml-5">Filter</button>
               </form>
               <form action="/search_parkir" class="flex justify-between sm:w-[400px] sm:justify-end items-center " method="GET">
                  <input type="text" placeholder="Search Parking Lot" class="input input-md w-[68%] max-w-xs border-black sm:mr-5" name="keyword" />
                  <button class="btn btn-active btn-neutral inline-block" type="submit">Search</button>
               </form>
            </div>
         </div>

         {{-- Filter --}}
         <div class="w-full flex justify-center items-center sm:mt-16 mt-10 sm:hidden">
            <form action="/parking-lots" method="GET" class="w-full sm:w-[800px]  flex justify-between items-center sm:justify-end">
               @if ($filter_selected === "all")
                  <select class="select select-bordered w-[200px] max-w-xs font-bold" id="filter-parking-m" name="filter">
               @endif
               @if ($filter_selected === "terisi")
                  <select class="select select-bordered w-[200px] max-w-xs font-bold bg-red-300" id="filter-parking-m" name="filter">
               @endif
               @if ($filter_selected === "kosong")
                  <select class="select select-bordered w-[200px] max-w-xs font-bold bg-green-300" id="filter-parking-m" name="filter">
               @endif
                  @if ($filter_selected === "all")
                     <option value="all" class="bg-white" selected>Semua</option>
                     <option value="terisi" class="bg-white">Terisi</option>
                     <option value="kosong" class="bg-white">Kosong</option>
                  @endif
                  @if ($filter_selected === "terisi")
                     <option value="all" class="bg-white">Semua</option>
                     <option value="terisi" class="bg-white" selected>Terisi</option>
                     <option value="kosong" class="bg-white">Kosong</option>
                  @endif
                  @if ($filter_selected === "kosong")
                     <option value="all" class="bg-white">Semua</option>
                     <option value="terisi" class="bg-white">Terisi</option>
                     <option value="kosong" class="bg-white" selected>Kosong</option>
                  @endif

               </select>
               <button type="submit" class="btn btn-neutral sm:ml-5">Filter</button>
            </form>
         </div>
      </div>
      

      {{-- Card Parking Lot --}}
      <div class="grid grid-cols-2 gap-4 w-full sm:w-[800px] mb-96 px-10">
         @foreach ($slots as $slot)
             <div class="w-full h-[170px] sm:h-[200px] flex flex-col justify-between items-center rounded-xl border-black border-2 overflow-hidden cursor-pointer" onclick="my_{{ $slot['id_slot_parkir'] }}.showModal()">
               <div class="w-full h-[80%] {{ $slot['status'] === "terisi" ? "bg-red-600" : "bg-green-600" }} text-white flex items-center justify-center">
                  <span class="font-semibold sm:text-xl">{{ ucwords($slot['status']) }}</span>
               </div>
               <div class="w-full h-[20%] flex justify-center items-center ">
                  <p class="font-semibold">{{ $slot['kode_slot_parkir'] }}</p>
               </div>
            </div>
            <dialog id="my_{{ $slot['id_slot_parkir'] }}" class="modal modal-middle">
               <div class="modal-box">
                  <h3 class="text-lg font-bold">{{ $slot['kode_slot_parkir'] }}</h3>
                  <table class="my-5">
                     <tr>
                        <td>Status</td>
                        <td class="px-5">:</td>
                        <td><span class="px-3 {{ $slot['status'] === "terisi" ? "bg-slate-600" : "bg-yellow-600" }} rounded-full text-white">{{ $slot['status'] }}</span></td>
                     </tr>
                     <tr>
                        <td>Letak</td>
                        <td class="px-5">:</td>
                        <td><p>{{ $slot['letak_parkir'] }}</p></td>
                     </tr>
                  </table>
                  <div class="modal-action">
                     {{-- <button class="btn bg-orange-500 text-white active:bg-orange-600 hover:bg-orange-600">Book</button> --}}
                     <form method="dialog">
                        <!-- if there is a button in form, it will close the modal -->
                        <button class="btn bg-gray-500 text-white active:bg-gray-600 hover:bg-gray-600">Close</button>
                     </form>
                  </div>
               </div>
            </dialog>
         @endforeach
      </div>

      {{-- Modal --}}


   </div>

@endsection