<x-guest-layout>
    <div class="max-w-7xl mx-auto py-6 px-4">
        <!-- Encabezado del formulario -->
        <div class="text-center bg-gray-200 py-3">
            <h2 class="text-4xl font-bold text-gray-700">Registro de Clientes</h2>
        </div>

        <!-- Sección: Datos personales -->
        <div class="bg-gray-100 p-6 mt-6 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold text-gray-700 mb-4">Datos personales</h3>
            <div class="grid grid-cols-2 gap-6">
                <!-- Fecha de nacimiento -->
                <div>
                    <x-label for="birthdate" value="{{ __('Fecha de nacimiento') }}" />
                    <x-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required />
                </div>

                <!-- Profesión u oficio -->
                <div>
                    <x-label for="profession" value="{{ __('Profesión u oficio') }}" />
                    <x-input id="profession" class="block mt-1 w-full" type="text" name="profession" :value="old('profession')" required />
                </div>
            </div>
        </div>

        <!-- Sección: Datos de residencia -->
        <div class="bg-gray-100 p-6 mt-6 gap-3 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold text-gray-700 mb-4">Datos de Residencia</h3>
            <div class="grid grid-cols-2 gap-6">
                <!-- Estado -->
                <div>
                    <x-label for="state" value="{{ __('Estado') }}" />
                    <x-input id="state" class="block mt-1 w-full" type="text" name="state" :value="old('state')" required />
                </div>

                <!-- Ciudad -->
                <div>
                    <x-label for="city" value="{{ __('Ciudad') }}" />
                    <x-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required />
                </div>

                <!-- Dirección -->
                <div class="col-span-2">
                    <x-label for="address" value="{{ __('Dirección') }}" />
                    <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
                </div>
            </div>

            <a href="{{ route('salario') }}" class="p-2 mt-8 w-[150px] text-center  rounded-lg bg-green-800 text-white">
                Salario
            </a>
        </div>

        <!-- Botón de registro -->

    </div>
</x-guest-layout>
