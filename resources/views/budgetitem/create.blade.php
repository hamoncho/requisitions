<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Budgeti Items
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                Create Budget Items
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                            Create Budget Item
                            </p>
                            <a href="{{route('budget_item.index')}}">{{__('Back')}}</a>
                        </header>

                        <form method="post" action="{{ route('budget_item.store') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('post')
                            <div>
                                <x-input-label for="full_code" :value="__('Code')" />
                                <x-text-input id="full_code" name="full_code" type="text"
                                    class="mt-1 block w-full"/>
                                <x-input-error class="mt-2" :messages="$errors->get('full_code')" />
                            </div>

                            <select name="general_budget_item_id">
                            @foreach ($generalBudgetitems as $item)
                                <option value="{{ $item->id }}">{{ $item->name}}</option>
                            @endforeach
                            </select>

                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" name="name"
                                    type="text" class="mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
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
