<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />

        <title>HelloWorld</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="#">
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

        <style>
          .hs-select > input {
            border: none !important;
          }
        </style>

        <script>
          const { element } = HSSelect.getInstance('#select', true);const openBtn = document.querySelector('#open-btn');
openBtn.addEventListener('focusout', () => {  element.close();});
        </script>
    </head>
    <body class="font-sans bg-[#F2F5F9]">
      
      {{-- Header --}}
      @include('header')

      {{-- Search --}}
      <div class="p-4 space-y-4 bg-white border-y border-gray-200">

        {{-- Title --}}
        <h1 class="text-xl font-bold text-center">Najveća baza IT poslova u Srbiji</h1>

        <div class="flex items-center justify-between gap-4">
          {{-- Keyword --}}
          @include('search.keyword')
          
          {{-- Filter Button --}}
          @include('search.filter')
        </div>

        <div class="flex items-center  gap-4">
          {{-- Location --}}
          @include('search.location')
          
          {{-- Remote --}}
          @include('search.remote')
        </div>

        <div class="space-y-4">
          <button type="button" class="w-full py-3 px-4 inline-flex items-center justify-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
            Sačuvaj pretragu
          </button>
        </div>
      </div>

      {{-- Results --}}
      <div class="relative p-4 space-y-4">
        {{-- Tabs --}}
        @include('results.tabs')

        <div class="absolute top-2 right-4">
          {{-- Sort --}}
          @include('results.sort')
        </div>
      </div>

      {{-- Footer --}}
      @include('footer')
    </body>
</html>
