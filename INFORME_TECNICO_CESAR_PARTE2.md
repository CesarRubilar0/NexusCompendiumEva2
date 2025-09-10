
# Documentación Detallada de Funcionalidades: Proyecto Nexus Compendium

## Introducción
Nexus Compendium es una plataforma web desarrollada para la gestión de proyectos de vinculación con el medio en instituciones educativas. Permite administrar proyectos, usuarios, actores de interés, documentos y roles, integrando funcionalidades de autenticación, panel de control y asistencia virtual. El sistema está construido siguiendo el patrón MVC de Laravel y busca facilitar la colaboración, el seguimiento y la organización de la información clave para la comunidad educativa.

## 1. CRUD de César: Proyectos, Actores y Usuarios
### Migraciones asociadas
"Antes de poder crear, leer, actualizar o eliminar registros, necesitamos que existan las tablas en la base de datos. Para eso usamos migraciones en Laravel. Por ejemplo, la migración para la tabla de proyectos podría verse así:"

```php
// database/migrations/2024_01_01_000002_create_proyectos_table.php
Schema::create('proyectos', function (Blueprint $table) {
  $table->id();
  $table->string('nombre');
  $table->text('descripcion')->nullable();
  $table->timestamps();
});
```
"Las migraciones de usuarios y actores siguen una lógica similar, definiendo los campos necesarios para cada entidad. Para aplicar todas las migraciones, ejecuta:"
```sh
php artisan migrate
```

### ¿Qué es un CRUD?
CRUD significa Crear, Leer, Actualizar y Eliminar. Son las operaciones básicas para gestionar datos en una aplicación web.

### ¿Qué implementó César?
César desarrolló el CRUD para las entidades principales: Proyectos, Actores de Interés y Usuarios. Esto permite a los administradores y usuarios autorizados gestionar toda la información relevante desde la web.

### ¿Cómo se comunican las partes del CRUD?

Cada operación del CRUD se apoya en la existencia previa de la tabla correspondiente en la base de datos, creada mediante una migración. Así, el flujo completo es:
- **Migración** (en `database/migrations/`): define y crea la tabla en la base de datos para la entidad (por ejemplo, `proyectos`).
- **Ruta** (definida en `routes/web.php`): recibe la petición del usuario y la dirige al controlador.
- **Controlador** (en `app/Http/Controllers/`): contiene la lógica para procesar la petición, interactuar con el modelo y decidir qué vista mostrar.
- **Modelo** (en `app/Models/`): representa la entidad en la base de datos y permite consultar, crear, actualizar o eliminar registros.
- **Vista** (en `resources/views/`): muestra los formularios y listados al usuario.


**Ejemplo de flujo para Proyectos:**
1. Se ejecuta la **migración** para crear la tabla `proyectos` en la base de datos:
  ```sh
  php artisan migrate
  ```
2. El usuario accede a `/proyectos` (ruta en `routes/web.php`).
3. La ruta llama a `ProjectController@index` (en `app/Http/Controllers/ProjectController.php`).
4. El controlador obtiene los proyectos usando el modelo `Project` (en `app/Models/Project.php`).
5. El controlador retorna la vista `proyectos/index.blade.php` (en `resources/views/proyectos/`).
6. El usuario ve el listado y puede crear, editar o eliminar proyectos desde la interfaz.


**Carpetas clave para el CRUD:**
- Migraciones: `database/migrations/`
- Rutas: `routes/web.php`
- Controladores: `app/Http/Controllers/`
- Modelos: `app/Models/`
- Vistas: `resources/views/proyectos/`, `resources/views/usuarios/`, `resources/views/actores/`

### ¿Cómo funciona el CRUD?

#### a) Crear (Create)
- **Ruta:** `/proyectos/crear`, `/usuarios/crear`, `/actores/crear`
- **Vista:** Formulario donde el usuario ingresa los datos.
- **Ejemplo:**
```php
// routes/web.php
Route::get('/proyectos/crear', function () {
  return view('proyectos.create');
});
```
En la vista `proyectos/create.blade.php`:
```blade
<form action="/proyectos" method="POST">
  @csrf
  <input type="text" name="nombre" placeholder="Nombre del proyecto">
  <button type="submit">Guardar</button>
</form>
```

#### b) Leer (Read)
- **Ruta:** `/proyectos`, `/usuarios`, `/actores`
- **Vista:** Listado de todos los registros.
- **Ejemplo:**
```php
Route::get('/proyectos', [ProjectController::class, 'index']);
```
En la vista `proyectos/index.blade.php`:
```blade
@foreach($proyectos as $proyecto)
  <tr>
    <td>{{ $proyecto->nombre }}</td>
    <td><a href="/proyectos/{{ $proyecto->id }}">Ver</a></td>
  </tr>
@endforeach
```

#### c) Actualizar (Update)
- **Ruta:** `/proyectos/{id}/editar`, `/usuarios/{id}/editar`, `/actores/{id}/editar`
- **Vista:** Formulario con los datos actuales para modificar.
- **Ejemplo:**
```php
Route::get('/proyectos/{id}/editar', [ProjectController::class, 'edit']);
Route::put('/proyectos/{id}', [ProjectController::class, 'update']);
```
En la vista `proyectos/edit.blade.php`:
```blade
<form action="/proyectos/{{ $proyecto->id }}" method="POST">
  @csrf
  @method('PUT')
  <input type="text" name="nombre" value="{{ $proyecto->nombre }}">
  <button type="submit">Actualizar</button>
</form>
```

#### d) Eliminar (Delete)
- **Ruta:** Acción desde el listado o detalle.
- **Ejemplo:**
```blade
<form action="/proyectos/{{ $proyecto->id }}" method="POST">
  @csrf
  @method('DELETE')
  <button type="submit">Eliminar</button>
</form>
```

### ¿Por qué y para qué?
- Permite mantener la información actualizada y organizada.
- Facilita la administración de los datos clave del sistema.
- Mejora la experiencia del usuario y la eficiencia operativa.

### ¿Cómo lo hace?
- Usa rutas en `web.php`, controladores dedicados y vistas Blade.
- Valida los datos antes de guardarlos o actualizarlos.
- Redirige y muestra mensajes de éxito o error según la acción.

---

## 2. CRUD de Frank: Usuarios y Roles
### Migraciones asociadas
"Para gestionar usuarios y roles, también necesitamos sus tablas. Por ejemplo, la migración para la tabla de roles podría ser:"
```php
// database/migrations/2024_01_01_000003_create_roles_table.php
Schema::create('roles', function (Blueprint $table) {
  $table->id();
  $table->string('nombre');
  $table->timestamps();
});
```
"Y la tabla de usuarios suele tener una relación con roles (por ejemplo, un campo role_id). Recuerda ejecutar las migraciones para crear estas tablas."
Frank se encargó de la gestión avanzada de usuarios y roles, permitiendo asignar permisos y controlar el acceso a diferentes partes del sistema.

- Crear usuario con rol específico.
- Editar roles de usuarios existentes.
- Listar usuarios y filtrar por rol.

**Ejemplo:**
```php
Route::get('/usuarios', [UserController::class, 'index']);
Route::post('/usuarios', [UserController::class, 'store']);
```
En la vista:
```blade
@foreach($usuarios as $usuario)
  <td>{{ $usuario->nombre }}</td>
  <td>{{ $usuario->rol->nombre }}</td>
@endforeach
```

---

## 3. CRUD de Sofía: Proyectos y Documentos
### Migraciones asociadas
"Para poder subir y asociar documentos a proyectos, necesitamos una tabla de documentos. Un ejemplo de migración sería:"
```php
// database/migrations/2024_01_01_000004_create_documentos_table.php
Schema::create('documentos', function (Blueprint $table) {
  $table->id();
  $table->string('nombre');
  $table->string('ruta');
  $table->unsignedBigInteger('proyecto_id');
  $table->timestamps();

  $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');
});
```
"Así, cada documento queda vinculado a un proyecto. Ejecuta las migraciones para tener listas estas tablas."
Sofía implementó la gestión de proyectos y documentos asociados, permitiendo adjuntar archivos, ver detalles y editar información relevante.

- Subir documentos a un proyecto.
- Ver y descargar documentos asociados.
- Editar información de proyectos y documentos.

**Ejemplo:**
```php
Route::post('/proyectos/{id}/documentos', [DocumentoController::class, 'store']);
```
En la vista:
```blade
<form action="/proyectos/{{ $proyecto->id }}/documentos" method="POST" enctype="multipart/form-data">
  @csrf
  <input type="file" name="documento">
  <button type="submit">Subir</button>
</form>
```

---

## 4. Chatbot de Eduardo: Asistente de IA
Eduardo integró un chatbot de IA para asistencia y consultas rápidas.

- El usuario accede a `/chatgpt`.
- Escribe su pregunta y la envía.
- El sistema responde usando un modelo de IA (por ejemplo, OpenAI).

**Ejemplo:**
```blade
<form id="chatgpt-form">
  <textarea name="prompt"></textarea>
  <button type="submit">Enviar</button>
</form>
```
En el controlador:
```php
public function askChatGPT(Request $request) {
  $respuesta = $this->servicioIA->consultar($request->input('prompt'));
  return response()->json(['respuesta' => $respuesta]);
}
```

---

## 5. Dashboard de Pablo: Panel de Control
Pablo diseñó el dashboard principal, que centraliza la navegación y muestra estadísticas clave.

- Tras iniciar sesión, el usuario es redirigido a `/dashboard`.
- El dashboard muestra tarjetas con métricas, accesos rápidos y enlaces a las secciones principales.

**Ejemplo de vista:**
```blade
<div class="dashboard-stats">
  <div class="stat-card">
    <h3>{{ $proyectosActivos }}</h3>
    <p>Proyectos Activos</p>
  </div>
  <div class="stat-card">
    <h3>{{ $usuarios }}</h3>
    <p>Usuarios Registrados</p>
  </div>
</div>
```

---

## 6. Resumen: ¿Cómo coexisten y funcionan juntos?
- El CRUD de César, Frank y Sofía permite gestionar toda la información relevante (proyectos, usuarios, documentos, actores).
- El chatbot de Eduardo ofrece asistencia y respuestas rápidas a los usuarios.
- El dashboard de Pablo centraliza la información y facilita la navegación.
- Todos los módulos están conectados mediante rutas, controladores y vistas, compartiendo la base de datos y la autenticación.
- El sistema usa middlewares para proteger rutas y asegurar que solo usuarios autorizados accedan a ciertas funciones.

---

## 7. Códigos de Estado HTTP (Errores y Éxitos)
- **200 OK:** Todo funcionó correctamente.
- **201 Created:** Un recurso fue creado exitosamente.
- **400 Bad Request:** La solicitud es incorrecta o faltan datos.
- **401 Unauthorized:** El usuario no está autenticado.
- **403 Forbidden:** El usuario no tiene permisos para acceder.
- **404 Not Found:** La ruta o recurso solicitado no existe.
- **500 Internal Server Error:** Error inesperado en el servidor.

**Ejemplo de error 404:**
Si intentas acceder a `/actores/crear` y no existe la vista o la ruta, verás un error 404.

---

Esta documentación sirve como guía para entender cómo cada parte del sistema contribuye al funcionamiento general y cómo interactúan entre sí para ofrecer una experiencia completa y robusta.


---

## 8. Seeders: Datos de ejemplo y su importancia en los CRUD

Los seeders permiten poblar la base de datos con datos de ejemplo o iniciales, facilitando el desarrollo, las pruebas y la demostración de funcionalidades.

- **Ubicación:** `database/seeders/`
- **Ejemplo:** `DatabaseSeeder.php`, `TestUserSeeder.php`, etc.

**¿Por qué son importantes para los CRUD?**
- Permiten probar las operaciones de Crear, Leer, Actualizar y Eliminar con datos reales o simulados.
- Facilitan la validación de reglas de negocio y la visualización de la interfaz con información relevante.
- Ayudan a que todos los desarrolladores y testers trabajen con la misma base de datos inicial.

**¿Cómo se usan?**
1. Se crean seeders personalizados para poblar tablas como usuarios, proyectos, actores, etc.
2. Se ejecutan con el comando:
  ```sh
  php artisan db:seed
  ```
3. Se pueden combinar con migraciones para reiniciar y poblar la base de datos:
  ```sh
  php artisan migrate:fresh --seed
  ```

**En resumen:** Los seeders son aliados clave para el desarrollo y la robustez de los CRUD, asegurando que siempre haya datos disponibles para probar y mostrar el funcionamiento del sistema.
