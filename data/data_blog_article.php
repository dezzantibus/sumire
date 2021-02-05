<?php

class data_blog_article extends data
{

    public $id;

    public $blog_category_id;

    public $user_id;

    public $homepage;

    public $published;

    public $title;

    public $subtitle;

    public $text;

    public $date;

    public $cover;

    public $image1;
    public $image2;
    public $image3;
    public $image4;
    public $image5;
    public $image6;
    public $image7;
    public $image8;
    public $image9;
    public $image10;


    function __construct( $data=null )
    {

        if( isset( $data ) )
        {
            if( isset( $data['id'] ) )               $this->id               = $data['id'];
            if( isset( $data['blog_category_id'] ) ) $this->blog_category_id = $data['blog_category_id'];
            if( isset( $data['user_id'] ) )          $this->user_id          = $data['user_id'];
            if( isset( $data['homepage'] ) )         $this->homepage         = $data['homepage'];
            if( isset( $data['published'] ) )        $this->published        = $data['published'];
            if( isset( $data['title'] ) )            $this->title            = $data['title'];
            if( isset( $data['subtitle'] ) )         $this->subtitle         = $data['subtitle'];
            if( isset( $data['text'] ) )             $this->text             = $data['text'];
            if( isset( $data['date'] ) )             $this->date             = $data['date'];
            if( isset( $data['cover'] ) )            $this->cover            = $data['cover'];
            if( isset( $data['image1'] ) )           $this->image1           = $data['image1'];
            if( isset( $data['image2'] ) )           $this->image2           = $data['image2'];
            if( isset( $data['image3'] ) )           $this->image3           = $data['image3'];
            if( isset( $data['image4'] ) )           $this->image4           = $data['image4'];
            if( isset( $data['image5'] ) )           $this->image5           = $data['image5'];
            if( isset( $data['image6'] ) )           $this->image6           = $data['image6'];
            if( isset( $data['image7'] ) )           $this->image7           = $data['image7'];
            if( isset( $data['image8'] ) )           $this->image8           = $data['image8'];
            if( isset( $data['image9'] ) )           $this->image9           = $data['image9'];
            if( isset( $data['image10'] ) )          $this->image10          = $data['image10'];
        }

    }

}