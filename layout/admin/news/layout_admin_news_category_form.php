<?php

class layout_admin_news_category_form extends layout_admin_page
{

    public function __construct( data_news_category $category )
    {

        $this->title = 'Sumire - admin - News';

        $this->addChild( new layout_admin_menu( 'news' ) );

        $params = array(
            'id'    => 'page-wrapper',
            'class' => 'gray-bg'
        );
        $page_wrapper = $this->addChild( new layout_html_div( $params ) );

        if( empty( $category->id ) )
        {
            $message = 'News - New category';
        }
        else
        {
            $message= 'News - Edit category ' . $category->category;
        }
        $page_wrapper->addChild( new layout_admin_header( $message ) );

        $page_box = $page_wrapper->addChild( new layout_admin_page_content_frame() );

        $form = $page_box->addChild( new layout_admin_form(
            '/news/category/save',
            'form-horizontal',
            'news_category'
        ) );

        $messages = message::getMessages();

        $form->addChild( new layout_admin_form_hidden( 'id', $category->id ) );

        $form->addChild( new layout_admin_form_text(
            'category',
            'Category name',
            $category->category,
            $messages['category']['message']
        ) );

        $form->addChild( new layout_admin_form_text(
            'order',
            'Menu order',
            $category->order,
            $messages['order']['message']
        ) );

        $form->addChild( new layout_admin_form_text(
            'homepage',
            'Homepage order',
            $category->homepage,
            $messages['homepage']['message']
        ) );

        $homepage_layout = new data_array();
        $homepage_layout->add( array( 'label' => '1 large element and 4 small on the side', 'value' => 'layout_elements_homebox_1big_4side' ) );
        $homepage_layout->add( array( 'label' => '1 large element and 4 small under', 'value' => 'layout_elements_homebox_1big_4under' ) );
        $homepage_layout->add( array( 'label' => 'Scrolling gallery', 'value' => 'layout_elements_homebox_gallery_scrolling' ) );
        $homepage_layout->add( array( 'label' => 'Static gallery', 'value' => 'layout_elements_homebox_gallery_static' ) );
        $homepage_layout->add( array( 'label' => 'Stacked elements', 'value' => 'layout_elements_homebox_rows_of_1' ) );
        $homepage_layout->add( array( 'label' => '2 rows of 3 elements', 'value' => 'layout_elements_homebox_rows_of_3' ) );

        $form->addChild( new layout_admin_form_radio(
            'homepage_box',
            'Homepage layout',
            $homepage_layout,
            $category->homepage_box,
            $messages['homepage_box']['message']
        ) );

        $page_wrapper->addChild( new layout_admin_footer() );

    }

}