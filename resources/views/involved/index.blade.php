<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Involveds') }}
        </h2>
    </x-slot>
    <x-admin-table
    :tableInfo="$involveds"
    :columns="['name']"
    :routeCreate="route('involved.create')"
    routeEdit="involved.edit">
        {{__('List of items')}}
    </x-admin-table>
</x-app-layout>
