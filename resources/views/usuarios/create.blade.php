@extends('layouts.app')

@section('title', 'Crear Usuario - Nexus Compendium')

@section('content')
 
<div class="container">
    <div class="page-header">
        <div class="header-content">
            <h1>👤 Crear Nuevo Usuario</h1>
            <p class="subtitle">Agregar un nuevo usuario al sistema Nexus Compendium</p>
        </div>
        <a href="/usuarios" class="btn-secondary">
            <span>←</span> Volver a Usuarios
        </a>
    </div>
       <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">

    <div class="form-container">
        <form class="user-form" action="/usuarios" method="POST">
            <div class="form-sections">
                <!-- Información Personal -->
                <div class="form-section">
                    <h3>📋 Información Personal</h3>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="nombre">Nombre Completo *</label>
                            <input type="text" id="nombre" name="nombre" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Correo Electrónico *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="rut">RUT</label>
                            <input type="text" id="rut" name="rut" placeholder="12.345.678-9">
                        </div>
                        
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="tel" id="telefono" name="telefono" placeholder="+56 9 1234 5678">
                        </div>
                    </div>
                </div>

                <!-- Información Académica/Laboral -->
                <div class="form-section">
                    <h3>🎓 Información Académica/Laboral</h3>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="rol">Rol *</label>
                            <select id="rol" name="rol" required>
                                <option value="">Seleccionar rol...</option>
                                <option value="estudiante">Estudiante</option>
                                <option value="docente">Docente</option>
                                <option value="coordinador">Coordinador VcM</option>
                                <option value="organizacion">Organización Externa</option>
                                <option value="admin">Administrador</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="instituto">Instituto/Organización</label>
                            <select id="instituto" name="instituto">
                                <option value="">Seleccionar...</option>
                                <option value="ipss">Instituto Profesional San Sebastián</option>
                                <option value="municipalidad">Municipalidad Local</option>
                                <option value="fundacion">Fundación Social</option>
                                <option value="empresa">Empresa Privada</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="carrera">Carrera/Departamento</label>
                            <input type="text" id="carrera" name="carrera" placeholder="Ej: Trabajo Social, Enfermería...">
                        </div>
                        
                        <div class="form-group">
                            <label for="ano_ingreso">Año de Ingreso</label>
                            <input type="number" id="ano_ingreso" name="ano_ingreso" min="2020" max="2025" placeholder="2024">
                        </div>
                    </div>
                </div>

                <!-- Configuración de Acceso -->
                <div class="form-section">
                    <h3>🔐 Configuración de Acceso</h3>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="password">Contraseña *</label>
                            <input type="password" id="password" name="password" required>
                            <small>Mínimo 8 caracteres</small>
                        </div>
                        
                        <div class="form-group">
                            <label for="password_confirmation">Confirmar Contraseña *</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" required>
                        </div>
                        
                        <div class="form-group checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="activo" checked>
                                <span class="checkmark"></span>
                                Usuario activo
                            </label>
                        </div>
                        
                        <div class="form-group checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="notificaciones" checked>
                                <span class="checkmark"></span>
                                Recibir notificaciones por email
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Intereses y Especialidades -->
                <div class="form-section">
                    <h3>💡 Intereses y Especialidades</h3>
                    <div class="form-group full-width">
                        <label for="especialidades">Áreas de Interés</label>
                        <div class="checkbox-grid">
                            <label class="checkbox-label">
                                <input type="checkbox" name="especialidades[]" value="salud">
                                <span class="checkmark"></span>
                                Salud Comunitaria
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="especialidades[]" value="educacion">
                                <span class="checkmark"></span>
                                Educación
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="especialidades[]" value="medio_ambiente">
                                <span class="checkmark"></span>
                                Medio Ambiente
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="especialidades[]" value="desarrollo_social">
                                <span class="checkmark"></span>
                                Desarrollo Social
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="especialidades[]" value="tecnologia">
                                <span class="checkmark"></span>
                                Tecnología Social
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="especialidades[]" value="emprendimiento">
                                <span class="checkmark"></span>
                                Emprendimiento
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group full-width">
                        <label for="biografia">Biografía/Descripción</label>
                        <textarea id="biografia" name="biografia" rows="4" placeholder="Cuéntanos sobre tu experiencia, motivaciones y objetivos en vinculación con el medio..."></textarea>
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <button type="button" class="btn-secondary" onclick="history.back()">
                    Cancelar
                </button>
                <button type="submit" class="btn-primary">
                    <span>✓</span> Crear Usuario
                </button>
            </div>
        </form>
    </div>
</div>



<script>
document.addEventListener('DOMContentLoaded', function() {
    // Validación de contraseña
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('password_confirmation');
    
    function validatePassword() {
        if (password.value !== confirmPassword.value) {
            confirmPassword.setCustomValidity('Las contraseñas no coinciden');
        } else {
            confirmPassword.setCustomValidity('');
        }
    }
    
    password.addEventListener('input', validatePassword);
    confirmPassword.addEventListener('input', validatePassword);
    
    // Formato RUT
    const rutInput = document.getElementById('rut');
    rutInput.addEventListener('input', function(e) {
        let value = e.target.value.replace(/[^\d]/g, '');
        if (value.length > 1) {
            value = value.slice(0, -1).replace(/\B(?=(\d{3})+(?!\d))/g, '.') + '-' + value.slice(-1);
        }
        e.target.value = value;
    });
    
    // Mostrar/ocultar campos según el rol
    const rolSelect = document.getElementById('rol');
    const carreraGroup = document.querySelector('[for="carrera"]').parentElement;
    const anoIngresoGroup = document.querySelector('[for="ano_ingreso"]').parentElement;
    
    rolSelect.addEventListener('change', function() {
        if (this.value === 'estudiante' || this.value === 'docente') {
            carreraGroup.style.display = 'flex';
            anoIngresoGroup.style.display = 'flex';
        } else {
            carreraGroup.style.display = 'none';
            anoIngresoGroup.style.display = 'none';
        }
    });
});
</script>
@endsection
