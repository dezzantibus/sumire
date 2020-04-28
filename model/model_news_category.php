<?php

class model_news_category extends model
{

    static public function create( data_news_category $data )
    {

        $sql = '
            INSERT INTO news_category
                ( `category`, `order`, `homepage`, `homepage_box` )
            VALUES
                ( :category,  :order,  :homepage,  :homepage_box )
        ';

        $query = db::prepare( $sql );
        $query
            ->bindString( ':category',     $data->category )
            ->bindInt   ( ':order',        $data->order )
            ->bindInt   ( ':homepage',     $data->homepage )
            ->bindString( ':homepage_box', $data->homepage_box )
            ->execute();

        return db::lastInsertId();

    }

    static public function update( data_news_category $data )
    {

        $sql = '
            UPDATE news_category
            SET `category`     = :category,
                `order`        = :order,
                `homepage`     = :homepage,
                `homepage_box` = :homepage_box
            WHERE id = :id
        ';

        $query = db::prepare( $sql );
        $query
            ->bindString( ':category',     $data->category )
            ->bindInt   ( ':order',        $data->order )
            ->bindInt   ( ':homepage',     $data->homepage )
            ->bindString( ':homepage_box', $data->homepage_box )
            ->bindInt   ( ':id',           $data->id )
            ->execute();

    }

    static public function delete( $id )
    {

        $sql = 'DELETE FROM news_category WHERE id = :id';

        $query = db::prepare( $sql );
        $query->bindInt( ':id', $id )->execute();

    }

    static public function getById( $id )
    {

        $sql = 'SELECT * FROM news_category WHERE id = :id';

        $query = db::prepare( $sql );
        $query->bindInt( ':id', $id )->execute();

        $row = $query->fetch();

        return new data_news_category( $row );

    }

    static public function getFullList( $order='order' )
    {

        //$result = cache_category::returnFullList( $order );

        if( empty( $result ) )
        {

            $sql = "SELECT * FROM news_category WHERE `order` > 0 ORDER BY `$order` ASC";

            $query = db::prepare( $sql );
            $query->execute();

            $result = new data_array();
            while( $row = $query->fetch() )
            {
                if( !is_numeric($row[ $order ]) OR $row[ $order ] > 0 )
                {
                    $result->add( new data_news_category( $row ) );
                }
            }

            //cache_category::saveFullList( $result, $order );

        }

        return $result;

    }

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
        static public function getByRouting( $routing )
        {

            $sql = 'SELECT * FROM category WHERE routing = :routing';

            $query = db::prepare( $sql );
            $query->bindString( ':routing', $routing )->execute();

            $row = $query->fetch();

            return new data_category( $row );

        }

    */

}