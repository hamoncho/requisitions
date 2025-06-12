<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Process') }}
        </h2>
    </x-slot>
    <x-admin-table
    :tableInfo="$processes"
    :columns="['index']"
    :routeCreate="route('process.create')"
    routeEdit="process.edit">
    {{__('List of items')}}
    </x-admin-table>
</x-app-layout>
