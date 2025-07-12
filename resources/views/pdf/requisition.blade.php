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


        .container {
        }

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
            font-size: 12px;
            font-weight: 700;
            background-color: #172554;
            color: #f3f4f6;
            border-top-left-radius: 0.375rem;
            border-top-right-radius: 0.375rem;
        }

        .info-list-item {
            padding: 0.25rem 0.5rem;
            line-height: 1;
        }

        .status-container {
            display: inline-block;
            right: 0;
            position: absolute;
            min-width: fit-content;
        }

        .status-badge {
            font-size: 12px;
            margin-right: 0.5rem;
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
            text-align: left;
            font-size: 12px;
            font-weight: 500;
            color: #6b7280;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border-bottom: 1px solid #e5e7eb;
        }

        .table-body {
            background-color: #ffffff;
        }

        .table-body td {
            font-size: 12px;
            white-space: nowrap;
            border-bottom: 1px solid #e5e7eb;
        }

        .table-footer-row td {
            font-weight: 700;
            text-align: right;
            padding: 0.5rem 0.5rem;
        }

        .table-total-cell {
            background-color: #e5e7eb;
            white-space: nowrap;
            padding: 0.5rem 0.5rem;
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
                <b>{{ __('Project') }}: </b>
                {{ $requisition->indicator->project->description }}
            </li>

            <li class="info-list-item">
                <b>{{ __('Indicator') }}: </b>
                {{ $requisition->indicator->description }}
            </li>

            <li class="info-list-item">
                <b>{{ __('Created by: ') }} </b>
                {{ $requisition->user->name }}
            </li>
        </ul>
        <div class="status-container">
            <div>
                Status:
                @switch($requisition->status)
                    @case('draft')
                        <span class="status-badge status-draft">
                            {{ $requisition->status }}
                        </span>
                    @break

                    @case('pending_approval')
                        <span class="status-badge status-pending">
                            {{ $requisition->status }}
                        </span>
                    @break

                    @case('approved')
                        <span class="status-badge status-approved">
                            {{ $requisition->status }}
                        </span>
                    @break

                    @case('rejected')
                        <span class="status-badge status-rejected">
                            {{ $requisition->status }}
                        </span>
                    @break

                    @default
                        <span class="status-badge status-default">
                            {{ $requisition->status }}
                        </span>
                @endswitch
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
                            <th>{{ __('Budget Item') }}</th>
                            <th>{{ __('Description') }}</th>
                            <th>{{ __('Amount') }}</th>
                            <th>{{ __('Unit') }}</th>
                            <th>{{ __('Resource Type') }}</th>
                            <th>{{ __('Price') }}</th>
                        </tr>
                    </thead>
                    <tbody class="table-body">
                        @foreach ($requisition->requisitionItems as $item)
                            <tr>
                                <td>
                                    {{ $item->budgetItem->full_code ?? 'N/A' }}
                                </td>

                                <td>
                                    {{ $item->name }}
                                </td>

                                <td>
                                    {{ $item->amount }}
                                </td>

                                <td>
                                    {{ $item->unit }}
                                </td>

                                <td>
                                    {{ $item->type_resource }}
                                </td>

                                <td>
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
</body>

</html>
