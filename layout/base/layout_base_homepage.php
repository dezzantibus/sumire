<?php

class layout_base_homepage extends layout_page
{

    public function __construct()
    {

        $this->title = 'すみれ';

        $this->addChild( new layout_header() );
        $this->addChild( new layout_slide_1() );

    }

}