<?php

class handler_admin_blog_article_delete extends handler_action
{

    public function run()
    {

        model_blog_article::delete( $_GET['id'], session::$user->id );
        header("Location: /blog/category");

    }

}