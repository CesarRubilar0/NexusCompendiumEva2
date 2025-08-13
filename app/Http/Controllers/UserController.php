<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Factories\UserFactory;

class UserController extends Controller
{
    /**
     * Mostrar directorio de usuarios (PP-04)
     */
    public function index()
    {
        // Generar usuarios de prueba para testing
        $userFactory = new UserFactory();
        
        $usuarios = [
            $userFactory->admin()->make(),
            $userFactory->coordinator()->make(),
            ...$userFactory->teacher()->count(3),
            ...$userFactory->tutor()->count(2),
            ...$userFactory->student()->count(10)
        ];

        $roles = Role::getDefaultRoles();

        return $this->view('usuarios.index', compact('usuarios', 'roles'));
    }

    /**
     * Filtrar usuarios por criterios (PP-04: Directorio)
     */
    public function filter($criteria, $value)
    {
        $userFactory = new UserFactory();
        
        // Simular filtrado según criterios
        $usuarios_filtrados = [];
        
        switch($criteria) {
            case 'rol':
                if($value == 'docente') {
                    $usuarios_filtrados = $userFactory->teacher()->count(5);
                } elseif($value == 'estudiante') {
                    $usuarios_filtrados = $userFactory->student()->count(15);
                }
                break;
            case 'area':
                // Simular filtrado por área académica
                $usuarios_filtrados = $userFactory->student()->count(8);
                break;
        }

        return $this->view('usuarios.index', [
            'usuarios' => $usuarios_filtrados,
            'filtro_aplicado' => "{$criteria}: {$value}"
        ]);
    }

    /**
     * Mostrar perfil específico
     */
    public function show($id)
    {
        $userFactory = new UserFactory();
        $usuario_data = $userFactory->teacher()->make();
        
        // Simular usuario como objeto con ID
        $usuario = (object) array_merge([
            'id' => $id,
            'name' => 'Usuario de Prueba',
            'email' => 'usuario.test@ipss.cl',
            'role' => 'Docente'
        ], is_array($usuario_data) ? $usuario_data : []);

        return $this->view('usuarios.show', compact('usuario'));
    }

    /**
     * Crear nuevo usuario
     */
    public function create()
    {
        $roles = Role::getDefaultRoles();
        return $this->view('usuarios.create', compact('roles'));
    }

    /**
     * Almacenar nuevo usuario (PP-03: Registro)
     */
    public function store($request)
    {
        // Validaciones para testing de registro
        $validated = [
            'name' => $request['name'] ?? '',
            'email' => $request['email'] ?? '',
            'password' => $request['password'] ?? '',
            'role_id' => $request['role_id'] ?? 5
        ];

        // Validar email institucional
        if (!str_ends_with($validated['email'], '@ipss.cl')) {
            return $this->back()->withErrors(['email' => 'Debe usar correo institucional @ipss.cl']);
        }

        // Simular creación de usuario
        $userFactory = new UserFactory();
        $usuario_data = $userFactory->withRole($validated['role_id'])->make();
        
        // Crear objeto usuario para testing
        $usuario = (object) [
            'id' => rand(1, 1000),
            'name' => $validated['name'],
            'email' => $validated['email'],
            'role_id' => $validated['role_id'],
            'created_at' => date('Y-m-d H:i:s')
        ];

        return $this->redirect('/usuarios')
            ->with('success', 'Usuario registrado exitosamente')
            ->with('usuario_creado', $usuario);
    }

    /**
     * Asignar usuario a equipo (PP-04: Gestión de Equipos)
     */
    public function assignToTeam($userId, $projectId)
    {
        // Simular asignación a equipo
        return $this->back()->with('success', 'Usuario asignado al equipo exitosamente');
    }

    /**
     * Buscar usuarios (PP-04: Directorio)
     */
    public function search($query)
    {
        $userFactory = new UserFactory();
        
        // Simular búsqueda
        $usuarios_encontrados = $userFactory->student()->count(3);
        
        return $this->view('usuarios.index', [
            'usuarios' => $usuarios_encontrados,
            'busqueda' => $query
        ]);
    }
}
