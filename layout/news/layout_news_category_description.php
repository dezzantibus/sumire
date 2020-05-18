<?php

class layout_news_category_description extends layout
{

    /** @var  data_news_category */
    private $category;

    function __construct( data_news_category $category )
    {
        $this->category = $category;
    }

    function render()
    {

        //<!-- Horizontal Mag Gallery Start -->
        echo
        '<div class="about-author clearfix">',
            '<div class="author-container">',
                '<div class="avatar">',
                    '<img src="./img/img-47.jpg" alt="">',
                '</div>',
                '<div class="author-description">',
                    '<h5>Mark Spenser <span><a href="#">http://fbtemplates.net</a></span></h5>',
                    '<p>Ipsum sit vel donec accumsan, lobortis diam. Lectus erat nulla nisl, vestibulum aliquam interdum sed morbi bibendum,
                    nullam non quam nulla nulla potenti mollis, egestas in sagittis viverra augue, vitae nunc etiam placerat.</p>',
                    '<div class="fa-icon-wrap clearfix">',
                        '<a class="facebook" href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a>',
                        '<a class="google+" href="#"><i aria-hidden="true" class="fa fa-google-plus"></i></a>',
                        '<a class="twitter" href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a>',
                        '<a class="linkedin" href="#"><i aria-hidden="true" class="fa fa-linkedin"></i></a>',
                        '<a class="pinterest" href="#"><i aria-hidden="true" class="fa fa-pinterest-p"></i></a>',
                        '<a class="youtube" href="#"><i aria-hidden="true" class="fa fa-youtube"></i></a>',
                    '</div>',
                '</div>',
            '</div>',
        '</div>';
        //<!-- .about-author -->';

    }

}