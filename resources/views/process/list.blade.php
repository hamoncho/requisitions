<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Processes') }}
        </h2>
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
                                            <h3 class="text-lg font-semibold text-gray-900 truncate pr-2" title="Process #{{ $process->index }}">Process #{{ $process->index }}</h3>
                                            <span class="text-xs font-mono text-gray-500 flex-shrink-0">#{{ $process->id }}</span>
                                        </div>
                                        <div class="mt-4 pt-3 border-t border-gray-200">
                                            <h4 class="text-xs font-bold text-gray-500 uppercase tracking-wider">Projects</h4>
                                            @if($process->projects->isNotEmpty())
                                                <div class="flex flex-wrap gap-1 mt-2">
                                                    @foreach($process->projects as $project)
                                                        <span class="inline-block bg-teal-100 text-teal-800 rounded-full px-2 py-1 text-xs font-semibold">
                                                            {{ $project->description }}
                                                        </span>
                                                    @endforeach
                                                </div>
                                            @else
                                                <p class="text-xs text-gray-500 mt-2">Not assigned</p>
                                            @endif
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
