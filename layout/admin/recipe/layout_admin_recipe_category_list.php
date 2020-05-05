<?php

class layout_admin_recipe_category_list extends layout_admin_page
{

    public function __construct( data_array $categories )
    {

        $this->title = 'Sumire - Recipe category admin';

        $this->addChild( new layout_admin_menu( 'recipe', 'categories' ) );

        $params = array(
            'id'    => 'page-wrapper',
            'class' => 'gray-bg'
        );
        $page_wrapper = $this->addChild( new layout_html_div( $params ) );

        $page_wrapper->addChild( new layout_admin_header( 'Recipe - Categories' ) );

        $page_box = $page_wrapper->addChild( new layout_admin_page_content_frame() );

        $page_box->addChild( new layout_admin_new_button( 'New category', '/recipe/category/new' ) );

        while( !$categories->isEmpty() )
        {
            $category = $categories->first();
            $page_box->addChild( new layout_admin_list_element(
                $category->category,
                '/recipe/category/edit/' . $category->id,
                '/recipe/category/delete/' . $category->id
            ) );
        }

        $page_wrapper->addChild( new layout_admin_footer() );

    }

}