<?php

class handler_news_category extends handler
{

    public function run()
    {

        $category = model_news_category::getByName( $_GET['category'] );

        // Render page
        $page = new layout_news_category(
            $this->sidebarData(),
            model_news_article::getLatest(),
            model_news_category::getFullList(),
            $category,
            model_news_article::getForCategory( $category->id, $_GET['page'] )
        );
        $page->render();

    }

}