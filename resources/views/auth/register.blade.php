<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nama -->
        <div>
            <x-input-label for="name" :value="__('Nama Lengkap')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        
        <!-- NIM -->
        <div class="mt-4">
            <x-input-label for="nim" :value="__('NIM')" />
            <x-text-input id="nim" class="block mt-1 w-full"
                type="text"
                name="nim"
                :value="old('nim')"
                required />
            <x-input-error :messages="$errors->get('nim')" class="mt-2" />
        </div>

        <!-- FAKULTAS -->
        <div class="mt-4">
            <x-input-label for="fakultas" :value="__('Fakultas')" />
            <x-text-input id="fakultas" class="block mt-1 w-full"
                type="text"
                name="fakultas"
                :value="old('fakultas')"
                required />
            <x-input-error :messages="$errors->get('fakultas')" class="mt-2" />
        </div>

        <!-- prodi -->
        <div class="mt-4">
            <x-input-label for="prodi" :value="__('Program Studi')" />
            <x-text-input id="prodi" class="block mt-1 w-full"
                type="text"
                name="prodi"
                :value="old('prodi')"
                required />
            <x-input-error :messages="$errors->get('prodi')" class="mt-2" />
        </div>

        <!-- Username -->
        <div class="mt-4">
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full"
                type="text"
                name="username"
                :value="old('username')"
                required />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" 
            type="email" 
            name="email" 
            :value="old('email')" 
            required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
