<x-guest-layout>
    <div class="flex flex-col items-center mt-6">
        <h2 class="text-black text-[40px] font-bold">Registro de Clientes</h2>

        <!-- Contenedor del formulario con tamaño limitado -->
        <div class="w-full max-w-2xl p-6 bg-gray-200 rounded-lg mt-4 shadow-lg">

            <!-- Sección Es Asalariado -->
            <h3 class="text-black text-[25px] font-bold mb-4">Es Asalariado</h3>
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <x-label for="company" value="Empresa o institución donde trabaja" />
                    <x-input id="company" class="block mt-1 w-full" type="text" name="company" :value="old('company')" autocomplete="company" />
                </div>
                <div>
                    <x-label for="position" value="Puesto que desempeña" />
                    <x-input id="position" class="block mt-1 w-full" type="text" name="position" :value="old('position')" autocomplete="position" />
                </div>
                <div>
                    <x-label for="company_address" value="Dirección completa de trabajo" />
                    <x-input id="company_address" class="block mt-1 w-full" type="text" name="company_address" :value="old('company_address')" autocomplete="company_address" />
                </div>
                <div>
                    <x-label for="company_phone" value="Teléfono de la empresa" />
                    <x-input id="company_phone" class="block mt-1 w-full" type="text" name="company_phone" :value="old('company_phone')" autocomplete="company_phone" />
                </div>
            </div>

            <!-- Términos y condiciones -->
            <div class="mt-6">
                <div class="flex items-start">
                    <x-checkbox id="accept_privacy" name="accept_privacy" />
                    <label for="accept_privacy" class="ml-2 text-sm font-medium text-gray-900"> 
                        Usted declara que la información proporcionada es veraz y acepta nuestra Política de Privacidad.
                    </label>
                </div>
                <div class="flex items-start mt-4">
                    <x-checkbox id="accept_terms" name="accept_terms" />
                    <label for="accept_terms" class="ml-2 text-sm font-medium text-gray-900"> 
                        Remesas Express no se hace responsable por retrasos o fallos causados por factores externos fuera de nuestro control.
                    </label>
                </div>
            </div>
        </div>

        <!-- Botón de enviar -->
        <div class="mt-6">
            <x-button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">
                {{ __('Continuar') }}
            </x-button>
        </div>
    </div>
</x-guest-layout>
