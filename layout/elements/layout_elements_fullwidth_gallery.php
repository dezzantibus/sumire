<?php
/**
 * Created by PhpStorm.
 * User: zante
 * Date: 08/06/2015
 * Time: 10:30
 */


class layout_elements_fullwidth_gallery extends layout
{

    function __construct( $params=array() )
    {

    }

    public function render()
    {

        echo '
				<!-- Big Gallery Start -->
				<div class="gallery bgallery clearfix">
					<div class="gallery-img clearfix">
						<div class="col-md-3 col-xs-6 padding-1">
							<div class="post-item clearfix">
								<div class="img-thumb">
									<a href="single.html"><div class="fbt-resize" style="background-image: url(http://placekitten.com/640x427)"></div></a>
									<div class="img-credits">
										<a class="post-category" href="#">Cooking</a>
										<a href="single.html"><h3>Nam iusto delicata ne, eam dolore singulis maiestatis ex.</h3></a>
										<div class="post-info clearfix">
											<span><a href="#">Mark Spenser</a></span>
											<span>-</span>
											<span>Apr 30, 2016</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-xs-6 padding-1">
							<div class="post-item clearfix">
								<div class="img-thumb">
									<a href="single.html"><div class="fbt-resize" style="background-image: url(http://placekitten.com/640x427)"></div></a>
									<div class="img-credits">
										<a class="post-category" href="#">Lifestyle</a>
										<a href="single.html"><h3>Tincidunt massa vel tempor amet hac sed leo lectus.</h3></a>
										<div class="post-info clearfix">
											<span><a href="#">John Doe</a></span>
											<span>-</span>
											<span>Apr 25, 2016</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-xs-6 padding-1">
							<div class="post-item clearfix">
								<div class="img-thumb">
									<a href="single.html"><div class="fbt-resize" style="background-image: url(http://placekitten.com/640x427)"></div></a>
									<div class="img-credits">
										<a class="post-category" href="#">Lifestyle</a>
										<a href="single.html"><h3>Dolor ut a est maecenas, neque odio dui leo lacus varius.</h3></a>
										<div class="post-info clearfix">
											<span><a href="#">Nick Nam</a></span>
											<span>-</span>
											<span>Apr 23, 2016</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-xs-6 padding-1">
							<div class="post-item clearfix">
								<div class="img-thumb">
									<a href="single.html"><div class="fbt-resize" style="background-image: url(http://placekitten.com/640x427)"></div></a>
									<div class="img-credits">
										<a class="post-category" href="#">Vacations</a>
										<a href="single.html"><h3>Sem tincidunt arcu pellentesque suscipit accumsan.</h3></a>
										<div class="post-info clearfix">
											<span><a href="#">Mark Spenser</a></span>
											<span>-</span>
											<span>Apr 18, 2016</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- Big Gallery End -->
        ';

    }

}