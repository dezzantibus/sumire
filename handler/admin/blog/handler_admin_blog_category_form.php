<?php

class handler_admin_blog_category_form extends handler
{

    public function run()
    {

        if( empty( $_GET['id'] ) )
        {
            $category = new data_blog_category();
        }
        else
        {
            $category = model_blog_category::getById( $_GET['id'] );
        }

        // Render page
        $page = new layout_admin_blog_category_form( $category );
        $page->render();

    }

}