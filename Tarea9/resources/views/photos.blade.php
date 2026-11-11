@extends('adminlte::page')

@section('title', 'Photos')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Photos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Activity 11</a></li>
                    <li class="breadcrumb-item active">Photos</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container-fluid">
        <!-- Activity 11 Content Card -->
        <div class="card card-success card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-images mr-1"></i>
                    <strong>Activity 11 - Photos Section</strong>
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="callout callout-success">
                    <h5><i class="fas fa-camera mr-1"></i> Original Activity 11 Content:</h5>
                    <p class="lead mb-0 font-weight-bold text-success">This is my photos page.</p>
                </div>
                <p class="text-muted">Photo gallery integrated into the AdminLTE 3 panel layout.</p>
            </div>
        </div>

        <!-- Photo Gallery Grid -->
        <div class="row">
            <div class="col-md-4">
                <div class="card card-outline card-secondary shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title">Photo 1 - Landscape</h3>
                    </div>
                    <div class="card-body text-center p-0">
                        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80" class="img-fluid" alt="Landscape Photo 1" style="height: 220px; width: 100%; object-fit: cover;">
                    </div>
                    <div class="card-footer text-muted text-sm">
                        <i class="fas fa-image mr-1"></i> Gallery Entry #1
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-outline card-secondary shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title">Photo 2 - Nature</h3>
                    </div>
                    <div class="card-body text-center p-0">
                        <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?auto=format&fit=crop&w=600&q=80" class="img-fluid" alt="Nature Photo 2" style="height: 220px; width: 100%; object-fit: cover;">
                    </div>
                    <div class="card-footer text-muted text-sm">
                        <i class="fas fa-image mr-1"></i> Gallery Entry #2
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-outline card-secondary shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title">Photo 3 - Architecture</h3>
                    </div>
                    <div class="card-body text-center p-0">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=600&q=80" class="img-fluid" alt="Architecture Photo 3" style="height: 220px; width: 100%; object-fit: cover;">
                    </div>
                    <div class="card-footer text-muted text-sm">
                        <i class="fas fa-image mr-1"></i> Gallery Entry #3
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

