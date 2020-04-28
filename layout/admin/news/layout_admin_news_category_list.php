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

        $params = array(
            'class' => 'wrapper wrapper-content animated fadeInRight'
        );
        $wrapper = $page_wrapper->addChild( new layout_html_div( $params ) );

        $params = array(
            'class' => 'row'
        );
        $row = $wrapper->addChild( new layout_html_div( $params ) );

        $params = array(
            'class' => 'col-lg-12'
        );
        $col = $row->addChild( new layout_html_div( $params ) );

        $params = array(
            'class' => 'ibox float-e-margins'
        );
        $ibox = $col->addChild( new layout_html_div( $params ) );

        $params = array(
            'class' => 'ibox-content'
        );
        $ibox_content = $ibox->addChild( new layout_html_div( $params ) );

        $ibox_content->addChild( new layout_admin_new_button( 'New category', '/news/category/new.html' ) );

        $page_wrapper->addChild( new layout_admin_footer() );


    }

}