<?php

class model_recipe_step extends model
{

    static public function create( data_recipe_step $data )
    {

        $sql = '
            INSERT INTO recipe_step
                ( `recipe_entry_id`, `description`, `image` )
            VALUES
                ( :recipe_entry_id,  :description,  :image )
        ';

        $query = db::prepare( $sql );
        $query
            ->bindInt   ( ':recipe_entry_id', $data->recipe_entry_id )
            ->bindString( ':description',     $data->description )
            ->bindString( ':image',           $data->image )
            ->execute();

        return db::lastInsertId();

    }

    static public function update( data_recipe_step $data )
    {

        $sql = '
            UPDATE recipe_step
            SET `recipe_entry_id` = :recipe_entry_id,
                `description`     = :description,
                `image`           = :image
            WHERE id = :id
        ';

        $query = db::prepare( $sql );
        $query
            ->bindInt   ( ':recipe_entry_id', $data->recipe_entry_id )
            ->bindString( ':description',     $data->description )
            ->bindString( ':image',           $data->image )
            ->bindInt   ( ':id',              $data->id )
            ->execute();

    }

    static public function delete( $id, $user_id )
    {

        $sql = 'DELETE FROM recipe_step WHERE id = :id AND user_id = :user_id';

        $query = db::prepare( $sql );
        $query->bindInt( ':id',      $id );
        $query->bindInt( ':user_id', $user_id );
        $query->execute();

    }

    static public function getById( $id )
    {

        $sql = 'SELECT * FROM recipe_step WHERE id = :id';

        $query = db::prepare( $sql );
        $query->bindInt( ':id', $id )->execute();

        $row = $query->fetch();

        return new data_recipe_entry( $row );

    }

    static public function getByRecipeId( $recipe_entry_id, $order='id ASC' )
    {

        //$result = cache_category::returnFullList( $order );

        if( empty( $result ) )
        {

            $sql = "SELECT * FROM recipe_step WHERE recipe_entry_id = :recipe_entry_id ORDER BY {$order}";

            $query = db::prepare( $sql );
            $query->bindInt( ':recipe_entry_id', $recipe_entry_id );
            $query->execute();

            $result = new data_array();
            while( $row = $query->fetch() )
            {
                $result->add( new data_recipe_step( $row ) );
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