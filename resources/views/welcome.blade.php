@extends('layouts.app')

@section('title', 'Vinculación con el Medio - Instituto Profesional San Sebastián')

@section('content')
<!-- Hero Section -->
<div class="hero-section">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6 fade-in-left">
                <h1 class="display-4 fw-bold">Vinculación con el Medio</h1>
                <h2 class="h3 mb-4">Construyamos juntos soluciones de impacto real</h2>
                <p class="lead mb-4">Conectamos las necesidades de su organización con el talento y conocimiento de nuestra comunidad académica para crear soluciones innovadoras con beneficio mutuo.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <a href="{{ url('/proyectos/crear') }}" class="btn btn-primary btn-lg px-4 me-md-2 pulse-animation">
                        <i class="bi bi-plus-circle me-2"></i>Proponer un Proyecto
                    </a>
                    <a href="{{ url('/proyectos') }}" class="btn btn-outline-secondary btn-lg px-4">
                        <i class="bi bi-collection me-2"></i>Ver Proyectos Activos
                    </a>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block text-center fade-in-right">
                <img src="{{ asset('images/collaboration.svg') }}" alt="Colaboración academia-empresa" class="img-fluid rounded-3 w-75 floating-animation">
            </div>
        </div>
    </div>
</div>

<!-- ¿Qué es VCM? Section -->
<div class="features-section py-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 text-center slide-in-bottom">
                <div class="section-icon mb-3"><i class="bi bi-question-circle-fill"></i></div>
                <h2 class="fw-bold">¿Qué es la Vinculación con el Medio?</h2>
                <p class="lead">Un puente bidireccional entre academia y sociedad con beneficios para todos los involucrados</p>
            </div>
        </div>
        
        <div class="row mb-5">
            <div class="col-md-6 fade-in-left">
                <p>La <strong>Vinculación con el Medio (VCM)</strong> es un pilar estratégico para el Instituto Profesional San Sebastián que busca establecer relaciones de colaboración mutua entre nuestra comunidad académica y el entorno social, productivo y de servicios.</p>
                
                <p>A través de la VCM, conectamos los desafíos reales de organizaciones como la suya con las capacidades técnicas y el conocimiento de nuestros estudiantes y docentes, generando soluciones prácticas y de valor con un enfoque bidireccional donde:</p>
                
                <ul class="feature-list">
                    <li><i class="bi bi-building text-primary me-2"></i><strong>Su organización aporta</strong> problemas reales, experiencia del sector y retroalimentación profesional.</li>
                    <li><i class="bi bi-mortarboard text-primary me-2"></i><strong>Nuestra institución entrega</strong> soluciones innovadoras, miradas frescas y conocimiento técnico actualizado.</li>
                </ul>
            </div>
            <div class="col-md-6 fade-in-right">
                <div class="card h-100 border-hover-animation">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4"><i class="bi bi-stars text-warning me-2"></i>Beneficios para su Organización</h3>
                        <ul class="feature-list">
                            <li><i class="bi bi-bullseye text-primary me-2"></i><strong>Soluciones a Medida:</strong> Acceso a desarrollos tecnológicos y consultoría adaptados a sus necesidades específicas</li>
                            <li><i class="bi bi-lightbulb text-primary me-2"></i><strong>Innovación Externa:</strong> Incorporación de nuevas perspectivas y enfoques frescos a sus desafíos</li>
                            <li><i class="bi bi-heart text-primary me-2"></i><strong>Responsabilidad Social:</strong> Contribución directa a la formación de los futuros profesionales del país</li>
                            <li><i class="bi bi-person-check text-primary me-2"></i><strong>Reclutamiento Anticipado:</strong> Identificación de talentos con potencial para futuras contrataciones</li>
                            <li><i class="bi bi-graph-up-arrow text-primary me-2"></i><strong>Costo-Efectividad:</strong> Soluciones de calidad con una inversión significativamente menor a la del mercado</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Proceso VCM Section -->
<div class="process-section py-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 text-center slide-in-bottom">
                <div class="section-icon mb-3"><i class="bi bi-gear-wide-connected"></i></div>
                <h2 class="fw-bold">¿Cómo funciona el proceso?</h2>
                <p class="lead">Un flujo estructurado para transformar necesidades en soluciones concretas</p>
            </div>
        </div>
        
        <div class="row timeline fade-in-up">
            <div class="col-md-3">
                <div class="process-step hover-lift">
                    <div class="step-number">1</div>
                    <h4><i class="bi bi-file-earmark-text me-2 text-primary"></i>Propuesta</h4>
                    <p>Su organización presenta un desafío o necesidad real a través de nuestra plataforma.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="process-step hover-lift">
                    <div class="step-number">2</div>
                    <h4><i class="bi bi-check-circle me-2 text-primary"></i>Validación</h4>
                    <p>Nuestro equipo académico evalúa la viabilidad y define el alcance junto a ustedes.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="process-step hover-lift">
                    <div class="step-number">3</div>
                    <h4><i class="bi bi-code-square me-2 text-primary"></i>Desarrollo</h4>
                    <p>Equipos de estudiantes trabajan en la solución con supervisión docente y su retroalimentación.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="process-step hover-lift">
                    <div class="step-number">4</div>
                    <h4><i class="bi bi-box-seam me-2 text-primary"></i>Entrega</h4>
                    <p>Presentación de resultados, transferencia de la solución y evaluación del impacto.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tipos de Proyectos Section -->
<div class="innovation-section py-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 text-center slide-in-bottom">
                <div class="section-icon mb-3"><i class="bi bi-folder2-open"></i></div>
                <h2 class="fw-bold">Tipos de Proyectos VCM</h2>
                <p class="lead">Diversas modalidades adaptadas a sus necesidades</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4 fade-in-left">
                <div class="feature-card h-100 hover-shadow">
                    <div class="card-icon text-center mb-3">
                        <i class="bi bi-laptop text-primary"></i>
                    </div>
                    <h3 class="text-center">Soluciones Tecnológicas</h3>
                    <p>Desarrollo de software, aplicaciones, sistemas o plataformas digitales que resuelvan problemas específicos de su organización.</p>
                    <p class="fw-bold"><i class="bi bi-list-check me-2"></i>Ejemplos:</p>
                    <ul>
                        <li><i class="bi bi-check2 text-success me-2"></i>Sistemas de gestión a medida</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Aplicaciones móviles</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Plataformas web</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Integraciones de sistemas</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-4 fade-in-up">
                <div class="feature-card h-100 hover-shadow">
                    <div class="card-icon text-center mb-3">
                        <i class="bi bi-bar-chart-line text-primary"></i>
                    </div>
                    <h3 class="text-center">Asesorías Técnicas</h3>
                    <p>Consultoría especializada en áreas técnicas donde nuestros estudiantes avanzados y docentes pueden aportar conocimiento actualizado.</p>
                    <p class="fw-bold"><i class="bi bi-list-check me-2"></i>Ejemplos:</p>
                    <ul>
                        <li><i class="bi bi-check2 text-success me-2"></i>Diagnósticos tecnológicos</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Optimización de procesos</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Estudios de factibilidad</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Planes de transformación digital</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-4 fade-in-right">
                <div class="feature-card h-100 hover-shadow">
                    <div class="card-icon text-center mb-3">
                        <i class="bi bi-mortarboard text-primary"></i>
                    </div>
                    <h3 class="text-center">Capacitación y Difusión</h3>
                    <p>Actividades formativas dirigidas a colaboradores de su organización o a sus comunidades de interés.</p>
                    <p class="fw-bold"><i class="bi bi-list-check me-2"></i>Ejemplos:</p>
                    <ul>
                        <li><i class="bi bi-check2 text-success me-2"></i>Talleres técnicos</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Clínicas tecnológicas</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Seminarios especializados</li>
                        <li><i class="bi bi-check2 text-success me-2"></i>Materiales educativos digitales</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Casos de Éxito -->
<div class="features-section py-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 text-center slide-in-bottom">
                <div class="section-icon mb-3"><i class="bi bi-award"></i></div>
                <h2 class="fw-bold">Historias de Impacto</h2>
                <p class="lead">Organizaciones que ya han aprovechado el valor de la Vinculación con el Medio</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 fade-in-left">
                <div class="card mb-3 testimonial-card">
                    <div class="card-body">
                        <div class="testimonial-icon mb-3 text-warning">
                            <i class="bi bi-quote"></i>
                        </div>
                        <h5 class="card-title"><i class="bi bi-building-fill text-primary me-2"></i>Fundación Apoyo Comunitario</h5>
                        <p class="card-text">"Gracias al proyecto desarrollado con el IP San Sebastián, ahora contamos con un sistema que nos permite gestionar eficientemente a nuestros voluntarios y los recursos donados, multiplicando nuestro impacto en la comunidad."</p>
                        <p class="card-text"><small class="text-muted"><i class="bi bi-person-circle me-2"></i>María González, Directora Ejecutiva</small></p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 fade-in-right">
                <div class="card mb-3 testimonial-card">
                    <div class="card-body">
                        <div class="testimonial-icon mb-3 text-warning">
                            <i class="bi bi-quote"></i>
                        </div>
                        <h5 class="card-title"><i class="bi bi-shop text-primary me-2"></i>MiPyme Tecnológica</h5>
                        <p class="card-text">"El equipo de estudiantes nos sorprendió con su profesionalismo y capacidad técnica. Implementaron una solución que nos permitió automatizar procesos críticos, ahorrando tiempo y recursos."</p>
                        <p class="card-text"><small class="text-muted"><i class="bi bi-person-circle me-2"></i>Juan Pérez, Gerente de Operaciones</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA Section -->
<div class="cta-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center fade-in-up">
                <div class="cta-icon mb-4">
                    <i class="bi bi-rocket-takeoff"></i>
                </div>
                <h2 class="fw-bold">¿Listo para transformar un desafío en oportunidad?</h2>
                <p class="lead mb-4">Su organización puede ser parte de esta red de colaboración y beneficiarse de soluciones innovadoras mientras contribuye a la formación de futuros profesionales</p>
                <a href="{{ url('/proyectos/crear') }}" class="btn btn-primary btn-lg px-4 me-md-2 pulse-animation">
                    <i class="bi bi-plus-circle me-2"></i>Proponer un Proyecto
                </a>
                <a href="{{ url('/login') }}" class="btn btn-outline-light btn-lg px-4">
                    <i class="bi bi-box-arrow-in-right me-2"></i>Iniciar Sesión
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    // Script para activar animaciones al hacer scroll
    document.addEventListener('DOMContentLoaded', function() {
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        document.querySelectorAll('.fade-in-left, .fade-in-right, .fade-in-up, .slide-in-bottom').forEach(el => {
            observer.observe(el);
        });
    });
</script>
@endsection

@section('styles')
<style>
    /* Estilos para iconos de sección */
    .section-icon {
        font-size: 3rem;
        color: #0A2342;
        margin-bottom: 1rem;
    }
    
    .card-icon {
        font-size: 3rem;
        color: #3E5902;
        margin-bottom: 1rem;
    }
    
    .cta-icon {
        font-size: 4rem;
        color: #D9A852;
        margin-bottom: 1.5rem;
    }
    
    .testimonial-icon {
        font-size: 2rem;
        color: #D9A852;
        margin-bottom: 0.5rem;
    }
    
    /* Animaciones y efectos */
    .hover-shadow {
        transition: all 0.3s ease;
    }
    
    .hover-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
    
    .hover-lift {
        transition: transform 0.3s ease;
    }
    
    .hover-lift:hover {
        transform: translateY(-5px);
    }
    
    .border-hover-animation {
        position: relative;
        overflow: hidden;
    }
    
    .border-hover-animation::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 2px solid transparent;
        transition: border-color 0.3s ease;
    }
    
    .border-hover-animation:hover::before {
        border-color: #D9A852;
    }
    
    .testimonial-card {
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .testimonial-card:hover {
        transform: scale(1.02);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }
    
    /* Animaciones al scroll */
    .fade-in-left, .fade-in-right, .fade-in-up, .slide-in-bottom {
        opacity: 0;
        transition: opacity 0.8s ease, transform 0.8s ease;
    }
    
    .fade-in-left {
        transform: translateX(-50px);
    }
    
    .fade-in-right {
        transform: translateX(50px);
    }
    
    .fade-in-up {
        transform: translateY(50px);
    }
    
    .slide-in-bottom {
        transform: translateY(50px);
    }
    
    .fade-in-left.animate, 
    .fade-in-right.animate, 
    .fade-in-up.animate, 
    .slide-in-bottom.animate {
        opacity: 1;
        transform: translate(0);
    }
    
    /* Animación de pulsación para botones CTA */
    .pulse-animation {
        animation: pulse 2s infinite;
    }
    
    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(62, 89, 2, 0.7);
        }
        70% {
            box-shadow: 0 0 0 10px rgba(62, 89, 2, 0);
        }
        100% {
            box-shadow: 0 0 0 0 rgba(62, 89, 2, 0);
        }
    }
    
    /* Animación flotante para imágenes */
    .floating-animation {
        animation: floating 5s ease-in-out infinite;
    }
    
    @keyframes floating {
        0% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-15px);
        }
        100% {
            transform: translateY(0px);
        }
    }
</style>
@endsection
