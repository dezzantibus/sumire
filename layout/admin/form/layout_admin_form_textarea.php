<?php

class layout_admin_form_textarea extends layout
{

    private $name;

    private $label;

    private $value;

    private $rows;

    private $placeholder;

    private $class;

    private $errorMessage;

    function __construct( $name, $label, $value=null, $errorMessage=null, $rows=10, $placeholder=null, $class=null )
    {
        $this->name         = $name;
        $this->label        = $label;
        $this->value        = $value;
        $this->rows         = $rows;
        $this->placeholder  = $placeholder;
        $this->class        = $class;
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

                '<textarea name="', $this->name, '" class="form-control" type="text" ';

                if( !is_null( $this->placeholder ) )
                {
                    echo ' placeholder="', $this->placeholder, '"';
                }

                echo
                '>', $this->value, '</textarea>';

                if( !is_null( $this->errorMessage ) )
                {
                    echo '<span class="help-block m-b-none">', $this->errorMessage, '</span>';
                }

            echo
            '</div>',
        '</div>';

    }

}