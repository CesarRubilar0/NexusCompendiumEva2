@extends('layouts.app')

@section('title', 'Actores de Interés - Nexus Compendium')

@section('content')
<div class="container py-4">
    <!-- Encabezado y acciones principales -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold mb-1"><i class="bi bi-building text-primary me-2"></i>Actores de Interés</h1>
            <p class="text-muted">Organizaciones y entidades externas colaboradoras en proyectos de Vinculación con el Medio</p>
        </div>
        <div>
            <a href="{{ url('/actores/crear') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle me-1"></i> Nuevo Actor
            </a>
        </div>
    </div>

    <!-- Filtros y búsqueda -->
    <div class="card mb-4 border-0 shadow-sm">
        <div class="card-body p-3">
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control border-start-0" placeholder="Buscar actores...">
                    </div>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Todos los tipos</option>
                        <option value="municipalidad">Municipalidad</option>
                        <option value="empresa">Empresa Privada</option>
                        <option value="organizacion">Organización sin fines de lucro</option>
                        <option value="fundacion">Fundación</option>
                        <option value="educacion">Institución Educativa</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Todas las regiones</option>
                        <option value="metropolitana">Metropolitana</option>
                        <option value="valparaiso">Valparaíso</option>
                        <option value="biobio">Biobío</option>
                        <option value="otras">Otras regiones</option>
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
                        <i class="bi bi-building-fill text-white fs-4"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Total Actores</h6>
                        <h3 class="mb-0">28</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 bg-light shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="rounded-circle bg-success p-3 me-3">
                        <i class="bi bi-clipboard-data text-white fs-4"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Proyectos Activos</h6>
                        <h3 class="mb-0">15</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 bg-light shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="rounded-circle bg-info p-3 me-3">
                        <i class="bi bi-people text-white fs-4"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Estudiantes Involucrados</h6>
                        <h3 class="mb-0">76</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 bg-light shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="rounded-circle bg-warning p-3 me-3">
                        <i class="bi bi-flag text-white fs-4"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Comunas Impactadas</h6>
                        <h3 class="mb-0">14</h3>
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
            <span class="text-muted">Mostrando 1-6 de 28 actores</span>
        </div>
    </div>

    <!-- Vista de tarjetas de actores -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4 mb-4" id="cards-view">
        <!-- Actor 1: Municipalidad -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm actor-card">
                <div class="card-header bg-white border-0 pt-3 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-primary actor-type-badge">
                            <i class="bi bi-building me-1"></i>Municipalidad
                        </span>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-person-lines-fill me-2"></i>Ver contactos</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Eliminar</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-2">
                    <div class="text-center mb-3">
                        <img src="https://placehold.co/150x80?text=Logo" alt="Logo Municipalidad Isla de Maipo" class="img-fluid mb-2 actor-logo">
                        <h5 class="card-title">
                            <a href="{{ url('/actores/1') }}" class="text-decoration-none text-dark stretched-link">Municipalidad Isla de Maipo</a>
                        </h5>
                        <p class="text-muted small mb-0"><i class="bi bi-geo-alt me-1"></i>Región Metropolitana</p>
                    </div>
                    
                    <div class="mb-3">
                        <p class="card-text text-muted small">Municipalidad comprometida con el desarrollo local y el bienestar de la comunidad a través de proyectos colaborativos.</p>
                    </div>
                    
                    <div class="projects-section">
                        <h6 class="fw-bold mb-2 border-bottom pb-2">
                            <i class="bi bi-kanban text-primary me-1"></i>Proyectos Relacionados (2)
                        </h6>
                        <ul class="list-unstyled project-list">
                            <li class="mb-2">
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-success me-2">Activo</span>
                                    <a href="{{ url('/proyectos/4') }}" class="text-decoration-none text-dark stretched-nested-link">Plataforma Ciudadana Municipal</a>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-warning text-dark me-2">Planificación</span>
                                    <a href="#" class="text-decoration-none text-dark stretched-nested-link">Portal de Transparencia Activa</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted small"><i class="bi bi-calendar-event me-1"></i>Desde: Mar 2024</span>
                        <a href="{{ url('/actores/1') }}" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-eye me-1"></i>Ver detalles
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Actor 2: Empresa -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm actor-card">
                <div class="card-header bg-white border-0 pt-3 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-danger actor-type-badge">
                            <i class="bi bi-briefcase me-1"></i>Empresa
                        </span>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-person-lines-fill me-2"></i>Ver contactos</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Eliminar</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-2">
                    <div class="text-center mb-3">
                        <img src="https://placehold.co/150x80?text=TechSA" alt="Logo TechSA" class="img-fluid mb-2 actor-logo">
                        <h5 class="card-title">
                            <a href="#" class="text-decoration-none text-dark stretched-link">TechSA Soluciones Digitales</a>
                        </h5>
                        <p class="text-muted small mb-0"><i class="bi bi-geo-alt me-1"></i>Región Metropolitana</p>
                    </div>
                    
                    <div class="mb-3">
                        <p class="card-text text-muted small">Empresa dedicada al desarrollo de soluciones tecnológicas innovadoras con enfoque en mejora de servicios públicos.</p>
                    </div>
                    
                    <div class="projects-section">
                        <h6 class="fw-bold mb-2 border-bottom pb-2">
                            <i class="bi bi-kanban text-primary me-1"></i>Proyectos Relacionados (3)
                        </h6>
                        <ul class="list-unstyled project-list">
                            <li class="mb-2">
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-success me-2">Activo</span>
                                    <a href="#" class="text-decoration-none text-dark stretched-nested-link">Aplicación de Gestión Ambiental</a>
                                </div>
                            </li>
                            <li class="mb-2">
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-success me-2">Activo</span>
                                    <a href="#" class="text-decoration-none text-dark stretched-nested-link">Sistema de Monitoreo de Recursos</a>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-secondary me-2">Completado</span>
                                    <a href="#" class="text-decoration-none text-dark stretched-nested-link">Portal de Datos Abiertos</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted small"><i class="bi bi-calendar-event me-1"></i>Desde: Jun 2023</span>
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-eye me-1"></i>Ver detalles
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Actor 3: Organización -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm actor-card">
                <div class="card-header bg-white border-0 pt-3 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-success actor-type-badge">
                            <i class="bi bi-heart me-1"></i>Organización sin fines de lucro
                        </span>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-person-lines-fill me-2"></i>Ver contactos</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Eliminar</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-2">
                    <div class="text-center mb-3">
                        <img src="https://placehold.co/150x80?text=FuturoVerde" alt="Logo Fundación Futuro Verde" class="img-fluid mb-2 actor-logo">
                        <h5 class="card-title">
                            <a href="#" class="text-decoration-none text-dark stretched-link">Fundación Futuro Verde</a>
                        </h5>
                        <p class="text-muted small mb-0"><i class="bi bi-geo-alt me-1"></i>Valparaíso</p>
                    </div>
                    
                    <div class="mb-3">
                        <p class="card-text text-muted small">Organización dedicada a promover la sustentabilidad ambiental y la educación ecológica en comunidades vulnerables.</p>
                    </div>
                    
                    <div class="projects-section">
                        <h6 class="fw-bold mb-2 border-bottom pb-2">
                            <i class="bi bi-kanban text-primary me-1"></i>Proyectos Relacionados (1)
                        </h6>
                        <ul class="list-unstyled project-list">
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-warning text-dark me-2">Planificación</span>
                                    <a href="#" class="text-decoration-none text-dark stretched-nested-link">Sistema de Monitoreo Ambiental Comunitario</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted small"><i class="bi bi-calendar-event me-1"></i>Desde: Ene 2024</span>
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-eye me-1"></i>Ver detalles
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Actor 4: Centro de Salud -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm actor-card">
                <div class="card-header bg-white border-0 pt-3 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-info actor-type-badge">
                            <i class="bi bi-hospital me-1"></i>Centro de Salud
                        </span>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-person-lines-fill me-2"></i>Ver contactos</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Eliminar</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-2">
                    <div class="text-center mb-3">
                        <img src="https://placehold.co/150x80?text=Hospital" alt="Logo Hospital Regional" class="img-fluid mb-2 actor-logo">
                        <h5 class="card-title">
                            <a href="#" class="text-decoration-none text-dark stretched-link">Hospital Regional</a>
                        </h5>
                        <p class="text-muted small mb-0"><i class="bi bi-geo-alt me-1"></i>Región Metropolitana</p>
                    </div>
                    
                    <div class="mb-3">
                        <p class="card-text text-muted small">Centro de salud público que brinda atención médica integral y busca mejorar sus servicios digitales para la comunidad.</p>
                    </div>
                    
                    <div class="projects-section">
                        <h6 class="fw-bold mb-2 border-bottom pb-2">
                            <i class="bi bi-kanban text-primary me-1"></i>Proyectos Relacionados (1)
                        </h6>
                        <ul class="list-unstyled project-list">
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-success me-2">Activo</span>
                                    <a href="{{ url('/proyectos/1') }}" class="text-decoration-none text-dark stretched-nested-link">Proyecto de Salud Comunitaria</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted small"><i class="bi bi-calendar-event me-1"></i>Desde: Feb 2024</span>
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-eye me-1"></i>Ver detalles
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Actor 5: Centro Educativo -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm actor-card">
                <div class="card-header bg-white border-0 pt-3 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-warning text-dark actor-type-badge">
                            <i class="bi bi-book me-1"></i>Centro Educativo
                        </span>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-person-lines-fill me-2"></i>Ver contactos</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Eliminar</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-2">
                    <div class="text-center mb-3">
                        <img src="https://placehold.co/150x80?text=Escuela" alt="Logo Escuela Básica El Amanecer" class="img-fluid mb-2 actor-logo">
                        <h5 class="card-title">
                            <a href="#" class="text-decoration-none text-dark stretched-link">Escuela Básica El Amanecer</a>
                        </h5>
                        <p class="text-muted small mb-0"><i class="bi bi-geo-alt me-1"></i>Biobío</p>
                    </div>
                    
                    <div class="mb-3">
                        <p class="card-text text-muted small">Institución educativa que promueve el aprendizaje integral y la formación de valores en niños y jóvenes de la comunidad.</p>
                    </div>
                    
                    <div class="projects-section">
                        <h6 class="fw-bold mb-2 border-bottom pb-2">
                            <i class="bi bi-kanban text-primary me-1"></i>Proyectos Relacionados (1)
                        </h6>
                        <ul class="list-unstyled project-list">
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-secondary me-2">Completado</span>
                                    <a href="{{ url('/proyectos/3') }}" class="text-decoration-none text-dark stretched-nested-link">Apoyo Nutricional Escolar</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted small"><i class="bi bi-calendar-event me-1"></i>Desde: Sept 2023</span>
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-eye me-1"></i>Ver detalles
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Actor 6: Centro Comunitario -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm actor-card">
                <div class="card-header bg-white border-0 pt-3 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-success actor-type-badge">
                            <i class="bi bi-people me-1"></i>Centro Comunitario
                        </span>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-person-lines-fill me-2"></i>Ver contactos</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Eliminar</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-2">
                    <div class="text-center mb-3">
                        <img src="https://placehold.co/150x80?text=Centro" alt="Logo Centro Adulto Mayor" class="img-fluid mb-2 actor-logo">
                        <h5 class="card-title">
                            <a href="#" class="text-decoration-none text-dark stretched-link">Centro Adulto Mayor</a>
                        </h5>
                        <p class="text-muted small mb-0"><i class="bi bi-geo-alt me-1"></i>Región Metropolitana</p>
                    </div>
                    
                    <div class="mb-3">
                        <p class="card-text text-muted small">Espacio dedicado al bienestar y desarrollo de adultos mayores a través de actividades recreativas, culturales y educativas.</p>
                    </div>
                    
                    <div class="projects-section">
                        <h6 class="fw-bold mb-2 border-bottom pb-2">
                            <i class="bi bi-kanban text-primary me-1"></i>Proyectos Relacionados (1)
                        </h6>
                        <ul class="list-unstyled project-list">
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-warning text-dark me-2">Planificación</span>
                                    <a href="{{ url('/proyectos/2') }}" class="text-decoration-none text-dark stretched-nested-link">Capacitación Digital</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-muted small"><i class="bi bi-calendar-event me-1"></i>Desde: Mar 2024</span>
                        <a href="#" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-eye me-1"></i>Ver detalles
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Vista de lista de actores (Tabla) -->
    <div class="card border-0 shadow-sm mb-4" id="list-view" style="display: none;">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light">
                    <tr>
                        <th scope="col" class="border-0">Actor de Interés</th>
                        <th scope="col" class="border-0">Tipo</th>
                        <th scope="col" class="border-0">Ubicación</th>
                        <th scope="col" class="border-0">Proyectos</th>
                        <th scope="col" class="border-0">Estado</th>
                        <th scope="col" class="border-0">Desde</th>
                        <th scope="col" class="border-0">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Actor 1 -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://placehold.co/80x40?text=Logo" alt="Logo Municipalidad" class="me-2" style="max-height: 30px;">
                                <span class="fw-medium">Municipalidad Isla de Maipo</span>
                            </div>
                        </td>
                        <td><span class="badge bg-primary">Municipalidad</span></td>
                        <td>Región Metropolitana</td>
                        <td>2 proyectos</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td>Mar 2024</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="{{ url('/actores/1') }}"><i class="bi bi-eye me-2"></i>Ver detalles</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-person-lines-fill me-2"></i>Ver contactos</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Actor 2 -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://placehold.co/80x40?text=TechSA" alt="Logo TechSA" class="me-2" style="max-height: 30px;">
                                <span class="fw-medium">TechSA Soluciones Digitales</span>
                            </div>
                        </td>
                        <td><span class="badge bg-danger">Empresa</span></td>
                        <td>Región Metropolitana</td>
                        <td>3 proyectos</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td>Jun 2023</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>Ver detalles</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-person-lines-fill me-2"></i>Ver contactos</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Resto de actores en formato lista -->
                    <!-- Actor 3 -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://placehold.co/80x40?text=FuturoVerde" alt="Logo Fundación" class="me-2" style="max-height: 30px;">
                                <span class="fw-medium">Fundación Futuro Verde</span>
                            </div>
                        </td>
                        <td><span class="badge bg-success">Organización sin fines de lucro</span></td>
                        <td>Valparaíso</td>
                        <td>1 proyecto</td>
                        <td><span class="badge bg-warning text-dark">Planificación</span></td>
                        <td>Ene 2024</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>Ver detalles</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-person-lines-fill me-2"></i>Ver contactos</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Actor 4 -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://placehold.co/80x40?text=Hospital" alt="Logo Hospital" class="me-2" style="max-height: 30px;">
                                <span class="fw-medium">Hospital Regional</span>
                            </div>
                        </td>
                        <td><span class="badge bg-info">Centro de Salud</span></td>
                        <td>Región Metropolitana</td>
                        <td>1 proyecto</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td>Feb 2024</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>Ver detalles</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-person-lines-fill me-2"></i>Ver contactos</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Actor 5 -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://placehold.co/80x40?text=Escuela" alt="Logo Escuela" class="me-2" style="max-height: 30px;">
                                <span class="fw-medium">Escuela Básica El Amanecer</span>
                            </div>
                        </td>
                        <td><span class="badge bg-warning text-dark">Centro Educativo</span></td>
                        <td>Biobío</td>
                        <td>1 proyecto</td>
                        <td><span class="badge bg-secondary">Completado</span></td>
                        <td>Sept 2023</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>Ver detalles</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-person-lines-fill me-2"></i>Ver contactos</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Actor 6 -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://placehold.co/80x40?text=Centro" alt="Logo Centro" class="me-2" style="max-height: 30px;">
                                <span class="fw-medium">Centro Adulto Mayor</span>
                            </div>
                        </td>
                        <td><span class="badge bg-success">Centro Comunitario</span></td>
                        <td>Región Metropolitana</td>
                        <td>1 proyecto</td>
                        <td><span class="badge bg-warning text-dark">Planificación</span></td>
                        <td>Mar 2024</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>Ver detalles</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-person-lines-fill me-2"></i>Ver contactos</a></li>
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
    <nav class="d-flex justify-content-center mt-4">
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
            localStorage.setItem('actorViewPreference', 'cards');
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
            localStorage.setItem('actorViewPreference', 'list');
        });
        
        // Cargar preferencia guardada del usuario (si existe)
        const savedViewPreference = localStorage.getItem('actorViewPreference');
        if (savedViewPreference === 'list') {
            // Simular clic en botón de lista
            listViewBtn.click();
        }
    });
</script>
@endsection

@section('styles')
<style>
    /* Estilos para la página de actores de interés */
    .actor-card {
        transition: all 0.3s ease;
    }
    
    .actor-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
    }
    
    .actor-type-badge {
        font-size: 0.8rem;
        padding: 0.4rem 0.6rem;
    }
    
    .actor-logo {
        max-height: 80px;
        object-fit: contain;
    }
    
    .projects-section {
        background-color: #f8f9fa;
        border-radius: 8px;
        padding: 12px;
    }
    
    .project-list li {
        transition: all 0.2s ease;
        padding: 4px 6px;
        border-radius: 4px;
    }
    
    .project-list li:hover {
        background-color: rgba(217, 168, 82, 0.1);
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
    
    .stretched-nested-link {
        position: relative;
        z-index: 2;
    }
    
    .dropdown .btn {
        z-index: 2;
        position: relative;
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
    
    /* Colores consistentes con el sistema */
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
    
    .page-item.active .page-link {
        background-color: #0A2342;
        border-color: #0A2342;
    }
    
    .page-link {
        color: #0A2342;
    }
</style>
@endsection
