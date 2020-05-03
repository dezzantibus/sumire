<?php

class handler_admin_news_article_form extends handler
{

    public function run()
    {

        if( empty( $_GET['id'] ) )
        {
            $article = new data_news_article();
        }
        else
        {
            $article = model_news_article::getById( $_GET['id'] );
        }

        // Render page
        $page = new layout_admin_news_article_form(
            $article,
            model_news_category::getFullList( 'category' )
        );
        $page->render();

    }

}