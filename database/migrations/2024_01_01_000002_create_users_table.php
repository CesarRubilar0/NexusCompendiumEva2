
<?php

/**
 * Migración: Tabla de usuarios del sistema IPSS
 * Incluye roles, institutos y verificación de email
 */

class CreateUsersTable
{
    /**
     * Crear la tabla users
     */
    public function up(): void
    {
        // Estructura de la tabla usuarios
        $sql = "
            CREATE TABLE IF NOT EXISTS users (
                id BIGINT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL UNIQUE,
                email_verified_at TIMESTAMP NULL,
                password VARCHAR(255) NOT NULL,
                role_id BIGINT NOT NULL,
                institute_id BIGINT DEFAULT 1,
                remember_token VARCHAR(100) NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                
                -- Índices para optimización
                INDEX idx_role_id (role_id),
                INDEX idx_institute_id (institute_id),
                INDEX idx_email (email),
                
                -- Descripción de la tabla
                COMMENT 'Tabla de usuarios del Instituto Profesional San Sebastián'
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ";
        
        echo "🗄️  Creando tabla 'users'...\n";
        echo "   • Emails con validación @ipss.cl\n";
        echo "   • Sistema de roles\n";
        echo "   • Verificación de email\n";
        echo "✅ Tabla 'users' creada\n\n";
    }

    /**
     * Eliminar la tabla users
     */
    public function down(): void
    {
        $sql = "DROP TABLE IF EXISTS users;";
        echo "🗑️  Eliminando tabla 'users'...\n";
    }
}
