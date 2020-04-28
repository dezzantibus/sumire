<?php

abstract class handler_action
{

    protected $data;

    function __construct()
    {

        $this->data = $_POST;

    }

    public function run()
    {

    }

    protected function checkNumeric( $value )
    {
        return is_numeric( $value );
    }

    protected function checkRequired( $value )
    {

        if( $value == '0' ) return true;

        if( empty( $value ) )
        {
            return false;
        }
        else
        {
            return true;
        }
    }

}