<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project Details') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <!-- Project Card -->
            <div class="bg-white overflow-hidden shadow-lg rounded-lg">
                <div class="p-6 sm:p-8 border-b border-gray-200">
                    <div class="flex flex-col sm:flex-row justify-between items-start">
                        <div>
                            <p class="text-sm font-semibold text-blue-500 uppercase tracking-wider">Project</p>
                            <h3 class="text-3xl font-bold text-gray-900 mt-1">{{ $project->description }}</h3>
                        </div>
                        <div class="mt-4 sm:mt-0 sm:ml-4 flex-shrink-0">
                            <span
                                class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                Index: {{ $project->index }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Action Section -->
                <div class="p-6 sm:p-8 border-b border-gray-200">
                    <h4 class="text-lg font-semibold text-gray-800">Associated Action</h4>
                    <p class="text-gray-600">
                        <a href="{{ route('action.show', $project->action) }}"
                            aria-label="Ir a action {{ $project->action->index }}"
                            class="text-blue-600 hover:underline text-md font-medium">
                            {{ $project->action->index }}
                        </a>
                        {{ $project->action->name }}
                        <a href="{{ route('action.show', $project->action) }}" aria-label="Ir a accion {{ $project->action->index }}"
                            class="inline-block text-gray-600 hover:text-blue-500 transition-colors duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </p>

                </div>

                <!-- Indicators and Processes Section -->
                <div class="p-6 sm:p-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800">Indicators</h4>
                            <ol class="list-inside mt-4 space-y-2">
                                @forelse($project->indicators as $indicator)
                                    <li class="leading-none">
                                        <a href="{{ route('indicator.show', $indicator) }}"
                                            aria-label="Ir a Indicator {{ $indicator->index }}"
                                            class="text-blue-600 hover:underline text-md font-medium">
                                            {{ $indicator->index }}
                                        </a>
                                        {{ $indicator->description }}.
                                        <a href="{{ route('indicator.show', $indicator) }}"
                                            aria-label="Ir a Indicator {{ $indicator->index }}"
                                            class="inline-block text-gray-600 hover:text-blue-500 transition-colors duration-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </li>
                                @empty
                                    <li class="text-gray-500">No indicators for this project.</li>
                                @endforelse
                            </ol>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-gray-800">Processes</h4>
                            <div class="mt-4 flex flex-wrap gap-2">
                                @forelse($project->processess as $process)
                                    <a href="{{ route('process.show', $process) }}"
                                        class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-200 transition duration-150">
                                        {{ $process->index }}
                                    </a>
                                @empty
                                    <p class="text-gray-500">No processes for this project.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center">
                <a href="{{ route('project.list') }}"
                    class="inline-flex items-center px-6 py-3 bg-blue-950 border border-transparent rounded-md font-semibold text-white tracking-widest hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150">
                    Back to Projects
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
