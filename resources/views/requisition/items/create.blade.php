<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('requisition.add_item_to') }} #{{ $requisition->folio }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('requisition_items.store', $requisition) }}">
                        @csrf

                        <!-- Name -->
                        <div class="mb-4">
                            <x-input-label for="name" :value="__('requisition.description')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- General Budget Item -->
                        <div class="mb-4">
                            <x-input-label for="general_budget_item_id" :value="__('requisition.general_budget_item')" />
                            <select id="general_budget_item_id" name="general_budget_item_id"
                                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <option value="">Seleccione Una General Partida</option>
                                @foreach ($general_budget_items as $generalItem)
                                    <option value="{{ $generalItem->id }}"> {{$generalItem->code}}: {{ $generalItem->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('general_budget_item_id')" class="mt-2" />
                        </div>

                        <!-- Budget Item -->
                        <div class="mb-4">
                            <x-input-label for="budget_item_id" :value="__('requisition.budget_item')" />
                            <select id="budget_item_id" name="budget_item_id"
                                class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" disabled>
                                <option value="">Primero Seleccione Una Parida General Primero</option>
                            </select>
                            <x-input-error :messages="$errors->get('budget_item_id')" class="mt-2" />
                        </div>

                        <!-- Amount -->
                        <div class="mb-4">
                            <x-input-label for="amount" :value="__('requisition.amount')" />
                            <x-text-input id="amount" class="block mt-1 w-full" type="number" name="amount" :value="old('amount')" required autofocus />
                            <x-input-error :messages="$errors->get('amount')" class="mt-2" />
                        </div>

                        <!-- Unit -->
                        <div class="mb-4">
                            <x-input-label for="unit" :value="__('requisition.unit')" />
                            <x-text-input id="unit" class="block mt-1 w-full" type="text" name="unit" :value="old('unit')" required />
                            <x-input-error :messages="$errors->get('unit')" class="mt-2" />
                        </div>

                        <!-- Price -->
                        <div class="mb-4">
                            <x-input-label for="price" :value="__('requisition.price')" />
                            <x-text-input id="price" class="block mt-1 w-full" type="number" step="0.01" name="price" :value="old('price')" required />
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('button.add_item') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const generalSelect = document.getElementById('general_budget_item_id');
            const budgetItemSelect = document.getElementById('budget_item_id');

            // Prepara los datos de budget items por general budget item
            const budgetItemsData = {
                @foreach($general_budget_items as $generalItem)
                    {{ $generalItem->id }}: [
                        @foreach($generalItem->budgetItems as $item)
                            {
                                id: "{{ $item->id }}",
                                text: "{{ $item->full_code }} : {{ $item->name }}"
                            },
                        @endforeach
                    ],
                @endforeach
            };

            // Evento para cuando cambia la selección de General Budget Item
            generalSelect.addEventListener('change', function() {
                const selectedId = this.value;

                // Habilitar el select de budget items si se seleccionó algo
                budgetItemSelect.disabled = !selectedId;

                // Limpiar opciones existentes
                while (budgetItemSelect.options.length > 0) {
                    budgetItemSelect.remove(0);
                }

                // Agregar opción por defecto
                const defaultOption = document.createElement('option');
                defaultOption.value = "";
                defaultOption.textContent = selectedId ? "Seleccione Una Partida Espesifica" : "Primero Seleccione Una Partida General";
                budgetItemSelect.appendChild(defaultOption);

                // Si hay una selección válida, agregar los budget items correspondientes
                if (selectedId && budgetItemsData[selectedId]) {
                    budgetItemsData[selectedId].forEach(item => {
                        const option = document.createElement('option');
                        option.value = item.id;
                        option.textContent = item.text;
                        budgetItemSelect.appendChild(option);
                    });
                }
            });
        });
    </script>
</x-app-layout>
