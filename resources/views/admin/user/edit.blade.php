@extends('layouts.master')
@section('sub-judul','Edit User')
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

  <form action="{{ route('user.update',$user->id)}}" method="POST">
  	@csrf
    @method('PUT')
  	<div class="card-body">
      <div class="form-group">
        <label>Name User</label>
        <input name="name" type="text" class="form-control" value="{{$user->name}}">
      </div>
        <div class="form-group">
        <label>Email</label>
        <input name="email" type="email" class="form-control" value="{{$user->email}}" readonly>
      </div>
        <div class="form-group">
        <label>Tipe User</label>
        <select name="tipe" class="form-control">
          <option value="">Pilih Tipe User</option>
          
         <option value="1" @if($user->tipe == 1)
          selected 
          @endif
          >Administrator</option>
         <option value="0" @if($user->tipe == 0)
          selected
          @endif
          >Author</option>
         
        </select>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input name="password" type="text" class="form-control">
      </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary btn-sm">Save</button>
      <a href="{{ route('user.index')}}" class="btn btn-dark btn-sm">Back</a>
    </div>
  </form>
</div>
</div>
</div>

@endsection