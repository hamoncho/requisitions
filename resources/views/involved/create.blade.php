<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create A Involved') }}
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
                                    {{ __('Create Involved') }}
                                </h2>

                                <p class="mt-1 text-sm text-gray-600">
                                    {{ __('Crate a new Involved.') }}
                                </p>
                            </div>
                            <x-secondary-link-button href="{{ route('involved.index') }}">
                                {{ __('Back') }}
                            </x-secondary-link-button>
                        </header>

                        <form method="post" action="{{ route('involved.store') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('post')

                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="create_name" name="name" type="text"
                                    class="mt-1 block w-full" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
