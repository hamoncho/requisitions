<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Action
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
                                    {{ __('Edit Action') }}
                                </h2>

                                <p class="mt-1 text-sm text-gray-600">
                                    {{ __('Update the details of this Action.') }}
                                </p>
                            </div>
                            <x-secondary-link-button href="{{ route('action.index') }}">
                                {{ __('Back') }}
                            </x-secondary-link-button>
                        </header>

                        <form method="post" action="{{ route('action.update', $action) }}"
                            class="mt-6 space-y-6">
                            @csrf
                            @method('put')

                            <div>
                                <x-input-label for="name" :value="__('index')" />
                                <x-text-input id="index" name="index" type="text" class="mt-1 block w-full"
                                    :value="old('index', $action->index)" required autofocus autocomplete="index" />
                                <x-input-error class="mt-2" :messages="$errors->get('index')" />
                            </div>

                            <select name="objective_id">
                                @foreach ($objectives as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('objective_id', $action->objective_id) == $item->id ? 'selected' : '' }}>
                                        {{ $item->name }}
                                    </option>
                                @endforeach
                            </select>

                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                    :value="old('name', $action->name)" required autofocus autocomplete="name" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div>
                                <x-input-label for="formula" :value="__('formula')" />
                                <x-text-input id="formula" name="formula" type="text" class="mt-1 block w-full"
                                    :value="old('formula', $action->formula)" required autofocus autocomplete="formula" />
                                <x-input-error class="mt-2" :messages="$errors->get('formula')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>
                            </div>
                        </form>

                        <div class="flex flex-row-reverse">
                            <div class="block relative bottom-8">
                                <x-delete-button>
                                    {{ route('action.destroy', $action) }}
                                </x-delete-button>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
