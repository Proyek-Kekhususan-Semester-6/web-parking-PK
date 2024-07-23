  <input type="checkbox" name="" id="hamburger-menu" class="hidden absolute z-30 left-10 top-1/2 -translate-y-1/2 peer/sidebar peer/icon w-[50px] h-[50px]">
  <label for="hamburger-menu" class="left-5 top-5 cursor-pointer fixed z-30 block lg:hidden peer-checked/icon:hidden bg-white p-2 ring-2 ring-black rounded-sm "><img src="/assets/dashboard/more.png" alt="" class="w-[25px] h-[25px] "></label>
  <label for="hamburger-menu" class="left-5 top-5 cursor-pointer fixed z-30 hidden peer-checked/icon:block bg-white p-2 ring-2 ring-black rounded-sm"><img src="/assets/dashboard/close.png" alt="" class="w-[25px] h-[25px] "></label>
  <div class="w-screen h-[2000px] hidden fixed z-10 peer-checked/sidebar:bg-black/50 peer-checked/sidebar:block transition-all duration-500"></div>


  <div class="h-[100%] fixed top-0 sm:h-screen sm:w-[400px] w-[80%] -translate-x-[100%] lg:translate-x-0  bg-slate-500 left-0 bottom-0 box-border flex flex-col items-center lg:relative  opacity-0 lg:opacity-100 peer-checked/sidebar:translate-x-0 peer-checked/sidebar:opacity-100 z-20 transition-all duration-300">
    <!-- Logo Perusahaan -->
    <div class="w-full h-[200px] flex flex-col justify-center items-center bg-slate-400 p-3">
      <div class="w-[120px] h-[120px] overflow-hidden">
        <img src="/assets/dashboard/user.png" alt="">
      </div>
      <h1 class="text-2xl font-bold font-sans mt-3">{{ Auth::user()->name }}</h1>
    </div>
    <!-- Menu Dashboard -->
    <ul class="list-none w-full mt-10">
      <li class="w-full">
        <a href="/dashboard" class="w-full py-3 px-3 pl-10 text-lg font-semibold  hover:bg-white hover:text-black transition-all duration-300 flex items-center group <?= ($tag != "Dashboard") ? "text-white" : "bg-white text-black" ?>">
          <img src="/assets/dashboard/dashboard-fill.png" alt="" class="w-[25px] h-[25px] <?= ($tag != "Dashboard") ? "hidden" : "inline-block" ?> group-hover:inline-block">
          <img src="/assets/dashboard/dashboard.png" alt="" class="w-[25px] h-[25px] <?= ($tag != "Dashboard") ? "inline-block" : "hidden" ?> group-hover:hidden">
          <span class="ml-2">Dashboard</span>
        </a>
      </li>
      <li class="w-full">
        <a href="/dashboard/parking_lots" class="w-full py-3 px-3 pl-10 text-lg font-semibold  hover:bg-white hover:text-black transition-all duration-300 flex items-center group <?= ($tag == "Parking Lots") ? "bg-white text-black" : "text-white" ?>">
          <img src="/assets/dashboard/parking-fill.png" alt="" class="w-[25px] h-[25px] <?= ($tag == "Parking Lots" ) ? "inline-block" : "hidden" ?> group-hover:inline-block">
          <img src="/assets/dashboard/parking.png" alt="" class="w-[25px] h-[25px] group-hover:hidden <?= ($tag == "Parking Lots") ? "hidden" : "inline-block" ?> ">
          <span class="ml-2">Parking Lots</span>
        </a>
      </li>
    </ul>
    <!-- Tombol Logout -->
    <a href="/logout" class="px-10 py-3 bg-gray-100 text-black border-b-[4px] border-gray-300 rounded-md absolute bottom-20 active:translate-y-[4px] active:border-none transition-all duration-100 uppercase font-bold flex items-center"><span class="mr-2">Logout</span> <img src="/assets/dashboard/logout.png" alt="" class="w-[20px] h-[20px]"></a>
  </div>