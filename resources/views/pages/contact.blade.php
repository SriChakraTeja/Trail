@extends('layouts.main')

@section('title','Contact')

@section('content')
<div class = "container text-center" style = "width : 370px;">
    <form action = "{{ route('storeContact') }}" method = "POST">
    @csrf
    <h1 class = "display-4 text-primary">Contact Form</h1>
    <hr>
        <div class="form-group">
            <input type="text" class="form-control" id="name" name = "name" placeholder="Name" max = "60">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="address" name = "address" placeholder="Address">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="subject" name = "subject" placeholder="Subject">
        </div>
        <div class="form-group">
            <textarea class="form-control" id="body" name = "body" name = "body" placeholder = "Description" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
    </form>
</div>

@endsection