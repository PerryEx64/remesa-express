<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
</head>
<body class="bg-gray-100">
    <div class="mt-1">
        <img src="{{ asset('imagenes/remesa-express.png') }}" style="width: 130px; height: auto;" class="ml-auto mr-auto"  alt="Logo Remesa Express"/>
        <div class="bg-[#6A994E] mt-[-1] h-9 w-full" ></div>
    </div>

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
                    <x-label for="cuenta" value="Cuenta del Receptor" />
                    <x-input id="cuenta" class="block mt-1 w-full" type="text" name="cuenta" required autocomplete="cuenta" />
                </div>
                <div>
                    <x-label for="Receptor" value="Nombre del Receptor" />
                    <x-input id="Receptor" class="block mt-1 w-full" type="text" name="Receptor" required autocomplete="Receptor" />
                </div>
                <div class="qr-container">
                    <img src="" alt="QR Code" id="qr-code"/>
                </div>
                <div class="button-container">
                    <button type="submit">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
