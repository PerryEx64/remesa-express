<x-guest-layout>
    <div class="flex flex-col items-center mt-6">
        <h2 class="text-black text-[40px] font-bold">Registro de Clientes</h2>
        
        <!-- Contenedor del formulario con tamaño limitado -->
        <div class="w-full max-w-2xl p-6 bg-gray-200 rounded-lg mt-4 shadow-lg">
            
            <!-- Referencias Bancarias -->
            <h3 class="text-black text-[25px] font-bold mb-4">Referencias Bancarias</h3>
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <x-label for="bank_name1" value="Nombre (Opcional)" />
                    <x-input id="bank_name1" class="block mt-1 w-full" type="text" name="bank_name1" :value="old('bank_name1')" autocomplete="bank_name1" />
                </div>
                <div>
                    <x-label for="bank_phone1" value="Teléfono (Opcional)" />
                    <x-input id="bank_phone1" class="block mt-1 w-full" type="text" name="bank_phone1" :value="old('bank_phone1')" autocomplete="bank_phone1" />
                </div>

                <div>
                    <x-label for="bank_name2" value="Nombre (Opcional)" />
                    <x-input id="bank_name2" class="block mt-1 w-full" type="text" name="bank_name2" :value="old('bank_name2')" autocomplete="bank_name2" />
                </div>
                <div>
                    <x-label for="bank_phone2" value="Teléfono (Opcional)" />
                    <x-input id="bank_phone2" class="block mt-1 w-full" type="text" name="bank_phone2" :value="old('bank_phone2')" autocomplete="bank_phone2" />
                </div>
            </div>

            <!-- Referencias Personales -->
            <h3 class="text-black text-[25px] font-bold mt-8 mb-4">Referencias Personales</h3>
            <div class="grid grid-cols-2 gap-6">
                <div>
                    <x-label for="personal_name1" value="Nombre (Opcional)" />
                    <x-input id="personal_name1" class="block mt-1 w-full" type="text" name="personal_name1" :value="old('personal_name1')" autocomplete="personal_name1" />
                </div>
                <div>
                    <x-label for="personal_phone1" value="Teléfono (Opcional)" />
                    <x-input id="personal_phone1" class="block mt-1 w-full" type="text" name="personal_phone1" :value="old('personal_phone1')" autocomplete="personal_phone1" />
                </div>

                <div>
                    <x-label for="personal_name2" value="Nombre (Opcional)" />
                    <x-input id="personal_name2" class="block mt-1 w-full" type="text" name="personal_name2" :value="old('personal_name2')" autocomplete="personal_name2" />
                </div>
                <div>
                    <x-label for="personal_phone2" value="Teléfono (Opcional)" />
                    <x-input id="personal_phone2" class="block mt-1 w-full" type="text" name="personal_phone2" :value="old('personal_phone2')" autocomplete="personal_phone2" />
                </div>
            </div>
        </div>

        <!-- Botón para enviar -->
        <div class="mt-6">
            <x-button class="p-8">
                {{ __('Registrar') }}
            </x-button>
        </div>
    </div>
</x-guest-layout>
