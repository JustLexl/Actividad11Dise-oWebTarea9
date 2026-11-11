@extends('adminlte::page')

@section('title', 'Contact')

@section('content_header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Contact</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Activity 11</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="container-fluid">
        <!-- Activity 11 Content Card -->
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-envelope mr-1"></i>
                    <strong>Activity 11 - Contact Section</strong>
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="callout callout-info">
                    <h5><i class="fas fa-address-card mr-1"></i> Original Activity 11 Content:</h5>
                    <p class="lead mb-0 font-weight-bold text-info">This is my contact page.</p>
                </div>
                <p class="text-muted">Contact form and information integrated into the AdminLTE 3 panel layout.</p>
            </div>
        </div>

        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-7">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-paper-plane mr-1"></i> Send a Message</h3>
                    </div>
                    <form onsubmit="event.preventDefault(); alert('Message sent successfully!');">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName"><i class="fas fa-user mr-1"></i> Full Name</label>
                                <input type="text" id="inputName" class="form-control" placeholder="Enter your full name" value="Alexander De La Barrera">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail"><i class="fas fa-envelope mr-1"></i> Email Address</label>
                                <input type="email" id="inputEmail" class="form-control" placeholder="Enter email" value="alexanderquiquedlbm@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="inputSubject"><i class="fas fa-tag mr-1"></i> Subject</label>
                                <input type="text" id="inputSubject" class="form-control" placeholder="Enter subject" value="Activity 11 - Task 9 AdminLTE Integration">
                            </div>
                            <div class="form-group">
                                <label for="inputMessage"><i class="fas fa-comment mr-1"></i> Message</label>
                                <textarea id="inputMessage" class="form-control" rows="4" placeholder="Type your message here...">Hello! This is the contact page from Activity 11 running on Laravel 7 with AdminLTE 3.</textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane mr-1"></i> Send Message</button>
                            <button type="reset" class="btn btn-default float-right">Clear</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Student Info Card -->
            <div class="col-md-5">
                <div class="card card-outline card-secondary">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-id-badge mr-1"></i> Student Information</h3>
                    </div>
                    <div class="card-body box-profile text-center">
                        <div class="text-center mb-3">
                            <i class="fas fa-user-circle fa-5x text-secondary"></i>
                        </div>
                        <h3 class="profile-username text-center">Alexander De La Barrera</h3>
                        <p class="text-muted text-center">Web Design - Activity 11 / Task 9</p>

                        <ul class="list-group list-group-unbordered mb-3 text-left">
                            <li class="list-group-item">
                                <b>Project</b> <span class="float-right badge badge-primary">task9</span>
                            </li>
                            <li class="list-group-item">
                                <b>Framework</b> <span class="float-right badge badge-info">Laravel 7</span>
                            </li>
                            <li class="list-group-item">
                                <b>Admin Panel</b> <span class="float-right badge badge-success">AdminLTE 3</span>
                            </li>
                            <li class="list-group-item">
                                <b>Email</b> <span class="float-right text-muted">alexanderquiquedlbm@gmail.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

