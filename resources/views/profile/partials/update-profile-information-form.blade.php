<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('profile.profile_information_title') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('profile.profile_information_description') }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('profile.name_label')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('profile.email_label')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('profile.unverified_email_message') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('profile.resend_verification_email_button') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('profile.verification_link_sent_message') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <x-input-label for="supervisor_id" :value="__('profile.supervisor_label')" />
            <select id="supervisor_id" name="supervisor_id" class="mt-1 block w-full">
                <option value="">{{ __('profile.none_option') }}</option>
                @foreach($users as $supervisor)
                    <option value="{{ $supervisor->id }}" {{ old('supervisor_id', $user->supervisor_id) == $supervisor->id ? 'selected' : '' }}>
                        {{ $supervisor->name }}
                    </option>
                @endforeach
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('supervisor_id')" />
        </div>

        <div>
            <x-input-label for="position" :value="__('profile.position_label')" />
            <x-text-input id="position" name="position" type="text" class="mt-1 block w-full" :value="old('position', $user->position)" />
            <x-input-error class="mt-2" :messages="$errors->get('position')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('profile.save_button') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('profile.saved_message') }}</p>
            @endif
        </div>
    </form>
</section>
