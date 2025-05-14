<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('General Budget Items') }}
        </h2>
    </x-slot>
    <x-admin-table
    :tableInfo="$generalBudgetItems"
    :columns="['code','name']"
    :routeCreate="route('general_budget_item.create')"
    routeEdit="general_budget_item.edit">
        {{__('List of items')}}
    </x-admin-table>
</x-app-layout>
