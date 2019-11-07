@extends('template')
@section('content')
<div class="container">
	<h1>Category Edit Form</h1>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{route('category.edit',$categories->id)}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label>Name:</label>
          <input type="text" name="name" class="form-control" value="{{$categories->name}}">
        </div>
        <div class="form-group">
          <input type="submit" name="btnsubmit" class="btn btn-primary" value="Update">
        </div>
        </form>
    </div>
@endsection