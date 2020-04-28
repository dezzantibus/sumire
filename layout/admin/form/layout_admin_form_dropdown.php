<?php

class layout_admin_form_dropdown extends layout
{

    private $name;

    private $label;

    private $value;

    private $list;

    private $placeholder;

    private $class;

    private $errorMessage;

    function __construct( $name, $label, data_array $list, $value=null, $errorMessage=null, $placeholder=null, $class=null )
    {
        $this->name         = $name;
        $this->label        = $label;
        $this->list         = $list;
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
            '<div class="col-sm-10">',
                '<select class="form-control m-b" name="', $this->name, '">',

                    foreach( $this->list->getData() as $item )
                    {
                        echo '<option value="' . $item['value'] . '"';
                        if( $item['value'] == $this->value ) echo ' selected="selected"';
                        echo '>' . $item['label'] . '</option>';
                    }

                echo
                '</select>',
            '</div>',
        '</div>';
	
    }

}
