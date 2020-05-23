<?php
/**
 * Created by PhpStorm.
 * User: zante
 * Date: 08/06/2015
 * Time: 10:30
 */


class layout_html_h2 extends layout
{

    private $params;

    private $text;

    function __construct( $text, $params=array() )
    {

        $this->params = $params;

        $this->text   = $text;

    }

    public function render()
    {

        echo '<h2';

        foreach( $this->params as $label => $value )
        {

            echo ' ', $label, '="', $value, '"';

        }

        echo '>', $this->text, '</h2>';

    }

}