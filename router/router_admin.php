<?php

class router_admin
{

    static function run()
    {

        switch( $_GET['page'] )
        {
            case 'news' : return self::news();
            case 'blog' : return self::blog();
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
                    case 'new'    :
                    case 'edit'   : return new handler_admin_news_article_form();
                    case 'save'   : return new handler_admin_news_article_save();
                    case 'delete' : return new handler_admin_news_article_delete();
                    default       : return new handler_admin_news_article_list();
                }

            case 'category' :

                switch( $_GET['action'] )
                {
                    case 'new'    :
                    case 'edit'   : return new handler_admin_news_category_form();
                    case 'save'   : return new handler_admin_news_category_save();
                    case 'delete' : return new handler_admin_news_category_delete();
                    default       : return new handler_admin_news_category_list();
                }

            default         : return new handler_admin_news_dashboard();
        }
    }

    static function blog()
    {
        switch( $_GET['sub'] )
        {
            case 'article'  :

                switch( $_GET['action'] )
                {
                    case 'new'    : return new handler_admin_blog_article_new();
                    case 'edit'   : return new handler_admin_blog_article_edit();
                    case 'save'   : return new handler_admin_blog_article_save();
                    case 'delete' : return new handler_admin_blog_article_delete();
                    default       : return new handler_admin_blog_article_list();
                }

            case 'category' :

                switch( $_GET['action'] )
                {
                    case 'new'    :
                    case 'edit'   : return new handler_admin_blog_category_form();
                    case 'save'   : return new handler_admin_blog_category_save();
                    case 'delete' : return new handler_admin_blog_category_delete();
                    default       : return new handler_admin_blog_category_list();
                }

            default         : return new handler_admin_blog_dashboard();
        }
    }

}