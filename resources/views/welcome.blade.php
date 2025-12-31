@extends('layouts.app')

@section('title', 'Inicio - UtreBytes')

@section('content')
        <!-- Hero Section -->
        <section class="hero" style="background-image: linear-gradient(135deg, rgba(13, 27, 42, 0.85) 0%, rgba(15, 35, 55, 0.75) 50%, rgba(212, 175, 55, 0.15) 100%), url('{{ asset('images/heros/hero_background.jpg') }}');">
            <div class="hero-container">
                <div class="hero-content">
                    <div class="hero-badge">
                        <span class="badge-text">Transformación Digital</span>
                    </div>
                    <h1 class="hero-title">
                        Tecnología de vanguardia para tu negocio
                    </h1>
                    <p class="hero-subtitle">
                        UtreBytes, la unidad tecnológica de <strong>GRUPO LRP 24 HOLDING S.L.</strong>
                    </p>
                    <div class="hero-buttons">
                        <a href="{{ route('caracteristicas') }}" class="btn btn-primary">
                            <span>Explorar Servicios</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                        <a href="{{ route('utrebytes') }}" class="btn btn-secondary">Conoce Nuestra Historia</a>
                    </div>
                </div>
                <div class="hero-visual">
                    <div class="floating-card card-1">
                        <div class="card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 2L2 7v10c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-10-5z"></path>
                            </svg>
                        </div>
                        <p>Ciberseguridad</p>
                    </div>
                    <div class="floating-card card-2">
                        <div class="card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 2v20m10-10H2"></path>
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg>
                        </div>
                        <p>Inteligencia Artificial</p>
                    </div>
                    <div class="floating-card card-3">
                        <div class="card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="16 18 22 12 16 6"></polyline>
                                <polyline points="8 6 2 12 8 18"></polyline>
                            </svg>
                        </div>
                        <p>Software a Medida</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="features" id="features">
            <div class="container">
                <div class="features-header">
                    <h2>¿Por qué elegirnos?</h2>
                    <p>Descubre los servicios que ofrecemos para tu proyecto</p>
                </div>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="{{ asset('images/servicios/servicio_1.jpg') }}" alt="Desarrollo de Software a Medida" loading="lazy">
                        </div>
                        <h3>Soluciones digitales a medida</h3>
                    </div>
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="{{ asset('images/servicios/servicio_2.jpg') }}" alt="Inteligencia Artificial y Modelos Generativos" loading="lazy">
                        </div>
                        <h3>Inteligencia Artificial aplicada al negocio</h3>
                    </div>
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="{{ asset('images/servicios/servicio_3.jpg') }}" alt="SI-GO! — Plataforma para reparaciones y aseguradoras" loading="lazy">
                        </div>
                        <h3>Plataforma SI-GO – Gestión inteligente de siniestros</h3>
                    </div>
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="{{ asset('images/servicios/servicio_4.jpg') }}" alt="ERP Inteligente" loading="lazy">
                        </div>
                        <h3>ERP inteligente y operativo</h3>
                    </div>
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="{{ asset('images/servicios/servicio_5.jpg') }}" alt="Automatización de Procesos y Agentes Autónomos" loading="lazy">
                        </div>
                        <h3>Automatización avanzada y agentes autónomos</h3>
                    </div>
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="{{ asset('images/servicios/servicio_6.jpg') }}" alt="Ciberseguridad y Cumplimiento" loading="lazy">
                        </div>
                        <h3>Ciberseguridad y cumplimiento normativo</h3>
                    </div>
                    <div class="feature-card hidden">
                        <div class="feature-image">
                            <img src="{{ asset('images/servicios/servicio_7.jpg') }}" alt="Cloud, DevOps y Escalabilidad" loading="lazy">
                        </div>
                        <h3>Business Intelligence y y analítica avanzada</h3>
                    </div>
                    <div class="feature-card hidden">
                        <div class="feature-image">
                            <img src="{{ asset('images/servicios/servicio_9.jpg') }}" alt="Formación y Captación de Talento (CUCO)" loading="lazy">
                        </div>
                        <h3>Soporte, mantenimiento y SLA</h3>
                    </div>
                    <div class="feature-card hidden">
                        <div class="feature-image">
                            <img src="{{ asset('images/servicios/servicio_8.jpg') }}" alt="Formación y Captación de Talento (CUCO)" loading="lazy">
                        </div>
                        <h3>Infraestructura IT, Comunicaciones y Servicios Cloud</h3>
                    </div>
                </div>
                <div class="features-actions">
                    <button class="btn-show-more" id="showMoreBtn">
                        Ver más servicios
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta" id="cta" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('images/heros/hero_background.jpg') }}');">
            <div class="container">
                <h2>¿Quieres transformar tu negocio?</h2>
                <p>Únete a decenas de empresas que ya confían en nuestras soluciones. Contacta con nosotros hoy mismo.</p>
                <a href="{{ route('contacto') }}" class="cta-button">Contacta</a>
            </div>
        </section>
        
@endsection