<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Indicator') }}
        </h2>
    </x-slot>
    <x-admin-table
    :tableInfo="$indicators"
    :columns="['index', 'description']"
    :routeCreate="route('indicator.create')"
    routeEdit="indicator.edit">
    {{__('List of items')}}
    </x-admin-table>
</x-app-layout>

