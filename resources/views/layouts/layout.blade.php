<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>To Do List</title>
  @vite('resources/css/app.css')
  <style>
    /* Add custom CSS for layout adjustments */
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .content {
      flex: 1;
    }

    .footer {
      flex-shrink: 0;
    }
  </style>
</head>

<body>
  {{-- navbar --}}
  @include('layouts.navbar')
  {{-- akhir navbar --}}

  {{-- content --}}
  @yield('contect')
  {{-- akhir content --}}

  {{-- Footer --}}
  @include('layouts.footer')
  {{-- Akhir Footer --}}
</body>

</html>
