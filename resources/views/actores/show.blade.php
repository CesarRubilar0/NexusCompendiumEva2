@extends('layouts.app')

@section('title', 'Detalle de Actor de Interés - Nexus Compendium')

@section('content')
<div class="container py-4">
    <!-- Encabezado del actor con breadcrumb y acciones -->
    <div class="d-flex justify-content-between align-items-start mb-4">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/actores') }}" class="text-decoration-none"><i class="bi bi-arrow-left me-1"></i>Volver a actores</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actor de Interés</li>
                </ol>
            </nav>
            <div class="d-flex align-items-center gap-3">
                <img src="https://placehold.co/150x80?text=Logo" alt="Logo Municipalidad Isla de Maipo" class="img-fluid" style="max-height: 80px;">
                <div>
                    <h1 class="mb-0 fw-bold">Municipalidad Isla de Maipo</h1>
                    <div class="d-flex align-items-center mt-2">
                        <span class="badge bg-primary me-2 px-3 py-2"><i class="bi bi-building me-1"></i>Municipalidad</span>
                        <span class="text-muted"><i class="bi bi-geo-alt me-1"></i>Región Metropolitana, Chile</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex">
            <button class="btn btn-outline-secondary me-2">
                <i class="bi bi-file-earmark-text me-1"></i> Generar Reporte
            </button>
            <button class="btn btn-primary">
                <i class="bi bi-pencil-square me-1"></i> Editar Actor
            </button>
            <div class="dropdown ms-2">
                <button class="btn btn-light" type="button" id="actorActions" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots-vertical"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="actorActions">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-envelope me-2"></i>Enviar mensaje</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-link-45deg me-2"></i>Copiar enlace</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Eliminar</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Información principal del actor -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white">
                    <h5 class="card-title mb-0"><i class="bi bi-info-circle-fill text-primary me-2"></i>Información General</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0">
                            <small class="text-muted d-block">Tipo de organización</small>
                            <p class="mb-0">Municipalidad</p>
                        </li>
                        <li class="list-group-item px-0">
                            <small class="text-muted d-block">Sitio web</small>
                            <a href="https://www.islademaipo.cl" target="_blank" class="text-decoration-none">www.islademaipo.cl</a>
                        </li>
                        <li class="list-group-item px-0">
                            <small class="text-muted d-block">Teléfono</small>
                            <p class="mb-0">+56 2 2819 2000</p>
                        </li>
                        <li class="list-group-item px-0">
                            <small class="text-muted d-block">Dirección</small>
                            <p class="mb-0">Av. Santelices 1010, Isla de Maipo, Región Metropolitana</p>
                        </li>
                        <li class="list-group-item px-0">
                            <small class="text-muted d-block">Área de interés</small>
                            <div>
                                <span class="badge bg-info me-1">Desarrollo Local</span>
                                <span class="badge bg-info me-1">Gobierno Digital</span>
                                <span class="badge bg-info">Servicios Comunitarios</span>
                            </div>
                        </li>
                        <li class="list-group-item px-0">
                            <small class="text-muted d-block">Fecha de registro</small>
                            <p class="mb-0">10 de marzo, 2024</p>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Contactos del actor -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0"><i class="bi bi-person-lines-fill text-primary me-2"></i>Contactos</h5>
                    <button class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-plus-lg me-1"></i>Añadir
                    </button>
                </div>
                <div class="card-body">
                    <div class="contact-item mb-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <h6 class="mb-1">Elías Jiménez</h6>
                            <span class="badge bg-success">Principal</span>
                        </div>
                        <p class="text-muted mb-1">Director de Informática</p>
                        <div class="contact-details small">
                            <div class="mb-1"><i class="bi bi-envelope me-2"></i>elias.jimenez@islademaipo.cl</div>
                            <div><i class="bi bi-telephone me-2"></i>+56 2 2819 2035</div>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="d-flex justify-content-between align-items-start">
                            <h6 class="mb-1">Carolina Fuentes</h6>
                            <span class="badge bg-secondary">Secundario</span>
                        </div>
                        <p class="text-muted mb-1">Jefa de Comunicaciones</p>
                        <div class="contact-details small">
                            <div class="mb-1"><i class="bi bi-envelope me-2"></i>carolina.fuentes@islademaipo.cl</div>
                            <div><i class="bi bi-telephone me-2"></i>+56 2 2819 2042</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Estadísticas del actor -->
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="card-title mb-0"><i class="bi bi-graph-up text-primary me-2"></i>Estadísticas</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="p-3 bg-light rounded text-center">
                                <h2 class="mb-1">2</h2>
                                <p class="mb-0 small text-muted">Proyectos activos</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 bg-light rounded text-center">
                                <h2 class="mb-1">8</h2>
                                <p class="mb-0 small text-muted">Estudiantes</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 bg-light rounded text-center">
                                <h2 class="mb-1">1</h2>
                                <p class="mb-0 small text-muted">Completados</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 bg-light rounded text-center">
                                <h2 class="mb-1">12</h2>
                                <p class="mb-0 small text-muted">Meses activo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Descripción y proyectos del actor -->
        <div class="col-md-8">
            <!-- Descripción -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white">
                    <h5 class="card-title mb-0"><i class="bi bi-file-text-fill text-primary me-2"></i>Acerca de la organización</h5>
                </div>
                <div class="card-body">
                    <p>La Municipalidad de Isla de Maipo es una entidad de gobierno local comprometida con el desarrollo sustentable de la comuna y el bienestar de sus habitantes. Con una rica tradición vitivinícola y agrícola, la municipalidad busca promover el desarrollo económico local mientras preserva su patrimonio cultural y natural.</p>
                    
                    <p>Entre sus principales objetivos se encuentran:</p>
                    <ul>
                        <li>Mejorar los servicios municipales mediante la transformación digital</li>
                        <li>Fomentar la participación ciudadana y la transparencia en la gestión pública</li>
                        <li>Promover el turismo y el desarrollo económico sustentable</li>
                        <li>Conservar el patrimonio natural y cultural de la zona</li>
                    </ul>
                    
                    <p>La municipalidad busca activamente colaborar con instituciones educativas para implementar soluciones tecnológicas que mejoren la calidad de vida de sus habitantes y la eficiencia de los servicios municipales.</p>
                </div>
            </div>

            <!-- Proyectos relacionados -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0"><i class="bi bi-kanban-fill text-primary me-2"></i>Proyectos Relacionados</h5>
                    <button class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-plus-lg me-1"></i>Nuevo Proyecto
                    </button>
                </div>
                <div class="card-body">
                    <!-- Proyecto activo -->
                    <div class="project-item mb-4 border-start border-success border-3 ps-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <div class="d-flex align-items-center mb-1">
                                    <span class="badge bg-success me-2">Activo</span>
                                    <h5 class="mb-0">Plataforma Ciudadana Municipal</h5>
                                </div>
                                <p class="text-muted mb-2">Desarrollo de plataforma web para facilitar trámites y mejorar comunicación entre ciudadanos y municipalidad.</p>
                            </div>
                            <div class="project-stats text-center ms-3">
                                <div class="d-flex flex-column">
                                    <span class="stat-value">75%</span>
                                    <span class="stat-label text-muted">Progreso</span>
                                </div>
                            </div>
                        </div>
                        <div class="project-meta d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-calendar-event text-muted me-1"></i>
                                <small class="text-muted">24/03/2025 - 31/07/2025</small>
                            </div>
                            <div class="d-flex">
                                <span class="badge bg-info me-2"><i class="bi bi-mortarboard me-1"></i>Informática</span>
                                <span class="text-muted small">6 estudiantes</span>
                            </div>
                            <a href="{{ url('/proyectos/4') }}" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-eye me-1"></i>Ver proyecto
                            </a>
                        </div>
                    </div>
                    
                    <!-- Proyecto en planificación -->
                    <div class="project-item mb-4 border-start border-warning border-3 ps-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <div class="d-flex align-items-center mb-1">
                                    <span class="badge bg-warning text-dark me-2">Planificación</span>
                                    <h5 class="mb-0">Portal de Transparencia Activa</h5>
                                </div>
                                <p class="text-muted mb-2">Desarrollo de un portal web para facilitar el acceso de la ciudadanía a la información pública municipal.</p>
                            </div>
                            <div class="project-stats text-center ms-3">
                                <div class="d-flex flex-column">
                                    <span class="stat-value">15%</span>
                                    <span class="stat-label text-muted">Progreso</span>
                                </div>
                            </div>
                        </div>
                        <div class="project-meta d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-calendar-event text-muted me-1"></i>
                                <small class="text-muted">10/06/2025 - 30/09/2025</small>
                            </div>
                            <div class="d-flex">
                                <span class="badge bg-info me-2"><i class="bi bi-mortarboard me-1"></i>Informática</span>
                                <span class="text-muted small">4 estudiantes</span>
                            </div>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-eye me-1"></i>Ver proyecto
                            </a>
                        </div>
                    </div>
                    
                    <!-- Proyecto completado -->
                    <div class="project-item border-start border-secondary border-3 ps-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <div class="d-flex align-items-center mb-1">
                                    <span class="badge bg-secondary me-2">Completado</span>
                                    <h5 class="mb-0">Rediseño Sitio Web Municipal</h5>
                                </div>
                                <p class="text-muted mb-2">Renovación completa del sitio web municipal con enfoque en experiencia de usuario y accesibilidad.</p>
                            </div>
                            <div class="project-stats text-center ms-3">
                                <div class="d-flex flex-column">
                                    <span class="stat-value">100%</span>
                                    <span class="stat-label text-muted">Progreso</span>
                                </div>
                            </div>
                        </div>
                        <div class="project-meta d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-calendar-event text-muted me-1"></i>
                                <small class="text-muted">15/08/2023 - 20/12/2023</small>
                            </div>
                            <div class="d-flex">
                                <span class="badge bg-info me-2"><i class="bi bi-mortarboard me-1"></i>Diseño</span>
                                <span class="text-muted small">5 estudiantes</span>
                            </div>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-eye me-1"></i>Ver proyecto
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Historial de actividad -->
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="card-title mb-0"><i class="bi bi-clock-history text-primary me-2"></i>Historial de Actividad</h5>
                </div>
                <div class="card-body">
                    <div class="timeline">
                        <div class="timeline-item mb-3">
                            <div class="d-flex">
                                <div class="timeline-icon bg-primary text-white rounded-circle p-2 me-3">
                                    <i class="bi bi-plus-circle"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Nuevo proyecto creado</h6>
                                    <p class="mb-0 text-muted small">Se ha registrado el proyecto "Portal de Transparencia Activa"</p>
                                    <small class="text-muted">15 de mayo, 2024 - 14:32</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="timeline-item mb-3">
                            <div class="d-flex">
                                <div class="timeline-icon bg-success text-white rounded-circle p-2 me-3">
                                    <i class="bi bi-check-circle"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Proyecto completado</h6>
                                    <p class="mb-0 text-muted small">El proyecto "Rediseño Sitio Web Municipal" ha sido marcado como completado</p>
                                    <small class="text-muted">20 de diciembre, 2023 - 10:15</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="d-flex">
                                <div class="timeline-icon bg-info text-white rounded-circle p-2 me-3">
                                    <i class="bi bi-person-plus"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1">Nuevo contacto añadido</h6>
                                    <p class="mb-0 text-muted small">Se ha añadido a Carolina Fuentes como contacto secundario</p>
                                    <small class="text-muted">5 de noviembre, 2023 - 09:47</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    /* Estilos para la vista de detalle del actor */
    .list-group-item {
        border: none;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        padding: 1rem 0;
    }
    
    .list-group-item:last-child {
        border-bottom: none;
    }
    
    .contact-item {
        padding: 0.75rem;
        border-radius: 0.5rem;
        transition: all 0.2s ease;
    }
    
    .contact-item:hover {
        background-color: rgba(0, 0, 0, 0.03);
    }
    
    .project-item {
        padding: 1rem;
        border-radius: 0.5rem;
        background-color: #ffffff;
        transition: all 0.2s ease;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.04);
        margin-bottom: 1rem;
    }
    
    .project-item:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
        transform: translateY(-2px);
    }
    
    .stat-value {
        font-size: 1.5rem;
        font-weight: 600;
        color: #0A2342;
    }
    
    .stat-label {
        font-size: 0.75rem;
    }
    
    .timeline {
        position: relative;
        padding-left: 10px;
    }
    
    .timeline-icon {
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    /* Colores del sistema */
    .bg-primary {
        background-color: #0A2342 !important;
    }
    
    .text-primary {
        color: #0A2342 !important;
    }
    
    .bg-success {
        background-color: #3E5902 !important;
    }
    
    .text-success {
        color: #3E5902 !important;
    }
    
    .bg-info {
        background-color: #4C86A8 !important;
    }
    
    .bg-warning {
        background-color: #D9A852 !important;
    }
    
    .btn-primary {
        background-color: #3E5902;
        border-color: #3E5902;
    }
    
    .btn-primary:hover {
        background-color: #2A3F01;
        border-color: #2A3F01;
    }
    
    .btn-outline-primary {
        color: #0A2342;
        border-color: #0A2342;
    }
    
    .btn-outline-primary:hover {
        background-color: #0A2342;
        border-color: #0A2342;
        color: white;
    }
</style>
@endsection
