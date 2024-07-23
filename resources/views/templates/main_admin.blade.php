<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="icon" type="image/svg+xml" href="/assets/placeholder.png" />
  <title>Halaman {{ $title; }}</title>
  @vite(['resources/css/app.css', 'resources/js/main.js'])
</head>
<body>
  <div class="flex w-screen overflow-hidden">
    @include('components.sidebar_admin')
    <main class="overflow-hidden relative sm:h-screen w-screen">
      @yield('main')
      <footer class="w-full bg-slate-600 text-center fixed bottom-0 sm:absolute text-lg text-white font-bold py-2">
        Built by
        <a href="/home" class="underline">
            Kelompok 1
        </a>
      </footer>
    </main>
  </div>
  {{-- <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" /> --}}
  <script>
        @if(session('add_success'))
             Swal.fire({
                icon: "success",
                title: "Berhasil",
                text: '{{ session('add_success') }}'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "/dashboard/parking_lots";
                }
            });
        @endif
        
        @if(session('edit_success'))
             Swal.fire({
                icon: "success",
                title: "Berhasil",
                text: '{{ session('edit_success') }}'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "/dashboard/parking_lots";
                }
            });
        @endif
        
        @if(session('delete_success'))
             Swal.fire({
                icon: "success",
                title: "Berhasil",
                text: '{{ session('delete_success') }}'
            })
        @endif

        @if(session('delete_failed'))
             Swal.fire({
                icon: "error",
                title: "Kesalahan",
                text: '{{ session('delete_failed') }}'
            })
        @endif
        
        
       // Dashboard Functionality
        const btn_delete = document.querySelectorAll(".btn-delete");
        const form_update = document.getElementById("edit-form");
        
        btn_delete.forEach((btn) => {
            btn.addEventListener("click", function (e) {
                e.preventDefault();
                swalFire(e.target.href);
            });
        });
        form_update.addEventListener("submit", function (e) {
            e.preventDefault();
            swalFire(e.target.getAttribute("action"), "edit");
        });
        
        
        function swalFire(href = "", tag = "") {
            Swal.fire({
                title:
                    tag == "edit"
                        ? "Apakah kamu yakin mengubahnya?"
                        : "Apakah kamu yakin menghapusnya?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yakin",
                cancelButtonText: "Batalkan",
                customClass: {
                    actions: "swal2-actions", // Kelas CSS kustom jika diperlukan
                },
                reverseButtons: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    if (tag === "edit") {
                        form_update.submit();
                    } else {
                        window.location.href = href;
                    }
                }
            });
        }
    </script>
</body>
</html>