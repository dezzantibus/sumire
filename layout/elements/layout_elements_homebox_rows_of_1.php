<?php

class layout_elements_homebox_rows_of_1 extends layout
{

    /** @var  data_news_category */
    private $category;

    function __construct( data_news_category $category )
    {
        $this->category = $category;
    }

    function render()
    {

        //<!-- Large List Start -->
        echo
        '<div class="fbt-vc-inner nude large clearfix">',
            '<div class="title-wrapper border-5">',
                '<h2><span class="color-5">', $this->category->category, '</span></h2>',
            '</div>';

            $this->element();
            $this->element();
            $this->element();
            $this->element();
            $this->element();

        echo '</div>';
        //<!-- Large List End -->

    }

    private function element()
    {

        /** @var data_news_article $article */
        $article = $this->category->homepage_articles->first();

        echo
        '<div class="post-item small">',
                '<div class="row">',
                    '<div class="col-md-4">',
                        '<div class="img-thumb">',
                            '<a href="', $article->link(), '"><div class="fbt-resize" style="background-image: url(', constant::IMAGES_DOMAIN, $article->image1, ')"></div></a>',
                        '</div>',
                    '</div>',
                    '<div class="col-md-8 padding-left-5">',
                        '<div class="post-content">',
                            '<a href="', $article->link(), '"><h3>', $article->title, '</h3></a>',
                            '<div class="post-info clearfix">',
                                //'<span><a href="#">Nick Nam</a></span>',
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

}