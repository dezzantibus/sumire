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
            case 'ricette.sumire.it': return self::recipe();
            case 'admin.sumire.it':   return router_admin::run();
            case 'admin.vivereadicomano.com':   return router_admin::run();

            // development
            case 'www.sumire.local':
            case 'sumire.local':         return self::base();
            case 'news.sumire.local':    return self::news();
            case 'blog.sumire.local':    return self::blog();
            case 'mercato.sumire.local': return self::market();
            case 'eventi.sumire.local':  return self::events();
            case 'utente.sumire.local':  return self::user();
            case 'admin.sumire.local':   return router_admin::run();

            default: return router_custom::run();

        }

    }

    static function base()
    {
        return new handler_base_homepage();
    }

    static function news()
    {

        if( isset( $_GET['article'] )  ) return new handler_news_article;


        if( isset( $_GET['category'] )  )
        {

            if( $_GET['category'] == 'index.php' ) return new handler_news_homepage();

            return new handler_news_category;

        }

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

    static function recipe()
    {
        return new handler_recipe_homepage();
    }

}