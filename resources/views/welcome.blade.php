@extends('layouts.app')

@section('title', 'Contacto - UtreBytes')

@section('content')
        <!-- Hero Section -->
        <section class="hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('images/hero_background.jpg') }}');">
            <div class="hero-content">
                <h1>Bienvenido a UtreBytes</h1>
                <p>Unidad tecnológica del GRUPO LRP 24 HOLDING S.L. 
                <br> 
                Tecnología de vanguardia al servicio de tus necesidades.   
                </p>
                <div class="hero-buttons">
                    <a href="{{ route('caracteristicas') }}" class="btn-primary-white">Consultar servicios</a>
                    <a href="{{ route('utrebytes') }}" class="btn-secondary-white">Conoce Más</a>
                </div>
            </div>
            <div class="hero-stats">
                <div class="stat">
                    <span class="stat-number">10+</span>
                    <span class="stat-label">Empresas a disposición</span>
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
                        <div class="feature-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>Desarrollo de Software a Medida</h3>
                        <p>Aplicaciones web y móviles, módulos ERP personalizados, integración API con bancos,
                        aseguradoras y plataformas logísticas. Desarrollo ágil y con pruebas automatizadas.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h3>Inteligencia Artificial y Modelos Generativos</h3>
                        <p>Entrenamiento, fine-tuning y despliegue de modelos (GPT-5, Claude, Llama) adaptados a datos del
                        cliente. Soluciones RAG privadas y sistemas multimodales (texto, imagen, voz).</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-toolbox"></i>
                        </div>
                        <h3>SI-GO! — Plataforma para reparaciones y aseguradoras</h3>
                        <p>Gestión completa de siniestros: recepción, clasificación, asignación automática, generación de
                        presupuestos, comunicación omnicanal con clientes y aseguradoras</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h3>ERP Inteligente</h3>
                        <p>ERP especializado en reparaciones y servicios con módulos de planificación, órdenes de trabajo,
                        inventario, gestión de técnicos, facturación y reporting automático.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h3>Automatización de Procesos y Agentes Autónomos</h3>
                        <p>Robots de software y agentes que ejecutan tareas repetitivas (procesamiento de documentos,
                        etiquetado, conciliaciones) para reducir la intervención humana.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-shield-halved"></i>
                        </div>
                        <h3>Ciberseguridad y Cumplimiento</h3>
                        <p>Auditorías, pentesting, monitorización continua, implementación de políticas ISO 27001 y protección
                        de infraestructuras críticas.</p>
                    </div>
                    <div class="feature-card hidden">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Cloud, DevOps y Escalabilidad</h3>
                        <p>Migración a cloud, contenedores Docker, pipelines CI/CD, infraestructura como código y
                        monitorización escalable.</p>
                    </div>
                    <div class="feature-card hidden">
                        <div class="feature-icon">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <h3>Business Intelligence y Analítica</h3>
                        <p>Cuadros de mando Power BI, pipelines ETL, modelos predictivos para optimizar logística,
                        mantenimiento y ventas.</p>
                    </div>
                    <div class="feature-card hidden">
                        <div class="feature-icon">
                            <i class="fas fa-users-gear"></i>
                        </div>
                        <h3>Formación y Captación de Talento (CUCO)</h3>
                        <p>Programas formativos técnicos y prácticos, itinerarios personalizados, certificaciones y transferencia
                        de talento al grupo.</p>
                    </div>
                </div>
                <div class="features-actions">
                    <button class="btn-show-more" id="showMoreBtn">
                        Ver más características
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta" id="cta">
            <div class="container">
                <h2>¿Listo para transformar tu negocio?</h2>
                <p>Únete a decenas de empresas que ya confían en nuestras soluciones. Contacta con nosotros hoy mismo.</p>
                <a href="{{ route('contacto') }}" class="cta-button">Contacta</a>
            </div>
        </section>
@endsection