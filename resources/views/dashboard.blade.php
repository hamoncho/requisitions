<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl m-auto p-4 sm:p-6">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-6 md:grid-cols-4 md:auto-rows-[220px]">

            <!-- Card destacada grande -->
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden sm:col-span-2 sm:row-span-2 flex flex-col">
                <img class="h-80 w-full object-cover" src="{{ asset('/storage/img/cards/mejorar-contabilidad-de-la-empresa.jpg')}}" alt="Card image">
                <div class="p-4 flex-1 flex flex-col justify-between">
                    <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-2">Main Option</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mb-4">A featured section to highlight something important.</p>
                    <a href="{{ route('general_budget_item.index')}}" class="text-xs sm:text-sm font-semibold text-green-600 hover:underline">Explore</a>
                </div>
            </div>

            <!-- Card normal -->
            <div class="bg-white shadow rounded-xl overflow-hidden flex flex-col">
                <img class="sm:h-40 w-full object-cover" src="{{ asset('/storage/img/cards/mejorar-contabilidad-de-la-empresa.jpg')}}" alt="Card">
                <div class="sm:px-4  sm:pt-2 flex-1">
                    <h3 class="font-semibold text-gray-800 text-sm sm:text-base">Option 2</h3>
                    <p class="text-xs sm:text-sm text-gray-600">Another card in a balanced layout.</p>
                </div>
            </div>

            <!-- Card alta -->
            <div class="bg-white shadow rounded-xl overflow-hidden flex flex-col sm:row-span-2">
                <img class="sm:h-80 w-full object-cover" src="{{ asset('/storage/img/cards/mejorar-contabilidad-de-la-empresa.jpg')}}" alt="Card">
                <div class="sm:px-4  sm:pt-2 flex-1">
                    <h3 class="font-semibold text-gray-800 text-sm sm:text-base">Option 3</h3>
                    <p class="text-xs sm:text-sm text-gray-600">A taller card for more content or vertical images.</p>
                </div>
            </div>

            <!-- Card normal -->
            <div class="bg-white shadow rounded-xl overflow-hidden flex flex-col">
                <img class="sm:h-40 w-full object-cover" src="{{ asset('/storage/img/cards/mejorar-contabilidad-de-la-empresa.jpg')}}" alt="Card">
                <div class="sm:px-4  sm:pt-2 flex-1">
                    <h3 class="font-semibold text-gray-800 text-sm sm:text-base">Option 4</h3>
                    <p class="text-xs sm:text-sm text-gray-600">Another card in a balanced layout.</p>
                </div>
            </div>

            <!-- Card normal -->
            <div class="bg-white shadow rounded-xl overflow-hidden flex flex-col">
                <img class="sm:h-40 w-full object-cover" src="{{ asset('/storage/img/cards/mejorar-contabilidad-de-la-empresa.jpg')}}" alt="Card">
                <div class="sm:px-4  sm:pt-2 flex-1">
                    <h3 class="font-semibold text-gray-800 text-sm sm:text-base">Option 5</h3>
                    <p class="text-xs sm:text-sm text-gray-600">Fits perfectly with the grid layout.</p>
                </div>
            </div>

            <!-- Card horizontal grande -->
            <div class="bg-white shadow rounded-xl overflow-hidden flex flex-col sm:col-span-2">
                <img class="sm:h-40 w-full object-cover" src="{{ asset('/storage/img/cards/mejorar-contabilidad-de-la-empresa.jpg')}}" alt="Card">
                <div class="sm:px-4 sm:pt-2 flex-1">
                    <h3 class="font-semibold text-gray-800 text-sm sm:text-base">Option 6</h3>
                    <p class="text-xs sm:text-sm text-gray-600">This card spans two columns to show more detail or an important link.</p>
                </div>
            </div>

            <!-- Card normal -->
            <div class="bg-white shadow rounded-xl overflow-hidden flex flex-col">
                <img class="sm:h-40 w-full object-cover" src="{{ asset('/storage/img/cards/mejorar-contabilidad-de-la-empresa.jpg')}}" alt="Card">
                <div class="sm:px-4 sm:pt-2 flex-1">
                    <h3 class="font-semibold text-gray-800 text-sm sm:text-base">Option 7</h3>
                    <p class="text-xs sm:text-sm text-gray-600">Fits perfectly with the grid layout.</p>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
