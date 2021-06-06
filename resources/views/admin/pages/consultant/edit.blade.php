@extends('admin.layouts.app')

@section('title')
    Edit Consultant
@endsection

@section('content')
<form action="{{ url('admin/consultant-update') }}/{{ $user->user_id }}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="row d-flext justify-content-center mt-5 px-5">
        <div class="col-md-8">
            <h2>Edit #{{ $user->user_id }}</h2>
            <hr>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <label>Phone No</label>
                <input type="text" class="form-control" placeholder="Phone Number" value="{{ $consultant_info->phoneno }}" name="phoneno" onkeypress="return onlyNumberKey(event)" min="10" maxlength="11" required>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <label>Address</label>
                <textarea name="address" class="form-control" placeholder="Enter Address" rows="4">{{ $consultant_info->address }}</textarea>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status">
                    @if ($user->status == 'approved')
                        <option value="approved">Approved</option>
                        <option value="unapproved">Unapproved</option>
                        <option value="pending">Pending</option>
                    @endif
                    @if ($user->status == 'unapproved')
                        <option value="unapproved">Unapproved</option>
                        <option value="approved">Approved</option>
                        <option value="pending">Pending</option>
                    @endif
                    @if ($user->status == 'pending')
                        <option value="pending">Pending</option>
                        <option value="approved">Approved</option>
                        <option value="unapproved">Unapproved</option>
                    @endif
                </select>
            </div>
        </div>

        <div class="col-md-8 mt-3">
            <button type="submit" class="btn btn-primary btn-block">Submit Review</button>
        </div>
    </div>
</form>
@endsection

@section('js')
<script> 
    function onlyNumberKey(evt) { 
        // Only ASCII charactar in that range allowed 
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
            return false; 
        return true; 
    } 
</script> 
@endsection