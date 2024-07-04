@extends('templates.main_users')
@section('main')
   <div class="w-full flex flex-col items-center px-10">
    {{-- Slider --}}
    <div class="w-full h-[150px] rounded-lg  mt-10 overflow-hidden">
        <img src="/assets/smart-parking.jpeg" alt="" class="object-fit">
    </div>
    {{-- Perkenalan --}}
    <div class=" self-start">
        {{-- Judul PK --}}
        <h1 class="text-xl font-bold my-5">Parking Lot Detection</h1>
        {{-- Deskripsi PK --}}
        <div class="text-justify">
            <p class="mb-3">Merupakan Proyek Kekhususan untuk memenuhi syarat penilaian dari mata kuliah Internet of Things (IoT) dan Natural Language Processing (NLP)</p>
            {{-- Proyek IOT --}}
            <div>
                <p>Dalam proyek ini, kami menggunakan beberapa komponen penyusun untuk perangkat IoT Parking Lot Detection, yaitu sebagai berikut</p>
                <div class="carousel rounded-box w-full h-[300px] mt-5 mb-3 border-2 border-gray-400">
                    <div class="carousel-item w-full flex flex-col justify-between items-center">
                        <img
                        src="/assets/hcsr04.jpg"
                        class="w-full h-[80%] object-cover"
                        alt="Tailwind CSS Carousel component" />
                        <div class="w-full h-[20%] flex justify-center items-center bg-red-500 text-white">
                            <p class="font-semibold">Sensor Ultrasonik (HC-SR04)</p>
                        </div>
                    </div>
                    <div class="carousel-item w-full flex flex-col justify-between items-center">
                        <img
                        src="/assets/esp32.jpg"
                        class="w-full h-[80%] object-cover"
                        alt="Tailwind CSS Carousel component" />
                        <div class="w-full h-[20%] flex justify-center items-center bg-red-500 text-white">
                            <p class="font-semibold">ESP32</p>
                        </div>
                    </div>
                    <div class="carousel-item w-full flex flex-col justify-between items-center">
                        <img
                        src="/assets/breadboard.jpeg"
                        class="w-full h-[80%] object-cover"
                        alt="Tailwind CSS Carousel component" />
                        <div class="w-full h-[20%] flex justify-center items-center bg-red-500 text-white">
                            <p class="font-semibold">Breadboard</p>
                        </div>
                    </div>
                    <div class="carousel-item w-full flex flex-col justify-between items-center">
                        <img
                        src="/assets/jumper.jpg"
                        class="w-full h-[80%] object-cover"
                        alt="Tailwind CSS Carousel component" />
                        <div class="w-full h-[20%] flex justify-center items-center bg-red-500 text-white">
                            <p class="font-semibold">Kabel Jumper</p>
                        </div>
                    </div>
                </div>
                <p>*Geser untuk komponen yg lainnya</p>
            </div>

            {{-- Proyek NLP --}}
            <div class="my-10 mb-[100px]">
                <p>Dalam proyek ini juga, kami menambahkan sentimen analisis untuk proyek IoT nya untuk mengetahui seberapa baik produk IoT yang telah dibuat. Metode yang digunakan untuk melatih modelnya adalah <a href="" class="text-red-500 font-semibold underline">Random Forest</a> dengan menggunakan dataset sebanyak 1000 kalimat yang telah diberikan label</p>
            </div>

        </div>
        
    </div>
   </div>

@endsection