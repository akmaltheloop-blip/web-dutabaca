@extends('layouts.app')

@section('title')

@section('content')

<div class="max-w-xl mx-auto bg-white rounded-xl shadow p-8">

    <div class="text-center mb-6">
        <h2 class="text-3xl font-bold text-[#5b3b1c]">
            Login
        </h2>

        <p class="text-gray-500">
            Masuk ke akun Web Duta Baca
        </p>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        {{-- Username --}}
        <div class="mb-4">
            <label class="block mb-2 font-medium">
                Username
            </label>

            <input
                type="text"
                name="username"
                value="{{ old('username') }}"
                class="w-full border rounded-lg p-3"
                required
            >

            @error('username')
                <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror
        </div>

        {{-- Password --}}
        <div class="mb-4">
            <label class="block mb-2 font-medium">
                Password
            </label>

            <input
                type="password"
                name="password"
                class="w-full border rounded-lg p-3"
                required
            >

            @error('password')
                <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="flex justify-between items-center mt-6">

            <a href="{{ route('register') }}"
               class="text-sm text-[#5b3b1c] hover:underline">
                Belum punya akun?
            </a>

            <button
                type="submit"
                class="bg-[#5b3b1c] text-white px-6 py-2 rounded-lg">
                Login
            </button>

        </div>

    </form>

</div>

@endsection