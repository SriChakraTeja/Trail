<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://parsleyjs.org/src/parsley.css">
    <script src="https://kit.fontawesome.com/8c6cab4692.js" crossorigin="anonymous"></script>
    <title>IWEB - @yield('title')</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{url('/')}}">IELTS <strong class = "monospace text-warning">Web</strong></a>
  <button type="button" class="ml-auto btn btn-outline-light btn-md px-3" data-toggle="modal" data-target="#login">
  <i class="fas fa-user"></i>    Login</button>
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <form>
         <div class="form-group">
            <input type="email" class="form-control" id="email" name = "email" placeholder = "Email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="password" name = "password" placeholder = "Password">
        </div>
        <div class="form-group">
            <a href="{{ url('/forgotPassword') }}">Forgot Password?</a>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe">Remember Me
        </div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
      </div>
    </div>
  </div>
</div>
</nav>