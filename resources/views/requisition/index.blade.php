<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('requisition.history_title') }}
        </h2>
        <x-back-arrow-link href="{{ route('home') }}" />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-end mb-4">
                        <a href="{{ route('requisition.create') }}"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            {{ __('requisition.create_new_requisition') }}
                        </a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('requisition.folio') }}</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('requisition.status') }}</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('requisition.current_approver') }}</th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">{{ __('Actions') }}</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($requisitions as $requisition)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $requisition->folio }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @switch($requisition->status)
                                                @case('draft')
                                                    <span
                                                        class="bg-gray-100 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded-sm">
                                                        {{ __('requisition.draft') }}
                                                    </span>
                                                @break

                                                @case('pending_approval')
                                                    <span
                                                        class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded-sm">
                                                        {{ __('requisition.pending_approval') }}
                                                    </span>
                                                @break

                                                @case('approved')
                                                    <span
                                                        class="bg-green-100 text-green-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded-sm">
                                                        {{ __('requisition.approved') }}
                                                    </span>
                                                @break

                                                @case('rejected')
                                                    <span
                                                        class="bg-red-100 text-red-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded-sm">
                                                        {{ __('requisition.rejected') }}
                                                    </span>
                                                @break

                                                @default
                                                    <span
                                                        class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded-sm">
                                                        {{ $requisition->status }}
                                                    </span>
                                            @endswitch

                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $requisition->currentApprover->name ?? '' }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            @if ($requisition->status == 'draft')
                                                <a href="{{ route('requisition_items.index', $requisition) }}"
                                                    class="text-indigo-600 hover:text-indigo-900 ml-2">
                                                    {{ __('requisition.continue') }}
                                                </a>
                                            @else
                                                <a href="{{ route('requisition.show', $requisition) }}"
                                                    class="text-indigo-600 hover:text-indigo-900">
                                                    {{ __('requisition.view') }}
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
