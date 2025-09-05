# Cómo crear un CRUD para una nueva funcionalidad

Sigue estos pasos para agregar un CRUD (Crear, Leer, Actualizar, Eliminar) en tu proyecto utilizando comandos `php artisan`:

---

## 1. Crea el Modelo y la Migración

En consola, ejecuta:
```sh
php artisan make:model NuevaEntidad -m
```
Esto creará el modelo en `app/Models/NuevaEntidad.php` y la migración correspondiente en `database/migrations/`.

### Edita la migración para definir los campos de la tabla

1. Abre el archivo de migración generado en `database/migrations/` (por ejemplo, `2025_09_04_000000_create_nueva_entidad_table.php`).
2. Dentro del método `up`, ubica la función `Schema::create` y edita la estructura de la tabla usando los métodos de Laravel. Por ejemplo:

```php
public function up()
{
  Schema::create('nueva_entidad', function (Blueprint $table) {
    $table->id();
    $table->string('nombre');
    $table->text('descripcion')->nullable();
    $table->integer('cantidad');
    $table->timestamps();
  });
}
```

3. Guarda el archivo.
4. Luego ejecuta la migración en consola:
```sh
php artisan migrate
```

---

## 2. Crea el Controlador tipo Resource

En consola, ejecuta:
```sh
php artisan make:controller NuevaEntidadController --resource
```
Esto generará un controlador con todos los métodos necesarios para el CRUD en `app/Http/Controllers/NuevaEntidadController.php`.

---

## 3. Define las Rutas

En `routes/web.php` agrega:
```php
use App\Http\Controllers\NuevaEntidadController;

Route::resource('nuevaentidad', NuevaEntidadController::class);
```

---

## 4. Crea las Vistas Blade

En `resources/views/nuevaentidad/` crea los archivos:
- `index.blade.php` (listar)
- `create.blade.php` (formulario crear)
- `edit.blade.php` (formulario editar)
- `show.blade.php` (detalle)

Puedes usar los métodos del controlador para pasar datos a estas vistas.

---

## 5. Conecta Todo

- El usuario accede a `/nuevaentidad` → se muestra la lista.
- Puede crear, editar, ver o eliminar registros usando los botones y formularios de las vistas.
- El controlador gestiona la lógica y usa el modelo para interactuar con la base de datos.

---

## 6. (Extra) Agrega Validaciones y Mensajes

En el controlador, usa `$request->validate([...])` para validar datos antes de guardar o actualizar.

---

¡Listo! Así puedes agregar cualquier CRUD siguiendo la estructura y buenas prácticas de tu proyecto usando `php artisan`.
# Documentación de Funcionalidades y Arquitectura MVC  
**Proyecto: Nexus Compendium**

---

## Índice

1. [Introducción](#introducción)
2. [Resumen de Funcionalidades](#resumen-de-funcionalidades)
3. [Estructura MVC y Flujo de Interacción](#estructura-mvc-y-flujo-de-interacción)
4. [Detalle de Funcionalidades](#detalle-de-funcionalidades)
5. [Relación entre Funcionalidades y MVC](#relación-entre-funcionalidades-y-mvc)
6. [Notas Finales](#notas-finales)

---

## Introducción

Nexus Compendium es una plataforma web para la gestión de proyectos de vinculación con el medio, orientada a instituciones educativas. El sistema sigue una arquitectura MVC (Modelo-Vista-Controlador) inspirada en Laravel, aunque con una implementación personalizada.

---

## Resumen de Funcionalidades

- **Autenticación de usuarios** (login, registro)
- **Gestión de usuarios** (CRUD)
- **Gestión de proyectos** (CRUD, asignación de participantes)
- **Gestión de áreas académicas**
- **Gestión de institutos**
- **Gestión de actores de interés**
- **Gestión de roles**
- **Gestión de reportes**
- **Panel de control (dashboard)**
- **Asistente de ayuda (ChatGPT)**
- **Sistema de rutas personalizado**
- **Sistema de vistas Blade**

---

## Estructura MVC y Flujo de Interacción

### 1. **Modelo (app/Models)**
Representa la lógica de datos y las entidades principales:
- [`User`](app/Models/User.php)
- [`Project`](app/Models/Project.php)
- [`Role`](app/Models/Role.php)
- [`Institute`](app/Models/Institute.php)
- Otros: [`AreaAcademica`](app/Models/AreaAcademica.php), [`EstadoProyecto`](app/Models/EstadoProyecto.php), etc.

### 2. **Controlador (app/Http/Controllers)**
Gestiona la lógica de negocio y responde a las solicitudes del usuario:
- [`ProjectController`](app/Http/Controllers/ProjectController.php)
- [`AreaAcademicaController`](app/Http/Controllers/AreaAcademicaController.php)
- [`ChatGPTController`](app/Http/Controllers/ChatGPTController.php)
- Otros controladores para usuarios, actores, etc.

### 3. **Vista (resources/views)**
Presenta la información al usuario usando plantillas Blade:
- Ejemplo: `proyectos/index.blade.php`, `usuarios/index.blade.php`, `dashboard/dashboard.blade.php`, etc.

### 4. **Rutas (routes/web.php)**
Define las URLs y asocia cada ruta a un controlador o vista.

---

## Detalle de Funcionalidades

### 1. **Autenticación**
- **Login y registro**: Permite acceso seguro y registro de nuevos usuarios.
- **MVC**:  
  - Modelo: [`User`](app/Models/User.php)  
  - Controlador: (no visible, pero gestionado en rutas y helpers)  
  - Vista: `auth/login.blade.php`, `auth/registro.blade.php`

### 2. **Gestión de Usuarios**
- **CRUD de usuarios**: Crear, listar, editar y eliminar usuarios.
- **MVC**:  
  - Modelo: [`User`](app/Models/User.php)  
  - Controlador: (lógica en rutas y helpers)  
  - Vista: `usuarios/index.blade.php`, `usuarios/create.blade.php`, `usuarios/show.blade.php`

### 3. **Gestión de Proyectos**
- **CRUD de proyectos**: Administración de proyectos, asignación de participantes, seguimiento de estado.
- **MVC**:  
  - Modelo: [`Project`](app/Models/Project.php)  
  - Controlador: [`ProjectController`](app/Http/Controllers/ProjectController.php)  
  - Vista: `proyectos/index.blade.php`, `proyectos/create.blade.php`, `proyectos/show.blade.php`

### 4. **Gestión de Áreas Académicas**
- **CRUD de áreas**: Permite definir y administrar áreas académicas.
- **MVC**:  
  - Modelo: [`AreaAcademica`](app/Models/AreaAcademica.php)  
  - Controlador: [`AreaAcademicaController`](app/Http/Controllers/AreaAcademicaController.php)  
  - Vista: `areas/index.blade.php`, `areas/create.blade.php`

### 5. **Gestión de Institutos**
- **CRUD de institutos**: Administración de organizaciones aliadas.
- **MVC**:  
  - Modelo: [`Institute`](app/Models/Institute.php)  
  - Controlador: (lógica en rutas y helpers)  
  - Vista: `institutos/index.blade.php`

### 6. **Gestión de Actores de Interés**
- **CRUD de actores**: Permite registrar y administrar actores relevantes para los proyectos.
- **MVC**:  
  - Modelo: [`TiposActor`](app/Models/TiposActor.php)  
  - Controlador: (lógica en rutas y helpers)  
  - Vista: `actores/index.blade.php`, `actores/create.blade.php`

### 7. **Gestión de Roles**
- **Definición y asignación de roles**: Control de permisos y accesos.
- **MVC**:  
  - Modelo: [`Role`](app/Models/Role.php)  
  - Controlador: (lógica en seeders y helpers)  
  - Vista: (integrada en formularios de usuario)

### 8. **Reportes**
- **Generación de reportes**: Métricas y estadísticas de proyectos y usuarios.
- **MVC**:  
  - Modelo: (datos agregados de modelos principales)  
  - Controlador: (lógica en rutas y helpers)  
  - Vista: `reportes/index.blade.php`, `reportes/generar.blade.php`

### 9. **Panel de Control (Dashboard)**
- **Vista centralizada**: Estadísticas y accesos rápidos.
- **MVC**:  
  - Modelo: (datos agregados de modelos principales)  
  - Controlador: (lógica en rutas y helpers)  
  - Vista: `dashboard/dashboard.blade.php`

### 10. **Asistente de Ayuda (ChatGPT)**
- **Chat en modal**: Asistente virtual para ayuda contextual.
- **MVC**:  
  - Controlador: [`ChatGPTController`](app/Http/Controllers/ChatGPTController.php)  
  - Vista: `components/chatgpt.blade.php`  
  - Rutas: `/chatgpt`, `/chatgpt/ask`

---

## Relación entre Funcionalidades y MVC

- **Modelos**: Representan las entidades y relaciones de la base de datos.
- **Controladores**: Reciben las solicitudes del usuario, procesan la lógica y seleccionan la vista adecuada.
- **Vistas**: Presentan los datos al usuario y reciben la interacción.
- **Rutas**: Definen el flujo de navegación y conectan URLs con controladores/vistas.

**Ejemplo de flujo:**  
1. Usuario accede a `/proyectos`  
2. La ruta llama a `ProjectController@index`  
3. El controlador obtiene los proyectos desde el modelo  
4. Se retorna la vista `proyectos/index.blade.php` con los datos

---

## Notas Finales

- El sistema utiliza un **routing personalizado** ([`Route`](app/Support/Facades/Route.php)) para mapear URLs a controladores o vistas.
- Las migraciones y seeders ([database/migrations](database/migrations/), [database/seeders](database/seeders/)) preparan la estructura y datos iniciales.
- El sistema de vistas Blade permite reutilización y herencia de layouts.
- La arquitectura facilita la escalabilidad y el mantenimiento del código.

---

**Para más detalles técnicos, consulta el archivo [README.md](README.md) y la documentación de cada modelo y controlador.**