<?php

class layout_admin_blog_article_form extends layout_admin_page
{

    public function __construct( data_blog_article $article, data_array $categories )
    {

        $this->title = 'Sumire - admin - Blog';

        $this->addChild( new layout_admin_menu( 'blog' ) );

        $params = array(
            'id'    => 'page-wrapper',
            'class' => 'gray-bg'
        );
        $page_wrapper = $this->addChild( new layout_html_div( $params ) );

        if( empty( $article->id ) )
        {
            $message = 'Blog - New article';
        }
        else
        {
            $message= 'Blog - Edit article ' . $article->title;
        }
        $page_wrapper->addChild( new layout_admin_header( $message ) );

        $page_box = $page_wrapper->addChild( new layout_admin_page_content_frame() );

        $form = $page_box->addChild( new layout_admin_form(
            '/blog/article/save',
            'form-horizontal',
            'blog_article'
        ) );

        $messages = message::getMessages();

        $form->addChild( new layout_admin_form_hidden( 'id',      $article->id ) );
        $form->addChild( new layout_admin_form_hidden( 'user_id', session::$user->id ) );

        $category_dropdown = new data_array();
        while( !$categories->isEmpty() )
        {
            $category = $categories->first();
            $category_dropdown->add( array( 'label' => $category->category, 'value' => $category->id ) );
        }

        $form->addChild( new layout_admin_form_dropdown(
            'blog_category_id',
            'Category',
            $category_dropdown,
            $article->blog_category_id,
            $messages['blog_category_id']['message']
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

        $published = new data_array();
        $published->add( array( 'label' => '', 'value' => '1' ) );

        $form->addChild( new layout_admin_form_checkbox(
            'published',
            'Published',
            $published,
            $article->published,
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
            'text',
            'Text',
            $article->text,
            $messages['text']['message'],
            20
        ) );

        $form->addChild( new layout_admin_form_file(
            'cover',
            'Cover',
            null,
            $messages['cover']['message']
        ) );

        for( $i=1; $i<=10; $i++ )
        {
            $form->addChild( new layout_admin_form_file(
                'image' . $i,
                'Image ' . $i,
                null,
                $messages[ 'image' . $i ]['message']
            ) );
        }

        $page_wrapper->addChild( new layout_admin_footer() );


    }

}