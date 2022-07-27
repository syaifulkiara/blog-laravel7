	<!-- HEADER -->
	<header id="header">
		<!-- NAV -->
		<div id="nav">
			<!-- Top Nav -->
			<div id="nav-top">
				<div class="container">
					<!-- social -->
					<ul class="nav-social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
					<!-- /social -->

					<!-- logo -->
					<div class="nav-logo">
						<a href="{{url('/')}}" class="logo"><img src="{{asset('public/themes')}}/img/logo.png" alt=""></a>
					</div>
					<!-- /logo -->

					<!-- search & aside toggle -->
					<div class="nav-btns">
						<button class="search-btn"><i class="fa fa-search"></i></button>
						<div id="nav-search">
							<form action="{{route('blog.cari')}}" method="get" >
								<input class="input" name="cari" placeholder="Enter your search...">
							</form>
							<button class="nav-close search-close">
								<span></span>
							</button>
						</div>
					</div>
					<!-- /search & aside toggle -->
				</div>
			</div>
			<!-- /Top Nav -->

			<!-- Main Nav -->
			<div id="nav-bottom">
				<div class="container">
					<!-- nav -->
					<ul class="nav-menu">
						<li><a href="{{url('/')}}">Home</a></li>
						<li class="has-dropdown">
							
							<a href="#">Category</a>
							<div class="dropdown">
								<div class="dropdown-body">
									<ul class="dropdown-list">
										@foreach($category_widget as $cat)
										<li><a href="#">{{$cat->name}}</a></li>
										@endforeach
									</ul>
								</div>
							</div>
						</li>
						<li><a href="{{route('blog.list')}}">List Artikel</a></li>
						<li><a href="#">Health</a></li>
						<li><a href="#">Travel</a></li>
					</ul>
					<!-- /nav -->
				</div>
			</div>
			<!-- /Main Nav -->
		</div>
		<!-- /NAV -->
	</header>
	<!-- /HEADER -->