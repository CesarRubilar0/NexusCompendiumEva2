@extends('layouts.app')

@section('title', 'Institutos - Nexus Compendium')

@section('content')
<div class="container">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">
    <div class="page-header">
        <h1>🏢 Gestión de Institutos</h1>
        <p class="subtitle">Administra las instituciones aliadas y colaboradoras</p>
    </div>

    <div class="actions-bar">
        <a href="/institutos/crear" class="btn btn-primary">+ Agregar Instituto</a>
    </div>

    <div class="institutes-grid">
        <div class="institute-card">
            <h3>Hospital Regional de Santiago</h3>
            <p class="institute-type">Institución de Salud</p>
            <p class="institute-description">Centro médico principal para proyectos de salud comunitaria y programas de prevención.</p>
            <div class="institute-meta">
                <span class="badge active">Activo</span>
                <span class="badge">5 Proyectos</span>
            </div>
        </div>

        <div class="institute-card">
            <h3>Municipalidad de Providencia</h3>
            <p class="institute-type">Institución Gubernamental</p>
            <p class="institute-description">Alianza estratégica para desarrollo de programas sociales y culturales en la comuna.</p>
            <div class="institute-meta">
                <span class="badge active">Activo</span>
                <span class="badge">3 Proyectos</span>
            </div>
        </div>

        <div class="institute-card">
            <h3>Fundación Educación para Todos</h3>
            <p class="institute-type">Organización Sin Fines de Lucro</p>
            <p class="institute-description">Colaboración en programas educativos y alfabetización digital para comunidades vulnerables.</p>
            <div class="institute-meta">
                <span class="badge active">Activo</span>
                <span class="badge">2 Proyectos</span>
            </div>
        </div>
    </div>
</div>


@endsection
