<?php

class layout_admin_homepage extends layout_admin_page
{

    public function __construct()
    {

        $this->title = 'Sumire - admin';

        $this->addChild( new layout_admin_menu() );

        $params = array(
            'id'    => 'page-wrapper',
            'class' => 'gray-bg'
        );
        $page_wrapper = $this->addChild( new layout_html_div( $params ) );


        $page_wrapper->addChild( new layout_admin_header() );
        $page_wrapper->addChild( new layout_admin_dashboard() );
        $page_wrapper->addChild( new layout_admin_footer() );


    }

}