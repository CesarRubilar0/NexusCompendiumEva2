# INFORME TÉCNICO CESAR – PARTE 2

## Responsabilidades y tareas asignadas

Este informe detalla exclusivamente las actividades y responsabilidades de César en el desarrollo del proyecto NexusCompendiumEva2, excluyendo aspectos de testing y enfocándose en la implementación y comunicación entre las distintas partes del sistema.

### 1. Implementación de Controladores y Modelos
- Desarrollo y mantenimiento de los controladores ubicados en `app/Http/Controllers/`, encargados de gestionar la lógica de negocio y la comunicación entre las vistas y los modelos.
- Creación y actualización de modelos en `app/Models/`, representando las entidades principales del sistema (por ejemplo, `Proyecto`, `User`, `Role`, etc.).

### 2. Gestión de Rutas
- Definición y organización de rutas en los archivos de la carpeta `routes/` (`web.php`, `web_rubrica.php`, etc.), asegurando la correcta vinculación entre URLs, controladores y vistas.

### 3. Comunicación entre Carpetas y Componentes
- Integración entre controladores, modelos y vistas para garantizar el flujo de datos y la funcionalidad del sistema.
- Uso de los seeders en `database/seeders/` para poblar la base de datos con información relevante para el funcionamiento de los módulos desarrollados.

### 4. Configuración y Soporte
- Apoyo en la configuración de archivos clave como `config/`, `composer.json` y `vite.config.js` para asegurar la correcta integración de dependencias y servicios.

### 5. Documentación
- Elaboración y actualización de documentación técnica relevante para la parte de César, facilitando la comprensión y el mantenimiento del código por parte del equipo.

## Migración de Datos y Funcionamiento

### Migraciones de Base de Datos
- Las migraciones se encuentran en la carpeta `database/migrations/`.
- Cada archivo de migración define la estructura de una tabla específica (por ejemplo, `proyectos`, `users`, `roles`, etc.) usando el sistema de migraciones de Laravel.
- Para crear o modificar tablas, se utilizan métodos como `Schema::create` y `Schema::table`.
- Las migraciones permiten versionar y actualizar la base de datos de forma controlada y reproducible.

### Implementación y Funcionamiento
- Las migraciones se ejecutan con el comando `php artisan migrate`, que aplica todos los cambios pendientes a la base de datos.
- Los seeders en `database/seeders/` insertan datos iniciales necesarios para el funcionamiento del sistema, como roles, áreas académicas, regiones, etc.

### Creación de Proyectos y CRUD
- La creación de proyectos se gestiona desde el controlador correspondiente en `app/Http/Controllers/ProyectoController.php`.
- El flujo general es:
  1. El usuario accede a la vista de creación de proyecto (`resources/views/proyectos/create.blade.php`).
  2. Al enviar el formulario, los datos se reciben en el método `store` del controlador.
  3. Se valida la información y se crea un nuevo registro en la tabla `proyectos` mediante el modelo `Proyecto` (`app/Models/Proyecto.php`).
  4. Se redirige al usuario a la vista de detalle o listado de proyectos.
- El CRUD completo (Crear, Leer, Actualizar, Eliminar) de proyectos está implementado en el controlador, permitiendo:
  - Crear nuevos proyectos.
  - Listar todos los proyectos (`index`).
  - Ver detalles de un proyecto (`show`).
  - Editar proyectos existentes (`edit` y `update`).
  - Eliminar proyectos (`destroy`).
- Cada acción del CRUD está vinculada a rutas definidas en `routes/web.php` y a vistas específicas en `resources/views/proyectos/`.

### Ingreso a Proyectos
- El acceso a los proyectos se controla mediante rutas protegidas y lógica en el controlador, asegurando que solo usuarios autorizados puedan ver o modificar proyectos.
- Se utilizan middlewares de autenticación y autorización para restringir el acceso según el rol del usuario.

## Participación de César en el Código y su Integración

César es responsable de la implementación y mantenimiento del módulo de gestión de proyectos, asegurando la integración con el resto del sistema y la correcta comunicación entre los distintos componentes. A continuación se detalla cómo su trabajo se refleja en el código y cómo interactúa con los módulos de otros integrantes:

### 1. Controladores y Modelos
- César desarrolló el `ProjectController` (`app/Http/Controllers/ProjectController.php`), que gestiona todas las operaciones CRUD de proyectos.
- El modelo `Project` (`app/Models/Project.php`) fue adaptado para cumplir con los requisitos de la base de datos y las relaciones Eloquent, permitiendo la asociación con usuarios y la gestión de atributos clave.
- Se implementó la relación `belongsTo` con el modelo `User`, facilitando la integración con el sistema de autenticación y la asignación de proyectos a usuarios específicos.

### 2. Rutas y Seguridad
- Las rutas de proyectos en `routes/web.php` fueron migradas a un `Route::resource` protegido por middleware `auth`, garantizando que solo usuarios autenticados puedan acceder a la gestión de proyectos.
- Esto permite que el sistema de autenticación (desarrollado por Frank) y la gestión de roles (Pablo) interactúen directamente con el módulo de proyectos.

### 3. Integración con Vistas y Validaciones
- Las vistas Blade en `resources/views/proyectos/` se comunican con el controlador de César para mostrar, crear, editar y eliminar proyectos.
- Se implementaron validaciones de formularios y mensajes de éxito/error, asegurando una experiencia de usuario coherente y segura.

### 4. Colaboración con Otros Módulos
- El módulo de proyectos utiliza la autenticación y autorización implementada por Frank, y la gestión de roles definida por Pablo, para restringir acciones según el tipo de usuario.
- La integración con seeders y migraciones permite que los datos de prueba y la estructura de la base de datos estén alineados con los requerimientos del sistema.

### 5. Documentación y Soporte
- César documentó el flujo de trabajo y la integración de su módulo, facilitando la comprensión y el mantenimiento por parte del equipo.

## Explicación de la Funcionalidad del Módulo de Proyectos

El módulo de gestión de proyectos permite a los usuarios autenticados crear, ver, editar y eliminar proyectos dentro de la plataforma. Cada proyecto está asociado a un usuario y contiene información relevante como título, descripción, organización asociada, estado y fecha de inicio. El sistema asegura que solo los usuarios autorizados puedan gestionar sus propios proyectos, protegiendo la información y manteniendo la integridad de los datos.

### ¿Cómo funciona este módulo?
1. **Creación de proyectos:** El usuario accede a un formulario, ingresa los datos y al enviarlo, el sistema valida la información y guarda el proyecto en la base de datos.
2. **Visualización:** Los usuarios pueden ver una lista de sus proyectos y acceder al detalle de cada uno.
3. **Edición:** El usuario puede modificar los datos de sus proyectos, siempre que sea el propietario.
4. **Eliminación:** El usuario puede eliminar sus proyectos, con confirmación previa para evitar errores.

## Área para Estudiantes de Programación: ¿Qué debes saber de la base de este módulo?

- **MVC (Modelo-Vista-Controlador):**
  - El controlador (`ProjectController`) recibe las solicitudes del usuario, procesa la lógica y decide qué datos mostrar o guardar.
  - El modelo (`Project`) representa la estructura de los datos y las reglas de negocio, conectándose con la base de datos.
  - Las vistas (archivos Blade) muestran la información al usuario y reciben sus entradas.

- **Rutas protegidas:**
  - Solo los usuarios autenticados pueden acceder a las funciones de proyectos, gracias al middleware `auth`.

- **Relaciones Eloquent:**
  - Cada proyecto pertenece a un usuario (`belongsTo`), y cada usuario puede tener varios proyectos (`hasMany`).

- **Validación y seguridad:**
  - Antes de guardar o actualizar un proyecto, el sistema valida los datos para evitar errores y proteger la información.

- **Colaboración:**
  - El módulo de proyectos se integra con la autenticación y la gestión de roles, permitiendo un flujo de trabajo seguro y colaborativo.

Este enfoque modular y seguro es la base de muchas aplicaciones web modernas, y entenderlo te permitirá crear sistemas escalables y mantenibles en el futuro.

---









---

## 8. Diagrama de Flujo General del Sistema

```mermaid
flowchart TD
  Login[Login de Usuario] -->|Credenciales válidas| Dashboard[Dashboard Principal]
  Dashboard --> Proyectos[Gestión de Proyectos (CRUD)]
  Dashboard --> Usuarios[Gestión de Usuarios y Roles (CRUD)]
  Dashboard --> Actores[Gestión de Actores (CRUD)]
  Dashboard --> Documentos[Gestión de Documentos (CRUD)]
  Dashboard --> Reportes[Reportes y Estadísticas]
  Dashboard --> Chatbot[Chatbot IA]
  Proyectos -->|Adjuntar| Documentos
  Usuarios -->|Asignar| Roles
  Chatbot -->|Consulta| IA[Respuesta IA]
```

---

## 9. Ejemplo Visual de Interfaz (Mockup Simplificado)

```plaintext
------------------------------------------------------
|  Dashboard Nexus Compendium                        |
------------------------------------------------------
| [Proyectos] [Usuarios] [Actores] [Reportes] [IA]   |
------------------------------------------------------
|  Tarjeta: Proyectos Activos: 12                    |
|  Tarjeta: Usuarios Registrados: 50                 |
|  Tarjeta: Documentos Subidos: 30                   |
------------------------------------------------------
|  Acceso rápido:                                   |
|   - Crear Proyecto                                |
|   - Nuevo Usuario                                 |
|   - Consultar Chatbot                             |
------------------------------------------------------
```

---

## 10. Ejemplo de Mensaje de Error y Éxito

```plaintext
// Ejemplo de mensaje de éxito tras crear un proyecto
¡Proyecto creado exitosamente!

// Ejemplo de error 404
Error 404: La página solicitada no existe o no se encuentra disponible.

// Ejemplo de error 403
Error 403: No tienes permisos para acceder a esta sección.
```

# Documentación Detallada de Funcionalidades: Proyecto Nexus Compendium

---

## 1. CRUD de César: Proyectos, Actores y Usuarios

### ¿Qué es un CRUD?
CRUD significa Crear, Leer, Actualizar y Eliminar. Es el conjunto de operaciones básicas para gestionar datos en una aplicación web.

### ¿Qué implementó César?
César desarrolló el CRUD para las entidades principales del sistema: Proyectos, Actores de Interés y Usuarios. Esto permite a los administradores y usuarios autorizados gestionar toda la información relevante desde la web.

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

Frank se encargó de la gestión avanzada de usuarios y roles, permitiendo asignar permisos y controlar el acceso a diferentes partes del sistema.

### Ejemplo de funcionalidad:
- Crear usuario con rol específico.
- Editar roles de usuarios existentes.
- Listar usuarios y filtrar por rol.

```php
// routes/web.php
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

Sofía implementó la gestión de proyectos y documentos asociados, permitiendo adjuntar archivos, ver detalles y editar información relevante.

### Ejemplo de funcionalidad:
- Subir documentos a un proyecto.
- Ver y descargar documentos asociados.
- Editar información de proyectos y documentos.

```php
// routes/web.php
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

### ¿Cómo funciona?
- El usuario accede a `/chatgpt`.
- Escribe su pregunta y la envía.
- El sistema procesa la consulta y responde usando un modelo de IA (por ejemplo, OpenAI).

#### Ejemplo de uso:
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

### ¿Cómo funciona?
- Tras iniciar sesión, el usuario es redirigido a `/dashboard`.
- El dashboard muestra tarjetas con métricas, accesos rápidos y enlaces a las secciones principales.

#### Ejemplo de vista:
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

- **200 OK:** Todo funcionó correctamente, la página o acción se ejecutó sin problemas.
- **201 Created:** Un recurso fue creado exitosamente (por ejemplo, al crear un proyecto).
- **400 Bad Request:** La solicitud es incorrecta o faltan datos.
- **401 Unauthorized:** El usuario no está autenticado.
- **403 Forbidden:** El usuario no tiene permisos para acceder.
- **404 Not Found:** La ruta o recurso solicitado no existe (por ejemplo, si falta una vista o ruta).
- **500 Internal Server Error:** Error inesperado en el servidor.

### Ejemplo de error 404:
Si intentas acceder a `/actores/crear` y no existe la vista o la ruta, verás un error 404.

---

> Esta documentación sirve como guía para entender cómo cada parte del sistema contribuye al funcionamiento general y cómo interactúan entre sí para ofrecer una experiencia completa y robusta.


Este informe se centra únicamente en las tareas de desarrollo y comunicación de componentes realizadas por César, sin incluir actividades de testing ni validación de funcionalidades.

De esta forma, la participación de César es fundamental para la gestión de proyectos y su correcta integración con la autenticación, roles y vistas del sistema, asegurando un flujo de trabajo robusto y colaborativo.
