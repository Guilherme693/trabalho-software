<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->

        <style>

/* Estilos para o formulário de login */
.x-guest-layout {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f3f4f6; /* Cor de fundo do layout */
}

form {
    width: 100%;
    max-width: 400px;
    padding: 20px;
    background-color: #ffffff; /* Cor de fundo do formulário */
    border-radius: 8px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1); /* Sombra suave */
}

form div {
    margin-bottom: 15px;
}

form label {
    font-weight: 600;
    color: #333333; /* Cor do texto */
}

form input[type="email"],
form input[type="password"] {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #cccccc; /* Cor da borda */
    border-radius: 4px;
    transition: border-color 0.2s ease-in-out;
}

form input[type="email"]:focus,
form input[type="password"]:focus {
    outline: none;
    border-color: #4a90e2; /* Cor da borda quando focado */
}

form .block {
    margin-bottom: 1rem;
}

form .text-sm {
    font-size: 14px;
    color: #666666; /* Cor do texto pequeno */
}

form .underline {
    text-decoration: underline;
}

form .text-indigo-600 {
    color: #4a90e2; /* Cor do texto indigo */
}

form .ms-2 {
    margin-left: 0.5rem;
}

form .ms-3 {
    margin-left: 0.75rem;
}

form .mt-4 {
    margin-top: 1rem;
}

form .mb-4 {
    margin-bottom: 1rem;
}

form .inline-flex {
    display: inline-flex;
    align-items: center;
}

form .rounded-md {
    border-radius: 4px;
}

form .focus\:ring-2 {
    outline: none;
}

form .focus\:ring-offset-2 {
    outline: none;
}

form .focus\:ring-indigo-500 {
    outline: none;
    box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
}

/* Estilos adicionais para dark mode, se necessário */
.dark {
    background-color: #0052f7; /* Cor de fundo para dark mode */
    color: #ffffff; /* Cor do texto para dark mode */
    border-color: #2d3748; /* Cor da borda para dark mode */
}

.dark form {
    background-color: #005eff; /* Cor de fundo do formulário para dark mode */
    box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.1); /* Sombra suave para dark mode */
}

.dark form input[type="email"],
.dark form input[type="password"] {
    border-color: #4a90e2; /* Cor da borda para inputs no dark mode */
}

.dark form .text-gray-600,
.dark form .text-gray-400 {
    color: #cbd5e0; /* Cor do texto cinza para dark mode */
}


        </style>
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
