@props(['submit' => null])

<section {{ $attributes }}>
    <div class="mt-5 md:mt-0 md:col-span-2">
        @if($submit)
            <form wire:submit="{{ $submit }}">
                <flux:card class="p-6 overflow-hidden">
                    <flux:heading>{{ $title }}</flux:heading>
                    <flux:text class="mt-2 mb-6">{{ $description }}</flux:text>
                    <div class="grid grid-cols-6 gap-6">
                        {{ $form }}
                    </div>
                    @if (isset($actions))
                        <div class="flex items-center justify-end p-6 mt-6 -m-6 bg-neutral-100 dark:bg-neutral-700">
                            {{ $actions }}
                        </div>
                    @endif
                </flux:card>
            </form>
        @else
            <flux:card class="p-6 overflow-hidden">
                <flux:heading>{{ $title }}</flux:heading>
                <flux:text class="mt-2 mb-6">{{ $description }}</flux:text>
                <div class="grid grid-cols-6 gap-6">
                    {{ $form }}
                </div>
                @if (isset($actions))
                    <div class="flex items-center justify-end p-6 mt-6 -m-6 bg-neutral-100 dark:bg-neutral-70">
                        {{ $actions }}
                    </div>
                @endif
            </flux:card>
        @endif
    </div>
</section>
