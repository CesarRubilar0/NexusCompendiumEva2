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