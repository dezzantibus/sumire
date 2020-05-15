<?php

class layout_elements_homebox_gallery_static extends layout
{

    /** @var  data_news_category */
    private $category;

    function __construct( data_news_category $category )
    {
        $this->category = $category;
    }

    function render()
    {
        echo '
								<!-- Gallery Start -->
								<div class="gallery">
									<div class="title-wrapper border-4">
										<h2><span class="color-4">Photographies</span></h2>
									</div>
									<div class="row">
										<div class="gallery-img">
											<div class="col-md-4 col-xs-6 padding-1">
												<div class="post-item clearfix">
													<div class="img-thumb">
														<a href="single.html"><div class="fbt-resize" style="background-image: url(http://placekitten.com/640/427)"></div></a>
														<div class="img-credits">
															<h3>Rutrum imperdiet vitae vitae a suscipit semper potenti magna.</h3>
															<div class="post-info clearfix">
																<span>May 8, 2016</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4 col-xs-6 padding-1">
												<div class="post-item clearfix">
													<div class="img-thumb">
														<a href="single.html"><div class="fbt-resize" style="background-image: url(http://placekitten.com/640/427)"></div></a>
														<div class="img-credits">
															<h3>Tincidunt massa vel tempor amet hac sed leo lectus.</h3>
															<div class="post-info clearfix">
																<span>Apr 30, 2016</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4 col-xs-6 padding-1">
												<div class="post-item clearfix">
													<div class="img-thumb">
														<a href="single.html"><div class="fbt-resize" style="background-image: url(http://placekitten.com/640/427)"></div></a>
														<div class="img-credits">
															<h3>Sem tincidunt arcu pellentesque suscipit accumsan.</h3>
															<div class="post-info clearfix">
																<span>Apr 23, 2016</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4 col-xs-6 padding-1">
												<div class="post-item clearfix">
													<div class="img-thumb">
														<a href="single.html"><div class="fbt-resize" style="background-image: url(http://placekitten.com/640/427)"></div></a>
														<div class="img-credits">
															<h3>Cras in id habitasse nec porta diam molestie nec.</h3>
															<div class="post-info clearfix">
																<span>Apr 19, 2016</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4 col-xs-6 padding-1">
												<div class="post-item clearfix">
													<div class="img-thumb">
														<a href="single.html"><div class="fbt-resize" style="background-image: url(http://placekitten.com/640/427)"></div></a>
														<div class="img-credits">
															<h3>Sit sem vehicula wisi interdum placerat nulla ut ante.</h3>
															<div class="post-info clearfix">
																<span>Apr 17, 2016</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4 col-xs-6 padding-1">
												<div class="post-item clearfix">
													<div class="img-thumb">
														<a href="single.html"><div class="fbt-resize" style="background-image: url(http://placekitten.com/640/427)"></div></a>
														<div class="img-credits">
															<h3>Dictumst magna orci magnis donec lectus lectus at sapien.</h3>
															<div class="post-info clearfix">
																<span>Feb 29, 2016</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- Gallery End -->

        ';
    }

}