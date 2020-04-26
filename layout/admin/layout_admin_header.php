<?php

class layout_admin_header extends layout
{

    private $header;

    function __construct( $header )
    {
        $this->header = $header;
    }

    public function render()
    {

        echo
        '<div class="row border-bottom">',
        '<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">',
        '<div class="navbar-header">',
            '<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>',
            '<form role="search" class="navbar-form-custom" action="search_results.html">',
                '<div class="form-group">',
                    '<input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">',
                '</div>',
            '</form>',
        '</div>',
            '<ul class="nav navbar-top-links navbar-right">',
                '<li>',
                    '<span class="m-r-sm text-muted welcome-message">Welcome to Sumire\'s Administration site.</span>',
                '</li>',
                '<li>',
                    '<a href="login.html">',
                        '<i class="fa fa-sign-out"></i> Log out',
                    '</a>',
                '</li>',
            '</ul>',
        '</nav>',
        '</div>',
            '<div class="row wrapper border-bottom white-bg page-heading">',
                '<div class="col-lg-10">',
                    '<h2>', $this->header ,'</h2>',
                '</div>',
                '<div class="col-lg-2">',

                '</div>',
            '</div>';

    }

}