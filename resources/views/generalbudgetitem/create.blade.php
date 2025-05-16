<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            General Budget Items
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
                                    {{ __('Create General Budget Item') }}
                                </h2>

                                <p class="mt-1 text-sm text-gray-600">
                                    {{ __('Create a General Budget Item.') }}
                                </p>
                            </div>
                            <x-secondary-link-button href="{{ route('general_budget_item.index') }}">
                                {{ __('Back') }}
                            </x-secondary-link-button>
                        </header>

                        <form method="post" action="{{ route('general_budget_item.store') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('post')
                            <div>
                                <x-input-label for="code" :value="__('Code')" />
                                <x-text-input id="create_code" name="code" type="text"
                                    class="mt-1 block w-full"/>
                                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="create_name" name="name"
                                    type="text" class="mt-1 block w-full" />
                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>

                                @if (session('status') === 'password-updated')
                                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                                @endif
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
