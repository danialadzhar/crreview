@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
@if($user->status == 'pending')
<div class="row mt-5 px-5">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-body py-5 px-5 text-center">
                <i class="far fa-file-alt text-primary fa-5x d-flex justify-content-center"></i>
                <h3 class="mt-3">CV Review</h3>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <a href="{{ url('checkout') }}" class="btn btn-primary d-flex justify-content-center mt-4 shadow text-decoration-none">Buy Now</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-body py-5 px-5 text-center">
                <i class="fas fa-hands-helping text-primary fa-5x d-flex justify-content-center"></i>
                <h3 class="mt-3">Apply Consultant</h3>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <a href="#" class="btn btn-primary d-flex justify-content-center mt-4 shadow text-decoration-none">Apply Now</a>
            </div>
        </div>
    </div>
</div>

@else

<div class="row">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h3>My Document</h3>
                        <hr>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Document</th>
                                    <th>Status</th>
                                    <th>Upload At</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>12vjc31213.pdf</td>
                                        <td><span class="badge badge-warning">Wating</span></td>
                                        <td>2021-06-01</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>dam75b6a4v2.pdf</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>2021-06-01</td>
                                    </tr>
                                </tbody>
                              </table>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endif
@endsection
