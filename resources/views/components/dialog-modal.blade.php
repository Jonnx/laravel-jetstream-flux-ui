@props(['name' => null, 'class' => null])

<flux:modal :name="$name" :class="$class" {{ $attributes }}>
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">{{ $title }}</flux:heading>
            <flux:text class="mt-2">{{ $content }}</flux:text>
        </div>
        <div class="flex flex-row justify-end">
            {{ $footer }}
        </div>
    </div>
</flux:modal>
