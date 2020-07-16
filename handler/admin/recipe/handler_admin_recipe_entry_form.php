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
            $entry->ingredients = model_recipe_ingredient::getForRecipe( $entry->id );
        }

        $categories = model_recipe_category::getFullList();

        $ingredient_list = model_recipe_ingredient::getFullList();

        // Render page
        $page = new layout_admin_recipe_entry_form( $entry, $categories, $ingredient_list );
        $page->render();

    }

}