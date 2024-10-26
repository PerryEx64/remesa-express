<x-app-layout>
    <style>
        .custom-card {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .custom-card h2 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
        }

        .custom-card form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .input-group {
            display: flex;
            gap: 10px;
        }

        .input-group > div {
            flex: 1;
        }

        .button-container {
            text-align: center;
        }

        .custom-card button {
            background-color: #6a0dad;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .custom-card button:hover {
            background-color: #5a0cac;
        }

        .input-field {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
        }

        .input-group .input-half {
            flex: 0.32;
        }

        .input-group .input-third {
            flex: 0.32;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex items-center justify-center min-h-screen">
        <div class="custom-card">
            <h2>Datos de la Tarjeta</h2>
            <form>
                <div>
                    <x-label for="numero" value="Número de Tarjeta" />
                    <x-input id="numero" class="block mt-1 input-field" type="number" name="numero" required autocomplete="numero" />
                </div>

                <div>
                    <x-label for="nombre" value="Nombre que aparece en la Tarjeta" />
                    <x-input id="nombre" class="block mt-1 input-field" type="text" name="nombre" required autocomplete="nombre" />
                </div>

                <!-- Grupo de campos adicionales -->
                <div class="input-group">
                    <div class="input-half">
                        <x-label for="fecha-exp" value="Fecha Exp" />
                        <x-input id="fecha-exp" class="input-field" type="text" name="fecha-exp" placeholder="MM/AA" required />
                    </div>

                    <div class="input-third">
                        <x-label for="ccv" value="CCV" />
                        <x-input id="ccv" class="input-field" type="number" name="ccv" required />
                    </div>

                    <div class="input-third">
                        <x-label for="dpi" value="No. DPI" />
                        <x-input id="dpi" class="input-field" type="number" name="dpi" required />
                    </div>
                </div>

                <div class="button-container">
                    <button type="submit">Pagar</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
