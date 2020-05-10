<?php

class model_recipe_entry extends model
{

    static public function create( data_recipe_entry $data )
    {

        $sql = '
            INSERT INTO recipe_entry
                (
                `recipe_category_id`, `user_id`, `homepage`,
                `name`,  `description`, `notes`, `image`
                )
            VALUES
                (
                :recipe_category_id,  :user_id,  :homepage,
                :name,  :description,  :notes,  :image
                )
        ';

        $query = db::prepare( $sql );
        $query
            ->bindInt   ( ':recipe_category_id', $data->recipe_category_id )
            ->bindInt   ( ':user_id',            $data->user_id )
            ->bindInt   ( ':homepage',           $data->homepage )
            ->bindString( ':name',               $data->name )
            ->bindString( ':description',        $data->description )
            ->bindString( ':notes',              $data->notes )
            ->bindString( ':image',              $data->image )
            ->execute();

        return db::lastInsertId();

    }

    static public function update( data_recipe_entry $data )
    {

        $sql = '
            UPDATE recipe_entry
            SET `recipe_category_id` = :recipe_category_id,
                `homepage`           = :homepage,
                `name`               = :name,
                `description`        = :description,
                `notes`              = :notes,
                `image`              = :image
            WHERE id = :id
        ';

        $query = db::prepare( $sql );
        $query
            ->bindInt   ( ':recipe_category_id', $data->recipe_category_id )
            ->bindInt   ( ':homepage',           $data->homepage )
            ->bindString( ':name',               $data->name )
            ->bindString( ':description',        $data->description )
            ->bindString( ':notes',              $data->notes )
            ->bindString( ':image',              $data->image )
            ->bindInt   ( ':id',                 $data->id )
            ->execute();

    }

    static public function delete( $id, $user_id )
    {

        $sql = 'DELETE FROM recipe_entry WHERE id = :id AND user_id = :user_id';

        $query = db::prepare( $sql );
        $query->bindInt( ':id',      $id );
        $query->bindInt( ':user_id', $user_id );
        $query->execute();

    }

    static public function getById( $id )
    {

        $sql = 'SELECT * FROM recipe_entry WHERE id = :id';

        $query = db::prepare( $sql );
        $query->bindInt( ':id', $id )->execute();

        $row = $query->fetch();

        return new data_recipe_entry( $row );

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

            $sql = "SELECT * FROM recipe_entry ORDER BY {$order} LIMIT {$start}, {$end}";

            $query = db::prepare( $sql );
            $query->execute();

            $result = new data_array();
            while( $row = $query->fetch() )
            {
                $result->add( new data_recipe_entry( $row, model_recipe_step::getByRecipeId( $row['id'] ) ) );
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