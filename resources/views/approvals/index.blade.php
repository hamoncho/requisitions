<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Requisitions to Approve') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Pestañas -->
                    <div class="mb-4 border-b border-gray-200">
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
                            <li class="me-2">
                                <button id="pending-tab" data-tab="pending" class="tab-button inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 active">
                                    {{ __('Pending') }}
                                </button>
                            </li>
                            <li class="me-2">
                                <button id="approved-tab" data-tab="approved" class="tab-button inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">
                                    {{ __('Approved') }}
                                </button>
                            </li>
                            <li class="me-2">
                                <button id="rejected-tab" data-tab="rejected" class="tab-button inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">
                                    {{ __('Rejected') }}
                                </button>
                            </li>
                        </ul>
                    </div>

                    <!-- Contenido de las pestañas -->
                    <div id="pending-content" class="tab-content">
                        @if ($requisitions->isEmpty())
                            <p class="py-4">{{ __('No pending requisitions at this time.') }}</p>
                        @else
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('Folio') }}
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('Created by') }}
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">{{ __('Actions') }}</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($requisitions as $requisition)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $requisition->folio }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $requisition->user->name }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <a href="{{ route('requisition.show', $requisition) }}"
                                                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                        {{ __('View') }}
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>

                    <div id="approved-content" class="tab-content hidden">
                        @if ($approved->isEmpty())
                            <p class="py-4">{{ __('No approved requisitions at this time.') }}</p>
                        @else
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('Folio') }}
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('Created by') }}
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">{{ __('Actions') }}</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($approved as $requisition)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $requisition->folio }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $requisition->user->name }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <a href="{{ route('requisition.show', $requisition) }}"
                                                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                        {{ __('View') }}
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>

                    <div id="rejected-content" class="tab-content hidden">
                        @if ($rejected->isEmpty())
                            <p class="py-4">{{ __('No rejected requisitions at this time.') }}</p>
                        @else
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('Folio') }}
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                {{ __('Created by') }}
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">{{ __('Actions') }}</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($rejected as $requisition)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $requisition->folio }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $requisition->user->name }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <a href="{{ route('requisition.show', $requisition) }}"
                                                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                                        {{ __('View') }}
                                                    </a>
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
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    // Ocultar todos los contenidos
                    tabContents.forEach(content => {
                        content.classList.add('hidden');
                    });

                    // Desactivar todas las pestañas
                    tabs.forEach(t => {
                        t.classList.remove('active', 'border-indigo-500', 'text-indigo-600');
                        t.classList.add('border-transparent');
                    });

                    // Mostrar contenido seleccionado
                    const tabName = tab.getAttribute('data-tab');
                    document.getElementById(`${tabName}-content`).classList.remove('hidden');

                    // Activar pestaña seleccionada
                    tab.classList.add('active', 'border-indigo-500', 'text-indigo-600');
                    tab.classList.remove('border-transparent');
                });
            });
        });
    </script>

    <style>
        .tab-button.active {
            border-bottom-color: #6366f1;
            color: #4f46e5;
        }
    </style>
</x-app-layout>
