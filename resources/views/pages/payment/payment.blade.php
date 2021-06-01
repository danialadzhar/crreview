@extends('layouts.app')

@section('title')
    Make A Payment
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="dcodes/payment_icons/dc_payment_icons.css" />
@endsection

@section('content')
<div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-md-6">
        <form action="#" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">       
                    <div class="form-group">
                        <input type="text" class="form-control" name="card_name" placeholder="Name on card" required>
                    </div>
                </div>
                <div class="col-md-12">       
                    <div class="form-group">
                        <input type="text" class="form-control" name="card_number" placeholder="exp. 4278172818250916" required>
                    </div>
                </div>
                <div class="col-md-4">       
                    <div class="form-group">
                        <input type="text" class="form-control" name="month" placeholder="MM" required>
                    </div>
                </div>
                <div class="col-md-4">       
                    <div class="form-group">
                        <input type="text" class="form-control" name="year" placeholder="YYYY" required>
                    </div>
                </div>
                <div class="col-md-4">       
                    <div class="form-group">
                        <input type="text" class="form-control" name="cvc" placeholder="CVC" required>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <button class="btn btn-success btn-block">Pay Now <i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-3">

    </div>
</div>
@endsection

@section('js')
<link rel="stylesheet" type="text/css" href="http://cdn.dcodes.net/2/payment_icons/dc_payment_icons.css" />
@endsection