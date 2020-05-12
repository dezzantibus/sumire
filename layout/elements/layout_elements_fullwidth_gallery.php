<?php
/**
 * Created by PhpStorm.
 * User: zante
 * Date: 08/06/2015
 * Time: 10:30
 */


class layout_elements_fullwidth_gallery extends layout
{

    private $category;

    function __construct( data_news_category $category )
    {
        $this->category = $category;
    }

    public function render()
    {

        echo
        //<!-- Big Gallery Start -->
        '<div class="gallery bgallery clearfix">',
            '<div class="gallery-img clearfix">';

                $this->element();
                $this->element();
                $this->element();
                $this->element();

            echo
            '</div>',
        '</div>';
        //<!-- Big Gallery End -->

    }

    private function element()
    {
        /** @var $article data_news_article */
        $article = $this->category->homepage_articles->first();

        echo
        '<div class="col-md-3 col-xs-6 padding-1">',
            '<div class="post-item clearfix">',
                '<div class="img-thumb">',
                    '<a href="', $article->link(), '">',
                        '<div class="fbt-resize" style="background-image: url(', constant::IMAGES_DOMAIN, $article->image1, ')"></div>',
                    '</a>',
                    '<div class="img-credits">',
                        '<a class="post-category" href="', $article->category->link(), '">', $article->category->category, '</a>',
                        '<a href="', $article->link(), '"><h3>', $article->title, '</h3></a>',
                        '<div class="post-info clearfix">',
                            //'<span><a href="#">Mark Spenser</a></span>',
                            //'<span>-</span>',
                            '<span>', $article->dateForDisplay( $article->date ), '</span>',
                        '</div>',
                    '</div>',
                '</div>',
            '</div>',
        '</div>';

    }

}