<?php

class handler_admin_blog_category_list extends handler
{

    public function run()
    {

        // Render page
        $page = new layout_admin_blog_category_list( model_blog_category::getFullList() );
        $page->render();

    }

}