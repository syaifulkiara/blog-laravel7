@extends('layouts.master')
@section('sub-judul','Edit Post')
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

  <form action="{{ route('post.update',$post->id)}}" method="POST" enctype="multipart/form-data">
  	@csrf
    @method('PATCH')
      <div class="form-group">
        <label>Judul</label>
        <input name="judul" type="text" class="form-control" value="{{ $post->judul}}">
      </div>
       <div class="form-group">
        <label>Category</label>
        <select name="category_id" class="form-control">
          <option value="" holder>Pilih Category</option>}
          @foreach($category as $result)
          <option value="{{ $result->id}}"
              @if($result->id == $post->category_id)
              selected
              @endif
            >{{ $result->name}}</option>
          @endforeach
        </select>
      </div>
       <div class="form-group">
          <label>Pilih Tags</label>
          <select name="tags[]" class="form-control select2" multiple="">
            @foreach($tags as $tag)
            <option value="{{ $tag->id}}"
              @foreach($post->tags as $value)
              @if($tag->id == $value->id)
              selected
              @endif
              @endforeach
              >{{$tag->name}}
            </option>
            @endforeach
          </select>
        </div>
       <div class="form-group">
        <label>Content</label>
        <textarea name="content" id="content" class="form-control">{!! $post->content!!}</textarea>
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