<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('requisition.create_requisition') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section>
                        <header class="flex justify-between">
                            <div>
                                <h2 class="text-lg font-medium text-gray-900">
                                    {{ __('requisition.create_requisition') }}
                                </h2>

                                <p class="mt-1 text-sm text-gray-600">
                                    {{ __('requisition.create_description') }}
                                </p>
                            </div>
                            <x-secondary-link-button href="{{ route('home') }}">
                                {{ __('button.back') }}
                            </x-secondary-link-button>
                        </header>

                        <!-- Notificación -->
                        <div id="notification" class="hidden p-4 mb-4 rounded-lg text-sm"
                             data-success-class="bg-green-100 text-green-800"
                             data-error-class="bg-red-100 text-red-800">
                        </div>

                        <form id="requisitionForm" method="post" action="{{ route('requisition.store') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('post')
                            <!-- Proceso -->
                            <div>
                                <x-input-label for="processes_id" :value="__('requisition.process')" />
                                <select id="processes_id" name="processes_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                    <option value="">Seleccione un proceso</option>
                                    @foreach ($processes as $item)
                                        <option value="{{ $item->id }}">{{ $item->index}}</option>
                                    @endforeach
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('processes_id')" />
                            </div>

                            <!-- Proyecto -->
                            <div>
                                <x-input-label for="projects_id" :value="__('requisition.project')" />
                                <select id="projects_id" name="projects_id" disabled class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                    <option value="">Seleccione un proceso primero</option>
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('projects_id')" />
                            </div>

                            <!-- Indicador -->
                            <div>
                                <x-input-label for="indicators_id" :value="__('requisition.indicator')" />
                                <select id="indicators_id" name="indicators_id" disabled class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                    <option value="">Seleccione un proyecto primero</option>
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('indicators_id')" />
                            </div>

                            <!-- Indicador de carga -->
                            <div id="loading" class="hidden flex items-center justify-center py-4">
                                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                <span>Cargando datos...</span>
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('button.create') }}</x-primary-button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Elementos del DOM
        const processesSelect = document.getElementById('processes_id');
        const projectsSelect = document.getElementById('projects_id');
        const indicatorsSelect = document.getElementById('indicators_id');
        const loadingElement = document.getElementById('loading');
        const notificationElement = document.getElementById('notification');
        const form = document.getElementById('requisitionForm');

        // URL base para las API
        const API_BASE_URL = '{{ url("/api") }}';

        // Función para mostrar notificación
        function showNotification(message, type = 'success') {
            notificationElement.textContent = message;
            notificationElement.className = `p-4 mb-4 rounded-lg text-sm ${type === 'success' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'}`;
            notificationElement.classList.remove('hidden');

            // Ocultar después de 5 segundos
            setTimeout(() => {
                notificationElement.classList.add('hidden');
            }, 5000);
        }

        // Función para manejar errores de la API
        function handleApiError(error) {
            console.error('Error en la API:', error);
            showNotification('Error al cargar los datos. Por favor, intente nuevamente.', 'error');
        }

        // Función para cargar proyectos basados en el proceso seleccionado
        async function loadProjects(processId) {
            if (!processId) {
                projectsSelect.innerHTML = '<option value="">Seleccione un proceso primero</option>';
                projectsSelect.disabled = true;
                indicatorsSelect.innerHTML = '<option value="">Seleccione un proyecto primero</option>';
                indicatorsSelect.disabled = true;
                return;
            }

            // Mostrar indicador de carga
            //loadingElement.classList.remove('hidden');

            try {
                // Obtener proyectos desde la API
                const response = await fetch(`${API_BASE_URL}/processes/${processId}/projects`);

                if (!response.ok) {
                    throw new Error(`Error en la API: ${response.status}`);
                }

                const projects = await response.json();

                // Actualizar select de proyectos
                projectsSelect.innerHTML = projects.length > 0
                    ? '<option value="">Seleccione un proyecto</option>'
                    : '<option value="">No hay proyectos disponibles</option>';

                projects.forEach(project => {
                    const option = document.createElement('option');
                    option.value = project.id;
                    option.textContent = project.index + ": " + project.description;
                    projectsSelect.appendChild(option);
                });

                projectsSelect.disabled = projects.length === 0;

                // Resetear indicadores
                indicatorsSelect.innerHTML = '<option value="">Seleccione un proyecto primero</option>';
                indicatorsSelect.disabled = true;

                if (projects.length > 0) {
                    projectsSelect.value = projects[0].id;
                    await loadIndicators(projects[0].id);
                }
            } catch (error) {
                handleApiError(error);
            } finally {
                loadingElement.classList.add('hidden');
            }
        }

        // Función para cargar indicadores basados en el proyecto seleccionado
        async function loadIndicators(projectId) {
            if (!projectId) {
                indicatorsSelect.innerHTML = '<option value="">Seleccione un proyecto primero</option>';
                indicatorsSelect.disabled = true;
                return;
            }

            // Mostrar indicador de carga
            loadingElement.classList.remove('hidden');

            try {
                // Obtener indicadores desde la API
                const response = await fetch(`${API_BASE_URL}/projects/${projectId}/indicators`);

                if (!response.ok) {
                    throw new Error(`Error en la API: ${response.status}`);
                }

                const indicators = await response.json();

                // Actualizar select de indicadores
                indicatorsSelect.innerHTML = indicators.length > 0
                    ? '<option value="">Seleccione un indicador</option>'
                    : '<option value="">No hay indicadores disponibles</option>';

                indicators.forEach(indicator => {
                    const option = document.createElement('option');
                    option.value = indicator.id;
                    option.textContent = indicator.index + ": " + indicator.description;
                    indicatorsSelect.appendChild(option);
                });

                indicatorsSelect.disabled = indicators.length === 0;

                if (indicators.length > 0) {
                    indicatorsSelect.value = indicators[0].id;
                }
            } catch (error) {
                handleApiError(error);
            } finally {
                loadingElement.classList.add('hidden');
            }
        }

        // Event Listeners
        document.addEventListener('DOMContentLoaded', () => {
            // Cargar proyectos cuando cambia el proceso
            processesSelect.addEventListener('change', function() {
                loadProjects(this.value);
            });

            // Cargar indicadores cuando cambia el proyecto
            projectsSelect.addEventListener('change', function() {
                loadIndicators(this.value);
            });

            // Validar formulario antes de enviar
            form.addEventListener('submit', function(e) {
                if (!processesSelect.value || !projectsSelect.value || !indicatorsSelect.value) {
                    e.preventDefault();
                    showNotification('Por favor complete todos los campos', 'error');
                }
            });
        });
    </script>
</x-app-layout>
