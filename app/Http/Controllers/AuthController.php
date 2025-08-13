<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    /**
     * Mostrar formulario de login (PP-03)
     */
    public function showLoginForm()
    {
        return $this->view('auth.login');
    }

    /**
     * Procesar login (PP-03: Autenticación)
     */
    public function login($request)
    {
        $validated = [
            'email' => $request['email'] ?? '',
            'password' => $request['password'] ?? ''
        ];

        // Validaciones para testing
        if (empty($validated['email']) || empty($validated['password'])) {
            return $this->back()->withErrors(['error' => 'Email y contraseña son obligatorios']);
        }

        if (!str_ends_with($validated['email'], '@ipss.cl')) {
            return $this->back()->withErrors(['email' => 'Debe usar correo institucional @ipss.cl']);
        }

        // Simular autenticación exitosa
        $user = (object)[
            'id' => 1,
            'name' => 'Usuario IPSS',
            'email' => $validated['email'],
            'role' => $this->determineRole($validated['email'])
        ];

        // Redireccionar según rol (PP-03: Permisos basados en roles)
        $redirectUrl = $this->getRedirectByRole($user->role);

        return $this->redirect($redirectUrl)
            ->with('success', 'Autenticación exitosa')
            ->with('user', $user);
    }

    /**
     * Logout del sistema
     */
    public function logout()
    {
        return $this->redirect('/login')
            ->with('success', 'Sesión cerrada exitosamente');
    }

    /**
     * Determinar rol basado en email (para testing)
     */
    private function determineRole($email)
    {
        if (strpos($email, 'admin') !== false) return 'administrador';
        if (strpos($email, 'coord') !== false) return 'coordinador';
        if (strpos($email, 'doc') !== false) return 'docente';
        if (strpos($email, 'tutor') !== false) return 'tutor';
        return 'estudiante';
    }

    /**
     * Obtener URL de redirección según rol
     */
    private function getRedirectByRole($role)
    {
        $redirects = [
            'administrador' => '/admin/dashboard',
            'coordinador' => '/coordinator/dashboard',
            'docente' => '/teacher/dashboard',
            'tutor' => '/tutor/dashboard',
            'estudiante' => '/student/dashboard'
        ];

        return $redirects[$role] ?? '/dashboard';
    }
}
