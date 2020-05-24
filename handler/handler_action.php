<?php

abstract class handler_action
{

    protected $data;

    protected $files;

    function __construct()
    {

        $this->data  = $_POST;
        $this->files = $_FILES;

    }

    public function run()
    {

    }

    protected function checkNumeric( $value )
    {
        return is_numeric( $value );
    }

    protected function checkMatch( $value1, $value2 )
    {
        return $value1 == $value2;
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