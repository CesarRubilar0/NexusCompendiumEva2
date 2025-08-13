@extends('layouts.app')

@section('title', 'Detalle del Proyecto - Nexus Compendium')

@section('content')
<div class="container-fluid py-4">
    <!-- Encabezado del proyecto con breadcrumb y acciones -->
    <div class="d-flex justify-content-between align-items-start mb-4">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/proyectos') }}" class="text-decoration-none"><i class="bi bi-arrow-left me-1"></i>Volver a proyectos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Proyecto #{{ $id }}</li>
                </ol>
            </nav>
            <div class="d-flex align-items-center">
                <h1 class="mb-0 fw-bold">Proyecto de Salud Comunitaria</h1>
                <span class="badge bg-success ms-3 px-3 py-2"><i class="bi bi-play-fill me-1"></i>Activo</span>
                <span class="badge bg-info ms-2 px-3 py-2"><i class="bi bi-mortarboard me-1"></i>Informática</span>
            </div>
        </div>
        <div class="d-flex">
            <button class="btn btn-outline-secondary me-2">
                <i class="bi bi-file-earmark-text me-1"></i> Generar Reporte
            </button>
            <a href="{{ url('/proyectos/1/editar') }}" class="btn btn-primary">
                <i class="bi bi-pencil-square me-1"></i> Editar Proyecto
            </a>
            <div class="dropdown ms-2">
                <button class="btn btn-light" type="button" id="projectActions" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots-vertical"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="projectActions">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-archive me-2"></i>Archivar</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-arrow-repeat me-2"></i>Duplicar</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Eliminar</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Resumen rápido del proyecto -->
    <div class="row mb-4">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="mb-3">
                        <small class="text-muted d-block">Descripción del proyecto</small>
                        <p class="mb-0">Este proyecto tiene como objetivo implementar un programa integral de salud preventiva en comunidades rurales de la región. El enfoque principal es mejorar el acceso a servicios de salud básicos y promover hábitos saludables entre la población.</p>
                    </div>
                    <div class="progress mb-2" style="height: 10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <small class="text-muted">Progreso: 65%</small>
                        <small class="text-muted">Tiempo restante: 45 días</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row row-cols-1 row-cols-md-2 g-3 h-100">
                <div class="col">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body d-flex align-items-center">
                            <div class="rounded-circle bg-primary bg-opacity-10 p-3 me-3">
                                <i class="bi bi-people text-primary fs-4"></i>
                            </div>
                            <div>
                                <small class="text-muted d-block">Equipo</small>
                                <h5 class="mb-0 fw-semibold">5 personas</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body d-flex align-items-center">
                            <div class="rounded-circle bg-warning bg-opacity-10 p-3 me-3">
                                <i class="bi bi-check2-all text-warning fs-4"></i>
                            </div>
                            <div>
                                <small class="text-muted d-block">Tareas</small>
                                <h5 class="mb-0 fw-semibold">18/28</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body d-flex align-items-center">
                            <div class="rounded-circle bg-info bg-opacity-10 p-3 me-3">
                                <i class="bi bi-calendar-event text-info fs-4"></i>
                            </div>
                            <div>
                                <small class="text-muted d-block">Inicio</small>
                                <h6 class="mb-0 fw-semibold">15/03/2025</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body d-flex align-items-center">
                            <div class="rounded-circle bg-danger bg-opacity-10 p-3 me-3">
                                <i class="bi bi-calendar-check text-danger fs-4"></i>
                            </div>
                            <div>
                                <small class="text-muted d-block">Finalización</small>
                                <h6 class="mb-0 fw-semibold">15/11/2025</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pestañas de navegación -->
    <ul class="nav nav-tabs mb-4" id="projectTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="true">
                <i class="bi bi-info-circle me-1"></i> Visión General
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tasks-tab" data-bs-toggle="tab" data-bs-target="#tasks" type="button" role="tab" aria-controls="tasks" aria-selected="false">
                <i class="bi bi-list-check me-1"></i> Tareas
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="team-tab" data-bs-toggle="tab" data-bs-target="#team" type="button" role="tab" aria-controls="team" aria-selected="false">
                <i class="bi bi-people me-1"></i> Equipo
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="user-stories-tab" data-bs-toggle="tab" data-bs-target="#user-stories" type="button" role="tab" aria-controls="user-stories" aria-selected="false">
                <i class="bi bi-person-lines-fill me-1"></i> Historias de Usuario
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="documents-tab" data-bs-toggle="tab" data-bs-target="#documents" type="button" role="tab" aria-controls="documents" aria-selected="false">
                <i class="bi bi-file-earmark me-1"></i> Documentos
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="communications-tab" data-bs-toggle="tab" data-bs-target="#communications" type="button" role="tab" aria-controls="communications" aria-selected="false">
                <i class="bi bi-chat-left-text me-1"></i> Comunicaciones
            </button>
        </li>
    </ul>

    <!-- Contenido de las pestañas -->
    <div class="tab-content" id="projectTabsContent">
        <!-- Pestaña: Visión general -->
        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
            <div class="row">
                <div class="col-md-8">
                    <!-- Detalles del proyecto -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-header bg-white border-bottom-0 pb-0">
                            <h5 class="card-title mb-0"><i class="bi bi-info-circle-fill text-primary me-2"></i>Detalles del proyecto</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <h6 class="text-muted mb-3">Información general</h6>
                                    <div class="mb-2">
                                        <small class="text-muted d-block">Nombre del proyecto</small>
                                        <p class="mb-0 fw-medium">Proyecto de Salud Comunitaria</p>
                                    </div>
                                    <div class="mb-2">
                                        <small class="text-muted d-block">Área académica</small>
                                        <p class="mb-0 fw-medium">Informática</p>
                                    </div>
                                    <div class="mb-2">
                                        <small class="text-muted d-block">ID del proyecto</small>
                                        <p class="mb-0 fw-medium">PRJ-{{ $id }}</p>
                                    </div>
                                    <div class="mb-2">
                                        <small class="text-muted d-block">Estado</small>
                                        <div><span class="badge bg-success">Activo</span></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="text-muted mb-3">Stakeholders</h6>
                                    <div class="mb-2">
                                        <small class="text-muted d-block">Responsable</small>
                                        <div class="d-flex align-items-center">
                                            <span class="avatar-circle me-2">MG</span>
                                            <div>
                                                <p class="mb-0 fw-medium">Dra. María González</p>
                                                <small class="text-muted">maria.gonzalez@email.com</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <small class="text-muted d-block">Organización</small>
                                        <p class="mb-0 fw-medium">Centro de Salud Rural</p>
                                    </div>
                                </div>
                            </div>
                            
                            <h6 class="text-muted mb-3">Objetivos principales</h6>
                            <div class="mb-3">
                                <ul class="objectives-list">
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Establecer puntos de atención básica en salud</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Capacitar a promotores de salud comunitarios</li>
                                    <li><i class="bi bi-circle text-muted me-2"></i>Implementar programas de educación nutricional</li>
                                    <li><i class="bi bi-circle text-muted me-2"></i>Desarrollar campañas de prevención de enfermedades</li>
                                </ul>
                            </div>
                            
                            <h6 class="text-muted mb-3">Descripción detallada</h6>
                            <p>Este proyecto tiene como objetivo implementar un programa integral de salud preventiva en comunidades rurales de la región. El enfoque principal es mejorar el acceso a servicios de salud básicos y promover hábitos saludables entre la población.</p>
                            <p>A través de la formación de promotores de salud locales y la implementación de puntos de atención básica, se busca reducir la incidencia de enfermedades prevenibles y mejorar los indicadores de salud comunitaria.</p>
                        </div>
                    </div>
                    
                    <!-- Hitos del proyecto -->
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white border-bottom-0 pb-0">
                            <h5 class="card-title mb-0"><i class="bi bi-flag-fill text-primary me-2"></i>Hitos del proyecto</h5>
                        </div>
                        <div class="card-body">
                            <div class="timeline">
                                <div class="timeline-item completed">
                                    <div class="timeline-marker"></div>
                                    <div class="timeline-content">
                                        <h6 class="mb-1">Diagnóstico comunitario</h6>
                                        <p class="text-muted small mb-0">15/03/2025 - 15/04/2025</p>
                                        <p class="small mb-0">Evaluación inicial de necesidades en salud de la comunidad.</p>
                                    </div>
                                </div>
                                <div class="timeline-item completed">
                                    <div class="timeline-marker"></div>
                                    <div class="timeline-content">
                                        <h6 class="mb-1">Capacitación de promotores</h6>
                                        <p class="text-muted small mb-0">16/04/2025 - 31/05/2025</p>
                                        <p class="small mb-0">Formación de líderes comunitarios en temas básicos de salud.</p>
                                    </div>
                                </div>
                                <div class="timeline-item current">
                                    <div class="timeline-marker"></div>
                                    <div class="timeline-content">
                                        <h6 class="mb-1">Implementación de servicios</h6>
                                        <p class="text-muted small mb-0">01/06/2025 - 31/08/2025</p>
                                        <p class="small mb-0">Puesta en marcha de puntos de atención y programas educativos.</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker"></div>
                                    <div class="timeline-content">
                                        <h6 class="mb-1">Evaluación de resultados</h6>
                                        <p class="text-muted small mb-0">01/09/2025 - 15/11/2025</p>
                                        <p class="small mb-0">Medición de impacto y elaboración de informe final.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <!-- Miembros del equipo -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-header bg-white border-bottom-0 pb-0 d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0"><i class="bi bi-people-fill text-primary me-2"></i>Equipo</h5>
                            <a href="#team" data-bs-toggle="tab" data-bs-target="#team" class="text-decoration-none small">Ver todos</a>
                        </div>
                        <div class="card-body">
                            <div class="team-member d-flex align-items-center mb-3">
                                <div class="avatar-circle bg-primary me-3">MG</div>
                                <div>
                                    <h6 class="mb-0">María González</h6>
                                    <small class="text-muted">Docente VcM - Coordinadora</small>
                                </div>
                            </div>
                            <div class="team-member d-flex align-items-center mb-3">
                                <div class="avatar-circle bg-info me-3">CL</div>
                                <div>
                                    <h6 class="mb-0">Carlos López</h6>
                                    <small class="text-muted">Estudiante - Líder de equipo</small>
                                </div>
                            </div>
                            <div class="team-member d-flex align-items-center">
                                <div class="avatar-circle bg-success me-3">AF</div>
                                <div>
                                    <h6 class="mb-0">Ana Fernández</h6>
                                    <small class="text-muted">Estudiante - Investigadora</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Fechas clave -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-header bg-white border-bottom-0 pb-0">
                            <h5 class="card-title mb-0"><i class="bi bi-calendar-event-fill text-primary me-2"></i>Fechas clave</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <small class="text-muted d-block">Fecha de inicio</small>
                                    <p class="mb-0 fw-medium">15 de marzo, 2025</p>
                                </div>
                                <i class="bi bi-calendar-event text-primary"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <small class="text-muted d-block">Fecha estimada de finalización</small>
                                    <p class="mb-0 fw-medium">15 de noviembre, 2025</p>
                                </div>
                                <i class="bi bi-calendar-check text-primary"></i>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <small class="text-muted d-block">Duración total</small>
                                    <p class="mb-0 fw-medium">8 meses</p>
                                </div>
                                <i class="bi bi-clock-history text-primary"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Documentos recientes -->
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white border-bottom-0 pb-0 d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0"><i class="bi bi-file-earmark-fill text-primary me-2"></i>Documentos recientes</h5>
                            <a href="#documents" data-bs-toggle="tab" data-bs-target="#documents" class="text-decoration-none small">Ver todos</a>
                        </div>
                        <div class="card-body">
                            <div class="document-item d-flex align-items-center mb-3">
                                <div class="document-icon me-3">
                                    <i class="bi bi-file-earmark-pdf text-danger fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Diagnóstico_Inicial.pdf</h6>
                                    <small class="text-muted">Subido el 20/04/2025 por María G.</small>
                                </div>
                            </div>
                            <div class="document-item d-flex align-items-center mb-3">
                                <div class="document-icon me-3">
                                    <i class="bi bi-file-earmark-text text-primary fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Plan_Capacitación.docx</h6>
                                    <small class="text-muted">Subido el 10/05/2025 por Carlos L.</small>
                                </div>
                            </div>
                            <div class="document-item d-flex align-items-center">
                                <div class="document-icon me-3">
                                    <i class="bi bi-file-earmark-image text-success fs-4"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Fotos_Capacitación.zip</h6>
                                    <small class="text-muted">Subido el 02/06/2025 por Ana F.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Otras pestañas (contenido simplificado para mostrar la estructura) -->
        <div class="tab-pane fade" id="tasks" role="tabpanel" aria-labelledby="tasks-tab">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0"><i class="bi bi-list-check text-primary me-2"></i>Tablero de tareas</h5>
                    <div>
                        <button class="btn btn-sm btn-outline-secondary me-2">
                            <i class="bi bi-funnel me-1"></i> Filtrar
                        </button>
                        <button class="btn btn-sm btn-primary">
                            <i class="bi bi-plus-lg me-1"></i> Nueva tarea
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="kanban-board">
                        <!-- Aquí iría el contenido del tablero Kanban para tareas -->
                        <p class="text-center text-muted my-5">Tablero Kanban con tareas por hacer, en progreso y completadas</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="tab-pane fade" id="team" role="tabpanel" aria-labelledby="team-tab">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0"><i class="bi bi-people-fill text-primary me-2"></i>Miembros del equipo</h5>
                    <button class="btn btn-sm btn-primary">
                        <i class="bi bi-plus-lg me-1"></i> Agregar miembro
                    </button>
                </div>
                <div class="card-body">
                    <!-- Aquí iría la lista completa de miembros del equipo -->
                    <p class="text-center text-muted my-5">Lista detallada de todos los miembros del equipo con roles y responsabilidades</p>
                </div>
            </div>
        </div>
        
        <div class="tab-pane fade" id="user-stories" role="tabpanel" aria-labelledby="user-stories-tab">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0"><i class="bi bi-person-lines-fill text-primary me-2"></i>Historias de usuario</h5>
                    <button class="btn btn-sm btn-primary">
                        <i class="bi bi-plus-lg me-1"></i> Nueva historia
                    </button>
                </div>
                <div class="card-body">
                    <!-- Aquí irían las historias de usuario del proyecto -->
                    <p class="text-center text-muted my-5">Listado de historias de usuario con criterios de aceptación</p>
                </div>
            </div>
        </div>
        
        <div class="tab-pane fade" id="documents" role="tabpanel" aria-labelledby="documents-tab">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0"><i class="bi bi-file-earmark-fill text-primary me-2"></i>Documentos del proyecto</h5>
                    <button class="btn btn-sm btn-primary">
                        <i class="bi bi-cloud-upload me-1"></i> Subir documento
                    </button>
                </div>
                <div class="card-body">
                    <!-- Aquí iría la lista completa de documentos -->
                    <p class="text-center text-muted my-5">Repositorio de documentos organizados por categorías</p>
                </div>
            </div>
        </div>
        
        <div class="tab-pane fade" id="communications" role="tabpanel" aria-labelledby="communications-tab">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="card-title mb-0"><i class="bi bi-chat-left-text-fill text-primary me-2"></i>Comunicaciones</h5>
                </div>
                <div class="card-body">
                    <!-- Aquí iría el chat o foro del proyecto -->
                    <p class="text-center text-muted my-5">Sistema de mensajería para la comunicación del equipo</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    /* Estilos para la vista de proyecto */
    .avatar-circle {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #0A2342;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }
    
    .objectives-list {
        list-style-type: none;
        padding-left: 0;
    }
    
    .objectives-list li {
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
    }
    
    .timeline {
        position: relative;
        padding-left: 30px;
    }
    
    .timeline::before {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        left: 15px;
        width: 2px;
        background-color: #E9ECEF;
    }
    
    .timeline-item {
        position: relative;
        padding-bottom: 1.5rem;
    }
    
    .timeline-marker {
        position: absolute;
        top: 5px;
        left: -30px;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        border: 2px solid #E9ECEF;
        background-color: white;
    }
    
    .timeline-item.completed .timeline-marker {
        background-color: #3E5902;
        border-color: #3E5902;
    }
    
    .timeline-item.current .timeline-marker {
        background-color: white;
        border-color: #D9A852;
        border-width: 3px;
    }
    
    .timeline-item:last-child {
        padding-bottom: 0;
    }
    
    .team-member, .document-item {
        transition: all 0.2s ease;
    }
    
    .team-member:hover, .document-item:hover {
        background-color: #f8f9fa;
        border-radius: 8px;
        padding: 0.5rem;
        margin-left: -0.5rem;
        margin-right: -0.5rem;
    }
    
    .document-icon {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .nav-tabs {
        border-bottom: 1px solid #dee2e6;
    }
    
    .nav-tabs .nav-link {
        color: #6c757d;
        border: none;
        padding: 0.75rem 1rem;
        border-bottom: 3px solid transparent;
        transition: all 0.2s ease;
    }
    
    .nav-tabs .nav-link:hover {
        color: #0A2342;
        border-bottom-color: #D9A852;
    }
    
    .nav-tabs .nav-link.active {
        color: #0A2342;
        background-color: transparent;
        border-bottom-color: #D9A852;
        font-weight: 500;
    }
    
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
    
    .btn-primary {
        background-color: #3E5902;
        border-color: #3E5902;
    }
    
    .btn-primary:hover {
        background-color: #2A3F01;
        border-color: #2A3F01;
    }
    
    .btn-outline-secondary {
        color: #6B7280;
        border-color: #D1D5DB;
    }
    
    .btn-outline-secondary:hover {
        background-color: #F5F5F5;
        color: #6B7280;
        border-color: #D1D5DB;
    }
    
    .breadcrumb-item a {
        color: #0A2342;
    }
</style>
@endsection
