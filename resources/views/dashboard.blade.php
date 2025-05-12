<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl m-auto p-4 sm:p-6">
        <!-- Contenedor grid padre corregido -->
        <div
            class="grid grid-cols-1 gap-2 sm:grid-cols-2 sm:gap-2 md:grid-cols-3 lg:grid-cols-4 auto-rows-[320px] md:auto-rows-[220px]">

            <!-- Tarjeta destacada CORREGIDA -->
            <a href="#"
                class="bg-white scale-95 hover:scale-100 shadow-lg rounded-md overflow-hidden
                      col-span-1 row-span-1
                      sm:col-span-2 sm:row-span-1
                      md:col-span-2 md:row-span-2
                      flex flex-col">
                <img class="h-3/4 object-cover"
                    src="{{ asset('/storage/img/cards/mejorar-contabilidad-de-la-empresa.jpg') }}" alt="Card image">
                <div class="p-4 flex-1 flex flex-col justify-between">
                    <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-2">{{__('Requisitons')}}</h3>
                    <p class="text-gray-600 text-xs sm:text-sm mb-4">{{ __('Manage Requisitons')}}</p>
                </div>
            </a>
            <!-- Card normal -->

            <a href="{{ route('general_budget_item.index') }}"
                class=" bg-white scale-95 hover:scale-100 shadow rounded-md overflow-hidden flex flex-col">
                <img class="h-3/4 py-4 w-full object-contain" src="{{ asset('/storage/img/cards/gastos.png') }}"
                    alt="Card">
                <div class="px-4 content-center flex-1 bg-blue-950">
                    <h3 class="font-semibold text-gray-200 text-sm sm:text-base">{{ __('General Budget Item') }}</h3>
                    <p class="text-xs sm:text-sm text-gray-300">{{ __('Manage General Budget Items') }}</p>
                </div>
            </a>

            <!-- Card alta -->
            <a href="{{ route('objective.index') }}" class="bg-white scale-95 hover:scale-100 shadow rounded-md overflow-hidden flex flex-col sm:row-span-1 md:row-span-2">
                <img class="h-3/4 p-4 object-contain"
                    src="{{ asset('/storage/img/cards/objective.png') }}" alt="Card">
                <div class="px-4  content-center flex-1 bg-blue-950">
                    <h3 class="font-semibold text-gray-200 text-sm sm:text-base">{{ __('Objective')}}</h3>
                    <p class="text-xs sm:text-sm text-gray-300">{{ __('Manage Objectives')}}</p>
                </div>
            </a>

            <!-- Card normal -->
            <a href="{{ route('budget_item.index')}}" class="bg-white scale-95 hover:scale-100 shadow rounded-md overflow-hidden flex flex-col">
                <img class="h-3/4 py-4 w-full object-contain" src="{{ asset('/storage/img/cards/planificacion.png') }}"
                    alt="Card">
                <div class="px-4 content-center flex-1 bg-blue-950">
                    <h3 class="font-semibold text-gray-200 text-sm sm:text-base">{{ __('Budget Item') }}</h3>
                    <p class="text-xs sm:text-sm text-gray-300">{{ __('Manage Budget Items') }}</p>
                </div>
            </a>

            <!-- Card normal -->
            <a href="#" class="bg-white scale-95 hover:scale-100 shadow rounded-md overflow-hidden flex flex-col">
                <img class="h-3/4 py-4 w-full object-contain" src="{{ asset('/storage/img/cards/actionable.png') }}"
                    alt="Card">
                <div class="px-4 content-center flex-1 bg-blue-950">
                    <h3 class="font-semibold text-gray-200 text-sm sm:text-base">{{ __('Action') }}</h3>
                    <p class="text-xs sm:text-sm text-gray-300">{{ __('Manage Actions') }}</p>
                </div>
            </a>

            <!-- Card horizontal grande -->
            <a href="#" class="bg-white scale-95 hover:scale-100 shadow rounded-md overflow-hidden flex flex-col sm:col-span-2">
                <img class="h-3/4 p-4 object-contain"
                    src="{{ asset('/storage/img/cards/blueprint.png') }}" alt="Card">
                <div class="px-4 content-center flex-1 bg-blue-950">
                    <h3 class="font-semibold text-gray-200 text-sm sm:text-base">{{ __('Projects')}}</h3>
                    <p class="text-xs sm:text-sm text-gray-300">{{__('Manage Projects')}}</p>
                </div>
            </a>

            <!-- Card normal -->
            <a href="#" class="bg-white scale-95 hover:scale-100 shadow rounded-md overflow-hidden flex flex-col">
                <img class="h-3/4 py-4 object-contain"
                    src="{{ asset('/storage/img/cards/goal-flag.png') }}" alt="Card">
                <div class="px-4 content-center flex-1 bg-blue-950">
                    <h3 class="font-semibold text-gray-200 text-sm sm:text-base">{{__('Goal')}}</h3>
                    <p class="text-xs sm:text-sm text-gray-300">{{ __('Manage Goals')}}</p>
                </div>
            </a>

            <!-- Card alta -->
            <a href="#" class="bg-white scale-95 hover:scale-100 shadow rounded-md overflow-hidden flex flex-col sm:row-span-1 md:row-span-2">
                <img class="h-3/4 p-4 object-contain"
                    src="{{ asset('/storage/img/cards/iteration.png') }}" alt="Card">
                <div class="px-4  content-center flex-1 bg-blue-950">
                    <h3 class="font-semibold text-gray-200 text-sm sm:text-base">{{ __('Process')}}</h3>
                    <p class="text-xs sm:text-sm text-gray-300">{{ __('Manage Processes')}}</p>
                </div>
            </a>

            <!-- Card normal -->
            <a href="#" class="bg-white sm:col-span-2 col-span-1 lg:col-span-1  scale-95 hover:scale-100 shadow rounded-md overflow-hidden flex flex-col">
                <img class="h-3/4 py-4 object-contain"
                    src="{{ asset('/storage/img/cards/performance.png') }}" alt="Card">
                <div class="px-4 content-center flex-1 bg-blue-950">
                    <h3 class="font-semibold text-gray-200 text-sm sm:text-base">{{__('Indicators')}}</h3>
                    <p class="text-xs sm:text-sm text-gray-300">{{__('Manage Indicators')}}</p>
                </div>
            </a>

            <!-- Tarjeta destacada CORREGIDA -->
            <a href="#"
                class="bg-white scale-95 hover:scale-100 shadow-lg rounded-md overflow-hidden
                      col-span-1 row-span-1
                      sm:col-span-2 sm:row-span-1
                      md:col-span-2 md:row-span-2
                      flex flex-col">
                <img class="h-3/4 object-contain"
                    src="{{ asset('/storage/img/cards/user-admin.png') }}" alt="Card image">
                <div class="p-4 bg-blue-950 flex-1 flex flex-col justify-between">
                    <h3 class="text-lg sm:text-xl font-bold text-gray-200 mb-2">{{__('Users')}}</h3>
                    <p class="text-gray-300 text-xs sm:text-sm mb-4">{{__('Manage Users')}}</p>
                </div>
            </a>

            <!-- Card normal -->
            <a href="#" class="bg-white scale-95 hover:scale-100 shadow rounded-md overflow-hidden flex flex-col">
                <img class="h-3/4 py-4 object-contain"
                    src="{{ asset('/storage/img/cards/contabilidad.png') }}" alt="Card">
                <div class="px-4 content-center flex-1 bg-blue-950">
                    <h3 class="font-semibold text-gray-200 text-sm sm:text-base">{{ __('Unknow')}}</h3>
                    <p class="text-xs sm:text-sm text-gray-300">{{ __('Unknow')}}</p>
                </div>
            </a>
        </div>
    </div>
</x-app-layout>
