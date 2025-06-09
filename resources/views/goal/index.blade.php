<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Objectives') }}
        </h2>
    </x-slot>
    <x-admin-table
    :tableInfo="$goals"
    :columns="['year', 'result']"
    :routeCreate="route('goal.create')"
    routeEdit="goal.edit">
    {{__('List of items')}}
    </x-admin-table>
</x-app-layout>
