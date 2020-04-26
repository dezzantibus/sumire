<?php

class router_admin
{

    static function run()
    {

        switch( $_GET['page'] )
        {
            case 'news' : return self::news();
            default     : return new handler_admin_homepage();
        }

    }

    static function news()
    {
        switch( $_GET['action'] )
        {
            case 'new'  : return new handler_admin_news_new();
            case 'edit' : return new handler_admin_news_edit();
            default     : return new handler_admin_news_list();
        }
    }

}