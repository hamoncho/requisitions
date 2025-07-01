<x-app-layout>
<div class="container">
    <h1>Requisitions to Approve</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Folio</th>
                <th>Created by</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($requisitions as $requisition)
            <tr>
                <td>{{ $requisition->folio }}</td>
                <td>{{ $requisition->user->name }}</td>
                <td>
                    <a href="{{ route('requisition.show', $requisition) }}" class="btn btn-primary">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>
