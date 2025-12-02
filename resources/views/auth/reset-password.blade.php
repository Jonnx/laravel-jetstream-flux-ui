<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <flux:input
                    id="email"
                    name="email"
                    type="email"
                    label="{{ __('Email') }}"
                    class="w-full"
                    :value="old('email', $request->email)"
                    required
                    autofocus
                    autocomplete="username"
                />
            </div>

            <div class="mt-4">
                <flux:input
                    id="password"
                    name="password"
                    type="password"
                    label="{{ __('Password') }}"
                    class="w-full"
                    required
                    autocomplete="new-password"
                />
            </div>

            <div class="mt-4">
                <flux:input
                    id="password_confirmation"
                    name="password_confirmation"
                    type="password"
                    label="{{ __('Confirm Password') }}"
                    class="w-full"
                    required
                    autocomplete="new-password"
                />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
