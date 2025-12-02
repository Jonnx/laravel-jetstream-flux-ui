<x-form-section>
    <x-slot name="title">
        {{ __('Appearance') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s appearance settings.') }}
    </x-slot>

    <x-slot name="form" :submit="function() {}">
        <flux:radio.group x-data variant="segmented" x-model="$flux.appearance" class="col-span-6 sm:col-span-6">
            <flux:radio value="light" icon="sun">{{ __('Light') }}</flux:radio>
            <flux:radio value="dark" icon="moon">{{ __('Dark') }}</flux:radio>
            <flux:radio value="system" icon="computer-desktop">{{ __('System') }}</flux:radio>
        </flux:radio.group>
    </x-slot>
</x-form-section>
