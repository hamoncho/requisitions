<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('process.title_show') }}
        </h2>
        <x-back-arrow-link href="{{ route('process.list') }}" />
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <!-- Process Card -->
            <div class="bg-white overflow-hidden shadow-lg rounded-lg">
                <div class="p-6 sm:p-8 border-b border-gray-200">
                    <div class="flex flex-col sm:flex-row justify-between items-start">
                        <div>
                            <p class="text-sm font-semibold text-blue-500 uppercase tracking-wider">
                                {{ __('process.process') }}</p>
                            <h3 class="text-3xl font-bold text-gray-900 mt-1">{{ $process->index }}</h3>
                        </div>
                        <div class="mt-4 sm:mt-0 sm:ml-4 flex-shrink-0">
                            <span
                                class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                {{ $process->index }}
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Projects -->
                <div class="p-4 sm:p-8 space-y-4 border-t border-gray-200">
                    <h5 class="font-semibold text-lg text-gray-700">{{ __('process.associated_projects') }}</h5>
                    @forelse($process->projects as $project)
                        <div class="p-4 border border-gray-200 rounded-lg bg-gray-50">
                            <p class="font-bold text-gray-800">
                                <a href="{{ route('project.show', $project) }}"
                                    class="text-blue-600 hover:underline text-md font-medium">
                                    {{ $project->index }}
                                </a>
                                {{ $project->description }}
                            </p>

                            <div class="mt-4">
                                <!-- Indicators -->
                                <div>
                                    <h6 class="font-semibold text-gray-600">{{ __('objective.indicators') }}</h6>
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
                                            <li class="text-gray-500">{{ __('objective.no_indicators') }}</li>
                                        @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-500">{{ __('objective.no_projects') }}</p>
                    @endforelse
                </div>
            </div>

            <div class="mt-8 text-center">
                <a href="{{ route('process.list') }}"
                    class="inline-flex items-center px-6 py-3 bg-blue-950 border border-transparent rounded-md font-semibold text-white tracking-widest hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150">
                    {{ __('process.back_button') }}
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
