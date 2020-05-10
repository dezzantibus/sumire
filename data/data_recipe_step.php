<?php

class data_recipe_step extends data
{

    public $id;

    public $recipe_entry_id;

    public $description;

    public $image;

    function __construct( $data=null )
    {

        if( isset( $data ) )
        {

            if( isset( $data['id'] ) )              $this->id              = $data['id'];
            if( isset( $data['recipe_entry_id'] ) ) $this->recipe_entry_id = $data['recipe_entry_id'];
            if( isset( $data['description'] ) )     $this->description     = $data['description'];
            if( isset( $data['image'] ) )           $this->image           = $data['image'];

        }

    }

}