<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('requisition.requisitions') }}
        </h2>
    </x-slot>


    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">{{ __('requisition.download_all_requisitions') }}</h3>
                    <x-primary-link-button href="{{ route('allpdf.requisition') }}">{{ __('button.download_pdf')}}</x-primary-link-button>
                </div>
             </div>
         </div>
    </div>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4">
                        <h3 class="text-lg font-medium text-gray-900">{{ __('requisition.set_folio') }}</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            {{ __('requisition.current_highest_folio') }}:
                            {{ $max_folio }}
                        </p>
                        <form action="{{ route('requisition.setNextFolio') }}" method="POST">
                            @csrf
                            <div class="mt-4">
                                <x-input-label for="next_folio" :value="__('requisition.next_folio')" />
                                <x-text-input id="next_folio" class="block mt-1 w-full" type="number" name="next_folio"
                                    :value="$max_folio + 1" required />
                                <x-input-error :messages="$errors->get('next_folio')" class="mt-2" />
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button class="ml-4">
                                    {{ __('requisition.set_folio') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>

                    <h3 class="text-lg font-medium text-gray-900">{{ __('requisition.requisition') }}</h3>
                    <div class="mt-4">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('requisition.folio') }}

                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('requisition.status') }}
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ __('requisition.actions') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($requisitions as $requisition)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="{{ route('requisition.show', $requisition) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                {{ $requisition->folio }}
                                            </a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @switch($requisition->status)
                                                @case('draft')
                                                    <span
                                                        class="bg-gray-100 text-gray-800 text-sm font-medium me-2 px-3 py-1 rounded-md">
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
                                                    <span
                                                        class="bg-green-100 text-green-800 text-sm font-medium me-2 px-3 py-1 rounded-md">
                                                        {{ __('requisition.approved') }}
                                                    </span>
                                                @break

                                                @case('rejected')
                                                    <span
                                                        class="bg-red-100 text-red-800 text-sm font-medium me-2 px-3 py-1 rounded-md">
                                                        {{ __('requisition.rejected') }}
                                                    </span>
                                                @break

                                                @default
                                                    <span
                                                        class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-3 py-1 rounded-md">
                                                        {{ $requisition->status }}
                                                    </span>
                                            @endswitch
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if ($requisition->status == 'draft' || $requisition->status == 'system')
                                                <form action="{{ route('requisition.destroy', $requisition) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <x-danger-button type="submit">
                                                        {{ __('button.delete') }}
                                                    </x-danger-button>
                                                </form>
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

    <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">{{ __('requisition.delete_all_requisitions') }}</h3>
                    <form action="{{ route('requisition.truncate') }}"
                        method="POST">
                        @csrf
                        @method('DELETE')
                        <x-danger-button type="submit">
                            {{ __('button.delete') }}
                        </x-danger-button>
                    </form>
                </div>
             </div>
         </div>
    </div>


</x-app-layout>
