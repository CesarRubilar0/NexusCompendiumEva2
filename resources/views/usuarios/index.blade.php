@extends('layouts.app')

@section('title', 'Gestión de Usuarios - Nexus Compendium')

@section('content')
<div class="container py-4">
    <!-- Encabezado y acciones principales -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold mb-1"><i class="bi bi-people-fill text-primary me-2"></i>Gestión de Usuarios</h1>
            <p class="text-muted">Administra los usuarios y roles del sistema Nexus Compendium</p>
        </div>
        <div>
            <a href="{{ url('/usuarios/crear') }}" class="btn btn-primary">
                <i class="bi bi-person-plus-fill me-1"></i> Nuevo Usuario
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
                        <input type="text" class="form-control border-start-0" placeholder="Buscar usuarios...">
                    </div>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Todos los roles</option>
                        <option value="admin">Administrador</option>
                        <option value="docente_vcm">Docente VcM</option>
                        <option value="docente_catedra">Docente de Cátedra</option>
                        <option value="estudiante">Estudiante</option>
                        <option value="actor_interes">Actor de Interés</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option value="">Todos los estados</option>
                        <option value="active">Activo</option>
                        <option value="inactive">Inactivo</option>
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
                        <i class="bi bi-people text-white fs-4"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Total Usuarios</h6>
                        <h3 class="mb-0">42</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 bg-light shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="rounded-circle bg-success p-3 me-3">
                        <i class="bi bi-mortarboard text-white fs-4"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Estudiantes</h6>
                        <h3 class="mb-0">25</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 bg-light shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="rounded-circle bg-info p-3 me-3">
                        <i class="bi bi-person-workspace text-white fs-4"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Docentes</h6>
                        <h3 class="mb-0">12</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 bg-light shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="rounded-circle bg-warning p-3 me-3">
                        <i class="bi bi-building text-white fs-4"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Actores Externos</h6>
                        <h3 class="mb-0">5</h3>
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
            <span class="text-muted">Mostrando 1-9 de 42 usuarios</span>
        </div>
    </div>

    <!-- Vista de tarjetas de usuarios -->
    <div class="row row-cols-1 row-cols-md-3 g-4 mb-4" id="cards-view">
        <!-- Usuario 1 -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm user-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <div class="d-flex align-items-center">
                            <div class="avatar-circle bg-primary me-3 text-white">MG</div>
                            <div>
                                <h5 class="card-title mb-0">Dra. María González</h5>
                                <span class="badge bg-primary">Administrador</span>
                                <span class="badge bg-success">Activo</span>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-key me-2"></i>Cambiar contraseña</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-person-x me-2"></i>Desactivar</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="user-details mb-3">
                        <div class="mb-2">
                            <i class="bi bi-envelope text-muted me-2"></i>
                            <span>maria.gonzalez@ipss.edu.cl</span>
                        </div>
                        <div class="mb-2">
                            <i class="bi bi-briefcase text-muted me-2"></i>
                            <span>Coordinadora de Vinculación</span>
                        </div>
                        <div>
                            <i class="bi bi-building text-muted me-2"></i>
                            <span>Instituto Profesional San Sebastián</span>
                        </div>
                    </div>
                    
                    <div class="user-stats d-flex justify-content-around">
                        <div class="text-center">
                            <div class="stat-value">12</div>
                            <div class="stat-label">Proyectos</div>
                        </div>
                        <div class="text-center">
                            <div class="stat-value">3</div>
                            <div class="stat-label">Equipos</div>
                        </div>
                        <div class="text-center">
                            <div class="stat-value">8</div>
                            <div class="stat-label">Activos</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <div class="d-grid">
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            <i class="bi bi-eye me-1"></i> Ver perfil completo
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Usuario 2 -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm user-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <div class="d-flex align-items-center">
                            <div class="avatar-circle bg-info me-3 text-white">CR</div>
                            <div>
                                <h5 class="card-title mb-0">Ing. Carlos Rodríguez</h5>
                                <span class="badge bg-info">Docente VcM</span>
                                <span class="badge bg-success">Activo</span>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-key me-2"></i>Cambiar contraseña</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-person-x me-2"></i>Desactivar</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="user-details mb-3">
                        <div class="mb-2">
                            <i class="bi bi-envelope text-muted me-2"></i>
                            <span>carlos.rodriguez@ipss.edu.cl</span>
                        </div>
                        <div class="mb-2">
                            <i class="bi bi-briefcase text-muted me-2"></i>
                            <span>Director de Proyectos</span>
                        </div>
                        <div>
                            <i class="bi bi-building text-muted me-2"></i>
                            <span>Instituto Profesional San Sebastián</span>
                        </div>
                    </div>
                    
                    <div class="user-stats d-flex justify-content-around">
                        <div class="text-center">
                            <div class="stat-value">8</div>
                            <div class="stat-label">Proyectos</div>
                        </div>
                        <div class="text-center">
                            <div class="stat-value">2</div>
                            <div class="stat-label">Equipos</div>
                        </div>
                        <div class="text-center">
                            <div class="stat-value">5</div>
                            <div class="stat-label">Activos</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <div class="d-grid">
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            <i class="bi bi-eye me-1"></i> Ver perfil completo
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Usuario 3 -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm user-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <div class="d-flex align-items-center">
                            <div class="avatar-circle bg-success me-3 text-white">AM</div>
                            <div>
                                <h5 class="card-title mb-0">Psic. Ana Morales</h5>
                                <span class="badge bg-success">Docente Cátedra</span>
                                <span class="badge bg-success">Activo</span>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-key me-2"></i>Cambiar contraseña</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-person-x me-2"></i>Desactivar</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="user-details mb-3">
                        <div class="mb-2">
                            <i class="bi bi-envelope text-muted me-2"></i>
                            <span>ana.morales@ipss.edu.cl</span>
                        </div>
                        <div class="mb-2">
                            <i class="bi bi-briefcase text-muted me-2"></i>
                            <span>Coordinadora Social</span>
                        </div>
                        <div>
                            <i class="bi bi-building text-muted me-2"></i>
                            <span>Instituto Profesional San Sebastián</span>
                        </div>
                    </div>
                    
                    <div class="user-stats d-flex justify-content-around">
                        <div class="text-center">
                            <div class="stat-value">5</div>
                            <div class="stat-label">Proyectos</div>
                        </div>
                        <div class="text-center">
                            <div class="stat-value">4</div>
                            <div class="stat-label">Equipos</div>
                        </div>
                        <div class="text-center">
                            <div class="stat-value">3</div>
                            <div class="stat-label">Activos</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <div class="d-grid">
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            <i class="bi bi-eye me-1"></i> Ver perfil completo
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Usuario 4 -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm user-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <div class="d-flex align-items-center">
                            <div class="avatar-circle bg-warning me-3 text-white">JP</div>
                            <div>
                                <h5 class="card-title mb-0">Juan Pérez</h5>
                                <span class="badge bg-warning text-dark">Estudiante</span>
                                <span class="badge bg-success">Activo</span>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-key me-2"></i>Cambiar contraseña</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-person-x me-2"></i>Desactivar</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="user-details mb-3">
                        <div class="mb-2">
                            <i class="bi bi-envelope text-muted me-2"></i>
                            <span>juan.perez@alumnos.ipss.edu.cl</span>
                        </div>
                        <div class="mb-2">
                            <i class="bi bi-book text-muted me-2"></i>
                            <span>Ingeniería en Informática</span>
                        </div>
                        <div>
                            <i class="bi bi-calendar3 text-muted me-2"></i>
                            <span>5° Semestre</span>
                        </div>
                    </div>
                    
                    <div class="user-stats d-flex justify-content-around">
                        <div class="text-center">
                            <div class="stat-value">3</div>
                            <div class="stat-label">Proyectos</div>
                        </div>
                        <div class="text-center">
                            <div class="stat-value">1</div>
                            <div class="stat-label">Equipo</div>
                        </div>
                        <div class="text-center">
                            <div class="stat-value">2</div>
                            <div class="stat-label">Activos</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <div class="d-grid">
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            <i class="bi bi-eye me-1"></i> Ver perfil completo
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Usuario 5 -->
        <div class="col">
            <div class="card h-100 border-0 shadow-sm user-card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <div class="d-flex align-items-center">
                            <div class="avatar-circle bg-secondary me-3 text-white">ED</div>
                            <div>
                                <h5 class="card-title mb-0">Empresa Desarrollo</h5>
                                <span class="badge bg-secondary">Actor Interés</span>
                                <span class="badge bg-success">Activo</span>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-key me-2"></i>Cambiar contraseña</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-person-x me-2"></i>Desactivar</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="user-details mb-3">
                        <div class="mb-2">
                            <i class="bi bi-envelope text-muted me-2"></i>
                            <span>contacto@empresadesarrollo.cl</span>
                        </div>
                        <div class="mb-2">
                            <i class="bi bi-globe text-muted me-2"></i>
                            <span>Empresa Privada</span>
                        </div>
                        <div>
                            <i class="bi bi-geo-alt text-muted me-2"></i>
                            <span>Santiago, Chile</span>
                        </div>
                    </div>
                    
                    <div class="user-stats d-flex justify-content-around">
                        <div class="text-center">
                            <div class="stat-value">4</div>
                            <div class="stat-label">Proyectos</div>
                        </div>
                        <div class="text-center">
                            <div class="stat-value">7</div>
                            <div class="stat-label">Estudiantes</div>
                        </div>
                        <div class="text-center">
                            <div class="stat-value">2</div>
                            <div class="stat-label">Activos</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <div class="d-grid">
                        <a href="#" class="btn btn-outline-primary btn-sm">
                            <i class="bi bi-eye me-1"></i> Ver perfil completo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Vista de lista de usuarios (Tabla) -->
    <div class="card border-0 shadow-sm mb-4" id="list-view" style="display: none;">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="bg-light">
                    <tr>
                        <th scope="col" class="border-0">Usuario</th>
                        <th scope="col" class="border-0">Correo</th>
                        <th scope="col" class="border-0">Rol</th>
                        <th scope="col" class="border-0">Ocupación</th>
                        <th scope="col" class="border-0">Proyectos</th>
                        <th scope="col" class="border-0">Estado</th>
                        <th scope="col" class="border-0">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Usuario 1 -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar-circle bg-primary me-3 text-white">MG</div>
                                <span class="fw-medium">Dra. María González</span>
                            </div>
                        </td>
                        <td>maria.gonzalez@ipss.edu.cl</td>
                        <td><span class="badge bg-primary">Administrador</span></td>
                        <td>Coordinadora de Vinculación</td>
                        <td>12</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>Ver perfil</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-key me-2"></i>Cambiar contraseña</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-person-x me-2"></i>Desactivar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Usuario 2 -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar-circle bg-info me-3 text-white">CR</div>
                                <span class="fw-medium">Ing. Carlos Rodríguez</span>
                            </div>
                        </td>
                        <td>carlos.rodriguez@ipss.edu.cl</td>
                        <td><span class="badge bg-info">Docente VcM</span></td>
                        <td>Director de Proyectos</td>
                        <td>8</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>Ver perfil</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-key me-2"></i>Cambiar contraseña</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-person-x me-2"></i>Desactivar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Usuario 3 -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar-circle bg-success me-3 text-white">AM</div>
                                <span class="fw-medium">Psic. Ana Morales</span>
                            </div>
                        </td>
                        <td>ana.morales@ipss.edu.cl</td>
                        <td><span class="badge bg-success">Docente Cátedra</span></td>
                        <td>Coordinadora Social</td>
                        <td>5</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>Ver perfil</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-key me-2"></i>Cambiar contraseña</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-person-x me-2"></i>Desactivar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Usuario 4 -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar-circle bg-warning me-3 text-white">JP</div>
                                <span class="fw-medium">Juan Pérez</span>
                            </div>
                        </td>
                        <td>juan.perez@alumnos.ipss.edu.cl</td>
                        <td><span class="badge bg-warning text-dark">Estudiante</span></td>
                        <td>Ingeniería en Informática</td>
                        <td>3</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>Ver perfil</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-key me-2"></i>Cambiar contraseña</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-person-x me-2"></i>Desactivar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Usuario 5 -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar-circle bg-secondary me-3 text-white">ED</div>
                                <span class="fw-medium">Empresa Desarrollo</span>
                            </div>
                        </td>
                        <td>contacto@empresadesarrollo.cl</td>
                        <td><span class="badge bg-secondary">Actor Interés</span></td>
                        <td>Empresa Privada</td>
                        <td>4</td>
                        <td><span class="badge bg-success">Activo</span></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>Ver perfil</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Editar</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-key me-2"></i>Cambiar contraseña</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-person-x me-2"></i>Desactivar</a></li>
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
            localStorage.setItem('userViewPreference', 'cards');
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
            localStorage.setItem('userViewPreference', 'list');
        });
        
        // Cargar preferencia guardada del usuario (si existe)
        const savedViewPreference = localStorage.getItem('userViewPreference');
        if (savedViewPreference === 'list') {
            // Simular clic en botón de lista
            listViewBtn.click();
        }
    });
</script>
@endsection

@section('styles')
<style>
    /* Estilos para la página de usuarios */
    .avatar-circle {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.2rem;
    }
    
    .user-card {
        transition: all 0.3s ease;
    }
    
    .user-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
    }
    
    .user-stats {
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        padding-top: 15px;
    }
    
    .stat-value {
        font-size: 1.2rem;
        font-weight: 600;
        color: #0A2342;
    }
    
    .stat-label {
        font-size: 0.8rem;
        color: #6c757d;
    }
    
    .badge {
        font-weight: 500;
        padding: 0.35em 0.65em;
    }
    
    .bg-primary {
        background-color: #0A2342 !important;
    }
    
    .bg-success {
        background-color: #3E5902 !important;
    }
    
    .bg-info {
        background-color: #4C86A8 !important;
    }
    
    .bg-warning {
        background-color: #D9A852 !important;
    }
    
    .text-primary {
        color: #0A2342 !important;
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
</style>
@endsection
