<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create A Indicator') }}
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
                                    {{ __('Create Indicator') }}
                                </h2>

                                <p class="mt-1 text-sm text-gray-600">
                                    {{ __('Create a Indicator.') }}
                                </p>
                            </div>
                            <x-secondary-link-button href="{{ route('indicator.index') }}">
                                {{ __('Back') }}
                            </x-secondary-link-button>
                        </header>

                        <form method="post" action="{{ route('indicator.store') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('post')

                            <select name="project_id">
                                @foreach ($projects as $item)
                                    <option value="{{ $item->id }}">{{ $item->index }}</option>
                                @endforeach
                            </select>

                           <div>
                                <x-input-label for="index" :value="__('Index')" />
                                <x-text-input id="index" name="index" type="text" class="mt-1 block w-full" />
                            </div>

                            <div>
                                <x-input-label for="description" :value="__('Description')" />
                                <x-text-input id="description" name="description" type="text"
                                    class="mt-1 block w-full" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Create') }}</x-primary-button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
