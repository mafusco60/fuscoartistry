<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon.png">
        <link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&display=swap" rel="stylesheet">   

        
        
    <script src="//unpkg.com/alpinejs" defer></script>

        <script src="https://cdn.tailwindcss.com"></script>
       
        <title>Fusco Artistry | Find Your Favorite Artwork</title>
    </head>
    <header class="bg-cyan-900 text-white p-4">
    {{-- <header class="bg-cyan-900 text-white p-4">
    <body class="mb-48">
        <a id="top"></a>
        @include('partials._navbar')
      </header>
  <main>
    {{$slot}}
  </main> --}}

{{-- Scroll Buttons - Top and Bottom --}}
  {{-- <button
  id="scrollToBottom"
  class="fixed bottom-40 right-2 bg-cyan-900 text-white rounded-full p-2 hover:opacity-80"
  onclick="location.href='#bottom'"
>
  <i class="fa-solid fa-arrow-down"></i>
</button>

  <button
  id="scrollToTop"
  class="fixed bottom-60 right-2 bg-cyan-900 text-white rounded-full p-2 hover:opacity-80"
  onclick="location.href='#top'"
>
  <i class="fa-solid fa-arrow-up"></i>
</button>
<a id="bottom"></a>
 --}}
{{-- @include('partials._footer')
<x-flash-message/>
</body>
</html> --}}

        
            <!-- Page Content -->
            <@include('partials._navbar')
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        @include('partials._footer')

    </body>
</html>
