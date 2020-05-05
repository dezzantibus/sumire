<?php

class handler_admin_recipe_category_form extends handler
{

    public function run()
    {

        if( empty( $_GET['id'] ) )
        {
            $category = new data_recipe_category();
        }
        else
        {
            $category = model_recipe_category::getById( $_GET['id'] );
        }

        // Render page
        $page = new layout_admin_recipe_category_form( $category );
        $page->render();

    }

}