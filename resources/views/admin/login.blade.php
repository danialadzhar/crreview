<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Get Me Hire</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <style>
        body{
            background-color: #e7e7e7;
        }
    </style>
</head>
<body>  
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <div class="card d-flex justify-content-center shadow">
                    <div class="card-body py-5 px-5">
                        <form action="{{ url('admin/login/post') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Please Sign In</h4>
                                    <hr>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email Address" required autofocus>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <button class="btn btn-primary btn-block">Sign In <i class="fas fa-sign-in-alt"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">

            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/5c12e9bac7.js" crossorigin="anonymous"></script>
</html>