<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            List Budget Items
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <a href="{{route('general_budget_item.create')}}">Create a new general budget item</a>
                    <ul>
                        @forelse ($generalBudgetItem as $item)
                            <li>
                            <b>{{ $item->code}}</b>
                            {{ $item->name }}
                            <a href="{{ route('general_budget_item.edit', $item) }}"> {{ __('Edit') }} </a>
                            </li>
                        @empty
                            <li> Empty </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
