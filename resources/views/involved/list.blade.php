<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('involved.title') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-8 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach ($involveds as $involved)
                            <a href="{{ route('involved.show', $involved) }}" class="block transform hover:-translate-y-1 transition-transform duration-150">
                                <div class="flex flex-col justify-between h-full bg-white rounded-lg shadow-lg overflow-hidden border-t-4 border-blue-950 hover:shadow-xl transition-shadow duration-150">
                                    <div class="p-6">
                                        <div class="flex justify-between items-baseline">
                                            <h3 class="text-lg font-semibold text-gray-900 truncate pr-2" title="{{ $involved->name }}">{{ $involved->name }}</h3>
                                            <span class="text-xs font-mono text-gray-500 flex-shrink-0">#{{ $involved->id }}</span>
                                        </div>
                                        <p class="mt-2 text-sm text-gray-600 h-16 overflow-hidden">{{ $involved->description }}</p>
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