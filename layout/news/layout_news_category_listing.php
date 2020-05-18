<?php

class layout_news_category_listing extends layout
{

    /** @var  data_news_category */
    private $articles;

    function __construct( data_array $articles )
    {
        $this->articles = $articles;
    }

    function render()
    {

        //<!-- Horizontal Mag Gallery Start -->
        echo
        '<div class="row">';

            if( !$this->articles->isEmpty() ) $this->itemBox();
            if( !$this->articles->isEmpty() ) $this->itemBox();
            if( !$this->articles->isEmpty() ) $this->itemBox();

        echo
        '</div><div class="row">';

            if( !$this->articles->isEmpty() ) $this->itemBox();
            if( !$this->articles->isEmpty() ) $this->itemBox();
            if( !$this->articles->isEmpty() ) $this->itemBox();

        echo
        '</div><div class="row">';

            if( !$this->articles->isEmpty() ) $this->itemBox();
            if( !$this->articles->isEmpty() ) $this->itemBox();
            if( !$this->articles->isEmpty() ) $this->itemBox();

        echo
        '</div><div class="row">';

            if( !$this->articles->isEmpty() ) $this->itemBox();
            if( !$this->articles->isEmpty() ) $this->itemBox();
            if( !$this->articles->isEmpty() ) $this->itemBox();

        echo
        '</div>';


    }

    private function itemBox()
    {

        /** @var data_news_article $article */
        $article = $this->articles->first();

        echo
        '<div class="col-md-4 col-sm-12 col-xs-6 fbt-vc-inner post-grid clearfix">',
                '<div class="post-item clearfix">',
                    '<div class="img-thumb">',
                        '<a href="', $article->link(), '"><div class="fbt-resize" style="background-image: url(', constant::IMAGES_DOMAIN, $article->image1, ')"></div></a>',
                    '</div>',
                    '<div class="post-content">',
                        '<a href="', $article->link(), '"><h3>', $article->title, '</h3></a>',
                        '<div class="post-info clearfix">',
//                            '<span><a href="#">John Doe</a></span>',
//                            '<span>-</span>',
                            '<span>', $article->dateForDisplay( $article->date ), '</span>',
//                            '<span>-</span>',
//                            '<span class="rating">',
//                                '<i class="fa fa-star"></i>',
//                                '<i class="fa fa-star"></i>',
//                                '<i class="fa fa-star"></i>',
//                                '<i class="fa fa-star"></i>',
//                                '<i class="fa fa-star"></i>',
//                            '</span>',
                        '</div>',
                    '</div>',
                '</div>',
            '</div>';

    }

}