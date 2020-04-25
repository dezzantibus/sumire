<?php

class router
{

    static function run()
    {

        switch( $_SERVER['HTTP_HOST'] )
        {

            case 'www.sumire.it':
            case 'sumire.it':         return self::base();
            case 'news.sumire.it':    return self::news();
            case 'blog.sumire.it':    return self::blog();
            case 'mercato.sumire.it': return self::market();
            case 'eventi.sumire.it':  return self::events();
            case 'utente.sumire.it':  return self::user();
            case 'admin.sumire.it':   return router_admin::run();

            default: return router_custom::run();

        }

    }

    static function base()
    {
        return new handler_base_homepage();
    }

    static function news()
    {
        return new handler_news_homepage();
    }

    static function blog()
    {
        return new handler_blog_homepage();
    }

    static function market()
    {
        return new handler_market_homepage();
    }

    static function events()
    {
        return new handler_events_homepage();
    }

    static function user()
    {
        return new handler_user_homepage();
    }

}