<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('budgetitem.title_show') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <!-- BudgetItem Card -->
            <div class="bg-white overflow-hidden shadow-lg rounded-lg">
                <div class="p-6 sm:p-8 border-b border-gray-200">
                    <div class="flex flex-col sm:flex-row justify-between items-start">
                        <div>
                            <p class="text-sm font-semibold text-blue-500 uppercase tracking-wider">{{__('budgetitem.budget_item')}}</p>
                            <h3 class="text-3xl font-bold text-gray-900 mt-1">{{ $budgetItem->name }}</h3>
                            <p class="text-lg text-gray-600 mt-2">{{ $budgetItem->description }}</p>
                        </div>
                        <div class="mt-4 sm:mt-0 sm:ml-4 flex-shrink-0">
                            <span
                                class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                {{__('budgetitem.code')}}: {{ $budgetItem->full_code }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Details Section -->
                <div class="p-6 sm:p-8">
                    <h4 class="text-lg font-semibold text-gray-800">{{__('budgetitem.belongs_to')}}</h4>
                        <div>
                            <p class="text-gray-800">{{ $budgetItem->generalBudgetItem->name }}</p>
                        </div>
                </div>
            </div>

            <div class="mt-8 text-center">
                <a href="{{ route('budget_item.list') }}"
                    class="inline-flex items-center px-6 py-3 bg-blue-950 border border-transparent rounded-md font-semibold text-white tracking-widest hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150">
                    {{__('budgetitem.back_button')}}
                </a>
            </div>
        </div>
    </div>

</x-app-layout>
