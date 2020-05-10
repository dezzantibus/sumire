<?php

class layout_admin_recipe_entry_list extends layout_admin_page
{

    public function __construct( data_array $articles )
    {

        $this->title = 'Sumire - Recipe entry admin';

        $this->addChild( new layout_admin_menu( 'recipe', 'entry' ) );

        $params = array(
            'id'    => 'page-wrapper',
            'class' => 'gray-bg'
        );
        $page_wrapper = $this->addChild( new layout_html_div( $params ) );

        $page_wrapper->addChild( new layout_admin_header( 'Recipes - Entries' ) );

        $page_box = $page_wrapper->addChild( new layout_admin_page_content_frame() );

        $page_box->addChild( new layout_admin_new_button( 'New entry', '/recipe/entry/new' ) );

        while( !$articles->isEmpty() )
        {
            $article = $articles->first();
            $page_box->addChild( new layout_admin_list_element(
                $article->title,
                '/recipe/entry/edit/' . $article->id,
                '/recipe/entry/delete/' . $article->id
            ) );
        }

        $page_wrapper->addChild( new layout_admin_footer() );

    }

}