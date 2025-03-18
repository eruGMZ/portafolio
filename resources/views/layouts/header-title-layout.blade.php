<div class="title-app-layout-container">
    <div class="flex">

        @if (isset($back) && $back)
            @php
                $params = [];
                if (session($back)) {
                    $params = session($back);
                }
            @endphp

            <svg onclick="goToBackRoute('{{ route($back, $params) }}')" class="back-button"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path
                    d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
        @endif

        @if (isset($title) && $title)
            <div class="w-full md:hidden">
                <h2 style="width: 100%; font-size: 1.1rem; margin-top: 3px;"
                    class="text-start uppercase font-extrabold opacity-75 dark:text-white">
                    {{ $title }}
                </h2>
            </div>

            <div class="hidden w-full md:flex">
                <h2 style="width: 50%; font-size: 1.1rem; margin-top: 3px;"
                    class="text-start uppercase font-extrabold opacity-75 dark:text-white">
                    {{ $title }}
                </h2>

                <p style="width: 50%; justify-content: end; margin-top: 2px; font-size: .76rem;"
                    class="sm:flex text-end gap-1 text-gray-900 dark:text-white">

                    @foreach ($prefixRoutes as $item)
                        <span style="margin-top: 0px;" class="uppercase">{{ $item }}</span>

                        @if (!$loop->last)
                            <svg style="rotate: 180deg; margin-top: 1px;" class="w-4 h-4 text-gray-800 dark:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m14 8-4 4 4 4" />
                            </svg>
                        @endif
                    @endforeach
                </p>
            </div>
        @endif

    </div>
</div>
