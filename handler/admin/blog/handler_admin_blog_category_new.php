<?php

class handler_admin_blog_category_new extends handler
{

    public function run()
    {

        // Render page
        $page = new layout_admin_blog_category_form( new data_blog_category() );
        $page->render();

    }

}