<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Actions') }}
        </h2>
    </x-slot>
    <x-admin-table
    :tableInfo="$actions"
    :columns="['index', 'name']"
    :routeCreate="route('action.index')"
    routeEdit="action.index">
    {{__('List of items')}}
    </x-admin-table>
</x-app-layout>
