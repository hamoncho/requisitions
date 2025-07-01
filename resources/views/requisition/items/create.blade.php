<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Item to Requisition') }} #{{ $requisition->folio }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('requisition_items.store', $requisition) }}">
                        @csrf

                        <!-- Budget Item -->
                        <div class="mb-4">
                            <x-input-label for="budget_item_id" :value="__('Budget Item')" />
                            <select id="budget_item_id" name="budget_item_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                @foreach ($budget_items as $budgetItem)
                                    <option value="{{ $budgetItem->id }}">{{ $budgetItem->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('budget_item_id')" class="mt-2" />
                        </div>

                        <!-- Amount -->
                        <div class="mb-4">
                            <x-input-label for="amount" :value="__('Amount')" />
                            <x-text-input id="amount" class="block mt-1 w-full" type="number" name="amount" :value="old('amount')" required autofocus />
                            <x-input-error :messages="$errors->get('amount')" class="mt-2" />
                        </div>

                        <!-- Unit -->
                        <div class="mb-4">
                            <x-input-label for="unit" :value="__('Unit')" />
                            <x-text-input id="unit" class="block mt-1 w-full" type="text" name="unit" :value="old('unit')" required />
                            <x-input-error :messages="$errors->get('unit')" class="mt-2" />
                        </div>

                        <!-- Type Resource -->
                        <div class="mb-4">
                            <x-input-label for="type_resource" :value="__('Type Resource')" />
                            <x-text-input id="type_resource" class="block mt-1 w-full" type="text" name="type_resource" :value="old('type_resource')" required />
                            <x-input-error :messages="$errors->get('type_resource')" class="mt-2" />
                        </div>

                        <!-- Price -->
                        <div class="mb-4">
                            <x-input-label for="price" :value="__('Price')" />
                            <x-text-input id="price" class="block mt-1 w-full" type="number" step="0.01" name="price" :value="old('price')" required />
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Add Item') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
