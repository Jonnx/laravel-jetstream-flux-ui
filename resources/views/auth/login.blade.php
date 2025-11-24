<x-guest-layout>
    <div class="w-full sm:max-w-md mx-auto px-4">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <flux:input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                    autocomplete="username"
                    class="w-full"
                    label="Username"
                />
            </div>

            <div class="mb-4 mt-4">
                <flux:input
                    id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password"
                    class="w-full"
                    label="Password"
                />
            </div>

            <flux:field variant="inline" class="mt-4">
                <flux:checkbox id="remember_me" name="remember" />
                <flux:label for="remember_me">Remember me</flux:label>
            </flux:field>

            <div class="flex items-center justify-end mt-6">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        Forgot your password?
                    </a>
                @endif

                <flux:button type="submit" variant="primary" class="ms-4">
                    Log in
                </flux:button>
            </div>
        </form>
    </div>
</x-guest-layout>
