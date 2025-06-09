<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Edit Goal')}}
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
                                    {{ __('Edit Goal') }}
                                </h2>

                                <p class="mt-1 text-sm text-gray-600">
                                    {{ __('Update the details of this goal.') }}
                                </p>
                            </div>
                            <x-secondary-link-button href="{{ route('goal.index') }}">
                                {{ __('Back') }}
                            </x-secondary-link-button>
                        </header>

                        <form method="post" action="{{ route('goal.update', $goal) }}"
                            class="mt-6 space-y-6">
                            @csrf
                            @method('put')

                            <div>
                                <x-input-label for="year" :value="__('Year')" />
                                <x-text-input id="year" name="year" type="number" class="mt-1 block w-full"
                                    :value="old('year', $goal->year)" required autofocus autocomplete="year" />
                                <x-input-error class="mt-2" :messages="$errors->get('year')" />
                            </div>

                            <select name="action_id">
                                @foreach ($actions as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('action_id', $goal->action_id) == $item->id ? 'selected' : '' }}>
                                        {{ $item->name }}
                                    </option>
                                @endforeach
                            </select>

                            <div>
                                <x-input-label for="result" :value="__('Result')" />
                                <x-text-input id="result" name="result" type="text" class="mt-1 block w-full"
                                    :value="old('result', $goal->result)" required autofocus autocomplete="result" />
                                <x-input-error class="mt-2" :messages="$errors->get('result')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>
                            </div>
                        </form>

                        <div class="flex flex-row-reverse">
                            <div class="block relative bottom-8">
                                <x-delete-button>
                                    {{ route('goal.destroy', $goal) }}
                                </x-delete-button>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
