<?php

class handler_admin_recipe_entry_list extends handler
{

    public function run()
    {

        // Render page
        $page = new layout_admin_recipe_entry_list( model_recipe_entry::getFullList( $_GET['action'] ) );
        $page->render();

    }

}