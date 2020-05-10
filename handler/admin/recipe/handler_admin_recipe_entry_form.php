<?php

class handler_admin_recipe_entry_form extends handler
{

    public function run()
    {

        if( empty( $_GET['id'] ) )
        {
            $entry = new data_recipe_entry();
        }
        else
        {
            $entry = model_recipe_entry::getById( $_GET['id'] );
            $entry->steps = model_recipe_step::getByRecipeId( $entry->id );
        }

        $categories = model_recipe_category::getFullList();

        // Render page
        $page = new layout_admin_recipe_entry_form( $entry, $categories );
        $page->render();

    }

}