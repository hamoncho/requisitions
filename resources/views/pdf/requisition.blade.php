<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <title>Requisition</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
            padding: 0;
            margin: 0;
        }


        .container {}

        .info-list {
            display: inline-block;
            width: 780px;
            list-style: none;
            background-color: #f3f4f6;
            border-radius: 0.375rem;
            padding: 0;
            margin: 0;
        }

        .info-list-header {
            padding: 0.25rem 0.5rem;
            font-size: 14px;
            font-weight: bolder;
            background-color: #172554;
            color: #f3f4f6;
            border-top-left-radius: 0.375rem;
            border-top-right-radius: 0.375rem;
        }

        .info-list-item {
            line-height: 1;
            padding-left: 10px;
            padding-top: 3px;
        }

        .status-container {
            top: -15px;
            right: 0;
            display: inline-block;
            position: absolute;
            min-width: fit-content;
        }

        .status-badge {
            font-size: 12px;
            font-weight: 700;
            padding: 0.25rem 0.75rem;
            border-radius: 0.375rem;
        }

        .status-draft {
            background-color: #f3f4f6;
            color: #1f2937;
        }

        .status-pending {
            background-color: #fef9c3;
            color: #854d0e;
        }

        .status-approved {
            background-color: #dcfce7;
            color: #166534;
        }

        .status-rejected {
            background-color: #fee2e2;
            color: #991b1b;
        }

        .status-default {
            background-color: #dbeafe;
            color: #1e40af;
        }

        .updated_at {
            margin-top: 5px;
        }

        .items-container {
            margin-top: 0px;
        }

        .items-header {
            font-size: 12px;
            color: #111827;
        }

        .table-container {
            overflow-x: auto;
            margin-top: 0.5rem;
        }

        .table {
            min-width: 100%;
            border-collapse: collapse;
        }

        .table-header {
            background-color: #f9fafb;
        }

        .table-header th {
            padding: 0.25rem 0.5rem;
            text-align: center;
            font-size: 12px;
            font-weight: 700;
            color: #6b7280;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border: 1px solid #e5e7eb;
        }

        .table-body {
            background-color: #ffffff;
        }

        .table-body td {
            padding: 5px;
            font-size: 12px;
            white-space: nowrap;
            border: 1px solid #e5e7eb;
        }

        .budget-item-th {
            width: 50px;
        }

        .amount-th {
            width: 50px;
        }

        .unit-th {
            width: 80px;
        }

        .resource_type-th {
            width: 80px;
        }

        .price-th {
            width: 65px;
        }

        .budget-item-td {
            text-align: center;
        }

        .amount-td {
            text-align: center;
        }

        .unit-td {
            text-align: center;
        }

        .resource_type-td {
            text-align: center;
        }

        .price-td {
            text-align: right;
        }

        .folio{
            font-size: 16px;
            margin-top: 10px;
            font-weight: 700;
        }

        .table-footer-row td {
            font-weight: 700;
            text-align: right;
            padding: 5px;
        }

        .table-total-cell {
            background-color: #e5e7eb;
            white-space: nowrap;
            padding: 0.5rem 0.5rem;
        }

        .timeline-container {
            position: relative;
            margin-top: 30px;
        }

        .timeline-progress {
            position: absolute;
            top: 20px;
            left: 0;
            right: 0;
            height: 3px;
            background-color: #d1d5db;
            z-index: 1;
        }

        .timeline-steps {
            display: table;
            width: 100%;
            table-layout: fixed;
            position: relative;
            z-index: 2;
        }

        .step {
            display: table-cell;
            vertical-align: top;
            text-align: center;
            position: relative;
            padding: 0 15px;
        }

        .step-indicator {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: bold;
            border: 3px solid white;
        }

        .step-indicator.approved {
            background-color: #dcfce7;
            color: #16a34a;
        }

        .step-indicator.rejected {
            background-color: #fee2e2;
            color: #dc2626;
        }

        .step-indicator.pending {
            background-color: #fef3c7;
            color: #d97706;
        }

        .step-indicator.default {
            background-color: #e5e7eb;
            color: #4b5563;
        }

        .approver-name {
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 3px;
            font-size: 12px;
        }

        .approver-comment {
            color: #4b5563;
            font-size: 12px;
            margin-bottom: 5px;
            min-height: 20px;
        }

        .approver-date {
            color: #9ca3af;
            font-size: 11px;
        }
    </style>
</head>

<body>
    <div class="container">
        <ul class="info-list">
            <li class="info-list-header">
                {{ $requisition->process->index }}
            </li>

            <li class="info-list-item">
                <b>Objectivo: </b>
                {{ $requisition->indicator->project->action->objective->name }} -
                {{ $requisition->indicator->project->action->objective->description }}.
            </li>

            <li class="info-list-item">
                <b>Linea de acción: </b>
                {{ $requisition->indicator->project->action->index }} -
                {{ $requisition->indicator->project->action->name }}.
            </li>

            <li class="info-list-item">
                <b>Proyecto: </b>
                {{ $requisition->indicator->project->index }} -
                {{ $requisition->indicator->project->description }}.
            </li>

            <li class="info-list-item">
                <b>Indicador: </b>
                {{ $requisition->indicator->index }} -
                {{ $requisition->indicator->description }}.
            </li>

            <li class="info-list-item">
                <b>Creado Por: </b>
                {{ $requisition->user->name }}
            </li>

            <li class="info-list-item">
                <b>Fecha de creación: </b>
                {{ $requisition->created_at->format('d/m/Y H:i') }}
            </li>
        </ul>
        <div class="status-container">
            <div>
                Estado:
                @switch($requisition->status)
                    @case('draft')
                        <span class="status-badge status-draft">
                            Borrador
                        </span>
                    @break

                    @case('pending_approval')
                        <span class="status-badge status-pending">
                            Pendiente
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
            <div class="updated_at">
                {{ $requisition->updated_at->format('d/m/Y H:i') }}
            </div>

            <div class="folio">
                Folio: {{ $requisition->folio }}
            </div>
        </div>
    </div>

    <div class="items-container">
        @if ($requisition->requisitionItems->isEmpty())
            <p>{{ __('No items found for this requisition.') }}</p>
        @else
            <div class="table-container">
                <table class="table">
                    <thead class="table-header">
                        <tr>
                            <th class="budget-item-th">P.P</th>
                            <th class="description-th">Descripcción</th>
                            <th class="amount-th">Cant.</th>
                            <th class="unit-th">Unidad</th>
                            <th class="resource_type-th">Tipo</th>
                            <th class="price-th">Precio</th>
                        </tr>
                    </thead>
                    <tbody class="table-body">
                        @foreach ($requisition->requisitionItems as $item)
                            <tr>
                                <td class="budget-item-td">
                                    {{ $item->budgetItem->full_code ?? 'N/A' }}
                                </td>

                                <td class="description-td">
                                    {{ $item->name }}
                                </td>

                                <td class="amount-td">
                                    {{ $item->amount }}
                                </td>

                                <td class="unit-td">
                                    {{ $item->unit }}
                                </td>

                                <td class="type_resource-td">
                                    {{ $item->type_resource }}
                                </td>

                                <td class="price-td">
                                    ${{ number_format($item->price, 2) }}
                                </td>
                            </tr>
                        @endforeach
                        <tr class="table-footer-row">
                            <td colspan="5">Total:</td>
                            <td class="table-total-cell">
                                ${{ number_format($requisition->requisitionItems->sum('price'), 2) }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @endif
    </div>
    <div class="container">
        <h3>Historial De Aprobación</h3>

        <div class="timeline-container">
            <div class="timeline-progress"></div>
            <div class="timeline-steps">
                @foreach ($requisition->approvals as $approval)
                    <div class="step">
                        @php
                            $statusClass = '';
                            $symbol = '';
                            if ($approval->status == 'approved') {
                                $statusClass = 'approved';
                                $symbol = 'A';
                            } elseif ($approval->status == 'rejected') {
                                $statusClass = 'rejected';
                                $symbol = 'R';
                            } else {
                                $statusClass = $requisition->status == 'rejected' ? 'default' : 'pending';
                                $symbol = $requisition->status == 'rejected' ? '⏱' : '!';
                            }
                        @endphp

                        <div class="step-indicator {{ $statusClass }}">{{ $symbol }}</div>
                        <div class="step-info">
                            <div class="approver-name">{{ $approval->approver->name }}</div>
                            <div class="approver-comment">{{ $approval->comments }}</div>
                            @if ($approval->status == 'approved' || $approval->status == 'rejected')
                                <div class="approver-date">{{ $approval->updated_at->format('d/m/Y H:i') }}</div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
