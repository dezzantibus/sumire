<?php

abstract class handler
{

    function __construct()
    {

    }

    public function run()
    {

    }

    protected function sidebarData()
    {

        $sidebar = new data_sidebar();

        $sidebar->recent_news = model_news_article::getLatest( null, 5 );

        $sidebar->popular_news = model_news_article::getPopular();

        return $sidebar;

    }

}