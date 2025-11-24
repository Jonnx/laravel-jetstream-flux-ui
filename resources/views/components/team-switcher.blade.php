<flux:dropdown position="top" align="start" offset="2">
    <flux:profile
        :initials="initials(auth()->user()->currentTeam->name)"
        :name="auth()->user()->currentTeam->name"
        icon-trailing="chevron-down"
    />
    <flux:menu>
        {{-- CURRENT TEAM SHORTCUTS  --}}
        <flux:menu.group>
            <flux:menu.item :href="route('teams.show', ['team' => auth()->user()->currentTeam->id])" icon="cog" wire:navigate>{{ __('Team Settings') }}</flux:menu.item>
        </flux:menu.group>

        {{-- USER'S AVAILABLE TEAMS --}}
        <flux:menu.group heading="{{ __('Switch Team') }}">
            {{-- SWITCHABLE TEAMS --}}
            @foreach (auth()->user()->allTeams() as $userTeam)
            @if($userTeam->id !== auth()->user()->currentTeam->id)
            <x-switchable-team :team="$userTeam" />
            @endif
            @endforeach
        </flux:menu.group>

        {{-- ADD A TEAM --}}
        <flux:menu.group>
            <flux:menu.item :href="route('teams.create')" icon="plus" wire:navigate>{{ __('Create a new Team') }}</flux:menu.item>
        </flux:menu.radio.group>
    </flux:menu>
</flux:dropdown>