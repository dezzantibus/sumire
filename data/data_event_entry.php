<?php

class data_event_entry extends data
{

    public $id;

    public $event_category_id;

    public $start;

    public $end;

    public $open;

    public $close;

    public $regione_id;

    public $provincia_id;

    public $address;

    public $name;

    public $description;

    public $google_maps;

    function __construct( $data=null )
    {

        if( isset( $data ) )
        {
            if( isset( $data['id'] ) )                $this->id                = $data['id'];
            if( isset( $data['event_category_id'] ) ) $this->event_category_id = $data['event_category_id'];
            if( isset( $data['start'] ) )             $this->start             = $data['start'];
            if( isset( $data['end'] ) )               $this->end               = $data['end'];
            if( isset( $data['open'] ) )              $this->open              = $data['open'];
            if( isset( $data['close'] ) )             $this->close             = $data['close'];
            if( isset( $data['regione_id'] ) )        $this->regione_id        = $data['regione_id'];
            if( isset( $data['provincia_id'] ) )      $this->provincia_id      = $data['provincia_id'];
            if( isset( $data['address'] ) )           $this->address           = $data['address'];
            if( isset( $data['name'] ) )              $this->name              = $data['name'];
            if( isset( $data['description'] ) )       $this->description       = $data['description'];
            if( isset( $data['google_maps'] ) )       $this->google_maps       = $data['google_maps'];
        }

    }

}