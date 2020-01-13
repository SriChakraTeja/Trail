@extends('layouts.main')

@section('title', 'Edit Contacts')

@section('content')

<div class = "container text-center" style = "width : 370px;">
    <form action = "{{ route('pages.update',$contact->id) }}" method = "POST">
    @csrf
    <h1 class = "display-4 text-primary">Edit Contact</h1>
    <hr>
        <div class="form-group">
            <input type="text" class="form-control" id="name" name = "name" placeholder="Name" max = "60" value = "{{ $contact->name }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="address" name = "address" placeholder="Address" value = "{{ $contact->address }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="subject" name = "subject" placeholder="Subject" value = "{{ $contact->subject }}">
        </div>
        <div class="form-group">
            <textarea class="form-control" id="body" name = "body" name = "body" placeholder = "Description" rows="5">{{ $contact->body }}</textarea>
        </div>
        <button type="submit" class="btn btn-success btn-lg btn-block">Update</button>
    </form>
</div>

@endsection