@extends('layouts.app')

@section('title', 'Recursos - UtreBytes')

@section('content')
<div class="recursos-container">
    <!-- Header -->
    <section class="recursos-header" style="background-image: linear-gradient(rgba(255, 255, 255, 0.6), rgba(255, 255, 255, 0.6)), url('{{ asset('images/heros/hero_recursos.jpg') }}');">
        <div class="container">
            <h1>RECURSOS PARA DESARROLLADORES</h1>
            <p>Todo lo que necesitas para integrar y maximizar nuestras soluciones</p>
        </div>
    </section>

    <!-- Documentación Técnica Section -->
    <section class="recursos-section recursos-docs">
        <div class="container">
            <div class="recursos-subsection-header">
                <h2>Documentación Técnica</h2>
                <p>Accede a nuestra completa documentación técnica y guías de integración</p>
            </div>

            <div class="recursos-grid">
                <!-- Documentación 1 -->
                <div class="recurso-card">
                    <div class="recurso-card__header">
                        <div class="recurso-card__icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h3 class="recurso-card__title">API Documentation</h3>
                    </div>
                    <div class="recurso-card__content">
                        <p class="recurso-card__description">
                            Referencia completa de nuestras APIs con ejemplos de código, endpoints, parámetros y respuestas detalladas.
                        </p>
                        <div class="recurso-card__links">
                            <a href="#" class="recurso-card__link" target="_blank">Ver Documentación</a>
                            <a href="#" class="recurso-card__link" target="_blank">Especificación OpenAPI</a>
                        </div>
                    </div>
                </div>

                <!-- Documentación 2 -->
                <div class="recurso-card">
                    <div class="recurso-card__header">
                        <div class="recurso-card__icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3 class="recurso-card__title">SDK y Bibliotecas</h3>
                    </div>
                    <div class="recurso-card__content">
                        <p class="recurso-card__description">
                            Kits de desarrollo oficiales para JavaScript, Python, PHP, Java y más lenguajes populares.
                        </p>
                        <div class="recurso-card__links">
                            <a href="#" class="recurso-card__link" target="_blank">Descargar SDKs</a>
                            <a href="#" class="recurso-card__link" target="_blank">Repositorio GitHub</a>
                        </div>
                    </div>
                </div>

                <!-- Documentación 3 -->
                <div class="recurso-card">
                    <div class="recurso-card__header">
                        <div class="recurso-card__icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 class="recurso-card__title">Ejemplos de Código</h3>
                    </div>
                    <div class="recurso-card__content">
                        <p class="recurso-card__description">
                            Ejemplos prácticos listos para usar en diferentes lenguajes de programación y frameworks.
                        </p>
                        <div class="recurso-card__links">
                            <a href="#" class="recurso-card__link" target="_blank">Ver Ejemplos</a>
                            <a href="#" class="recurso-card__link" target="_blank">Descargar Repositorio</a>
                        </div>
                    </div>
                </div>

                <!-- Documentación 4 -->
                <div class="recurso-card">
                    <div class="recurso-card__header">
                        <div class="recurso-card__icon">
                            <i class="fas fa-puzzle-piece"></i>
                        </div>
                        <h3 class="recurso-card__title">Guías de Integración</h3>
                    </div>
                    <div class="recurso-card__content">
                        <p class="recurso-card__description">
                            Pasos detallados para integrar nuestros servicios con tus aplicaciones existentes.
                        </p>
                        <div class="recurso-card__links">
                            <a href="#" class="recurso-card__link" target="_blank">Leer Guías</a>
                            <a href="#" class="recurso-card__link" target="_blank">Casos de Uso</a>
                        </div>
                    </div>
                </div>

                <!-- Documentación 5 -->
                <div class="recurso-card">
                    <div class="recurso-card__header">
                        <div class="recurso-card__icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="recurso-card__title">Seguridad y Autenticación</h3>
                    </div>
                    <div class="recurso-card__content">
                        <p class="recurso-card__description">
                            Información sobre OAuth, JWT, API Keys y mejores prácticas de seguridad en APIs.
                        </p>
                        <div class="recurso-card__links">
                            <a href="#" class="recurso-card__link" target="_blank">Guía de Seguridad</a>
                            <a href="#" class="recurso-card__link" target="_blank">Estándares de Autenticación</a>
                        </div>
                    </div>
                </div>

                <!-- Documentación 6 -->
                <div class="recurso-card">
                    <div class="recurso-card__header">
                        <div class="recurso-card__icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h3 class="recurso-card__title">Herramientas y Utilidades</h3>
                    </div>
                    <div class="recurso-card__content">
                        <p class="recurso-card__description">
                            Postman collections, CLI tools, y otras utilidades para acelerar tu desarrollo.
                        </p>
                        <div class="recurso-card__links">
                            <a href="#" class="recurso-card__link" target="_blank">Descargar Herramientas</a>
                            <a href="#" class="recurso-card__link" target="_blank">Ver Utilidades</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tutoriales y Guías Section -->
    <section class="recursos-section recursos-tutoriales">
        <div class="container">
            <div class="recursos-subsection-header">
                <h2>Tutoriales y Guías</h2>
                <p>Aprende paso a paso cómo implementar y sacar el máximo provecho de nuestras soluciones</p>
            </div>

            <div class="tutorials-grid">
                <!-- Tutorial 1 -->
                <div class="tutorial-card">
                    <div class="tutorial-card__header">
                        <div>
                            <h3 class="tutorial-title">Primeros Pasos</h3>
                        </div>
                        <span class="tutorial-level">Básico</span>
                    </div>
                    <div class="tutorial-card__content">
                        <p class="tutorial-description">
                            Guía de inicio rápido para nuevos desarrolladores. Configura tu cuenta, obtén tus credenciales y realiza tu primera llamada a la API.
                        </p>
                        <div class="tutorial-topics">
                            <span class="tutorial-topic">Configuración</span>
                            <span class="tutorial-topic">API Keys</span>
                            <span class="tutorial-topic">Hello World</span>
                        </div>
                        <a href="#" class="tutorial-cta" target="_blank">Iniciar Tutorial</a>
                    </div>
                </div>

                <!-- Tutorial 2 -->
                <div class="tutorial-card">
                    <div class="tutorial-card__header">
                        <div>
                            <h3 class="tutorial-title">Integración de API</h3>
                        </div>
                        <span class="tutorial-level">Intermedio</span>
                    </div>
                    <div class="tutorial-card__content">
                        <p class="tutorial-description">
                            Integra completamente nuestras APIs en tu aplicación. Manejo de errores, autenticación y mejores prácticas.
                        </p>
                        <div class="tutorial-topics">
                            <span class="tutorial-topic">Autenticación</span>
                            <span class="tutorial-topic">Manejo de Errores</span>
                            <span class="tutorial-topic">Rate Limiting</span>
                        </div>
                        <a href="#" class="tutorial-cta" target="_blank">Leer Tutorial</a>
                    </div>
                </div>

                <!-- Tutorial 3 -->
                <div class="tutorial-card">
                    <div class="tutorial-card__header">
                        <div>
                            <h3 class="tutorial-title">Mejores Prácticas</h3>
                        </div>
                        <span class="tutorial-level">Avanzado</span>
                    </div>
                    <div class="tutorial-card__content">
                        <p class="tutorial-description">
                            Optimiza tu código, implementa caché, manejo de transacciones y patrones de diseño recomendados.
                        </p>
                        <div class="tutorial-topics">
                            <span class="tutorial-topic">Caché</span>
                            <span class="tutorial-topic">Performance</span>
                            <span class="tutorial-topic">Patrones</span>
                        </div>
                        <a href="#" class="tutorial-cta" target="_blank">Ver Guía</a>
                    </div>
                </div>

                <!-- Tutorial 4 -->
                <div class="tutorial-card">
                    <div class="tutorial-card__header">
                        <div>
                            <h3 class="tutorial-title">Webhooks y Eventos</h3>
                        </div>
                        <span class="tutorial-level">Intermedio</span>
                    </div>
                    <div class="tutorial-card__content">
                        <p class="tutorial-description">
                            Implementa webhooks para reaccionar a eventos en tiempo real de nuestros servicios.
                        </p>
                        <div class="tutorial-topics">
                            <span class="tutorial-topic">Webhooks</span>
                            <span class="tutorial-topic">Eventos</span>
                            <span class="tutorial-topic">Tiempo Real</span>
                        </div>
                        <a href="#" class="tutorial-cta" target="_blank">Leer Guía</a>
                    </div>
                </div>

                <!-- Tutorial 5 -->
                <div class="tutorial-card">
                    <div class="tutorial-card__header">
                        <div>
                            <h3 class="tutorial-title">Testing y Debugging</h3>
                        </div>
                        <span class="tutorial-level">Intermedio</span>
                    </div>
                    <div class="tutorial-card__content">
                        <p class="tutorial-description">
                            Aprende a testear tus integraciones con nuestras herramientas y depurar problemas comunes.
                        </p>
                        <div class="tutorial-topics">
                            <span class="tutorial-topic">Unit Tests</span>
                            <span class="tutorial-topic">Debugging</span>
                            <span class="tutorial-topic">Logs</span>
                        </div>
                        <a href="#" class="tutorial-cta" target="_blank">Acceder</a>
                    </div>
                </div>

                <!-- Tutorial 6 -->
                <div class="tutorial-card">
                    <div class="tutorial-card__header">
                        <div>
                            <h3 class="tutorial-title">Casos de Uso Reales</h3>
                        </div>
                        <span class="tutorial-level">Avanzado</span>
                    </div>
                    <div class="tutorial-card__content">
                        <p class="tutorial-description">
                            Estudia implementaciones reales de empresas y aprende de casos de éxito en diferentes industrias.
                        </p>
                        <div class="tutorial-topics">
                            <span class="tutorial-topic">Case Studies</span>
                            <span class="tutorial-topic">Industrias</span>
                            <span class="tutorial-topic">ROI</span>
                        </div>
                        <a href="#" class="tutorial-cta" target="_blank">Ver Casos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Centro de Descargas Section -->
    <section class="recursos-section recursos-descargas">
        <div class="container">
            <div class="recursos-subsection-header">
                <h2>Centro de Descargas</h2>
                <p>Descarga herramientas, plugins, extensiones y recursos útiles para tu desarrollo</p>
            </div>

            <div class="downloads-grid">
                <!-- Download 1 -->
                <div class="download-card">
                    <div class="download-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="download-name">SDK Móvil</h3>
                    <p class="download-type">Para iOS y Android</p>
                    <a href="#" class="download-btn" download>Descargar v2.5.0</a>
                </div>

                <!-- Download 2 -->
                <div class="download-card">
                    <div class="download-icon">
                        <i class="fas fa-plug"></i>
                    </div>
                    <h3 class="download-name">Plugins Web</h3>
                    <p class="download-type">Para WordPress, Shopify</p>
                    <a href="#" class="download-btn" download>Descargar v3.1.2</a>
                </div>

                <!-- Download 3 -->
                <div class="download-card">
                    <div class="download-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3 class="download-name">SDKs Backend</h3>
                    <p class="download-type">Node.js, Python, Java, PHP</p>
                    <a href="#" class="download-btn" download>Descargar v4.2.0</a>
                </div>

                <!-- Download 4 -->
                <div class="download-card">
                    <div class="download-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h3 class="download-name">CLI Tool</h3>
                    <p class="download-type">Command Line Interface</p>
                    <a href="#" class="download-btn" download>Descargar v1.8.5</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog y Artículos Section -->
    <section class="recursos-section recursos-blog">
        <div class="container">
            <div class="recursos-subsection-header">
                <h2>Blog y Artículos</h2>
                <p>Mantente actualizado con nuestras últimas publicaciones sobre tecnología, innovación y mejores prácticas</p>
            </div>

            <div class="blog-grid">
                <!-- Blog Post 1 -->
                <div class="blog-card">
                    <div class="blog-image">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="blog-content">
                        <p class="blog-category">Tecnología</p>
                        <h3 class="blog-title">El Futuro de las APIs en 2025</h3>
                        <p class="blog-excerpt">
                            Explora las tendencias más importantes en desarrollo de APIs, desde GraphQL hasta arquitecturas serverless y cómo afectarán a tu desarrollo.
                        </p>
                        <div class="blog-meta">
                            <span class="blog-date">23 de Diciembre, 2025</span>
                            <span class="blog-read-time">5 min lectura</span>
                        </div>
                        <a href="#" class="blog-link" target="_blank">Leer Artículo</a>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="blog-card">
                    <div class="blog-image">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="blog-content">
                        <p class="blog-category">Seguridad</p>
                        <h3 class="blog-title">Seguridad en APIs: Guía Completa 2025</h3>
                        <p class="blog-excerpt">
                            Aprende las mejores prácticas para proteger tus APIs contra ataques comunes, implementar OAuth 2.0 correctamente y validar datos de entrada.
                        </p>
                        <div class="blog-meta">
                            <span class="blog-date">18 de Diciembre, 2025</span>
                            <span class="blog-read-time">8 min lectura</span>
                        </div>
                        <a href="#" class="blog-link" target="_blank">Leer Artículo</a>
                    </div>
                </div>

                <!-- Blog Post 3 -->
                <div class="blog-card">
                    <div class="blog-image">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="blog-content">
                        <p class="blog-category">Performance</p>
                        <h3 class="blog-title">Optimización de Aplicaciones UtreBytes</h3>
                        <p class="blog-excerpt">
                            Descubre cómo optimizar tus consultas a nuestras APIs, implementar caché efectivo y reducir latencia en tus aplicaciones.
                        </p>
                        <div class="blog-meta">
                            <span class="blog-date">12 de Diciembre, 2025</span>
                            <span class="blog-read-time">6 min lectura</span>
                        </div>
                        <a href="#" class="blog-link" target="_blank">Leer Artículo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="recursos-cta" style="background-image: linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.7)), url('{{ asset('images/heros/hero_servicios.jpg') }}');">
        <div class="container">
            <h2>¿Necesitas Ayuda?</h2>
            <p>Nuestro equipo de soporte está disponible para responder todas tus preguntas y ayudarte a integrar nuestros servicios</p>
            <a href="{{ route('contacto') }}" class="btn-primary">Contactar Soporte</a>
        </div>
    </section>
</div>
@endsection
