<?php

class handler_news_article extends handler
{

    public function run()
    {

        // Render page
        $page = new layout_news_article(
            $this->sidebarData(),
            model_news_article::getLatest(),
            model_news_category::getFullList(),
            model_news_article::getByTitle( $_GET['article'] )
        );
        $page->render();

    }

}