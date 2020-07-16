<?php

class router_admin
{

    static function run()
    {

        switch( $_GET['page'] )
        {
            case 'news'     : return self::news();
            case 'blog'     : return self::blog();
            case 'recipe'   : return self::recipe();
            case 'login'    : return new handler_admin_login();
            case 'register' : return new handler_admin_register();
            default         : return new handler_admin_homepage();
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
                    case 'new'    :
                    case 'edit'   : return new handler_admin_blog_article_form();
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

    static function recipe()
    {
        switch( $_GET['sub'] )
        {
            case 'entry'  :

                switch( $_GET['action'] )
                {
                    case 'new'    :
                    case 'edit'   : return new handler_admin_recipe_entry_form();
                    case 'save'   : return new handler_admin_recipe_entry_save();
                    case 'delete' : return new handler_admin_recipe_entry_delete();
                    default       : return new handler_admin_recipe_entry_list();
                }

            case 'category' :

                switch( $_GET['action'] )
                {
                    case 'new'    :
                    case 'edit'   : return new handler_admin_recipe_category_form();
                    case 'save'   : return new handler_admin_recipe_category_save();
                    case 'delete' : return new handler_admin_recipe_category_delete();
                    default       : return new handler_admin_recipe_category_list();
                }

            default         : return new handler_admin_recipe_dashboard();
        }
    }

}