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

        img {
            display: inline-block;
            height: 80px;
            margin: 0;
            padding: 0;
        }

        .title {
            position: absolute;
            top: -15px;
            width: 100%;
            text-align: center;
            margin: 0;
            padding: 0;
            font-size: 20px;
        }

        .info-list {
            display: inline-block;
            width: 100%;
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

        .info-list-item-last {
            padding-bottom: 3px;
        }

        .status-container {
            position: absolute;
            right: 0;
            display: inline-block;
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
            text-transform: uppercase;
        }

        .table-body td {
            padding: 5px;
            font-size: 12px;
            white-space: nowrap;
            border: 1px solid #e5e7eb;
        }

        .budget-item-th {
            width: 40px;
        }

        .amount-th {
            width: 40px;
        }

        .unit-th {
            width: 50px;
        }

        .resource_type-th {
            width: 60px;
        }

        .price-th {
            width: 65px;
        }

        .sign-th {
            width: 100px;
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

        .sign-td {}

        .folio {
            margin-bottom: 5px;
            font-size: 16px;
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
        }

        .timeline-progress {
            position: absolute;
            top: 20px;
            left: 0;
            right: 0;
            height: 3px;
            width: 62.5%;
            background-color: #d1d5db;
            z-index: 1;
        }

        .timeline-progress-aux {
            position: absolute;
            top: 20px;
            left: 0;
            right: 0;
            height: 3px;
            width: 75%;
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
            padding: 0 5px;
        }

        .step-indicator {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin: 0 auto 0;
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
            font-size: 11px;
        }

        .approver-comment {
            color: #4b5563;
            font-size: 10px;
            line-height: 1;
        }

        .approver-date {
            position: absolute;
            top: -6px;
            left: 33%;
            right: 67%;
            color: #9ca3af;
            font-size: 11px;
        }

        .approver-position {
            font-size: 9px;
            font-style: italic;
        }

        .director {
            margin-top: 60px;
            border-top: solid;
        }
    </style>
</head>

<body>
    @foreach ($requisitions as $requisition)
        <div>
            <img src="{{ storage_path('app/public/img/logo_tec_uruapan.png') }}" alt="Logo">
            <div class="status-container">

                <div class="folio">
                    Folio: {{ $requisition->folio }}
                </div>

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
            </div>
        </div>
        <h1 class="title">REQUISICIÓN DE BIENES Y SERVICIOS</h1>
        <div class="container">
            <ul class="info-list">
                <li class="info-list-header">
                    {{ $requisition->process->index }}
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
                    <b>Jefe Inmediato: </b>
                    {{ $requisition->user->supervisor->name ?? '' }}
                </li>

                <li class="info-list-item">
                    <b>Para Ser Utilizado: </b>
                    {{ $requisition->to_be_used }}
                </li>

                <li class="info-list-item info-list-item-last">
                    <b>Fecha de creación: </b>
                    {{ $requisition->created_at->format('d/m/Y H:i') }}
                </li>
            </ul>

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
                                <th class="price-th">Precio</th>
                                <th class="resource_type-th">Tipo</th>
                                <th class="sign-th">Firma</th>
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

                                    <td class="price-td">
                                        ${{ number_format($item->price, 2) }}
                                    </td>

                                    <td class="type_resource-td">
                                        {{ $item->type_resource }}
                                    </td>

                                    <td class="sign-td">

                                    </td>
                                </tr>
                            @endforeach
                            <tr class="table-footer-row">
                                <td colspan="4">Total:</td>
                                <td class="table-total-cell">
                                    ${{ number_format($requisition->requisitionItems->sum('price'), 2) }}
                                </td>
                                <td style="border: none; border-top: 1px solid #e5e7eb;"></td>
                                <td style="border: none; border-top: 1px solid #e5e7eb;"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @endif
        </div>

        @if($requisition->status != 'draft')
        <div class="container">
            <h3>Historial De Aprobación</h3>

            <div class="timeline-container">

                <!-- Change the length of the progress line depending on the number of items there are. -->
                @if ($requisition->approvals->count() > 5 )
                    <div class="timeline-progress-aux"></div>
                @else
                    <div class="timeline-progress"></div>
                @endif

                <div class="timeline-steps">
                    @foreach ($requisition->approvals as $approval)
                        @if($approval->approver->role != 'requisition')
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
                                    @if ($approval->status == 'approved' || $approval->status == 'rejected')
                                        <div class="approver-date">{{ $approval->updated_at->format('d/m/Y H:i') }}</div>
                                    @endif
                                    <div class="approver-comment">{{ $approval->comments }}</div>
                                    <div class="approver-name">{{ $approval->approver->name }}</div>
                                    <div class="approver-position">{{ $approval->approver->position }}</div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <div class="step">
                        <div class="step-info">
                            <div class="approver-name director">{{ $directive->name ?? '' }}</div>
                            <div class="approver-position">{{ $directive->position ?? '' }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div style="page-break-before: always;"></div>
    @endforeach
</body>

</html>
