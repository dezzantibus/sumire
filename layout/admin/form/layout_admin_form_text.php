<?php

class layout_admin_form_text extends layout
{

    private $name;

    private $label;

    private $value;

    private $placeholder;

    private $errorMessage;

    function __construct( $name, $label, $value=null, $errorMessage=null, $placeholder=null )
    {
        $this->name         = $name;
        $this->label        = $label;
        $this->value        = $value;
        $this->placeholder  = $placeholder;
        $this->errorMessage = $errorMessage;
    }

    public function render()
    {

        $errorClass = '';
        if( !is_null( $this->errorMessage ) )
        {
            $errorClass = ' has-error';
        }

        echo
        '<div class="form-group', $errorClass, '">',
            '<label class="col-sm-2 control-label">', $this->label ,'</label>',
            '<div class="col-sm-10">',

                '<input name="', $this->name, '" class="form-control" type="text" ';

                if( !is_null( $this->placeholder ) )
                {
                    echo ' placeholder="', $this->placeholder, '"';
                }

                if( !is_null( $this->value ) )
                {
                    echo ' value="', $this->value, '"';
                }

                echo
                '>';

                if( !is_null( $this->errorMessage ) )
                {
                    echo '<span class="help-block m-b-none">', $this->errorMessage, '</span>';
                }

            echo
            '</div>',
        '</div>';
    }

}
