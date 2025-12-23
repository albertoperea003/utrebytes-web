@extends('layouts.app')

@section('title', 'Características - UtreBytes')

@section('content')
<div class="characteristics-container">
    <!-- Header -->
    <section class="characteristics-header">
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
                    <div class="characteristic-card__icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="characteristic-card__content">
                        <h3>Desarrollo de Software a Medida</h3>
                        <p class="characteristic-card__description">
                            Créamos aplicaciones web y móviles personalizadas según tus necesidades específicas.
                        </p>
                        <ul class="characteristic-card__features">
                            <li><i class="fas fa-check"></i> Aplicaciones web de alto rendimiento</li>
                            <li><i class="fas fa-check"></i> Apps móviles iOS y Android</li>
                            <li><i class="fas fa-check"></i> Módulos ERP personalizados</li>
                            <li><i class="fas fa-check"></i> Integración API con terceros</li>
                            <li><i class="fas fa-check"></i> Desarrollo ágil y metodologías modernas</li>
                            <li><i class="fas fa-check"></i> Testing automatizado</li>
                        </ul>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Ver Producto</a>
                            <a href="{{ route('contacto') }}" class="btn-secondary">Consultar Disponibilidad</a>
                        </div>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="characteristic-card">
                    <div class="characteristic-card__icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <div class="characteristic-card__content">
                        <h3>Inteligencia Artificial y Modelos Generativos</h3>
                        <p class="characteristic-card__description">
                            Potencia tu negocio con soluciones de IA de última generación.
                        </p>
                        <ul class="characteristic-card__features">
                            <li><i class="fas fa-check"></i> Entrenamiento de modelos personalizados</li>
                            <li><i class="fas fa-check"></i> Fine-tuning con tus datos</li>
                            <li><i class="fas fa-check"></i> Modelos GPT-5, Claude, Llama</li>
                            <li><i class="fas fa-check"></i> Soluciones RAG privadas</li>
                            <li><i class="fas fa-check"></i> Sistemas multimodales (texto, imagen, voz)</li>
                            <li><i class="fas fa-check"></i> Automatización inteligente</li>
                        </ul>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Ver Producto</a>
                            <a href="{{ route('contacto') }}" class="btn-secondary">Consultar Disponibilidad</a>
                        </div>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="characteristic-card">
                    <div class="characteristic-card__icon">
                        <i class="fas fa-toolbox"></i>
                    </div>
                    <div class="characteristic-card__content">
                        <h3>SI-GO! — Plataforma para Reparaciones</h3>
                        <p class="characteristic-card__description">
                            Solución completa para gestión de siniestros y reparaciones.
                        </p>
                        <ul class="characteristic-card__features">
                            <li><i class="fas fa-check"></i> Recepción automatizada de siniestros</li>
                            <li><i class="fas fa-check"></i> Clasificación inteligente</li>
                            <li><i class="fas fa-check"></i> Asignación automática de técnicos</li>
                            <li><i class="fas fa-check"></i> Generación de presupuestos</li>
                            <li><i class="fas fa-check"></i> Comunicación omnicanal</li>
                            <li><i class="fas fa-check"></i> Reportes en tiempo real</li>
                        </ul>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Ver Producto</a>
                            <a href="{{ route('contacto') }}" class="btn-secondary">Consultar Disponibilidad</a>
                        </div>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="characteristic-card">
                    <div class="characteristic-card__icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <div class="characteristic-card__content">
                        <h3>ERP Inteligente</h3>
                        <p class="characteristic-card__description">
                            Sistema ERP especializado para optimizar tus operaciones.
                        </p>
                        <ul class="characteristic-card__features">
                            <li><i class="fas fa-check"></i> Gestión de inventario</li>
                            <li><i class="fas fa-check"></i> Planificación de recursos</li>
                            <li><i class="fas fa-check"></i> Órdenes de trabajo</li>
                            <li><i class="fas fa-check"></i> Control de técnicos</li>
                            <li><i class="fas fa-check"></i> Facturación automática</li>
                            <li><i class="fas fa-check"></i> Reporting avanzado</li>
                        </ul>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Ver Producto</a>
                            <a href="{{ route('contacto') }}" class="btn-secondary">Consultar Disponibilidad</a>
                        </div>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="characteristic-card">
                    <div class="characteristic-card__icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <div class="characteristic-card__content">
                        <h3>Automatización de Procesos</h3>
                        <p class="characteristic-card__description">
                            Automatiza tareas repetitivas con agentes inteligentes.
                        </p>
                        <ul class="characteristic-card__features">
                            <li><i class="fas fa-check"></i> Robots de software RPA</li>
                            <li><i class="fas fa-check"></i> Agentes autónomos</li>
                            <li><i class="fas fa-check"></i> Procesamiento de documentos</li>
                            <li><i class="fas fa-check"></i> Etiquetado automático</li>
                            <li><i class="fas fa-check"></i> Conciliaciones automáticas</li>
                            <li><i class="fas fa-check"></i> Reducción de intervención humana</li>
                        </ul>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Ver Producto</a>
                            <a href="{{ route('contacto') }}" class="btn-secondary">Consultar Disponibilidad</a>
                        </div>
                    </div>
                </div>

                <!-- Feature 6 -->
                <div class="characteristic-card">
                    <div class="characteristic-card__icon">
                        <i class="fas fa-shield-halved"></i>
                    </div>
                    <div class="characteristic-card__content">
                        <h3>Ciberseguridad y Cumplimiento</h3>
                        <p class="characteristic-card__description">
                            Protege tu infraestructura con estándares de seguridad internacionales.
                        </p>
                        <ul class="characteristic-card__features">
                            <li><i class="fas fa-check"></i> Auditorías de seguridad</li>
                            <li><i class="fas fa-check"></i> Pentesting profesional</li>
                            <li><i class="fas fa-check"></i> Monitorización continua</li>
                            <li><i class="fas fa-check"></i> ISO 27001 certificado</li>
                            <li><i class="fas fa-check"></i> Protección de datos GDPR</li>
                            <li><i class="fas fa-check"></i> Infraestructuras críticas seguras</li>
                        </ul>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Ver Producto</a>
                            <a href="{{ route('contacto') }}" class="btn-secondary">Consultar Disponibilidad</a>
                        </div>
                    </div>
                </div>

                <!-- Feature 7 -->
                <div class="characteristic-card">
                    <div class="characteristic-card__icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="characteristic-card__content">
                        <h3>Business Intelligence y Analytics</h3>
                        <p class="characteristic-card__description">
                            Toma decisiones basadas en datos con nuestros dashboards inteligentes.
                        </p>
                        <ul class="characteristic-card__features">
                            <li><i class="fas fa-check"></i> Dashboards personalizados</li>
                            <li><i class="fas fa-check"></i> Análisis predictivo</li>
                            <li><i class="fas fa-check"></i> Visualización de datos</li>
                            <li><i class="fas fa-check"></i> KPIs en tiempo real</li>
                            <li><i class="fas fa-check"></i> Reportes inteligentes</li>
                            <li><i class="fas fa-check"></i> Machine Learning aplicado</li>
                        </ul>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Ver Producto</a>
                            <a href="{{ route('contacto') }}" class="btn-secondary">Consultar Disponibilidad</a>
                        </div>
                    </div>
                </div>

                <!-- Feature 8 -->
                <div class="characteristic-card">
                    <div class="characteristic-card__icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <div class="characteristic-card__content">
                        <h3>Infraestructura Cloud y DevOps</h3>
                        <p class="characteristic-card__description">
                            Despliegues modernos con escalabilidad y confiabilidad garantizadas.
                        </p>
                        <ul class="characteristic-card__features">
                            <li><i class="fas fa-check"></i> AWS, Azure, Google Cloud</li>
                            <li><i class="fas fa-check"></i> CI/CD pipelines automáticos</li>
                            <li><i class="fas fa-check"></i> Containerización Docker</li>
                            <li><i class="fas fa-check"></i> Kubernetes orquestación</li>
                            <li><i class="fas fa-check"></i> Backup y disaster recovery</li>
                            <li><i class="fas fa-check"></i> 99.9% uptime SLA</li>
                        </ul>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Ver Producto</a>
                            <a href="{{ route('contacto') }}" class="btn-secondary">Consultar Disponibilidad</a>
                        </div>
                    </div>
                </div>

                <!-- Feature 9 -->
                <div class="characteristic-card">
                    <div class="characteristic-card__icon">
                        <i class="fas fa-users-gear"></i>
                    </div>
                    <div class="characteristic-card__content">
                        <h3>Consultoría Tecnológica</h3>
                        <p class="characteristic-card__description">
                            Guía experta para tu transformación digital y estrategia tecnológica.
                        </p>
                        <ul class="characteristic-card__features">
                            <li><i class="fas fa-check"></i> Diagnóstico tecnológico</li>
                            <li><i class="fas fa-check"></i> Roadmaps personalizados</li>
                            <li><i class="fas fa-check"></i> Arquitectura de sistemas</li>
                            <li><i class="fas fa-check"></i> Optimización de procesos</li>
                            <li><i class="fas fa-check"></i> Capacitación de equipos</li>
                            <li><i class="fas fa-check"></i> Gestión del cambio</li>
                        </ul>
                        <div class="characteristic-card__actions">
                            <a href="{{ route('contacto') }}" class="btn-primary">Ver Producto</a>
                            <a href="{{ route('contacto') }}" class="btn-secondary">Consultar Disponibilidad</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="characteristics-cta">
        <div class="container">
            <h2>¿Listo para transformar tu negocio?</h2>
            <p>Descubre cómo nuestras soluciones pueden mejorar tu operación</p>
            <a href="{{ route('contacto') }}" class="cta-button">Solicita una Consulta Gratuita</a>
        </div>
    </section>
</div>
@endsection
