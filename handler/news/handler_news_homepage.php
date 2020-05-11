<?php

class handler_news_homepage extends handler
{

    public function run()
    {

        // Render page
        $page = new layout_news_homepage(
            model_news_article::getLatest(),
            model_news_category::getFullList(),
            model_news_article::getCarouselList()
        );
        $page->render();

    }

}