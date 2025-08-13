@extends('layouts.app')

@section('title', 'Dashboard - Nexus Compendium')

@section('content')
<div class="container">
    <div class="dashboard-header">
        <h1>📊 Panel de Control</h1>
        <p class="subtitle">Dashboard de Nexus Compendium</p>
    </div>
        <link rel="stylesheet" href="css/styles.css">
  

    <!-- Estadísticas Principales -->
    <div class="dashboard-stats">
        <div class="stat-card">
            <div class="stat-icon projects">📊</div>
            <div class="stat-content">
                <h3>12</h3>
                <p>Proyectos Activos</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon students">👥</div>
            <div class="stat-content">
                <h3>48</h3>
                <p>Estudiantes Participando</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon organizations">🏢</div>
            <div class="stat-content">
                <h3>8</h3>
                <p>Organizaciones Aliadas</p>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon completed">✅</div>
            <div class="stat-content">
                <h3>25</h3>
                <p>Proyectos Completados</p>
            </div>
        </div>
    </div>

    <div class="dashboard-content">
        <div class="main-panel">
            <div class="panel-card">
                <h2>Proyectos Recientes</h2>
                <div class="recent-projects">
                    <div class="project-item">
                        <div class="project-info">
                            <h4>Salud Comunitaria Rural</h4>
                            <p>Última actualización: hace 2 horas</p>
                        </div>
                        <span class="status status-active">Activo</span>
                    </div>
                    <div class="project-item">
                        <div class="project-info">
                            <h4>Capacitación Digital</h4>
                            <p>Última actualización: hace 1 día</p>
                        </div>
                        <span class="status status-planning">Planificación</span>
                    </div>
                    <div class="project-item">
                        <div class="project-info">
                            <h4>Apoyo Nutricional Escolar</h4>
                            <p>Última actualización: hace 3 días</p>
                        </div>
                        <span class="status status-completed">Completado</span>
                    </div>
                </div>
                <a href="/proyectos" class="view-all-link">Ver todos los proyectos →</a>
            </div>

            <div class="panel-card">
                <h2>Actividad Reciente</h2>
                <div class="activity-feed">
                    <div class="activity-item">
                        <div class="activity-icon">📝</div>
                        <div class="activity-content">
                            <p><strong>María González</strong> actualizó el proyecto "Salud Comunitaria"</p>
                            <span class="activity-time">hace 2 horas</span>
                        </div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-icon">👤</div>
                        <div class="activity-content">
                            <p><strong>Carlos López</strong> se unió al proyecto "Capacitación Digital"</p>
                            <span class="activity-time">hace 5 horas</span>
                        </div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-icon">✅</div>
                        <div class="activity-content">
                            <p>Proyecto <strong>"Apoyo Nutricional"</strong> marcado como completado</p>
                            <span class="activity-time">hace 1 día</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar-panel">
            <div class="panel-card">
                <h3>Acciones Rápidas</h3>
                <div class="quick-actions">
                    <a href="/proyectos/crear" class="action-btn">
                        <span class="action-icon">➕</span>
                        Crear Proyecto
                    </a>
                    <a href="/proyectos" class="action-btn">
                        <span class="action-icon">📋</span>
                        Ver Proyectos
                    </a>
                    <a href="#" class="action-btn">
                        <span class="action-icon">📊</span>
                        Reportes
                    </a>
                    <a href="#" class="action-btn">
                        <span class="action-icon">⚙️</span>
                        Configuración
                    </a>
                </div>
            </div>

            <div class="panel-card">
                <h3>Próximas Fechas</h3>
                <div class="upcoming-dates">
                    <div class="date-item">
                        <div class="date-day">15</div>
                        <div class="date-info">
                            <p><strong>Reunión VcM</strong></p>
                            <span>Agosto 2025</span>
                        </div>
                    </div>
                    <div class="date-item">
                        <div class="date-day">22</div>
                        <div class="date-info">
                            <p><strong>Entrega Informe</strong></p>
                            <span>Agosto 2025</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
