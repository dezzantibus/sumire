<?php

class data_recipe_entry extends data
{

    public $id;

    public $recipe_category_id;

    public $user_id;

    public $homepage;

    public $name;

    public $description;

    public $notes;

    public $date;

    public $image;

    public $steps;

    function __construct( $data=null, $steps=null )
    {

        if( isset( $data ) )
        {

            if( isset( $data['id'] ) )                 $this->id                 = $data['id'];
            if( isset( $data['recipe_category_id'] ) ) $this->recipe_category_id = $data['recipe_category_id'];
            if( isset( $data['user_id'] ) )            $this->user_id            = $data['user_id'];
            if( isset( $data['homepage'] ) )           $this->homepage           = $data['homepage'];
            if( isset( $data['name'] ) )               $this->name               = $data['name'];
            if( isset( $data['description'] ) )        $this->description        = $data['description'];
            if( isset( $data['notes'] ) )              $this->notes              = $data['notes'];
            if( isset( $data['date'] ) )               $this->date               = $data['date'];
            if( isset( $data['image'] ) )              $this->image              = $data['image'];

            if( isset( $steps ) ) $this->steps = $steps;

        }

    }

}