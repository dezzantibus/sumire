<?php

class layout_admin_form extends layout
{

    private $action;

    private $class;

    private $id;

    private $submit_text;

    function __construct( $action, $class, $id, $submit_text='Save' )
    {

        $this->action      = $action;
        $this->class       = $class;
        $this->id          = $id;
        $this->submit_text = $submit_text;

    }
	
    protected function renderTop()
    {

        echo
        '<form action="', $this->action, '" class="', $this->class, '" method="post" novalidate id="', $this->id, '" enctype="multipart/form-data">';
//            '<input type="hidden" name="success_url" value="', $this->success_url, '">',
//            '<input type="hidden" name="error_url" value="', $this->error_url, '">';

    }

    protected function renderBottom()
    {
            echo
            '<div class="form-group">',
                '<div class="col-sm-4 col-sm-offset-2">',
                    '<button class="btn btn-white" type="submit">Cancel</button>',
                    '<button class="btn btn-primary" type="submit">', $this->submit_text, '</button>',
                '</div>',
            '</div>',
        '</form>';
    }

}

