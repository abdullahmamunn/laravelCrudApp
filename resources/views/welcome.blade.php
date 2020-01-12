@extends('layouts.app')
@section('content')
<div class="container">
<div class="jumbotron">
  <h1 class="display-4">Welcome,</h1>
  <p class="lead">This is a simple Crud app, you can perfrom crud(create,read,update,delete) operations in this application.</p>
 <br>
  <table class="table table-striped table-hover ">
  <thead>
  <tr class="success">
    <th>Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Skill</th>
    <th>Created at</th>
    <th class="text-center">Action</th>
  </tr>
  </thead>
  <tbody>
    @foreach($students as $row)
  <tr class="success">
    <td>{{$row->id}}</td>
    <td>{{$row->first_name}}</td>
    <td>{{$row->last_name}}</td>
    <td>{{$row->email}}</td>
    <td>{{$row->phone}}</td>
    <td>{{$row->skill}}</td>
    <td>{{$row->created_at}}</td>
    <td class="text-center">
      <a href="{{route('show',$row->id)}}" class="btn btn-inverse btn-sm btn-raised">View</a>
      <a href="{{route('edit',$row->id)}}" class="btn btn-info btn-sm btn-raised">Edit</a>
      <a href="{{route('delete',$row->id)}}" onclick="confirm('are you sure, want to delete?')" class="btn btn-warning btn-sm btn-raised">Delete</a>
    </td>
  </tr>
  @endforeach
  </tbody>
</table>

{{ $students->links() }}
</div>

</div>
@endsection