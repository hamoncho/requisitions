<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>
    <x-admin-table
    :tableInfo="$projects"
    :columns="['index', 'description']"
    :routeCreate="route('project.create')"
    routeEdit="project.edit">
    {{__('List of items')}}
    </x-admin-table>
</x-app-layout>

