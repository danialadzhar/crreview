@if(isset(Auth::guard('admin')->user()->email))
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Administrator</title>
</head>
<body>
    
</body>
</html>
@else 
  <script>
      location.replace("{{ url('admin/login') }}");
  </script>
@endif