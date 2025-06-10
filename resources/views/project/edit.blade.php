<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Project
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
                                    {{ __('Edit Project') }}
                                </h2>

                                <p class="mt-1 text-sm text-gray-600">
                                    {{ __('Update the details of this Project.') }}
                                </p>
                            </div>
                            <x-secondary-link-button href="{{ route('project.index') }}">
                                {{ __('Back') }}
                            </x-secondary-link-button>
                        </header>

                        <form method="post" action="{{ route('project.update', $project) }}"
                            class="mt-6 space-y-6">
                            @csrf
                            @method('put')

                            <select name="action_id">
                                @foreach ($actions as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('action_id', $project->action_id) == $item->id ? 'selected' : '' }}>
                                        {{ $item->name }}
                                    </option>
                                @endforeach
                            </select>

                            <div>
                                <x-input-label for="index" :value="__('Index')" />
                                <x-text-input id="index" name="index" type="text" class="mt-1 block w-full"
                                    :value="old('index', $project->index)" required autofocus autocomplete="index" />
                                <x-input-error class="mt-2" :messages="$errors->get('index')" />
                            </div>

                            <div>
                                <x-input-label for="description" :value="__('Description')" />
                                <x-text-input id="description" name="description" type="text" class="mt-1 block w-full"
                                    :value="old('description', $project->description)" required autofocus autocomplete="description" />
                                <x-input-error class="mt-2" :messages="$errors->get('description')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>
                            </div>
                        </form>

                        <div class="flex flex-row-reverse">
                            <div class="block relative bottom-8">
                                <x-delete-button>
                                    {{ route('project.destroy', $project) }}
                                </x-delete-button>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
