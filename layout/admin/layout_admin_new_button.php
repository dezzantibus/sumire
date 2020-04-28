<?php

class layout_admin_new_button extends layout
{

    private $text;

    private $link;

    function __construct ( $text, $link )
    {
        $this->text  = $text;
        $this->link  = $link;
    }

    public function render()
    {

        echo
        '<div class="search-form">',
            '<form action="', $this->link, '" method="post">',
                '<div class="input-group">',
                    '<div class="input-group-btn">',
                        '<button class="btn btn-lg btn-primary" type="submit">',
                            $this->text,
                        '</button>',
                    '</div>',
                '</div>',

            '</form>',
        '</div>';

    }

}

