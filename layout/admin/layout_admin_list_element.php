<?php

class layout_admin_list_element extends layout
{

    private $name;

    private $edit_link;

    private $delete_link;

    private $text;

    function __construct ( $name, $edit_link, $delete_link=null, $text=null )
    {
        $this->name        = $name;
        $this->edit_link   = $edit_link;
        $this->delete_link = $delete_link;
        $this->text        = $text;
    }

    public function render()
    {

        echo
        '<div class="hr-line-dashed"></div>',
        '<div class="search-result">',
            '<h3>INSPINIA IN+ Admin Theme</h3>',
            '<a href="#" class="search-link">www.inspinia.com/inspinia</a>',
            '<p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>',
        '</div>';

    }

}

