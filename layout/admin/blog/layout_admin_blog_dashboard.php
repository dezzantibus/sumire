<?php

class layout_admin_blog_dashboard extends layout_admin_page
{

    public function __construct()
    {

        $this->title = 'Sumire - admin - News';

        $this->addChild( new layout_admin_menu( 'blog' ) );

        $params = array(
            'id'    => 'page-wrapper',
            'class' => 'gray-bg'
        );
        $page_wrapper = $this->addChild( new layout_html_div( $params ) );


        $page_wrapper->addChild( new layout_admin_header( 'Blog' ) );



        $page_wrapper->addChild( new layout_admin_footer() );


    }

}