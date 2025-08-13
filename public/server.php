<?php
/**
 * NEXUS COMPENDIUM - SERVIDOR SIMPLE PARA TESTING
 * Este archivo funciona SIN dependencias de Laravel
 */

// Simular rutas básicas
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$path = parse_url($request_uri, PHP_URL_PATH);

// Autoloader manual para nuestras clases
function loadProjectClasses($className) {
    $basePath = __DIR__ . '/../';
    
    // Mapa de clases principales
    $classMap = [
        'ProyectoController' => 'app/Http/Controllers/ProyectoController.php',
        'UserController' => 'app/Http/Controllers/UserController.php',
        'CommunicationController' => 'app/Http/Controllers/CommunicationController.php',
        'ReportsController' => 'app/Http/Controllers/ReportsController.php',
        'AIController' => 'app/Http/Controllers/AIController.php',
        'AuthController' => 'app/Http/Controllers/AuthController.php',
        'Controller' => 'app/Http/Controllers/Controller.php',
    ];
    
    if (isset($classMap[$className])) {
        $file = $basePath . $classMap[$className];
        if (file_exists($file)) {
            require_once $file;
        }
    }
}

spl_autoload_register('loadProjectClasses');

// Incluir controller base
require_once __DIR__ . '/../app/Http/Controllers/Controller.php';

// Procesar rutas simples
switch($path) {
    case '/':
    case '/index.php':
        showHomePage();
        break;
        
    case '/test-proyecto':
        testProyectoController();
        break;
        
    case '/test-users':
        testUserController();
        break;
        
    case '/test-communication':
        testCommunicationController();
        break;
        
    case '/test-reports':
        testReportsController();
        break;
        
    case '/test-ai':
        testAIController();
        break;
        
    default:
        show404();
        break;
}

function showHomePage() {
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>🚀 Nexus Compendium - Testing</title>
        <style>
            * { margin: 0; padding: 0; box-sizing: border-box; }
            body { 
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                min-height: 100vh; padding: 20px;
            }
            .container { 
                max-width: 1200px; margin: 0 auto; background: white;
                border-radius: 20px; padding: 40px; box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            }
            h1 { color: #333; text-align: center; margin-bottom: 30px; font-size: 2.5em; }
            .status { 
                background: #d4edda; border: 1px solid #c3e6cb; border-radius: 10px;
                padding: 20px; margin: 20px 0; text-align: center; color: #155724;
            }
            .grid { 
                display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 20px; margin-top: 30px;
            }
            .card { 
                background: #f8f9fa; border-radius: 15px; padding: 25px;
                border-left: 5px solid #667eea; transition: transform 0.3s ease;
            }
            .card:hover { transform: translateY(-5px); }
            .card h3 { margin-bottom: 15px; color: #2c3e50; }
            .card p { color: #7f8c8d; margin-bottom: 20px; }
            .btn { 
                background: linear-gradient(45deg, #667eea, #764ba2); color: white;
                padding: 12px 20px; border: none; border-radius: 8px; cursor: pointer;
                font-weight: bold; text-decoration: none; display: inline-block;
                transition: all 0.3s ease;
            }
            .btn:hover { transform: scale(1.05); box-shadow: 0 5px 15px rgba(0,0,0,0.2); }
            .info { background: #e3f2fd; border-left: 5px solid #2196f3; padding: 15px; margin: 20px 0; }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>🚀 Nexus Compendium</h1>
            <h2 style="text-align: center; color: #666; margin-bottom: 20px;">Testing Environment Simplificado</h2>
            
            <div class="status">
                <strong>✅ SERVIDOR FUNCIONANDO SIN DEPENDENCIAS LARAVEL</strong><br>
                Todos los controllers están disponibles para testing directo
            </div>
            
            <div class="info">
                <strong>💡 Información:</strong> Este servidor funciona sin <code>composer install</code> ni dependencias Laravel.
                Perfecto para testing académico de controllers.
            </div>
            
            <div class="grid">
                <div class="card">
                    <h3>👤 César - Gestión de Proyectos</h3>
                    <p><strong>PP-01, PP-02:</strong> Creación de proyectos, documentos, dashboard</p>
                    <a href="/test-proyecto" class="btn">🧪 Probar ProyectoController</a>
                </div>
                
                <div class="card">
                    <h3>👤 Frank - Usuarios y Equipos</h3>
                    <p><strong>PP-03, PP-04:</strong> Registro, autenticación, directorio</p>
                    <a href="/test-users" class="btn">🧪 Probar UserController</a>
                </div>
                
                <div class="card">
                    <h3>👤 Sofía - Comunicación</h3>
                    <p><strong>PP-05, PP-06:</strong> Chat, reuniones, notificaciones</p>
                    <a href="/test-communication" class="btn">🧪 Probar CommunicationController</a>
                </div>
                
                <div class="card">
                    <h3>👤 Pablo - Reportes</h3>
                    <p><strong>PP-07, PP-08:</strong> Analytics, KPIs, exportación</p>
                    <a href="/test-reports" class="btn">🧪 Probar ReportsController</a>
                </div>
                
                <div class="card">
                    <h3>👤 Eduardo - Inteligencia Artificial</h3>
                    <p><strong>PP-09, PP-10:</strong> Roadmaps IA, chatbot</p>
                    <a href="/test-ai" class="btn">🧪 Probar AIController</a>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 40px;">
                <h3>📋 Comandos para iniciar servidor:</h3>
                <code style="background: #f8f9fa; padding: 10px; border-radius: 5px; display: inline-block;">
                    cd public && php -S localhost:8000
                </code>
            </div>
        </div>
    </body>
    </html>
    <?php
}

function testProyectoController() {
    try {
        $controller = new ProyectoController();
        echo "<h1>🧪 Testing ProyectoController</h1>";
        echo "<p>✅ Controller cargado exitosamente</p>";
        
        // Test básico
        $resultado = $controller->index();
        echo "<p>✅ Método index() funciona</p>";
        echo "<pre>" . print_r($resultado, true) . "</pre>";
        
    } catch (Exception $e) {
        echo "<h1>❌ Error en ProyectoController</h1>";
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }
}

function testUserController() {
    try {
        $controller = new UserController();
        echo "<h1>🧪 Testing UserController</h1>";
        echo "<p>✅ Controller cargado exitosamente</p>";
        
        // Test básico
        $resultado = $controller->index();
        echo "<p>✅ Método index() funciona</p>";
        echo "<pre>" . print_r($resultado, true) . "</pre>";
        
    } catch (Exception $e) {
        echo "<h1>❌ Error en UserController</h1>";
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }
}

function testCommunicationController() {
    try {
        $controller = new CommunicationController();
        echo "<h1>🧪 Testing CommunicationController</h1>";
        echo "<p>✅ Controller cargado exitosamente</p>";
        
        // Test básico
        $resultado = $controller->messages(1);
        echo "<p>✅ Método messages() funciona</p>";
        echo "<pre>" . print_r($resultado, true) . "</pre>";
        
    } catch (Exception $e) {
        echo "<h1>❌ Error en CommunicationController</h1>";
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }
}

function testReportsController() {
    try {
        $controller = new ReportsController();
        echo "<h1>🧪 Testing ReportsController</h1>";
        echo "<p>✅ Controller cargado exitosamente</p>";
        
        // Test básico
        $resultado = $controller->dashboard();
        echo "<p>✅ Método dashboard() funciona</p>";
        echo "<pre>" . print_r($resultado, true) . "</pre>";
        
    } catch (Exception $e) {
        echo "<h1>❌ Error en ReportsController</h1>";
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }
}

function testAIController() {
    try {
        $controller = new AIController();
        echo "<h1>🧪 Testing AIController</h1>";
        echo "<p>✅ Controller cargado exitosamente</p>";
        
        // Test básico  
        $datos = ['descripcion_proyecto' => 'Test project'];
        $resultado = $controller->generateRoadmap(1, $datos);
        echo "<p>✅ Método generateRoadmap() funciona</p>";
        echo "<pre>" . print_r($resultado, true) . "</pre>";
        
    } catch (Exception $e) {
        echo "<h1>❌ Error en AIController</h1>";
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }
}

function show404() {
    http_response_code(404);
    echo "<h1>404 - Página no encontrada</h1>";
    echo "<a href='/'>Volver al inicio</a>";
}
?>
