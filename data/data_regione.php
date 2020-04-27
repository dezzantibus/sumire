<?php

class data_regione extends data
{

    public $id;

    public $regione;

    function __construct( $data=null )
    {

        if( isset( $data ) )
        {
            if( isset( $data['id'] ) )      $this->id      = $data['id'];
            if( isset( $data['regione'] ) ) $this->regione = $data['regione'];
        }

    }

}