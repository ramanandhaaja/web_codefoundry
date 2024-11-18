
@extends('cms.layout')

@section('title', 'Dashboard')

@section('content_title', 'Dashboard')

@section('content')
<div class="row g-4">
    <div class="col-md-6">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-clock me-2"></i>Recent Posts</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Post 1
                        <span class="badge bg-primary rounded-pill">New</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Post 2
                        <span class="badge bg-secondary rounded-pill">Draft</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Post 3
                        <span class="badge bg-success rounded-pill">Published</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title"><i class="fas fa-chart-bar me-2"></i>Quick Stats</h5>
                <div class="row g-3">
                    <div class="col-sm-4">
                        <div class="d-flex flex-column align-items-center">
                            <h2 class="mb-1">10</h2>
                            <p class="text-muted mb-0">Total Posts</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="d-flex flex-column align-items-center">
                            <h2 class="mb-1">5</h2>
                            <p class="text-muted mb-0">Total Pages</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="d-flex flex-column align-items-center">
                            <h2 class="mb-1">3</h2>
                            <p class="text-muted mb-0">Total Users</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
