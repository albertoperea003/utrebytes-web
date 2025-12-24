@extends('layouts.app')

@section('title', 'Servicios - UtreBytes')

@section('content')
<div class="characteristics-container">
    <!-- Header -->
    <section class="characteristics-header" style="background-image: linear-gradient(rgba(255, 255, 255, 0.6), rgba(255, 255, 255, 0.6)), url('{{ asset('images/heros/hero_servicios.jpg') }}');">
        <div class="container">
            <h1>Nuestros principales servicios</h1>
            <p>Descubre todas las soluciones y servicios que hacen de UtreBytes tu socio tecnológico ideal</p>
        </div>
    </section>

    <!-- Features Grid -->
    <section class="characteristics-section">
        <div class="container">
            <div class="characteristics-grid">
                <!-- Feature 1 -->
                <div class="characteristic-card">
                    <div class="characteristic-card__image">
                        <img src="{{ asset('images/servicios/servicio_1.jpg') }}" alt="Formación y Captación de Talento (CUCO)" loading="lazy">
                    </div>
                    <div class="characteristic-card__content">
                        <h3>Software a Medida</h3>
                        <p class="characteristic-card__description">
                            Aplicaciones web y móviles personalizadas para tus necesidades.
                        </p>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Consultar</a>
                        </div>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="characteristic-card">
                    <div class="characteristic-card__image">
                        <img src="{{ asset('images/servicios/servicio_2.jpg') }}" alt="Formación y Captación de Talento (CUCO)" loading="lazy">
                    </div>
                    <div class="characteristic-card__content">
                        <h3>IA y Modelos Generativos</h3>
                        <p class="characteristic-card__description">
                            Soluciones de inteligencia artificial de última generación.
                        </p>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Consultar</a>
                        </div>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="characteristic-card">
                    <div class="characteristic-card__image">
                        <img src="{{ asset('images/servicios/servicio_3.jpg') }}" alt="Formación y Captación de Talento (CUCO)" loading="lazy">
                    </div>
                    <div class="characteristic-card__content">
                        <h3>SI-GO! Plataforma de Reparaciones</h3>
                        <p class="characteristic-card__description">
                            Gestión integral de siniestros y reparaciones.
                        </p>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Consultar</a>
                        </div>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="characteristic-card">
                    <div class="characteristic-card__image">
                        <img src="{{ asset('images/servicios/servicio_4.jpg') }}" alt="Formación y Captación de Talento (CUCO)" loading="lazy">
                    </div>
                    <div class="characteristic-card__content">
                        <h3>ERP Inteligente</h3>
                        <p class="characteristic-card__description">
                            Sistema ERP para optimizar operaciones de tu negocio.
                        </p>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Consultar</a>
                        </div>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="characteristic-card">
                    <div class="characteristic-card__image">
                        <img src="{{ asset('images/servicios/servicio_5.jpg') }}" alt="Formación y Captación de Talento (CUCO)" loading="lazy">
                    </div>
                    <div class="characteristic-card__content">
                        <h3>Automatización de Procesos</h3>
                        <p class="characteristic-card__description">
                            Automatiza tareas repetitivas con agentes inteligentes.
                        </p>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Consultar</a>
                        </div>
                    </div>
                </div>

                <!-- Feature 6 -->
                <div class="characteristic-card">
                    <div class="characteristic-card__image">
                        <img src="{{ asset('images/servicios/servicio_6.jpg') }}" alt="Formación y Captación de Talento (CUCO)" loading="lazy">
                    </div>
                    <div class="characteristic-card__content">
                        <h3>Ciberseguridad y Cumplimiento</h3>
                        <p class="characteristic-card__description">
                            Protege tu infraestructura con estándares internacionales.
                        </p>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Consultar</a>
                        </div>
                    </div>
                </div>

                <!-- Feature 7 -->
                <div class="characteristic-card">
                    <div class="characteristic-card__image">
                        <img src="{{ asset('images/servicios/servicio_7.jpg') }}" alt="Formación y Captación de Talento (CUCO)" loading="lazy">
                    </div>
                    <div class="characteristic-card__content">
                        <h3>Business Intelligence y Analytics</h3>
                        <p class="characteristic-card__description">
                            Toma decisiones basadas en datos reales.
                        </p>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Consultar</a>
                        </div>
                    </div>
                </div>

                <!-- Feature 8 -->
                <div class="characteristic-card">
                    <div class="characteristic-card__image">
                        <img src="{{ asset('images/servicios/servicio_8.jpg') }}" alt="Formación y Captación de Talento (CUCO)" loading="lazy">
                    </div>
                    <div class="characteristic-card__content">
                        <h3>Cloud y Escalabilidad</h3>
                        <p class="characteristic-card__description">
                            Infraestructura moderna con confiabilidad garantizada.
                        </p>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Consultar</a>
                        </div>
                    </div>
                </div>

                <!-- Feature 9 -->
                <div class="characteristic-card">
                    <div class="characteristic-card__image">
                        <img src="{{ asset('images/servicios/servicio_9.jpg') }}" alt="Formación y Captación de Talento (CUCO)" loading="lazy">
                    </div>
                    <div class="characteristic-card__content">
                        <h3>Consultoría Tecnológica</h3>
                        <p class="characteristic-card__description">
                            Guía experta para tu transformación digital.
                        </p>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Consultar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="characteristics-cta" style="background-image: linear-gradient(rgba(255, 255, 255, 0.6), rgba(255, 255, 255, 0.6)), url('{{ asset('images/heros/hero_servicios.jpg') }}');">
        <div class="container">
            <h2>¿No lo tienes claro?</h2>
            <p>Contátanos y descubre qué necesitas</p>
            <a href="{{ route('contacto') }}" class="cta-button">Solicita una Consulta Gratuita</a>
        </div>
    </section>
</div>
@endsection
    