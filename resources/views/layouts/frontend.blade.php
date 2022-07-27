<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<!-- HTML Meta Tags -->
	<title>{{config('tahublog.title')}}</title>
	<meta name="description" content="{{config('tahublog.description')}}">
	 
	<!-- Google / Search Engine Tags -->
	<meta itemprop="name" content="{{config('tahublog.title')}}">
	<meta itemprop="description" content="{{config('tahublog.description')}}">
	<meta itemprop="image" content="#">
	 
	<!-- Facebook Meta Tags -->
	<meta property="og:url" content="#">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Blogs With Laravel">
	<meta property="og:description" content="Blog yang dibuat menggunakan Framework Laravel">
	<meta property="og:image" content="#">
	 
	<!-- Twitter Meta Tags -->
	<meta name="twitter:card" content="#">
	<meta name="twitter:title" content="Blogs With Laravel">
	<meta name="twitter:description" content="Blog yang dibuat menggunakan Framework Laravel">
	<meta name="twitter:image" content="#">
	

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{asset('public/themes')}}/css/bootstrap.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{asset('public/themes')}}/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('public/themes')}}/css/style.css" />

</head>

<body>
	<!-- HEADER START -->
	@include('themes_blog.head')
	<!-- HEADER END -->

	<!-- CONTENT START -->
	@yield('content')
	<!-- CONTEN END -->

	
	<!-- SIDEBAR START -->
	@include('themes_blog.widget')
	<!-- SIDEBAR END -->

	<!-- FOOTER -->
	<footer id="footer">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-3">
					<div class="footer-widget">
						<div class="footer-logo">
							<a href="{{url('/')}}" class="logo"><img src="{{asset('public/themes')}}/img/logo-alt.png" alt=""></a>
						</div>
						<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
						<ul class="contact-social">
							<li><a href="#" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="social-google-plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Categories</h3>
						<div class="category-widget">
							<ul>
								@foreach($category_widget as $cat)
								<li><a href="{{ route('blog.category', $cat->slug)}}">{{$cat->name}} <span>{{$cat->posts->count()}}</span></a></li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Tags</h3>
						<div class="tags-widget">
							<ul>
								@foreach($tag as $tg)
								<li><a href="#">{{$tg->name}}</a></li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Newsletter</h3>
						<div class="newsletter-widget">
							<form>
								<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
								<input class="input" name="newsletter" placeholder="Enter Your Email">
								<button class="primary-button">Subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="footer-bottom row">
				<div class="col-md-6 col-md-push-6">
					<ul class="footer-nav">
						<li><a href="#">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Contacts</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">Privacy</a></li>
					</ul>
				</div>
				<div class="col-md-6 col-md-pull-6">
					<div class="footer-copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="{{asset('public/themes')}}/js/jquery.min.js"></script>
	<script src="{{asset('public/themes')}}/js/bootstrap.min.js"></script>
	<script src="{{asset('public/themes')}}/js/jquery.stellar.min.js"></script>
	<script src="{{asset('public/themes')}}/js/main.js"></script>

</body>

</html>
