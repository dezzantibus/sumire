<?php

class handler_admin_news_category_new extends handler
{

    public function run()
    {

        // Render page
        $page = new layout_admin_news_category_form( new data_news_category() );
        $page->render();

    }

}