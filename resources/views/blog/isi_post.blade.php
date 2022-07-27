@extends('layouts.frontend')
@section('content')
<!-- PAGE HEADER -->
<!-- <div id="post-header" class="page-header">
	<div class="page-header-bg" style="background-image: url('{{ asset('public/themes') }}/img/header-1.jpg');" data-stellar-background-ratio="0.5"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				@foreach($data as $post_single)
				<div class="post-category">
					<a href="#">{{ $post_single->category->name}}</a>
				</div>
				<h1>{{ $post_single->judul}}</h1>
				<ul class="post-meta">
					<li><a href="#">{{ $post_single->users->name}}</a></li>
					<li>{{ $post_single->created_at->diffforHumans()}}</li>
					<li><i class="fa fa-comments"></i> 3</li>
					<li><i class="fa fa-eye"></i> 807</li>
				</ul>
			</div>
		</div>
	</div>
</div> -->
<!-- /PAGE HEADER -->

<!-- section -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-8">
				<!-- post share -->
				<div class="section-row">
					<div class="post-share">
						<a href="#" class="social-facebook"><i class="fa fa-facebook"></i><span>Share</span></a>
						<a href="#" class="social-twitter"><i class="fa fa-twitter"></i><span>Tweet</span></a>
						<a href="#" class="social-pinterest"><i class="fa fa-pinterest"></i><span>Pin</span></a>
						<a href="#" ><i class="fa fa-envelope"></i><span>Email</span></a>
					</div>
				</div>
				<!-- /post share -->

				<!-- post content -->
				<div class="section-row">
					<h3>{{ $post_single->judul}}</h3>
					<ul class="post-meta">
					<li><a href="#">{{ $post_single->users->name}}</a></li>
					<li>{{ $post_single->created_at->diffforHumans()}}</li>
				    </ul><br/>
						<p>{!! $post_single->content !!}</p>
						<figure>
							<img src="{{ asset( $post_single->gambar )}}" alt="">
						</figure>
						
				</div>
				<!-- /post content -->
			
				<!-- post tags -->
				<div class="section-row">
					@foreach($post_single->tags as $tanda)
					<div class="post-tags">
						<title>TAGS:</title>
						<ul>
							<li>TAGS:</li>
							<li>{{ $tanda->name}}</li>
						</ul>
					</div>
					@endforeach
				</div>
				<!-- /post tags -->
				
				<!-- post nav -->
				<div class="section-row">
					<div class="post-nav">
						<div class="prev-post">
							<a class="post-img" href="#"><img src="{{asset('public/themes')}}/img/widget-8.jpg" alt=""></a>
							<h3 class="post-title"><a href="#">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
							<span>Previous post</span>
						</div>

						<div class="next-post">
							<a class="post-img" href="#"><img src="{{asset('public/themes')}}/img/widget-10.jpg" alt=""></a>
							<h3 class="post-title"><a href="#">Postea senserit id eos, vivendo periculis ei qui</a></h3>
							<span>Next post</span>
						</div>
					</div>
				</div>
				<!-- /post nav  -->

				@endforeach
				<!-- /related post -->
				<div>
					<div class="section-title">
						<h3 class="title">Related Posts</h3>
					</div>
					<div class="row">
						<!-- post -->
						<div class="col-md-4">
							<div class="post post-sm">
								<a class="post-img" href="#"><img src="{{asset('public/themes')}}/img/post-4.jpg" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">Health</a>
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
				</div>
				<!-- /related post -->

				<!-- post comments -->
				<div class="section-row">
					<div class="section-title">
						<h3 class="title">3 Comments</h3>
					</div>
					<div class="post-comments">
					
						<!-- comment -->
						<div class="media">
							<div class="media-left">
								<img class="media-object" src="{{asset('public/themes')}}/img/avatar-3.jpg" alt="">
							</div>
							<div class="media-body">
								<div class="media-heading">
									<h4>John Doe</h4>
									<span class="time">5 min ago</span>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								<a href="#" class="reply">Reply</a>
							</div>
						</div>
						<!-- /comment -->
					</div>
				</div>
				<!-- /post comments -->

				<!-- post reply -->
				<div class="section-row">
					<div class="section-title">
						<h3 class="title">Leave a reply</h3>
					</div>
					<form class="post-reply">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<textarea class="input" name="message" placeholder="Message"></textarea>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input class="input" type="text" name="name" placeholder="Name">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input class="input" type="email" name="email" placeholder="Email">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input class="input" type="text" name="website" placeholder="Website">
								</div>
							</div>
							<div class="col-md-12">
								<button class="primary-button">Submit</button>
							</div>

						</div>
					</form>
				</div>
				<!-- /post reply -->
			</div>
@stop