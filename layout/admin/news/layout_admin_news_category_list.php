<?php

class layout_admin_news_category_list extends layout_admin_page
{

    public function __construct()
    {

        $this->title = 'Sumire - admin - News';

        $this->addChild( new layout_admin_menu( 'news', 'categories' ) );

        $params = array(
            'id'    => 'page-wrapper',
            'class' => 'gray-bg'
        );
        $page_wrapper = $this->addChild( new layout_html_div( $params ) );

        $page_wrapper->addChild( new layout_admin_header( 'News - Categories' ) );

        $page_box = $page_wrapper->addChild( new layout_admin_page_content_frame() );

        $page_box->addChild( new layout_admin_new_button( 'New category', '/news/category/new' ) );


        /**
         *
         * HERE STILL NEEDS TO GO THE ACTUAL CATEGORY LIST
         *
         */


        $page_wrapper->addChild( new layout_admin_footer() );


    }

}