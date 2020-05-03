<?php

class handler_admin_blog_article_list extends handler
{

    public function run()
    {

        // Render page
        $page = new layout_admin_blog_article_list( model_blog_article::getFullList( $_GET['action'] ) );
        $page->render();

    }

}