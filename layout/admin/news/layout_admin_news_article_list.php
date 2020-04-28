<?php

class layout_admin_news_article_list extends layout_admin_page
{

    public function __construct( data_array $articles )
    {

        $this->title = 'Sumire - News article admin';

        $this->addChild( new layout_admin_menu( 'news', 'articles' ) );

        $params = array(
            'id'    => 'page-wrapper',
            'class' => 'gray-bg'
        );
        $page_wrapper = $this->addChild( new layout_html_div( $params ) );

        $page_wrapper->addChild( new layout_admin_header( 'News - Articles' ) );

        $page_box = $page_wrapper->addChild( new layout_admin_page_content_frame() );

        $page_box->addChild( new layout_admin_new_button( 'New article', '/news/article/new' ) );

        while( !$articles->isEmpty() )
        {
            $article = $articles->first();
            $page_box->addChild( new layout_admin_list_element(
                $article->title,
                '/news/article/edit/' . $article->id,
                '/news/article/delete/' . $article->id
            ) );
        }

        $page_wrapper->addChild( new layout_admin_footer() );

    }

}