<?php

class handler_admin_news_article_list extends handler
{

    public function run()
    {

        // Render page
        $page = new layout_admin_news_article_list( model_news_article::getFullList( $_GET['action'] ) );
        $page->render();

    }

}