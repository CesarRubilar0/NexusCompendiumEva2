@extends('layouts.app')

@section('title', 'Mensajes del Proyecto - Nexus Compendium')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>💬 Comunicación del Proyecto</h1>
        <p class="subtitle">Chat y mensajes en tiempo real</p>
    </div>

    <div class="communication-layout">
        <!-- Panel de mensajes -->
        <div class="messages-panel">
            <div class="messages-header">
                <h3>Mensajes del Proyecto #{{ $projectId }}</h3>
                <div class="online-indicator">
                    <span class="status-dot online"></span>
                    <span>3 usuarios conectados</span>
                </div>
            </div>

            <div class="messages-container" id="messages-container">
                @foreach($mensajes as $mensaje)
                <div class="message-item {{ $mensaje->tipo }}-message">
                    <div class="message-avatar">
                        {{ substr($mensaje->usuario, 0, 2) }}
                    </div>
                    <div class="message-content">
                        <div class="message-header">
                            <strong>{{ $mensaje->usuario }}</strong>
                            <span class="message-time">{{ $mensaje->fecha }}</span>
                        </div>
                        <div class="message-text">{{ $mensaje->mensaje }}</div>
                        @if($mensaje->tipo == 'document')
                        <div class="message-attachment">
                            📎 Documento adjunto
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Formulario de envío -->
            <div class="message-input-panel">
                <form id="send-message-form" class="message-form">
                    <div class="input-group">
                        <select name="tipo" class="message-type-selector">
                            <option value="general">💬 General</option>
                            <option value="update">📢 Actualización</option>
                            <option value="document">📎 Documento</option>
                            <option value="meeting">🤝 Reunión</option>
                        </select>
                        <input type="text" name="mensaje" placeholder="Escribe tu mensaje..." class="message-input" required>
                        <button type="submit" class="send-button">Enviar</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Panel lateral -->
        <div class="sidebar-panel">
            <div class="panel-card">
                <h3>👥 Participantes</h3>
                <div class="participants-list">
                    <div class="participant online">
                        <div class="participant-avatar">MG</div>
                        <div class="participant-info">
                            <strong>Dr. María González</strong>
                            <span>Coordinadora</span>
                        </div>
                        <span class="status-indicator online"></span>
                    </div>
                    <div class="participant online">
                        <div class="participant-avatar">CL</div>
                        <div class="participant-info">
                            <strong>Carlos López</strong>
                            <span>Estudiante VcM</span>
                        </div>
                        <span class="status-indicator online"></span>
                    </div>
                    <div class="participant offline">
                        <div class="participant-avatar">AF</div>
                        <div class="participant-info">
                            <strong>Ana Fernández</strong>
                            <span>Estudiante VcM</span>
                        </div>
                        <span class="status-indicator offline"></span>
                    </div>
                </div>
            </div>

            <div class="panel-card">
                <h3>📅 Próximas Reuniones</h3>
                <div class="upcoming-meetings">
                    <div class="meeting-item">
                        <div class="meeting-date">15 Ene</div>
                        <div class="meeting-info">
                            <strong>Seguimiento Semanal</strong>
                            <span>14:00 - 15:00</span>
                        </div>
                    </div>
                    <div class="meeting-item">
                        <div class="meeting-date">20 Ene</div>
                        <div class="meeting-info">
                            <strong>Evaluación Mensual</strong>
                            <span>10:00 - 12:00</span>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-sm" onclick="programarReunion()">
                    ➕ Programar Reunión
                </button>
            </div>

            <div class="panel-card">
                <h3>🔔 Notificaciones</h3>
                <div class="notifications-preview">
                    <div class="notification-item unread">
                        <span class="notification-icon">📝</span>
                        <span>Nuevo mensaje de María</span>
                    </div>
                    <div class="notification-item">
                        <span class="notification-icon">📎</span>
                        <span>Documento subido</span>
                    </div>
                </div>
                <a href="/notifications" class="view-all-link">Ver todas →</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal para programar reunión -->
<div id="reunion-modal" class="modal" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <h3>📅 Programar Reunión</h3>
            <span class="close" onclick="cerrarModal()">&times;</span>
        </div>
        <form id="reunion-form" class="modal-form">
            <div class="form-group">
                <label for="titulo-reunion">Título de la Reunión</label>
                <input type="text" id="titulo-reunion" name="titulo" required>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="fecha-reunion">Fecha</label>
                    <input type="date" id="fecha-reunion" name="fecha" required>
                </div>
                <div class="form-group">
                    <label for="hora-reunion">Hora</label>
                    <input type="time" id="hora-reunion" name="hora" required>
                </div>
            </div>
            <div class="form-group">
                <label for="participantes">Participantes</label>
                <select multiple id="participantes" name="participantes[]">
                    <option value="maria">Dr. María González</option>
                    <option value="carlos">Carlos López</option>
                    <option value="ana">Ana Fernández</option>
                </select>
            </div>
            <div class="form-group">
                <label for="agenda">Agenda</label>
                <textarea id="agenda" name="agenda" rows="3"></textarea>
            </div>
            <div class="modal-actions">
                <button type="button" onclick="cerrarModal()" class="btn btn-secondary">Cancelar</button>
                <button type="submit" class="btn btn-primary">Programar</button>
            </div>
        </form>
    </div>
</div>

<style>
    .communication-layout {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 2rem;
        height: 70vh;
    }

    .messages-panel {
        display: flex;
        flex-direction: column;
        background: var(--white);
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        overflow: hidden;
    }

    .messages-header {
        padding: 1rem;
        border-bottom: 2px solid var(--light-green);
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: var(--primary-blue);
        color: white;
    }

    .online-indicator {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.9rem;
    }

    .status-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
    }

    .status-dot.online {
        background: var(--bright-green);
    }

    .messages-container {
        flex: 1;
        overflow-y: auto;
        padding: 1rem;
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .message-item {
        display: flex;
        gap: 1rem;
        padding: 0.75rem;
        border-radius: 8px;
        background: var(--gray-light);
    }

    .message-item.update-message {
        background: rgba(186, 255, 41, 0.1);
        border-left: 4px solid var(--bright-green);
    }

    .message-item.document-message {
        background: rgba(98, 144, 195, 0.1);
        border-left: 4px solid var(--primary-blue);
    }

    .message-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: var(--primary-blue);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 0.9rem;
    }

    .message-content {
        flex: 1;
    }

    .message-header {
        display: flex;
        justify-content: space-between;
        margin-bottom: 0.5rem;
    }

    .message-time {
        color: var(--gray-dark);
        font-size: 0.8rem;
    }

    .message-attachment {
        margin-top: 0.5rem;
        padding: 0.5rem;
        background: var(--white);
        border-radius: 4px;
        font-size: 0.9rem;
    }

    .message-input-panel {
        padding: 1rem;
        border-top: 2px solid var(--light-green);
        background: var(--gray-light);
    }

    .input-group {
        display: flex;
        gap: 0.5rem;
    }

    .message-type-selector {
        min-width: 120px;
        padding: 0.5rem;
        border: 1px solid var(--primary-blue);
        border-radius: 4px;
    }

    .message-input {
        flex: 1;
        padding: 0.5rem;
        border: 1px solid var(--primary-blue);
        border-radius: 4px;
    }

    .send-button {
        padding: 0.5rem 1rem;
        background: var(--primary-blue);
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .participants-list {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }

    .participant {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.5rem;
        border-radius: 6px;
        background: var(--gray-light);
    }

    .participant-avatar {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: var(--primary-blue);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.8rem;
        font-weight: bold;
    }

    .participant-info {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .participant-info span {
        font-size: 0.8rem;
        color: var(--gray-dark);
    }

    .status-indicator {
        width: 8px;
        height: 8px;
        border-radius: 50%;
    }

    .status-indicator.online {
        background: var(--bright-green);
    }

    .status-indicator.offline {
        background: var(--gray-dark);
    }

    .modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .modal-content {
        background: var(--white);
        padding: 2rem;
        border-radius: 12px;
        width: 90%;
        max-width: 500px;
    }

    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .close {
        font-size: 1.5rem;
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .communication-layout {
            grid-template-columns: 1fr;
        }
    }
</style>

<script>
    function programarReunion() {
        document.getElementById('reunion-modal').style.display = 'flex';
    }

    function cerrarModal() {
        document.getElementById('reunion-modal').style.display = 'none';
    }

    // Simular envío de mensaje
    document.getElementById('send-message-form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        const mensaje = formData.get('mensaje');
        const tipo = formData.get('tipo');

        // Simular mensaje enviado
        const container = document.getElementById('messages-container');
        const newMessage = document.createElement('div');
        newMessage.className = `message-item ${tipo}-message`;
        newMessage.innerHTML = `
            <div class="message-avatar">TU</div>
            <div class="message-content">
                <div class="message-header">
                    <strong>Tú</strong>
                    <span class="message-time">ahora</span>
                </div>
                <div class="message-text">${mensaje}</div>
            </div>
        `;
        
        container.appendChild(newMessage);
        container.scrollTop = container.scrollHeight;
        
        // Limpiar formulario
        this.reset();
        
        // Mostrar notificación
        alert('✅ Mensaje enviado exitosamente');
    });

    // Simular programación de reunión
    document.getElementById('reunion-form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        alert('✅ Reunión programada exitosamente');
        cerrarModal();
        this.reset();
    });
</script>
@endsection
