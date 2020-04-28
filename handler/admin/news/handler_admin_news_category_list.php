<?php

class handler_admin_news_category_list extends handler
{

    public function run()
    {

        // Render page
        $page = new layout_admin_news_category_list( model_news_category::getFullList() );
        $page->render();

    }

}