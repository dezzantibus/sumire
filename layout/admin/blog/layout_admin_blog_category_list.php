<?php

class layout_admin_blog_category_list extends layout_admin_page
{

    public function __construct( data_array $categories )
    {

        $this->title = 'Sumire - Blog category admin';

        $this->addChild( new layout_admin_menu( 'blog', 'categories' ) );

        $params = array(
            'id'    => 'page-wrapper',
            'class' => 'gray-bg'
        );
        $page_wrapper = $this->addChild( new layout_html_div( $params ) );

        $page_wrapper->addChild( new layout_admin_header( 'Blog - Categories' ) );

        $page_box = $page_wrapper->addChild( new layout_admin_page_content_frame() );

        $page_box->addChild( new layout_admin_new_button( 'New category', '/blog/category/new' ) );

        while( !$categories->isEmpty() )
        {
            $category = $categories->first();
            $page_box->addChild( new layout_admin_list_element(
                $category->category,
                '/blog/category/edit/' . $category->id,
                '/blog/category/delete/' . $category->id
            ) );
        }

        $page_wrapper->addChild( new layout_admin_footer() );

    }

}