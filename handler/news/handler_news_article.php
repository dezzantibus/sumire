<?php

class handler_news_article extends handler
{

    public function run()
    {

        $article = model_news_article::getByTitle( $_GET['article'] );

        model_news_article::recordHit( $article->id );

        // Render page
        $page = new layout_news_article(
            $this->sidebarData(),
            model_news_article::getLatest(),
            model_news_category::getFullList(),
            $article
        );
        $page->render();

    }

}