<?php

class data_event_category extends data
{

    public $id;

    public $category;

    function __construct( $data=null )
    {

        if( isset( $data ) )
        {
            if( isset( $data['id'] ) )       $this->id       = $data['id'];
            if( isset( $data['category'] ) ) $this->category = $data['category'];
        }

    }

}