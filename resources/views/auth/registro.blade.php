@extends('layouts.app')

@section('title', 'Registro - Nexus Compendium')

@section('content')
<div class="register-container">
    <div class="register-card">
        <div class="register-header">
            <img src="/images/logo.png?v=<?php echo time(); ?>" alt="Nexus Compendium Logo" class="logo">
            <h1>Crear Cuenta</h1>
            <p>Únete a la plataforma Nexus Compendium</p>
        </div>

        <!-- Información del sistema -->
        <div class="demo-info">
            <h3>ℹ️ Sistema de Demostración</h3>
            <p>Este es un formulario de demostración.</p>
            <p>Para acceder al sistema, usa el <a href="/login">formulario de login</a> con las credenciales de prueba.</p>
        </div>

        <form class="register-form" action="/registro" method="POST">
            <div class="form-row">
                <div class="form-group">
                    <label for="nombres" class="form-label">Nombres</label>
                    <input type="text" id="nombres" name="nombres" class="form-control" required 
                           placeholder="Juan Carlos">
                </div>
                <div class="form-group">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" id="apellidos" name="apellidos" class="form-control" required 
                           placeholder="González López">
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="form-control" required 
                       placeholder="usuario@ipss.cl">
            </div>

            <div class="form-group">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="tel" id="telefono" name="telefono" class="form-control" 
                       placeholder="+56 9 8765 4321">
            </div>

            <div class="form-group">
                <label for="instituto" class="form-label">Instituto</label>
                <select id="instituto" name="instituto" class="form-control" required>
                    <option value="">Selecciona un instituto</option>
                    <option value="ipss">Instituto Profesional San Sebastián</option>
                    <option value="externo">Instituto Externo</option>
                </select>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" id="password" name="password" class="form-control" required 
                       placeholder="••••••••">
            </div>

            <div class="form-group">
                <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required 
                       placeholder="••••••••">
            </div>

            <div class="form-options">
                <label class="checkbox-label">
                    <input type="checkbox" name="terms" required>
                    <span>Acepto los <a href="#">términos y condiciones</a></span>
                </label>
            </div>

            <button type="submit" class="btn btn-primary btn-full">👤 Crear Cuenta</button>
        </form>

        <div class="register-footer">
            <p>¿Ya tienes una cuenta? <a href="/login">Inicia sesión aquí</a></p>
            <p><a href="/">← Volver al inicio</a></p>
        </div>
    </div>
</div>

<style>
    .register-container {
        min-height: 100vh;
        background: linear-gradient(135deg, var(--light-green), var(--primary-blue));
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem;
    }

    .register-card {
        background: var(--white);
        border-radius: 16px;
        padding: 3rem;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        width: 100%;
        max-width: 600px;
    }

    .register-header {
        text-align: center;
        margin-bottom: 2rem;
    }

    .register-header .logo {
        width: 60px;
        height: 60px;
        background: var(--bright-green);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: var(--dark-blue);
        font-size: 1.5rem;
        margin: 0 auto 1rem;
    }

    .register-header h1 {
        color: var(--dark-blue);
        margin-bottom: 0.5rem;
        font-size: 2rem;
    }

    .register-header p {
        color: var(--gray-dark);
        opacity: 0.8;
    }

    .demo-info {
        background: #e3f2fd;
        border: 1px solid #2196f3;
        border-radius: 8px;
        padding: 1rem;
        margin-bottom: 1.5rem;
    }

    .demo-info h3 {
        color: var(--dark-blue);
        margin-bottom: 0.5rem;
        font-size: 1rem;
    }

    .demo-info p {
        margin: 0.25rem 0;
        color: var(--dark-blue);
        font-size: 0.9rem;
    }

    .demo-info a {
        color: var(--primary-blue);
        text-decoration: none;
        font-weight: 600;
    }

    .demo-info a:hover {
        text-decoration: underline;
    }

    .register-form {
        margin-bottom: 2rem;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 600;
        color: var(--dark-blue);
    }

    .form-control {
        width: 100%;
        padding: 14px;
        border: 2px solid var(--light-green);
        border-radius: 8px;
        font-size: 1rem;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        outline: none;
        border-color: var(--primary-blue);
        box-shadow: 0 0 0 3px rgba(98, 144, 195, 0.1);
    }

    .form-options {
        margin-bottom: 2rem;
        font-size: 0.9rem;
    }

    .checkbox-label {
        display: flex;
        align-items: flex-start;
        gap: 0.5rem;
        color: var(--gray-dark);
        cursor: pointer;
    }

    .checkbox-label a {
        color: var(--primary-blue);
        text-decoration: none;
    }

    .checkbox-label a:hover {
        text-decoration: underline;
    }

    .btn-full {
        width: 100%;
        padding: 14px;
        font-size: 1.1rem;
    }

    .register-footer {
        text-align: center;
        padding-top: 2rem;
        border-top: 1px solid var(--gray-light);
    }

    .register-footer p {
        margin: 0.5rem 0;
        color: var(--gray-dark);
    }

    .register-footer a {
        color: var(--primary-blue);
        text-decoration: none;
        font-weight: 600;
    }

    .register-footer a:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .register-container {
            padding: 1rem;
        }

        .register-card {
            padding: 2rem;
        }

        .form-row {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection
