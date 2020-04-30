<?php

class handler_admin_news_article_edit extends handler
{

    public function run()
    {

        // Render page
        $page = new layout_admin_news_article_form(
            model_news_article::getById( $_GET['id'] ),
            model_news_category::getFullList( 'category' )
        );
        $page->render();

    }

}