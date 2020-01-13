@extends('layouts.main')

@section('title','Home')

@section('content')
<div class = "container text-center mt-5">
    <h1 class = "display-4">IELTS Web</h1>
    <p class = "lead text-primary">We help you to evaluate yourself</p>
    <hr style = "width : 350px;">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#register">
    Register
    </button>

<!-- Modal -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form>
        <div class="form-group">
            <input type="text" class="form-control" id="firstName" name = "firstName" placeholder = "First Name">
        </div>
  
        <div class="form-group">
            <input type="text" class="form-control" id="lastName" name = "lastName" placeholder = "Last Name">
        </div>
  
        <div class="form-group">
            <input type="email" class="form-control" id="email" name = "email" placeholder = "Email">
        </div>
        
        <div class="form-group">
            <input type="password" class="form-control" id="password" name = "password" placeholder = "Password">
        </div>
        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection()