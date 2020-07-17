<?php

class handler_admin_recipe_entry_save extends handler_action
{

    public function run()
    {

        // check data

        if( message::containsErrors() )
        {

            if( empty( $this->data['id'] ) )
            {
                $entry = new data_recipe_entry();
            }
            else
            {
                $entry = model_recipe_entry::getById( $this->data['id'] );
                $entry->steps = model_recipe_step::getByRecipeId( $entry->id );
                $entry->ingredients = model_recipe_ingredient::getForRecipe( $entry->id );
            }

            $categories = model_recipe_category::getFullList();

            $ingredient_list = model_recipe_ingredient::getFullList();

            $page = new layout_admin_recipe_entry_form( $entry, $categories, $ingredient_list );
            $page->render();
        }
        else
        {

            $recipe = new data_recipe_entry( $this->data );

            if( empty( $recipe->id ) )
            {
                $recipe->id = model_recipe_entry::create( $recipe );
            }
            else
            {
                model_recipe_entry::update( $recipe );
            }

            // save ingredients
            model_recipe_ingredient::deleteForRecipe( $recipe->id );

            foreach( $this->data['ingredient'] as $ingredient )
            {
                if( !empty( $ingredient['quantity'] ) )
                {
                    $ingredient['recipe_entry_id'] = $recipe->id;
                    model_recipe_ingredient::create( new data_recipe_ingredient( $ingredient ) );
                }
            }

            // save steps
            foreach( $this->data['step'] as $id => $step )
            {
                if( !empty( $step['description'] ) )
                {
                    $step['recipe_entry_id'] = $recipe->id;

                    if( $id < 100 )
                    {
                        // new step
                        model_recipe_step::create( new data_recipe_step( $step ) );
                    }
                    else
                    {
                        // update step
                        model_recipe_step::update( new data_recipe_step( $step ) );
                    }
                }
            }

            header("Location: /recipe/entry");

        }

    }

}