<?php

class layout_news_article_content extends layout
{

    /** @var  data_news_article */
    private $article;

    function __construct( data_news_article $article )
    {
        $this->article = $article;
    }

    function render()
    {

        //<!-- Post Content Start -->
        echo
        '<div class="col-md-12 single-post-container clearfix">',
            '<div class="single-post">',
                '<div class="img-crop">',
                    '<img src="', constant::IMAGES_DOMAIN, $this->article->image1, '" class="img-responsive" alt=" ">',
                    '<div class="img-credits">',
                        '<div class="col-md-8 col-md-offset-2">',
                            '<a class="post-category" href="#">', $this->article->category->category, '</a>',
                            '<div class="post-title"><h1>', $this->article->title, '</h1></div>',
                            '<div class="post-description"><p>', $this->article->subtitle, '</p></div>',
                            '<div class="post-info clearfix">',
//                                '<span><a href="#"><i class="fa fa-pencil-square-o"></i> John Doe</a></span>',
//                                '<span class="sepr">-</span>',
                                '<span class="date"><i class="fa fa-clock-o"></i>', $this->article->dateForDisplay( $this->article->date ), '</span>',
//                                '<span class="sepr">-</span>',
//                                '<span class="rating">',
//                                    '<i class="fa fa-star"></i>',
//                                    '<i class="fa fa-star"></i>',
//                                    '<i class="fa fa-star"></i>',
//                                    '<i class="fa fa-star"></i>',
//                                    '<i class="fa fa-star-half-o"></i>',
//                                '</span>',
                            '</div>',
                        '</div>',
                    '</div>',
                '</div>',
                //<!-- img-crop -->

                //<!-- Post Share Start -->
                '<div class="post-share clearfix">',
                    '<ul>',
                        '<li><a class="facebook df-share" data-sharetip="Share on Facebook!" href="#" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i> <span class="social-text">Facebook</span></a></li>',
                        '<li><a class="twitter df-share" data-hashtags="" data-sharetip="Share on Twitter!" href="#" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i> <span class="social-text">Tweeter</span></a></li>',
                        '<li><a class="google df-pluss" data-sharetip="Share on Google+!" href="#" rel="nofollow" target="_blank"><i class="fa fa-google-plus"></i> <span class="social-text">Google+</span></a></li>',
                        '<li><a class="pinterest df-pinterest" data-sharetip="Pin it" href="#" target="_blank"><i class="fa fa-pinterest-p"></i> <span class="social-text">Pinterest</span></a></li>',
                    '</ul>',
                '</div>',
                //<!-- Post Share End -->

                '<div class="clearfix"></div>',

                '<div class="post-text-content clearfix">',
                    '<p>', str_replace( "\r\n", '<br />', str_replace( "\r\n\r\n", '</p><p>', $this->article->text ) ), '</p>';

                    if( !empty( $this->article->source ) )
                    {
                        echo '<p><a href="">ソース</a>';
                    }

                echo
                '</div>',
                //<!-- post-text-content -->

                //<!-- Post Share Bottom Start -->
                '<div class="post-share bottom clearfix">',
                    '<ul>',
                        '<li><a class="facebook df-share" data-sharetip="Share on Facebook!" href="#" rel="nofollow" target="_blank"><i class="fa fa-facebook"></i> <span class="social-text">Facebook</span></a></li>',
                        '<li><a class="twitter df-share" data-hashtags="" data-sharetip="Share on Twitter!" href="#" rel="nofollow" target="_blank"><i class="fa fa-twitter"></i> <span class="social-text">Tweeter</span></a></li>',
                        '<li><a class="google df-pluss" data-sharetip="Share on Google+!" href="#" rel="nofollow" target="_blank"><i class="fa fa-google-plus"></i> <span class="social-text">Google+</span></a></li>',
                        '<li><a class="pinterest df-pinterest" data-sharetip="Pin it" href="#" target="_blank"><i class="fa fa-pinterest-p"></i> <span class="social-text">Pinterest</span></a></li>',
                    '</ul>',
                '</div>',
                //<!-- Post Share Bottom End -->


                //<!-- Comment Box Start -->
                '<div class="fbt-contact-box">',
                    // disqs
                '</div>',
                //<!-- Comment Box End -->

            '</div>',
            //<!-- single-post -->

        '</div>';
        //<!-- Post Content End -->;

    }

}