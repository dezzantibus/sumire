<?php

class layout_admin_news_article_form extends layout_admin_page
{

    public function __construct( data_news_article $article, data_array $categories )
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
            $message = 'News - New article';
        }
        else
        {
            $message= 'News - Edit article ' . $article->title;
        }
        $page_wrapper->addChild( new layout_admin_header( $message ) );

        $page_box = $page_wrapper->addChild( new layout_admin_page_content_frame() );

        $form = $page_box->addChild( new layout_admin_form(
            '/news/article/save',
            'form-horizontal',
            'news_article'
        ) );

        $messages = message::getMessages();

        $category_dropdown = new data_array();
        while( !$categories->isEmpty() )
        {
            $category = $categories->first();
            $category_dropdown->add( array( 'label' => $category->category, 'value' => $category->id ) );
        }

        $form->addChild( new layout_admin_form_dropdown(
            'news_category_id',
            'Category',
            $category_dropdown,
            $article->news_category_id,
            $messages['news_category_id']['message']
        ) );

        $carousel = new data_array();
        $carousel->add( array( 'label' => '', 'value' => '1' ) );

        $form->addChild( new layout_admin_form_checkbox(
            'carousel',
            'Carousel',
            $carousel,
            $article->carousel,
            $messages['carousel']['message']
        ) );

        $homepage = new data_array();
        $homepage->add( array( 'label' => '', 'value' => '1' ) );

        $form->addChild( new layout_admin_form_checkbox(
            'homepage',
            'Homepage',
            $homepage,
            $article->homepage,
            $messages['homepage']['message']
        ) );

        $form->addChild( new layout_admin_form_text(
            'title',
            'Title',
            $article->title,
            $messages['title']['message']
        ) );

        $form->addChild( new layout_admin_form_text(
            'subtitle',
            'Subtitle',
            $article->subtitle,
            $messages['subtitle']['message']
        ) );

        $form->addChild( new layout_admin_form_textarea(
            'short',
            'Short',
            $article->short,
            $messages['short']['message'],
            5
        ) );

        $form->addChild( new layout_admin_form_textarea(
            'text',
            'Text',
            $article->text,
            $messages['text']['message'],
            20
        ) );

        $form->addChild( new layout_admin_form_file(
            'image1',
            'Image',
            null,
            $messages['image1']['message']
        ) );

        $page_wrapper->addChild( new layout_admin_footer() );


    }

}