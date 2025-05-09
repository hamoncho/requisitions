<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        General Budgeti Items Menu
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <h3>Menu</h3>
                <ul>
                <li> <a href="{{ route('general_budget_item.index') }}"> List General Budget Items </a></li>
                <li> <a href="{{ route('general_budget_item.create') }}"> Create General Budget Items </a></li>
                </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
