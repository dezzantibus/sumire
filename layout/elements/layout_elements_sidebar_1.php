<?php

class layout_elements_sidebar_1 extends layout
{

    private $data;

    function __construct( data_sidebar $data )
    {
        $this->data = $data;
    }

    function render()
    {
        echo '
        <!-- Sidebar Start -->
        <div class="fbt-col-lg-3 col-md-4 col-sm-6 sidebar">
            <div class="theiaStickySidebar">';

                $this->social_counter();

                $this->advertisement();

                $this->tabs();

                echo
                '
                <!-- Sidebar Carousel Start -->
                <div class="widget sidebar-carousel clearfix">
                    <div class="title-wrapper border-1">
                        <h2><span class="color-1">Gastronomy</span></h2>
                    </div>
                    <div class="carousel-content-box owl-wrapper clearfix">
                        <div class="owl-carousel" data-num="1">
                            <div class="item fbt-hr-crs">
                                <div class="post-item clearfix">
                                    <div class="img-thumb">
                                        <a href="single.html"><div class="fbt-resize" style="background-image: url(http://placekitten.com/640/427)"></div></a>
                                        <div class="img-credits">
                                            <a href="single.html"><h3>China\'s drive to become a rugby union superpower.</h3></a>
                                            <div class="post-info clearfix">
                                                <span>Sep 26, 2016</span>
                                            </div>
                                            <div class="text-content">
                                                <p>Suspendisse consectetuer, interdum vulputate sit ullamcorper in dictum quis, orci lectus,
                                                rhoncus...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item fbt-hr-crs">
                                <div class="post-item clearfix">
                                    <div class="img-thumb">
                                        <a href="single.html"><div class="fbt-resize" style="background-image: url(http://placekitten.com/640/427)"></div></a>
                                        <div class="img-credits">
                                            <a href="single.html"><h3>The age of first-time mothers is rising faster in the US.</h3></a>
                                            <div class="post-info clearfix">
                                                <span>Sep 26, 2016</span>
                                            </div>
                                            <div class="text-content">
                                                <p>Suspendisse consectetuer, interdum vulputate sit ullamcorper in dictum quis, orci lectus,
                                                rhoncus...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item fbt-hr-crs">
                                <div class="post-item clearfix">
                                    <div class="img-thumb">
                                        <a href="single.html"><div class="fbt-resize" style="background-image: url(http://placekitten.com/640/427)"></div></a>
                                        <div class="img-credits">
                                            <a href="single.html"><h3>Nam iusto delicata ne, eam dolore singulis maiestatis ex.</h3></a>
                                            <div class="post-info clearfix">
                                                <span>Sep 26, 2016</span>
                                            </div>
                                            <div class="text-content">
                                                <p>Suspendisse consectetuer, interdum vulputate sit ullamcorper in dictum quis, orci lectus,
                                                rhoncus...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Sidebar Carousel End -->
                <!-- Advertisement Start -->
                <div class="widget advertisement">
                    <div class="desktop-ad">
                        <span>- Advertisement -</span>
                        <a href="#" target="_blank"><img src="img/300x250.jpg" alt=""></a>
                    </div>
                    <div class="tablet-ad">
                        <span>- Advertisement -</span>
                        <a href="#" target="_blank"><img src="img/300x250.jpg" alt=""></a>
                    </div>
                    <div class="mobile-ad">
                        <span>- Advertisement -</span>
                        <a href="#" target="_blank"><img src="img/300x250.jpg" alt=""></a>
                    </div>
                </div><!-- Advertisement End -->
                <!-- Popular Posts Start -->
                <div class="widget popular_posts clearfix">
                    <div class="title-wrapper border-4">
                        <h2><span class="color-4">Popular Posts</span></h2>
                    </div>
                    <div class="fbt-vc-inner">
                        <div class="row">
                            <div class="col-xs-6 grid-margin padding-5">
                                <div class="post-item small">
                                    <div class="img-thumb">
                                        <a href="single.html">
                                            <div class="fbt-resize" style="background-image: url(http://placekitten.com/640/427)"></div>
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <a href="single.html">
                                            <h3>Aliquam metus mauris, litora orci ligula.</h3>
                                        </a>
                                        <div class="post-info clearfix">
                                            <span>Mar 13, 2016</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 grid-margin padding-5">
                                <div class="post-item small">
                                    <div class="img-thumb">
                                        <a href="single.html">
                                            <div class="fbt-resize" style="background-image: url(http://placekitten.com/640/427)"></div>
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <a href="single.html">
                                            <h3>China\'s drive to become a rugby union superpower.</h3>
                                        </a>
                                        <div class="post-info clearfix">
                                            <span>Mar 2, 2016</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 grid-margin padding-5">
                                <div class="post-item small">
                                    <div class="img-thumb">
                                        <a href="single.html">
                                            <div class="fbt-resize" style="background-image: url(http://placekitten.com/640/427)"></div>
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <a href="single.html">
                                            <h3>Dolor ut a est maecenas, neque odio dui leo lacus varius.</h3>
                                        </a>
                                        <div class="post-info clearfix">
                                            <span>Mar 10, 2016</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 grid-margin padding-5">
                                <div class="post-item small">
                                    <div class="img-thumb">
                                        <a href="single.html">
                                            <div class="fbt-resize" style="background-image: url(http://placekitten.com/640/427)"></div>
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <a href="single.html">
                                            <h3>Nam iusto delicata ne, eam dolore singulis maiestatis ex.</h3>
                                        </a>
                                        <div class="post-info clearfix">
                                            <span>Mar 3, 2016</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Popular Posts End -->
            </div>
        </div><!-- Sidebar End -->



        ';
    }

    private function social_counter()
    {
        echo

        '
        <!-- Social Counter Start -->
							<div class="widget">
								<div class="social-counter">
									<div class="title-wrapper border-5">
										<h2><span class="color-5">Stay Connected</span></h2>
									</div>
									<div class="social-item">
										<div class="social-rss clearfix">
											<a href="#" class="rss"><i class="fa fa-rss" aria-hidden="true"></i></a>
											<span class="left">10286 Subscribers</span>
											<span class="right">RSS</span>
										</div>
									</div>
									<div class="social-item">
										<div class="social-tw clearfix">
											<a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											<span class="left">5432 Followers</span>
											<span class="right">Twitter</span>
										</div>
									</div>
									<div class="social-item">
										<div class="social-gp clearfix">
											<a href="#" class="g-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
											<span class="left">750 Followers</span>
											<span class="right">Google+</span>
										</div>
									</div>
									<div class="social-item last clearfix">
										<div class="social-fb clearfix">
											<a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											<span class="left">1664 Fans</span>
											<span class="right">Facebook</span>
										</div>
									</div>
								</div>
							</div><!-- Social Counter End -->
        ';
    }


    private function advertisement()
    {
        //<!-- Advertisement Start -->
        echo
        '<div class="widget advertisement">
            <div class="desktop-ad">
                <span>- Advertisement -</span>
                <a href="#" target="_blank"><img src="img/300x250.jpg" alt=""></a>
            </div>
            <div class="tablet-ad">
                <span>- Advertisement -</span>
                <a href="#" target="_blank"><img src="img/300x250.jpg" alt=""></a>
            </div>
            <div class="mobile-ad">
                <span>- Advertisement -</span>
                <a href="#" target="_blank"><img src="img/300x250.jpg" alt=""></a>
            </div>
        </div><!-- Advertisement End -->';
    }

    private function tabs_element_news( data_news_article $article )
    {

        echo
        '<div class="post-item small">',
            '<div class="row">',
                '<div class="col-sm-4 col-xs-3">',
                    '<div class="img-thumb">',
                        '<a href="', $article->link(), '">',
                            '<div class="fbt-resize" style="background-image: url(', constant::IMAGES_DOMAIN, $article->image1, ')"></div>',
                        '</a>',
                    '</div>',
                '</div>',
                '<div class="col-sm-8 col-xs-9 no-padding-left">',
                    '<div class="post-content">',
                        '<a href="', $article->link(), '">',
                            '<h3>', $article->title, '</h3>',
                        '</a>',
                        '<div class="post-info clearfix">',
                            '<span>', $article->dateForDisplay( $article->date ), '</span>',
                        '</div>',
                    '</div>',
                '</div>',
            '</div>',
        '</div>';

    }

    private function tabs()
    {

        echo
        '<!-- Sidebar Tabs Start -->
        <div class="widget clearfix">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#recent">Recent</a></li>
                <li><a data-toggle="tab" href="#menu1">Hot</a></li>
                <li><a data-toggle="tab" href="#menu2">Reviews</a></li>
            </ul>
            <div class="tab-content">
                <!-- Tab 1 -->
                <div id="recent" class="tab-pane fade in active">
                    <!-- Sidebar Small List Start -->
                    <div class="fbt-vc-inner">';

                    while( !$this->data->recent_news->isEmpty() )
                    {
                        $this->tabs_element_news( $this->data->recent_news->first() );
                    }

                    echo
                    '</div><!-- Sidebar Small List End -->
                </div>
                <!-- Tab 2 -->
                <div id="menu1" class="tab-pane fade">
                    <!-- Sidebar Vertical Mag 5 Start -->
                    <div class="fbt-vc-inner">
                        <div class="post-item big clearfix">
                            <div class="img-thumb">
                                <a href="single.html">
                                    <div class="fbt-resize" style="background-image: url(http://placekitten.com/640/427)"></div>
                                </a>
                                <div class="img-credits">
                                    <a href="single.html">
                                        <h3>Duis sed aliquam. Aliquam felis pulvinar in eu libero dapibus, donec ligula elit amet.</h3>
                                    </a>
                                    <div class="post-info clearfix">
                                        <span><a href="#">Mark Spenser</a></span>
                                        <span>-</span>
                                        <span>Mar 18, 2016</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-item small">
                            <div class="row">
                                <div class="col-sm-4 col-xs-3">
                                    <div class="img-thumb">
                                        <a href="single.html">
                                            <div class="fbt-resize" style="background-image: url(http://placekitten.com/640/427)"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-xs-9 no-padding-left">
                                    <div class="post-content">
                                        <a href="single.html">
                                            <h3>Aliquam metus mauris, litora orci ligula.</h3>
                                        </a>
                                        <div class="post-info clearfix">
                                            <span>Mar 13, 2016</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-item small">
                            <div class="row">
                                <div class="col-sm-4 col-xs-3">
                                    <div class="img-thumb">
                                        <a href="single.html">
                                            <div class="fbt-resize" style="background-image: url(http://placekitten.com/640/427)"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-xs-9 no-padding-left">
                                    <div class="post-content">
                                        <a href="single.html">
                                            <h3>Dolor ut a est maecenas, neque odio dui leo lacus varius.</h3>
                                        </a>
                                        <div class="post-info clearfix">
                                            <span>Mar 8, 2016</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-item small">
                            <div class="row">
                                <div class="col-sm-4 col-xs-3">
                                    <div class="img-thumb">
                                        <a href="single.html">
                                            <div class="fbt-resize" style="background-image: url(http://placekitten.com/640/427)"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-xs-9 no-padding-left">
                                    <div class="post-content">
                                        <a href="single.html">
                                            <h3>Etiam duis nunc dui ad sagittis, mauris at rem, in nunc.</h3>
                                        </a>
                                        <div class="post-info clearfix">
                                            <span>Feb 23, 2016</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Sidebar Vertical Mag 5 End -->
                </div>
                <!-- Tab 3 -->
                <div id="menu2" class="tab-pane fade">
                    <!-- Sidebar Small List Start -->
                    <div class="fbt-vc-inner">
                        <div class="post-item small">
                            <div class="row">
                                <div class="col-sm-4 col-xs-3">
                                    <div class="img-thumb">
                                        <a href="single.html">
                                            <div class="fbt-resize" style="background-image: url(http://placekitten.com/640/427)"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-xs-9 no-padding-left">
                                    <div class="post-content">
                                        <a href="single.html">
                                            <h3>Aliquam metus mauris, litora orci ligula.</h3>
                                        </a>
                                        <div class="post-info clearfix">
                                            <span>Mar 13, 2016</span>
                                            <span>-</span>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-item small">
                            <div class="row">
                                <div class="col-sm-4 col-xs-3">
                                    <div class="img-thumb">
                                        <a href="single.html">
                                            <div class="fbt-resize" style="background-image: url(http://placekitten.com/640/427)"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-xs-9 no-padding-left">
                                    <div class="post-content">
                                        <a href="single.html">
                                            <h3>China\'s drive to become a rugby union superpower.</h3>
                                        </a>
                                        <div class="post-info clearfix">
                                            <span>Mar 10, 2016</span>
                                            <span>-</span>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-item small">
                            <div class="row">
                                <div class="col-sm-4 col-xs-3">
                                    <div class="img-thumb">
                                        <a href="single.html">
                                            <div class="fbt-resize" style="background-image: url(http://placekitten.com/640/427)"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-xs-9 no-padding-left">
                                    <div class="post-content">
                                        <a href="single.html">
                                            <h3>Nam iusto delicata ne, eam dolore singulis maiestatis ex.</h3>
                                        </a>
                                        <div class="post-info clearfix">
                                            <span>Mar 3, 2016</span>
                                            <span>-</span>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-item small">
                            <div class="row">
                                <div class="col-sm-4 col-xs-3">
                                    <div class="img-thumb">
                                        <a href="single.html">
                                            <div class="fbt-resize" style="background-image: url(http://placekitten.com/640/427)"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-xs-9 no-padding-left">
                                    <div class="post-content">
                                        <a href="single.html">
                                            <h3>Dolor ut a est maecenas, neque odio dui leo lacus varius.</h3>
                                        </a>
                                        <div class="post-info clearfix">
                                            <span>Mar 2, 2016</span>
                                            <span>-</span>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-item small">
                            <div class="row">
                                <div class="col-sm-4 col-xs-3">
                                    <div class="img-thumb">
                                        <a href="single.html">
                                            <div class="fbt-resize" style="background-image: url(http://placekitten.com/640/427)"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-xs-9 no-padding-left">
                                    <div class="post-content">
                                        <a href="single.html">
                                            <h3>Etiam duis nunc dui ad sagittis, mauris at rem, in nunc.</h3>
                                        </a>
                                        <div class="post-info clearfix">
                                            <span>Feb 23, 2016</span>
                                            <span>-</span>
                                            <span class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Sidebar Small List End -->
                </div>
            </div>
        </div><!-- Sidebar Tabs End -->

        ';
    }

}