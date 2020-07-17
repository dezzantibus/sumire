<?php

class layout_admin_recipe_entry_form extends layout_admin_page
{

    public function __construct( data_recipe_entry $entry, data_array $categories, data_array $ingredient_list )
    {

        $this->title = 'Sumire - admin - Recipes';

        $this->addChild( new layout_admin_menu( 'recipe', 'entry' ) );

        $params = array(
            'id'    => 'page-wrapper',
            'class' => 'gray-bg'
        );
        $page_wrapper = $this->addChild( new layout_html_div( $params ) );

        if( empty( $entry->id ) )
        {
            $message = 'Recipes - New entry';
        }
        else
        {
            $message= 'Recipes - Edit entry ' . $entry->name;
        }
        $page_wrapper->addChild( new layout_admin_header( $message ) );

        $page_box = $page_wrapper->addChild( new layout_admin_page_content_frame() );

        $form = $page_box->addChild( new layout_admin_form(
            '/recipe/entry/save',
            'form-horizontal',
            'recipe_entry'
        ) );

        $messages = message::getMessages();

        $form->addChild( new layout_admin_form_hidden( 'id', $entry->id ) );
        $form->addChild( new layout_admin_form_hidden( 'user_id', session::$user->id ) );

        $category_dropdown = new data_array();
        while( !$categories->isEmpty() )
        {
            $category = $categories->first();
            $category_dropdown->add( array( 'label' => $category->category_eng, 'value' => $category->id ) );
        }

        $form->addChild( new layout_admin_form_dropdown(
            'recipe_category_id',
            'Category',
            $category_dropdown,
            $entry->recipe_category_id,
            $messages['recipe_category_id']['message']
        ) );

        $homepage = new data_array();
        $homepage->add( array( 'label' => '', 'value' => '1' ) );

        $form->addChild( new layout_admin_form_checkbox(
            'homepage',
            'Homepage',
            $homepage,
            $entry->homepage,
            $messages['homepage']['message']
        ) );

        $form->addChild( new layout_admin_form_text(
            'name',
            'Recipe name',
            $entry->name,
            $messages['name']['message']
        ) );

        $form->addChild( new layout_admin_form_textarea(
            'description',
            'Description',
            $entry->description,
            $messages['description']['message'],
            20
        ) );

        $form->addChild( new layout_admin_form_textarea(
            'notes',
            'Notes',
            $entry->notes,
            $messages['notes']['message'],
            20
        ) );

        $form->addChild( new layout_admin_form_file(
            'image',
            'main image',
            null,
            $messages['image']['message']
        ) );

        $ingredient_dropdown = new data_array();
        while( !$ingredient_list->isEmpty() )
        {
            $ingredient = $ingredient_list->first();
            $ingredient_dropdown->add( array( 'label' => $ingredient->japanese . ' - ' . $ingredient->english, 'value' => $ingredient->id ) );
        }


        if( empty( $entry->id ))
        {
            /**
             * if this is a new recipe, we add a default of 10 ingredients
             * and save only the ones with a quantity. We'll see if these are enough or if we need more
             * We need to remember that these IDs are temporary because here we are inserting
             */
            for( $ing_num=0; $ing_num<10; $ing_num++ )
            {

                $input = 'ingredient[' . $ing_num . '][recipe_ingredient_id]';

                $form->addChild( new layout_admin_form_dropdown(
                    $input,
                    'Ingredient ' . $ing_num,
                    $ingredient_dropdown,
                    null,
                    null
                ) );

                $input = 'ingredient[' . $ing_num . '][quantity]';

                $form->addChild( new layout_admin_form_text(
                    $input,
                    'Quantity',
                    null,
                    null
                ) );

            }

            /**
             * if this is a new recipe, we add a default of 10 steps
             * and save only the ones with a description. We'll see if these are enough or if we need more
             * We need to remember that these IDs are temporary because here we are inserting
             */
            for( $step_num=0; $step_num<10; $step_num++ )
            {

                $input = 'step[' . $step_num . '][description]';

                $form->addChild( new layout_admin_form_textarea(
                    $input,
                    'Step ' . ($step_num + 1),
                    null,
                    $messages[$input]['message'],
                    20
                ) );

                $input = 'step[' . $step_num . '][image]';

                $form->addChild( new layout_admin_form_file(
                    $input,
                    'Image ' . ($step_num + 1),
                    null,
                    $messages[$input]['message']
                ) );

            }
        }
        else
        {
            /**
             * if this is an existing recipe, we add a couple of ingredients at the end
             * and save only the ones with a description.
             * We need to remember that the IDs of the new ingredients are temporary
             * because we are inserting them, while the existing ones are
             * being updated
             */

            $count = 0;

            /** @var  $ingredient data_recipe_ingredient */
            while( $ingredient = $entry->ingredients->first() )
            {

                $count++;

                $input = 'step[' . $count . '][recipe_ingredient_id]';

                $form->addChild( new layout_admin_form_dropdown(
                    $input,
                    'Ingredient ' . $count,
                    $ingredient_dropdown,
                    $ingredient->id,
                    $messages[$input]['message']
                ) );

                $input = 'ingredient[' . $count . '][quantity]';

                $form->addChild( new layout_admin_form_text(
                    $input,
                    'Quantity',
                    $ingredient->quantity,
                    $messages[$input]['message']
                ) );

            }

            /**
             * And here we add the two extra empty ones for addition purposes
             */

            $count++;

            $input = 'ingredient[0][recipe_ingredient_id]';

            $form->addChild( new layout_admin_form_dropdown(
                $input,
                'Ingredient ' . $count,
                $ingredient_dropdown,
                null,
                $messages[$input]['message']
            ) );

            $input = 'ingredient[0][quantity]';

            $form->addChild( new layout_admin_form_text(
                $input,
                'Quantity',
                null,
                $messages[$input]['message']
            ) );

            $count++;

            $input = 'ingredient[1][recipe_ingredient_id]';

            $form->addChild( new layout_admin_form_dropdown(
                $input,
                'Ingredient ' . $count,
                $ingredient_dropdown,
                null,
                $messages[$input]['message']
            ) );

            $input = 'ingredient[1][quantity]';

            $form->addChild( new layout_admin_form_text(
                $input,
                'Quantity',
                null,
                $messages[$input]['message']
            ) );

            /**
             * if this is an existing recipe, we add a couple of steps at the end
             * and save only the ones with a description.
             * We need to remember that the IDs of the new steps are temporary
             * because we are inserting them, while the existing ones are
             * being updated
             */

            $count = 0;

            /** @var  $step data_recipe_step */
            while( $step = $entry->steps->first() )
            {

                $count++;

                $input = 'step[' . $step->id . '][description]';

                $form->addChild( new layout_admin_form_textarea(
                    $input,
                    'Step ' . $count,
                    $step->description,
                    $messages[$input]['message'],
                    20
                ) );

                $input = 'step[' . $step->id . '][image]';

                $form->addChild( new layout_admin_form_file(
                    $input,
                    'Image ' . $count,
                    null,
                    $messages[$input]['message']
                ) );

                $input = 'step[' . $step->id . '][id]';
                $form->addChild( new layout_admin_form_hidden( $input, $step->id ) );

            }

            /**
             * And here we add the two extra empty ones for addition purposes
             */

            $count++;

            $input = 'step[0][description]';

            $form->addChild( new layout_admin_form_textarea(
                $input,
                'Step ' . $count,
                null,
                $messages[$input]['message'],
                20
            ) );

            $input = 'step[0][image]';

            $form->addChild( new layout_admin_form_file(
                $input,
                'Image ' . $count,
                null,
                $messages[$input]['message']
            ) );

            $count++;

            $input = 'step[1][description]';

            $form->addChild( new layout_admin_form_textarea(
                $input,
                'Step ' . $count,
                null,
                $messages[$input]['message'],
                20
            ) );

            $input = 'step[1][image]';

            $form->addChild( new layout_admin_form_file(
                $input,
                'Image ' . $count,
                null,
                $messages[$input]['message']
            ) );

        }

        $page_wrapper->addChild( new layout_admin_footer() );

    }

}