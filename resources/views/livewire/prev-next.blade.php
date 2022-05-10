<div class="grid grid-cols-1 {{ isset($prevTitle, $nextTitle) ? 'md:grid-cols-2' : null }} gap-6">
    @isset($prevTitle)
        <a
            class="card flex flex-col bg-white rounded-md p-2"
            href="{{ $prevUrl }}"
            title="{{ $prevTitle }}"
        >
            <div class="flex items-center">
                <svg class="w-3 h-auto fill-current text-gray-400 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                    <path d="M166.5 424.5l-143.1-152c-4.375-4.625-6.562-10.56-6.562-16.5c0-5.938 2.188-11.88 6.562-16.5l143.1-152c9.125-9.625 24.31-10.03 33.93-.9375c9.688 9.125 10.03 24.38 .9375 33.94l-128.4 135.5l128.4 135.5c9.094 9.562 8.75 24.75-.9375 33.94C190.9 434.5 175.7 434.1 166.5 424.5z"/>
                </svg>

                <span class="uppercase font-semibold text-sm text-gray-400">
                    {{ $prevLabel }}
                </span>
            </div>

            <p class="mt-1 line-clamp-1 text-gray-700 dark:text-gray-400">
                {{ $prevTitle }}
            </p>
        </a>
    @endisset

    @isset($nextTitle)
        <a
            href="{{ $nextUrl }}"
            class="card flex flex-col bg-white rounded-md p-2"
            title="{{ $nextTitle }}"
        >
            <div class="flex items-center justify-end">
                <span class="uppercase font-semibold text-sm text-gray-400">
                    {{ $nextLabel }}
                </span>

                <svg class="w-3 h-auto fill-current text-gray-400 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                    <path d="M89.45 87.5l143.1 152c4.375 4.625 6.562 10.56 6.562 16.5c0 5.937-2.188 11.87-6.562 16.5l-143.1 152C80.33 434.1 65.14 434.5 55.52 425.4c-9.688-9.125-10.03-24.38-.9375-33.94l128.4-135.5l-128.4-135.5C45.49 110.9 45.83 95.75 55.52 86.56C65.14 77.47 80.33 77.87 89.45 87.5z"/>
                </svg>
            </div>

            <p class="mt-1 line-clamp-1 text-gray-700 dark:text-gray-400 flex justify-end">
                {{ $nextTitle }}
            </p>
        </a>
    @endisset
</div>