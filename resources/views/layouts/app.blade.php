<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name', 'UtreBytes'))</title>
    <link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="navbar__inner">
            <a class="navbar__brand" href="{{ route('inicio') }}">
                <img src="{{ asset('images/logo2.png') }}" alt="UtreBytes" class="navbar__logo">
            </a>

            <button class="navbar__toggle" type="button" aria-label="Abrir menú" aria-expanded="false" aria-controls="navbarMenu">
                <span aria-hidden="true"></span>
            </button>

            <ul class="navbar__menu" id="navbarMenu">
                <li><a class="navbar__link" href="{{ route('inicio') }}">Inicio</a></li>
                <li class="navbar__dropdown">
                    <a class="navbar__link" href="{{ route('caracteristicas') }}">
                        Servicios
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="navbar__dropdown-menu">
                        <li><a href="{{ route('caracteristicas') }}">Software a Medida</a></li>
                        <li><a href="{{ route('caracteristicas') }}">IA y Modelos Generativos</a></li>
                        <li><a href="{{ route('caracteristicas') }}">SI-GO!</a></li>
                        <li><a href="{{ route('caracteristicas') }}">ERP Inteligente</a></li>
                        <li><a href="{{ route('caracteristicas') }}">Automatizaciones</a></li>
                        <li><a href="{{ route('caracteristicas') }}">Ciberseguridad</a></li>
                        <li><a href="{{ route('caracteristicas') }}">Cloud y Escalabilidad</a></li>
                        <li><a href="{{ route('caracteristicas') }}">Business Intelligence y Analítica</a></li>
                        <li><a href="{{ route('caracteristicas') }}">Formación y Captación</a></li>
                    </ul>
                </li>
                <li><a class="navbar__link" href="{{ route('recursos') }}">Recursos</a></li>
                <li><a class="navbar__link" href="{{ route('utrebytes') }}">Conócenos</a></li>
                <li><a class="navbar__link" href="{{ route('partners') }}">Clientes</a></li>
                <!-- <li><a class="navbar__link" href="{{ route('clientes') }}">Clientes</a></li> -->
                <li><a class="navbar__link" href="{{ route('contacto') }}">Contacto</a></li>
                <!-- <li class="navbar__menu-item--cta">
                    <a class="navbar__link navbar__link--cta" href="{{ route('accede') }}">Accede</a>
                </li> -->
            </ul>
        </div>
    </nav>

    <!-- Main Content -->

        @yield('content')

    <!-- Chatbot Widget -->
    @include('components.chatbot-widget')

    <!-- Cookie Banner -->
    @include('components.cookie-banner')
    <footer>
            <div class="footer-content">
                <div class="footer-section">
                    <h4>UtreBytes</h4>
                    <p>Soluciones tecnológicas innovadoras para el futuro de tu negocio.</p>
                </div>
                <div class="footer-section">
                    <h4>Producto</h4>
                    <ul>
                        <li><a href="{{ route('caracteristicas') }}">Servicios</a></li>
                        <li><a href="{{ route('caracteristicas') }}">Precios</a></li>
                        <li><a href="#">Seguridad</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Empresa</h4>
                    <ul>
                        <li><a href="{{ route('utrebytes') }}">Acerca de</a></li>
                        <li><a href="{{ route('recursos') }}">Blog</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="{{ route('terminos-cookies') }}">Términos y Cookies</a></li>
                        <li><a href="#">Datos</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-divider"></div>
            <div class="footer-bottom">
                <p class="footer-text">&copy; 2025 UtreBytes. Todos los derechos reservados.</p>
                <div class="footer-links">
                    <a href="https://x.com/?lang=es">Twitter</a>
                    <a href="https://es.linkedin.com/">LinkedIn</a>
                    <a href="https://github.com/?locale=es">GitHub</a>
                </div>
            </div>
        </footer>
</body>
</html>
