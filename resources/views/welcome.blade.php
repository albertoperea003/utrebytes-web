<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'UtreBytes') }} - Bienvenido</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <!-- Styles -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* Fallback styles */
            * { margin: 0; padding: 0; box-sizing: border-box; }
            body { font-family: 'Instrument Sans', sans-serif; line-height: 1.6; }
        </style>
    @endif
</head>
    <body>
        <!-- Navigation -->
        <nav>
            <div class="nav-container">
                <a href="#" class="nav-logo">
                    <img src="{{ asset('images/logo2.png') }}" alt="UtreBytes Logo" class="logo-img">
                </a>
                <button class="menu-toggle" id="menuToggle">☰</button>
                <ul class="nav-links" id="navLinks">
                    <li><a href="#features">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        Inicio
                    </a></li>
                    <li><a href="#features">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                        </svg>
                        Características
                    </a></li>
                    <li><a href="#cta">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                        Contacto
                    </a></li>
                    <li class="nav-button-mobile"><button class="nav-button">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        Accede
                    </button></li>
                </ul>
                <button class="nav-button nav-button-desktop">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    Accede
                </button>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-content">
                <h1>Bienvenido a UtreBytes</h1>
                <p>Soluciones innovadoras para transformar tu negocio digital. Tecnología de vanguardia al servicio de tus necesidades.</p>
                <div class="hero-buttons">
                    <button class="btn-primary-white">Comenzar Ahora</button>
                    <button class="btn-secondary-white">Conoce Más</button>
                </div>
            </div>
            <div class="hero-stats">
                <div class="stat">
                    <span class="stat-number">500+</span>
                    <span class="stat-label">Clientes Satisfechos</span>
                </div>
                <div class="stat">
                    <span class="stat-number">10K+</span>
                    <span class="stat-label">Proyectos Completados</span>
                </div>
                <div class="stat">
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">Soporte Disponible</span>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="features" id="features">
            <div class="container">
                <div class="features-header">
                    <h2>¿Por qué elegirnos?</h2>
                    <p>Descubre las características que hacen a UtreBytes la mejor opción para tu proyecto</p>
                </div>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">⚡</div>
                        <h3>Rendimiento</h3>
                        <p>Tecnología optimizada para velocidad máxima y eficiencia en todos tus procesos.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🔒</div>
                        <h3>Seguridad</h3>
                        <p>Protección avanzada con estándares internacionales de seguridad de datos.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">📱</div>
                        <h3>Responsivo</h3>
                        <p>Diseño adaptable a cualquier dispositivo para mejor experiencia de usuario.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🎯</div>
                        <h3>Preciso</h3>
                        <p>Análisis detallado y reportes claros para tomar mejores decisiones.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🚀</div>
                        <h3>Escalable</h3>
                        <p>Crece sin límites. Nuestra infraestructura crece con tu negocio.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">💡</div>
                        <h3>Innovación</h3>
                        <p>Siempre a la vanguardia con las últimas tendencias tecnológicas.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta" id="cta">
            <div class="container">
                <h2>¿Listo para transformar tu negocio?</h2>
                <p>Únete a cientos de empresas que ya confían en nuestras soluciones. Contacta con nosotros hoy mismo.</p>
                <button class="cta-button">Solicitar Demostración</button>
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <div class="footer-content">
                <div class="footer-section">
                    <h4>UtreBytes</h4>
                    <p>Soluciones tecnológicas innovadoras para el futuro de tu negocio.</p>
                </div>
                <div class="footer-section">
                    <h4>Producto</h4>
                    <ul>
                        <li><a href="#">Características</a></li>
                        <li><a href="#">Precios</a></li>
                        <li><a href="#">Seguridad</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Empresa</h4>
                    <ul>
                        <li><a href="#">Acerca de</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Empleos</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#">Privacidad</a></li>
                        <li><a href="#">Términos</a></li>
                        <li><a href="#">Cookies</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-divider"></div>
            <div class="footer-bottom">
                <p class="footer-text">&copy; 2025 UtreBytes. Todos los derechos reservados.</p>
                <div class="footer-links">
                    <a href="#">Twitter</a>
                    <a href="#">LinkedIn</a>
                    <a href="#">GitHub</a>
                </div>
            </div>
        </footer>
    </body>
</html>
