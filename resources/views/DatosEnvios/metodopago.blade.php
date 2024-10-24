<!DOCTYPE html>
<html lang="es">
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
            font-size: 28px;
            margin-bottom: 40px;
            text-align: start;
            font-weight: bold;
        }

        .input-group {
            display: flex;
            justify-content: center;
            gap: 15px; /* Espacio entre los botones */
            margin-bottom: 20px;
        }

        .custom-card .card-button {
            width: 180px;
            height: 200px;
            border: 2px solid black; /* Líneas negras en el contorno */
            border-radius: 15px; /* Esquinas redondeadas */
            background-color: transparent; /* Sin relleno */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            text-align: center;
        }

        .custom-card .card-button img {
            width: 60px;
            height: 60px;
            border-radius: 50%; /* Imagen circular */
            border: 2px solid black; /* Línea negra alrededor de la imagen */
            padding: 5px;
        }

        .custom-card .card-button span {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .button-container {
            text-align: center;
        }

        .custom-card button[type="submit"] {
            background-color: #6a0dad;
            color: white; /* Texto blanco para el botón "Continuar" */
            padding: 10px 40px;
            border: none;
            border-radius: 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .custom-card button[type="submit"]:hover {
            background-color: #5a0cac;
        }

        .custom-card button {
            background-color: #6a0dad;
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
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

        .image-section img {
            max-width: 85%;
            height: auto;
        }

        .summary-section {
            background-color: #d3d3d3; /* Color de fondo similar a la imagen */
            padding: 20px; /* Ajustamos el padding para caber mejor en el tamaño */
            border-radius: 8px;
            text-align: center;
            font-family: Arial, sans-serif;
            font-size: 16px; /* Tamaño de fuente ajustado */
            font-weight: bold;
            width: 415px; /* Ancho especificado */
            height: 386px; /* Alto especificado */
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin: 0 auto;
            max-width: 500px;

        }

        .summary-section hr {
            border: none;
            border-top: 1px solid black;
            margin: 5px 0; /* Espaciado reducido para ajustarse a las nuevas dimensiones */
        }

        .summary-section .line-item {
            margin: 5px 0; /* Espaciado ajustado */
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
                <h2>¿Cómo te gustaría pagar?</h2>
                <form>
                    <div class="input-group">
                        <button class="card-button" type="button">
                            <span>Tarjeta de Crédito</span>
                            <img src="{{ asset('imagenes/tarjeta.png') }}" alt="Tarjeta Crédito">
                        </button>
                        <button class="card-button" type="button">
                            <span>Tarjeta de Débito</span>
                            <img src="{{ asset('imagenes/tarjeta.png') }}" alt="Tarjeta Débito">
                        </button>
                    </div>
                    <div class="button-container">
                        <button type="submit">Continuar</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Resumen de transacción -->
        <div class="summary-section">
            <div class="line-item">Tu resumen</div>
            <hr>
            <div class="line-item">Monto USD = Monto QT</div>
            <div class="line-item">Comisión por envío</div>
            <hr>
            <div class="line-item">Total de transacción</div>
        </div>
    </div>
</div>
</body>
</html>
