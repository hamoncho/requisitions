<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Waiting') }}
        </h2>
    </x-slot>


    <div class="container">

        <h1>Requisition Details</h1>
        <p><strong>Folio:</strong> {{ $requisition->folio }}</p>
        <p><strong>Status:</strong> {{ $requisition->status }}</p>
        <p><strong>Created by:</strong> {{ $requisition->user->name }}</p>
        <br>
        <h2>Approval History</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Approver</th>
                    <th>Status</th>
                    <th>Comments</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($requisition->approvals as $approval)
                    <tr>
                        <td>{{ $approval->approver->name }}</td>
                        <td>{{ $approval->status }}</td>
                        <td>{{ $approval->comments }}</td>
                        <td>{{ $approval->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
                @if ($requisition->requisitionItems->isEmpty())
                        <p>{{ __('No items found for this requisition.') }}</p>
                    @else
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('Name') }}</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('Budget Item') }}</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('Amount') }}</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('Unit') }}</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('Resource Type') }}</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            {{ __('Price') }}</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($requisition->requisitionItems as $item)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $item->name }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $item->budgetItem->name ?? 'N/A' }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->amount }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->unit }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->type_resource }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap">{{ $item->price }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
        <br>
        @if ($requisition->status === 'pending_approval' && $requisition->current_approver_id === auth()->id())
            <hr>

            <br>
            <br>
            <h2>Approve or Reject</h2>
            <form action="{{ route('requisition.approve', $requisition) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="comments">Comments</label>
                    <textarea name="comments" id="comments" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Approve</button>
            </form>
            <br>
            <form action="{{ route('requisition.reject', $requisition) }}" method="POST" class="mt-2">
                @csrf
                <div class="form-group">
                    <label for="comments">Comments</label>
                    <textarea name="comments" id="comments" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-danger">Reject</button>
            </form>
        @endif
    </div>
</x-app-layout>
