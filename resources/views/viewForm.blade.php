{{-- importing layout --}}
@extends('layouts.form')
{{-- content start --}}
@section('formContent')
<div class="container mt-5">
    <h2 class="mb-4">Retrieved Data</h2>
    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Address</th>
          <th>Course</th>
          <th>Gender</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($views as $view)
        <tr>
          <td>{{$view->id}}</td>
          <td>{{$view->name}}</td>
          <td>{{$view->email}}</td>
          <td>{{$view->phone}}</td>
          <td>{{$view->address}}</td>
          <td>{{$view->course}}</td>
          <td>{{$view->gender}}</td>
          <td class="text-center">
            <a href="/edit/{{$view->id}}" class="text-decoration-none px-3 py-2 mx-4 btn btn-primary">Edit</a>
            <a href="/delete/{{$view->id}}" class="text-decoration-none px-3 py-2 mx-4 btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
{{-- content end --}}
@endsection