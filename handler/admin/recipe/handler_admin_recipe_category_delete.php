<?php

class handler_admin_recipe_category_delete extends handler_action
{

    public function run()
    {

        model_recipe_category::delete( $_GET['id'] );
        header("Location: /recipe/category");

    }

}