<?php

class layout_admin_recipe_dashboard extends layout_admin_page
{

    public function __construct()
    {

        $this->title = 'Sumire - admin - Recipes';

        $this->addChild( new layout_admin_menu( 'recipe' ) );

        $params = array(
            'id'    => 'page-wrapper',
            'class' => 'gray-bg'
        );
        $page_wrapper = $this->addChild( new layout_html_div( $params ) );


        $page_wrapper->addChild( new layout_admin_header( 'Recipe' ) );



        $page_wrapper->addChild( new layout_admin_footer() );


    }

}