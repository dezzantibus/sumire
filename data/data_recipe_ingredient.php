<?php

class data_recipe_ingredient extends data
{

    public $recipe_entry_id;

    public $recipe_ingredient_id;

    public $quantity;

    function __construct( $data=null, $steps=null, $ingredients=null )
    {

        if( isset( $data ) )
        {

            if( isset( $data['recipe_entry_id'] ) )      $this->recipe_entry_id      = $data['recipe_entry_id'];
            if( isset( $data['recipe_ingredient_id'] ) ) $this->recipe_ingredient_id = $data['recipe_ingredient_id'];
            if( isset( $data['quantity'] ) )             $this->quantity             = $data['quantity'];

        }

    }

}