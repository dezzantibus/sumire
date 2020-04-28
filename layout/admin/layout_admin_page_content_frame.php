<?php

class layout_admin_page_content_frame extends layout
{

    function __construct ()
    {

    }

    protected function renderTop()
    {

        echo
        '<div class="wrapper wrapper-content animated fadeInRight">',
            '<div class="row">',
                '<div class="col-lg-12">',
                    '<div class="ibox float-e-margins">',
                        '<div class="ibox-content">';

    }


    protected function renderBottom()
    {

        echo
        '</div></div></div></div></div>';

    }

}

