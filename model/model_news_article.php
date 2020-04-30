<?php

class model_news_article extends model
{

    static public function create( data_news_article $data )
    {

        $sql = '
            INSERT INTO news_article
                (
                `news_category_id`, `carousel`, `homepage`, `title`, `subtitle`, `short`, `text`,
                `image1`, `image2`, `image3`, `image4`,
                `caption1`, `caption2`, `caption3`, `caption4`
                )
            VALUES
                (
                :news_category_id,  :carousel,  :homepage,  :title,  :subtitle,  :short,  :text,
                :image1,  :image2, :image3,  :image4,
                :caption1,  :caption2,  :caption3,  :caption4
                )
        ';

        $query = db::prepare( $sql );
        $query
            ->bindString( ':news_category_id', $data->news_category_id )
            ->bindInt   ( ':carousel',         $data->carousel )
            ->bindInt   ( ':homepage',         $data->homepage )
            ->bindString( ':title',            $data->title )
            ->bindString( ':subtitle',         $data->subtitle )
            ->bindString( ':short',            $data->short )
            ->bindString( ':text',             $data->text )
            ->bindString( ':image1',           $data->image1 )
            ->bindString( ':image2',           $data->image2 )
            ->bindString( ':image3',           $data->image3 )
            ->bindString( ':image4',           $data->image4 )
            ->bindString( ':caption1',         $data->caption1 )
            ->bindString( ':caption2',         $data->caption2 )
            ->bindString( ':caption3',         $data->caption3 )
            ->bindString( ':caption4',         $data->caption4 )
            ->execute();

        return db::lastInsertId();

    }

    static public function update( data_news_article $data )
    {

        $sql = '
            UPDATE news_article
            SET `news_category_id` = :news_category_id,
                `carousel`         = :carousel,
                `homepage`         = :homepage,
                `title`            = :title,
                `subtitle`         = :subtitle,
                `short`            = :short,
                `text`             = :text
            WHERE id = :id
        ';

        $query = db::prepare( $sql );
        $query
            ->bindString( ':news_category_id', $data->news_category_id )
            ->bindInt   ( ':carousel',         $data->carousel )
            ->bindInt   ( ':homepage',         $data->homepage )
            ->bindString( ':title',            $data->title )
            ->bindString( ':subtitle',         $data->subtitle )
            ->bindString( ':short',            $data->short )
            ->bindString( ':text',             $data->text )
            ->bindInt   ( ':id',               $data->id )
            ->execute();

    }

    static public function delete( $id )
    {

        $sql = 'DELETE FROM news_article WHERE id = :id';

        $query = db::prepare( $sql );
        $query->bindInt( ':id', $id )->execute();

    }

    static public function getById( $id )
    {

        $sql = 'SELECT * FROM news_article WHERE id = :id';

        $query = db::prepare( $sql );
        $query->bindInt( ':id', $id )->execute();

        $row = $query->fetch();

        return new data_news_article( $row );

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

            $sql = "SELECT * FROM news_article WHERE ORDER BY `{$order}` LIMIT {$start}, {$end}";

            $query = db::prepare( $sql );
            $query->execute();

            $result = new data_array();
            while( $row = $query->fetch() )
            {
                $result->add( new data_news_article( $row ) );
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