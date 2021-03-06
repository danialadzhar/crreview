@extends('admin.layouts.app')

@section('title')
    @if($user_status == 'pending') Pending @endif @if($user_status == 'approved') Approved @endif Consultant
@endsection

@section('content')
<div class="row mt-5">
    <div class="col-md-12">
        <h2>@if($user_status == 'pending') Pending @endif @if($user_status == 'approved') Approved @endif Consultant</h2>
        <hr>
    </div>
    <div class="col-md-12">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Role</th>
              </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td><a href="{{ url('admin/consultant-edit') }}/{{ $user->user_id }}" class="text-link">{{ $user->name }}</a></td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if ($user->status == 'pending' && $user->role == 'consultant')
                                <span class="badge badge-warning">Pending</span>
                            @endif
                            @if ($user->status == 'unapproved' && $user->role == 'consultant')
                                <span class="badge badge-danger">Unapproved</span>
                            @endif
                            @if ($user->status == 'approved' && $user->role == 'consultant')
                                <span class="badge badge-success">Approved</span>
                            @endif
                        </td>
                        <td>Consultant</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection