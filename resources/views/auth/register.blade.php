<x-guest-layout>
    <div class="flex items-center ml-48 gap-14">
        <div class="" >
            <h2 class="text-black text-[40px] font-bold">Creacion de cuenta</h2>
            <h3 class="text-black text-[25px] text-gray-900" >Facil y Rapido</h3>
        </div>
    <x-authentication-card>
        <x-slot name="logo">
            <img src="{{ asset('icons/persona.png') }}" style="width: 60px; height: auto;" class="ml-auto mr-auto"  alt="Logo Remesa Express"/>
        </x-slot>
        <x-validation-errors class="mb-4" />
        <form class="aling-center gap-10" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="grid grid-cols-2 gap-7">
                <div>
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div>
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
                </div>

                <div>
                    <x-label for="home_address" value="{{ __('Direccion') }}" />
                    <x-input id="home_address" class="block mt-1 w-full" type="text" name="home_address" :value="old('home_address')" required autocomplete="home_address" />
                </div>

                <div>
                    <x-label for="identification" value="{{ __('No. Identificacion') }}" />
                    <x-input id="identification" class="block mt-1 w-full" type="text" name="identification" :value="old('identification')" required autocomplete="identification" />
                </div>

                <div>
                    <x-label for="age" value="{{ __('Edad') }}" />
                    <x-input id="age" class="block mt-1 w-full" type="date" name="age" :value="old('age')" required autocomplete="age" />
                </div>

                <div></div>

            <div >
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div>
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex flex-col gap-3 items-center mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4 p-8">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
    </div>

</x-guest-layout>
