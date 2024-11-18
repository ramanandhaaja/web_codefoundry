
@extends('cms.layout')

@section('title', 'Invoice')

@section('content_title', 'Invoice')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Invoices</h1>
        <a href="" class="btn btn-primary">
            <i class="bi bi-plus-circle me-2"></i>Create New Invoice
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Invoice ID</th>
                    <th>Customer</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($invoices as $invoice)
                    <tr>
                        <td>{{ $invoice->id }}</td>
                        <td>{{ $invoice->user_id }}</td>
                        <td>${{ number_format($invoice->total, 2) }}</td>
                        <td>{{ $invoice->created_at->format('Y-m-d') }}</td>
                        <td>
                            @switch($invoice->status)
                                @case('Paid')
                                    <span class="badge bg-success">Paid</span>
                                    @break
                                @case('Pending')
                                    <span class="badge bg-warning text-dark">Pending</span>
                                    @break
                                @case('Overdue')
                                    <span class="badge bg-danger">Overdue</span>
                                    @break
                                @default
                                    <span class="badge bg-secondary">{{ $invoice->status }}</span>
                            @endswitch
                        </td>
                        <td>
                            <a href="" class="btn btn-sm btn-outline-primary me-2">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <form action="" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this invoice?')">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No invoices found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if ($invoices->hasPages())
        <div class="mt-4">
            {{ $invoices->links() }}
        </div>
    @endif

</div>

@endsection
