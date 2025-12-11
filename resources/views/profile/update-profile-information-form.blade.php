<x-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div class="col-span-6 sm:col-span-4">
                <flux:file-upload wire:model="photo">
                    <!-- Custom avatar uploader -->
                    <div class="
                        relative flex items-center justify-center size-20 rounded-full transition-colors cursor-pointer
                        border border-zinc-200 dark:border-white/10 hover:border-zinc-300 dark:hover:border-white/10
                        bg-zinc-100 hover:bg-zinc-200 dark:bg-white/10 hover:dark:bg-white/15 in-data-dragging:dark:bg-white/15
                    ">
                        <!-- Show the uploaded file if it exists -->
                        @if ($photo)
                            <img src="{{ $photo?->temporaryUrl() }}" class="size-full object-cover rounded-full" />
                        @else
                            <!-- Show the default icon if no file is uploaded -->
                            <flux:icon name="user" variant="solid" class="text-zinc-500 dark:text-zinc-400" />
                        @endif
                        <!-- Corner upload icon -->
                        <div class="absolute bottom-0 right-0 bg-white dark:bg-zinc-800 rounded-full">
                            <flux:icon name="arrow-up-circle" variant="solid" class="text-zinc-500 dark:text-zinc-400" />
                        </div>
                    </div>
                </flux:file-upload>
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <flux:input
                id="name"
                name="name"
                type="text"
                label="{{ __('Name') }}"
                class="w-full"
                wire:model="state.name"
                required
                autocomplete="name"
                :error="$errors->first('name')"
            />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <flux:input
                id="email"
                name="email"
                type="email"
                label="{{ __('Email') }}"
                class="w-full"
                wire:model="state.email"
                required
                autocomplete="username"
                :error="$errors->first('email')"
            />

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! $this->user->hasVerifiedEmail())
                <p class="text-sm mt-2 dark:text-white">
                    {{ __('Your email address is unverified.') }}

                    <button type="button" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" wire:click.prevent="sendEmailVerification">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if ($this->verificationLinkSent)
                    <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            @endif
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
