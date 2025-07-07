<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Moderna</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e4edf5 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 1000px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        .table-header {
            padding: 24px 32px;
            background: #ffffff;
            border-bottom: 1px solid #f0f0f0;
        }

        .table-title {
            font-size: 1.8rem;
            color: #2c3e50;
            font-weight: 600;
        }

        .table-subtitle {
            color: #7f8c8d;
            margin-top: 8px;
        }

        .table-responsive {
            overflow-x: auto;
            padding: 20px;
        }

        .modern-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            min-width: 600px;
        }

        .modern-table thead th {
            background-color: #6c5ce7;
            color: white;
            font-weight: 600;
            text-align: left;
            padding: 18px 24px;
        }

        .modern-table th:first-child {
            border-radius: 12px 0 0 0;
        }

        .modern-table th:last-child {
            border-radius: 0 12px 0 0;
        }

        .modern-table tbody tr {
            transition: all 0.2s ease;
            background: white;
        }

        .modern-table tbody tr:nth-child(even) {
            background-color: #f9f9ff;
        }

        .modern-table tbody tr:hover {
            background-color: #f0f4ff;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(108, 92, 231, 0.1);
        }

        .modern-table td {
            padding: 16px 24px;
            color: #2d3436;
            border-bottom: 1px solid #f1f2f6;
        }

        .status {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
            display: inline-block;
        }

        .status.completed {
            background: rgba(46, 204, 113, 0.15);
            color: #27ae60;
        }

        .status.pending {
            background: rgba(241, 196, 15, 0.15);
            color: #f39c12;
        }

        .status.processing {
            background: rgba(52, 152, 219, 0.15);
            color: #2980b9;
        }

        .highlight {
            font-weight: 600;
            color: #6c5ce7;
        }

        @media (max-width: 768px) {
            .table-header {
                padding: 20px;
            }

            .modern-table th,
            .modern-table td {
                padding: 14px 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="table-header">
            <h1 class="table-title">Reporte de Proyectos</h1>
            <p class="table-subtitle">Estado actual de los proyectos activos</p>
        </div>

        <div class="table-responsive">
            <table class="modern-table">
                <thead>
                    <tr>
                        <th>Proyecto</th>
                        <th>Líder</th>
                        <th>Fecha</th>
                        <th>Presupuesto</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Rediseño Web</td>
                        <td>María Rodríguez</td>
                        <td>15/08/2023</td>
                        <td class="highlight">$24,800</td>
                        <td><span class="status completed">Completado</span></td>
                    </tr>
                    <tr>
                        <td>App Móvil</td>
                        <td>Carlos Mendoza</td>
                        <td>22/09/2023</td>
                        <td class="highlight">$42,500</td>
                        <td><span class="status processing">Procesando</span></td>
                    </tr>
                    <tr>
                        <td>E-commerce</td>
                        <td>Ana López</td>
                        <td>05/10/2023</td>
                        <td class="highlight">$68,300</td>
                        <td><span class="status pending">Pendiente</span></td>
                    </tr>
                    <tr>
                        <td>Inteligencia Artificial</td>
                        <td>David Torres</td>
                        <td>12/11/2023</td>
                        <td class="highlight">$125,000</td>
                        <td><span class="status processing">Procesando</span></td>
                    </tr>
                    <tr>
                        <td>Cloud Migration</td>
                        <td>Laura Jiménez</td>
                        <td>18/12/2023</td>
                        <td class="highlight">$89,500</td>
                        <td><span class="status completed">Completado</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
