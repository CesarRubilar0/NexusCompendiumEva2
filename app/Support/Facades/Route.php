<?php

namespace Illuminate\Support\Facades;

class Route 
{
    private static $routes = [];
    
    public static function get($path, $callback)
    {
        self::$routes['GET'][$path] = $callback;
        return new static;
    }
    
    public static function post($path, $callback)
    {
        self::$routes['POST'][$path] = $callback;
        return new static;
    }
    
    public static function put($path, $callback)
    {
        self::$routes['PUT'][$path] = $callback;
        return new static;
    }
    
    public static function delete($path, $callback)
    {
        self::$routes['DELETE'][$path] = $callback;
        return new static;
    }
    
    public static function getRoutes()
    {
        return self::$routes;
    }
    
    public static function resolve($method, $path)
    {
        if (isset(self::$routes[$method][$path])) {
            return call_user_func(self::$routes[$method][$path]);
        }
        
        // Buscar rutas con parámetros
        foreach (self::$routes[$method] ?? [] as $route => $callback) {
            if (preg_match('#^' . preg_replace('/\{[^}]+\}/', '([^/]+)', $route) . '$#', $path, $matches)) {
                array_shift($matches); // Remover el match completo
                return call_user_func_array($callback, $matches);
            }
        }
        
        return null;
    }
}
