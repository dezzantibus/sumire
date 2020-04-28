<?php

class layout_admin_form_radio extends layout
{

    private $name;

    private $label;

    private $value;

    private $list;

    private $placeholder;

    private $class;

    private $errorMessage;

    function __construct( $name, $label, data_array $list, $value=null, $placeholder=null, $class=null, $errorMessage=null )
    {
        $this->name         = $name;
        $this->label        = $label;
        $this->list        = $list;
        $this->value        = $value;
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
            '<div class="col-sm-10">';

                foreach( $this->list->getData() as $item )
                {

                    echo
                    '<div class="i-checks"><label>',

                    '<input name="', $this->name, '" type="radio" value="', $item['value'], '"';

                    if( $this->value == $item['value'] )
                    {
                        echo ' checked="checked"';
                    }

                    echo
                    '> <i></i>', $item['label'], '</label></div>';

                }

                if( !is_null( $this->errorMessage ) )
                {
                    echo '<span class="help-block m-b-none">', $this->errorMessage, '</span>';
                }

            echo
            '</div>',
        '</div>';
    }

}
