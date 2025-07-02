<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Requisition') }} Folio #{{ $requisition->folio }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between flex-col sm:flex-row">
                        <ul class="list-none bg-gray-100 rounded-md grow">
                            <li class="text-lg font-bold  bg-blue-950 text-gray-100 rounded-t-md px-6">
                                {{ $requisition->process->index }}
                            </li>

                            <li class="px-6 text-nowrap overflow-hidden">
                                <b class="font-bold">{{ __('Indicator') }}: </b>
                                {{ $requisition->indicator->description }}
                            </li>

                            <li class="px-6 text-nowrap overflow-hidden">
                                <b class="font-bold">{{ __('Project') }}: </b>
                                {{ $requisition->indicator->project->description }}
                            </li>
                            <li class="px-6 text-nowrap overflow-hidden">
                                <b class="font-bold">{{ __('Created by: ') }} </b>
                                {{ $requisition->user->name }}
                            </li>
                        </ul>
                        <div class="sm:ml-6 ml-0 mb-2  flex sm:flex-col justify-between">
                            <div>
                                Status:
                                @switch($requisition->status)
                                    @case('draft')
                                        <span
                                            class="bg-gray-100 text-gray-800 text-sm font-medium me-2 px-3 py-1 rounded-md">
                                            {{ $requisition->status }}
                                        </span>
                                    @break

                                    @case('pending_approval')
                                        <span
                                            class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-3 py-1 rounded-dm">
                                            {{ $requisition->status }}
                                        </span>
                                    @break

                                    @case('approved')
                                        <span
                                            class="bg-green-100 text-green-800 text-sm font-medium me-2 px-3 py-1 rounded-dm">
                                            {{ $requisition->status }}
                                        </span>
                                    @break

                                    @case('rejected')
                                        <span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-3 py-1 rounded-dm">
                                            {{ $requisition->status }}
                                        </span>
                                    @break

                                    @default
                                        <span
                                            class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-3 py-1 rounded-dm">
                                            {{ $requisition->status }}
                                        </span>
                                @endswitch
                            </div>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h3 class="text-lg font-medium text-gray-900">{{ __('Requisition Items') }}</h3>
                        @if ($requisition->requisitionItems->isEmpty())
                            <p>{{ __('No items found for this requisition.') }}</p>
                        @else
                            <div class="overflow-x-auto mt-2">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('Description') }}</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('Budget Item') }}</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('Amount') }}</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('Unit') }}</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('Resource Type') }}</th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('Price') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($requisition->requisitionItems as $item)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{ $item->name }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{ $item->budgetItem->name ?? 'N/A' }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->amount }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->unit }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->type_resource }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->price }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>

                    <div class="mt-6">
                        <h3 class="text-lg font-medium text-gray-900">{{ __('Approval History') }}</h3>
                        <div class="overflow-x-auto mt-2">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Approver</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Comments</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($requisition->approvals as $approval)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $approval->approver->name }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $approval->status }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $approval->comments }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $approval->updated_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    @if ($requisition->status === 'pending_approval' && $requisition->current_approver_id === auth()->id())
                        <div class="mt-6">
                            <h3 class="text-lg font-medium text-gray-900">{{ __('Approve or Reject') }}</h3>
                            <div class="mt-4">
                                <form action="{{ route('requisition.approve', $requisition) }}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <x-input-label for="comments" :value="__('Comments')" />
                                        <textarea name="comments" id="comments" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
                                    </div>
                                    <x-primary-button>
                                        {{ __('Approve') }}
                                    </x-primary-button>
                                </form>
                            </div>
                            <div class="mt-4">
                                <form action="{{ route('requisition.reject', $requisition) }}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <x-input-label for="comments" :value="__('Comments')" />
                                        <textarea name="comments" id="comments" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
                                    </div>
                                    <x-danger-button>
                                        {{ __('Reject') }}
                                    </x-danger-button>
                                </form>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>