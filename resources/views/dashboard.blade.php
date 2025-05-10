<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl m-auto p-4 sm:p-6">
        <!-- Contenedor grid padre corregido -->
        <div
            class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-6 md:grid-cols-3 lg:grid-cols-4 auto-rows-[320px] md:auto-rows-[220px]">

            <!-- Tarjeta destacada CORREGIDA -->
            <div
                class="bg-white shadow-lg rounded-md overflow-hidden
                      col-span-1 row-span-1      <!-- Default móvil: 1x1 -->
                      sm:col-span-2 sm:row-span-1 <!-- Sm (640px+): 2x2 -->
                      md:col-span-2 md:row-span-2 <!-- Sm (640px+): 2x2 -->
                      flex flex-col">
                <img class="h-80 w-full object-contain"
                    src="{{ asset('/storage/img/cards/mejorar-contabilidad-de-la-empresa.jpg') }}" alt="Card image">
                <div class="p-4 flex-1 flex flex-col justify-between">
                    <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-2">Main Option</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mb-4">A featured section to highlight something
                        important.</p>
                    <a href="{{ route('general_budget_item.index') }}"
                        class="text-xs sm:text-sm font-semibold text-green-600 hover:underline">Explore</a>
                </div>
            </div>
            <!-- Card normal -->

            <a href="{{ route('general_budget_item.index') }}"
                class=" bg-white shadow rounded-md overflow-hidden flex flex-col">
                <img class="h-40 py-4 w-full object-contain " src="{{ asset('/storage/img/cards/gastos.png') }}"
                    alt="Card">
                <div class="px-4 pt-2 flex-1 bg-blue-950">
                    <h3 class="font-semibold text-gray-200 text-sm sm:text-base">{{ __('General Budget Item') }}</h3>
                    <p class="text-xs sm:text-sm text-gray-300">{{ __('Manage General Budget Item') }}</p>
                </div>
            </a>

            <!-- Card alta -->
            <div class="bg-white shadow rounded-md overflow-hidden flex flex-col sm:row-span-1 md:row-span-2">
                <img class="h-80 w-full object-cover"
                    src="{{ asset('/storage/img/cards/mejorar-contabilidad-de-la-empresa.jpg') }}" alt="Card">
                <div class="px-4  pt-2 flex-1 bg-blue-950">
                    <h3 class="font-semibold text-gray-200 text-sm sm:text-base">Option 3</h3>
                    <p class="text-xs sm:text-sm text-gray-300">A taller card for more content or vertical images.</p>
                </div>
            </div>

            <!-- Card normal -->
            <a href="#" class="bg-white shadow rounded-md overflow-hidden flex flex-col">
                <img class="h-40 py-4 w-full object-contain" src="{{ asset('/storage/img/cards/planificacion.png') }}"
                    alt="Card">
                <div class="px-4  pt-2 flex-1 bg-blue-950">
                    <h3 class="font-semibold text-gray-200 text-sm sm:text-base">{{ __('Budget Item') }}</h3>
                    <p class="text-xs sm:text-sm text-gray-300">{{ __('Manage Budget Item') }}</p>
                </div>
            </a>

            <!-- Card normal -->
            <a href="#" class="bg-white shadow rounded-md overflow-hidden flex flex-col">
                <img class="h-40 py-4 w-full object-contain" src="{{ asset('/storage/img/cards/contabilidad.png') }}"
                    alt="Card">
                <div class="px-4  pt-2 flex-1 bg-blue-950">
                    <h3 class="font-semibold text-gray-200 text-sm sm:text-base">{{ __('Budget Item') }}</h3>
                    <p class="text-xs sm:text-sm text-gray-300">{{ __('Manage Budget Item') }}</p>
                </div>
            </a>

            <!-- Card horizontal grande -->
            <div class="bg-white shadow rounded-md overflow-hidden flex flex-col sm:col-span-2">
                <img class="h-40 w-full object-contain"
                    src="{{ asset('/storage/img/cards/mejorar-contabilidad-de-la-empresa.jpg') }}" alt="Card">
                <div class="px-4 pt-2 flex-1 bg-blue-950">
                    <h3 class="font-semibold text-gray-200 text-sm sm:text-base">Option 6</h3>
                    <p class="text-xs sm:text-sm text-gray-300">This card spans two columns to show more detail or an
                        important link.</p>
                </div>
            </div>

            <!-- Card normal -->
            <div class="bg-white shadow rounded-md overflow-hidden flex flex-col">
                <img class="h-40 py-4 w-full object-contain"
                    src="{{ asset('/storage/img/cards/mejorar-contabilidad-de-la-empresa.jpg') }}" alt="Card">
                <div class="px-4 pt-2 flex-1 bg-blue-950">
                    <h3 class="font-semibold text-gray-200 text-sm sm:text-base">Option 7</h3>
                    <p class="text-xs sm:text-sm text-gray-300">Fits perfectly with the grid layout.</p>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
