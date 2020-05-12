<?php

class layout_news_homepage extends layout_page
{

    public function __construct
    (
        data_array $latest,
        data_array $categories,
        data_array $carousel,
        data_array $homepage_news
    )
    {

        $this->title = 'すみれ';

        $this->addChild( new layout_header( $latest, $categories ) );

        $this->addChild( new layout_elements_slide_1( $carousel ) );

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
            'class' => 'ofbt-col-lg-9 col-md-8 col-sm-6 main-wrapper clearfix'
        );
        $main_wrapper = $outer_wrapper->addChild( new layout_html_div( $params ) );

        $params = array(
            'class' => 'row'
        );
        $row = $main_wrapper->addChild( new layout_html_div( $params ) );

        $params = array(
            'class' => 'fbt-col-lg-9 col-md-12'
        );
        $content = $row->addChild( new layout_html_div( $params ) );

        /** @var $home_box data_news_category */
        while( $home_box = $homepage_news->first() )
        {
            $type = $home_box->homepage_box;
            $content->addChild( new $type( $home_box ) );
        }

/*
        $content->addChild( new layout_elements_homebox_2_categories_equal() );
        $content->addChild( new layout_elements_homebox_gallery_static() );
        $content->addChild( new layout_elements_homebox_1big_4side() );
        $content->addChild( new layout_elements_homebox_gallery_scrolling() );
        $content->addChild( new layout_elements_homebox_1big_4under() );

        // $content->addChild add advert

        $content->addChild( new layout_elements_homebox_2_categories_different() );
        $content->addChild( new layout_elements_homebox_rows_of_1() );
        $content->addChild( new layout_elements_homebox_rows_of_3() );
*/

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