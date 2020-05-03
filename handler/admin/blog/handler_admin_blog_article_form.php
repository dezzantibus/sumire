<?php

class handler_admin_blog_article_form extends handler
{

    public function run()
    {

        if( empty( $_GET['id'] ) )
        {
            $article = new data_blog_article();
        }
        else
        {
            $article = model_blog_article::getById( $_GET['id'] );
        }

        // Render page
        $page = new layout_admin_blog_article_form(
            $article,
            model_blog_category::getFullList( 'category' )
        );
        $page->render();

    }

}