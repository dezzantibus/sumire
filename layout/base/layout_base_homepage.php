<?php

class layout_base_homepage extends layout_page
{

    public function __construct()
    {

        $this->title = 'すみれ';

        $this->addChild( new layout_header() );
        $this->addChild( new layout_slide_1() );


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

        // here we fill the outer wrapper

        $params = array(
            'class' => 'advertisement bottom clearfix'
        );
        $advertisment = $row->addChild( new layout_html_div( $params ) );

        // here we fill the ads box

        $row->addChild( new layout_elements_fullwidth_gallery() );

        // here we fill the gallery

        $params = array(
            'class' => 'outer-wrapper clearfix'
        );
        $outer_wrapper = $row->addChild( new layout_html_div( $params ) );

        // here we fill the outer wrapper



        $this->addChild( new layout_footer() );

    }

}