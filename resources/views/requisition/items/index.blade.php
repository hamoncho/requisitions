<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('requisition.folio') }} {{ $requisition->folio }}
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
                                <b class="font-bold">{{ __('requisition.project') }}: </b>
                                {{ $requisition->indicator->project->index }} -
                                {{ $requisition->indicator->project->description }}
                            </li>

                            <li class="px-2 sm:px-6 py-1 leading-none">
                                <b class="font-bold">{{ __('requisition.indicator') }}: </b>
                                {{ $requisition->indicator->index }} -
                                {{ $requisition->indicator->description }}
                            </li>

                            <li class="px-2 sm:px-6 pb-2">
                                <b class="font-bold">{{ __('requisition.create_by') }}: </b>
                                {{ $requisition->user->name }}
                            </li>
                        </ul>
                        <div class="sm:ml-6 ml-0 mb-2 min-w-fit flex md:flex-col justify-between">
                            <div>
                                {{__('requisition.status')}}:
                                @switch($requisition->status)
                                    @case('draft')
                                        <span class="bg-gray-100 text-gray-800 text-sm font-medium me-2 px-3 py-1 rounded-md">
                                            {{ __('requisition.draft') }}
                                        </span>
                                    @break

                                    @case('pending_approval')
                                        <span
                                            class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-3 py-1 rounded-md">
                                            {{ __('requisition.pending_approval') }}
                                        </span>
                                    @break

                                    @case('approved')
                                        <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-3 py-1 rounded-md">
                                            {{ __('requisition.approved') }}
                                        </span>
                                    @break

                                    @case('rejected')
                                        <span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-3 py-1 rounded-md">
                                            {{ requisition.rejected }}
                                        </span>
                                    @break

                                    @default
                                        <span class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-3 py-1 rounded-md">
                                            {{ $requisition->status }}
                                        </span>
                                @endswitch
                            </div>
                            @if ($requisition->status == 'draft')
                                <div class="">
                                    <a href="{{ route('requisition_items.create', $requisition) }}"
                                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                        {{ __('button.add_new_item') }}
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

                    @if ($requisitionItems->isEmpty())
                        <p>{{ __('requisition.no_items_found') }}</p>
                    @else
                        <div class="overflow-x-auto mt-2">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr class="divide-x divide-gray-200">
                                        <th scope="col"
                                            class="w-16 px-2 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('requisition.p_p') }}</th>
                                        <th scope="col"
                                            class="px-2 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('requisition.description') }}</th>
                                        <th scope="col"
                                            class="w-20 px-2 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('requisition.amount') }}</th>
                                        <th scope="col"
                                            class="w-32 px-2 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('requisition.unit') }}</th>
                                        <th scope="col"
                                            class="w-32 px-2 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('requisition.resource_type') }}</th>
                                        <th scope="col"
                                            class="w-32 px-2 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('requisition.price') }}</th>

                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($requisitionItems as $item)
                                        <tr class="divide-gray-200">
                                            <td class="px-2 py-2 whitespace-nowrap">
                                                {{ $item->budgetItem->full_code ?? 'N/A' }}
                                            </td>
                                            <td class="px-2 py-2 whitespace-nowrap">
                                                {{ $item->name }}
                                            </td>
                                            <td class="px-2 py-2 whitespace-nowrap">{{ $item->amount }}</td>
                                            <td class="px-2 py-2 whitespace-nowrap">{{ $item->unit }}</td>
                                            <td class="px-2 py-2 whitespace-nowrap">{{ $item->type_resource }}</td>
                                            <td class="px-2 py-2 whitespace-nowrap">${{ number_format($item->price, 2) }}</td>
                                            @if ($requisition->status == 'draft')
                                                <td class="w-24 px-2 py-2 whitespace-nowrap text-right text-sm font-medium">
                                                    <a href="{{ route('requisition_items.edit', [$requisition, $item]) }}"
                                                        class="text-indigo-600 hover:text-indigo-900">{{ __('button.edit') }}</a>
                                                    <form
                                                        action="{{ route('requisition_items.destroy', [$requisition, $item]) }}"
                                                        method="POST" class="inline-block ml-2">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-red-600 hover:text-red-900"
                                                            onclick="return confirm('Are you sure?')">{{ __('button.delete') }}</button>
                                                    </form>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="5" class="text-right font-bold px-2 py-2">{{__('requisition.total')}}:</td>
                                        <td class="px-2 py-2 whitespace-nowrap bg-gray-200">
                                            ${{ number_format($requisition->requisitionItems->sum('price'), 2) }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            @if ($requisition->status == 'draft')
                                <div class="flex justify-between items-center bg-gray-200 mt-4">
                                    <div class="ml-4">
                                        {{ __('requisition.will_send_to') }}
                                        <a href="#" class="font-semibold underline">
                                            {{ Auth::user()->supervisor->name }}
                                        </a>

                                    </div>
                                    <form class="" method="POST"
                                        action="{{ route('requisition.start_approval_process', $requisition) }}">
                                        @csrf
                                        <x-primary-button class="">
                                            {{ __('button.send') }}
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
