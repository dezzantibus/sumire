<?php

class layout_header extends layout
{

    function __construct()
    {

    }

    function render()
    {
        echo '
	<div class="navbar-fixed-top"></div>
	<!-- Headline Start -->
	<section id="newsticker">
		<div class="headline-wrapper">
			<div class="container">
				<div class="row">
					<!-- Newsticker start -->
					<div class="col-md-2 col-sm-3 col-xs-5">
						<div class="headline-title color-6">
							<h5>BREAKING NEWS</h5>
						</div>
					</div>
					<div class="col-md-7 col-sm-9 col-xs-7 no-padding">
						<ul class="ticker clearfix">
							<li><a href="single.html">Ei his graeci option officiis, no oratio vocent efficiendi vix.</a></li>
							<li><a href="single.html">Nam iusto delicata ne, eam dolore singulis maiestatis ex.</a></li>
							<li><a href="single.html">Women in Hollywood, according to new study</a></li>
							<li><a href="single.html">The age of first-time mothers is rising faster in the US</a></li>
							<li><a href="single.html">Baby brain doesn\'t exist say scientists</a></li>
							<li><a href="single.html">How can Build a Better Connection Between the Mind and Body</a></li>
							<li><a href="single.html">How Triathletes Can Maximize Their Swim Block Training</a></li>
						</ul>
					</div><!-- Newsticker end -->
					<!-- Search Form start -->
					<div class="col-md-3 hidden-sm hidden-xs">
						<div class="fa-icon-wrap">
							<a class="facebook" href="#" data-toggle="tooltip" data-placement="left" title="Facebook"><i aria-hidden="true" class="fa fa-facebook"></i></a>
							<a class="google+" href="#" data-toggle="tooltip" data-placement="left" title="Google+"><i aria-hidden="true" class="fa fa-google-plus"></i></a>
							<a class="twitter" href="#" data-toggle="tooltip" data-placement="left" title="Twitter"><i aria-hidden="true" class="fa fa-twitter"></i></a>
							<a class="linkedin" href="#" data-toggle="tooltip" data-placement="left" title="Linkedin"><i aria-hidden="true" class="fa fa-linkedin"></i></a>
							<a class="pinterest" href="#" data-toggle="tooltip" data-placement="left" title="Pinterest"><i aria-hidden="true" class="fa fa-pinterest-p"></i></a>
							<a class="youtube" href="#" data-toggle="tooltip" data-placement="left" title="Youtube"><i aria-hidden="true" class="fa fa-youtube"></i></a>
							<a class="soundcloud" href="#" data-toggle="tooltip" data-placement="left" title="Soundcloud"><i aria-hidden="true" class="fa fa-soundcloud"></i></a>
						</div>
					</div><!-- Search Form end -->
				</div>
			</div>
		</div>
	</section><!-- Headline End -->
	<!-- Header Start -->
	<section class="header-wrapper clearfix">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3">
					<h1 class="logo"><a href="index.html"><img class="img-responsive" src="./img/logo-9.png" alt="logo"/></a></h1>
				</div>
				<div class="col-md-1 hidden-sm"></div>
				<div class="col-md-8 col-sm-9">
					<div class="ad-space ads-768">
						<a href="#" target="_blank"><img src="./img/728x90.jpg" alt="header-ad"/></a>
					</div>
					<div class="ad-space ads-468">
						<a href="#" target="_blank"><img src="./img/468x60.jpg" alt="header-ad"/></a>
					</div>
				</div>
			</div>
		</div>
	</section><!-- Header End -->
	<!-- Menu Navigation Start -->
	<div class="navbar navbar-default megamenu clearfix">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="navbar-header">
						<button type="button" data-toggle="collapse" data-target="#mainmenu" class="navbar-toggle">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.html"><img class="img-responsive" src="./img/logo-1.png" alt="logo"/></a>
					</div>
					<div id="mainmenu" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class="active home dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Home <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="index.html">Default</a></li>
									<li><a href="index_1.html">Default 2</a></li>
									<li><a href="homepage_1.html">Home 1</a></li>
									<li><a href="homepage_2.html">Home 2</a></li>
									<li><a href="homepage_3.html">Home 3</a></li>
									<li><a href="homepage_4.html">Home 4</a></li>
									<li><a href="header_1.html">Dark Header</a></li>
									<li><a href="header_2.html">Dark Header 2</a></li>
									<li><a href="index_2.html">Boxed 1</a></li>
									<li><a href="index_3.html">Boxed 2</a></li>
								</ul>
							</li>
							<li><a href="#">Videos</a></li>
							<li class="dropdown full-cont"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Features <b class="caret"></b></a>
								<!-- Mega Menu Start -->
								<ul class="dropdown-menu fullwidth">
									<li class="default clearfix">
										<div class="row">
											<div class="col-md-3 col-sm-6 mega-item">
												<div class="img-thumb">
													<a href="#"><div class="fbt-resize" style="background-image: url(\'img/img-1.jpg\')"></div></a>
													<div class="img-credits">
														<h3>Fringilla pellentesque leo sed dolor quam velit.</h3>
														<div class="post-info">
															<span>Sep 12, 2016</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-3 col-sm-6 mega-item">
												<div class="img-thumb">
													<a href="#"><div class="fbt-resize" style="background-image: url(\'img/img-2.jpg\')"></div></a>
													<div class="img-credits">
														<h3>Orci in aliquam diam, felis pede, wisi diam mollis, sit lobortis eget.</h3>
														<div class="post-info">
															<span>Sep 17, 2016</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-3 col-sm-6 mega-item">
												<div class="img-thumb">
													<a href="#"><div class="fbt-resize" style="background-image: url(\'img/img-3.jpg\')"></div></a>
													<div class="img-credits">
														<h3>Pellentesque feugiat neque a placerat nec et.</h3>
														<div class="post-info">
															<span>Sep 19, 2016</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-3 col-sm-6 mega-item">
												<div class="img-thumb">
													<a href="#"><div class="fbt-resize" style="background-image: url(\'img/img-4.jpg\')"></div></a>
													<div class="img-credits">
														<h3>Curabitur vel, magnis duis faucibus nam magna donec justo, tortor quam.</h3>
														<div class="post-info">
															<span>Sep 22, 2016</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul><!-- Mega Menu End -->
							</li>
							<li><a href="#">Sports</a></li>
							<li><a href="#">Politics</a></li>
							<li><a href="#">Shopping</a></li>
							<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">More <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Submenu</a></li>
									<li><a href="#">Submenu</a></li>
									<li><a href="#">Submenu</a></li>
									<li><a href="#">Submenu</a></li>
									<li><a href="#">Submenu</a></li>
									<li><a href="#">Submenu</a></li>
								</ul>
							</li>
						</ul>
						<form class="navbar-form navbar-right" role="search">
							<input type="text" id="search" name="search" placeholder="Search...">
							<button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div><!-- Menu Navigation End -->

        ';
    }

}