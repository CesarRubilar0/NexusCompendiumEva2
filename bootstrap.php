<?php

// Autoloader básico para el proyecto
spl_autoload_register(function ($class) {
    // Mapeado de namespaces
    $prefixes = [
        'App\\' => __DIR__ . '/app/',
        'Illuminate\\Support\\Facades\\' => __DIR__ . '/app/Support/Facades/',
    ];
    
    foreach ($prefixes as $prefix => $base_dir) {
        $len = strlen($prefix);
        if (strncmp($prefix, $class, $len) === 0) {
            $relative_class = substr($class, $len);
            $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
            
            if (file_exists($file)) {
                require $file;
                return;
            }
        }
    }
});

// Funciones helper básicas para simular Laravel
if (!function_exists('fake')) {
    function fake() {
        return new class {
            private static $usedEmails = [];
            
            public function name() {
                $names = [
                    'Juan Pérez Morales', 'María García Silva', 'Carlos López Herrera', 
                    'Ana Martínez González', 'Luis Rodríguez Castro', 'Patricia Fernández Torres',
                    'Miguel Sánchez Ruiz', 'Carmen Jiménez Moreno', 'José Martín Díaz',
                    'Elena Vargas Peña', 'Francisco Romero Aguilar', 'Isabel Cruz Mendoza',
                    'Antonio Flores Vega', 'Rosa Guerrero Ortiz', 'Manuel Herrera Ramos',
                    'Pilar Molina Serrano', 'Diego Navarro Campos', 'Lucía Prieto Domínguez'
                ];
                return $names[array_rand($names)];
            }
            
            public function unique() {
                return $this;
            }
            
            public function safeEmail() {
                // Generar email basado en nombres reales
                $firstNames = ['juan', 'maria', 'carlos', 'ana', 'luis', 'patricia', 'miguel', 'carmen', 'jose', 'elena', 'francisco', 'isabel', 'antonio', 'rosa', 'manuel', 'pilar', 'diego', 'lucia'];
                $lastNames = ['perez', 'garcia', 'lopez', 'martinez', 'rodriguez', 'fernandez', 'sanchez', 'jimenez', 'martin', 'vargas', 'romero', 'cruz', 'flores', 'guerrero', 'herrera', 'molina', 'navarro', 'prieto'];
                
                $firstName = $firstNames[array_rand($firstNames)];
                $lastName = $lastNames[array_rand($lastNames)];
                
                // Crear diferentes formatos de email
                $formats = [
                    $firstName . '.' . $lastName,
                    $firstName . $lastName,
                    substr($firstName, 0, 1) . $lastName,
                    $firstName . '.' . substr($lastName, 0, 1),
                    $firstName . rand(10, 99)
                ];
                
                $baseEmail = $formats[array_rand($formats)];
                $email = $baseEmail . '@ipss.cl';
                
                // Asegurar que sea único
                $counter = 1;
                while (in_array($email, self::$usedEmails)) {
                    $email = $baseEmail . $counter . '@ipss.cl';
                    $counter++;
                }
                
                self::$usedEmails[] = $email;
                return $email;
            }
        };
    }
}

if (!function_exists('now')) {
    function now() {
        return date('Y-m-d H:i:s');
    }
}

// Clases básicas para simular Laravel
if (!class_exists('Hash')) {
    class Hash {
        public static function make($password) {
            return password_hash($password, PASSWORD_DEFAULT);
        }
    }
}

if (!class_exists('Str')) {
    class Str {
        public static function random($length = 16) {
            return bin2hex(random_bytes($length / 2));
        }
    }
}
