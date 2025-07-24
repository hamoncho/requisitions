<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud de Aprobación de Requisición</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            color: #333;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid #e6e6e6;
        }

        .header {
            background-color: #1e3a8a;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .content {
            padding: 30px;
        }

        .content p {
            line-height: 1.6;
            font-size: 16px;
        }

        .info-header {
            background-color: #1e3a8a;
            color: #ffffff;
            padding: 20px;
        }

        .info-grid {
            background-color: #f3f4f6;
            border-radius: 6px;
            padding: 15px;
            margin-bottom: 25px;
        }

        .info-grid .info-item {
            padding: 2px 0;
        }

        .info-grid .info-item b {
            font-weight: 600;
            color: #1f2937;
        }

        .status-badge {
            display: inline-block;
            padding: 4px 12px;
            font-size: 12px;
            font-weight: 500;
            border-radius: 6px;
        }

        .status-pending {
            background-color: #fef3c7; /* yellow-100 */
            color: #92400e; /* yellow-800 */
        }

        .status-draft {
            background-color: #f3f4f6; /* gray-100 */
            color: #1f2937; /* gray-800 */
        }

        .status-approved {
            background-color: #dcfce7; /* green-100 */
            color: #166534; /* green-800 */
        }

        .status-rejected {
            background-color: #fee2e2; /* red-100 */
            color: #991b1b; /* red-800 */
        }

        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 14px;
        }

        .items-table thead {
            background-color: #f9fafb;
        }

        .items-table th {
            padding: 10px 8px;
            text-align: left;
            font-size: 12px;
            font-weight: 500;
            color: #6b7280;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border-bottom: 1px solid #e5e7eb;
        }

        .items-table tbody tr {
            border-bottom: 1px solid #e5e7eb;
        }

        .items-table td {
            padding: 10px 8px;
            white-space: nowrap;
        }

        .items-table .total-row td {
            font-weight: bold;
            font-size: 16px;
            text-align: right;
            padding-top: 15px;
        }

        .items-table .total-value {
            background-color: #f3f4f6;
            font-weight: bold;
            white-space: nowrap;
        }

        .actions {
            text-align: center;
            padding: 30px;
        }

        .button {
            display: inline-block;
            padding: 12px 25px;
            font-size: 16px;
            font-weight: 500;
            color: #fff;
            background-color: #1e3a8a;
            text-decoration: none;
            border-radius: 6px;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #1c357a;
        }

        .footer {
            text-align: center;
            padding: 20px;
            font-size: 12px;
            color: #6b7280;
        }

        img {
            width: 90%;
            padding: 25px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Requisición #{{ $requisition->folio }}</h1>
        </div>

        <img src="{{ asset('/storage/img/logo_tec_uruapan.png') }}" alt="Logo">
        <div class="content">
            <p>Hola, <strong>{{ $approver->name }}</strong>.</p>
            <p>Se solicita tu aprobación para la siguiente requisición. Revisa los detalles y toma una acción.</p>

            <div class="info-header"><b>{{ $requisition->process->index }}</b></div>
            <div class="info-grid">
                <div class="info-item"><b>Proyecto:</b> {{ $requisition->indicator->project->index }} -
                    {{ $requisition->indicator->project->description }}</div>
                <div class="info-item"><b>Indicador:</b> {{ $requisition->indicator->index }} - {{ $requisition->indicator->description }}</div>
                <div class="info-item"><b>Solicitante:</b> {{ $requisition->user->name }}</div>
                <div class="info-item"><b>Fecha de creacion:</b> {{ $requisition->created_at->format('d/m/Y H:i') }}
                </div>
                <div class="info-item"><b>Estado:</b>
                    @switch($requisition->status)
                        @case('draft')
                            <span class="status-badge status-draft">
                                Borrador
                            </span>
                        @break

                        @case('pending_approval')
                            <span class="status-badge status-pending">
                                Pendiente De Aprobación
                            </span>
                        @break

                        @case('approved')
                            <span class="status-badge status-approved">
                                Aprobado
                            </span>
                        @break

                        @case('rejected')
                            <span class="status-badge status-rejected">
                                Rechazado
                            </span>
                        @break

                        @default
                            <span class="status-badge status-default">
                                {{ $requisition->status }}
                            </span>
                    @endswitch
                </div>
            </div>

            <h3 style="margin-top: 30px; border-bottom: 2px solid #eee; padding-bottom: 10px;">Artículos de la
                Requisición</h3>
            <table class="items-table">
                <thead>
                    <tr>
                        <th>P.P</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>Unidad</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($requisition->requisitionItems as $item)
                        <tr>
                            <td>{{ $item->budgetItem->full_code ?? 'N/A' }}</td>
                            <td style="max-width: 220px;white-space: wrap">{{ $item->name }}</td>
                            <td>{{ $item->amount }}</td>
                            <td>{{ $item->unit }}</td>
                            <td>${{ number_format($item->price, 2) }}</td>
                        </tr>
                    @endforeach
                    <tr class="total-row">
                        <td colspan="4">Total:</td>
                        <td class="total-value">${{ number_format($requisition->requisitionItems->sum('price'), 2) }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="actions">
            <a href="{{ route('requisition.show', $requisition) }}" class="button">Ver Requisición</a>
        </div>
        <div class="footer">
            <p>Este es un correo generado automáticamente. Por favor, no respondas a este mensaje.</p>
            <p>{{ date('Y') }} ITSU</p>
        </div>
    </div>
</body>

</html>
