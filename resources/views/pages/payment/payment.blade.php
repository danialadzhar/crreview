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
        <form action="{{ url('chekcout/premium/make-payment') }}" method="POST" data-stripe-publishable-key="pk_test_51Is0JMDaFLLXIVTMSCfVWRJPIQ8CkuiUHo2Q47A8nOrJiVJ2FvFG9xBLSCSbdWGw9tpVuqSj9aHMVJQmz4FVwfb800zju3KukE" autocomplete="off" class="needs-validation" novalidate>
            @csrf
            <div class="row mt-5">
                <div class="col-md-12">
                    <h3>Please make a payment</h3>
                    <span class="dc_payment_icons_mini_43 dc_visa2_mini" title="Visa"></span>
                    <span class="dc_payment_icons_mini_43 dc_mastercard2_mini" title="Mastercard"></span>
                    <span class="dc_payment_icons_mini_43 dc_amex2_mini" title="American Express"></span>
                </div>
                    <!-- Alerts -->
                @if(session('error'))
                    <div class="col-md-12 mt-3">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Sorry!</strong> {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endif
                <div class="col-md-12 mt-3">       
                    <div class="form-group">
                        <input type="text" class="form-control" name="cardholder" placeholder="Name on card" required>
                    </div>
                </div>
                <div class="col-md-12">       
                    <div class="form-group">
                        <input type="text" class="form-control" name="cardnumber" onkeypress="return onlyNumberKey(event)" maxlength="16" placeholder="exp. 4278172818250916" required>
                    </div>
                </div>
                <div class="col-md-4">       
                    <div class="form-group">
                        <input type="text" class="form-control" name="month" onkeypress="return onlyNumberKey(event)" min="2" maxlength="2" placeholder="MM" required>
                    </div>
                </div>
                <div class="col-md-4">       
                    <div class="form-group">
                        <input type="text" class="form-control" name="year" onkeypress="return onlyNumberKey(event)" min="4" maxlength="4" placeholder="YYYY" required>
                    </div>
                </div>
                <div class="col-md-4">       
                    <div class="form-group">
                        <input type="password" class="form-control" name="cvc" onkeypress="return onlyNumberKey(event)" min="3" maxlength="3" placeholder="CVC" required>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <button id="wait" style="display: none;" class="btn btn-danger btn-block" type="button" disabled>
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        Please Wait...
                    </button>
                    <button id="btn" type="sumbmit" class="btn btn-success btn-block">Pay Now <i class="fas fa-arrow-right"></i></button>
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
<script> 
    function onlyNumberKey(evt) { 
        // Only ASCII charactar in that range allowed 
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
            return false; 
        return true; 
    } 
</script> 
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
</script>
<script>
    $(document).ready(function () {
        $("#btn").on("click", function() {
            $(this).hide();
            $("#wait").show()
            doWork();
        });
    });
        
    function doWork() {
        setTimeout('$("#wait").hide()', 5000);
        setTimeout('$("#btn").show()', 5000);
    }
</script>
@endsection