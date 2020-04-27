<?php

class data_provincia extends data
{

    public $id;

    public $regione_id;

    public $provincia;

    function __construct( $data=null )
    {

        if( isset( $data ) )
        {
            if( isset( $data['id'] ) )         $this->id         = $data['id'];
            if( isset( $data['regione_id'] ) ) $this->regione_id = $data['regione_id'];
            if( isset( $data['provincia'] ) )  $this->provincia  = $data['provincia'];
        }

    }

}