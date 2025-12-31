@extends('layouts.app')

@section('title', 'Clientes - UtreBytes')

@section('content')
<!-- Hero Section -->
<section class="hero" style="background-image: linear-gradient(135deg, rgba(13, 27, 42, 0.85) 0%, rgba(15, 35, 55, 0.75) 50%, rgba(212, 175, 55, 0.15) 100%), url('{{ asset('images/heros/hero_background.jpg') }}');">
    <div class="hero-container">
        <div class="hero-content">
            <div class="hero-badge">
                <span class="badge-text">Nuestros Clientes</span>
            </div>
            <h1 class="hero-title">Empresas que confían en nosotros</h1>
            <p class="hero-subtitle">Descubre cómo hemos ayudado a más de 500 empresas a transformar su negocio</p>
        </div>
    </div>
</section>

<div class="container">

    <section class="mt-5">
        <h2>Casos de Éxito</h2>
        <p>Conoce cómo hemos ayudado a empresas de diversos sectores a transformar su negocio.</p>
    </section>

    <section class="mt-5">
        <h2>Sectores Atendidos</h2>
        <ul>
            <li>Seguros y Aseguradoras</li>
            <li>Logística y Transporte</li>
            <li>Retail y E-commerce</li>
            <li>Servicios Financieros</li>
            <li>Manufactura e Industria</li>
            <li>Salud y Bienestar</li>
        </ul>
    </section>

    <section class="mt-5">
        <h2>Estadísticas</h2>
        <ul>
            <li>500+ clientes satisfechos</li>
            <li>10,000+ proyectos completados</li>
            <li>24/7 soporte disponible</li>
            <li>99.9% uptime garantizado</li>
        </ul>
    </section>

    <section class="mt-5">
        <h2>Testimonios</h2>
        <p>Escucha lo que dicen nuestros clientes sobre su experiencia con UtreBytes.</p>
    </section>

    <section class="mt-5">
        <h2>¿Quieres ser nuestro próximo cliente?</h2>
        <a href="/contacto" class="btn btn-primary">Contacta con nosotros</a>
    </section>
</div>
@endsection
