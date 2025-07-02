<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Requisition') }} Folio #{{ $requisition->folio }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-2 py-6 sm:p-6 text-gray-900">
                    <div class="flex justify-between flex-col sm:flex-row">
                        <lu class="list-none bg-gray-100 rounded-md grow">
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
                        </lu>
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
                            @if ($requisition->status == 'draft')
                                <div class="">
                                    <a href="{{ route('requisition_items.create', $requisition) }}"
                                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                        {{ __('Add New Item') }}
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                            role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    @if ($requisitionItems->isEmpty())
                        <p>{{ __('No items found for this requisition.') }}</p>
                    @else
                        <div class="overflow-x-auto mt-2">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('Budget Item') }}</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('Description') }}</th>
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
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">{{ __('Actions') }}</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($requisitionItems as $item)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $item->budgetItem->full_code ?? 'N/A' }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $item->name }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->amount }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->unit }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->type_resource }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->price }}</td>
                                            @if ($requisition->status == 'draft')
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <a href="{{ route('requisition_items.edit', [$requisition, $item]) }}"
                                                        class="text-indigo-600 hover:text-indigo-900">{{ __('Edit') }}</a>
                                                    <form
                                                        action="{{ route('requisition_items.destroy', [$requisition, $item]) }}"
                                                        method="POST" class="inline-block ml-2">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-red-600 hover:text-red-900"
                                                            onclick="return confirm('Are you sure?')">{{ __('Delete') }}</button>
                                                    </form>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            @if ($requisition->status == 'draft')
                                <div class="flex justify-between items-center bg-gray-200 mt-4">
                                    <div class="ml-4">
                                        {{ __('This Requisition will be sent to ') }}
                                        <a href="#" class="font-semibold underline">
                                            {{ Auth::user()->supervisor->name }}
                                        </a>

                                    </div>
                                    <form class="" method="POST"
                                        action="{{ route('requisition.start_approval_process', $requisition) }}">
                                        @csrf
                                        <x-primary-button class="">
                                            {{ __('Send') }}
                                        </x-primary-button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
