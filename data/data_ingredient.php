<?php

class data_ingredient extends data
{

    public $id;

    public $english;

    public $japanese;

    function __construct( $data=null, $steps=null, $ingredients=null )
    {

        if( isset( $data ) )
        {

            if( isset( $data['id'] ) )       $this->id       = $data['id'];
            if( isset( $data['english'] ) )  $this->english  = $data['english'];
            if( isset( $data['japanese'] ) ) $this->japanese = $data['japanese'];

        }

    }

}