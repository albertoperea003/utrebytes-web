@extends('layouts.app')

@section('title', 'Acerca de UtreBytes')

@section('content')
<!-- Hero Section -->
<section class="about-hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('images/heros/hero_background.jpg') }}');">
    <div class="container">
        <h1>Conócenos</h1>
        <p>La unidad tecnológica del GRUPO LRP 24 HOLDING dedicada a la transformación digital</p>
    </div>
</section>

<!-- About Section -->
<section class="about-section">
    <div class="container">
        <div class="about-grid">
            <div class="about-content">
                <h2>Nuestra Historia</h2>
                <p>UtreBytes nace como la unidad tecnológica del GRUPO LRP 24 HOLDING con la visión de transformar la forma en que las empresas utilizan la tecnología. Desde nuestros inicios, hemos apostado por la innovación, la calidad y la excelencia en el servicio, siendo un socio estratégico para empresas que buscan crecer en el mundo digital.</p>
                <p>Contamos con un equipo multidisciplinario de profesionales expertos en desarrollo de software, inteligencia artificial, consultoría y transformación digital, listos para convertir tus desafíos en oportunidades de crecimiento.</p>
            </div>
            <div class="about-image">
                <img src="{{ asset('images/heros/hero_background.jpg') }}" alt="Equipo UtreBytes">
            </div>
        </div>
    </div>
</section>

<!-- Mission, Vision, Values Section -->
<section class="about-mvv">
    <div class="container">
        <div class="mvv-grid">
            <!-- Misión -->
            <div class="mvv-card">
                <div class="mvv-image">
                    <img src="{{ asset('images/heros/hero_background.jpg') }}" alt="Misión">
                </div>
                <div class="mvv-content">
                    <h3>Misión</h3>
                    <p>Proporcionar soluciones tecnológicas innovadoras que ayuden a las empresas a crecer, mejorar su eficiencia operativa y adaptarse al mundo digital con excelencia.</p>
                </div>
            </div>

            <!-- Visión -->
            <div class="mvv-card">
                <div class="mvv-image">
                    <img src="{{ asset('images/heros/hero_background.jpg') }}" alt="Visión">
                </div>
                <div class="mvv-content">
                    <h3>Visión</h3>
                    <p>Ser el socio tecnológico de confianza para empresas que buscan transformación digital, innovación y crecimiento sostenible en un mundo cada vez más conectado.</p>
                </div>
            </div>

            <!-- Valores -->
            <div class="mvv-card">
                <div class="mvv-image">
                    <img src="{{ asset('images/heros/hero_background.jpg') }}" alt="Valores">
                </div>
                <div class="mvv-content">
                    <h3>Valores</h3>
                    <ul class="values-list">
                        <li><strong>Innovación</strong></li>
                        <li><strong>Calidad</strong></li>
                        <li><strong>Transparencia</strong></li>
                        <li><strong>Sostenibilidad</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="about-why">
    <div class="container">
        <h2>¿Por qué elegirnos?</h2>
        <div class="why-grid">
            <div class="why-card">
                <div class="why-number">01</div>
                <h4>Expertise Multidisciplinario</h4>
                <p>Equipo con experiencia en desarrollo, IA, consultoría y transformación digital</p>
            </div>
            <div class="why-card">
                <div class="why-number">02</div>
                <h4>Tecnología de Vanguardia</h4>
                <p>Utilizamos las últimas herramientas y frameworks para garantizar soluciones modernas</p>
            </div>
            <div class="why-card">
                <div class="why-number">03</div>
                <h4>Compromiso con la Calidad</h4>
                <p>Testing riguroso y buenas prácticas en cada proyecto que desarrollamos</p>
            </div>
            <div class="why-card">
                <div class="why-number">04</div>
                <h4>Asociación Estratégica</h4>
                <p>Somos tu socio en la transformación digital, no solo un proveedor</p>
            </div>
            <div class="why-card">
                <div class="why-number">05</div>
                <h4>Soporte Continuo</h4>
                <p>Acompañamiento antes, durante y después del proyecto para garantizar éxito</p>
            </div>
            <div class="why-card">
                <div class="why-number">06</div>
                <h4>Grupo LRP 24</h4>
                <p>Respaldo de un holding empresarial consolidado con diversas unidades de negocio</p>
            </div>
        </div>
    </div>
</section>
@endsection
