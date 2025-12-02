<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <flux:input
                    id="name"
                    name="name"
                    type="text"
                    label="{{ __('Name') }}"
                    class="w-full mt-1"
                    :value="old('name')"
                    autofocus
                    autocomplete="name"
                />
            </div>

            <div class="mt-4">
                <flux:input
                    id="email"
                    name="email"
                    type="email"
                    label="{{ __('Email') }}"
                    class="w-full mt-1"
                    :value="old('email')"
                    autocomplete="username"
                />
            </div>

            <div class="mt-4">
                <flux:input
                    id="password"
                    name="password"
                    type="password"
                    label="{{ __('Password') }}"
                    class="w-full mt-1"
                    autocomplete="new-password"
                />
            </div>

            <div class="mt-4">
                <flux:input
                    id="password_confirmation"
                    name="password_confirmation"
                    type="password"
                    label="{{ __('Confirm Password') }}"
                    class="w-full mt-1"
                    autocomplete="new-password"
                />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
