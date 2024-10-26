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
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .title-section {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            margin-bottom: 20px;
        }
        .title-text {
            display: flex;
            flex-direction: column;
            text-align: left;
            position: absolute;
            left: 0;
        }
        .title-line1, .title-line2 {
            font-size: 32px; /* Tamaño aumentado */
            font-weight: bold;
            margin: 0;
        }
        .about-title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .about-text {
            font-size: 16px;
            line-height: 1.6;
            text-align: center;
            color: #333;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #777;
        }
        .logo-top {
            width: 180px; /* Tamaño aumentado */
            height: auto;
        }
        .banner {
            background-color: #6A994E;
            height: 9px;
            width: 100%;
        }
    </style>
</head>
<body class="bg-white-100">
    <div class="mt-1">
        <img src="{{ asset('imagenes/remesa-express.png') }}" style="width: 130px; height: auto;" class="ml-auto mr-auto"  alt="Logo Remesa Express"/>
        <div class="bg-[#6A994E] mt-[-1] h-9 w-full" ></div>
    </div>
    <br>
    <br>
    <div class="container mt-8">
        <div class="title-section">
            <div class="title-text">
                <h1 class="title-line1">Descubre Sobre</h1>
                <h1 class="title-line2">Nuestros Ideales</h1>
            </div>
            <img src="{{ asset('imagenes/remesa-express.png') }}" alt="Icono Remesas Express" class="logo-top">
        </div>
        <div class="about-title">Acerca de nosotros</div>
        <p class="about-text">
            Remesas Express es una empresa dedicada a facilitar el envío de remesas de manera rápida, segura y económica. Nuestro objetivo es conectar a personas y comunidades, permitiendo que las transferencias de dinero sean sencillas y accesibles para todos. Nos enorgullecemos de ofrecer un servicio confiable respaldado por tecnología avanzada y medidas de seguridad robustas. Nuestro equipo está comprometido con brindar una atención al cliente excepcional, asegurando que cada transacción sea una experiencia positiva.
        </p>
        <br>
        <p class="about-text">
            En Remesas Express, no solo movemos dinero; movemos corazones y acercamos a las personas, sin importar la distancia.
        </p>
        <br>
        <p class="about-text">
            Remesas Express: Enviando más que dinero, conectando vidas.
        </p>
    </div>
</body>
</html>