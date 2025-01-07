<div class="relative z-30 inline-flex" x-data="{ tooltip: false }">
    <a {{ $attributes->merge(['class' => 'bg-gray-900 hover:bg-primary p-2 rounded-lg text-white']) }}
        x-on:mouseenter="tooltip = true" x-on:mouseleave="tooltip = false">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="18"
            height="18" viewBox="0 0 24 24" class="fill-current">
            <g>
                <path
                    d="M20 0H4C1.794 0 0 1.794 0 4v12c0 2.206 1.794 4 4 4h2.923l3.749 3.157a2.01 2.01 0 0 0 1.337.507 1.94 1.94 0 0 0 1.292-.484L17.149 20h2.852c2.206 0 4-1.794 4-4V4c0-2.206-1.794-4-4-4Zm2 16c0 1.103-.897 2-2 2h-3.212c-.232 0-.458.081-.637.229l-4.171 3.416-4.048-3.41A1.002 1.002 0 0 0 7.287 18H3.999c-1.103 0-2-.897-2-2V4c0-1.103.897-2 2-2h16c1.103 0 2 .897 2 2v12ZM12.879 4.879l-5.707 5.707A3.971 3.971 0 0 0 6 13.414V15a1 1 0 0 0 1 1h1.586a3.975 3.975 0 0 0 2.828-1.172l5.707-5.707c.566-.567.879-1.32.879-2.122s-.313-1.555-.879-2.121a3.002 3.002 0 0 0-4.242 0Zm2.828 2.828L10 13.414c-.378.378-.88.586-1.414.586H8v-.586c0-.526.214-1.042.586-1.414l5.707-5.707a1 1 0 0 1 1.414 1.414Z"
                    fill=""></path>
            </g>
        </svg>
    </a>
    <div class="relative" x-cloak x-show.transition.origin.top="tooltip">
        <div
            class="absolute top-0 z-10 py-2 px-3 -mt-1 text-sm leading-tight text-white transform -translate-x-3/4 -translate-y-full bg-gray-600 rounded-lg shadow-lg">
            Edit
        </div>
        <svg class="absolute z-10 w-6 h-6 text-gray-600 transform -translate-x-7 -translate-y-3 fill-current stroke-current"
            width="8" height="8">
            <rect x="12" y="-10" width="8" height="8" transform="rotate(45)" />
        </svg>
    </div>
</div>
