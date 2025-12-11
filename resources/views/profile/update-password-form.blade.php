<x-form-section submit="updatePassword">
    <x-slot name="title">
        {{ __('Update Password') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <flux:input
                id="current_password"
                name="current_password"
                type="password"
                label="{{ __('Current Password') }}"
                class="w-full"
                wire:model="state.current_password"
                autocomplete="current-password"
                :error="$errors->first('current_password')"
            />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <flux:input
                id="password"
                name="password"
                type="password"
                label="{{ __('New Password') }}"
                class="w-full"
                wire:model="state.password"
                autocomplete="new-password"
                :error="$errors->first('password')"
            />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <flux:input
                id="password_confirmation"
                name="password_confirmation"
                type="password"
                label="{{ __('Confirm Password') }}"
                class="w-full"
                wire:model="state.password_confirmation"
                autocomplete="new-password"
                :error="$errors->first('password_confirmation')"
            />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button>
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
