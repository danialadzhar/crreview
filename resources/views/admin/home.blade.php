@extends('admin.layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="row">
    <div class="col-md-10">
        <h3>List Consultant</h3>
        <hr>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-2">
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