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
        switch( $_GET['sub'] )
        {
            case 'article'  :

                switch( $_GET['action'] )
                {
                    case 'new'  : return new handler_admin_news_article_new();
                    case 'edit' : return new handler_admin_news_article_edit();
                    default     : return new handler_admin_news_article_list();
                }

            case 'category' :

                switch( $_GET['action'] )
                {
                    case 'new'  : return new handler_admin_news_category_new();
                    case 'edit' : return new handler_admin_news_category_edit();
                    case 'save' : return new handler_admin_news_category_save();
                    default     : return new handler_admin_news_category_list();
                }

            default         : return new handler_admin_news_dashboard();
        }
    }

}