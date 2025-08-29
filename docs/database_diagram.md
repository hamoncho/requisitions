
# Diagrama de Entidad-Relación de la Base de Datos

Este archivo contiene el diagrama de la base de datos en formato Mermaid. Puedes visualizarlo usando un editor en línea o extensiones compatibles con Markdown.

## Visualización del Diagrama

Para ver este diagrama, puedes seguir estos pasos:

1.  Copia todo el código que se encuentra dentro del bloque `erDiagram`.
2.  Abre el [Editor en vivo de Mermaid](https://mermaid.live).
3.  Pega el código en el panel de la izquierda (el panel de código).
4.  El diagrama se renderizará automáticamente en el panel de la derecha.

También puedes usar extensiones en tu editor de código (como Visual Studio Code) que soporten la previsualización de diagramas Mermaid en archivos Markdown.

## Código del Diagrama

```mermaid
erDiagram
    users {
        bigint id PK
        varchar(255) name
        varchar(255) position
        varchar(255) email UK
        timestamp email_verified_at
        varchar(255) role
        bigint supervisor_id FK
    }

    general_budget_items {
        bigint id PK
        int code
        varchar(255) name
        varchar(1024) description
    }

    budget_items {
        bigint id PK
        int full_code
        varchar(255) name
        varchar(1024) description
        bigint general_budget_item_id FK
    }

    objectives {
        bigint id PK
        varchar(16) index
        varchar(255) name
        varchar(255) description
    }

    involveds {
        bigint id PK
        varchar(255) name
    }

    involved_objective {
        bigint id PK
        bigint involved_id FK
        bigint objective_id FK
    }

    actions {
        bigint id PK
        varchar(8) index
        varchar(255) name
        varchar(255) formula
        bigint objective_id FK
    }

    goals {
        bigint id PK
        int year
        varchar(255) result
        bigint action_id FK
    }

    projects {
        bigint id PK
        varchar(10) index
        varchar(255) description
        bigint action_id FK
    }

    indicators {
        bigint id PK
        varchar(10) index
        varchar(255) description
        bigint project_id FK
    }

    processes {
        bigint id PK
        varchar(10) index
    }

    process_project {
        bigint id PK
        bigint process_id FK
        bigint project_id FK
    }

    requisitions {
        bigint id PK
        bigint processes_id FK
        bigint indicators_id FK
        bigint users_id FK
        int folio UK
        enum status
        bigint current_approver_id FK
    }

    requisition_items {
        bigint id PK
        bigint requisitions_id FK
        bigint budget_item_id FK
        varchar(255) name
        int amount
        varchar(255) unit
        varchar(255) type_resource
        float price
    }

    requisition_approvals {
        bigint id PK
        bigint requisition_id FK
        bigint approver_id FK
        int order
        enum status
        text comments
    }

    users ||--o{ users : "supervises"
    general_budget_items ||--o{ budget_items : "contains"
    objectives ||--o{ actions : "has"
    actions ||--o{ goals : "has"
    actions ||--o{ projects : "has"
    projects ||--o{ indicators : "has"
    involveds ||--|{ involved_objective : "participates in"
    objectives ||--|{ involved_objective : "has"
    processes ||--|{ process_project : "is part of"
    projects ||--|{ process_project : "has"
    processes ||--o{ requisitions : "has"
    indicators ||--o{ requisitions : "has"
    users ||--o{ requisitions : "creates"
    users ||--o{ requisitions : "is current approver of"
    requisitions ||--o{ requisition_items : "contains"
    budget_items ||--o{ requisition_items : "is used in"
    requisitions ||--o{ requisition_approvals : "has"
    users ||--o{ requisition_approvals : "approves"
```
