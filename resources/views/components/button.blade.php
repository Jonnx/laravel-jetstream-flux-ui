@props(['variant' => 'primary'])
<flux:button variant="{{ $variant }}" {{ $attributes->merge(['type' => 'submit', 'class' => 'cursor-pointer']) }}>
    {{ $slot }}
</flux:button>
