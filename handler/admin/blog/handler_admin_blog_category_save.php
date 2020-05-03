<?php

class handler_admin_blog_category_save extends handler_action
{

    public function run()
    {

        if( !$this->checkRequired( $this->data['category'] ) )
        {
            message::addError( 'Category name is required', 'category' );
        }

        if( !$this->checkNumeric( $this->data['order'] ) )
        {
            $this->data->order = 0;
        }

        if( !$this->checkNumeric( $this->data['homepage'] ) )
        {
            $this->data->homepage = 0;
        }

        if( !$this->checkRequired( $this->data['homepage_box'] ) )
        {
            message::addError( 'Homepage layout is required', 'homepage_box' );
        }

        $category = new data_blog_category( $this->data );

        if( message::containsErrors() )
        {
            $page = new layout_admin_blog_category_form( $category );
            $page->render();
        }
        else
        {

            if( empty( $category->id ) )
            {
                model_blog_category::create( $category );
            }
            else
            {
                model_blog_category::update( $category );
            }

            header("Location: /blog/category");

        }

    }

}