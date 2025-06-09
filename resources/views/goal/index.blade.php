<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Objectives') }}
        </h2>
    </x-slot>
    <x-admin-table
    :tableInfo="$goals"
    :columns="['year', 'result']"
    :routeCreate="route('goal.index')"
    routeEdit="goal.index">
    {{__('List of items')}}
    </x-admin-table>
</x-app-layout>
