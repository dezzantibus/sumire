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
        echo
        //<!-- Gallery Start -->
        '<div class="gallery">',
            '<div class="title-wrapper border-4">',
                '<h2><span class="color-4">', $this->category->category, '</span></h2>',
            '</div>',
            '<div class="row">',
                '<div class="gallery-img">';

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
        //<!-- Gallery End -->

    }

    private function itemBox()
    {

        /** @var data_news_article $article */
        $article = $this->category->homepage_articles->first();

        echo
        '<div class="col-md-4 col-xs-6 padding-1">',
            '<div class="post-item clearfix">',
                '<div class="img-thumb">',
                    '<a href="', $article->link(), '"><div class="fbt-resize" style="background-image: url(', constant::IMAGES_DOMAIN, $article->image1, ')"></div></a>',
                    '<div class="img-credits">',
                        '<h3>', $article->title, '</h3>',
                        '<div class="post-info clearfix">',
                            '<span>', $article->dateForDisplay( $article->date ), '</span>',
                        '</div>',
                    '</div>',
                '</div>',
            '</div>',
        '</div>';

    }

}