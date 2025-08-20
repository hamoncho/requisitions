<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('action.title_show') }}
        </h2>
        <x-back-arrow-link href="{{ route('action.list') }}" />
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <!-- Action Card -->
            <div class="bg-white overflow-hidden shadow-lg rounded-lg">
                <div class="p-6 sm:p-8 border-b border-gray-200">
                    <div class="flex flex-col sm:flex-row justify-between items-start">
                        <div>
                            <p class="text-sm font-semibold text-blue-500 uppercase tracking-wider">{{__('action.action')}}</p>
                            <h3 class="text-3xl font-bold text-gray-900 mt-1">{{ $action->name }}</h3>
                        </div>
                        <div class="mt-4 sm:mt-0 sm:ml-4 flex-shrink-0">
                            <span
                                class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                {{__('action.index')}}: {{ $action->index }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Goals -->
                <div class="p-6 sm:p-8">
                    <p class="font-semibold text-gray-600">{{__('objective.formula')}}</p>
                    <p class="text-lg text-gray-600">{{ $action->formula }}</p>
                    <h5 class="font-semibold text-lg text-gray-700">{{__('action.goals')}}</h5>
                    <ul class="mt-2 list-disc list-inside space-y-1 text-gray-600">
                        @forelse($action->goals as $goal)
                            <li><span class="font-semibold text-gray-800">{{ $goal->year }}:</span>
                                {{ $goal->result }}</li>
                        @empty
                            <li class="text-gray-500">{{__('action.no_goals')}}</li>
                        @endforelse
                    </ul>
                </div>

                <!-- Projects -->
                <div class="p-4 sm:p-6 space-y-4 border-t border-gray-200">
                    <h5 class="font-semibold text-lg text-gray-700">{{__('objective.projects')}}</h5>
                    @forelse($action->projects as $project)
                        <div class="p-4 border border-gray-200 rounded-lg bg-gray-50">
                            <p class="font-bold text-gray-800">
                                <a href="{{ route('project.show', $project) }}"
                                    class="text-blue-600 hover:underline text-md font-medium">
                                    {{ $project->index }}
                                </a>
                                    {{ $project->description }}
                            </p>
                            <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4">
                                <!-- Indicators -->
                                <div>
                                    <h6 class="font-semibold text-gray-600">{{__('objective.indicators')}}</h6>
                                    <ul class="mt-2 list-disc list-inside space-y-1 text-gray-600">
                                        @forelse($project->indicators as $indicator)
                                            <li>
                                                <a href="{{ route('indicator.show', $indicator) }}"
                                                    class="text-blue-600 hover:underline text-md font-medium">
                                                    {{ $indicator->index }}
                                                </a>
                                                {{ $indicator->description }}
                                            </li>
                                        @empty
                                            <li class="text-gray-500">{{__('objective.no_indicators')}}</li>
                                        @endforelse
                                    </ul>
                                </div>
                                <!-- Processes -->
                                <div>
                                    <h6 class="font-semibold text-gray-600">{{__('objective.processes')}}</h6>
                                    <div class="mt-4 flex flex-wrap gap-2">
                                        @forelse($project->processess as $process)
                                            <a href="{{ route('process.show', $process) }}"
                                                class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm font-medium hover:bg-gray-200 transition duration-150">
                                                {{ $process->index }}
                                            </a>
                                        @empty
                                            <p class="text-gray-500">{{__('objective.no_processes')}}</p>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-500">{{__('objective.no_projects')}}</p>
                    @endforelse
                </div>
            </div>

            <div class="mt-8 text-center">
                <a href="{{ route('action.list') }}"
                    class="inline-flex items-center px-6 py-3 bg-blue-950 border border-transparent rounded-md font-semibold text-white tracking-widest hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150">
                    {{__('action.back_button')}}
                </a>
            </div>
        </div>
    </div>

</x-app-layout>
