<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ProjectController extends Controller
{
    use AuthorizesRequests;
    public function index()
    {
        $proyectos = Project::where('user_id', Auth::id())->get();
        return view('proyectos.index', compact('proyectos'));
    }

    public function create()
    {
        return view('proyectos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'partner_organization' => 'required|string',
            'status' => 'required|in:propuesto,aprobado,en_progreso,completado,rechazado',
            'start_date' => 'nullable|date',
        ]);
        $validated['user_id'] = Auth::id();
        Project::create($validated);
        return redirect()->route('proyectos.index')->with('success', 'Proyecto creado exitosamente');
    }

    public function show(Project $proyecto)
    {
        $this->authorize('view', $proyecto);
        return view('proyectos.show', compact('proyecto'));
    }

    public function edit(Project $proyecto)
    {
        $this->authorize('update', $proyecto);
        return view('proyectos.edit', compact('proyecto'));
    }

    public function update(Request $request, Project $proyecto)
    {
        $this->authorize('update', $proyecto);
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'partner_organization' => 'required|string',
            'status' => 'required|in:propuesto,aprobado,en_progreso,completado,rechazado',
            'start_date' => 'nullable|date',
        ]);
        $proyecto->update($validated);
        return redirect()->route('proyectos.show', $proyecto)->with('success', 'Proyecto actualizado exitosamente');
    }

    public function destroy(Project $proyecto)
    {
        $this->authorize('delete', $proyecto);
        $proyecto->delete();
        return redirect()->route('proyectos.index')->with('success', 'Proyecto eliminado exitosamente');
    }
}
