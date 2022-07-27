@extends('layouts.master')
@section('sub-judul','Edit Category')
@section('content')

<div class="col-8">
<div class="card">

  @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible show fade">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">
          <span>×</span>
        </button>
      {{ Session('success')}}
      </div>
    </div>
  @endif

  @if(count($errors)>0)
  @foreach($errors->all() as $error)
  <div class="alert alert-warning alert-dismissible show fade">
    <div class="alert-body">
        <button class="close" data-dismiss="alert">
          <span>×</span>
        </button>
    {{ $error}}
   </div>
  </div>
  @endforeach
  @endif

  <form action="{{ route('category.update',$category->id)}}" method="POST">
  	@csrf
    @method('PATCH')
  	<div class="card-body">
      <div class="form-group">
        <label>Name Category</label>
        <input name="name" type="text" class="form-control" value="{{$category->name}}">
      </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary btn-sm">Update</button>
      <a href="{{ route('category.index')}}" class="btn btn-dark btn-sm">Back</a>
    </div>
  </form>
</div>
</div>
</div>

@endsection