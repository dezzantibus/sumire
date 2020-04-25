<?php

class layout_slide_1 extends layout
{

    function __construct()
    {

    }

    function render()
    {
        echo '
	<!-- Featured Slide Start -->
	<section id="fp-container" class="clearfix">
		<div class="container">
			<div class="row">
				<div class="feuture-posts">
					<!-- Slider Start -->
					<div class="col-sm-6 big-section">
						<div class="fbt-slide-nav">
							<span class="fbt-slide-pager"></span>
						</div>
						<div class="fp-slides">
							<div class="img-thumb">
								<a href="single.html"><div class="fbt-resize" style="background-image: url(http://placekitten.com/640x427)"></div></a>
								<div class="img-credits">
									<a class="post-category" href="#">Cooking</a>
									<a href="single.html"><h3>Ei his graeci option officiis, no oratio vocent efficiendi vix.</h3></a>
									<div class="post-info">
										<span>Oct 14, 2016</span>
										<span><a href="#">Mark Spenser</a></span>
									</div>
								</div>
							</div>
							<div class="img-thumb">
								<a href="single.html"><div class="fbt-resize" style="background-image: url(http://placekitten.com/640x427)"></div></a>
								<div class="img-credits">
									<a class="post-category" href="#">Travel</a>
									<a href="single.html"><h3>Nam iusto delicata ne, eam dolore singulis maiestatis ex.</h3></a>
									<div class="post-info">
										<span>Sep 26, 2016</span>
										<span><a href="#">John Doe</a></span>
									</div>
								</div>
							</div>
							<div class="img-thumb">
								<a href="single.html"><div class="fbt-resize" style="background-image: url(http://placekitten.com/640x427)"></div></a>
								<div class="img-credits">
									<a class="post-category" href="#">Computing</a>
									<a href="single.html"><h3>Women in Hollywood, according to new study with Apple.</h3></a>
									<div class="post-info">
										<span>Aug 11, 2016</span>
										<span><a href="#">Nick Nam</a></span>
									</div>
								</div>
							</div>
						</div>
						<nav class="nav-growpop">
							<div>
								<a class="fp-prev" href="#fp-prev"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></a>
								<a class="fp-next" href="#fp-next"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
							</div>
						</nav>
					</div><!-- Slider End -->
					<!-- Slide Small Start -->
					<div class="col-sm-6 small-section">
						<div class="img-thumb first">
							<a href="single.html"><div class="fbt-resize" style="background-image: url(http://placekitten.com/640x427)"></div></a>
							<div class="img-credits">
								<a class="post-category" href="#">Computing</a>
								<a href="single.html"><h3>How can Build a Better Connection Between the Mind and Body</h3></a>
								<div class="post-info">
									<span>Sep 23, 2016</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="fp-small">
								<div class="col-xs-6 last-small">
									<div class="img-thumb">
										<a href="single.html"><div class="fbt-resize" style="background-image: url(http://placekitten.com/640x427)"></div></a>
										<div class="img-credits">
											<a class="post-category" href="#">Fashion</a>
											<a href="single.html"><h3>Baby brain doesn\'t exist say scientists</h3></a>
											<div class="post-info">
												<span>Sep 19, 2016</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 last-small">
									<div class="img-thumb">
										<a href="single.html"><div class="fbt-resize" style="background-image: url(http://placekitten.com/640x427)"></div></a>
										<div class="img-credits">
											<a class="post-category" href="#">CityLife</a>
											<a href="single.html"><h3>Orci in aliquam diam, felis pede, wisi diam mollis.</h3></a>
											<div class="post-info">
												<span>Sep 17, 2016</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- Slide Small End -->
				</div>
			</div>
		</div>
	</section><!-- Featured Slide End -->


        ';
    }

}