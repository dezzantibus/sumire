<?php

class handler_admin_recipe_category_list extends handler
{

    public function run()
    {

        // Render page
        $page = new layout_admin_recipe_category_list( model_recipe_category::getFullList() );
        $page->render();

    }

}