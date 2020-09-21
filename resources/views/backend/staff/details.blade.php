@extends('backendtemplate')
@section('title','Staff Detail')

@section('content')
  <h1>Staff Detail</h1>
  
  
  <img src="{{asset($staff->profile)}}" alt="Staff Profile" width="150px" height="200px">

  <p>Name: {{$staff->name}}</p>
  <p>Phone No: {{$staff->phoneno}}</p>
  <p>Salary: {{$staff->salary}}</p>
  <p>Address: {{$staff->address}}</p>
  <a href="{{route('staff.index')}}" class="btn btn-primary">Back</a>

@endsection