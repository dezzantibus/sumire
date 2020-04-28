<?php

class handler_admin_news_article_new extends handler
{

    public function run()
    {

        // Render page
        $page = new layout_admin_news_article_form();
        $page->render();

    }

}