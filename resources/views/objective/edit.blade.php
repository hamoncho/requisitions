<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Objective') }}
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
                                    {{ __('Edit Objective') }}
                                </h2>

                                <p class="mt-1 text-sm text-gray-600">
                                    {{ __('Update the details of this objective.') }}
                                </p>
                            </div>
                            <x-secondary-link-button href="{{ route('objective.index') }}">
                                {{ __('Back') }}
                            </x-secondary-link-button>
                        </header>

                        <form method="post" action="{{ route('objective.update', $objective) }}"
                            class="mt-6 space-y-6">
                            @csrf
                            @method('put')
                            <div>
                                <x-input-label for="index" :value="__('Index')" />
                                <x-text-input id="index" name="index" type="number" class="mt-1 block"
                                    :value="old('index', $objective->index)" required autofocus autocomplete="index" />
                                <x-input-error class="mt-2" :messages="$errors->get('index')" />
                            </div>

                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="edit_name" name="name" type="text" class="mt-1 block w-full"
                                    :value="old('name', $objective->name)" required autocomplete="name" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div>
                                <x-input-label for="description" :value="__('Description')" />
                                <x-text-input id="description" name="description" type="text"
                                    class="mt-1 block w-full" :value="old('description', $objective->description)" autocomplete="description" />
                                <x-input-error class="mt-2" :messages="$errors->get('description')" />
                            </div>

                            <div>
                                <h3 class="mb-4 font-semibold text-gray-700">Involveds</h3>
                                <ul class="flex flex-wrap text-gray-900 p-2 border border-gray-200 rounded-lg">
                                    @forelse ($involveds as $item)
                                        <li class="flex-grow m-1 bg-white border border-gray-200 rounded-md">
                                            <div class="flex items-center ps-3">
                                                <input id="{{ 'involved_' . $item->id }}" name="involveds[]"
                                                    type="checkbox" value="{{ $item->id }}"
                                                    class="w-4 h-4 text-blue-950 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-950 focus:ring-1"
                                                    {{ in_array($item->id, $objective->involveds()->pluck('involved_id')->toArray()) ? 'checked' : '' }}>
                                                <label for="{{ 'involved_' . $item->id }}"
                                                    class="w-full cursor-pointer py-3 ms-2 pr-2 text-gray-900">
                                                    {{ $item->name }}
                                                </label>
                                            </div>
                                        </li>
                                    @empty
                                        <li>{{ __('No Involveds available.') }}</li>
                                    @endforelse
                                </ul>
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>
                            </div>
                        </form>

                        <div class="flex flex-row-reverse">
                            <div class="block relative bottom-8">
                                <x-delete-button>
                                    {{ route('objective.destroy', $objective) }}
                                </x-delete-button>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
