<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Halaman {{ $title }}</title>
  @vite(['resources/css/app.css', 'resources/js/main.js'])
</head>
<body>
  <div class="w-full h-screen flex justify-center items-center overflow-hidden bg-no-repeat bg-cover bg-center" style="background-image: url('/assets/smart-parking.jpeg')">
    <div class="w-full h-screen fixed z-10 bg-slate-600/30">

    </div>
    <div class="w-[80%] h-[300px] z-20 sm:w-[400px] bg-gradient-to-r from-blue-500/50 to-green-500/50 rounded-md backdrop-blur-md flex flex-col items-center px-5 relative">
      <h1 class="text-2xl my-5 text-white font-bold">Admin Login</h1>
      {{-- Username --}}
      <form action="/login/auth" class="w-full" method="POST">
        @csrf
        <label class="px-3 h-[45px] rounded-md flex items-center gap-2 w-full focus:outline-2 focus:outline-black border-black border-2 bg-white mb-5 overflow-hidden">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 16 16"
            fill="currentColor"
            class="h-full w-4 mr-2 text-black text-center ">
            <path
              d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
          </svg>
          <input type="text" class="grow outline-none placeholder:text-black" placeholder="Email" name="email" />
        </label>
        <label class="px-3 h-[45px] rounded-md flex items-center gap-2 w-full focus:outline-2 focus:outline-black border-black border-2 bg-white overflow-hidden">
           <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 16 16"
              fill="currentColor"
              class="h-full w-4 mr-2 text-black text-center">
              <path
                fill-rule="evenodd"
                d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                clip-rule="evenodd" />
            </svg>
          <input type="password" class="grow outline-none placeholder:text-black" placeholder="Password" name="password" />
        </label>

        <button type="submit" class="btn py-2 bg-black text-white rounded-md absolute bottom-5 left-5 right-5 text-lg font-semibold border-none hover:bg-black">Login</button>
      </form>
    </div>
  </div>

  <script>
       @if(session('logout'))
             Swal.fire({
                icon: "success",
                title: "Berhasil",
                text: '{{ session('logout') }}'
            })
        @endif
       @if(session('loginError'))
             Swal.fire({
                icon: "error",
                title: "Kesalahan",
                text: '{{ session('loginError') }}'
            })
        @endif
       @if(session('empty'))
             Swal.fire({
                icon: "warning",
                title: "Peringatan",
                text: '{{ session('empty') }}'
            })
        @endif
  </script>
</body>
</html>