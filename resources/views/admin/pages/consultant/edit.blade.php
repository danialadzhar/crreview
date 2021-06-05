@extends('admin.layouts.app')

@section('title')
    Edit Consultant
@endsection

@section('content')
<form action="{{ url('consultant/apply/post') }}" enctype="multipart/form-data" method="POST">
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
        {{-- <div class="col-md-8">
            <div class="form-group">
                <label>Supporting Document</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="document" id="qualification">
                    <label class="custom-file-label" for="qualification">Choose file</label>
                </div>
            </div>
        </div> --}}

        <div class="col-md-8">
            <div class="form-group">
                <label>Status</label><br>
                {{-- Approved --}}
                @if ($user->status == 'approved')
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="approved" name="customRadioInline" class="custom-control-input" checked>
                        <label class="custom-control-label" for="approved">Approved</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="unapproved" name="customRadioInline" class="custom-control-input">
                        <label class="custom-control-label" for="unapproved">Unapproved</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="pending" name="customRadioInline" class="custom-control-input">
                        <label class="custom-control-label" for="pending">Pending</label>
                    </div>
                @endif

                {{-- Unapproved --}}
                @if ($user->status == 'approved')
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="unapproved" name="customRadioInline" name="status" class="custom-control-input" checked>
                        <label class="custom-control-label" for="unapproved">Unapproved</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="approved" name="customRadioInline" name="status" class="custom-control-input">
                        <label class="custom-control-label" for="approved">Approved</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="pending" name="customRadioInline" name="status" class="custom-control-input">
                        <label class="custom-control-label" for="pending">Pending</label>
                    </div>
                @endif

                {{-- Pending --}}
                @if ($user->status == 'pending')
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="pending" name="customRadioInline" name="status" class="custom-control-input" checked>
                        <label class="custom-control-label" for="pending">Pending</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="unapproved" name="customRadioInline" name="status" class="custom-control-input">
                        <label class="custom-control-label" for="unapproved">Unapproved</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="approved" name="customRadioInline" name="status" class="custom-control-input">
                        <label class="custom-control-label" for="approved">Approved</label>
                    </div>
                @endif
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