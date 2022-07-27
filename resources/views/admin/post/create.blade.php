@extends('layouts.master')
@section('sub-judul','Add Post')
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

  <form action="{{ route('post.store')}}" method="POST" enctype="multipart/form-data">
  	@csrf
      <div class="form-group">
        <label>Judul</label>
        <input name="judul" type="text" class="form-control">
      </div>
       <div class="form-group">
        <label>Category</label>
        <select name="category_id" class="form-control">
          <option value="" holder>Pilih Category</option>}
          option
          @foreach($category as $result)
          <option value="{{ $result->id}}">{{ $result->name}}</option>
          @endforeach
        </select>
      </div>
       <div class="form-group">
          <label>Pilih Tags</label>
          <select name="tags[]" class="form-control select2" multiple="">
            @foreach($tags as $tag)
            <option value="{{ $tag->id}}">
              {{$tag->name}}
            </option>
            @endforeach
          </select>
        </div>
       <div class="form-group">
        <label>Content</label>
        <textarea name="content" id="content" class="form-control"></textarea>
      </div>
       <div class="form-group">
        <label>Thumbnail</label>
        <input name="gambar" type="file" class="form-control">
      </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary btn-sm">Submit</button>
      <a href="{{ route('post.index')}}" class="btn btn-dark btn-sm">Back</a>
    </div>
  </form>
</div>
</div>
<script src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
<script>
  var konten = document.getElementById("content");
    CKEDITOR.replace(content,{
    language:'en-gb'
  });
  CKEDITOR.config.allowedContent = true;
</script>
@endsection