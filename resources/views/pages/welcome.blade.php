@extends('layouts.main')

@section('title','Home')

@section('content')
<div class = "container text-center mt-5">
    <h1 class = "display-4">IELTS <strong class = "monospace text-warning">Web</strong></h1>
    <p class = "lead text-warning">We help you to evaluate yourself</p>
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

<div class = "container mt-5">
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body bg-dark">
        <h5 class="card-title text-warning">Get Contacts</h5>
        <p class="card-text text-warning">With supporting text below as a natural lead-in to additional content.</p>
        <a href="{{ route('pages.contactslist') }}" class="btn btn-primary">Get Contacts</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
</div>
@endsection