<?php

class handler_admin_news_article_save extends handler_action
{

    public function run()
    {

        if( empty( $this->data['carousel'] ) )
        {
            $this->data['carousel'] = 0;
        }
        else
        {
            $this->data['carousel'] = 1;
        }

        if( empty( $this->data['homepage'] ) )
        {
            $this->data['homepage'] = 0;
        }
        else
        {
            $this->data['homepage'] = 1;
        }

        if( !$this->checkRequired( $this->data['title'] ) )    message::addError( 'The title is required',    'title' );
        if( !$this->checkRequired( $this->data['subtitle'] ) ) message::addError( 'The subtitle is required', 'subtitle' );
        if( !$this->checkRequired( $this->data['short'] ) ) $this->data['short'] = substr( strip_tags( $this->data['text'] ), 0, 200 );
        if( !$this->checkRequired( $this->data['text'] ) ) message::addError( 'The text is required', 'text' );

        $article = new data_news_article( $this->data );

        if( message::containsErrors() )
        {

            $page = new layout_admin_news_article_form(
                $article,
                model_news_category::getFullList( 'category' )
            );
            $page->render();

        }
        else
        {

            $category = model_news_category::getById( $article->news_category_id );

            $path = 'news/' . $category->category . '/' . date('Y-m-d') . '/' . $article->title;
            $path = str_replace( ' ', '', $path );
            $path = str_replace( '　', '', $path );
            $path = str_replace( '#', '', $path );
            $path = str_replace( '&', '', $path );

            if( !empty( $this->files['image1'] ) ) $article->image1 = file::saveFromPost( $this->files['image1'], $path );
            if( !empty( $this->files['image2'] ) ) $article->image1 = file::saveFromPost( $this->files['image2'], $path );
            if( !empty( $this->files['image3'] ) ) $article->image1 = file::saveFromPost( $this->files['image3'], $path );
            if( !empty( $this->files['image4'] ) ) $article->image1 = file::saveFromPost( $this->files['image4'], $path );

            $article->text = str_replace( "\n", '<br />', str_replace( "\n\n", '</p><p>', $article->text ) );

            if( empty( $article->id ) )
            {
                model_news_article::create( $article );
            }
            else
            {
                model_news_article::update( $article );
            }

            header("Location: /news/article");

        }


    }

}