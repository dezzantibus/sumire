<?php

class data_news_category extends data
{

    public $id;

    public $category;

    public $order;

    public $homepage;

    public $homepage_box;

    function __construct( $data=null )
    {

        if( isset( $data ) )
        {
            if( isset( $data['id'] ) )           $this->id           = $data['id'];
            if( isset( $data['category'] ) )     $this->category     = $data['category'];
            if( isset( $data['order'] ) )        $this->order        = $data['order'];
            if( isset( $data['homepage'] ) )     $this->homepage     = $data['homepage'];
            if( isset( $data['homepage_box'] ) ) $this->homepage_box = $data['homepage_box'];
        }

    }

    public function link()
    {
        return "/{$this->category}";
    }

}