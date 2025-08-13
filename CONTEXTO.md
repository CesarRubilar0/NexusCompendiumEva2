# **Plan de Desarrollo y Especificación de Requerimientos: Plataforma Integral para la Gestión de Proyectos de Vinculación con el Medio (VcM) - "Conecta-IP"**

## **Resumen Ejecutivo**

La gestión actual de los proyectos de Vinculación con el Medio (VcM) en los Institutos Profesionales (IP) de Chile se caracteriza por una alta dependencia de procesos manuales, una comunicación fragmentada y el almacenamiento de información crítica en archivos aislados. Esta situación genera ineficiencias, dificulta el seguimiento y la colaboración, y limita la capacidad de medir el verdadero impacto de las iniciativas. Para abordar esta problemática, se propone el desarrollo de "Conecta-IP", una plataforma web integral, colaborativa e inteligente, construida sobre el framework Laravel.

"Conecta-IP" está diseñada para centralizar y digitalizar el ciclo de vida completo de los proyectos de VcM, sirviendo como una fuente única de verdad para todas las partes interesadas: instituciones, socios comunitarios, docentes y estudiantes. La plataforma no solo optimizará la gestión administrativa, sino que también introducirá un componente de innovación significativo a través de la inteligencia artificial. Las características destacadas incluyen un Generador de Hojas de Ruta (Roadmap) basado en IA que estructura planes de proyecto a partir de los requerimientos iniciales, un sistema de Asignación Inteligente de Recursos para optimizar la conformación de equipos estudiantiles, y un chatbot de soporte ("VcM-GPT") que ofrece asistencia contextual en tiempo real.

El valor estratégico de "Conecta-IP" trasciende la mera gestión de proyectos. Al estar concebida como una plataforma multi-institucional, tiene el potencial de establecer un estándar para la colaboración en VcM a nivel nacional, fomentando una red que conecta las capacidades de múltiples IP con las necesidades del sector productivo y la sociedad civil. De este modo, "Conecta-IP" se posiciona como un habilitador clave para la calidad, la eficiencia, la transparencia y la medición del impacto social en las iniciativas de Vinculación con el Medio en Chile.

## **Sección 1: Visión y Contexto Estratégico del Proyecto "Conecta-IP"**

### **1.1. El Desafío Actual: Fragmentación y Carga Administrativa en VcM**

El modelo operativo vigente para la gestión de proyectos de VcM, tal como se describe en la solicitud inicial, enfrenta desafíos significativos derivados de su naturaleza manual y descentralizada. La afirmación de que existe "mucha información en archivos" y la necesidad de "centralizar esto en una plataforma" apunta a un ecosistema de trabajo donde la información crítica del proyecto reside en documentos estáticos y dispersos, como hojas de cálculo, documentos de texto y correos electrónicos \[User Query\].

El análisis del proceso formativo documentado revela un flujo de trabajo secuencial y dependiente de traspasos manuales entre distintos actores y departamentos, como la Dirección de Carreras y la Vicerrectoría de Vinculación con el Medio (VcM).<sup>1</sup> Este proceso, con plazos estrictos que se miden en semanas antes del inicio del trimestre, es susceptible a cuellos de botella, pérdida de información y falta de visibilidad en tiempo real. El uso de formularios como la "Ficha Proyectos VcM" <sup>1</sup> y la "Toma de Requerimientos" <sup>1</sup> como documentos independientes evidencia la ausencia de un modelo de datos unificado. Esta carencia conduce a la redundancia de datos, dificulta la agregación de información para la toma de decisiones y complica enormemente la generación de reportes consolidados para fines de gestión o acreditación.

### **1.2. La Solución Propuesta: Una Plataforma Centralizada, Colaborativa e Inteligente**

La solución propuesta es "Conecta-IP", una plataforma web que va más allá de ser un simple repositorio de datos. Se concibe como un entorno de trabajo dinámico que digitaliza, automatiza y refuerza el flujo de procesos de VcM. La plataforma funcionará como una "Fuente Única de Verdad" (Single Source of Truth) para toda la información relacionada con los proyectos, abarcando desde las propuestas iniciales y los requerimientos detallados, hasta el personal asignado, los equipos de estudiantes, las actualizaciones de avance, las comunicaciones y los entregables finales.

Este enfoque centralizado aborda directamente la necesidad del usuario de visualizar en un único lugar "los proyectos actuales, los alumnos asignados, el estado de avance y el cumplimiento del proyecto" \[User Query\]. Al consolidar la información, "Conecta-IP" elimina los silos de datos, mejora la transparencia y proporciona a los gestores una visión de 360 grados del programa de VcM en su totalidad.

### **1.3. Principios de Diseño y Filosofía del Software**

Para que "Conecta-IP" sea una herramienta verdaderamente efectiva, su diseño se fundamenta en los principios clave que rigen las iniciativas de VcM en las instituciones de educación superior más destacadas de Chile.

- **Bidireccionalidad:** El software debe facilitar un flujo de valor en dos direcciones. El "Actor de Interés" aporta un problema real del entorno, y la institución académica, a través de sus docentes y estudiantes, entrega una solución. La plataforma materializará este principio a través de funcionalidades como dashboards compartidos, módulos de retroalimentación y espacios de comunicación colaborativa, asegurando que ambas partes obtengan un beneficio tangible del proceso, un concepto central en los modelos de la Universidad Autónoma y la Universidad de Concepción.<sup>2</sup>
- **Cocreación:** La plataforma está diseñada para ser un espacio de creación conjunta. Las funcionalidades permitirán la planificación colaborativa entre docentes y socios externos, superando la relación tradicional de cliente-proveedor. Este enfoque, destacado por la Universidad Autónoma, promueve que las soluciones sean desarrolladas "con" la comunidad y no simplemente "para" la comunidad.<sup>2</sup>
- **Valor Social y Pertinencia:** Para asegurar que los proyectos generen un impacto significativo, la plataforma incluirá mecanismos para etiquetar cada iniciativa con objetivos de impacto social relevantes, como los Objetivos de Desarrollo Sostenible (ODS) de las Naciones Unidas. Esta característica, observada en las prácticas de la Universidad Andrés Bello <sup>4</sup>, no solo alinea los proyectos con metas globales, sino que también permite generar reportes significativos sobre la contribución de la institución a la sociedad, un factor clave para la acreditación y la responsabilidad social universitaria.

### **1.4. Análisis Comparativo y Oportunidades del Ecosistema VcM Chileno**

Un análisis del panorama de la VcM en Chile revela una oportunidad estratégica única para "Conecta-IP". Si bien la Vinculación con el Medio es un pilar estratégico para las principales universidades chilenas (U. de los Andes, U. Autónoma, U. Andrés Bello, U. de Concepción, UC), sus soluciones digitales actuales son, en su mayoría, portales informativos o sitios web orientados internamente.<sup>2</sup> Estas plataformas actúan como "vitrinas" que exhiben los proyectos realizados, pero no ofrecen un sistema de gestión interactivo y abierto que facilite la colaboración con socios externos o entre distintas instituciones.

La solicitud del usuario especifica que "todos los Institutos Profesionales (IP) de nivel superior deben poder participar", lo que sugiere desde el inicio la necesidad de una arquitectura multi-institucional \[User Query\]. Las redes universitarias existentes, como la CUECH, muestran un interés en sistemas de información integrados, pero su enfoque parece estar en el intercambio de datos a nivel estratégico más que en la gestión operativa de proyectos colaborativos.<sup>7</sup>

Esta coyuntura define una brecha en el mercado: no existe una plataforma estandarizada que permita a múltiples IP gestionar sus proyectos de VcM de manera unificada. "Conecta-IP" puede llenar este vacío. Al diseñarse con una arquitectura multi-tenant (multi-institucional), la plataforma no solo servirá a una institución, sino que podrá ser adoptada por muchas. Esto crea un potente efecto de red: los "Actores de Interés" tendrían un único punto de entrada para conectar con el mundo académico, y los IP podrían comparar su desempeño y colaborar en iniciativas de mayor escala. Este enfoque eleva el proyecto de una herramienta para una clase a un potencial estándar nacional, una decisión arquitectónica fundamental que se reflejará en el modelo de base de datos.

## **Sección 2: Arquitectura de Actores y Roles de Usuario**

### **2.1. Mapa del Ecosistema de Usuarios**

El éxito de "Conecta-IP" depende de su capacidad para servir eficazmente a un diverso grupo de usuarios. El ecosistema de la plataforma se compone de roles internos y externos a la institución educativa, cada uno con responsabilidades y necesidades de información específicas. Sus interacciones, basadas en el flujo de proceso documentado <sup>1</sup>, definen la arquitectura colaborativa del sistema, la cual puede visualizarse como una red donde cada actor inicia y recibe acciones que impulsan el proyecto a través de su ciclo de vida.

### **2.2. Definición Detallada de Roles y Permisos**

Cada rol dentro de la plataforma ha sido definido para reflejar las responsabilidades observadas en el proceso actual y para habilitar la visión multi-institucional del proyecto.

- **2.2.1. Administrador Institucional:** Corresponde a los roles de "Dirección de Carreras" y "Dirección de VcM".<sup>1</sup> Este usuario gestiona el programa de VcM a nivel de su institución. Sus responsabilidades incluyen: configurar los periodos académicos, administrar el catálogo de asignaturas elegibles para VcM, asignar "Docentes VcM" a proyectos validados, supervisar los reportes a nivel institucional y gestionar las cuentas de usuario de su IP.
- **2.2.2. Actor de Interés (Socio Comunitario / Empresa):** Es el socio externo que propone un proyecto. Sus responsabilidades son: enviar nuevas iniciativas a través de un formulario estructurado basado en los documentos de ejemplo <sup>1</sup>, proporcionar la documentación necesaria (logos, material gráfico, etc.), comunicarse con el "Docente VcM" asignado, participar en reuniones de revisión y proporcionar una evaluación final del proyecto.
- **2.2.3. Docente de Vinculación con el Medio (VcM):** Actúa como el puente entre la institución y el socio externo. Sus responsabilidades abarcan: revisar las iniciativas de proyecto entrantes, validar su viabilidad, comunicarse con el "Actor de Interés" para aclarar dudas, colaborar con el "Docente de Cátedra" para definir el alcance del proyecto y facilitar la comunicación durante todo el ciclo de vida, tal como se detalla en el proceso documentado.<sup>1</sup>
- **2.2.4. Docente de Cátedra (Líder de Proyecto Académico):** Es el líder académico responsable del equipo de estudiantes. Identificado como "Docente Academia" en la documentación <sup>1</sup>, sus responsabilidades son: aceptar un proyecto de VcM para su asignatura, conformar los equipos de estudiantes dentro de la plataforma, supervisar la ejecución del proyecto, calificar el desempeño de los estudiantes y asegurar que el proyecto cumpla con los objetivos de aprendizaje.
- **2.2.5. Estudiante (Miembro de Equipo de Proyecto):** Es un estudiante asignado a un proyecto de VcM. Sus responsabilidades incluyen: visualizar los detalles y requerimientos del proyecto, colaborar con su equipo, actualizar el estado de las tareas asignadas, cargar los entregables y comunicarse con el "Docente de Cátedra".
- **2.2.6. Super-Administrador (Gestión Multi-Institucional):** Este rol es una adición crítica que no se encuentra en los procesos de una sola institución, pero es esencial para la visión escalable de "Conecta-IP". La capacidad de la plataforma para ser utilizada por múltiples IP requiere un nivel de administración superior. Este rol es responsable de: incorporar y gestionar las instituciones participantes en la plataforma, supervisar las analíticas a nivel de todo el sistema, administrar los datos maestros (como categorías de proyectos o etiquetas ODS) y realizar el mantenimiento general de la plataforma. Sin este rol, la expansión del sistema sería un proceso manual y costoso.

### **Tabla 2.1: Matriz de Roles y Permisos (CRUD)**

Para garantizar la seguridad y la funcionalidad adecuada en una aplicación con múltiples roles, es fundamental definir explícitamente los permisos de cada uno. La siguiente matriz CRUD (Crear, Leer, Actualizar, Eliminar) sirve como una especificación técnica clara para los desarrolladores, detallando qué acciones puede realizar cada rol sobre las principales entidades de datos de la plataforma.

| Entidad / Módulo | Super-Admin | Admin. Institucional | Docente VcM | Docente de Cátedra | Estudiante | Actor de Interés |
| --- | --- | --- | --- | --- | --- | --- |
| **Gestión de Instituciones** | CRUD | N/A | N/A | N/A | N/A | N/A |
| --- | --- | --- | --- | --- | --- | --- |
| **Gestión de Usuarios** | R   | CRUD (en su Inst.) | R   | R   | R (propio) | R (propio) |
| --- | --- | --- | --- | --- | --- | --- |
| **Proyectos (Iniciativas)** | R   | R   | CRUD | R   | N/A | C, R (propio), U (propio) |
| --- | --- | --- | --- | --- | --- | --- |
| **Proyectos (Activos)** | R   | R   | RU  | RU  | R   | R (propio) |
| --- | --- | --- | --- | --- | --- | --- |
| **Tareas del Proyecto** | R   | R   | R   | CRUD | RU (asignadas) | R   |
| --- | --- | --- | --- | --- | --- | --- |
| **Equipos de Estudiantes** | R   | R   | R   | CRUD | R (su equipo) | N/A |
| --- | --- | --- | --- | --- | --- | --- |
| **Documentos del Proyecto** | R   | R   | CRUD | CRUD | CRU (su equipo) | CR (propios) |
| --- | --- | --- | --- | --- | --- | --- |
| **Comunicaciones** | R   | R   | CRUD | CRUD | CR  | CR  |
| --- | --- | --- | --- | --- | --- | --- |
| **Reportes y Analíticas** | R (Global) | R (Institucional) | R (sus proyectos) | R (sus proyectos) | N/A | R (su proyecto) |
| --- | --- | --- | --- | --- | --- | --- |

_Leyenda: C=Crear, R=Leer, U=Actualizar, D=Eliminar, N/A=Sin Acceso._

## **Sección 3: Flujo de Procesos y Ciclo de Vida del Proyecto VcM**

Esta sección digitaliza el flujo de trabajo descrito en la documentación proporcionada <sup>1</sup>, traduciendo el cronograma en fases distintas gestionadas por la plataforma "Conecta-IP". El ciclo de vida completo, desde la concepción de una idea hasta la medición de su impacto, se estructura para garantizar la trazabilidad, la colaboración y la eficiencia.

### **3.1. Mapeo del Proceso End-to-End: De la Idea al Impacto**

El proceso se modela como un flujo continuo dentro de la plataforma, donde la finalización de una etapa desencadena notificaciones y habilita las acciones de la siguiente. Un modelo visual, como un diagrama BPMN (Business Process Model and Notation), puede representar este flujo, mostrando claramente las interacciones entre los roles (Actor de Interés, Docente VcM, Docente de Cátedra, etc.) y las transiciones de estado del proyecto.

### **3.2. Fase 1: Proposición y Validación de Iniciativas**

Esta fase corresponde al periodo "1 mes antes del inicio del trimestre" <sup>1</sup> y se centra en la captación y selección de proyectos viables.

1. **Envío por el Actor de Interés:** El socio externo completa una "Ficha de Iniciativa" digital en la plataforma. Este formulario estará basado en los campos de los documentos de ejemplo <sup>1</sup>, capturando de manera estructurada el nombre del proyecto, la problemática, el alcance general y los requerimientos clave. Al enviarse, el proyecto se crea en el sistema con el estado "Propuesto".
2. **Revisión Inicial por el Docente VcM:** El sistema notifica al Docente VcM correspondiente. Este revisa la propuesta para verificar que esté completa y alineada con los objetivos estratégicos de la institución. Puede utilizar el módulo de comunicación de la plataforma para solicitar aclaraciones al Actor de Interés.
3. **Verificación de Viabilidad:** El Docente VcM, en colaboración con el Administrador Institucional (Dirección de Carreras), evalúa la factibilidad del proyecto. Este paso digitaliza la pregunta "¿Es viable?" del proceso actual.<sup>1</sup> El resultado ("Aprobado" o "Rechazado") se registra en la plataforma, lo que automáticamente notifica al Actor de Interés sobre la decisión.

### **3.3. Fase 2: Configuración y Planificación del Proyecto**

Esta fase, que se alinea con las "2 semanas antes del inicio del trimestre" <sup>1</sup>, prepara el proyecto aprobado para su ejecución académica.

1. **Asignación Académica:** El Administrador Institucional asigna formalmente el proyecto a un "Docente de Cátedra" y su asignatura/sección correspondiente.
2. **Definición del Alcance y Generación de Roadmap con IA:** El Docente VcM y el Docente de Cátedra colaboran para refinar el alcance y los objetivos específicos del proyecto. A continuación, utilizan la funcionalidad innovadora **Roadmap AI Generator** (detallada en la Sección 5.1) para crear un plan de proyecto inicial. La IA analiza los requerimientos y propone una estructura de fases, hitos y tareas.
3. **Conformación de Equipos:** El Docente de Cátedra utiliza la plataforma para crear los equipos de trabajo, asignando a los estudiantes de su curso al proyecto.

### **3.4. Fase 3: Ejecución, Seguimiento y Colaboración**

Esta fase abarca el periodo "Durante el trimestre" <sup>1</sup> y es donde se desarrolla el núcleo del trabajo.

1. **Lanzamiento del Proyecto:** La plataforma sirve como el punto central para el kick-off del proyecto, donde el problema y el contexto se presentan a los estudiantes, tal como se indica en el flujo del proceso.<sup>1</sup>
2. **Gestión de Tareas:** Los estudiantes actualizan su progreso en las tareas definidas en el roadmap. La plataforma ofrece vistas de gestión visual como tableros Kanban o diagramas de Gantt para que todos los involucrados puedan ver el estado del proyecto de un vistazo.
3. **Colaboración Continua:** Toda la comunicación relevante queda registrada en el módulo de comunicaciones del proyecto. El Docente VcM actúa como nexo, transmitiendo la retroalimentación del Actor de Interés al equipo académico, manteniendo un canal de comunicación formal y trazable.<sup>1</sup>
4. **Revisiones de Hitos:** La plataforma facilita la programación y documentación de las reuniones de revisión de hitos, asegurando que los avances se evalúen en puntos clave del cronograma.

### **3.5. Fase 4: Cierre, Evaluación y Repositorio de Conocimiento**

Correspondiendo a la "Última semana del trimestre" <sup>1</sup>, esta fase formaliza la conclusión del proyecto y captura el valor generado.

1. **Entrega Final:** Los equipos de estudiantes cargan sus soluciones finales, código fuente, manuales y toda la documentación relevante en el repositorio de documentos del proyecto en la plataforma.
2. **Cierre del Proyecto:** El Docente de Cátedra realiza la evaluación académica y registra las calificaciones. Simultáneamente, el Docente VcM lleva a cabo una reunión de cierre con el Actor de Interés y registra su nivel de satisfacción a través de una encuesta integrada en la plataforma, digitalizando el paso "Aplicar encuesta a actor de interés".<sup>1</sup>
3. **Archivo y Repositorio:** El proyecto cambia su estado a "Completado" y pasa a formar parte del repositorio histórico de proyectos de la institución. Esta base de conocimiento se vuelve invaluable para futuras iniciativas, análisis de tendencias y procesos de acreditación.

## **Sección 4: Requerimientos Funcionales de la Plataforma**

Esta sección detalla las funcionalidades específicas ("qué" debe hacer el software) que "Conecta-IP" debe implementar para soportar los procesos y roles definidos. Los requerimientos se agrupan en módulos lógicos.

### **4.1. Módulo de Gestión de Proyectos**

- **RF-01:** Permitir la Creación, Lectura, Actualización y Eliminación (CRUD) de proyectos, respetando los permisos de cada rol.
- **RF-02:** Implementar un dashboard de proyecto que ofrezca una vista de 360 grados: resumen, fechas clave, equipo, últimas actualizaciones y un gráfico de progreso contra el roadmap.
- **RF-03:** Permitir la categorización de proyectos por tipo (ej. "Clínica Tecnológica", "Solución Tecnológica" <sup>1</sup>; o tipos más granulares como "Asesoría", "Práctica Profesional" <sup>4</sup>), área académica (ej. Informática, Ciberseguridad <sup>1</sup>) y Objetivos de Desarrollo Sostenible (ODS) asociados.
- **RF-04:** Incluir un sistema de gestión de tareas con tableros Kanban, asignación de responsables, fechas de vencimiento y definición de dependencias entre tareas.
- **RF-05:** Proveer una visualización del cronograma del proyecto, como un diagrama de Gantt, que muestre los hitos y la línea de tiempo general.
- **RF-06:** Implementar un sistema de gestión de documentos por proyecto, con capacidad para cargar archivos y mantener un control de versiones simple.

### **4.2. Módulo de Gestión de Usuarios y Equipos**

- **RF-07:** Permitir el registro de usuarios y la gestión de perfiles para todos los roles. Los perfiles de los estudiantes deben incluir un campo para listar sus habilidades o competencias técnicas.
- **RF-08:** Garantizar una autenticación segura y un control de acceso basado en roles (RBAC) que implemente estrictamente la matriz de permisos definida en la Tabla 2.1.
- **RF-09:** Ofrecer a los Docentes de Cátedra la funcionalidad para crear y gestionar equipos de estudiantes, asignándolos a proyectos específicos.
- **RF-10:** Proveer un directorio de usuarios por institución, con capacidad de búsqueda por nombre, rol y área académica.

### **4.3. Módulo de Comunicación y Colaboración**

- **RF-11:** Habilitar canales de comunicación específicos para cada proyecto, como un foro de discusión o un chat persistente, para mantener las conversaciones organizadas y contextualizadas.
- **RF-12:** Implementar un centro de notificaciones global en la plataforma que alerte a los usuarios sobre eventos relevantes (ej. nuevas tareas asignadas, fechas de entrega próximas, nuevos mensajes).
- **RF-13:** Enviar notificaciones por correo electrónico para eventos críticos (ej. aprobación de un proyecto, solicitud de revisión).
- **RF-14:** Integrar una herramienta simple para programar reuniones y documentar las minutas o acuerdos.

### **4.4. Módulo de Reportes y Analítica de Impacto**

La capacidad de medir el "cumplimiento del proyecto" va más allá de un simple estado de "finalizado". Para las instituciones, es crucial demostrar el valor social y el impacto generado, tanto para la gestión interna como para los procesos de acreditación.<sup>1</sup> La plataforma, al centralizar todos los datos del proyecto (participantes, horas dedicadas, satisfacción del socio, entregables), se convierte en una fuente de datos extremadamente rica. Por lo tanto, un módulo de analítica robusto no es un complemento, sino una característica central.

- **RF-15:** Generar reportes predefinidos y exportables (ej. en PDF o CSV) sobre: Proyectos por Periodo Académico, Participación Estudiantil, Nivel de Satisfacción de Socios Comunitarios, Proyectos por Área Académica.
- **RF-16:** Ofrecer a los Administradores una herramienta para construir reportes personalizados, permitiéndoles cruzar diferentes variables según sus necesidades.
- **RF-17:** Presentar dashboards visuales con Indicadores Clave de Desempeño (KPIs): número de proyectos activos, tasa de éxito, duración promedio de los proyectos, métricas de impacto comunitario (ej. número de beneficiarios).

### **4.5. Módulo de Repositorio de Conocimiento y Proyectos Históricos**

- **RF-18:** Implementar un archivo de proyectos completados que sea fácilmente consultable mediante filtros (por año, área, tecnología, etc.).
- **RF-19:** Permitir que ciertos entregables de proyectos (ej. módulos de código genéricos, plantillas de diseño, investigaciones) se marquen como "activos reutilizables" para que puedan ser aprovechados en futuros proyectos.
- **RF-20:** Incluir una sección de "lecciones aprendidas" en cada proyecto cerrado para capturar conocimiento tácito y explícito que beneficie a futuros equipos.

## **Sección 5: El Núcleo Innovador: Integración de Inteligencia Artificial**

Esta sección detalla la implementación de las funcionalidades de inteligencia artificial, que constituyen el principal diferenciador de "Conecta-IP" y responden directamente a la solicitud de innovación del usuario \[User Query\]. Estas capacidades se basan en una síntesis de la idea original del usuario y las tendencias actuales en IA para la gestión de proyectos.<sup>8</sup>

### **5.1. Roadmap AI Generator: El Asistente de Planificación Inteligente**

Esta funcionalidad transformará la fase de planificación, convirtiendo la descripción textual de un proyecto en una hoja de ruta estructurada y procesable.

#### **5.1.1. Arquitectura de la Funcionalidad: De Texto a Hoja de Ruta**

- **Entrada (Input):** Los datos estructurados de la "Ficha de Iniciativa" digital, que incluyen el resumen del proyecto, la descripción de la problemática, los objetivos y la lista de requerimientos funcionales y no funcionales capturados durante la Fase 1.<sup>1</sup>
- **Proceso:** Se utilizará un servicio de Modelo de Lenguaje Grande (LLM) a través de una API. El proceso interno será el siguiente:
    1. **Ingeniería de Prompts (Prompt Engineering):** Se diseñará un prompt avanzado que instruirá a la IA para que actúe como un gestor de proyectos experto. El prompt contendrá los datos textuales del proyecto y le pedirá a la IA que extraiga las entidades clave.
    2. **Extracción de Entidades:** La IA analizará el texto para identificar posibles épicas, historias de usuario, tareas, hitos y stakeholders.
    3. **Generación de Estructura:** La IA organizará estas entidades en un roadmap lógico y por fases, sugiriendo un orden secuencial, identificando dependencias potenciales y agrupando tareas relacionadas. Este proceso se inspira en las capacidades de herramientas de IA para roadmapping como Sembly y MyMap.AI.<sup>8</sup>
    4. **Salida (Output):** La API del LLM devolverá un objeto JSON estructurado que representa el roadmap. El backend de Laravel recibirá este JSON, lo analizará y lo guardará en las tablas correspondientes de la base de datos (ej. milestones, tasks).

#### **5.1.2. Componentes del Roadmap Generado**

El roadmap generado por la IA incluirá, como mínimo:

- **Fases/Hitos:** Agrupaciones lógicas de trabajo (ej. "Fase 1: Investigación y Diseño", "Fase 2: Desarrollo del Backend", "Fase 3: Pruebas y Despliegue").
- **Tareas:** Elementos de trabajo accionables dentro de cada fase (ej. "Diseñar el modelo de base de datos", "Crear las rutas de la API para usuarios", "Desarrollar el componente de login").
- **Dependencias Sugeridas:** Relaciones lógicas entre tareas (ej. la tarea "Probar API de usuarios" depende de la finalización de "Crear las rutas de la API para usuarios").
- **Estimaciones Iniciales:** Sugerencias de estimaciones de tiempo de alto nivel (en horas o puntos de historia) para cada tarea, basadas en la complejidad inferida del texto.

#### **5.1.3. Interfaz de Usuario para la Generación y Refinamiento del Roadmap**

La generación del roadmap no será un proceso de "caja negra". Una vez que la IA entrega su propuesta, la plataforma presentará al Docente de Cátedra una interfaz visual y editable. En esta vista, el docente podrá arrastrar y soltar tareas, editar sus descripciones, añadir nuevos elementos o eliminar los que no considere pertinentes. Este enfoque de "humano en el ciclo" (human-in-the-loop) es fundamental para garantizar que el plan final sea práctico y esté validado por un experto académico, un principio clave en herramientas avanzadas de IA.<sup>12</sup>

### **5.2. Innovación Adicional 1: Asignación Inteligente de Recursos (AIR)**

La plataforma acumulará datos valiosos sobre las habilidades de los estudiantes (a través de sus perfiles) y los requerimientos técnicos de cada proyecto (extraídos por la IA del roadmap). Esta información crea la oportunidad perfecta para una segunda innovación: un sistema de optimización para la conformación de equipos.

La formación manual de equipos puede ser subóptima, ya que un docente no siempre conoce en profundidad las habilidades específicas de cada estudiante. La IA, sin embargo, es experta en resolver problemas de optimización y concordancia de patrones.<sup>9</sup> El sistema tratará la asignación de recursos como un problema a optimizar: dado un conjunto de tareas con requerimientos de habilidades y un grupo de estudiantes con habilidades declaradas, se buscará la conformación de equipos que maximice la cobertura de habilidades necesarias y equilibre las cargas de trabajo.

- **Funcionalidad:** Cuando el Docente de Cátedra esté en la fase de conformación de equipos, podrá invocar el módulo AIR. La IA analizará las tareas del proyecto y los perfiles de los estudiantes disponibles, y sugerirá composiciones de equipo óptimas, justificando cada sugerencia (ej. "Este equipo tiene un buen balance de habilidades de frontend y backend", "Este equipo cubre las necesidades de diseño UX y gestión de bases de datos").

### **5.3. Innovación Adicional 2: Chatbot de Soporte "VcM-GPT"**

Para mejorar la experiencia de usuario y reducir la carga de consultas repetitivas, se integrará un chatbot de soporte impulsado por IA. Este asistente virtual, inspirado en conceptos como PMI Infinity y ChatPM <sup>16</sup>, proporcionará ayuda instantánea y contextual a todos los roles.

- **Base de Conocimiento:** El chatbot se entrenará y tendrá acceso a:
    1. La documentación oficial del proceso de VcM de la institución (como el PDF proporcionado <sup>1</sup>).
    2. Buenas prácticas generales de gestión de proyectos.
    3. Datos en tiempo real del proyecto específico que el usuario está visualizando en ese momento.
- **Conversaciones Basadas en Roles:** El chatbot adaptará sus respuestas según quién le pregunte:
  - **Para un Estudiante:** _"¿Cuáles son mis tareas pendientes?"_, _"Explícame los requerimientos de la funcionalidad de autenticación de usuarios."_
  - **Para un Docente de Cátedra:** _"Muéstrame un resumen del progreso de todos mis proyectos."_, _"Identifica los proyectos que están atrasados."_
  - **Para un Actor de Interés:** _"¿Cuál es el estado actual de mi proyecto?"_, _"¿Cuándo está programada la próxima reunión de revisión?"_

## **Sección 6: Diseño de Interfaces (UI) y Experiencia de Usuario (UX)**

### **6.1. Filosofía de Diseño: Claridad, Colaboración y Eficiencia**

El diseño de la interfaz de "Conecta-IP" se centrará en la usabilidad para un público diverso. La interfaz será limpia, moderna e intuitiva, priorizando la facilidad de uso, especialmente para los usuarios no técnicos como los Actores de Interés. El diseño será completamente responsivo, asegurando una experiencia de usuario consistente y funcional en computadoras de escritorio, tabletas y dispositivos móviles. Cada rol de usuario tendrá un panel de control (dashboard) personalizado que mostrará la información y las acciones más relevantes para él, evitando la sobrecarga de información y guiándolo hacia sus tareas más importantes.

### **6.2. Tabla 6.1: Inventario de Interfaces de Usuario**

Para dar una estructura clara al equipo de desarrollo de frontend y responder a la solicitud de cuantificar las interfaces, se presenta el siguiente inventario de vistas clave. Este listado representa las pantallas principales que deben diseñarse y construirse.

| Código | Nombre de la Interfaz | Descripción Breve |
| --- | --- | --- |
| **Public-01** | Página de Aterrizaje (Landing Page) | Página pública que describe la plataforma e invita al registro. |
| --- | --- | --- |
| **Auth-01** | Inicio de Sesión / Registro | Formularios para autenticación y creación de nuevas cuentas. |
| --- | --- | --- |
| **Dashboard-01** | Panel del Estudiante | Vista principal para estudiantes con sus proyectos, tareas y notificaciones. |
| --- | --- | --- |
| **Dashboard-02** | Panel del Docente de Cátedra | Vista principal para docentes con sus proyectos, equipos y alertas. |
| --- | --- | --- |
| **Dashboard-03** | Panel del Docente VcM | Vista principal para el nexo VcM con iniciativas por validar y proyectos activos. |
| --- | --- | --- |
| **Dashboard-04** | Panel del Actor de Interés | Vista principal para socios con el estado de sus proyectos y comunicaciones. |
| --- | --- | --- |
| **Dashboard-05** | Panel del Admin. Institucional | Vista principal para administradores con estadísticas y herramientas de gestión. |
| --- | --- | --- |
| **Project-01** | Listado de Proyectos | Vista de tabla o tarjetas con todos los proyectos, con filtros y búsqueda. |
| --- | --- | --- |
| **Project-02** | Vista Detallada del Proyecto | El panel central de un proyecto, con pestañas para resumen, tareas, etc. |
| --- | --- | --- |
| **Project-03** | Formulario de Iniciativa | Formulario de creación/edición de una nueva propuesta de proyecto. |
| --- | --- | --- |
| **Project-04** | Vista de Tareas (Kanban/Gantt) | Tablero visual para la gestión del progreso de las tareas. |
| --- | --- | --- |
| **Project-05** | Pestaña de Documentos | Repositorio de archivos asociados a un proyecto. |
| --- | --- | --- |
| **Project-06** | Pestaña de Comunicaciones | Hilo de discusión o chat del proyecto. |
| --- | --- | --- |
| **Team-01** | Interfaz de Gestión de Equipos | Herramienta para que los docentes creen y asignen estudiantes a equipos. |
| --- | --- | --- |
| **User-01** | Perfil de Usuario | Página para ver y editar la información personal y de perfil. |
| --- | --- | --- |
| **Admin-01** | Panel de Admin. de Usuarios | Herramienta para que el Admin. Institucional gestione las cuentas de su IP. |
| --- | --- | --- |
| **Admin-02** | Panel de Admin. de Instituciones | Herramienta para que el Super-Admin gestione las instituciones participantes. |
| --- | --- | --- |
| **AI-01** | Interfaz del Generador de Roadmap | Vista para invocar la IA y refinar el roadmap generado. |
| --- | --- | --- |
| **Report-01** | Vista de Reportes y Analíticas | Panel para visualizar y generar reportes. |
| --- | --- | --- |

### **6.3. Wireframes Conceptuales para Interfaces Críticas**

Para proporcionar una guía visual inicial, se describen a continuación los wireframes (esquemas de bajo nivel) de tres interfaces cruciales:

- **Panel del Docente de Cátedra:** La pantalla principal mostraría una lista de sus proyectos activos, cada uno con un indicador de progreso. Una sección de "Alertas" destacaría tareas atrasadas o mensajes sin leer. Un gráfico simple podría resumir la participación estudiantil o el estado general de sus proyectos.
- **Formulario de Iniciativa (Actor de Interés):** Sería un formulario de varios pasos para no abrumar al usuario. Paso 1: Información básica (Nombre del proyecto, resumen). Paso 2: Detalle de la problemática y objetivos. Paso 3: Requerimientos funcionales y no funcionales. Paso 4: Carga de archivos adjuntos (logo, etc.).
- **Vista Detallada del Proyecto:** Esta es la interfaz central. Contaría con una cabecera con el título, estado y actores clave del proyecto. Debajo, un sistema de pestañas organizaría el contenido: "Resumen" (con el dashboard del proyecto), "Tareas" (con la vista Kanban/Gantt), "Documentos", "Equipo" y "Comunicaciones".

## **Sección 7: Modelo de Base de Datos**

Esta sección proporciona la arquitectura de datos fundamental para la aplicación Laravel, sirviendo como el plano para los desarrolladores de backend.

### **7.1. Diagrama Entidad-Relación (ERD)**

Un diagrama visual Entidad-Relación es el primer paso para visualizar la estructura. Mostraría las tablas principales (como users, projects, tasks) y las líneas que representan sus relaciones (uno a muchos, muchos a muchos), incluyendo las tablas pivote necesarias para estas últimas (ej. team_members).

### **7.2. Tabla 7.1: Diccionario de Datos**

Este diccionario es el artefacto más crítico para la implementación del backend. Define cada tabla y columna, eliminando ambigüedades y asegurando consistencia. La implementación de la arquitectura multi-institucional se refleja en la inclusión de una clave foránea institute_id en las tablas que pertenecen a una institución específica.

| Tabla | Columna | Tipo de Dato | Descripción |
| --- | --- | --- | --- |
| **institutes** | id  | BIGINT, PK | Identificador único de la institución. |
| --- | --- | --- | --- |
|     | name | VARCHAR(255) | Nombre oficial del Instituto Profesional. |
| --- | --- | --- | --- |
|     | contact_info | TEXT | Información de contacto de la institución. |
| --- | --- | --- | --- |
| **roles** | id  | BIGINT, PK | Identificador único del rol. |
| --- | --- | --- | --- |
|     | name | VARCHAR(50) | Nombre del rol (ej. 'Estudiante', 'Docente VcM'). |
| --- | --- | --- | --- |
| **users** | id  | BIGINT, PK | Identificador único del usuario. |
| --- | --- | --- | --- |
|     | name | VARCHAR(255) | Nombre completo del usuario. |
| --- | --- | --- | --- |
|     | email | VARCHAR(255), UNIQUE | Correo electrónico para inicio de sesión. |
| --- | --- | --- | --- |
|     | password | VARCHAR(255) | Hash de la contraseña. |
| --- | --- | --- | --- |
|     | role_id | BIGINT, FK | Referencia a la tabla roles. |
| --- | --- | --- | --- |
|     | institute_id | BIGINT, FK, NULLABLE | Referencia a la tabla institutes (NULL para Super-Admin). |
| --- | --- | --- | --- |
| **projects** | id  | BIGINT, PK | Identificador único del proyecto. |
| --- | --- | --- | --- |
|     | title | VARCHAR(255) | Título del proyecto. |
| --- | --- | --- | --- |
|     | description | TEXT | Descripción detallada de la problemática y alcance. |
| --- | --- | --- | --- |
|     | status | VARCHAR(50) | Estado actual del proyecto (ej. 'Propuesto', 'Activo', 'Completado'). |
| --- | --- | --- | --- |
|     | actor_interes_id | BIGINT, FK | Referencia al usuario (Actor de Interés) que propuso el proyecto. |
| --- | --- | --- | --- |
|     | docente_vcm_id | BIGINT, FK, NULLABLE | Referencia al usuario (Docente VcM) asignado. |
| --- | --- | --- | --- |
|     | docente_catedra_id | BIGINT, FK, NULLABLE | Referencia al usuario (Docente de Cátedra) asignado. |
| --- | --- | --- | --- |
|     | institute_id | BIGINT, FK | Referencia a la institución que gestiona el proyecto. |
| --- | --- | --- | --- |
| **tasks** | id  | BIGINT, PK | Identificador único de la tarea. |
| --- | --- | --- | --- |
|     | project_id | BIGINT, FK | Referencia al proyecto al que pertenece la tarea. |
| --- | --- | --- | --- |
|     | title | VARCHAR(255) | Título de la tarea. |
| --- | --- | --- | --- |
|     | status | VARCHAR(50) | Estado de la tarea (ej. 'Pendiente', 'En Progreso', 'Finalizada'). |
| --- | --- | --- | --- |
|     | assignee_id | BIGINT, FK, NULLABLE | Referencia al usuario (Estudiante) asignado a la tarea. |
| --- | --- | --- | --- |
|     | due_date | DATE, NULLABLE | Fecha de vencimiento de la tarea. |
| --- | --- | --- | --- |
| **team_members** | team_id | BIGINT, FK | Referencia a la tabla project_student_teams. |
| --- | --- | --- | --- |
|     | student_user_id | BIGINT, FK | Referencia al usuario (Estudiante) que es miembro del equipo. |
| --- | --- | --- | --- |
| **documents** | id  | BIGINT, PK | Identificador único del documento. |
| --- | --- | --- | --- |
|     | project_id | BIGINT, FK | Referencia al proyecto al que pertenece el documento. |
| --- | --- | --- | --- |
|     | file_path | VARCHAR(255) | Ruta de almacenamiento del archivo. |
| --- | --- | --- | --- |
|     | uploaded_by_id | BIGINT, FK | Referencia al usuario que subió el archivo. |
| --- | --- | --- | --- |
| **communications** | id  | BIGINT, PK | Identificador único del mensaje. |
| --- | --- | --- | --- |
|     | project_id | BIGINT, FK | Referencia al proyecto donde se envió el mensaje. |
| --- | --- | --- | --- |
|     | user_id | BIGINT, FK | Referencia al usuario que envió el mensaje. |
| --- | --- | --- | --- |
|     | message | TEXT | Contenido del mensaje. |
| --- | --- | --- | --- |

### **7.3. Script SQL de Creación de Base de Datos (Base)**

Junto con el diccionario, se proporcionaría un script SQL con las sentencias CREATE TABLE para las tablas principales. Este script serviría como un punto de partida rápido para que los estudiantes creen sus migraciones en Laravel, asegurando que la estructura base sea consistente con el diseño.

## **Sección 8: Consideraciones Técnicas y Hoja de Ruta de Desarrollo**

### **8.1. Pila Tecnológica Recomendada (Stack Tecnológico)**

- **Backend:** Laravel, como fue solicitado explícitamente, por su robustez, ecosistema y facilidad para construir aplicaciones complejas \[User Query\].
- **Frontend:** Vue.js o React. Ambos son frameworks de JavaScript modernos, basados en componentes, que se integran de manera excelente con Laravel (especialmente Vue.js a través de Inertia.js o como SPA).
- **Base de Datos:** MySQL o PostgreSQL. Ambas son bases de datos relacionales potentes y bien soportadas por Laravel.
- **Servicios de IA:** Un microservicio independiente desarrollado en Python con un framework ligero como Flask o FastAPI. Este servicio alojará los modelos de IA y se comunicará con la aplicación Laravel a través de una API REST. Este desacoplamiento permite escalar y mantener los servicios de IA de forma independiente.
- **Servidor:** Nginx como servidor web. Se recomienda el uso de Docker para la contenerización de la aplicación, lo que simplifica enormemente el entorno de desarrollo, las pruebas y el despliegue final.

### **8.2. Requerimientos No Funcionales**

- **Seguridad:** La implementación del Control de Acceso Basado en Roles (RBAC) es crítica. Se deben utilizar sentencias preparadas (a través del ORM de Laravel, Eloquent) para prevenir inyección SQL, sanear todas las entradas del usuario y asegurar que la carga de archivos sea segura.
- **Escalabilidad:** El diseño de la base de datos multi-tenant y la arquitectura de microservicios para la IA son las claves para la escalabilidad futura de la plataforma.
- **Rendimiento:** Se deben implementar índices en la base de datos en las columnas de búsqueda frecuente. Se puede utilizar un sistema de caché como Redis para almacenar datos a los que se accede con frecuencia (ej. permisos de roles, configuraciones) y optimizar la carga de assets del frontend.
- **Usabilidad:** La plataforma debe ser intuitiva y requerir una curva de aprendizaje mínima, especialmente para los Actores de Interés que pueden no tener experiencia con software de gestión de proyectos.

### **8.3. Hoja de Ruta Sugerida: Del Producto Mínimo Viable (MVP) a la Visión Completa**

Se propone un plan de desarrollo iterativo basado en sprints para el equipo de estudiantes.

- **Sprints 1-2 (Núcleo del MVP):**
  - Implementar la autenticación de usuarios y la estructura de roles.
  - Desarrollar la funcionalidad CRUD básica para proyectos (creación manual).
  - Construir el dashboard de proyecto simple.
  - Implementar la gestión manual de tareas y documentos.
- **Sprints 3-4 (Colaboración y Flujo de Trabajo):**
  - Implementar el flujo de proceso completo de VcM con cambios de estado y notificaciones.
  - Desarrollar el módulo de comunicaciones.
  - Implementar la funcionalidad de gestión de equipos.
- **Sprint 5 (Integración de IA - Roadmap):**
  - Construir el microservicio de IA para la generación de roadmaps.
  - Integrar la llamada a la API de IA en el flujo de creación de proyectos.
  - Desarrollar la interfaz de usuario para refinar el roadmap generado por la IA.
- **Sprint 6 (Funcionalidades Avanzadas y Pulido):**
  - Desarrollar el módulo de reportes y analíticas.
  - Si el tiempo lo permite, implementar las funcionalidades adicionales de IA (AIR, Chatbot).
  - Realizar pruebas finales, corrección de errores y preparar la documentación para el despliegue.

#### Obras citadas

1. docencia vinculada al sector productivo.pdf
2. Vinculación con el Medio - Universidad Autónoma de Chile, fecha de acceso: julio 17, 2025, <https://www.uautonoma.cl/vinculacion-con-el-medio/>
3. PROYECTOS Y PROGRAMAS – Vinculación Social UdeC, fecha de acceso: julio 17, 2025, <https://vinculacionsocial.udec.cl/proyectos-y-programas/>
4. Programas y Proyectos de Vinculación con el Medio por Tipo ..., fecha de acceso: julio 17, 2025, <https://vinculacion.unab.cl/programas-por-tipo/>
5. Nueva plataforma web reúne proyectos sociales estudiantiles, fecha de acceso: julio 17, 2025, <https://www.uc.cl/noticias/iniciativas-sociales-uc-nueva-plataforma-web-reune-proyectos-sociales-estudiantiles/>
6. Vinculación con el Medio - Universidad de los Andes, fecha de acceso: julio 17, 2025, <https://www.uandes.cl/vinculacion-con-el-medio/>
7. Redes y proyectos - Cuech, fecha de acceso: julio 17, 2025, <https://www.uestatales.cl/redes-proyectos/>
8. AI Roadmap Generator Tool - Semblian, fecha de acceso: julio 17, 2025, <https://www.sembly.ai/ai-roadmap-generator/>
9. How Can AI Help Create Roadmaps for Complex Projects: Unlock Efficiency & Predictability, fecha de acceso: julio 17, 2025, <https://www.itsdart.com/blog/how-ai-can-help-create-roadmaps-for-complex-projects>
10. Generative AI Product Roadmaps - Jeda.ai, fecha de acceso: julio 17, 2025, <https://www.jeda.ai/resources/generative-ai-product-roadmaps-with-jeda-ai>
11. Free AI Roadmap Creator: Strategic Planning in Minutes - MyMap.AI, fecha de acceso: julio 17, 2025, <https://www.mymap.ai/roadmap-creator>
12. Roadmap Visualizer | AI Agent Tools - Beam AI, fecha de acceso: julio 17, 2025, <https://beam.ai/tools/roadmap-visualiser>
13. Free AI Roadmap Generator: Create Roadmaps in Minutes - Venngage, fecha de acceso: julio 17, 2025, <https://venngage.com/ai-tools/roadmap-generator>
14. AI in Project Management: Resource Planning & Delivery - Celoxis®, fecha de acceso: julio 17, 2025, <https://www.celoxis.com/article/ai-in-project-management-resource-planning-execution>
15. Top 10 Ways AI is Transforming Project Management in 2025, fecha de acceso: julio 17, 2025, <https://mem.grad.ncsu.edu/2025/04/29/top-10-ways-ai-is-transforming-project-management-in-2025/>
16. AI Personal Assistant for Project Professionals PMI Infinity - Project Management Institute, fecha de acceso: julio 17, 2025, <https://www.pmi.org/infinity>
17. AI in Project Management | 10 Ways ChatPM Bot Leads in 2025, fecha de acceso: julio 17, 2025, <https://chatpmpro.com/chatpm-ai-project-management-trends-2025/>




FICHA DE TOMA DE REQUERIMIENTOS DEL PROYECTO
Introducción 

Este documento tiene como propósito recopilar y organizar los requerimientos del sistema utilizando la metodología de historias de usuario.  

A través de este enfoque, se busca capturar las necesidades de los usuarios finales de manera clara, estructurada y alineada con los objetivos del proyecto tecnológico.  

Información del Proyecto 

Nombre del proyecto: Municipalidad Isla de Maipo  

Fecha de inicio: 24/03/2025 

Fecha estimada de finalización: 31/07/2025 

Responsable del proyecto: Elías Jiménez 

Stakeholders clave: Municipalidad de Isla de Maipo 

Alcance del Proyecto 

El alcance del proyecto define los límites y objetivos clave que se deben cumplir. Se describen las funcionalidades principales y restricciones asociadas al desarrollo. 

Descripción general del proyecto: Cambio visual página web 

Funcionalidades principales: Portales, noticias, pagos, etc. 

Restricciones o consideraciones técnicas: Doble capa de seguridad de acceso. 

Historias de Usuario 

Las historias de usuario describen las necesidades del usuario final en un formato claro y conciso: 
Como [tipo de usuario], quiero [acción o funcionalidad] para [objetivo o beneficio]. 
 
Ejemplo:   
Como cliente del sistema, quiero registrarme con mi correo y contraseña para acceder a mis servicios personalizados. 

A continuación, se documentarán las historias de usuario del proyecto: 

Historia de usuario N° 1 

Como: Municipalidad Isla de Maipo 

Quiero: Realizar la renovación de la página web 

Para: Que tenga funciones y aspectos visuales mejorados, considerando las interacciones diferentes dispositivos (pc, smartphone, Tablet). 

Criterios de aceptación: 

Accesos directos a información municipal permanente (Deptos. Municipales, contactos, servicios, transparencia, números de emergencia) 

Botones permanentes a redes sociales (Instagram, Facebook, youtube) 

Enlazar un reproductor de radio isla dentro de la página (https://radioisla.cl/) 

Banner inicial personalizable para destacar eventos, servicios temporales, etc. 

Portal informativo de noticias comunales (texto, imagen y audio). Opción de enlazar galería de imágenes de un post de Facebook. 

Formulario de contacto para consultas, que se enlace a correo municipal. 

Posibilidad de crear páginas adicionales y enlazarlas a la página principal. Por ejemplo necesitamos crear una sección especial por la Vendimia, en donde agregaremos imágenes e información (audio o video). Y luego destacar esa sección en la página principal. 

Opción de crear una sección para transmisiones en vivo, similar a Facebook live. Esto sería para no tener problemas por copyright de audio. 

Sección para subir bases de concursos públicos. Debe tener la opción de subir un pdf con un título que indique a lo que corresponde. 

Sección Marca Destino. Debería contener un pdf descargable con el manual y aparte un kit (archivo comprimido) para descargar también. 

Requerimientos No Funcionales 

Además de las historias de usuario, se deben considerar los requerimientos no funcionales, que incluyen aspectos técnicos y operativos clave del sistema. 

Seguridad: Considerar que trabajo en servidores propios 

Performance: No aplica 

Usabilidad: No aplica  

Compatibilidad: No aplica  

Disponibilidad: No aplica  

Dependencias y Consideraciones Adicionales 

Herramientas y tecnologías a utilizar: No aplica (CMS WordPress) MySQLi 

Integraciones con otros sistemas: N/A van a sistema de pagos.  

Factores de riesgo: No aplica  

Este documento servirá como base para la planificación y el desarrollo del proyecto. Si necesitas hacer ajustes o agregar más información, puedes hacerlo en función de los avances y necesidades del equipo. 

 