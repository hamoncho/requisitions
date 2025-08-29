# Manual de Usuario - Dashboard

## 1. Introducción

El dashboard es el panel de control central para administradores. Desde aquí, puedes gestionar todos los aspectos clave del sistema de requisiciones, incluyendo la configuración de proyectos, objetivos, procesos y más.

## 2. Acceso a las Secciones

El dashboard está compuesto por una serie de "tarjetas". Cada tarjeta es un acceso directo a una sección específica del sistema. Simplemente haz clic en una tarjeta para ir a la página de gestión de ese recurso.

## 3. Gestión de Recursos

El proceso para gestionar la mayoría de los recursos (como Objetivos, Procesos, Involucrados, etc.) es muy similar. A continuación se describe el flujo general.

### 3.1. Ver Recursos

Al hacer clic en una tarjeta de recurso en el dashboard (por ejemplo, "Objetivos"), serás llevado a una página que lista todos los registros existentes para ese recurso. La información se presenta en una tabla que permite ver los detalles más importantes de un vistazo.

### 3.2. Crear un Nuevo Recurso

En la página de listado de cada recurso, encontrarás un botón de "Crear" (normalmente en la esquina superior derecha). Al hacer clic en este botón, se te presentará un formulario con los campos necesarios para crear un nuevo registro. Rellena el formulario y haz clic en "Guardar" para crear el nuevo recurso.

### 3.3. Editar un Recurso Existente

En la tabla de listado de cada recurso, cada fila tendrá botones de acción, incluyendo un botón de "Editar". Al hacer clic en "Editar", serás llevado a un formulario pre-rellenado con la información del recurso seleccionado. Modifica los campos que desees y haz clic en "Actualizar" para guardar los cambios.

### 3.4. Eliminar un Recurso

En la tabla de listado de cada recurso, junto al botón de "Editar", también encontrarás un botón de "Eliminar". Al hacer clic en este botón, se te pedirá confirmación antes de eliminar el recurso de forma permanente.

---

## 4. Secciones Específicas

A continuación se detallan las secciones disponibles desde el dashboard:

### 4.1. Requisiciones

- **Descripción**: Gestiona y da seguimiento a todas las requisiciones del sistema.
- **Funciones**:
    - Ver el listado de todas las requisiciones.
    - Ver el detalle de una requisición.
    - Iniciar el proceso de aprobación.
    - Ver el historial de requisiciones.

### 4.2. Objetivos

- **Descripción**: Define los objetivos estratégicos.
- **Campos para crear/editar**:
    - **Index**: Campo numérico. Es obligatorio.
    - **Name**: Campo de texto. Es obligatorio.
    - **Description**: Campo de texto. Es obligatorio.
    - **Involveds**: Selección múltiple (checkboxes) de involucrados. Es obligatorio.

### 4.3. Partidas Presupuestarias Generales

- **Descripción**: Gestiona las categorías generales de presupuesto.
- **Campos para crear/editar**:
    - **Code**: Campo numérico. Obligatorio.
    - **Name**: Campo de texto. Obligatorio. Máximo 255 caracteres.
    - **Description**: Campo de texto. Obligatorio. Máximo 1024 caracteres.

### 4.4. Partidas Presupuestarias

- **Descripción**: Gestiona las partidas presupuestarias específicas, asociadas a las generales.
- **Campos para crear/editar**:
    - **Full Code**: Campo de texto (se espera un número entero). Obligatorio.
    - **General Budget Item**: Selección de una partida presupuestaria general. Obligatorio.
    - **Name**: Campo de texto. Obligatorio. Máximo 500 caracteres.

### 4.5. Involucrados

- **Descripción**: Gestiona a las personas o departamentos involucrados en los proyectos.
- **Campos para crear/editar**:
    - **Name**: Campo de texto. No obligatorio.

### 4.6. Procesos

- **Descripción**: Define los procesos que se siguen en la organización.
- **Campos para crear/editar**:
    - **Index**: Campo de texto. Es obligatorio.
    - **Projects**: Selección múltiple (checkboxes) de proyectos. Es obligatorio.

### 4.7. Proyectos

- **Descripción**: Gestiona los proyectos de la organización.
- **Campos para crear/editar**:
    - **Action**: Selección de una acción. Es obligatorio.
    - **Index**: Campo de texto. Es obligatorio.
    - **Description**: Campo de texto. Es obligatorio.

### 4.8. Metas

- **Descripción**: Define las metas asociadas a los objetivos.
- **Campos para crear/editar**:
    - **Year**: Campo numérico. Es obligatorio.
    - **Result**: Campo de texto. Es obligatorio.
    - **Action**: Selección de una acción. Es obligatorio.

### 4.9. Acciones

- **Descripción**: Define las acciones concretas para alcanzar las metas.
- **Campos para crear/editar**:
    - **Index**: Campo de texto. Es obligatorio.
    - **Name**: Campo de texto. Es obligatorio.
    - **Formula**: Campo de texto. Es obligatorio.
    - **Objective**: Selección de un objetivo. Es obligatorio.

### 4.10. Indicadores

- **Descripción**: Gestiona los indicadores de rendimiento para medir el progreso.
- **Campos para crear/editar**:
    - **Project**: Selección de un proyecto. Es obligatorio.
    - **Index**: Campo de texto. Es obligatorio.
    - **Description**: Campo de texto. Es obligatorio.

### 4.11. Administración de Usuarios

- **Descripción**: Gestiona las cuentas de usuario del sistema.
- **Funciones**:
    - Ver la lista de usuarios.
    - Editar los roles y permisos de los usuarios.
    - Restablecer contraseñas.
    - Eliminar usuarios.
