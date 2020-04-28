<?php

class message
{

    static private $list;

    private static function addMessage( $type, $message, $label )
    {
        if( ! is_array( self::$list ) )
        {
            self::$list = array();
        }

        self::$list[ $label ] = array(
            'type'      => $type,
            'message'   => $message,
            'timestamp' => time(),
        );
    }

    public static function addError( $message, $label, $log=null )
    {
        self::addMessage( 'ERROR', $message, $label );
		if( !empty( $log ) )
		{
        	error_log( $log );
		}
    }

    public static function addSuccess( $message, $label )
    {
        self::addMessage( 'SUCCESS', $message, $label );
    }

    public static function addInfo( $message, $label )
    {
        self::addMessage( 'INFO', $message, $label );
    }

    public static function addWarning( $message, $label )
    {
        self::addMessage( 'WARNING', $message, $label );
    }

    public static function getMessages()
    {
        if( ! is_array( self::$list ) )
        {
            self::$list = array();
        }
        return self::$list;
    }

    public static function containsErrors()
    {
		
        if( ! is_array( self::$list ) )
        {
            self::$list = array();
        }

        foreach( self::$list as $message )
        {
            if( $message['type'] == 'ERROR' )
            {
                return true;
            }
        }
		
        return false;
		
    }
	
}