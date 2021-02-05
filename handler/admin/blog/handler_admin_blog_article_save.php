<?php

class handler_admin_blog_article_save extends handler_action
{

    public function run()
    {

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
        if( !$this->checkRequired( $this->data['text'] ) )     message::addError( 'The text is required', 'text' );

        $article = new data_blog_article( $this->data );

        if( message::containsErrors() )
        {

            $page = new layout_admin_blog_article_form(
                $article,
                model_blog_category::getFullList( 'category' )
            );
            $page->render();

        }
        else
        {

            if( empty( session::$user->blog ) )
            {
                $blog = "rie";
            }
            else
            {
                $blog = session::$user->blog;
            }

            $path = 'blog/' . $blog . '/' . date('Y-m-d') . '/' . $article->title;

            if( !empty( $this->files['cover'] ) )   $article->cover   = file::saveFromPost( $this->files['cover'], $path );
            if( !empty( $this->files['image1'] ) )  $article->image1  = file::saveFromPost( $this->files['image1'], $path );
            if( !empty( $this->files['image2'] ) )  $article->image2  = file::saveFromPost( $this->files['image2'], $path );
            if( !empty( $this->files['image3'] ) )  $article->image3  = file::saveFromPost( $this->files['image3'], $path );
            if( !empty( $this->files['image4'] ) )  $article->image4  = file::saveFromPost( $this->files['image4'], $path );
            if( !empty( $this->files['image5'] ) )  $article->image5  = file::saveFromPost( $this->files['image5'], $path );
            if( !empty( $this->files['image6'] ) )  $article->image6  = file::saveFromPost( $this->files['image6'], $path );
            if( !empty( $this->files['image7'] ) )  $article->image7  = file::saveFromPost( $this->files['image7'], $path );
            if( !empty( $this->files['image8'] ) )  $article->image8  = file::saveFromPost( $this->files['image8'], $path );
            if( !empty( $this->files['image9'] ) )  $article->image9  = file::saveFromPost( $this->files['image9'], $path );
            if( !empty( $this->files['image10'] ) ) $article->image10 = file::saveFromPost( $this->files['image10'], $path );

            if( empty( $article->id ) )
            {
                model_blog_article::create( $article );
            }
            else
            {
                model_blog_article::update( $article );
            }

            header("Location: /blog/article");

        }


    }

}