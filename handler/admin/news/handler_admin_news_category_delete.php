<?php

class handler_admin_news_category_delete extends handler_action
{

    public function run()
    {

        model_news_category::delete( $_GET['id'] );
        header("Location: /news/category");

    }

}