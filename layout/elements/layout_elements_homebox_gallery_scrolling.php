<?php

class layout_elements_homebox_gallery_scrolling extends layout
{

    /** @var  data_news_category */
    private $category;

    function __construct( data_news_category $category )
    {
        $this->category = $category;
    }

    function render()
    {
        echo
        //<!-- Main Carousel Start -->
        '<div class="main-carousel">',
            '<div class="title-wrapper border-6">',
                '<h2><span class="color-6">', $this->category->category, '</span></h2>',
            '</div>',
            '<div class="carousel-content-box owl-wrapper clearfix">',
                '<div class="owl-carousel" data-num="3">';

                    if( !$this->category->homepage_articles->isEmpty() ) $this->itemBox();
                    if( !$this->category->homepage_articles->isEmpty() ) $this->itemBox();
                    if( !$this->category->homepage_articles->isEmpty() ) $this->itemBox();
                    if( !$this->category->homepage_articles->isEmpty() ) $this->itemBox();
                    if( !$this->category->homepage_articles->isEmpty() ) $this->itemBox();
                    if( !$this->category->homepage_articles->isEmpty() ) $this->itemBox();

                echo
                '</div>',
            '</div>',
        '</div>';
        //<!-- Main Carousel End -->

    }

    private function itemBox()
    {

        /** @var data_news_article $article */
        $article = $this->category->homepage_articles->first();

        echo
        '<div class="item fbt-hr-crs">',
            '<div class="post-item clearfix">',
                '<div class="img-thumb">',
                    '<a href="', $article->link(), '"><div class="fbt-resize" style="background-image: url(', constant::IMAGES_DOMAIN, $article->image1, ')"></div></a>',
                    '<div class="img-credits">',
                        '<h3>', $article->title, '</h3>',
                        '<div class="post-info">',
                            '<span>', $article->dateForDisplay( $article->date ), '</span>',
                        '</div>',
                    '</div>',
                '</div>',
            '</div>',
        '</div>';

    }

}