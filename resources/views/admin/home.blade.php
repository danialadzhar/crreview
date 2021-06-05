@extends('admin.layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="row mt-5">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-body py-4 px-4">
                <h3>Pending Consultant</h3>
                <hr>
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($users_pending_consultant as $user)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td><a class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-body text-center py-4 px-4">
                <div class="row">
                    <div class="col-md-12">
                        <h1>78</h1>
                    </div>
                    <div class="col-md-12">
                        <p><i class="fas fa-exclamation-circle text-secondary"></i> Total Consultant</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection