<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Halaman {{ $title; }}</title>
  @vite('resources/css/app.css')
</head>
<body>
  @include('components.nav_user')
  <main class="mx-0 px-0">
    @yield('main')
  </main>
  <footer>
    @yield('footer')
  </footer>
  {{-- <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" /> --}}
</body>
</html>