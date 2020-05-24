<?php

class model_user extends model
{

    /*
    static public function create( data_blog_article $data )
    {


        $sql = '
            INSERT INTO blog_article
                (
                `blog_category_id`, `user_id`, `homepage`, `title`, `subtitle`, `text`,
                `image1`, `image2`, `image3`, `image4`,
                `caption1`, `caption2`, `caption3`, `caption4`
                )
            VALUES
                (
                :blog_category_id,  :user_id,  :homepage,  :title,  :subtitle,  :text,
                :image1,  :image2, :image3,  :image4,
                :caption1,  :caption2,  :caption3,  :caption4
                )
        ';

        $query = db::prepare( $sql );
        $query
            ->bindInt   ( ':blog_category_id', $data->blog_category_id )
            ->bindInt   ( ':user_id',          $data->user_id )
            ->bindInt   ( ':homepage',         $data->homepage )
            ->bindString( ':title',            $data->title )
            ->bindString( ':subtitle',         $data->subtitle )
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

    static public function update( data_blog_article $data )
    {

        $sql = '
            UPDATE blog_article
            SET `blog_category_id` = :blog_category_id,
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
            ->bindInt   ( ':blog_category_id', $data->blog_category_id )
            ->bindInt   ( ':carousel',         $data->carousel )
            ->bindInt   ( ':homepage',         $data->homepage )
            ->bindString( ':title',            $data->title )
            ->bindString( ':subtitle',         $data->subtitle )
            ->bindString( ':text',             $data->text )
            ->bindInt   ( ':id',               $data->id )
            ->execute();

    }
*/

    static public function delete( $id )
    {

        $sql = 'DELETE FROM user WHERE id = :id';

        $query = db::prepare( $sql );
        $query->bindInt( ':id',      $id );
        $query->execute();

    }

    static public function getById( $id )
    {

        $sql = 'SELECT * FROM `user` WHERE id = :id';

        $query = db::prepare( $sql );
        $query->bindInt( ':id', $id )->execute();

        $row = $query->fetch();

        return new data_user( $row );

    }

    static public function login( $email, $pass )
    {

        $sql = 'SELECT * FROM `user` WHERE email = :email AND password = :password';

        $query = db::prepare( $sql );
        $query
            ->bindString( ':email',    $email )
            ->bindString( ':password', self::hash( $pass ) )
            ->execute();

        $row = $query->fetch();

        if( empty( $row ) )
        {
            return null;
        }

        return new data_user( $row );

    }

    static public function hash( $value )
    {
        return hash( 'sha256', '=rie=' . $value . '=zante=' );
    }

}