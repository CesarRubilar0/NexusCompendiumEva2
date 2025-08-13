<?php

namespace App\Http\Controllers;

class AIController extends Controller
{
    /**
     * Generar roadmap con IA (PP-09)
     */
    public function generateRoadmap($projectId, $request)
    {
        $validated = [
            'descripcion_proyecto' => $request['descripcion_proyecto'] ?? '',
            'objetivos' => $request['objetivos'] ?? [],
            'recursos_disponibles' => $request['recursos_disponibles'] ?? '',
            'timeline' => $request['timeline'] ?? '6 meses'
        ];

        // Validaciones
        if (empty($validated['descripcion_proyecto'])) {
            return $this->back()->withErrors(['error' => 'La descripción del proyecto es obligatoria']);
        }

        // Simular generación de roadmap con IA
        $roadmap = $this->generateAIRoadmap($validated);

        return $this->view('ai.roadmap', compact('roadmap', 'projectId'));
    }

    /**
     * Editar roadmap generado (PP-09)
     */
    public function editRoadmap($roadmapId, $request)
    {
        $validated = [
            'fases' => $request['fases'] ?? [],
            'milestones' => $request['milestones'] ?? [],
            'recursos' => $request['recursos'] ?? [],
            'timeline_ajustado' => $request['timeline_ajustado'] ?? ''
        ];

        // Simular actualización del roadmap
        $roadmap_actualizado = (object)[
            'id' => $roadmapId,
            'fases' => $validated['fases'],
            'milestones' => $validated['milestones'],
            'recursos' => $validated['recursos'],
            'timeline' => $validated['timeline_ajustado'],
            'fecha_actualizacion' => date('Y-m-d H:i:s'),
            'version' => '1.1'
        ];

        return $this->back()->with('success', 'Roadmap actualizado exitosamente')
                   ->with('roadmap', $roadmap_actualizado);
    }

    /**
     * Chatbot de soporte (PP-10)
     */
    public function chatbot($request)
    {
        $validated = [
            'pregunta' => $request['pregunta'] ?? '',
            'contexto_usuario' => $request['contexto_usuario'] ?? 'estudiante',
            'proyecto_id' => $request['proyecto_id'] ?? null
        ];

        if (empty($validated['pregunta'])) {
            return $this->response()->json(['error' => 'La pregunta no puede estar vacía'], 400);
        }

        // Simular respuesta del chatbot según rol del usuario
        $respuesta = $this->generateChatbotResponse(
            $validated['pregunta'], 
            $validated['contexto_usuario'],
            $validated['proyecto_id']
        );

        return $this->response()->json([
            'success' => true,
            'respuesta' => $respuesta,
            'timestamp' => date('Y-m-d H:i:s')
        ]);
    }

    /**
     * Validar calidad del roadmap generado (PP-09)
     */
    public function validateRoadmapQuality($roadmapId)
    {
        // Criterios de calidad para testing
        $criterios = [
            'estructura_logica' => rand(80, 100),
            'viabilidad_timeline' => rand(75, 95),
            'recursos_realistas' => rand(70, 90),
            'objetivos_claros' => rand(85, 100),
            'milestones_medibles' => rand(80, 95)
        ];

        $promedio = array_sum($criterios) / count($criterios);
        
        $evaluacion = [
            'calidad_general' => round($promedio, 1),
            'criterios' => $criterios,
            'recomendaciones' => $this->generateRecommendations($criterios),
            'fecha_evaluacion' => date('Y-m-d H:i:s')
        ];

        return $this->response()->json($evaluacion);
    }

    /**
     * Historial de interacciones con chatbot (PP-10)
     */
    public function chatHistory($userId)
    {
        $historial = [
            (object)[
                'id' => 1,
                'pregunta' => '¿Cómo puedo subir un documento al proyecto?',
                'respuesta' => 'Para subir un documento, ve a la sección "Documentos" del proyecto y haz clic en "Subir archivo".',
                'fecha' => '2025-01-10 14:30:00',
                'util' => true
            ],
            (object)[
                'id' => 2,
                'pregunta' => '¿Cuál es el estado actual de mi proyecto?',
                'respuesta' => 'Tu proyecto "Salud Comunitaria" está activo con un 65% de progreso completado.',
                'fecha' => '2025-01-10 15:45:00',
                'util' => true
            ],
            (object)[
                'id' => 3,
                'pregunta' => '¿Cómo programar una reunión?',
                'respuesta' => 'Puedes programar reuniones desde el panel de comunicación del proyecto. Selecciona fecha, hora y participantes.',
                'fecha' => '2025-01-11 09:15:00',
                'util' => null
            ]
        ];

        return $this->view('ai.chat-history', compact('historial', 'userId'));
    }

    /**
     * Evaluar precisión de respuestas del chatbot (PP-10)
     */
    public function evaluateChatbotAccuracy()
    {
        $metricas = [
            'respuestas_correctas' => 85,
            'respuestas_parciales' => 12,
            'respuestas_incorrectas' => 3,
            'total_interacciones' => 150,
            'precision_general' => 85.0,
            'tiempo_respuesta_promedio' => 1.2, // segundos
            'satisfaccion_usuario' => 4.2 // de 5
        ];

        return $this->response()->json($metricas);
    }

    /**
     * Generar roadmap con IA (simulado)
     */
    private function generateAIRoadmap($parametros)
    {
        return (object)[
            'id' => rand(100, 999),
            'proyecto_id' => $parametros['proyecto_id'] ?? null,
            'fases' => [
                (object)[
                    'nombre' => 'Fase 1: Diagnóstico y Planificación',
                    'duracion' => '4 semanas',
                    'actividades' => [
                        'Análisis de necesidades comunitarias',
                        'Definición de objetivos específicos',
                        'Identificación de recursos necesarios'
                    ]
                ],
                (object)[
                    'nombre' => 'Fase 2: Implementación Inicial',
                    'duracion' => '8 semanas',
                    'actividades' => [
                        'Capacitación del equipo',
                        'Establecimiento de puntos de atención',
                        'Inicio de actividades preventivas'
                    ]
                ],
                (object)[
                    'nombre' => 'Fase 3: Consolidación y Evaluación',
                    'duracion' => '4 semanas',
                    'actividades' => [
                        'Evaluación de resultados preliminares',
                        'Ajustes y mejoras',
                        'Documentación de lecciones aprendidas'
                    ]
                ]
            ],
            'milestones' => [
                (object)['descripcion' => 'Diagnóstico completado', 'fecha_objetivo' => '2025-02-15'],
                (object)['descripcion' => 'Equipo capacitado', 'fecha_objetivo' => '2025-03-30'],
                (object)['descripcion' => 'Servicios operativos', 'fecha_objetivo' => '2025-05-15'],
                (object)['descripcion' => 'Evaluación final', 'fecha_objetivo' => '2025-06-30']
            ],
            'recursos_sugeridos' => [
                'Personal: 2 coordinadores, 4 promotores de salud',
                'Materiales: Equipos básicos de salud, material educativo',
                'Presupuesto estimado: $15,000 - $20,000'
            ],
            'fecha_generacion' => date('Y-m-d H:i:s'),
            'calidad_estimada' => 87.5
        ];
    }

    /**
     * Generar respuesta del chatbot según contexto
     */
    private function generateChatbotResponse($pregunta, $rol, $proyectoId = null)
    {
        // Respuestas adaptadas según rol del usuario
        $respuestas_por_rol = [
            'estudiante' => [
                'documento' => 'Como estudiante, puedes subir documentos en la sección "Mis Contribuciones" del proyecto. Asegúrate de que sean archivos PDF o Word.',
                'reunion' => 'Para solicitar una reunión, contacta a tu docente coordinador o usa el chat del proyecto.',
                'progreso' => 'Puedes ver el progreso de tu proyecto en el dashboard principal. También recibirás notificaciones de actualizaciones importantes.',
                'default' => 'Como estudiante, tienes acceso a los proyectos asignados, documentos del proyecto y herramientas de comunicación. ¿Hay algo específico en lo que pueda ayudarte?'
            ],
            'docente' => [
                'documento' => 'Como docente, puedes gestionar todos los documentos del proyecto. Ve a "Gestión de Documentos" para aprobar, rechazar o solicitar cambios.',
                'reunion' => 'Puedes programar reuniones desde el panel de coordinación. Tienes permisos para invitar a estudiantes y otros docentes.',
                'progreso' => 'En tu panel docente puedes ver métricas detalladas, generar reportes de progreso y gestionar milestones del proyecto.',
                'default' => 'Como docente, tienes acceso completo a la gestión del proyecto. Puedes coordinar estudiantes, revisar entregables y generar reportes.'
            ],
            'coordinador' => [
                'documento' => 'Como coordinador, tienes acceso completo a todos los documentos institucionales. Puedes generar reportes consolidados y supervisar múltiples proyectos.',
                'reunion' => 'Puedes programar reuniones inter-proyectos y coordinar con organizaciones externas.',
                'progreso' => 'Tu dashboard muestra métricas consolidadas de todos los proyectos bajo tu supervisión.',
                'default' => 'Como coordinador, puedes supervisar múltiples proyectos, generar reportes institucionales y coordinar con organizaciones externas.'
            ]
        ];

        // Detectar tipo de pregunta
        $tipo_pregunta = 'default';
        if (stripos($pregunta, 'documento') !== false || stripos($pregunta, 'archivo') !== false) {
            $tipo_pregunta = 'documento';
        } elseif (stripos($pregunta, 'reunión') !== false || stripos($pregunta, 'meeting') !== false) {
            $tipo_pregunta = 'reunion';
        } elseif (stripos($pregunta, 'progreso') !== false || stripos($pregunta, 'estado') !== false) {
            $tipo_pregunta = 'progreso';
        }

        $respuestas = $respuestas_por_rol[$rol] ?? $respuestas_por_rol['estudiante'];
        
        return $respuestas[$tipo_pregunta] ?? $respuestas['default'];
    }

    /**
     * Generar recomendaciones de mejora
     */
    private function generateRecommendations($criterios)
    {
        $recomendaciones = [];

        if ($criterios['estructura_logica'] < 85) {
            $recomendaciones[] = 'Mejorar la secuencia lógica de las fases del proyecto';
        }
        if ($criterios['viabilidad_timeline'] < 80) {
            $recomendaciones[] = 'Ajustar los tiempos estimados para mayor realismo';
        }
        if ($criterios['recursos_realistas'] < 75) {
            $recomendaciones[] = 'Revisar la estimación de recursos necesarios';
        }

        return $recomendaciones;
    }
}
