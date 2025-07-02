<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('History') }}
        </h2>
    </x-slot>

    <section class="bg-white py-8 px-16 mt-6 mx-auto max-w-screen-xl lg:py-16">
        <ol class="relative text-gray-500 border-s border-gray-200">
            <li class="mb-10 ms-6">
                <span
                    class="absolute flex items-center justify-center w-8 h-8 bg-green-200 rounded-full -start-4 ring-4 ring-white">
                    <svg class="w-3.5 h-3.5 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5.917 5.724 10.5 15 1.5" />
                    </svg>
                </span>
                <h3 class="font-medium leading-tight">Step 1</h3>
                <p class="text-sm">Step details here</p>
            </li>
            <li class="mb-10 ms-6">
                <span
                    class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -start-4 ring-4 ring-white">
                    <svg class="w-3.5 h-3.5 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 16">
                        <path
                            d="M18 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM6.5 3a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3.014 13.021l.157-.625A3.427 3.427 0 0 1 6.5 9.571a3.426 3.426 0 0 1 3.322 2.805l.159.622-6.967.023ZM16 12h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Zm0-3h-3a1 1 0 1 1 0-2h3a1 1 0 1 1 0 2Z" />
                    </svg>
                </span>
                <h3 class="font-medium leading-tight">Step 2</h3>
                <p class="text-sm">Step details here</p>
            </li>
            <li class="mb-10 ms-6">
                <span
                    class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -start-4 ring-4 ring-white">
                    <svg class="w-3.5 h-3.5 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 18 20">
                        <path
                            d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                    </svg>
                </span>
                <h3 class="font-medium leading-tight">Step 3</h3>
                <p class="text-sm">Step details here</p>
            </li>
            <li class="ms-6">
                <span
                    class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -start-4 ring-4 ring-white">
                    <svg class="w-3.5 h-3.5 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 18 20">
                        <path
                            d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2ZM7 2h4v3H7V2Zm5.7 8.289-3.975 3.857a1 1 0 0 1-1.393 0L5.3 12.182a1.002 1.002 0 1 1 1.4-1.436l1.328 1.289 3.28-3.181a1 1 0 1 1 1.392 1.435Z" />
                    </svg>
                </span>
                <h3 class="font-medium leading-tight">Step 4</h3>
                <p class="text-sm">Step details here</p>
            </li>
        </ol>
    </section>

    <div class="w-full max-w-md bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6">
        <form class="max-w-sm mx-auto">
            <div class="flex mb-8">
                <button id="states-button" data-dropdown-toggle="dropdown-states"
                    class="shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-800 dark:text-white dark:border-gray-700"
                    type="button">
                    <span id="selected-country" class="flex items-center">
                        USA
                    </span>
                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="dropdown-states"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="states-button">
                        <li>
                            <button type="button" data-country="USA"
                                class="country-option w-full px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center">
                                United States
                            </button>
                        </li>
                        <li>
                            <button type="button" data-country="Germany"
                                class="country-option w-full px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center">
                                Germany
                            </button>
                        </li>
                        <li>
                            <button type="button" data-country="Italy"
                                class="country-option w-full px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center">
                                Italy
                            </button>
                        </li>
                        <li>
                            <button type="button" data-country="China"
                                class="country-option w-full px-4 py-2 text-left hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center">
                                China
                            </button>
                        </li>
                    </ul>
                </div>
                <label for="states" class="sr-only">Seleccionar estado</label>
                <select id="states"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-e-lg border-s-0 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" selected disabled>Selecciona un estado</option>
                    <!-- Los estados se cargarán dinámicamente según el país -->
                </select>
            </div>
        </form>
        <script>
            // Datos de estados por país
            const statesData = {
                "USA": [{
                        value: "CA",
                        text: "California"
                    },
                    {
                        value: "TX",
                        text: "Texas"
                    },
                    {
                        value: "FL",
                        text: "Florida"
                    },
                    {
                        value: "NY",
                        text: "New York"
                    },
                    {
                        value: "WA",
                        text: "Washington"
                    },
                    {
                        value: "IL",
                        text: "Illinois"
                    },
                    {
                        value: "AZ",
                        text: "Arizona"
                    }
                ],
                "Germany": [{
                        value: "BY",
                        text: "Bavaria"
                    },
                    {
                        value: "BW",
                        text: "Baden-Württemberg"
                    },
                    {
                        value: "BE",
                        text: "Berlin"
                    },
                    {
                        value: "HH",
                        text: "Hamburg"
                    },
                    {
                        value: "HE",
                        text: "Hesse"
                    },
                    {
                        value: "NW",
                        text: "North Rhine-Westphalia"
                    }
                ],
                "Italy": [{
                        value: "RM",
                        text: "Rome"
                    },
                    {
                        value: "MI",
                        text: "Milan"
                    },
                    {
                        value: "NA",
                        text: "Naples"
                    },
                    {
                        value: "TO",
                        text: "Turin"
                    },
                    {
                        value: "PA",
                        text: "Palermo"
                    },
                    {
                        value: "GE",
                        text: "Genoa"
                    }
                ],
                "China": [{
                        value: "BJ",
                        text: "Beijing"
                    },
                    {
                        value: "SH",
                        text: "Shanghai"
                    },
                    {
                        value: "GD",
                        text: "Guangdong"
                    },
                    {
                        value: "JS",
                        text: "Jiangsu"
                    },
                    {
                        value: "ZJ",
                        text: "Zhejiang"
                    },
                    {
                        value: "SD",
                        text: "Shandong"
                    }
                ]
            };

            // Inicializar con datos de USA
            updateStatesDropdown("USA");

            // Event listeners para los botones de país
            document.querySelectorAll('.country-option').forEach(button => {
                button.addEventListener('click', function() {
                    const country = this.getAttribute('data-country');
                    updateCountryDisplay(country);
                    updateStatesDropdown(country);
                });
            });

            // Actualizar la visualización del país seleccionado
            function updateCountryDisplay(country) {
                const selectedCountry = document.getElementById('selected-country');
                const button = document.querySelector(`.country-option[data-country="${country}"]`);

                if (button) {
                    // Clonar el contenido del botón seleccionado
                    const flag = button.querySelector('.country-flag').cloneNode(true);
                    const text = document.createTextNode(country);

                    // Limpiar y actualizar
                    selectedCountry.innerHTML = '';
                    selectedCountry.appendChild(flag);
                    selectedCountry.appendChild(text);
                }
            }

            // Actualizar el dropdown de estados
            function updateStatesDropdown(country) {
                const statesSelect = document.getElementById('states');

                // Limpiar opciones existentes (excepto la primera)
                while (statesSelect.options.length > 1) {
                    statesSelect.remove(1);
                }

                // Añadir nuevas opciones
                if (statesData[country]) {
                    statesData[country].forEach(state => {
                        const option = document.createElement('option');
                        option.value = state.value;
                        option.textContent = state.text;
                        statesSelect.appendChild(option);
                    });
                }
            }
        </script>
</x-app-layout>
