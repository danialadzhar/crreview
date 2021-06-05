@extends('layouts.app')

@section('title')
    Apply Consultant
@endsection

@section('content')
<form action="#" method="POST">
    @csrf
    <div class="row d-flext justify-content-center mt-5 px-5">
        <div class="col-md-8">
            <h2>Please Fill This Form</h2>
            <hr>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" value="{{ $user->name }}" required disabled>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" class="form-control" value="{{ $user->email }}" required disabled>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <label>Phone No</label>
                <input type="text" class="form-control" placeholder="Phone Number" name="phoneno" onkeypress="return onlyNumberKey(event)" min="10" maxlength="11" required>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <label>Address</label>
                <textarea name="address" class="form-control" placeholder="Enter Address" rows="4"></textarea>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <label>Supporting Document</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="qualification">
                    <label class="custom-file-label" for="qualification">Choose file</label>
                </div>
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