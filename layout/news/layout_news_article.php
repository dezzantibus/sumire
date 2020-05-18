<?php

class layout_news_category extends layout_page
{

    public function __construct
    (
        data_array $latest,
        data_array $categories,
        data_news_category $category,
        data_array $articles
    )
    {

        $this->title = 'すみれ';

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

        $content = $row->addChild( new layout_article_content( $params ) );

        $outer_wrapper->addChild( new layout_elements_sidebar_1() );


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