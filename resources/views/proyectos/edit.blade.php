@extends('layouts.app')

@section('title', 'Editar Proyecto - Nexus Compendium')

@section('content')
<div class="container">
    <div class="page-header mb-4">
        <div class="d-flex align-items-center">
            <i class="bi bi-pencil-square fs-1 text-primary me-3"></i>
            <div>
                <h1 class="fw-bold">Editar Proyecto</h1>
                <p class="text-muted">Modifique la información del proyecto de Vinculación con el Medio</p>
            </div>
        </div>
    </div>

    <!-- Breadcrumb de navegación -->
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/proyectos') }}" class="text-decoration-none">Proyectos</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/proyectos/'.$id) }}" class="text-decoration-none">{{ $id }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar</li>
        </ol>
    </nav>

    <form class="project-form needs-validation" action="/proyectos/{{ $id }}" method="POST" novalidate>
        @csrf
        @method('PUT')
        
        <!-- Información del Proyecto -->
        <div class="card mb-4 border-hover-animation shadow-sm">
            <div class="card-header bg-white">
                <h5 class="card-title mb-0">
                    <i class="bi bi-file-earmark-text text-primary me-2"></i>
                    Información del Proyecto
                </h5>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-12">
                        <label for="nombre_proyecto" class="form-label fw-semibold">Nombre del proyecto *</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-bookmark-star"></i></span>
                            <input type="text" class="form-control" id="nombre_proyecto" name="nombre_proyecto" required value="Proyecto de Salud Comunitaria">
                            <div class="invalid-feedback">Por favor ingrese el nombre del proyecto.</div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="area_academica" class="form-label fw-semibold">Área académica / Carrera *</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-mortarboard"></i></span>
                            <select class="form-select" id="area_academica" name="area_academica" required>
                                <option value="" disabled>Seleccione un área académica</option>
                                <option value="informatica" selected>Informática</option>
                                <option value="administracion">Administración de Empresas</option>
                                <option value="contabilidad">Contabilidad</option>
                                <option value="marketing">Marketing Digital</option>
                                <option value="diseno">Diseño Gráfico</option>
                                <option value="turismo">Turismo</option>
                                <option value="salud">Salud</option>
                                <option value="ingenieria">Ingeniería</option>
                                <option value="educacion">Educación</option>
                                <option value="otra">Otra</option>
                            </select>
                            <div class="invalid-feedback">Por favor seleccione un área académica.</div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="estado_proyecto" class="form-label fw-semibold">Estado del proyecto *</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-check2-circle"></i></span>
                            <select class="form-select" id="estado_proyecto" name="estado_proyecto" required>
                                <option value="" disabled>Seleccione el estado</option>
                                <option value="activo" selected>Activo</option>
                                <option value="planificacion">En Planificación</option>
                                <option value="completado">Completado</option>
                                <option value="archivado">Archivado</option>
                            </select>
                            <div class="invalid-feedback">Por favor seleccione el estado actual.</div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="fecha_inicio" class="form-label fw-semibold">Fecha de inicio *</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-calendar-event"></i></span>
                            <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required value="2025-03-15">
                            <div class="invalid-feedback">Por favor seleccione una fecha de inicio.</div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="fecha_fin" class="form-label fw-semibold">Fecha estimada de finalización *</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-calendar-check"></i></span>
                            <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required value="2025-11-15">
                            <div class="invalid-feedback">Por favor seleccione una fecha estimada de finalización.</div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="responsable" class="form-label fw-semibold">Responsable del proyecto *</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                            <input type="text" class="form-control" id="responsable" name="responsable" required value="María González">
                            <div class="invalid-feedback">Por favor ingrese el nombre del responsable.</div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="correo_responsable" class="form-label fw-semibold">Correo del responsable *</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control" id="correo_responsable" name="correo_responsable" required value="maria.gonzalez@email.com">
                            <div class="invalid-feedback">Por favor ingrese un correo electrónico válido.</div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="stakeholders" class="form-label fw-semibold">Stakeholders clave *</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-people"></i></span>
                            <input type="text" class="form-control" id="stakeholders" name="stakeholders" required value="Centro de Salud Rural">
                            <div class="invalid-feedback">Por favor ingrese los stakeholders clave.</div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="progreso" class="form-label fw-semibold">Progreso actual (%) *</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-graph-up"></i></span>
                            <input type="number" class="form-control" id="progreso" name="progreso" min="0" max="100" required value="65">
                            <span class="input-group-text">%</span>
                            <div class="invalid-feedback">Por favor ingrese el progreso del proyecto (0-100%).</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Alcance del Proyecto -->
        <div class="card mb-4 border-hover-animation shadow-sm">
            <div class="card-header bg-white">
                <h5 class="card-title mb-0">
                    <i class="bi bi-bullseye text-primary me-2"></i>
                    Alcance del Proyecto
                </h5>
            </div>
            <div class="card-body">
                <p class="text-muted mb-3">El alcance del proyecto define los límites y objetivos clave que se deben cumplir. Se describen las funcionalidades principales y restricciones asociadas al desarrollo.</p>
                
                <div class="row g-3">
                    <div class="col-md-12">
                        <label for="descripcion_general" class="form-label fw-semibold">Descripción general del proyecto *</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-card-text"></i></span>
                            <textarea class="form-control" id="descripcion_general" name="descripcion_general" rows="3" required>Este proyecto tiene como objetivo implementar un programa integral de salud preventiva en comunidades rurales de la región. El enfoque principal es mejorar el acceso a servicios de salud básicos y promover hábitos saludables entre la población.</textarea>
                            <div class="invalid-feedback">Por favor ingrese una descripción general del proyecto.</div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <label for="funcionalidades_principales" class="form-label fw-semibold">Funcionalidades principales *</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-list-check"></i></span>
                            <textarea class="form-control" id="funcionalidades_principales" name="funcionalidades_principales" rows="3" required>- Establecer puntos de atención básica en salud
- Capacitar a promotores de salud comunitarios
- Implementar programas de educación nutricional
- Desarrollar campañas de prevención de enfermedades</textarea>
                            <div class="invalid-feedback">Por favor ingrese las funcionalidades principales.</div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <label for="restricciones" class="form-label fw-semibold">Restricciones o consideraciones técnicas</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-exclamation-triangle"></i></span>
                            <textarea class="form-control" id="restricciones" name="restricciones" rows="3">- Acceso limitado a internet en zonas rurales
- Restricciones de presupuesto para equipamiento médico
- Necesidad de compatibilidad con sistemas existentes del Ministerio de Salud</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Historias de Usuario -->
        <div class="card mb-4 border-hover-animation shadow-sm">
            <div class="card-header bg-white">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">
                        <i class="bi bi-person-lines-fill text-primary me-2"></i>
                        Historias de Usuario
                    </h5>
                    <button type="button" class="btn btn-success btn-sm add-user-story">
                        <i class="bi bi-plus-circle me-1"></i> Agregar Historia
                    </button>
                </div>
            </div>
            <div class="card-body">
                <p class="text-muted mb-3">Las historias de usuario describen las necesidades del usuario final en un formato claro y conciso:</p>
                <p class="bg-light p-2 rounded mb-4"><strong>Como</strong> [tipo de usuario], <strong>quiero</strong> [acción o funcionalidad] <strong>para</strong> [objetivo o beneficio].</p>
                
                <div id="user-stories-container">
                    <!-- Historia de usuario #1 (precargada) -->
                    <div class="user-story border rounded p-3 mb-3 position-relative">
                        <div class="position-absolute top-0 end-0 d-flex">
                            <span class="badge bg-primary m-2">Historia #1</span>
                            <button type="button" class="btn btn-sm btn-danger m-2 remove-story">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                        
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label fw-semibold">Como: <small class="text-muted">(tipo de usuario)</small> *</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" class="form-control" name="historias[0][como]" required value="Promotor de salud comunitario">
                                    <div class="invalid-feedback">Por favor complete este campo.</div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <label class="form-label fw-semibold">Quiero: <small class="text-muted">(acción o funcionalidad)</small> *</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lightbulb"></i></span>
                                    <input type="text" class="form-control" name="historias[0][quiero]" required value="registrar información básica de salud de los pacientes">
                                    <div class="invalid-feedback">Por favor complete este campo.</div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <label class="form-label fw-semibold">Para: <small class="text-muted">(objetivo o beneficio)</small> *</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-trophy"></i></span>
                                    <input type="text" class="form-control" name="historias[0][para]" required value="dar seguimiento a sus condiciones de salud y derivarlos cuando sea necesario">
                                    <div class="invalid-feedback">Por favor complete este campo.</div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <label class="form-label fw-semibold">Criterios de aceptación:</label>
                                <div class="criterios-container">
                                    <div class="input-group mb-2">
                                        <span class="input-group-text"><i class="bi bi-check-circle"></i></span>
                                        <input type="text" class="form-control" name="historias[0][criterios][]" value="El sistema debe permitir registrar datos personales básicos (nombre, edad, sexo)">
                                        <button type="button" class="btn btn-outline-primary add-criterio">
                                            <i class="bi bi-plus-lg"></i>
                                        </button>
                                    </div>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text"><i class="bi bi-check-circle"></i></span>
                                        <input type="text" class="form-control" name="historias[0][criterios][]" value="Debe permitir registrar signos vitales como presión arterial, pulso y temperatura">
                                        <button type="button" class="btn btn-outline-danger remove-criterio">
                                            <i class="bi bi-dash-lg"></i>
                                        </button>
                                    </div>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text"><i class="bi bi-check-circle"></i></span>
                                        <input type="text" class="form-control" name="historias[0][criterios][]" value="Debe funcionar sin conexión a internet y sincronizarse cuando haya conexión">
                                        <button type="button" class="btn btn-outline-danger remove-criterio">
                                            <i class="bi bi-dash-lg"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Historia de usuario #2 (precargada) -->
                    <div class="user-story border rounded p-3 mb-3 position-relative">
                        <div class="position-absolute top-0 end-0 d-flex">
                            <span class="badge bg-primary m-2">Historia #2</span>
                            <button type="button" class="btn btn-sm btn-danger m-2 remove-story">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                        
                        <div class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label fw-semibold">Como: <small class="text-muted">(tipo de usuario)</small> *</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" class="form-control" name="historias[1][como]" required value="Profesional de salud">
                                    <div class="invalid-feedback">Por favor complete este campo.</div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <label class="form-label fw-semibold">Quiero: <small class="text-muted">(acción o funcionalidad)</small> *</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lightbulb"></i></span>
                                    <input type="text" class="form-control" name="historias[1][quiero]" required value="acceder a reportes de atenciones por zona geográfica">
                                    <div class="invalid-feedback">Por favor complete este campo.</div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <label class="form-label fw-semibold">Para: <small class="text-muted">(objetivo o beneficio)</small> *</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-trophy"></i></span>
                                    <input type="text" class="form-control" name="historias[1][para]" required value="identificar patrones de salud y planificar intervenciones específicas">
                                    <div class="invalid-feedback">Por favor complete este campo.</div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <label class="form-label fw-semibold">Criterios de aceptación:</label>
                                <div class="criterios-container">
                                    <div class="input-group mb-2">
                                        <span class="input-group-text"><i class="bi bi-check-circle"></i></span>
                                        <input type="text" class="form-control" name="historias[1][criterios][]" value="El sistema debe generar reportes por comunidad, grupo etario y tipo de atención">
                                        <button type="button" class="btn btn-outline-primary add-criterio">
                                            <i class="bi bi-plus-lg"></i>
                                        </button>
                                    </div>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text"><i class="bi bi-check-circle"></i></span>
                                        <input type="text" class="form-control" name="historias[1][criterios][]" value="Los reportes deben incluir gráficos para facilitar el análisis visual">
                                        <button type="button" class="btn btn-outline-danger remove-criterio">
                                            <i class="bi bi-dash-lg"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Requerimientos No Funcionales -->
        <div class="card mb-4 border-hover-animation shadow-sm">
            <div class="card-header bg-white">
                <h5 class="card-title mb-0">
                    <i class="bi bi-gear-wide-connected text-primary me-2"></i>
                    Requerimientos No Funcionales
                </h5>
            </div>
            <div class="card-body">
                <p class="text-muted mb-3">Además de las historias de usuario, se deben considerar los requerimientos no funcionales, que incluyen aspectos técnicos y operativos clave del sistema.</p>
                
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="seguridad" class="form-label fw-semibold">Seguridad</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-shield-lock"></i></span>
                            <input type="text" class="form-control" id="seguridad" name="seguridad" value="Autenticación segura, encriptación de datos sensibles, cumplimiento LGPD">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="performance" class="form-label fw-semibold">Performance</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-speedometer2"></i></span>
                            <input type="text" class="form-control" id="performance" name="performance" value="Tiempo de respuesta máximo de 3 segundos, operación offline">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="usabilidad" class="form-label fw-semibold">Usabilidad</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-check"></i></span>
                            <input type="text" class="form-control" id="usabilidad" name="usabilidad" value="Interfaz intuitiva, accesible para personas con capacitación básica">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="compatibilidad" class="form-label fw-semibold">Compatibilidad</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-phone"></i></span>
                            <input type="text" class="form-control" id="compatibilidad" name="compatibilidad" value="Dispositivos Android 7.0+, tablets, diseño responsive">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="disponibilidad" class="form-label fw-semibold">Disponibilidad</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-clock-history"></i></span>
                            <input type="text" class="form-control" id="disponibilidad" name="disponibilidad" value="Funcionalidad offline, sincronización automática cuando hay conexión">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dependencias y Consideraciones Adicionales -->
        <div class="card mb-4 border-hover-animation shadow-sm">
            <div class="card-header bg-white">
                <h5 class="card-title mb-0">
                    <i class="bi bi-link-45deg text-primary me-2"></i>
                    Dependencias y Consideraciones Adicionales
                </h5>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-12">
                        <label for="tecnologias" class="form-label fw-semibold">Herramientas y tecnologías a utilizar</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-code-slash"></i></span>
                            <input type="text" class="form-control" id="tecnologias" name="tecnologias" value="Flutter, Firebase, SQLite para almacenamiento local">
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <label for="integraciones" class="form-label fw-semibold">Integraciones con otros sistemas</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-diagram-3"></i></span>
                            <input type="text" class="form-control" id="integraciones" name="integraciones" value="Sistema de Registro Electrónico del Ministerio de Salud, API de geolocalización">
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <label for="riesgos" class="form-label fw-semibold">Factores de riesgo</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-exclamation-diamond"></i></span>
                            <textarea class="form-control" id="riesgos" name="riesgos" rows="3">- Conectividad intermitente en zonas rurales
- Resistencia al cambio por parte de personal no familiarizado con tecnología
- Cambios en requisitos regulatorios de protección de datos médicos</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end gap-2 mb-5">
            <a href="{{ url('/proyectos/'.$id) }}" class="btn btn-secondary">
                <i class="bi bi-x-circle me-1"></i> Cancelar
            </a>
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save me-1"></i> Guardar Cambios
            </button>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script>
    // Validación del formulario
    (() => {
        'use strict';
        
        const forms = document.querySelectorAll('.needs-validation');
        
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                
                form.classList.add('was-validated');
            }, false);
        });
    })();
    
    // Variables globales
    let userStoryCounter = 1; // Comienza en 1 porque ya tenemos 2 historias precargadas (0 y 1)
    
    // Función para agregar nueva historia de usuario
    function addUserStory() {
        userStoryCounter++;
        const container = document.getElementById('user-stories-container');
        
        const newUserStory = document.createElement('div');
        newUserStory.className = 'user-story border rounded p-3 mb-3 position-relative';
        newUserStory.innerHTML = `
            <div class="position-absolute top-0 end-0 d-flex">
                <span class="badge bg-primary m-2">Historia #${userStoryCounter + 1}</span>
                <button type="button" class="btn btn-sm btn-danger m-2 remove-story">
                    <i class="bi bi-trash"></i>
                </button>
            </div>
            
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label fw-semibold">Como: <small class="text-muted">(tipo de usuario)</small> *</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" name="historias[${userStoryCounter}][como]" required placeholder="Ej. Cliente del sistema, Administrador, Usuario registrado">
                        <div class="invalid-feedback">Por favor complete este campo.</div>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <label class="form-label fw-semibold">Quiero: <small class="text-muted">(acción o funcionalidad)</small> *</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lightbulb"></i></span>
                        <input type="text" class="form-control" name="historias[${userStoryCounter}][quiero]" required placeholder="Ej. poder iniciar sesión con mi correo y contraseña">
                        <div class="invalid-feedback">Por favor complete este campo.</div>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <label class="form-label fw-semibold">Para: <small class="text-muted">(objetivo o beneficio)</small> *</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-trophy"></i></span>
                        <input type="text" class="form-control" name="historias[${userStoryCounter}][para]" required placeholder="Ej. acceder a mis servicios personalizados">
                        <div class="invalid-feedback">Por favor complete este campo.</div>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <label class="form-label fw-semibold">Criterios de aceptación:</label>
                    <div class="criterios-container">
                        <div class="input-group mb-2">
                            <span class="input-group-text"><i class="bi bi-check-circle"></i></span>
                            <input type="text" class="form-control" name="historias[${userStoryCounter}][criterios][]" placeholder="Ej. El usuario debe poder iniciar sesión con su correo y contraseña">
                            <button type="button" class="btn btn-outline-primary add-criterio">
                                <i class="bi bi-plus-lg"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        `;
        
        container.appendChild(newUserStory);
    }
    
    // Función para agregar criterio de aceptación
    function addCriterio(button) {
        const criteriosContainer = button.closest('.criterios-container');
        const storyIndex = button.closest('.user-story').querySelector('input[name*="[como]"]').name.match(/historias\[(\d+)\]/)[1];
        
        const newCriterio = document.createElement('div');
        newCriterio.className = 'input-group mb-2';
        newCriterio.innerHTML = `
            <span class="input-group-text"><i class="bi bi-check-circle"></i></span>
            <input type="text" class="form-control" name="historias[${storyIndex}][criterios][]" placeholder="Ej. Otro criterio de aceptación">
            <button type="button" class="btn btn-outline-danger remove-criterio">
                <i class="bi bi-dash-lg"></i>
            </button>
        `;
        
        criteriosContainer.appendChild(newCriterio);
    }
    
    // Inicialización cuando el DOM está listo
    document.addEventListener('DOMContentLoaded', function() {
        // La primera historia de usuario ya existe en el HTML
        userStoryCounter = 1; // Comenzamos con 2 historias (índices 0 y 1)
        
        // Asignar el evento al botón de agregar historia de usuario
        document.querySelector('.add-user-story').onclick = function() {
            addUserStory();
        };
        
        // Delegación de eventos para toda la página
        document.addEventListener('click', function(e) {
            // Botón para agregar criterio
            if (e.target.closest('.add-criterio')) {
                addCriterio(e.target.closest('.add-criterio'));
            }
            
            // Botón para eliminar criterio
            if (e.target.closest('.remove-criterio')) {
                e.target.closest('.input-group').remove();
            }
            
            // Botón para eliminar historia
            if (e.target.closest('.remove-story')) {
                e.target.closest('.user-story').remove();
            }
        });
    });
</script>
@endsection

@section('styles')
<style>
    /* Estilos para el formulario */
    .page-header {
        margin-bottom: 2rem;
    }
    
    .border-hover-animation {
        transition: all 0.3s ease;
        border-left: 3px solid transparent;
    }
    
    .border-hover-animation:hover {
        border-left: 3px solid #D9A852;
        transform: translateX(5px);
    }
    
    .card-header {
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .card-title {
        color: #0A2342;
    }
    
    .form-label {
        color: #1A1A1A;
        margin-bottom: 0.3rem;
    }
    
    .input-group-text {
        background-color: #f8f9fa;
        color: #0A2342;
    }
    
    .btn-primary {
        background-color: #3E5902;
        border-color: #3E5902;
    }
    
    .btn-primary:hover {
        background-color: #2A3F01;
        border-color: #2A3F01;
    }
    
    .btn-success {
        background-color: #3E5902;
        border-color: #3E5902;
    }
    
    .btn-success:hover {
        background-color: #2A3F01;
        border-color: #2A3F01;
    }
    
    .bg-primary {
        background-color: #0A2342 !important;
    }
    
    .text-primary {
        color: #0A2342 !important;
    }
    
    /* Animación para botones */
    .btn {
        transition: all 0.3s ease;
    }
    
    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    
    .user-story {
        transition: all 0.3s ease;
        background-color: #FFFFFF;
    }
    
    .user-story:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>
@endsection
