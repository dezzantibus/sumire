<?php

class model_recipe_ingredient extends model
{


    /*
    public $recipe_entry_id;

    public $recipe_ingredient_id;

    public $quantity;

    */

    static public function create( data_recipe_ingredient $data )
    {

        $sql = '
            INSERT INTO recipe_entry_ingredient
                ( `recipe_entry_id`, `recipe_ingredient_id`, `quantity` )
            VALUES
                ( :recipe_entry_id,  :recipe_ingredient_id,  :quantity )
        ';

        $query = db::prepare( $sql );
        $query
            ->bindInt   ( ':recipe_entry_id',      $data->recipe_entry_id )
            ->bindInt   ( ':recipe_ingredient_id', $data->recipe_ingredient_id )
            ->bindString( ':quantity',             $data->quantity )
            ->execute();

        return db::lastInsertId();

    }

    static public function deleteForRecipe( $recipe_entry_id )
    {

        $sql = 'DELETE FROM recipe_entry_ingredient WHERE recipe_entry_id = :recipe_entry_id';

        $query = db::prepare( $sql );
        $query->bindInt( ':recipe_entry_id', $recipe_entry_id );
        $query->execute();

    }

    static public function getForRecipe( $recipe_entry_id )
    {

        $sql = 'SELECT * FROM recipe_entry_ingredient WHERE recipe_entry_id = :recipe_entry_id';

        $query = db::prepare( $sql );
        $query->bindInt( ':recipe_entry_id', $recipe_entry_id )->execute();

        $result = new data_array();

        while( $row = $query->fetch() )
        {
            $result->add( new data_recipe_ingredient( $row ) );
        }

        return $result;

    }

    static public function getFullList()
    {

        $sql = 'SELECT * FROM recipe_ingredient ORDER BY english';

        $query = db::prepare( $sql );
        $query->execute();

        $result = new data_array();

        while( $row = $query->fetch() )
        {
            $result->add( new data_ingredient( $row ) );
        }

        return $result;

    }

}