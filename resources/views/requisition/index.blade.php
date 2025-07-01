<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Requisitions') }}
        </h2>
    </x-slot>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Folio</th>
                    <th>Status</th>
                    <th>Current Approver</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($requisitions as $requisition)
                    <tr>
                        <td>{{ $requisition->folio }}</td>
                        <td>{{ $requisition->status }}</td>
                        <td>{{ $requisition->currentApprover->name ?? 'N/A' }}</td>
                        <td>
                            <a href="{{ route('requisition.show', $requisition) }}" class="btn btn-primary">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
