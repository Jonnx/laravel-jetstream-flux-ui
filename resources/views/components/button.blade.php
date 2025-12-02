<flux:button variant="primary" {{ $attributes->merge(['type' => 'submit', 'class' => 'cursor-pointer']) }}>
    {{ $slot }}
</flux:button>
