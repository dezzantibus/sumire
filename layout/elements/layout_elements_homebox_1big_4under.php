<?php

class layout_elements_homebox_1big_4under extends layout
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
        '<div class="fbt-vc-inner nude large clearfix">',
            '<div class="title-wrapper border-8">',
                '<h2><span class="color-8">', $this->category->category, '</span></h2>',
            '</div>';

            if( !$this->category->homepage_articles->isEmpty() ) $this->bigBox();

            echo
            '<div class="row">',
                '<div class="gallery-img">';

                    if( !$this->category->homepage_articles->isEmpty() ) $this->smallBox();
                    if( !$this->category->homepage_articles->isEmpty() ) $this->smallBox();
                    if( !$this->category->homepage_articles->isEmpty() ) $this->smallBox();
                    if( !$this->category->homepage_articles->isEmpty() ) $this->smallBox();

                echo
                '</div>',
            '</div>',
        '</div>';
        //<!-- Horizontal Mag Gallery End -->

    }

    private function bigBox()
    {

        /** @var data_news_article $article */
        $article = $this->category->homepage_articles->first();

        echo
        '<div class="post-item big sec clearfix">',
            '<div class="row">',
                '<div class="col-md-6">',
                    '<div class="img-thumb">',
                        '<a href="', $article->link(), '"><div class="fbt-resize" style="background-image: url(', constant::IMAGES_DOMAIN, $article->image1, ')"></div></a>',
                    '</div>',
                '</div>',
                '<div class="col-md-6">',
                    '<div class="post-content">',
                        '<a href="', $article->link(), '"><h3>', $article->title, '</h3></a>',
                        '<div class="post-info clearfix">',
                            //'<span><a href="#">Mark Spenser</a></span>',
                            //'<span>-</span>',
                            '<span>', $article->dateForDisplay( $article->date ), '</span>',
                        '</div>',
                        '<div class="text-content">',
                            '<p>', $article->short, '</p>',
                        '</div>',
                    '</div>',
                '</div>',
            '</div>',
        '</div>';


    }

    private function smallBox()
    {

        /** @var data_news_article $article */
        $article = $this->category->homepage_articles->first();

        echo
        '<div class="col-md-3 col-xs-6 padding-5">',
            '<div class="post-item clearfix">',
                '<div class="img-thumb">',
                    '<a href="', $article->link(), '"><div class="fbt-resize" style="background-image: url(', constant::IMAGES_DOMAIN, $article->image1, ')"></div></a>',
                    '<div class="img-credits">',
                        '<a href="', $article->link(), '"><h3>', $article->title, '</h3></a>',
                        '<div class="post-info clearfix">',
                            '<span>', $article->dateForDisplay( $article->date ), '</span>',
                        '</div>',
                    '</div>',
                '</div>',
            '</div>',
        '</div>';


    }

}