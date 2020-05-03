<?php

class data_news_article extends data
{

    public $id;

    public $news_category_id;

    public $user_id;

    public $carousel;

    public $homepage;

    public $title;

    public $subtitle;

    public $short;

    public $text;

    public $date;

    public $image1;
    public $image2;
    public $image3;
    public $image4;

    public $caption1;
    public $caption2;
    public $caption3;
    public $caption4;

    function __construct( $data=null )
    {

        if( isset( $data ) )
        {
            if( isset( $data['id'] ) )               $this->id               = $data['id'];
            if( isset( $data['news_category_id'] ) ) $this->news_category_id = $data['news_category_id'];
            if( isset( $data['user_id'] ) )          $this->user_id          = $data['user_id'];
            if( isset( $data['carousel'] ) )         $this->carousel         = $data['carousel'];
            if( isset( $data['homepage'] ) )         $this->homepage         = $data['homepage'];
            if( isset( $data['title'] ) )            $this->title            = $data['title'];
            if( isset( $data['subtitle'] ) )         $this->subtitle         = $data['subtitle'];
            if( isset( $data['short'] ) )            $this->short            = $data['short'];
            if( isset( $data['text'] ) )             $this->text             = $data['text'];
            if( isset( $data['date'] ) )             $this->date             = $data['date'];
            if( isset( $data['image1'] ) )           $this->image1           = $data['image1'];
            if( isset( $data['image2'] ) )           $this->image2           = $data['image2'];
            if( isset( $data['image3'] ) )           $this->image3           = $data['image3'];
            if( isset( $data['image4'] ) )           $this->image4           = $data['image4'];
            if( isset( $data['caption1'] ) )         $this->caption1         = $data['caption1'];
            if( isset( $data['caption2'] ) )         $this->caption2         = $data['caption2'];
            if( isset( $data['caption3'] ) )         $this->caption3         = $data['caption3'];
            if( isset( $data['caption4'] ) )         $this->caption4         = $data['caption4'];
        }

    }

}