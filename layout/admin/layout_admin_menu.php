<?php

class layout_admin_menu extends layout
{

    private $active;

    private $active2;

    function __construct( $active=null, $active2=null )
    {
        $this->active  = $active;
        $this->active2 = $active2;
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
                        $classNews = ' class="active"';
                        switch( $this->active2 )
                        {
                            case 'categories' :
                                $classCategory = ' class="active"';
                                $classArticle  = '';
                                break;
                            case 'article' :
                                $classCategory = '';
                                $classArticle  = ' class="active"';
                                break;
                            default :
                                $classCategory = '';
                                $classArticle  = '';
                        }
                    }
                    else
                    {
                        $classNews     = '';
                        $classCategory = '';
                        $classArticle  = '';
                    }

                    echo
                    '<li', $classNews ,'>',
                        '<a href="/news"><i class="fa fa-files-o"></i> <span class="nav-label">News</span> <span class="fa arrow"></span></a>',
                        '<ul class="nav nav-second-level">',
                            '<li', $classCategory ,'><a href="/news/category">Categories</a></li>',
                            '<li', $classArticle ,'><a href="/news/article">Articles</a></li>',
                        '</ul>',
                    '</li>';

                    //************************************************************

                    if( $this->active == 'blog' )
                    {
                        $classNews = ' class="active"';
                        switch( $this->active2 )
                        {
                            case 'categories' :
                                $classCategory = ' class="active"';
                                $classArticle  = '';
                                break;
                            case 'article' :
                                $classCategory = '';
                                $classArticle  = ' class="active"';
                                break;
                            default :
                                $classCategory = '';
                                $classArticle  = '';
                        }
                    }
                    else
                    {
                        $classNews     = '';
                        $classCategory = '';
                        $classArticle  = '';
                    }

                    echo
                    '<li', $classNews ,'>',
                        '<a href="/blog"><i class="fa fa-files-o"></i> <span class="nav-label">Blog</span> <span class="fa arrow"></span></a>',
                        '<ul class="nav nav-second-level">',
                            '<li', $classCategory ,'><a href="/blog/category">Categories</a></li>',
                            '<li', $classArticle ,'><a href="/blog/article">Articles</a></li>',
                        '</ul>',
                    '</li>';

                    //************************************************************

                    if( $this->active == 'recipe' )
                    {
                        $classNews = ' class="active"';
                        switch( $this->active2 )
                        {
                            case 'categories' :
                                $classCategory = ' class="active"';
                                $classArticle  = '';
                                break;
                            case 'recipe' :
                                $classCategory = '';
                                $classArticle  = ' class="active"';
                                break;
                            default :
                                $classCategory = '';
                                $classArticle  = '';
                        }
                    }
                    else
                    {
                        $classNews     = '';
                        $classCategory = '';
                        $classArticle  = '';
                    }

                    echo
                    '<li', $classNews ,'>',
                        '<a href="/blog"><i class="fa fa-files-o"></i> <span class="nav-label">Recipe</span> <span class="fa arrow"></span></a>',
                        '<ul class="nav nav-second-level">',
                            '<li', $classCategory ,'><a href="/recipe/category">Categories</a></li>',
                            '<li', $classArticle ,'><a href="/recipe/recipe">Recipes</a></li>',
                        '</ul>',
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
                        '<a href="/market"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Market</span></a>',
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
                        '<a href="/events"><i class="fa fa-table"></i> <span class="nav-label">Events</span></a>',
                    '</li>';

                    //************************************************************

                echo
                '</ul>',
            '</div>',
        '</nav>';

    }

}

