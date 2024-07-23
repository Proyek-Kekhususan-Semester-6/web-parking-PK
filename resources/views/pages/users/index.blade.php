@extends('templates.main_users')
@section('main')
   <div class="w-full flex flex-col items-center px-10 md:hidden">
        <div class="w-full h-[150px] rounded-lg  mt-10 overflow-hidden">
            <img src="/assets/smart-parking.jpeg" alt="" class="object-fit">
        </div>
        {{-- Perkenalan --}}
        <div class="w-full self-start">
            {{-- Judul PK --}}
            <h1 class="text-xl font-bold my-5">Parking Lot Detection</h1>
            {{-- Deskripsi PK --}}
            <div class="text-justify">
                <p class="mb-3">Merupakan Proyek Gabungan yang mencakup kebutuhan penilaian untuk mata kuliah Internet of Things (IoT) dan Natural Language Processing (NLP).</p>
                {{-- Proyek IOT --}}
                <div>
                    <p>Dalam proyek ini, kami menggunakan beberapa komponen penyusun untuk perangkat IoT Parking Lot Detection, yaitu sebagai berikut</p>
                    <div class="carousel rounded-box w-full h-[300px] mt-5 mb-3 border-2 border-gray-400">
                        <div class="carousel-item w-full flex flex-col justify-between items-center">
                            <img
                            src="/assets/hcsr04.jpg"
                            class="w-full h-[80%] object-cover"
                            alt="Sensor Ultrasonik (HC-SR04)" />
                            <div class="w-full h-[20%] flex justify-center items-center bg-slate-600 text-white">
                                <p class="font-semibold">Sensor Ultrasonik (HC-SR04)</p>
                            </div>
                        </div>
                        <div class="carousel-item w-full flex flex-col justify-between items-center">
                            <img
                            src="/assets/esp32.jpg"
                            class="w-full h-[80%] object-cover"
                            alt="ESP32" />
                            <div class="w-full h-[20%] flex justify-center items-center bg-slate-600 text-white">
                                <p class="font-semibold">ESP32</p>
                            </div>
                        </div>
                        <div class="carousel-item w-full flex flex-col justify-between items-center">
                            <img
                            src="/assets/breadboard.jpeg"
                            class="w-full h-[80%] object-cover"
                            alt="Breadboard" />
                            <div class="w-full h-[20%] flex justify-center items-center bg-slate-600 text-white">
                                <p class="font-semibold">Breadboard</p>
                            </div>
                        </div>                    
                        <div class="carousel-item w-full flex flex-col justify-between items-center">
                            <img
                            src="/assets/jumper.jpg"
                            class="w-full h-[80%] object-cover"
                            alt="Kabel Jumper" />
                            <div class="w-full h-[20%] flex justify-center items-center bg-slate-600 text-white">
                                <p class="font-semibold">Kabel Jumper</p>
                            </div>
                        </div>
                    </div>
                    <p>*Geser untuk komponen yg lainnya</p>
                </div>

                {{-- Proyek NLP --}}
                <div class="my-10 ">
                    <p>Secara garis besar proyek ini meliputi perangkat IoT yang dapat mendeteksi keberadaan objek dalam slot parkir yang terintegrasi ke dalam website ini dan dilengkapi oleh fitur analisis sentimen untuk mengetahui respon dari mahasiswa terhadap perangkat yang dibuat.</p>
                </div>


                {{-- My Team --}}
                <div class="mb-[100px] flex flex-col">
                    <p class="self-center text-xl font-bold ">Tim Kami</p>
                    <div class="carousel  rounded-box w-full h-[300px] mt-5 mb-3 border-2 border-gray-400">
                        <div class="carousel-item w-full flex flex-col justify-between items-center overflow-hidden">
                            <figure class="h-[250px] overflow-hidden">
                                <img
                                class="w-full h-full object-contain scale-95 mt-2"
                                src="/assets/tim_kami/fares.png "
                                alt="esp32" />
                            </figure>
                            <div class="w-full h-[20%] flex flex-col justify-center items-center bg-slate-600 text-white">
                                <p class="font-semibold">Alfares Ariandha Nurdin</p>
                                <p class="font-semibold">(2107411020)</p>
                            </div>
                        </div>
                        <div class="carousel-item w-full flex flex-col justify-between items-center overflow-hidden">
                            <figure class="h-[250px] overflow-hidden">
                                <img
                                class="w-full h-full object-contain scale-110 mt-5"
                                src="/assets/tim_kami/gilang.png"
                                alt="Gilang" />
                            </figure>
                            <div class="w-full h-[20%] flex flex-col justify-center items-center bg-slate-600 text-white">
                                <p class="font-semibold">Gilang Rianto Utomo</p>
                                <p class="font-semibold">(2107411029)</p>
                            </div>
                        </div>
                        <div class="carousel-item w-full flex flex-col justify-between items-center">
                            <figure class="h-[250px] overflow-hidden">
                                <img
                                class="w-full h-full object-contain"
                                src="/assets/tim_kami/lisna.png"
                                alt="Lisna" />
                            </figure>
                            <div class="w-full h-[20%] flex flex-col justify-center items-center bg-slate-600 text-white">
                                <p class="font-semibold">Lisna Agustin</p>
                                <p class="font-semibold">(2107411017)</p>
                            </div>
                        </div>
                        <div class="carousel-item w-full flex flex-col justify-between items-center">
                            <figure class="h-[250px] overflow-hidden">
                                <img
                                class="w-full h-full object-contain scale-[0.85] mt-10"
                                src="/assets/tim_kami/sarah.png"
                                alt="Sarah" />
                            </figure>
                            {{-- <img
                            src="/assets/tim_kami/sarah.png"
                            class="w-full h-[80%] object-contain scale-90"
                            alt="Sarah Humaira" /> --}}
                            <div class="w-full h-[20%] flex flex-col justify-center items-center bg-slate-600 text-white">
                                <p class="font-semibold">Sarah Humaira</p>
                                <p class="font-semibold">(2107411023)</p>
                            </div>
                        </div>
                        
                    </div>
                    <p>*Geser untuk melihat tim kami</p>
                </div>
                

            </div>
            
        </div>
   </div>

   <div class="w-full h-screen hidden md:block">
    {{-- Perkenalan Proyek IOT dan Analisis Sentimen --}}
    <div class="hero bg-base-200 min-h-screen">
        <div class="hero-content flex-col lg:flex-row-reverse w-full justify-evenly">
            <div class="w-[400px] h-[280px] rounded-lg pt-10 overflow-hidden bg-red-300">
                <img src="/assets/smart-parking.jpeg" alt="" class="object-cover scale-150">
            </div>
            <div class="w-[500px]">
                <h1 class="text-5xl font-bold">Parking Lot Detection</h1>
                <p class="my-5 text-justify">Merupakan Proyek Gabungan yang mencakup kebutuhan penilaian untuk mata kuliah Internet of Things (IoT) dan Natural Language Processing (NLP).</p>
                <p class="mb-5 text-justify">Proyek tersebut terdiri dari perangkat IoT yang dapat mendeteksi keberadaan objek dalam slot parkir yang terintegrasi ke dalam website ini dan dilengkapi oleh fitur analisis sentimen untuk mengetahui respon dari mahasiswa terhadap perangkat yang dibuat.</p>
                <a href="/parking-lots" class="btn btn-primary">Get Started</a>
            </div>
        </div>
    </div>
    {{-- <div class="w-full h-screen flex flex-wrap justify-around items-center bg-slate-200">
        <div class="w-[400px] h-[280px] rounded-lg  pt-10 overflow-hidden bg-red-300">
            <img src="/assets/smart-parking.jpeg" alt="" class="object-cover scale-150">
        </div>
        <div class="w-[400px] h-[200px] flex flex-col justify-center text-justify">
            <h1 class="text-2xl font-bold my-5 px-3 py-2 bg-slate-600 rounded-md text-white w-fit">Parking Lot Detection</h1>
            <p>Merupakan Proyek Gabungan yang mencakup kebutuhan penilaian untuk mata kuliah Internet of Things (IoT) dan Natural Language Processing (NLP).</p>
            <p class="mt-2">Proyek tersebut terdiri dari perangkat IoT yang dapat mendeteksi keberadaan objek dalam slot parkir yang terintegrasi ke dalam website ini dan dilengkapi oleh fitur analisis sentimen untuk mengetahui respon dari mahasiswa terhadap perangkat yang dibuat.</p>
        </div>
    </div> --}}
    {{-- Komponen IOT --}}
    <div class="w-full h-fit flex flex-col justify-start items-center px-5 py-10">
        <h1 class="text-2xl font-bold px-3 py-2 bg-slate-600 rounded-md text-white w-fit mt-32 mb-10">Komponen Perangkat IoT</h1>
        <div class="flex flex-wrap mt-10 gap-8 items-start justify-around mb-32">
            <div class="card w-[350px] border-2 border-slate-600">
                <figure class="h-[250px] overflow-hidden">
                    <img
                    class="w-full h-full object-cover"
                    src="/assets/esp32.jpg"
                    alt="esp32" />
                </figure>
                <div class="card-body bg-slate-600 text-white rounded-b-xl">
                    <h2 class="card-title">Mikrokontroler ESP 32</h2>
                    <p>Digunakan untuk melakukan pemrosesan data dari sensor ke web server.</p>
                </div>
            </div>
            <div class="card w-[350px] border-2 border-slate-600">
                <figure class="h-[250px] overflow-hidden">
                    <img
                    class="w-full h-full object-cover"
                    src="/assets/hcsr04.jpg"
                    alt="hcsr04" />
                </figure>
                <div class="card-body bg-slate-600 text-white rounded-b-xl">
                    <h2 class="card-title">Sensor Ultrasonik (HC-SR04)</h2>
                    <p>Digunakan untuk memperoleh data jarak kendaraan dengan alat.</p>
                </div>
            </div>
            <div class="card w-[350px] border-2 border-slate-600">
                <figure class="h-[250px] overflow-hidden">
                    <img
                    class="w-full h-full object-cover"
                    src="/assets/breadboard.jpeg"
                    alt="breadboard" />
                </figure>
                <div class="card-body bg-slate-600 text-white rounded-b-xl">
                    <h2 class="card-title">Breadboard</h2>
                    <p>Digunakan untuk menempatkan komponen elektronika.</p>
                </div>
            </div>
            <div class="card w-[350px] border-2 border-slate-600">
                <figure class="h-[250px] overflow-hidden">
                    <img
                    class="w-full h-full object-cover"
                    src="/assets/jumper.jpg"
                    alt="jumper" />
                </figure>
                <div class="card-body bg-slate-600 text-white rounded-b-xl">
                    <h2 class="card-title">Kabel Jumper</h2>
                    <p>Digunakan untuk menyambungkan arus listrik ke tiap-tiap komponen elektronika.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- TIM Kami --}}
    <div class="w-full h-screen flex flex-col justify-start items-center bg-base-200 px-5 py-10">
        <h1 class="text-2xl font-bold px-3 py-2 bg-slate-600 rounded-md text-white w-fit mt-32 mb-10">Tim Kami</h1>
        <div class="flex flex-wrap mt-10 gap-5 items-start justify-around">
            <div class="card w-[350px] border-2 border-slate-600 bg-white">
                <figure class="h-[250px] overflow-hidden">
                    <img
                    class="w-full h-full object-contain sclae"
                    src="/assets/tim_kami/fares.png"
                    alt="esp32" />
                </figure>
                <div class="card-body bg-slate-600 text-white rounded-b-xl">
                    <h2 class="card-title">Alfares Ariandha Nurdin</h2>
                    <p>2107411020</p>
                </div>
            </div>
            <div class="card w-[350px] border-2 border-slate-600 bg-white">
                <figure class="h-[250px] overflow-hidden">
                    <img
                    class="w-full h-full object-contain scale-125"
                    src="/assets/tim_kami/gilang.png"
                    alt="Gilang" />
                </figure>
                <div class="card-body bg-slate-600 text-white rounded-b-xl">
                    <h2 class="card-title">Gilang Rianto Utomo</h2>
                    <p>2107411029</p>
                </div>
            </div>
            <div class="card w-[350px] border-2 border-slate-600 bg-white">
                <figure class="h-[250px] overflow-hidden">
                    <img
                    class="w-full h-full object-contain scale-125 mb-10"
                    src="/assets/tim_kami/lisna.png"
                    alt="Lisna" />
                </figure>
                <div class="card-body bg-slate-600 text-white rounded-b-xl">
                    <h2 class="card-title">Lisna Agustin</h2>
                    <p>2107411017</p>
                </div>
            </div>
            <div class="card w-[350px] border-2 border-slate-600 bg-white">
                <figure class="h-[250px] overflow-hidden">
                    <img
                    class="w-full h-full object-contain scale-90 mt-16"
                    src="/assets/tim_kami/sarah.png"
                    alt="Sarah" />
                </figure>
                <div class="card-body bg-slate-600 text-white rounded-b-xl">
                    <h2 class="card-title">Sarah Humaira</h2>
                    <p>2107411023</p>
                </div>
            </div>
        </div>
    </div>
   </div>

@endsection