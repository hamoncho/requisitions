<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('project.title') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-8 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach ($projects as $project)
                            <a href="{{ route('project.show', $project) }}" class="block transform hover:-translate-y-1 transition-transform duration-150">
                                <div class="flex flex-col justify-between h-full bg-white rounded-lg shadow-lg overflow-hidden border-t-4 border-blue-950 hover:shadow-xl transition-shadow duration-150">
                                    <div class="p-6">
                                        <div class="flex justify-between items-baseline">
                                            <h3 class="text-lg font-semibold text-gray-900 truncate pr-2" title="{{ $project->description }}">{{ $project->description }}</h3>
                                            <span class="text-xs font-mono text-gray-500 flex-shrink-0">#{{ $project->index }}</span>
                                        </div>
                                        <div class="mt-4 pt-3 border-t border-gray-200">
                                            <h4 class="text-xs font-bold text-gray-500 uppercase tracking-wider">{{__('project.indicators')}}</h4>
                                            <ul class="list-disc list-inside mt-2 space-y-1">
                                                @forelse($project->indicators as $indicator)
                                                    <li class="leading-none text-sm text-gray-600"> {{ $indicator->index }}: {{ $indicator->description }}</li>
                                                @empty
                                                    <li class="text-sm text-gray-600">{{__('project.no_indicators')}}</li>
                                                @endforelse
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
