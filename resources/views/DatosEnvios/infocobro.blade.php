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
            .input-half {
                flex: 0.5;
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
            .qr-container {
                display: flex;
                justify-content: center;
                margin: 20px 0;
            }
            .qr-container img {
                width: 150px;
                height: 150px;
            }
        </style>
        <x-slot name="header">
            <h2 class="font-semibold text-xl leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="flex items-center justify-center min-h-screen">
            <div class="custom-card">
                <h2>Datos del Envío</h2>
                <form>
                    <div class="input-group">
                        <div class="input-half">
                            <x-label for="country" value="País" />
                            <x-input id="country" class="block mt-1 w-full" type="text" name="country" required autofocus autocomplete="country" />
                        </div>
                        <div class="flex flex-1 gap-2 items-center">
                            <div>
                                <x-label for="cantidad" value="Cantidad" />
                                <x-input id="moneda" class="block mt-1 w-full" type="text" name="moneda" required autocomplete="moneda" />
                            </div>
                            <div>
                                <x-label for="cantidad" value="." class="invisible"/>
                                <x-input id="cantidad" class="block mt-1 w-22" type="text" name="cantidad" required autocomplete="cantidad"/>
                            </div>
                        </div>
                    </div>
                    <div>
                        <x-label for="dpi" value="DPI o CUI del Receptor" />
                        <x-input id="dpi" class="block mt-1 w-full" type="text" name="dpi" required autocomplete="dpi" />
                    </div>
                    <div class="qr-container">
                        <img src="" alt="QR Code" id="qr-code"/>
                    </div>
                    <div>
                        <x-label for="numero" value="Número único para cobrar" />
                        <x-input id="numero" class="block mt-1 w-full" type="text" name="numero" required autocomplete="numero" />
                    </div>
                </form>

                <a href="{{ route('destinatario') }}" class="mt-10 text-center  p-2 rounded-lg bg-blue-800 text-white">
                    Siguiente
                </a>
            </div>
        </div>
    </x-app-layout>
