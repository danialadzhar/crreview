@extends('admin.layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="row mt-5">
    @if (session('success'))
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div> 
    @endif
    <div class="col-md-3">
        <div class="card shadow">
            <div class="card-body text-center py-4 px-4">
                <div class="row">
                    <div class="col-md-12">
                        <h1>{{ $count_unpaid_customer }}</h1>
                    </div>
                    <div class="col-md-12">
                        <p><i class="fas fa-exclamation-circle text-secondary"></i> Unpaid Customer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <a href="{{ url('admin/consultant') }}/pending/consultant" class="text-decoration-none text-dark">
            <div class="card shadow">
                <div class="card-body text-center py-4 px-4">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>{{ $count_pending_consultant }}</h1>
                        </div>
                        <div class="col-md-12">
                            <p><i class="fas fa-exclamation-circle text-secondary"></i> Unapproved Consultant</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="{{ url('admin/consultant') }}/approved/consultant" class="text-decoration-none text-dark">
            <div class="card shadow">
                <div class="card-body text-center py-4 px-4">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>{{ $count_approved_consultant }}</h1>
                        </div>
                        <div class="col-md-12">
                            <p><i class="fas fa-exclamation-circle text-secondary"></i> Approved Consultant</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="{{ url('admin/consultant') }}/unapproved/consultant" class="text-decoration-none text-dark">
            <div class="card shadow">
                <div class="card-body text-center py-4 px-4">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>{{ $count_unapproved_consultant }}</h1>
                        </div>
                        <div class="col-md-12">
                            <p><i class="fas fa-exclamation-circle text-secondary"></i> Unapproved Consultant</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    {{-- <div class="col-md-4">
        <div class="card shadow">
            <div class="card-body text-center py-4 px-4">
                <div class="row">
                    <div class="col-md-12">
                        <h1>50</h1>
                    </div>
                    <div class="col-md-12">
                        <p><i class="fas fa-exclamation-circle text-secondary"></i> CV To Assign</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection