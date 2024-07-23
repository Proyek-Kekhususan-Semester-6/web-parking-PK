@extends('templates.main_users')
@section('main')
   <div class="w-full flex flex-col items-center mb-96">
      <h1 class="text-center mt-5 py-2 px-3 text-2xl font-bold bg-slate-600 rounded-md text-white sm:hidden">Analisis Sentimen</h1>
      {{-- Box Infografis Analisis Sentimen --}}
      <div class="w-full px-5 py-5 flex items-center justify-evenly sm:w-[80%] sm:mt-40">
         <div class="flex flex-col items-center justify-center">
            <h1 class="my-3 font-semibold">Positif ({{ $positive_sentiments }})</h1>
            <div class="radial-progress text-green-700" style="--value:{{ round(($positive_sentiments / $total_sentiments) * 100) }};" role="progressbar">{{ round(($positive_sentiments / $total_sentiments) * 100) }}%</div>
         </div>
         <div class="flex flex-col items-center justify-center">
            <h1 class="my-3 font-semibold">Netral ({{ $neutral_sentiments }})</h1>
            <div class="radial-progress text-slate-700" style="--value:{{ round(($neutral_sentiments / $total_sentiments) * 100) }};" role="progressbar">{{ round(($neutral_sentiments / $total_sentiments) * 100) }}%</div>
         </div>
         <div class="flex flex-col items-center justify-center">
            <h1 class="my-3 font-semibold">Negatif ({{ $negative_sentiments }})</h1>
            <div class="radial-progress text-red-700" style="--value:{{ round(($negative_sentiments / $total_sentiments) * 100) }};" role="progressbar">{{ round(($negative_sentiments / $total_sentiments) * 100) }}%</div>
         </div>
      </div>

      <div class="my-10 w-full px-10 sm:w-[600px]">
         <div class="w-full flex flex-col justify-between items-center ">
            <textarea class="textarea textarea-bordered w-full outline-black sm:h-[100px]" placeholder="Ulasan anda" id="text-ulasan"></textarea>
            <button class="btn btn-active btn-neutral mt-5 w-full" type="button" onclick="getSentimentFromAPI()"><span class="loading loading-spinner text-white hidden" id="loading-bar"></span><span class="" id="text-kirim">Kirim</span></button>
         </div>
      </div>

      <div class="w-full flex justify-center items-center mb-10 sm:w-[600px] sm:justify-end sm:mt-16">
         <form action="/sentiment" method="GET" class="w-[80%] flex justify-between items-center sm:justify-end">
               @if ($filter_selected === "all")
                  <select class="select select-bordered w-[200px] max-w-xs font-bold" id="filter-sentimen" name="filter">
               @endif
               @if ($filter_selected === "positif")
                  <select class="select select-bordered w-[200px] max-w-xs font-bold bg-green-300" id="filter-sentimen" name="filter">
               @endif
               @if ($filter_selected === "netral")
                  <select class="select select-bordered w-[200px] max-w-xs font-bold bg-slate-300" id="filter-sentimen" name="filter">
               @endif
               @if ($filter_selected === "negatif")
                  <select class="select select-bordered w-[200px] max-w-xs font-bold bg-red-300" id="filter-sentimen" name="filter">
               @endif
               @if ($filter_selected === "all")
                  <option value="all" class="bg-white" selected>All</option>
                  <option value="positif" class="bg-white">Positif</option>
                  <option value="netral" class="bg-white">Netral</option>
                  <option value="negatif" class="bg-white">Negatif</option>
               @endif
               @if ($filter_selected === "positif")
                  <option value="all" class="bg-white">All</option>
                  <option value="positif" class="bg-white" selected>Positif</option>
                  <option value="netral" class="bg-white">Netral</option>
                  <option value="negatif" class="bg-white">Negatif</option>
               @endif
               @if ($filter_selected === "netral")
                  <option value="all" class="bg-white">All</option>
                  <option value="positif" class="bg-white">Positif</option>
                  <option value="netral" class="bg-white" selected>Netral</option>
                  <option value="negatif" class="bg-white">Negatif</option>
               @endif
               @if ($filter_selected === "negatif")
                  <option value="all" class="bg-white">All</option>
                  <option value="positif" class="bg-white">Positif</option>
                  <option value="netral" class="bg-white" >Netral</option>
                  <option value="negatif" class="bg-white" selected>Negatif</option>
               @endif
            </select>
            <button type="submit" class="btn btn-neutral sm:ml-5">Filter</button>
         </form>
      </div>

      {{-- Kolom Riwayat Sentimen --}}
      <div class="w-full sm:w-[600px] h-[300px] py-5 px-3 bg-slate-300 overflow-y-scroll">
         @foreach ($sentiments as $sentiment)
             <div class="w-full bg-white flex rounded-md items-center px-3 py-2 gap-3 mb-3 justify-between">
               <div class="w-[80%] ">
                  <h1 class="mb-2">Anonim {{ $sentiment["id_sentiment"] }}</h1>
                  <p class="text-sm">{{ $sentiment["ulasan"] }}</p>
               </div>
               @if ($sentiment["sentimen"] == "positif")
                  <p class="bg-green-700 text-white rounded-md px-2 py-1 w-[25%]text-sm">{{ ucwords($sentiment["sentimen"]) }}</p>
               @endif
               @if ($sentiment["sentimen"] == "netral")
                  <p class="bg-slate-700 text-white rounded-md px-2 py-1 w-[25%]text-sm">{{ ucwords($sentiment["sentimen"]) }}</p>
               @endif
               @if ($sentiment["sentimen"] == "negatif")
                  <p class="bg-red-700 text-white rounded-md px-2 py-1 w-[25%]text-sm">{{ ucwords($sentiment["sentimen"]) }}</p>
               @endif
            </div>
         @endforeach
      </div>

      {{-- Kolom chat --}}

   </div>
@endsection