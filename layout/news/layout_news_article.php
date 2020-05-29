<?php

class layout_news_article extends layout_page
{

    public function __construct
    (
        data_sidebar      $sidebar,
        data_array        $latest,
        data_array        $categories,
        data_news_article $article
    )
    {

        $this->title = $article->title . ' - すみれ';

        $this->metatags =   '<meta name="keywords" content="' . $article->title . '" />' .
                            '<meta name="description" content="' . $article->title . '" />' .
                            '<meta property="og:title" content="' . $article->title . '">' .
                            '<meta property="og:description" content="' . $article->short . '">' .
                            '<meta property="og:image" content="' . constant::IMAGES_DOMAIN . $article->image1 . '">' .
                            '<meta property="og:url" content="' . $article->link() . '">' .
                            '<meta name="twitter:card" content="' . constant::IMAGES_DOMAIN . $article->image1 . '">' .
                            '<meta property="og:site_name" content="すみれ">';

        $this->addChild( new layout_header( $latest, $categories ) );

        $params = array(
            'id'    => 'main-content',
            'class' => 'homepage_3 clearfix'
        );
        $main_content = $this->addChild( new layout_html_section( $params ) );

        $params = array(
            'class' => 'container'
        );
        $container = $main_content->addChild( new layout_html_div( $params ) );

        $params = array(
            'class' => 'row'
        );
        $row = $container->addChild( new layout_html_div( $params ) );

        $params = array(
            'class' => 'outer-wrapper clearfix'
        );
        $outer_wrapper = $row->addChild( new layout_html_div( $params ) );

        $params = array(
            'class' => 'fbt-col-lg-9 col-md-8 col-sm-6 main-wrapper clearfix'
        );
        $main_wrapper = $outer_wrapper->addChild( new layout_html_div( $params ) );

        $params = array(
            'class' => 'row'
        );
        $row = $main_wrapper->addChild( new layout_html_div( $params ) );

        $content = $row->addChild( new layout_news_article_content( $article ) );

        $outer_wrapper->addChild( new layout_elements_sidebar_1( $sidebar ) );


        $params = array(
            'class' => 'advertisement bottom clearfix'
        );
        $advertisment = $row->addChild( new layout_html_div( $params ) );

        // here we fill the ads box
        // most likely just picked from a dedicated class

//        $row->addChild( new layout_elements_fullwidth_gallery() );

        /*
         * this outer wrapper we don't add for now. Maybe when we have more content

        $params = array(
            'class' => 'outer-wrapper clearfix'
        );
        $outer_wrapper = $row->addChild( new layout_html_div( $params ) );

        // here we fill the outer wrapper
        */


        $this->addChild( new layout_footer() );

    }

}