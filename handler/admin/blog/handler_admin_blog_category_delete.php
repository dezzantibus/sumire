<?php

class handler_admin_blog_category_delete extends handler_action
{

    public function run()
    {

        model_blog_category::delete( $_GET['id'] );
        header("Location: /blog/category");

    }

}