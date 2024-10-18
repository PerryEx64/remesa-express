<x-guest-layout>
    <div class="flex items-center ml-64 gap-14">

        <div class="" >
            <h2 class="text-black text-[40px] font-bold">Recuperar Contraseña</h2>
            <h3 class="text-black text-[25px] text-gray-900" >Facil y Rapido</h3>
        </div>

    <x-authentication-card>
            <x-slot name="logo">
                <img src="{{ asset('icons/persona.png') }}" style="width: 60px; height: auto;" class="ml-auto mr-auto"  alt="Logo Remesa Express"/>
            </x-slot>

        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('¿Olvidaste tu contraseña? No hay problema. Simplemente háganos saber su dirección de correo electrónico y le enviaremos un enlace de restablecimiento de contraseña que le permitirá elegir una nueva.') }}
        </div>

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ $value }}
            </div>
        @endsession

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Restablecer contraseña') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
    </div>
</x-guest-layout>
