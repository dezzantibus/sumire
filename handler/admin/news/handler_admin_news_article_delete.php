<?php

class handler_admin_news_article_delete extends handler_action
{

    public function run()
    {

        model_news_article::delete( $_GET['id'] );
        header("Location: /news/category");

    }

}