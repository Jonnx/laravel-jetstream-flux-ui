<section {{ $attributes }}>
    <flux:card class="p-6 overflow-hidden">
        <flux:heading>{{ $title }}</flux:heading>
        <flux:text class="mt-2 mb-6">{{ $description }}</flux:text>
        <div>
            {{ $content }}
        </div>
    </flux:card>
</section>
