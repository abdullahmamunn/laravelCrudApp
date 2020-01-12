@extends('layouts.app')
@section('content')
<div class="container">
	<h2>Here is your Data</h2>
     <table class="table table-striped table-hover ">
       <thead>
		  <tr>
		    <th>#</th>
		    <th>First Name</th>
		    <th>Last Name</th>
		    <th>Email</th>
		    <th>Phone</th>
		  </tr>
		  </thead>
		  <tbody>
		
		  <tr class="success">
			    <td>{{$students->first_name}}</td>
			    <td>{{$students->last_name}}</td>
			    <td>{{$students->email}}</td>
			    <td>{{$students->phone}}</td>
			    <td>{{$students->skill}}</td>
		  </tr>
	
		  </tbody>
     </table>
</div>
@endsection