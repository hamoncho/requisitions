<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Budget Items') }}
        </h2>
    </x-slot>
    <x-admin-table
    :tableInfo="$budgetItems"
    :columns="['full_code','name']"
    :routeCreate="route('budget_item.create')"
    routeEdit="budget_item.edit">
        {{__('List of items')}}
    </x-admin-table>
</x-app-layout>
