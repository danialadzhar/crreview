@extends('admin.layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="row mt-5">
    <div class="col-md-4">
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
    <div class="col-md-4">
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
    <div class="col-md-4">
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
    </div>
</div>
@endsection