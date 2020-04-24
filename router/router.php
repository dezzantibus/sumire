<?php

class router
{

    static function run()
    {

        switch( $_SERVER['HTTP_HOST'] )
        {
/*
            case 'www.sumire.it':
            case 'sumire.it':        return router_base::run();
            case 'news.sumire.it':   return router_news::run();
            case 'blog.sumire.it':   return router_blog::run();
            case 'market.sumire.it': return router_market::run();

            default: return router_custom::run();
*/

            case 'www.sumire.it':
            case 'sumire.it':        echo 'this is the main site';break;
            case 'news.sumire.it':   echo 'this is the news site';break;
            case 'blog.sumire.it':   echo 'this is the blog site';break;
            case 'market.sumire.it': echo 'this is the market site';break;

            default: return router_custom::run();



        }

    }

}