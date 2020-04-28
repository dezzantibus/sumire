<?php

class handler_admin_news_category_edit extends handler
{

    public function run()
    {

        // Render page
        $page = new layout_admin_news_category_form( model_news_category::getById( $_GET['id'] ) );
        $page->render();

    }

}