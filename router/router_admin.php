<?php

class router_admin
{

    static function run()
    {

        switch( $_GET['category'] )
        {
            default: return new handler_admin_homepage();
        }

    }

}