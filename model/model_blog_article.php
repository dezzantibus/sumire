<?php

class model_blog_article extends model
{

    static public function create( data_blog_article $data )
    {

        $sql = '
            INSERT INTO blog_article
                (
                `blog_category_id`, `user_id`, `homepage`,
                `published`, `title`, `subtitle`, `text`,
                `cover`,
                `image1`, `image2`, `image3`, `image4`, `image5`,
                `image6`, `image7`, `image8`, `image9`, `image10`
                )
            VALUES
                (
                :blog_category_id,  :user_id,  :homepage,
                :published,  :title,  :subtitle,  :text,
                :cover,
                :image1,  :image2,  :image3,  :image4,  :image5,
                :image6,  :image7,  :image8,  :image9,  :image10
                )
        ';

        if( empty( $data->published ) )
        {
            $data->published = 0;
        }

        $query = db::prepare( $sql );
        $query
            ->bindInt   ( ':blog_category_id', $data->blog_category_id )
            ->bindInt   ( ':user_id',          $data->user_id )
            ->bindInt   ( ':homepage',         $data->homepage )
            ->bindInt   ( ':published',        $data->published )
            ->bindString( ':title',            $data->title )
            ->bindString( ':subtitle',         $data->subtitle )
            ->bindString( ':text',             $data->text )
            ->bindString( ':cover',            $data->cover )
            ->bindString( ':image1',           $data->image1 )
            ->bindString( ':image2',           $data->image2 )
            ->bindString( ':image3',           $data->image3 )
            ->bindString( ':image4',           $data->image4 )
            ->bindString( ':image5',           $data->image5 )
            ->bindString( ':image6',           $data->image6 )
            ->bindString( ':image7',           $data->image7 )
            ->bindString( ':image8',           $data->image8 )
            ->bindString( ':image9',           $data->image9 )
            ->bindString( ':image10',          $data->image10 )
            ->execute();

        return db::lastInsertId();

    }

    static public function update( data_blog_article $data )
    {

        $sql = '
            UPDATE blog_article
            SET `blog_category_id` = :blog_category_id,
                `homepage`         = :homepage,
                `title`            = :title,
                `subtitle`         = :subtitle,
                `short`            = :short,
                `text`             = :text
            WHERE id = :id
        ';

        $query = db::prepare( $sql );
        $query
            ->bindInt   ( ':blog_category_id', $data->blog_category_id )
            ->bindInt   ( ':homepage',         $data->homepage )
            ->bindString( ':title',            $data->title )
            ->bindString( ':subtitle',         $data->subtitle )
            ->bindString( ':text',             $data->text )
            ->bindInt   ( ':id',               $data->id )
            ->execute();

    }

    static public function delete( $id, $user_id )
    {

        $sql = 'DELETE FROM blog_article WHERE id = :id AND user_id = :user_id';

        $query = db::prepare( $sql );
        $query->bindInt( ':id',      $id );
        $query->bindInt( ':user_id', $user_id );
        $query->execute();

    }

    static public function getById( $id )
    {

        $sql = 'SELECT * FROM blog_article WHERE id = :id';

        $query = db::prepare( $sql );
        $query->bindInt( ':id', $id )->execute();

        $row = $query->fetch();

        return new data_blog_article( $row );

    }

    static public function getFullList( $page, $order='id DESC' )
    {

        if( empty( $page ) )
        {
            $page = 1;
        }

        $start = ($page - 1) * constant::ADMIN_ARTICLES_PER_PAGE;
        $end   = ($page * constant::ADMIN_ARTICLES_PER_PAGE) -1;


        //$result = cache_category::returnFullList( $order );

        if( empty( $result ) )
        {

            $sql = "SELECT * FROM blog_article ORDER BY {$order} LIMIT {$start}, {$end}";

            $query = db::prepare( $sql );
            $query->execute();

            $result = new data_array();
            while( $row = $query->fetch() )
            {
                $result->add( new data_blog_article( $row ) );
            }

            //cache_category::saveFullList( $result, $order );

        }

        return $result;

    }
/*
    static public function getHomepageList()
    {

        //$result = cache_category::returnHomeCategories();

        if( empty( $result ) )
        {

            $sql = 'SELECT * FROM news_category WHERE homepage > 0 ORDER BY `homepage` ASC';

            $query = db::prepare( $sql );
            $query->execute();

            $result = new data_array();
            while( $row = $query->fetch() )
            {
                $result->add( new data_news_category( $row ) );
            }

            //cache_category::saveHomeCategories( $result );

        }

        return $result;

    }


    /*
    static public function getByRouting( $routing, $parent )
    {

        $category = model_category::getByRouting( $parent );

        $sql = '
            SELECT *
            FROM article
            WHERE routing = :routing
                AND category_id = :category_id
        ';

        $query = db::prepare( $sql );
        $query
            ->bindString( ':routing',     $routing )
            ->bindInt   ( ':category_id', $category->id )
            ->execute();

        $row = $query->fetch();

        $journalist = model_journalist::getById( $row['id'] );

        return new data_article( $row, $category, $journalist );

    }

    */

}