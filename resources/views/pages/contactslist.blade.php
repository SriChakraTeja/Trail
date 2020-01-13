@extends('layouts.main')

@section('title','Contacts List')

@section('content')

<div class = "container mt-5">
<h1 class = "display-4 monospace text-center">Contacts List</h1>
<hr>
<table class="table table-sm">
  <thead class = "thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Subject</th>
      <th scope="col">Body</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($contacts as $contact)
    <tr>
      <th scope="row">{{ $contact -> id}}</th>
      <td>{{ $contact -> name}}</td>
      <td>{{ $contact -> address}}</td>
      <td>{{ $contact -> subject}}</td>
      <td>{{ $contact -> body}}</td>
      <td><a class = "btn btn-raised btn-primary btn-sm" href="{{ route('pages.edit',$contact->id) }}"><i class="fas fa-edit"></i></a> ||
      <a class = "btn btn-sm btn-secondary btn-raised" href="{{ route('pages.delete',$contact->id) }}"><i class="fas fa-trash" style = "color:red;"></i></a></td>
    </tr>
    @endforeach
  </tbody>
</table>

    {{ $contacts->links() }}

</div>

@endsection