<?php

class handler_admin_homepage extends handler
{

    public function run()
    {

        if( empty( session::$user ) )
        {
            $page = new layout_admin_login();
            $page->render();
            exit;
        }

        // Render page
        $page = new layout_admin_homepage();
        $page->render();

    }

}