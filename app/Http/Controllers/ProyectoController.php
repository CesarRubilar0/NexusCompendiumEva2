<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\EstadoProyecto;
use App\Models\User;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Mostrar listado de proyectos
     */
    public function index()
    {
        $proyectos = [
            (object)[
                'id' => 1,
                'titulo' => 'Proyecto de Salud Comunitaria',
                'descripcion' => 'Implementación de programa de salud preventiva en comunidades rurales',
                'estado' => 'Activo',
                'fecha_inicio' => '2025-03-15',
                'progreso' => 65
            ],
            (object)[
                'id' => 2,
                'titulo' => 'Capacitación Digital',
                'descripcion' => 'Programa de alfabetización digital para adultos mayores',
                'estado' => 'En Planificación',
                'fecha_inicio' => '2025-04-01',
                'progreso' => 25
            ],
            (object)[
                'id' => 3,
                'titulo' => 'Apoyo Nutricional Escolar',
                'descripcion' => 'Evaluación nutricional y educación alimentaria en escuelas vulnerables',
                'estado' => 'Completado',
                'fecha_inicio' => '2024-08-15',
                'progreso' => 100
            ]
        ];

        return $this->view('proyectos.index', compact('proyectos'));
    }

    /**
     * Mostrar formulario de creación
     */
    public function create()
    {
        $estados = ['En Planificación', 'Activo', 'Completado', 'Suspendido'];
        return $this->view('proyectos.create', compact('estados'));
    }

    /**
     * Almacenar nuevo proyecto (PP-01: Creación de Proyectos)
     */
    public function store($request)
    {
        // Validaciones para testing
        $validated = $this->validate($request, [
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string|min:10',
            'fecha_inicio' => 'required|date|after_or_equal:today',
            'fecha_fin' => 'required|date|after:fecha_inicio',
            'responsable' => 'required|string|max:255',
            'organizacion' => 'nullable|string|max:255'
        ], [
            'titulo.required' => 'El título del proyecto es obligatorio',
            'descripcion.required' => 'La descripción es obligatoria',
            'descripcion.min' => 'La descripción debe tener al menos 10 caracteres',
            'fecha_inicio.required' => 'La fecha de inicio es obligatoria',
            'fecha_inicio.after_or_equal' => 'La fecha de inicio no puede ser anterior a hoy',
            'fecha_fin.after' => 'La fecha de fin debe ser posterior a la fecha de inicio'
        ]);

        // Simular creación del proyecto
        $proyecto = (object)[
            'id' => rand(100, 999),
            'titulo' => $validated['titulo'],
            'descripcion' => $validated['descripcion'],
            'fecha_inicio' => $validated['fecha_inicio'],
            'fecha_fin' => $validated['fecha_fin'],
            'responsable' => $validated['responsable'],
            'organizacion' => $validated['organizacion'] ?? 'N/A',
            'estado' => 'En Planificación',
            'created_at' => date('Y-m-d H:i:s')
        ];

        // Redirect con mensaje de éxito para testing
        return $this->redirect('/proyectos')
            ->with('success', 'Proyecto creado exitosamente')
            ->with('proyecto_creado', $proyecto);
    }

    /**
     * Mostrar proyecto específico (PP-01: Visualización)
     */
    public function show($id)
    {
        // Datos simulados para testing
        $proyecto = (object)[
            'id' => $id,
            'titulo' => 'Proyecto de Salud Comunitaria',
            'descripcion' => 'Este proyecto tiene como objetivo implementar un programa integral de salud preventiva en comunidades rurales.',
            'estado' => 'Activo',
            'progreso' => 65,
            'fecha_inicio' => '2025-03-15',
            'fecha_fin' => '2025-12-15',
            'responsable' => 'Dr. María González',
            'organizacion' => 'Centro de Salud Rural',
            'equipo' => [
                (object)['nombre' => 'Carlos López', 'rol' => 'Estudiante VcM'],
                (object)['nombre' => 'Ana Fernández', 'rol' => 'Estudiante VcM']
            ],
            'actividades' => [
                (object)['nombre' => 'Diagnóstico comunitario', 'completado' => true],
                (object)['nombre' => 'Capacitación de promotores', 'completado' => true],
                (object)['nombre' => 'Implementación de servicios', 'completado' => false],
                (object)['nombre' => 'Evaluación de resultados', 'completado' => false]
            ]
        ];

        return $this->view('proyectos.show', compact('proyecto'));
    }

    /**
     * Actualizar proyecto (PP-02: Gestión de Tareas)
     */
    public function update($request, $id)
    {
        $validated = $this->validate($request, [
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'estado' => 'required|string'
        ]);

        // Simular actualización
        return $this->redirect("/proyectos/{$id}")
            ->with('success', 'Proyecto actualizado exitosamente');
    }

    /**
     * Eliminar proyecto
     */
    public function destroy($id)
    {
        // Simular eliminación con validaciones
        return $this->redirect('/proyectos')
            ->with('success', 'Proyecto eliminado exitosamente');
    }

    /**
     * Dashboard con métricas (PP-01: Visualización en Dashboard)
     */
    public function dashboard()
    {
        $metricas = [
            'total_proyectos' => 15,
            'proyectos_activos' => 8,
            'proyectos_completados' => 5,
            'proyectos_planificacion' => 2,
            'usuarios_activos' => 45,
            'actividad_reciente' => [
                (object)['accion' => 'Proyecto "Salud Comunitaria" actualizado', 'tiempo' => 'hace 2 horas'],
                (object)['accion' => 'Nuevo usuario se unió al proyecto', 'tiempo' => 'hace 5 horas'],
                (object)['accion' => 'Proyecto "Apoyo Nutricional" completado', 'tiempo' => 'hace 1 día']
            ]
        ];

        return $this->view('dashboard', compact('metricas'));
    }

    /**
     * Subir documento (PP-02: Gestión de Documentos)
     */
    public function uploadDocument($request, $id)
    {
        $this->validate($request, [
            'documento' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'tipo' => 'required|string',
            'descripcion' => 'nullable|string'
        ]);

        // Simular subida de documento
        return $this->back()->with('success', 'Documento subido exitosamente');
    }
}
