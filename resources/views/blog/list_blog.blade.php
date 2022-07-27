@extends('layouts.frontend')
@section('content')

<!-- PAGE HEADER -->
<div class="page-header">
	<div class="page-header-bg" style="background-image: url('{{asset('public/themes')}}/img/header-2.jpg');" data-stellar-background-ratio="0.5"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 text-center">
				<h1 class="text-uppercase">List Artikel</h1>
			</div>
		</div>
	</div>
</div>
<!-- /PAGE HEADER -->
</header>
<!-- /HEADER -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-8">
				<!-- LIST ARTIKEL -->
				@foreach($data as $post_terbaru)
				<div class="post post-row">
					<a class="post-img" href="{{ route('blog.isi',$post_terbaru->slug)}}"><img src="{{ asset($post_terbaru->gambar)}}"></a>
					<div class="post-body">
				<div class="post-category">
					<a href="#">{{ $post_terbaru->category->name}}</a>
				
				</div>
				<h3 class="post-title"><a href="{{ route('blog.isi',$post_terbaru->slug)}}">{{ $post_terbaru->judul}}</a></h3>
				<ul class="post-meta">
					<li><a href="#">{{ $post_terbaru->users->name}}</a></li>
					<li>{{ $post_terbaru->created_at->diffforHumans()}}</li>
				</ul>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
			</div>
		</div>
		@endforeach
		<!-- /END LIST ARTIKEL -->
		{{$data->links()}}
	<div class="section-row loadmore text-center">
		<a href="#" class="primary-button">Load More</a>
	</div>
</div>
@stop