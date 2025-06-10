<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Indicator
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
                                    {{ __('Edit Indicator') }}
                                </h2>

                                <p class="mt-1 text-sm text-gray-600">
                                    {{ __('Update the details of this Indicator.') }}
                                </p>
                            </div>
                            <x-secondary-link-button href="{{ route('indicator.index') }}">
                                {{ __('Back') }}
                            </x-secondary-link-button>
                        </header>

                        <form method="post" action="{{ route('indicator.update', $indicator) }}"
                            class="mt-6 space-y-6">
                            @csrf
                            @method('put')

                            <div>
                                <x-input-label for="project_id" :value="__('Project')" />
                                <select id="project_id" name="project_id">
                                    @foreach ($projects as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('project_id', $indicator->project_id) == $item->id ? 'selected' : '' }}>
                                            {{ $item->index }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <x-input-label for="index" :value="__('Index')" />
                                <x-text-input id="index" name="index" type="text" class="mt-1 block w-full"
                                    :value="old('index', $indicator->index)" required autofocus autocomplete="index" />
                                <x-input-error class="mt-2" :messages="$errors->get('index')" />
                            </div>

                            <div>
                                <x-input-label for="description" :value="__('Description')" />
                                <x-text-input id="description" name="description" type="text" class="mt-1 block w-full"
                                    :value="old('description', $indicator->description)" required autofocus autocomplete="description" />
                                <x-input-error class="mt-2" :messages="$errors->get('description')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>
                            </div>
                        </form>

                        <div class="flex flex-row-reverse">
                            <div class="block relative bottom-8">
                                <x-delete-button>
                                    {{ route('indicator.destroy', $indicator) }}
                                </x-delete-button>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
