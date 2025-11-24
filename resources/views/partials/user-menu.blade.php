<flux:menu.radio.group>
    <flux:menu.item :href="route('profile.show')" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
</flux:menu.radio.group>
@if(Laravel\Jetstream\Jetstream::hasApiFeatures())
<flux:menu.radio.group>
    <flux:menu.item :href="route('api-tokens.index')" icon="key" wire:navigate>{{ __('API Keys') }}</flux:menu.item>
</flux:menu.radio.group>
@endif