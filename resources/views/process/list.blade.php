<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('process.title') }}
        </h2>
        <x-back-arrow-link href="{{ route('summary') }}" />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-8 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach ($processes as $process)
                            <a href="{{ route('process.show', $process) }}" class="block transform hover:-translate-y-1 transition-transform duration-150">
                                <div class="flex flex-col justify-between h-full bg-white rounded-lg shadow-lg overflow-hidden border-t-4 border-blue-950 hover:shadow-xl transition-shadow duration-150">
                                    <div class="p-6">
                                        <div class="flex justify-between items-baseline">
                                            <h3 class="text-lg font-semibold text-gray-900 truncate pr-2" title="Process #{{ $process->index }}">{{__('process.process')}} #{{ $process->index }}</h3>
                                            <span class="text-xs font-mono text-gray-500 flex-shrink-0">#{{ $process->id }}</span>
                                        </div>
                                        <div class="mt-4 pt-3 border-t border-gray-200">
                                            <h4 class="text-xs font-bold text-gray-500 uppercase tracking-wider">{{__('process.projects')}}</h4>
                                            <ul class="list-disc list-inside mt-2 space-y-1">
                                                @forelse($process->projects as $project)
                                                    <li class="py-1 leading-none text-sm text-gray-600"> {{ $project->index }}: {{ $project->description }}</li>
                                                @empty
                                                    <li class="text-sm text-gray-600">{{__('process.no_projects')}}</li>
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
