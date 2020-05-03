<?php

class handler_admin_blog_category_edit extends handler
{

    public function run()
    {

        // Render page
        $page = new layout_admin_blog_category_form( model_blog_category::getById( $_GET['id'] ) );
        $page->render();

    }

}