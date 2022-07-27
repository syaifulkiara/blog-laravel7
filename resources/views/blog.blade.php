@extends('layouts.frontend')
@section('content')

	<!-- SECTION POSTINGAN HEADER-->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div id="hot-post" class="row hot-post">
				<div class="col-md-8 hot-post-left">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="#"><img src="{{asset('public/themes')}}/img/hot-post-1.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="#">KAT 01</a>
							</div>
							<h3 class="post-title title-lg"><a href="#">Postea senserit id eos, vivendo periculis ei qui</a></h3>
							<ul class="post-meta">
								<li><a href="#">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="#"><img src="{{asset('public/themes')}}/img/hot-post-2.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="#">KAT02</a>
							</div>
							<h3 class="post-title"><a href="#">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
							<ul class="post-meta">
								<li><a href="#">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="#"><img src="{{asset('public/themes')}}/img/hot-post-3.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="#">KAT 03</a>
							</div>
							<h3 class="post-title"><a href="#">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
							<ul class="post-meta">
								<li><a href="#">John Doe</a></li>
								<li>20 April 2018</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION POSTINGAN HEADER-->
	
	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- POSTING TERBARUrow -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Posting Terbaru</h2>
							</div>
						</div>
						<!-- post -->
						@foreach($data as $post_terbaru)
						<div class="col-md-6">
							<div class="post">
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
								</div>
							</div>
						</div>
						@endforeach
						<!-- /post -->
						<div class="clearfix visible-md visible-lg"></div>
					</div>
					<!-- ENDPOSTINGAN Terbaru/row -->

					
					<!-- CATEGORY POSTING-->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">CATEGORY DIBAWAH POSTING</h2>
							</div>
						</div>
						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="#"><img src="{{asset('public/themes')}}/img/post-4.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="#">Health</a>
									</div>
									<h3 class="post-title title-sm"><a href="#">Postea senserit id eos, vivendo periculis ei qui</a></h3>
									<ul class="post-meta">
										<li><a href="#">John Doe</a></li>
										<li>20 April 2018</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->
					</div>
					<!--ENDCATEGORY POSTING /-->
				</div>
@stop
	
