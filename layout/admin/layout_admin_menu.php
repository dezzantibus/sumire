<?php

class layout_admin_menu extends layout
{

    private $active;

    function __construct( $active )
    {
        $this->active = $active;
    }

    public function render()
    {

        echo
        '<nav class="navbar-default navbar-static-side" role="navigation">',
            '<div class="sidebar-collapse">',
                '<ul class="nav metismenu" id="side-menu">',
                    '<li class="nav-header">',
                        '<div class="dropdown profile-element">',
                            '<span><img alt="image" class="img-circle" src="/img/profile_small.jpg" /></span>',
                            '<a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                                 </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>';

                    //************************************************************


                    if( $this->active == 'home' )
                    {
                        echo '<li class="active">';
                    }
                    else
                    {
                        echo '<li>';
                    }

                        echo
                        '<a href="/"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>',
                    '</li>';

                    //************************************************************

                    if( $this->active == 'news' )
                    {
                        echo '<li class="active">';
                    }
                    else
                    {
                        echo '<li>';
                    }

                        echo
                        '<a href="/news.html"><i class="fa fa-files-o"></i> <span class="nav-label">News</span> <span class="fa arrow"></span></a>',
                        '<ul class="nav nav-second-level">',
                            '<li><a href="/news/category.html">Categories</a></li>',
                            '<li><a href="/news/article.html">Articles</a></li>',
                        '</ul>',
                    '</li>';

                    //************************************************************

                    if( $this->active == 'blog' )
                    {
                        echo '<li class="active">';
                    }
                    else
                    {
                        echo '<li>';
                    }

                        echo
                        '<a href="/blog.html"><i class="fa fa-edit"></i> <span class="nav-label">Blog</span></a>',
                    '</li>';

                    //************************************************************

                    if( $this->active == 'market' )
                    {
                        echo '<li class="active">';
                    }
                    else
                    {
                        echo '<li>';
                    }

                        echo
                        '<a href="/market.html"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Market</span></a>',
                    '</li>';

                    //************************************************************

                    if( $this->active == 'events' )
                    {
                        echo '<li class="active">';
                    }
                    else
                    {
                        echo '<li>';
                    }

                        echo
                        '<a href="/events.html"><i class="fa fa-table"></i> <span class="nav-label">Events</span></a>',
                    '</li>';

                    //************************************************************

                echo
                '</ul>',
            '</div>',
        '</nav>';

    }

}

