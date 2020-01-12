@extends('layouts.app')
@section('content')
<div class="container">
     @if ($errors->any())
      @foreach ($errors->all() as $error)
        <div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Oh snap!</strong>{{ $error }}
        </div>
      @endforeach
    @endif

    <div class="card card-default">
      <div class="card-heading">
        <h3 class="card-title text-center">Edit Student's Information</h3>
      </div>
      <div class="card-body">
        <form class="form-horizontal" action="{{route('update',$students->id)}}" method="POST">
          @csrf

           <input type="hidden" name="id" value="{{$students->id}}">

      <fieldset>
          <div class="form-group">
            <label for="firstname" class="col-md-2 control-label">First Name</label>

            <div class="col-md-10">
              <input type="text" class="form-control" name="firstname" placeholder="First Name" value="{{$students->first_name}}">
            </div>
          </div>

          <div class="form-group">
            <label for="lastname" class="col-md-2 control-label">Last Name</label>

            <div class="col-md-10">
              <input type="text" class="form-control" name="lastname" placeholder="Last Name" value="{{$students->last_name}}">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail" class="col-md-2 control-label">Email</label>

            <div class="col-md-10">
              <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" value="{{$students->email}}">
            </div>
          </div>

          <div class="form-group">
            <label for="phone" class="col-md-2 control-label">Phone Number</label>

            <div class="col-md-10">
              <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{$students->phone}}">
            </div>
          </div>
           <div class="form-group">
            <label for="phone" class="col-md-2 control-label">Skills</label>

            <div class="col-md-10">
               <select class="form-control" name = "data" id="exampleSelect1" >
              <option>{{$students->skill}}</option>
              <option>php</option>
              <option>java</option>
              <option>python</option>
              <option>Laravel</option>

            </select>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
              <a href="{{URL::to('/')}}" class="btn btn-default">Cancel</a>
              <button type="submit" class="btn btn-info">Update</button>
            </div>
          </div>
       </fieldset>
      </form>
     </div>
    </div>
</div>
@endsection