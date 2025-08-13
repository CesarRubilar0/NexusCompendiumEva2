<?php

namespace App\Http\Controllers;

/**
 * Clase base para controllers del proyecto IPSS
 * Simula funcionalidades básicas de Laravel para testing
 */
abstract class Controller
{
    /**
     * Simular función view() de Laravel
     */
    protected function view($viewName, $data = [])
    {
        // En un entorno real, esto renderizaría la vista Blade
        // Para testing, retornamos un objeto con la información
        return (object)[
            'view' => $viewName,
            'data' => $data,
            'rendered' => true
        ];
    }

    /**
     * Simular función redirect() de Laravel
     */
    protected function redirect($url)
    {
        return (object)[
            'type' => 'redirect',
            'url' => $url,
            'with_data' => []
        ];
    }

    /**
     * Simular función back() de Laravel
     */
    protected function back()
    {
        return (object)[
            'type' => 'back',
            'with_data' => []
        ];
    }

    /**
     * Simular función response() de Laravel
     */
    protected function response()
    {
        return new class {
            public function json($data, $status = 200) {
                return (object)[
                    'type' => 'json',
                    'data' => $data,
                    'status' => $status
                ];
            }
        };
    }

    /**
     * Validar datos de entrada (simulado)
     */
    protected function validate($data, $rules, $messages = [])
    {
        $validated = [];
        
        foreach ($rules as $field => $rule) {
            if (strpos($rule, 'required') !== false) {
                if (!isset($data[$field]) || empty($data[$field])) {
                    throw new \Exception($messages[$field . '.required'] ?? "El campo {$field} es obligatorio");
                }
            }
            $validated[$field] = $data[$field] ?? null;
        }
        
        return $validated;
    }
}
