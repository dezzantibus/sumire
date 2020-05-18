<?php

class layout_elements_homebox_rows_of_3 extends layout
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
        //<!-- Left Sidebar Start -->
        '<div class="fbt-vc-inner nude large clearfix">',
            '<div class="theiaStickySidebar">',
                '<div class="widget fbt-vc-hr-inner">',
                    '<div class="title-wrapper border-6">',
                        '<h2><span class="color-6">', $this->category->category, '</span></h2>',
                    '</div>',
                    '<div class="post-col-left">',
                        '<div class="row">';


                            if( !$this->category->homepage_articles->isEmpty() ) $this->itemBox();
                            if( !$this->category->homepage_articles->isEmpty() ) $this->itemBox();
                            if( !$this->category->homepage_articles->isEmpty() ) $this->itemBox();
                            if( !$this->category->homepage_articles->isEmpty() ) $this->itemBox();
                            if( !$this->category->homepage_articles->isEmpty() ) $this->itemBox();
                            if( !$this->category->homepage_articles->isEmpty() ) $this->itemBox();

                        echo
                        '</div>',
                    '</div>',
                '</div>',
            '</div>',
        '</div>';
        //<!-- Left Sidebar End -->

    }


    private function itemBox()
    {

        /** @var data_news_article $article */
        $article = $this->category->homepage_articles->first();

        echo
        '<div class="fbt-col-lg-12 col-md-4 col-xs-6 padding-reset">',
            '<div class="post-item clearfix">',
                '<div class="img-thumb">',
                    '<a href="', $article->link(), '"><div class="fbt-resize" style="background-image: url(', constant::IMAGES_DOMAIN, $article->image1, ')"></div></a>',
                '</div>',
                '<div class="post-content">',
                    '<a href="', $article->link(), '"><h3>', $article->title, '</h3></a>',
                    '<div class="post-info">',
                        '<span>', $article->dateForDisplay( $article->date ), '</span>',
                    '</div>',
                '</div>',
            '</div>',
        '</div>';

    }

}