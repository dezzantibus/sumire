<?php

class class_finder
{

    public static function getClassFile( $name )
    {

        $frags = explode( '_', $name );

        switch( $frags[0] )
        {
            case 'layout' : self::getLayoutClass( $name, $frags );  break;
            case 'handler': self::getHandlerClass( $name, $frags ); break;
            case 'action' : self::getActionClass( $name, $frags );  break;

            case 'banner'      : require_once __DIR__ . '/banner.php';      break;
            case 'constant'    : require_once __DIR__ . '/constant.php';    break;
            case 'environment' : require_once __DIR__ . '/environment.php'; break;
            case 'session'     : require_once __DIR__ . '/session.php';     break;
            case 'message'     : require_once __DIR__ . '/message.php';     break;
            case 'security'    : require_once __DIR__ . '/security.php';    break;
            case 'weather'     : require_once __DIR__ . '/weather.php';     break;
            case 'exchange'    : require_once __DIR__ . '/exchange.php';    break;
            case 'S3'          : require_once __DIR__ . '/S3.php';          break;
            case 'file'        : require_once __DIR__ . '/file.php';        break;
            default: require_once __DIR__ . '/../' . $frags[0] . '/' . $name . '.php';
        }

    }

    private static function getLayoutClass( $name, $frags )
    {

        if( isset( $frags[1] ) )
        {
            switch( $frags[1] )
            {

                case 'admin':    self::getLayoutAdminClass( $name, $frags ); break;

                case 'base':     require_once __DIR__ . '/../layout/base/'     . $name . '.php'; break;
                case 'blog':     require_once __DIR__ . '/../layout/blog/'     . $name . '.php'; break;
                case 'events':   require_once __DIR__ . '/../layout/events/'   . $name . '.php'; break;
                case 'market':   require_once __DIR__ . '/../layout/market/'   . $name . '.php'; break;
                case 'news':     require_once __DIR__ . '/../layout/news/'     . $name . '.php'; break;
                case 'html':     require_once __DIR__ . '/../layout/html/'     . $name . '.php'; break;
                case 'form':     require_once __DIR__ . '/../layout/form/'     . $name . '.php'; break;
                case 'elements': require_once __DIR__ . '/../layout/elements/' . $name . '.php'; break;
                default:         require_once __DIR__ . '/../layout/'          . $name . '.php';
            }
        }
        else
        {
            require_once __DIR__ . '/../layout/layout.php';
        }

    }

    private static function getLayoutAdminClass( $name, $frags )
    {

        if( isset( $frags[2] ) )
        {
            switch( $frags[2] )
            {
                case 'news': require_once __DIR__ . '/../layout/admin/news/' . $name . '.php'; break;
                case 'blog': require_once __DIR__ . '/../layout/admin/blog/' . $name . '.php'; break;
                case 'form': require_once __DIR__ . '/../layout/admin/form/' . $name . '.php'; break;
                default    : require_once __DIR__ . '/../layout/admin/'      . $name . '.php';

            }
        }
        else
        {
            require_once __DIR__ . '/../layout/admin/' . $name . '.php';
        }

    }

    private static function getHandlerClass( $name, $frags )
    {

        if( isset( $frags[1] ) )
        {
            switch( $frags[1] )
            {
                case 'admin':  self::getHandlerAdminClass( $name, $frags ); break;

                case 'base':   require_once __DIR__ . '/../handler/base/'   . $name . '.php'; break;
                case 'blog':   require_once __DIR__ . '/../handler/blog/'   . $name . '.php'; break;
                case 'events': require_once __DIR__ . '/../handler/events/' . $name . '.php'; break;
                case 'market': require_once __DIR__ . '/../handler/market/' . $name . '.php'; break;
                case 'news':   require_once __DIR__ . '/../handler/news/'   . $name . '.php'; break;
                default:       require_once __DIR__ . '/../handler/'        . $name . '.php';
            }
        }
        else
        {
            require_once __DIR__ . '/../handler/handler.php';
        }

    }

    private static function getHandlerAdminClass( $name, $frags )
    {

        if( isset( $frags[2] ) )
        {
            switch( $frags[2] )
            {
                case 'news': require_once __DIR__ . '/../handler/admin/news/' . $name . '.php'; break;
                case 'blog': require_once __DIR__ . '/../handler/admin/blog/' . $name . '.php'; break;
                default    : require_once __DIR__ . '/../handler/admin/'      . $name . '.php';
            }
        }
        else
        {
            require_once __DIR__ . '/../handler/admin/' . $name . '.php';
        }

    }

    private static function getActionClass( $name, $frags )
    {

        if( isset( $frags[1] ) )
        {
            switch( $frags[1] )
            {
                case 'admin': require_once __DIR__ . '/../action/admin/' . $name . '.php'; break;
                default:      require_once __DIR__ . '/../action/' . $name . '.php';
            }
        }
        else
        {
            require_once __DIR__ . '/../action/action.php';
        }

    }

}