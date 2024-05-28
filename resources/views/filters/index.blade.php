
  <div id="hs-full-screen-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
    <div class="hs-overlay-open:mt-0 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-10 opacity-0 transition-all max-w-full max-h-full h-full">
      <div class="flex flex-col bg-white pointer-events-auto max-w-full max-h-full h-full dark:bg-neutral-800">
        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
          <h3 class="font-bold text-gray-800 dark:text-white">
            Filteri
          </h3>
          <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700" data-hs-overlay="#hs-full-screen-modal">
            <span class="sr-only">Close</span>
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18"></path>
              <path d="m6 6 12 12"></path>
            </svg>
          </button>
        </div>
        <div class="p-4 space-y-6 overflow-y-auto">

            {{-- Keyword --}}
            @include('search.keyword')
            
            {{-- Location --}}
            @include('search.location')
            
            {{-- Technology --}}
            @include('filters.technology')
            
            {{-- Categories --}}
            @include('filters.categories')
            
            {{-- Seniority --}}
            @include('filters.seniority')
            
            {{-- Company --}}
            @include('filters.company')
            
            {{-- Work Type --}}
            @include('filters.worktype')
            
            {{-- Online Interview --}}
            @include('filters.interview')
            
            {{-- Job with Salary --}}
            @include('filters.salary')

            {{-- Profile Apply --}}
            @include('filters.profile-apply')
            
            {{-- Saved search --}}
            @include('filters.savedsearch')
        </div>
        <div class="flex flex-col gap-3 items-center gap-x-2 py-6 px-4 mt-auto border-t dark:border-neutral-700">
          <button type="button" class="w-full py-2 px-3 inline-flex items-center justify-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-full-screen-modal">
            Prikaži 352 posla
          </button>

          <a href="/" type="button" class="text-sm font-medium text-blue-600 decoration-blue-600 hover:opacity-80">
            Resetuj sve filtere
          </a>
        </div>
      </div>
    </div>
  </div>