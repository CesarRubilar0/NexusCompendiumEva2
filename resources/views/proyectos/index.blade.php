@extends('layouts.app')

@section('title', 'Proyectos - Nexus Compendium')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold mb-1"><i class="bi bi-kanban text-primary me-2"></i>Gestión de Proyectos</h1>
            <p class="text-muted">Visualiza y administra los proyectos de Vinculación con el Medio</p>
        </div>
        <div>
            <a href="{{ url('/proyectos/crear') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle me-1"></i> Nuevo Proyecto
            </a>
        </div>
    </div>

    <!-- Filtros y búsqueda -->
    <div class="card mb-4 border-0 shadow-sm">
        <div class="card-body p-3">
            <div class="row g-3">
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control border-start-0" placeholder="Buscar proyectos...">
                    </div>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Todos los estados</option>
                        <option value="active">Activo</option>
                        <option value="planning">En Planificación</option>
                        <option value="completed">Completado</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="form-select">
                        <option value="">Todas las áreas</option>
                        <option value="informatica">Informática</option>
                        <option value="administracion">Administración</option>
                        <option value="contabilidad">Contabilidad</option>
                        <option value="marketing">Marketing</option>
                        <option value="diseno">Diseño</option>
                        <option value="otra">Otras</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="form-select">
                        <option value="">Todos los periodos</option>
                        <option value="2025-1">2025-1</option>
                        <option value="2024-2">2024-2</option>
                        <option value="2024-1">2024-1</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-outline-secondary w-100">
                        <i class="bi bi-funnel me-1"></i> Filtrar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Estadísticas rápidas -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card border-0 bg-light shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="rounded-circle bg-primary p-3 me-3">
                        <i class="bi bi-clipboard-data text-white fs-4"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Total Proyectos</h6>
                        <h3 class="mb-0">12</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 bg-light shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="rounded-circle bg-success p-3 me-3">
                        <i class="bi bi-lightning-charge text-white fs-4"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Proyectos Activos</h6>
                        <h3 class="mb-0">5</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 bg-light shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="rounded-circle bg-warning p-3 me-3">
                        <i class="bi bi-gear text-white fs-4"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">En Planificación</h6>
                        <h3 class="mb-0">3</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 bg-light shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="rounded-circle bg-info p-3 me-3">
                        <i class="bi bi-check2-circle text-white fs-4"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Completados</h6>
                        <h3 class="mb-0">4</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Opciones de visualización -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="btn-group" role="group" aria-label="Opciones de visualización">
            <button type="button" class="btn btn-outline-secondary active" id="view-cards">
                <i class="bi bi-grid-3x3-gap-fill me-1"></i> Tarjetas
            </button>
            <button type="button" class="btn btn-outline-secondary" id="view-list">
                <i class="bi bi-list-ul me-1"></i> Lista
            </button>
        </div>
        <div>
            <span class="text-muted">Mostrando 1-4 de 12 proyectos</span>
        </div>
    </div>

    <!-- Grid de proyectos (Vista de tarjetas) -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4" id="cards-view">
        <!-- Proyecto 1 -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm project-card">
                <div class="card-header d-flex justify-content-between align-items-center bg-white border-0 pt-3 pb-0">
                    <div class="d-flex">
                        <span class="badge bg-success status-badge me-2">
                            <i class="bi bi-play-fill me-1"></i>Activo
                        </span>
                        <span class="badge bg-info area-badge">
                            <i class="bi bi-mortarboard me-1"></i>Informática
                        </span>
                    </div>
                    <!-- Vista de tarjetas -->
                    <div class="dropdown">
                        <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ url('/proyectos/1/editar') }}"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-archive me-2"></i>Archivar</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Eliminar</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body pt-2">
                    <h5 class="card-title fw-bold">
                        <a href="{{ url('/proyectos/1') }}" class="text-decoration-none text-dark stretched-link">Proyecto de Salud Comunitaria</a>
                    </h5>
                    <p class="card-text text-muted small mb-3 line-clamp-2">Implementación de programa de salud preventiva en comunidades rurales con enfoque en adultos mayores y niños.</p>
                    
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-person-badge text-primary me-2"></i>
                            <div>
                                <small class="text-muted d-block">Responsable</small>
                                <span class="fw-medium">María González</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-people text-primary me-2"></i>
                            <div>
                                <small class="text-muted d-block">Stakeholder</small>
                                <span class="fw-medium">Hospital Regional</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="progress mb-3" style="height: 8px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-calendar-event text-muted me-1"></i>
                            <small>15/03/2025</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-calendar-check text-muted me-1"></i>
                            <small>30/06/2025</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-person-check text-muted me-1"></i>
                            <small>5 estudiantes</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Proyecto 2 -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm project-card">
                <div class="card-header d-flex justify-content-between align-items-center bg-white border-0 pt-3 pb-0">
                    <div class="d-flex">
                        <span class="badge bg-warning status-badge me-2">
                            <i class="bi bi-gear me-1"></i>En Planificación
                        </span>
                        <span class="badge bg-info area-badge">
                            <i class="bi bi-mortarboard me-1"></i>Salud
                        </span>
                    </div>
                    <!-- Vista de tarjetas -->
                    <div class="dropdown">
                        <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ url('/proyectos/2/editar') }}"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-archive me-2"></i>Archivar</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Eliminar</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body pt-2">
                    <h5 class="card-title fw-bold">
                        <a href="{{ url('/proyectos/2') }}" class="text-decoration-none text-dark stretched-link">Capacitación Digital</a>
                    </h5>
                    <p class="card-text text-muted small mb-3 line-clamp-2">Programa de alfabetización digital para adultos mayores con enfoque en herramientas de comunicación y acceso a servicios públicos digitales.</p>
                    
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-person-badge text-primary me-2"></i>
                            <div>
                                <small class="text-muted d-block">Responsable</small>
                                <span class="fw-medium">Carlos Martínez</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-people text-primary me-2"></i>
                            <div>
                                <small class="text-muted d-block">Stakeholder</small>
                                <span class="fw-medium">Centro Adulto Mayor</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="progress mb-3" style="height: 8px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-calendar-event text-muted me-1"></i>
                            <small>01/04/2025</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-calendar-check text-muted me-1"></i>
                            <small>15/07/2025</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-person-check text-muted me-1"></i>
                            <small>3 estudiantes</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Proyecto 3 -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm project-card">
                <div class="card-header d-flex justify-content-between align-items-center bg-white border-0 pt-3 pb-0">
                    <div class="d-flex">
                        <span class="badge bg-secondary status-badge me-2">
                            <i class="bi bi-check-circle me-1"></i>Completado
                        </span>
                        <span class="badge bg-info area-badge">
                            <i class="bi bi-mortarboard me-1"></i>Educación
                        </span>
                    </div>
                    <!-- Vista de tarjetas -->
                    <div class="dropdown">
                        <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ url('/proyectos/2/editar') }}"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-archive me-2"></i>Archivar</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Eliminar</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body pt-2">
                    <h5 class="card-title fw-bold">
                        <a href="{{ url('/proyectos/3') }}" class="text-decoration-none text-dark stretched-link">Apoyo Nutricional Escolar</a>
                    </h5>
                    <p class="card-text text-muted small mb-3 line-clamp-2">Evaluación nutricional y educación alimentaria en escuelas vulnerables para promover hábitos alimenticios saludables en la comunidad escolar.</p>
                    
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-person-badge text-primary me-2"></i>
                            <div>
                                <small class="text-muted d-block">Responsable</small>
                                <span class="fw-medium">Ana Rojas</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-people text-primary me-2"></i>
                            <div>
                                <small class="text-muted d-block">Stakeholder</small>
                                <span class="fw-medium">Escuela Básica El Amanecer</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="progress mb-3" style="height: 8px;">
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-calendar-event text-muted me-1"></i>
                            <small>10/09/2024</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-calendar-check text-muted me-1"></i>
                            <small>20/12/2024</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-person-check text-muted me-1"></i>
                            <small>4 estudiantes</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Proyecto 4 -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm project-card">
                <div class="card-header d-flex justify-content-between align-items-center bg-white border-0 pt-3 pb-0">
                    <div class="d-flex">
                        <span class="badge bg-success status-badge me-2">
                            <i class="bi bi-play-fill me-1"></i>Activo
                        </span>
                        <span class="badge bg-info area-badge">
                            <i class="bi bi-mortarboard me-1"></i>Administración
                        </span>
                    </div>
                    <!-- Vista de tarjetas -->
                    <div class="dropdown">
                        <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ url('/proyectos/2/editar') }}"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-archive me-2"></i>Archivar</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Eliminar</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body pt-2">
                    <h5 class="card-title fw-bold">
                        <a href="{{ url('/proyectos/4') }}" class="text-decoration-none text-dark stretched-link">Plataforma Ciudadana Municipal</a>
                    </h5>
                    <p class="card-text text-muted small mb-3 line-clamp-2">Desarrollo de plataforma web para facilitar trámites y mejorar comunicación entre ciudadanos y municipalidad.</p>
                    
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-person-badge text-primary me-2"></i>
                            <div>
                                <small class="text-muted d-block">Responsable</small>
                                <span class="fw-medium">Felipe Duarte</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-people text-primary me-2"></i>
                            <div>
                                <small class="text-muted d-block">Stakeholder</small>
                                <span class="fw-medium">Municipalidad Isla de Maipo</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="progress mb-3" style="height: 8px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-calendar-event text-muted me-1"></i>
                            <small>24/03/2025</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-calendar-check text-muted me-1"></i>
                            <small>31/07/2025</small>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-person-check text-muted me-1"></i>
                            <small>6 estudiantes</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Vista de lista de proyectos (Tabla) -->
    <div class="card border-0 shadow-sm mb-4" id="list-view" style="display: none;">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light">
                    <tr>
                        <th scope="col" class="border-0">Proyecto</th>
                        <th scope="col" class="border-0">Área</th>
                        <th scope="col" class="border-0">Responsable</th>
                        <th scope="col" class="border-0">Stakeholder</th>
                        <th scope="col" class="border-0">Progreso</th>
                        <th scope="col" class="border-0">Fechas</th>
                        <th scope="col" class="border-0">Estado</th>
                        <th scope="col" class="border-0">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Proyecto 1 -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="fw-medium">Proyecto de Salud Comunitaria</span>
                            </div>
                        </td>
                        <td><span class="badge bg-info"><i class="bi bi-mortarboard me-1"></i>Informática</span></td>
                        <td>María González</td>
                        <td>Hospital Regional</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="progress flex-grow-1 me-2" style="height: 6px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="small text-muted">65%</span>
                            </div>
                        </td>
                        <td><small>15/03/2025 - 30/06/2025</small></td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="{{ url('/proyectos/1') }}"><i class="bi bi-eye me-2"></i>Ver detalles</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/proyectos/1/editar') }}"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-archive me-2"></i>Archivar</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Proyecto 2 -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="fw-medium">Capacitación Digital</span>
                            </div>
                        </td>
                        <td><span class="badge bg-info"><i class="bi bi-mortarboard me-1"></i>Salud</span></td>
                        <td>Carlos Martínez</td>
                        <td>Centro Adulto Mayor</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="progress flex-grow-1 me-2" style="height: 6px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="small text-muted">25%</span>
                            </div>
                        </td>
                        <td><small>01/04/2025 - 15/07/2025</small></td>
                        <td><span class="badge bg-warning text-dark">En Planificación</span></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="{{ url('/proyectos/2') }}"><i class="bi bi-eye me-2"></i>Ver detalles</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/proyectos/2/editar') }}"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-archive me-2"></i>Archivar</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Proyecto 3 -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="fw-medium">Apoyo Nutricional Escolar</span>
                            </div>
                        </td>
                        <td><span class="badge bg-info"><i class="bi bi-mortarboard me-1"></i>Educación</span></td>
                        <td>Ana Rojas</td>
                        <td>Escuela Básica El Amanecer</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="progress flex-grow-1 me-2" style="height: 6px;">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="small text-muted">100%</span>
                            </div>
                        </td>
                        <td><small>10/09/2024 - 20/12/2024</small></td>
                        <td><span class="badge bg-secondary">Completado</span></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="{{ url('/proyectos/3') }}"><i class="bi bi-eye me-2"></i>Ver detalles</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/proyectos/3/editar') }}"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-archive me-2"></i>Archivar</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-arrow-repeat me-2"></i>Duplicar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Proyecto 4 -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="fw-medium">Plataforma Ciudadana Municipal</span>
                            </div>
                        </td>
                        <td><span class="badge bg-info"><i class="bi bi-mortarboard me-1"></i>Administración</span></td>
                        <td>Felipe Duarte</td>
                        <td>Municipalidad Isla de Maipo</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="progress flex-grow-1 me-2" style="height: 6px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="small text-muted">75%</span>
                            </div>
                        </td>
                        <td><small>24/03/2025 - 31/07/2025</small></td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="{{ url('/proyectos/4') }}"><i class="bi bi-eye me-2"></i>Ver detalles</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/proyectos/4/editar') }}"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-archive me-2"></i>Archivar</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Paginación -->
    <nav class="d-flex justify-content-center mt-5">
        <ul class="pagination">
            <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Elementos DOM
        const cardsViewBtn = document.getElementById('view-cards');
        const listViewBtn = document.getElementById('view-list');
        const cardsView = document.getElementById('cards-view');
        const listView = document.getElementById('list-view');
        
        // Evento para cambiar a vista de tarjetas
        cardsViewBtn.addEventListener('click', function() {
            // Mostrar vista de tarjetas y ocultar vista de lista
            cardsView.style.display = 'flex';
            listView.style.display = 'none';
            
            // Actualizar estado de los botones
            cardsViewBtn.classList.add('active');
            listViewBtn.classList.remove('active');
            
            // Guardar preferencia del usuario en localStorage
            localStorage.setItem('projectViewPreference', 'cards');
        });
        
        // Evento para cambiar a vista de lista
        listViewBtn.addEventListener('click', function() {
            // Ocultar vista de tarjetas y mostrar vista de lista
            cardsView.style.display = 'none';
            listView.style.display = 'block';
            
            // Actualizar estado de los botones
            listViewBtn.classList.add('active');
            cardsViewBtn.classList.remove('active');
            
            // Guardar preferencia del usuario en localStorage
            localStorage.setItem('projectViewPreference', 'list');
        });
        
        // Cargar preferencia guardada del usuario (si existe)
        const savedViewPreference = localStorage.getItem('projectViewPreference');
        if (savedViewPreference === 'list') {
            // Simular clic en botón de lista
            listViewBtn.click();
        }
    });
</script>
@endsection

@section('styles')
<style>
    /* Estilos para la página de proyectos */
    .project-card {
        transition: all 0.3s ease;
    }
    
    .project-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
    }
    
    .status-badge {
        font-size: 0.8rem;
        padding: 0.4rem 0.6rem;
    }
    
    .area-badge {
        font-size: 0.75rem;
        padding: 0.35em 0.65em;
    }
    
    .bg-info {
        background-color: #4C86A8 !important;
    }
    
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        height: 40px;
    }
    
    .progress {
        border-radius: 10px;
        background-color: #f0f0f0;
    }
    
    .bg-success {
        background-color: #3E5902 !important;
    }
    
    .bg-warning {
        background-color: #D9A852 !important;
        color: #1A1A1A !important;
    }
    
    .bg-secondary {
        background-color: #6B7280 !important;
    }
    
    .bg-primary {
        background-color: #0A2342 !important;
    }
    
    .text-primary {
        color: #0A2342 !important;
    }
    
    .stretched-link::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1;
        content: "";
    }
    
    .dropdown .btn {
        z-index: 2;
        position: relative;
    }
    
    .page-link {
        color: #0A2342;
    }
    
    .page-item.active .page-link {
        background-color: #0A2342;
        border-color: #0A2342;
    }
    
    /* Estilos para la vista de lista */
    #cards-view {
        display: flex;
    }
    
    .table thead th {
        font-weight: 600;
        font-size: 0.875rem;
        color: #6c757d;
    }
    
    .table td {
        vertical-align: middle;
        padding: 0.75rem;
    }
    
    .table tr:hover {
        background-color: rgba(217, 168, 82, 0.05);
    }
    
    .progress {
        background-color: #f0f0f0;
    }
</style>
@endsection
