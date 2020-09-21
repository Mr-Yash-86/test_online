@extends('backendtemplate')
@section('title','Staff List')

@section('content')
<div class="row">
  <div class="col-md-12">
  <h1>Staff List</h1>
  <a href="{{route('staff.create')}}" class="btn btn-success">Add New Staff</a>
  {{-- Table --}}
  <table class="table my-3">
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($staff as $row)
        <tr>
          <td>{{$row->id}}</td>
          <td>{{$row->name}}</td>
          <td>{{$row->phoneno}}</td>
          <td>
            <a href="{{route('staff.show',$row->id)}}" class="btn btn-info">Detail</a>
            <a href="{{ route('staff.edit',$row->id)}}" class="btn btn-danger">Edit</a>

            <form action="{{ route('staff.destroy',$row->id)}}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?')">
              @csrf
              @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-primary">
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </div>
@endsection