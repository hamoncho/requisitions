<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('summary.title') }}
        </h2>
        <x-back-arrow-link href="{{ route('home') }}"/>
    </x-slot>

    <div class="max-w-[1536px] m-auto px-4 py-8">
        <!-- Contenedor grid padre corregido -->
        <div
            class="grid grid-cols-3 gap-2 sm:gap-4 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 auto-rows-[100px] sm:auto-rows-[135px] md:auto-rows-[210px]">

            <!-- Tarjeta destacada CORREGIDA -->
            <a href="#"
                class="bg-white hover:scale-105 shadow-lg rounded-md overflow-hidden
                      col-span-2 row-span-2
                      flex flex-col">
                <img class="h-3/4 object-cover"
                    src="{{ asset('/storage/img/cards/mejorar-contabilidad-de-la-empresa.jpg') }}" alt="Card image">
                <div class="p-4 flex-1 flex flex-col justify-between">
                    <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-2">{{ __('summary.requisition_title') }}</h3>
                    <p class="hidden md:block text-gray-600 text-xs sm:text-sm mb-4">{{ __('summary.requisition_description') }}</p>
                </div>
            </a>

            <!-- Card alta -->
            <a href="{{ route('objective.list') }}"
                class="bg-white hover:scale-105 shadow rounded-md overflow-hidden flex flex-col row-span-2">
                <img class="h-3/4 p-4 object-contain" src="{{ asset('/storage/img/cards/objective.png') }}"
                    alt="Card">
                <div class="px-4  content-center flex-1 bg-blue-950">
                    <h3 class="font-semibold text-gray-200 text-sm sm:text-base">{{ __('summary.objective_title') }}</h3>
                    <p class="hidden md:block text-xs sm:text-sm text-gray-300">{{ __('summary.objective_description') }}</p>
                </div>
            </a>

            <!-- Card normal -->
            <a href="{{ route('general_budget_item.list') }}"
                class=" bg-white hover:scale-105 shadow rounded-md overflow-hidden flex flex-col">
                <img class="h-3/4 py-4 w-full object-contain" src="{{ asset('/storage/img/cards/gastos.png') }}"
                    alt="Card">
                <div class="px-2 sm:px-4 content-center flex-1 bg-blue-950">
                    <h3 class="font-semibold text-gray-200 text-sm sm:text-base">{{ __('summary.general_budget_title') }}</h3>
                    <p class="hidden md:block text-xs sm:text-sm text-gray-300">{{ __('summary.general_budget_description') }}</p>
                </div>
            </a>

            <!-- Card normal -->
            <a href="{{ route('budget_item.list') }}"
                class="bg-white hover:scale-105 shadow rounded-md overflow-hidden flex flex-col">
                <img class="h-3/4 py-4 w-full object-contain" src="{{ asset('/storage/img/cards/planificacion.png') }}"
                    alt="Card">
                <div class="px-4 content-center flex-1 bg-blue-950">
                    <h3 class="font-semibold text-gray-200 text-sm sm:text-base">{{ __('summary.budget_title') }}</h3>
                    <p class="hidden md:block text-xs sm:text-sm text-gray-300">{{ __('summary.budget_description') }}</p>
                </div>
            </a>

            <!-- Card horizontal grande polimorfa -->
            <a href="{{ route('involved.list') }}"
                class="bg-white hover:scale-105 shadow rounded-md overflow-hidden flex flex-col col-span-1 lx:col-span-2">
                <img class="h-3/4 p-4 object-contain" src="{{ asset('/storage/img/cards/united.png') }}"
                    alt="Card">
                <div class="px-4 content-center flex-1 bg-blue-950">
                    <h3 class="font-semibold text-gray-200 text-sm sm:text-base">{{ __('summary.involved_title') }}</h3>
                    <p class="hidden md:block text-xs sm:text-sm text-gray-300">{{ __('summary.involved_description') }}</p>
                </div>
            </a>

            <!-- Card alta -->
            <a href="{{ route('process.list') }}"
                class="bg-white hover:scale-105 shadow rounded-md overflow-hidden flex flex-col row-span-2">
                <img class="h-3/4 p-4 object-contain" src="{{ asset('/storage/img/cards/iteration.png') }}"
                    alt="Card">
                <div class="px-4  content-center flex-1 bg-blue-950">
                    <h3 class="font-semibold text-gray-200 text-sm sm:text-base">{{ __('summary.process_title') }}</h3>
                    <p class="hidden md:block text-xs sm:text-sm text-gray-300">{{ __('summary.process_description') }}</p>
                </div>
            </a>

            <!-- Card horizontal grande -->
            <a href="{{ route('project.list')}}"
                class="bg-white hover:scale-105 shadow rounded-md overflow-hidden flex flex-col col-span-2">
                <img class="h-3/4 py-4 object-contain" src="{{ asset('/storage/img/cards/blueprint.png') }}"
                    alt="Card">
                <div class="px-4 content-center flex-1 bg-blue-950">
                    <h3 class="font-semibold text-gray-200 text-sm sm:text-base">{{ __('summary.project_title') }}</h3>
                    <p class="hidden md:block text-xs sm:text-sm text-gray-300">{{ __('summary.project_description') }}</p>
                </div>
            </a>

            <!-- Card normal -->
            <a href="{{ route('indicator.list') }}" class="bg-white hover:scale-105 shadow rounded-md overflow-hidden flex flex-col">
                <img class="h-3/4 py-4 object-contain" src="{{ asset('/storage/img/cards/performance.png') }}"
                    alt="Card">
                <div class="px-4 content-center flex-1 bg-blue-950">
                    <h3 class="font-semibold text-gray-200 text-sm sm:text-base">{{ __('summary.indicator_title') }}</h3>
                    <p class="hidden md:block text-xs sm:text-sm text-gray-300">{{ __('summary.indicator_description') }}</p>
                </div>
            </a>

            <!-- Card normal -->
            <a href="{{route('action.list')}}" class="bg-white hover:scale-105 shadow rounded-md overflow-hidden flex flex-col">
                <img class="h-3/4 py-4 w-full object-contain" src="{{ asset('/storage/img/cards/actionable.png') }}"
                    alt="Card">
                <div class="px-4 content-center flex-1 bg-blue-950">
                    <h3 class="font-semibold text-gray-200 text-sm sm:text-base">{{ __('summary.action_title') }}</h3>
                    <p class="hidden md:block text-xs sm:text-sm text-gray-300">{{ __('summary.action_description') }}</p>
                </div>
            </a>
        </div>
    </div>
</x-app-layout>
