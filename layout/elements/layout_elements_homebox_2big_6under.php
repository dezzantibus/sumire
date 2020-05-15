<?php

class layout_elements_homebox_2big_6under extends layout
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
        //<!-- Twin Vertical Mags Start -->
        '<div class="fbt-twin-mag">',
            '<div class="title-wrapper border-2">',
                '<h2><span class="color-2">', $this->category->category, '</span></h2>',
            '</div>',
            '<div class="row">',
                '<div class="col-md-6 fbt-vc-inner clearfix">';

                    if( !$this->category->homepage_articles->isEmpty() ) $this->largeBox();

                    if( !$this->category->homepage_articles->isEmpty() ) $this->smallBox();
                    if( !$this->category->homepage_articles->isEmpty() ) $this->smallBox();
                    if( !$this->category->homepage_articles->isEmpty() ) $this->smallBox();

                echo
                '</div>',
                '<div class="col-md-6 fbt-vc-inner clearfix">';

                    if( !$this->category->homepage_articles->isEmpty() ) $this->largeBox();

                    if( !$this->category->homepage_articles->isEmpty() ) $this->smallBox();
                    if( !$this->category->homepage_articles->isEmpty() ) $this->smallBox();
                    if( !$this->category->homepage_articles->isEmpty() ) $this->smallBox();


                echo
                '</div>',
            '</div>',
        '</div>';
        //<!-- Twin Vertical Mags End -->

    }

    private function largeBox()
    {

        /** @var data_news_article $article */
        $article = $this->category->homepage_articles->first();

        echo
        '<div class="post-item clearfix">',
            '<div class="img-thumb">',
                '<a href="', $article->link(), '"><div class="fbt-resize" style="background-image: url(', constant::IMAGES_DOMAIN, $article->image1, ')"></div></a>',
                '<div class="img-credits">',
                    '<a href="', $article->link(), '"><h3>', $article->title, '</h3></a>',
                    '<div class="post-info clearfix">',
                        //'<span><a href="#">John Doe</a></span>',
                        //'<span>-</span>',
                        '<span>', $article->dateForDisplay( $article->date ), '</span>',
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
        '<div class="post-item clearfix">',
            '<div class="img-thumb">',
                '<a href="', $article->link(), '"><div class="fbt-resize" style="background-image: url(', constant::IMAGES_DOMAIN, $article->image1, ')"></div></a>',
                '<div class="img-credits">',
                    '<a href="', $article->link(), '"><h3>', $article->title, '</h3></a>',
                    '<div class="post-info clearfix">',
                        //'<span><a href="#">John Doe</a></span>',
                        //'<span>-</span>',
                        '<span>', $article->dateForDisplay( $article->date ), '</span>',
                    '</div>',
                '</div>',
            '</div>',
        '</div>';
    }

}