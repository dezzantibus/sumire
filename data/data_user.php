<?php

class data_user extends data
{

    public $id;

    public $email;

    public $password;

    public $nick;

    public $first_name;

    public $last_name;

    public $blog;

    public $avatar;

    public $join_date;

    public $last_login;

    public $twitter;

    public $instagram;

    public $youtube;

    function __construct( $data=null )
    {

        if( isset( $data ) )
        {
            if( isset( $data['id'] ) )         $this->id         = $data['id'];
            if( isset( $data['email'] ) )      $this->email      = $data['email'];
            if( isset( $data['password'] ) )   $this->password   = $data['password'];
            if( isset( $data['nick'] ) )       $this->nick       = $data['nick'];
            if( isset( $data['first_name'] ) ) $this->first_name = $data['first_name'];
            if( isset( $data['last_name'] ) )  $this->last_name  = $data['last_name'];
            if( isset( $data['blog'] ) )       $this->blog       = $data['blog'];
            if( isset( $data['avatar'] ) )     $this->avatar     = $data['avatar'];
            if( isset( $data['join_date'] ) )  $this->join_date  = $data['join_date'];
            if( isset( $data['last_login'] ) ) $this->last_login = $data['last_login'];
            if( isset( $data['twitter'] ) )    $this->twitter    = $data['twitter'];
            if( isset( $data['instagram'] ) )  $this->instagram  = $data['instagram'];
            if( isset( $data['youtube'] ) )    $this->youtube    = $data['youtube'];
        }

    }

}