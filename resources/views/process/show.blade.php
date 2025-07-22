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
                            <p class="text-sm font-semibold text-blue-500 uppercase tracking-wider">{{__('process.process')}}</p>
                            <h3 class="text-3xl font-bold text-gray-900 mt-1">{{ $process->index }}</h3>
                        </div>
                        <div class="mt-4 sm:mt-0 sm:ml-4 flex-shrink-0">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                {{ $process->index }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Projects Section -->
                <div class="p-6 sm:p-8">
                    <h4 class="text-lg font-semibold text-gray-800">{{__('process.associated_projects')}}</h4>
                    <div class="mt-4 flex flex-wrap gap-2">
                        @forelse($process->projects as $project)
                            <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm font-medium">
                                {{ $project->description }}
                            </span>
                        @empty
                            <p class="text-gray-500">{{__('process.no_projects')}}</p>
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center">
                <a href="{{ route('process.list') }}" class="inline-flex items-center px-6 py-3 bg-blue-950 border border-transparent rounded-md font-semibold text-white tracking-widest hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150">
                    {{__('process.back_button')}}
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
