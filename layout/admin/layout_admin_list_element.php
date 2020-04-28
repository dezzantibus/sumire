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
            '<h3>', $this->name, '</h3>';
            if( !empty( $this->delete_link ) )
            {
                echo '<p>', $this->text, '</p>';
            }

            echo '<a href="', $this->edit_link, '" class="search-link">Edit</a>';

            if( !empty( $this->delete_link ) )
            {
                echo '&nbsp;&nbsp;-&nbsp;&nbsp;<a href="', $this->delete_link, '" class="search-link" onclick="return confirm(\'Are you you want to delete?\')">Delete</a>';
            }

        echo '</div>';

    }

}

