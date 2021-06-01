@extends('layouts.app')

@section('title')
    Plans
@endsection

@section('css')

@endsection

@section('content')
<div class="row mt-5">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header text-center">
                Premium Plan
            </div>
            <div class="card-body text-center py-5 px-5">
                <h2 class="card-title">RM 30</h2>
                    <p><i class="fas fa-check"></i> Grammar Checking</p>
                    <p><i class="fas fa-check"></i> Sentence Correction</p>
                    <p><i class="fas fa-check"></i> Free Example</p>
                    <p><i class="fas fa-check"></i> 2 ATS CV</p>
                <a href="{{ url('checkout') }}" class="btn btn-primary d-flex justify-content-center">Choose Plan</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header text-center">
                Pro Plan
            </div>
            <div class="card-body text-center py-5 px-5">
                <h2 class="card-title">RM 60</h2>
                    <p><i class="fas fa-check"></i> Grammar Checking</p>
                    <p><i class="fas fa-check"></i> Sentence Correction</p>
                    <p><i class="fas fa-check"></i> Free Example</p>
                    <p><i class="fas fa-check"></i> 2 ATS CV</p>
                <button class="btn btn-secondary d-flex justify-content-center" disabled>Choose Plan</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection