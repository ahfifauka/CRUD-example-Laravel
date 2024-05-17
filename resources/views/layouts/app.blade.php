<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body class="bg-blue-50">
  <x-navbar />
  <div class="container mx-auto min-h-screen flex flex-col justify-start items-center pt-14">
    @if (session('success'))
      <x-alert :message="session('success')" type="success">{{ session('success') }}</x-alert>
    @endif
    @yield('content')
  </div>
  @vite('resources/js/app.js')
</body>

</html>
