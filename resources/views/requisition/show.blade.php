<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Requisition') }} Folio #{{ $requisition->folio }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="sm:p-6 py-6 px-2 text-gray-900">
                    <div class="flex justify-between flex-col-reverse md:flex-row">
                        <ul class="list-none bg-gray-100 rounded-md grow">
                            <li class="py-1 px-2 sm:px-6 text-lg font-bold  bg-blue-950 text-gray-100 rounded-t-md">
                                {{ $requisition->process->index }}
                            </li>

                            <li class="px-2 sm:px-6 py-1 leading-none">
                                <b class="font-bold">{{ __('Project') }}: </b>
                                {{ $requisition->indicator->project->description }}
                            </li>

                            <li class="px-2 sm:px-6 py-1 leading-none">
                                <b class="font-bold">{{ __('Indicator') }}: </b>
                                {{ $requisition->indicator->description }}
                            </li>

                            <li class="px-2 sm:px-6 pb-2">
                                <b class="font-bold">{{ __('Created by: ') }} </b>
                                {{ $requisition->user->name }}
                            </li>
                        </ul>
                        <div class="sm:ml-6 ml-0 mb-2 min-w-fit flex md:flex-col justify-between">
                            <div>
                                Status:
                                @switch($requisition->status)
                                    @case('draft')
                                        <span class="bg-gray-100 text-gray-800 text-sm font-medium me-2 px-3 py-1 rounded-md">
                                            {{ $requisition->status }}
                                        </span>
                                    @break

                                    @case('pending_approval')
                                        <span
                                            class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-3 py-1 rounded-md">
                                            {{ $requisition->status }}
                                        </span>
                                    @break

                                    @case('approved')
                                        <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-3 py-1 rounded-md">
                                            {{ $requisition->status }}
                                        </span>
                                    @break

                                    @case('rejected')
                                        <span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-3 py-1 rounded-md">
                                            {{ $requisition->status }}
                                        </span>
                                    @break

                                    @default
                                        <span class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-3 py-1 rounded-md">
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
                                        <tr class="divide-x divide-gray-200">
                                            <th scope="col"
                                                class="w-16 px-2 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('Budget Item') }}</th>
                                            <th scope="col"
                                                class="px-2 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('Description') }}</th>
                                            <th scope="col"
                                                class="w-20 px-2 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('Amount') }}</th>
                                            <th scope="col"
                                                class="w-32 px-2 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('Unit') }}</th>
                                            <th scope="col"
                                                class="w-32 px-2 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('Resource Type') }}</th>
                                            <th scope="col"
                                                class="w-32 px-2 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('Price') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($requisition->requisitionItems as $item)
                                            <tr>
                                                <td class="px-2 py-2 whitespace-nowrap">
                                                    {{ $item->budgetItem->full_code ?? 'N/A' }}
                                                </td>
                                                <td class="px-2 py-2 whitespace-nowrap">
                                                    {{ $item->name }}
                                                </td>

                                                <td class="px-2 py-2 whitespace-nowrap">{{ $item->amount }}</td>
                                                <td class="px-2 py-2 whitespace-nowrap">{{ $item->unit }}</td>
                                                @if (!isset($item->type_resource) && $requisition->status == 'approved' && Auth::user()->role == 'planning')
                                                    <td class="px-2 py-2 whitespace-nowrap">
                                                        <form id=""
                                                            action="{{ route('requisition_items.type_resource.update', [$requisition, $item]) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <select id="type_resource" name="type_resource"
                                                                onchange = "this.form.submit()">
                                                                <option>Vacio</option>
                                                                <option value="Estado">Estado</option>
                                                                <option value="Federal">Federal</option>
                                                                <option value="Propios">Propios</option>
                                                                <option value="Projectos">Projectos</option>
                                                            </select>
                                                        </form>
                                                    </td>
                                                @else
                                                    <td class="px-2 py-2 whitespace-nowrap">
                                                        {{ $item->type_resource }}
                                                    </td>
                                                @endif
                                                <td class="px-2 py-2 whitespace-nowrap">
                                                    ${{ number_format($item->price, 2) }}
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="5" class="text-right font-bold px-2 py-2">Total:</td>
                                            <td class="px-2 py-2 whitespace-nowrap bg-gray-200">
                                                ${{ number_format($requisition->requisitionItems->sum('price'), 2) }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>

                    <section class="bg-white py-8  mx-auto max-w-screen-xl">
                            <h3 class="mb-4 text-lg font-medium text-gray-900">
                                {{ __('Approval History') }}
                            </h3>

                            <ol class="relative text-gray-500 ml-8 border-s border-gray-200">
                                @foreach ($requisition->approvals as $approval)
                                    <li class="mb-10 ms-6">
                                        @switch($approval->status)
                                            @case('approved')
                                                <span
                                                    class="absolute flex items-center justify-center w-8 h-8 bg-green-200 rounded-full -start-4 ring-4 ring-white">
                                                    <svg class="w-3.5 h-3.5 text-green-500" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M1 5.917 5.724 10.5 15 1.5" />
                                                    </svg>
                                                </span>
                                            @break

                                            @case('rejected')
                                                <span
                                                    class="absolute flex items-center justify-center w-8 h-8 bg-red-200 rounded-full -start-4 ring-4 ring-white">
                                                    <svg class="w-4 h-4 text-red-500" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                </span>
                                            @break

                                            @default
                                                @if ($requisition->status == 'rejected')
                                                    <span
                                                        class="absolute flex items-center justify-center w-8 h-8 bg-gray-200 rounded-full -start-4 ring-4 ring-white">
                                                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 20 20">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M10 6v4l3.276 3.276M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                        </svg>
                                                    </span>
                                                @else
                                                    <span
                                                        class="absolute flex items-center justify-center w-8 h-8 bg-yellow-200 rounded-full -start-4 ring-4 ring-white">
                                                        <svg class="w-4 h-4 text-yellow-500" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 20 20">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M10 6v4l3.276 3.276M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                        </svg>
                                                    </span>
                                                @endif
                                        @endswitch
                                        <h3 class="font-medium leading-tight">
                                            {{ $approval->approver->name }}
                                        </h3>
                                        <p class="text-sm">{{ $approval->comments }}</p>
                                        @if($approval->status == 'approved' || $approval->status == 'rejected')
                                        <p class="text-sm text-gray-400">
                                            {{ $approval->updated_at->format('d/m/Y H:i') }}
                                        </p>
                                        @endif
                                    </li>
                                @endforeach
                            </ol>
                    </section>

                    @if ($requisition->status === 'pending_approval' && $requisition->current_approver_id === auth()->id())
                        <div class="mt-6">
                            <h3 class="text-lg font-medium text-gray-900">{{ __('Approve or Reject') }}</h3>
                            <div class="mt-4">
                                <form action="{{ route('requisition.approve', $requisition) }}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <x-input-label for="comments" :value="__('Comments')" />
                                        <textarea name="comments" id="comments"
                                            class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
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
                                        <textarea name="comments" id="comments"
                                            class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
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
