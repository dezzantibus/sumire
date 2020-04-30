<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05/07/2015
 * Time: 21:40
 */

class file
{

    static public function saveFromPost( $input, $path )
    {

        if( empty( $_FILES[ $input ]['tmp_name'] ) )
        {
            return false;
        }

        $localFile  = '/var/www/temp/' .  $_FILES[ $input ]['name'];
        $remoteFile = $path . '/' . $_FILES[ $input ]['name'];

        move_uploaded_file( $_FILES[ $input ]['tmp_name'], $localFile );

        $s3 = new S3( constant::KEY, constant::SECRET );

        $s3->putObjectFile( $localFile, constant::BUCKET, $remoteFile, S3::ACL_PUBLIC_READ, array(), 'image/jpeg' );

        unlink( $localFile );

        return 'images.sumire.it/'. $remoteFile;

    }


}