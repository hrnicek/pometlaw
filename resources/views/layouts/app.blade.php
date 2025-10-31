@props(['theme' => 'bg-transparent'])

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="/favicon/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg" />
  <link rel="shortcut icon" href="/favicon/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png" />
  <link rel="manifest" href="/favicon/site.webmanifest" />

  {{ seo()->generate() }}

  @livewireStyles

  @vite('resources/css/app.css')
  @vite(['resources/js/app.js'])
  @stack('styles')

</head>

<body class="antialiased text-gray-75 bg-gray-5  min-h-screen transition-colors duration-300">

  <div id="app" class="flex flex-col min-h-screen">
    <x-navbar />
    <main id="main-content" class="flex-1">
      @yield('content')
    </main>
    <x-footer />
  </div>

  @livewireScripts
  @stack('js')
</body>

</html>
