<?php

namespace App\Http\Controllers;

class CommunicationController extends Controller
{
    /**
     * Mostrar mensajes de un proyecto (PP-05)
     */
    public function messages($projectId)
    {
        $mensajes = [
            (object)[
                'id' => 1,
                'usuario' => 'Dr. María González',
                'mensaje' => 'El diagnóstico comunitario ha sido completado exitosamente.',
                'fecha' => '2025-01-10 14:30:00',
                'tipo' => 'update'
            ],
            (object)[
                'id' => 2,
                'usuario' => 'Carlos López',
                'mensaje' => 'Subí el informe preliminar a la carpeta de documentos.',
                'fecha' => '2025-01-10 16:45:00',
                'tipo' => 'document'
            ],
            (object)[
                'id' => 3,
                'usuario' => 'Ana Fernández',
                'mensaje' => '¿Podemos programar una reunión para revisar los próximos pasos?',
                'fecha' => '2025-01-11 09:15:00',
                'tipo' => 'meeting'
            ]
        ];

        return $this->view('proyectos.messages', compact('mensajes', 'projectId'));
    }

    /**
     * Enviar mensaje (PP-05: Comunicación en Proyectos)
     */
    public function sendMessage($projectId, $request)
    {
        // Validar mensaje
        $validated = [
            'mensaje' => $request['mensaje'] ?? '',
            'tipo' => $request['tipo'] ?? 'general'
        ];

        if (empty($validated['mensaje'])) {
            return $this->back()->withErrors(['mensaje' => 'El mensaje no puede estar vacío']);
        }

        // Simular envío de mensaje
        $mensaje = (object)[
            'id' => rand(100, 999),
            'usuario' => 'Usuario Actual',
            'mensaje' => $validated['mensaje'],
            'fecha' => date('Y-m-d H:i:s'),
            'tipo' => $validated['tipo']
        ];

        // Simular notificación por email (PP-05)
        $this->sendEmailNotification($projectId, $mensaje);

        return $this->back()->with('success', 'Mensaje enviado exitosamente');
    }

    /**
     * Programar reunión (PP-06)
     */
    public function scheduleReunion($projectId, $request)
    {
        $validated = [
            'titulo' => $request['titulo'] ?? '',
            'fecha' => $request['fecha'] ?? '',
            'hora' => $request['hora'] ?? '',
            'participantes' => $request['participantes'] ?? [],
            'agenda' => $request['agenda'] ?? ''
        ];

        // Validaciones
        if (empty($validated['titulo']) || empty($validated['fecha'])) {
            return $this->back()->withErrors(['error' => 'Título y fecha son obligatorios']);
        }

        // Simular creación de reunión
        $reunion = (object)[
            'id' => rand(100, 999),
            'titulo' => $validated['titulo'],
            'fecha' => $validated['fecha'],
            'hora' => $validated['hora'],
            'proyecto_id' => $projectId,
            'participantes' => $validated['participantes'],
            'agenda' => $validated['agenda'],
            'estado' => 'programada'
        ];

        return $this->back()->with('success', 'Reunión programada exitosamente')
                   ->with('reunion_creada', $reunion);
    }

    /**
     * Documentar minuta de reunión (PP-06)
     */
    public function documentMinuta($reunionId, $request)
    {
        $validated = [
            'asistentes' => $request['asistentes'] ?? [],
            'temas_tratados' => $request['temas_tratados'] ?? '',
            'acuerdos' => $request['acuerdos'] ?? '',
            'acciones_pendientes' => $request['acciones_pendientes'] ?? ''
        ];

        // Simular guardado de minuta
        $minuta = (object)[
            'reunion_id' => $reunionId,
            'asistentes' => $validated['asistentes'],
            'temas_tratados' => $validated['temas_tratados'],
            'acuerdos' => $validated['acuerdos'],
            'acciones_pendientes' => $validated['acciones_pendientes'],
            'fecha_creacion' => date('Y-m-d H:i:s')
        ];

        return $this->back()->with('success', 'Minuta documentada exitosamente')
                   ->with('minuta_creada', $minuta);
    }

    /**
     * Mostrar notificaciones (PP-05)
     */
    public function notifications()
    {
        $notificaciones = [
            (object)[
                'id' => 1,
                'titulo' => 'Nuevo mensaje en Proyecto Salud',
                'descripcion' => 'Dr. María González envió un mensaje',
                'fecha' => '2025-01-11 10:30:00',
                'leida' => false,
                'tipo' => 'mensaje'
            ],
            (object)[
                'id' => 2,
                'titulo' => 'Reunión programada',
                'descripcion' => 'Reunión de seguimiento para mañana a las 14:00',
                'fecha' => '2025-01-10 17:00:00',
                'leida' => false,
                'tipo' => 'reunion'
            ],
            (object)[
                'id' => 3,
                'titulo' => 'Documento subido',
                'descripcion' => 'Se subió el informe preliminar',
                'fecha' => '2025-01-10 16:45:00',
                'leida' => true,
                'tipo' => 'documento'
            ]
        ];

        return $this->view('notifications.index', compact('notificaciones'));
    }

    /**
     * Marcar notificación como leída
     */
    public function markAsRead($notificationId)
    {
        // Simular marcado como leída
        return $this->response()->json(['success' => true]);
    }

    /**
     * Simular envío de notificación por email (PP-05)
     */
    private function sendEmailNotification($projectId, $mensaje)
    {
        // En un sistema real, aquí se enviaría el email
        // Para testing, solo retornamos true
        return true;
    }
}
