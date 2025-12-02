@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="space-y-6">
        <div class="flex items-start gap-4">
            <div class="pt-1">
                <flux:icon name="exclamation-triangle" class="size-5 text-red-600" />
            </div>
            <div>
                <flux:heading size="lg">{{ $title }}</flux:heading>
                <flux:text class="mt-2">{{ $content }}</flux:text>
            </div>
        </div>
        <div class="flex flex-row justify-end">
            {{ $footer }}
        </div>
    </div>
</x-modal>
