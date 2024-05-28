<div class="">
    <div class="">
        <nav class="flex space-x-1" aria-label="Tabs" role="tablist">
          <button type="button" class="border-gray-200 hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 active" id="tabs-with-badges-item-1" data-hs-tab="#tabs-with-badges-1" aria-controls="tabs-with-badges-1" role="tab">
            Poslovi za tebe <span class="hs-tab-active:bg-blue-100 hs-tab-active:text-blue-600 dark:hs-tab-active:bg-blue-800 dark:hs-tab-active:text-white ms-1 py-0.5 px-1.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 dark:bg-neutral-700 dark:text-neutral-300">3</span>
          </button>
          <button type="button" class="border-gray-200 hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500" id="tabs-with-badges-item-2" data-hs-tab="#tabs-with-badges-2" aria-controls="tabs-with-badges-2" role="tab">
            Svi poslovi <span class="hs-tab-active:bg-blue-100 hs-tab-active:text-blue-600 dark:hs-tab-active:bg-blue-800 dark:hs-tab-active:text-white ms-1 py-0.5 px-1.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 dark:bg-neutral-700 dark:text-neutral-300">863</span>
          </button>
        </nav>
      </div>
      
      <div class="mt-3">
        <div id="tabs-with-badges-1" role="tabpanel" aria-labelledby="tabs-with-badges-item-1">
            {{-- Skeleton --}}
            <div class="flex items-center flex-col gap-4 pt-2">
              @include('results.4you.job-1')
              @include('results.4you.job-2')
              @include('results.4you.job-3')
              <button type="button" class="text-sm font-medium text-blue-600 decoration-blue-600 hover:opacity-80">
                Svi poslovi
              </button>
            </div>
          </div>
          <div id="tabs-with-badges-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-badges-item-2">
            <div class="flex items-center flex-col gap-4 pt-2">
              @include('results.all-jobs.job-1')
              @include('results.all-jobs.job-2')
              @include('results.all-jobs.job-3')
            </div>
            <div class="flex items-center justify-center p-4">
              @include('results.pagination')
            </div>
        </div>
      </div>
</div>