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
            flex-direction: column;
            gap: 10px;
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
        .form-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 50px;
        }
        .form-section {
            flex: 1;
        }
        .image-section {
            flex: 1;
            display: flex;
            justify-content: center;
        }
        .image-section img {
            max-width: 85%;
            height: auto;
        }
    </style>
</head>
<body class="bg-white-100">
    <div class="mt-1">
        <img src="{{ asset('imagenes/remesa-express.png') }}" style="width: 130px; height: auto;" class="ml-auto mr-auto"  alt="Logo Remesa Express"/>
    <div class="bg-[#6A994E] mt-[-1] h-9 w-full" ></div>
    </div>
    <div class="flex items-center justify-center min-h-screen">
        <div class="form-container">
            <div class="form-section">
                <div class="custom-card">
                    <h2 style="font-size: 32px;">¿A quién se lo envías?</h2>
                    <form>
                        <div class="input-group">
                            <x-label for="dpi" value="DPI del Receptor" />
                            <x-input id="dpi" class="block mt-1 w-full" type="text" name="dpi" required autofocus autocomplete="dpi" />
                        </div>
                        <div class="input-group">
                            <label class="flex items-start">
                                <input type="checkbox" name="politica" class="mr-2 mt-1" required>
                                <span>Usted declara que la información proporcionada es veraz y acepta nuestra Política de Privacidad.</span>
                            </label>
                            <label class="flex items-start">
                                <input type="checkbox" name="responsable" class="mr-2 mt-1" required>
                                <span>Remesas Express no se hace responsable por retrasos o fallos causados por factores externos fuera de nuestro control.</span>
                            </label>
                        </div>
                    </form>
                    <div class="button-container" >
                        <a href="{{ route('infoenvio') }}" class=" w-[150px] text-center  p-2 self-start rounded-lg bg-blue-800 text-white">
                            Siguiente
                        </a>
                    </div>
                </div>
            </div>
            <div class="image-section">
                <img src="{{ asset('imagenes/mapa.png') }}" alt="Mapa" />
            </div>
        </div>
    </div>
</body>
</html>
