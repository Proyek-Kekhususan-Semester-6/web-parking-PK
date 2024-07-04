{{-- Navigation Bar for Desktop --}}
<nav class="navbar bg-base-100 hidden md:flex md:fixed md:top-0 md:z-10">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-5 w-5"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </div>
      <ul
        tabindex="0"
        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
        <li><a>Item 1</a></li>
        <li>
          <a>Parent</a>
          <ul class="p-2">
            <li><a>Submenu 1</a></li>
            <li><a>Submenu 2</a></li>
          </ul>
        </li>
        <li><a>Item 3</a></li>
      </ul>
    </div>
    <a class="btn btn-ghost text-xl">daisyUI</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a>Item 1</a></li>
      <li>
        <details>
          <summary>Parent</summary>
          <ul class="p-2">
            <li><a>Submenu 1</a></li>
            <li><a>Submenu 2</a></li>
          </ul>
        </details>
      </li>
      <li><a>Item 3</a></li>
    </ul>
  </div>
  <div class="navbar-end">
    <a class="btn">Button</a>
  </div>
</nav>

{{-- Botton Navigation for Mobile Phone --}}

<div class="btm-nav h-[80px] px-3 fixed bottom-0 bg-red-500 text-white shadow-lg">
  <a href="/home" class="">
    <div class="{{ $title == "Home" ? "px-5 py-1 bg-white" : "" }} rounded-md  flex justify-center items-center">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="h-7 w-7 {{ $title == "Home" ? "text-black" : "text-white" }}"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
      </svg>
    </div>
    <span class="text-sm  {{ $title == "Home" ? "" : "hidden" }}">Home</span>
  </a>
  <a href="/parking-lots" class="">
    <div class="{{ $title == "Parking Lots" ? "px-5 py-1 bg-white" : "" }} rounded-md  flex justify-center items-center">
      {{-- <svg class="h-7 w-7 {{ $title == "Parking Lots" ? "text-black" : "text-white" }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-width="2" d="M3 11h18m-9 0v8m-8 0h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z"/>
      </svg> --}}
      <svg class="h-7 w-7 {{ $title == "Parking Lots" ? "text-black" : "text-white" }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v14M9 5v14M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z"/>
      </svg>

    </div>
    <span class="text-sm  {{ $title == "Parking Lots" ? "" : "hidden" }}">Parking</span>
  </a>
  <a href="/sentiment" class="">
    <div class="{{ $title == "Sentimen" ? "px-5 py-1 bg-white" : "" }} rounded-md  flex justify-center items-center">
      <svg class="h-7 w-7 {{ $title == "Sentimen" ? "text-black" : "text-white" }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17h6l3 3v-3h2V9h-2M4 4h11v8H9l-3 3v-3H4V4Z"/>
      </svg>
    </div>
    <span class="text-sm  {{ $title == "Sentimen" ? "" : "hidden" }}">Sentiment</span>
  </a>
  <a href="/profile" class="">
    <div class="{{ $title == "Profile" ? "px-5 py-1 bg-white" : "" }} rounded-md  flex justify-center items-center">
      <svg class="h-7 w-7 {{ $title == "Profile" ? "text-black" : "text-white" }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
      </svg>
    </div>
    <span class="text-sm  {{ $title == "Profile" ? "" : "hidden" }}">Profile</span>
  </a>
</div>