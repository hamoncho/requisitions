<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Action Details') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <!-- Action Card -->
            <div class="bg-white overflow-hidden shadow-lg rounded-lg">
                <div class="p-6 sm:p-8 border-b border-gray-200">
                    <div class="flex flex-col sm:flex-row justify-between items-start">
                        <div>
                            <p class="text-sm font-semibold text-blue-500 uppercase tracking-wider">Action</p>
                            <h3 class="text-3xl font-bold text-gray-900 mt-1">{{ $action->name }}</h3>
                            <p class="text-lg text-gray-600 mt-2">{{ $action->formula }}</p>
                        </div>
                        <div class="mt-4 sm:mt-0 sm:ml-4 flex-shrink-0">
                            <span
                                class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                Index: {{ $action->index }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Goals -->
                <div class="p-6 sm:p-8">
                    <h5 class="font-semibold text-lg text-gray-700">Goals</h5>
                    <ul class="mt-2 list-disc list-inside space-y-1 text-gray-600">
                        @forelse($action->goals as $goal)
                            <li><span class="font-semibold text-gray-800">{{ $goal->year }}:</span>
                                {{ $goal->result }}</li>
                        @empty
                            <li class="text-gray-500">No goals for this action.</li>
                        @endforelse
                    </ul>
                </div>

                <!-- Projects -->
                <div class="p-6 space-y-4 border-t border-gray-200">
                    <h5 class="font-semibold text-lg text-gray-700">Projects</h5>
                    @forelse($action->projects as $project)
                        <div class="p-4 border border-gray-200 rounded-lg bg-gray-50">
                            <p class="font-bold text-gray-800">{{ $project->index }} -
                                {{ $project->description }}</p>
                            <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4">
                                <!-- Indicators -->
                                <div>
                                    <h6 class="font-semibold text-gray-600">Indicators</h6>
                                    <ul class="mt-2 list-disc list-inside space-y-1 text-gray-600">
                                        @forelse($project->indicators as $indicator)
                                            <li>{{ $indicator->index }} - {{ $indicator->description }}
                                            </li>
                                        @empty
                                            <li class="text-gray-500">No indicators.</li>
                                        @endforelse
                                    </ul>
                                </div>
                                <!-- Processes -->
                                <div>
                                    <h6 class="font-semibold text-gray-600">Processes</h6>
                                    <ul class="mt-2 list-disc list-inside space-y-1 text-gray-600">
                                        @forelse($project->processess as $process)
                                            <li>{{ $process->index }}</li>
                                        @empty
                                            <li class="text-gray-500">No processes.</li>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-500">No projects for this action.</p>
                    @endforelse
                </div>
            </div>

            <div class="mt-8 text-center">
                <a href="{{ route('action.list') }}"
                    class="inline-flex items-center px-6 py-3 bg-blue-950 border border-transparent rounded-md font-semibold text-white tracking-widest hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150">
                    Back to Actions
                </a>
            </div>
        </div>
    </div>

</x-app-layout>
