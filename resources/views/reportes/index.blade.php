@extends('layouts.app')

@section('title', 'Reportes y Estadísticas - Nexus Compendium')

@section('content')
<div class="container py-4">
    <!-- Encabezado y acciones principales -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold mb-1"><i class="bi bi-bar-chart-line text-primary me-2"></i>Reportes y Estadísticas</h1>
            <p class="text-muted">Visualiza métricas, genera informes y analiza el impacto de los proyectos de Vinculación con el Medio</p>
        </div>
        <div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reportModal">
                <i class="bi bi-file-earmark-arrow-down me-1"></i> Generar Reporte
            </button>
        </div>
    </div>

    <!-- Filtros y período de tiempo -->
    <div class="card mb-4 border-0 shadow-sm">
        <div class="card-body p-3">
            <div class="row g-3">
                <div class="col-md-4">
                    <label for="date-range" class="form-label">Período</label>
                    <select class="form-select" id="date-range">
                        <option value="current-month">Mes actual</option>
                        <option value="last-month">Mes anterior</option>
                        <option value="current-quarter">Trimestre actual</option>
                        <option value="last-quarter">Trimestre anterior</option>
                        <option value="current-year" selected>Año actual (2024)</option>
                        <option value="last-year">Año anterior (2023)</option>
                        <option value="custom">Personalizado</option>
                    </select>
                </div>
                <div class="col-md-6 d-none" id="custom-date-range">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="date-from" class="form-label">Desde</label>
                            <input type="date" class="form-control" id="date-from">
                        </div>
                        <div class="col-md-6">
                            <label for="date-to" class="form-label">Hasta</label>
                            <input type="date" class="form-control" id="date-to">
                        </div>
                    </div>
                </div>
                <div class="col-md-2 d-flex align-items-end">
                    <button class="btn btn-outline-secondary w-100">
                        <i class="bi bi-arrow-repeat me-1"></i> Actualizar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Resumen general en tarjetas -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card border-0 bg-light shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="text-muted mb-1">Proyectos Activos</h6>
                            <h3 class="mb-0">23</h3>
                        </div>
                        <div class="rounded-circle bg-primary bg-opacity-10 p-2">
                            <i class="bi bi-kanban text-primary fs-4"></i>
                        </div>
                    </div>
                    <div class="mt-3 small">
                        <span class="text-success">
                            <i class="bi bi-arrow-up me-1"></i>18%
                        </span> 
                        <span class="text-muted">vs período anterior</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 bg-light shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="text-muted mb-1">Estudiantes Participantes</h6>
                            <h3 class="mb-0">146</h3>
                        </div>
                        <div class="rounded-circle bg-success bg-opacity-10 p-2">
                            <i class="bi bi-people text-success fs-4"></i>
                        </div>
                    </div>
                    <div class="mt-3 small">
                        <span class="text-success">
                            <i class="bi bi-arrow-up me-1"></i>12%
                        </span> 
                        <span class="text-muted">vs período anterior</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 bg-light shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="text-muted mb-1">Actores de Interés</h6>
                            <h3 class="mb-0">34</h3>
                        </div>
                        <div class="rounded-circle bg-warning bg-opacity-10 p-2">
                            <i class="bi bi-building text-warning fs-4"></i>
                        </div>
                    </div>
                    <div class="mt-3 small">
                        <span class="text-success">
                            <i class="bi bi-arrow-up me-1"></i>8%
                        </span> 
                        <span class="text-muted">vs período anterior</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 bg-light shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h6 class="text-muted mb-1">Proyectos Completados</h6>
                            <h3 class="mb-0">18</h3>
                        </div>
                        <div class="rounded-circle bg-info bg-opacity-10 p-2">
                            <i class="bi bi-check-circle text-info fs-4"></i>
                        </div>
                    </div>
                    <div class="mt-3 small">
                        <span class="text-success">
                            <i class="bi bi-arrow-up me-1"></i>22%
                        </span> 
                        <span class="text-muted">vs período anterior</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Secciones de reportes -->
    <ul class="nav nav-tabs mb-4" id="reportTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="true">
                <i class="bi bi-grid me-1"></i> Resumen General
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="projects-tab" data-bs-toggle="tab" data-bs-target="#projects" type="button" role="tab" aria-controls="projects" aria-selected="false">
                <i class="bi bi-kanban me-1"></i> Proyectos
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="stakeholders-tab" data-bs-toggle="tab" data-bs-target="#stakeholders" type="button" role="tab" aria-controls="stakeholders" aria-selected="false">
                <i class="bi bi-building me-1"></i> Actores de Interés
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="impact-tab" data-bs-toggle="tab" data-bs-target="#impact" type="button" role="tab" aria-controls="impact" aria-selected="false">
                <i class="bi bi-graph-up me-1"></i> Análisis de Impacto
            </button>
        </li>
    </ul>

    <!-- Contenido de las pestañas -->
    <div class="tab-content" id="reportTabsContent">
        <!-- Pestaña: Resumen General -->
        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
            <div class="row">
                <!-- Proyectos por estado -->
                <div class="col-md-6 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-white border-bottom-0 pb-0">
                            <h5 class="card-title mb-0"><i class="bi bi-pie-chart-fill text-primary me-2"></i>Proyectos por Estado</h5>
                        </div>
                        <div class="card-body">
                            <div class="chart-container" style="position: relative; height: 300px;">
                                <canvas id="projectsByStatusChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Proyectos por área académica -->
                <div class="col-md-6 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-white border-bottom-0 pb-0">
                            <h5 class="card-title mb-0"><i class="bi bi-bar-chart-fill text-primary me-2"></i>Proyectos por Área Académica</h5>
                        </div>
                        <div class="card-body">
                            <div class="chart-container" style="position: relative; height: 300px;">
                                <canvas id="projectsByAreaChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Evolución de proyectos -->
                <div class="col-md-8 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-white border-bottom-0 pb-0">
                            <h5 class="card-title mb-0"><i class="bi bi-graph-up-arrow text-primary me-2"></i>Evolución de Proyectos</h5>
                        </div>
                        <div class="card-body">
                            <div class="chart-container" style="position: relative; height: 300px;">
                                <canvas id="projectsEvolutionChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Principales actores de interés -->
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-white border-bottom-0 pb-0">
                            <h5 class="card-title mb-0"><i class="bi bi-building-fill-check text-primary me-2"></i>Principales Actores</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">Actor</th>
                                            <th scope="col" class="text-center">Proyectos</th>
                                            <th scope="col" class="text-center">Estudiantes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Municipalidad Isla de Maipo</td>
                                            <td class="text-center">5</td>
                                            <td class="text-center">18</td>
                                        </tr>
                                        <tr>
                                            <td>Hospital Regional</td>
                                            <td class="text-center">4</td>
                                            <td class="text-center">16</td>
                                        </tr>
                                        <tr>
                                            <td>TechSA</td>
                                            <td class="text-center">3</td>
                                            <td class="text-center">12</td>
                                        </tr>
                                        <tr>
                                            <td>Fundación Futuro Verde</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">9</td>
                                        </tr>
                                        <tr>
                                            <td>Centro Adulto Mayor</td>
                                            <td class="text-center">2</td>
                                            <td class="text-center">8</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Pestaña: Proyectos -->
        <div class="tab-pane fade" id="projects" role="tabpanel" aria-labelledby="projects-tab">
            <div class="row">
                <!-- Cumplimiento de plazos -->
                <div class="col-md-6 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-white border-bottom-0 pb-0">
                            <h5 class="card-title mb-0"><i class="bi bi-clock-history text-primary me-2"></i>Cumplimiento de Plazos</h5>
                        </div>
                        <div class="card-body">
                            <div class="chart-container" style="position: relative; height: 300px;">
                                <canvas id="deadlinesChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Satisfacción de actores -->
                <div class="col-md-6 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-white border-bottom-0 pb-0">
                            <h5 class="card-title mb-0"><i class="bi bi-emoji-smile text-primary me-2"></i>Satisfacción de Actores</h5>
                        </div>
                        <div class="card-body">
                            <div class="chart-container" style="position: relative; height: 300px;">
                                <canvas id="satisfactionChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Tabla de proyectos -->
                <div class="col-md-12 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0"><i class="bi bi-list-check text-primary me-2"></i>Listado de Proyectos</h5>
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-download me-1"></i> Exportar Excel
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Área</th>
                                            <th scope="col">Responsable</th>
                                            <th scope="col">Actor Interés</th>
                                            <th scope="col">Inicio</th>
                                            <th scope="col">Fin</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Progreso</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Proyecto de Salud Comunitaria</td>
                                            <td>Informática</td>
                                            <td>María González</td>
                                            <td>Hospital Regional</td>
                                            <td>15/03/2024</td>
                                            <td>30/06/2024</td>
                                            <td><span class="badge bg-success">Activo</span></td>
                                            <td>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Capacitación Digital</td>
                                            <td>Salud</td>
                                            <td>Carlos Martínez</td>
                                            <td>Centro Adulto Mayor</td>
                                            <td>01/04/2024</td>
                                            <td>15/07/2024</td>
                                            <td><span class="badge bg-warning text-dark">Planificación</span></td>
                                            <td>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Apoyo Nutricional Escolar</td>
                                            <td>Educación</td>
                                            <td>Ana Rojas</td>
                                            <td>Escuela Básica El Amanecer</td>
                                            <td>10/09/2023</td>
                                            <td>20/12/2023</td>
                                            <td><span class="badge bg-secondary">Completado</span></td>
                                            <td>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Plataforma Ciudadana Municipal</td>
                                            <td>Administración</td>
                                            <td>Felipe Duarte</td>
                                            <td>Municipalidad Isla de Maipo</td>
                                            <td>24/03/2024</td>
                                            <td>31/07/2024</td>
                                            <td><span class="badge bg-success">Activo</span></td>
                                            <td>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sistema de Monitoreo Ambiental</td>
                                            <td>Informática</td>
                                            <td>Ricardo Soto</td>
                                            <td>Fundación Futuro Verde</td>
                                            <td>05/02/2024</td>
                                            <td>15/05/2024</td>
                                            <td><span class="badge bg-success">Activo</span></td>
                                            <td>
                                                <div class="progress" style="height: 5px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Pestaña: Actores de Interés -->
        <div class="tab-pane fade" id="stakeholders" role="tabpanel" aria-labelledby="stakeholders-tab">
            <div class="row">
                <!-- Distribución por tipo -->
                <div class="col-md-6 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-white border-bottom-0 pb-0">
                            <h5 class="card-title mb-0"><i class="bi bi-pie-chart text-primary me-2"></i>Distribución por Tipo</h5>
                        </div>
                        <div class="card-body">
                            <div class="chart-container" style="position: relative; height: 300px;">
                                <canvas id="stakeholdersByTypeChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Distribución geográfica -->
                <div class="col-md-6 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-white border-bottom-0 pb-0">
                            <h5 class="card-title mb-0"><i class="bi bi-geo-alt text-primary me-2"></i>Distribución Geográfica</h5>
                        </div>
                        <div class="card-body">
                            <div class="chart-container" style="position: relative; height: 300px;">
                                <canvas id="stakeholdersByRegionChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Mapa de conexiones -->
                <div class="col-md-12 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white border-bottom-0 pb-0">
                            <h5 class="card-title mb-0"><i class="bi bi-diagram-3 text-primary me-2"></i>Mapa de Conexiones</h5>
                        </div>
                        <div class="card-body">
                            <div class="chart-container" style="position: relative; height: 400px;">
                                <div class="d-flex align-items-center justify-content-center h-100 text-muted">
                                    <p><i class="bi bi-map fs-1 d-block text-center mb-3"></i>Aquí se mostraría un mapa interactivo de Chile con la distribución de actores de interés</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Pestaña: Análisis de Impacto -->
        <div class="tab-pane fade" id="impact" role="tabpanel" aria-labelledby="impact-tab">
            <div class="row">
                <!-- ODS Impactados -->
                <div class="col-md-6 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-white border-bottom-0 pb-0">
                            <h5 class="card-title mb-0"><i class="bi bi-globe text-primary me-2"></i>Objetivos de Desarrollo Sostenible</h5>
                        </div>
                        <div class="card-body">
                            <div class="chart-container" style="position: relative; height: 300px;">
                                <canvas id="odsImpactChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Beneficiarios por tipo -->
                <div class="col-md-6 mb-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-header bg-white border-bottom-0 pb-0">
                            <h5 class="card-title mb-0"><i class="bi bi-people-fill text-primary me-2"></i>Beneficiarios por Tipo</h5>
                        </div>
                        <div class="card-body">
                            <div class="chart-container" style="position: relative; height: 300px;">
                                <canvas id="beneficiariesChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Mapa de calor de impacto -->
                <div class="col-md-12 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-header bg-white border-bottom-0 pb-0">
                            <h5 class="card-title mb-0"><i class="bi bi-grid-3x3 text-primary me-2"></i>Matriz de Impacto Social</h5>
                        </div>
                        <div class="card-body">
                            <div class="chart-container" style="position: relative; height: 400px;">
                                <div class="d-flex align-items-center justify-content-center h-100 text-muted">
                                    <p><i class="bi bi-grid-3x3-gap fs-1 d-block text-center mb-3"></i>Aquí se mostraría una matriz de calor que correlaciona tipo de proyecto con áreas de impacto social</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal para generar reporte personalizado -->
<div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="reportModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="reportModalLabel"><i class="bi bi-file-earmark-text me-2"></i>Generar Reporte Personalizado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="report-name" class="form-label">Nombre del reporte</label>
                        <input type="text" class="form-control" id="report-name" placeholder="Ej. Informe Trimestral de Proyectos">
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="report-date-from" class="form-label">Período desde</label>
                            <input type="date" class="form-control" id="report-date-from">
                        </div>
                        <div class="col-md-6">
                            <label for="report-date-to" class="form-label">Período hasta</label>
                            <input type="date" class="form-control" id="report-date-to">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tipo de reporte</label>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="check-projects" checked>
                                    <label class="form-check-label" for="check-projects">
                                        Proyectos
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="check-stakeholders" checked>
                                    <label class="form-check-label" for="check-stakeholders">
                                        Actores de Interés
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="check-students">
                                    <label class="form-check-label" for="check-students">
                                        Estudiantes
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Elementos a incluir</label>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="check-tables" checked>
                                    <label class="form-check-label" for="check-tables">
                                        Tablas de datos
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="check-charts" checked>
                                    <label class="form-check-label" for="check-charts">
                                        Gráficos
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="check-summary">
                                    <label class="form-check-label" for="check-summary">
                                        Resumen ejecutivo
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="report-format" class="form-label">Formato de salida</label>
                        <select class="form-select" id="report-format">
                            <option value="pdf" selected>PDF</option>
                            <option value="excel">Excel</option>
                            <option value="word">Word</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">
                    <i class="bi bi-file-earmark-arrow-down me-1"></i> Generar Reporte
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mostrar/ocultar fechas personalizadas
        document.getElementById('date-range').addEventListener('change', function() {
            const customDateRange = document.getElementById('custom-date-range');
            if (this.value === 'custom') {
                customDateRange.classList.remove('d-none');
            } else {
                customDateRange.classList.add('d-none');
            }
        });
        
        // Configuración de colores
        const colors = {
            primary: '#0A2342',
            success: '#3E5902',
            warning: '#D9A852',
            secondary: '#6B7280',
            info: '#4C86A8',
            danger: '#DC3545',
            light: '#F5F5F5'
        };
        
        // Gráfico: Proyectos por Estado
        const projectsByStatusCtx = document.getElementById('projectsByStatusChart').getContext('2d');
        new Chart(projectsByStatusCtx, {
            type: 'pie',
            data: {
                labels: ['Activos', 'En Planificación', 'Completados', 'Archivados'],
                datasets: [{
                    data: [23, 8, 18, 4],
                    backgroundColor: [colors.success, colors.warning, colors.secondary, colors.info],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right'
                    }
                }
            }
        });
        
        // Gráfico: Proyectos por Área Académica
        const projectsByAreaCtx = document.getElementById('projectsByAreaChart').getContext('2d');
        new Chart(projectsByAreaCtx, {
            type: 'bar',
            data: {
                labels: ['Informática', 'Administración', 'Salud', 'Educación', 'Diseño', 'Contabilidad', 'Otras'],
                datasets: [{
                    label: 'Proyectos',
                    data: [15, 12, 8, 7, 5, 4, 2],
                    backgroundColor: colors.primary,
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        
        // Gráfico: Evolución de Proyectos
        const projectsEvolutionCtx = document.getElementById('projectsEvolutionChart').getContext('2d');
        new Chart(projectsEvolutionCtx, {
            type: 'line',
            data: {
                labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                datasets: [{
                    label: 'Proyectos Activos',
                    data: [18, 20, 22, 21, 23, 24, 23, 25, 24, 26, 27, 23],
                    borderColor: colors.success,
                    backgroundColor: 'rgba(62, 89, 2, 0.1)',
                    fill: true,
                    tension: 0.4
                }, {
                    label: 'Proyectos Completados',
                    data: [12, 13, 14, 14, 15, 15, 16, 16, 17, 17, 18, 18],
                    borderColor: colors.secondary,
                    borderDash: [5, 5],
                    fill: false,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        
        // Gráfico: Cumplimiento de Plazos
        const deadlinesCtx = document.getElementById('deadlinesChart').getContext('2d');
        new Chart(deadlinesCtx, {
            type: 'doughnut',
            data: {
                labels: ['A tiempo', 'Con retraso leve', 'Con retraso significativo'],
                datasets: [{
                    data: [68, 24, 8],
                    backgroundColor: [colors.success, colors.warning, colors.danger],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right'
                    }
                }
            }
        });
        
        // Gráfico: Satisfacción de Actores
        const satisfactionCtx = document.getElementById('satisfactionChart').getContext('2d');
        new Chart(satisfactionCtx, {
            type: 'bar',
            data: {
                labels: ['Muy satisfecho', 'Satisfecho', 'Neutral', 'Insatisfecho', 'Muy insatisfecho'],
                datasets: [{
                    label: 'Nivel de satisfacción',
                    data: [42, 28, 15, 8, 2],
                    backgroundColor: [
                        'rgba(62, 89, 2, 0.8)',
                        'rgba(62, 89, 2, 0.6)',
                        'rgba(217, 168, 82, 0.7)',
                        'rgba(220, 53, 69, 0.6)',
                        'rgba(220, 53, 69, 0.8)'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                indexAxis: 'y',
                scales: {
                    x: {
                        beginAtZero: true
                    }
                }
            }
        });
        
        // Gráfico: Distribución de Actores por Tipo
        const stakeholdersByTypeCtx = document.getElementById('stakeholdersByTypeChart').getContext('2d');
        new Chart(stakeholdersByTypeCtx, {
            type: 'pie',
            data: {
                labels: ['Municipalidades', 'Empresas', 'ONGs', 'Centros de Salud', 'Centros Educativos', 'Otros'],
                datasets: [{
                    data: [8, 12, 6, 4, 5, 3],
                    backgroundColor: [
                        colors.primary,
                        colors.danger,
                        colors.success,
                        colors.info,
                        colors.warning,
                        colors.secondary
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right'
                    }
                }
            }
        });
        
        // Gráfico: Distribución Geográfica
        const stakeholdersByRegionCtx = document.getElementById('stakeholdersByRegionChart').getContext('2d');
        new Chart(stakeholdersByRegionCtx, {
            type: 'bar',
            data: {
                labels: ['Metropolitana', 'Valparaíso', 'Biobío', 'Maule', 'O\'Higgins', 'Otras regiones'],
                datasets: [{
                    label: 'Actores de Interés',
                    data: [18, 7, 5, 3, 2, 3],
                    backgroundColor: colors.info,
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        
        // Gráfico: ODS Impactados
        const odsImpactCtx = document.getElementById('odsImpactChart').getContext('2d');
        new Chart(odsImpactCtx, {
            type: 'radar',
            data: {
                labels: [
                    'ODS 1: Fin de la pobreza',
                    'ODS 3: Salud y bienestar',
                    'ODS 4: Educación de calidad',
                    'ODS 8: Trabajo decente',
                    'ODS 9: Industria e innovación',
                    'ODS 11: Ciudades sostenibles',
                    'ODS 13: Acción por el clima'
                ],
                datasets: [{
                    label: 'Proyectos relacionados',
                    data: [5, 12, 15, 8, 10, 7, 6],
                    backgroundColor: 'rgba(10, 35, 66, 0.2)',
                    borderColor: colors.primary,
                    pointBackgroundColor: colors.primary,
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    r: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 5
                        }
                    }
                }
            }
        });
        
        // Gráfico: Beneficiarios por Tipo
        const beneficiariesCtx = document.getElementById('beneficiariesChart').getContext('2d');
        new Chart(beneficiariesCtx, {
            type: 'horizontalBar',
            type: 'bar',
            data: {
                labels: ['Niños/as', 'Jóvenes', 'Adultos', 'Adultos mayores', 'Comunidades indígenas', 'Personas con discapacidad'],
                datasets: [{
                    label: 'Beneficiarios directos',
                    data: [850, 1200, 1800, 650, 320, 480],
                    backgroundColor: colors.success,
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                indexAxis: 'y',
                scales: {
                    x: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>
@endsection

@section('styles')
<style>
    /* Estilos para la página de reportes */
    .card {
        transition: all 0.3s ease;
    }
    
    .card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1) !important;
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
    
    .table th {
        font-weight: 600;
        color: #0A2342;
    }
    
    .progress {
        height: 5px;
        border-radius: 10px;
    }
    
    .chart-container {
        position: relative;
        margin: auto;
    }
    
    .badge {
        font-weight: 500;
        padding: 0.4em 0.8em;
    }
    
    .bg-success {
        background-color: #3E5902 !important;
    }
    
    .bg-warning {
        background-color: #D9A852 !important;
    }
    
    .bg-primary {
        background-color: #0A2342 !important;
    }
    
    .text-primary {
        color: #0A2342 !important;
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
    
    .modal-header {
        background-color: #f8f9fa;
        border-bottom: 1px solid #e9ecef;
    }
    
    .form-check-input:checked {
        background-color: #3E5902;
        border-color: #3E5902;
    }
</style>
@endsection