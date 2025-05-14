<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow sm:rounded-lg px-1 py-6 sm:p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-medium text-gray-900">{{ $slot }}</h3>
                <x-primary-link-button href="{{ $routeCreate }}">
                    + Create New
                </x-primary-link-button>
            </div>

            @if ($tableInfo->isEmpty())
                <p class="text-gray-500">No items found.</p>
            @else
                <div class="overflow-x-auto">
                    <table class="w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                @foreach ($columns as $column)
                                    <th
                                        class="px-1 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ $column }}
                                    </th>
                                @endforeach
                                <th
                                    class="px-1 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($tableInfo as $item)
                                <tr>
                                    @foreach ($columns as $column)
                                        <td class="px-1 py-4 whitespace-wrap text-gray-900">
                                            {{ $item->getAttribute($column) }}
                                        </td>
                                    @endforeach
                                    <td>
                                        <x-primary-link-button href="{{ route($routeEdit, $item) }}">
                                            Edit
                                        </x-primary-link-button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</div>
