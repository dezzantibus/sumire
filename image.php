<?php
/**
 * Created by PhpStorm.
 * User: zante
 * Date: 17/06/2015
 * Time: 11:49
 */

class image
{

    public static function retrieve( $file, $path, $width, $height )
    {

        $file_path = __DIR__ . "/upload/$path/";

        $processed_filename = $file_path . $file . '_' . $width . '_' . $height . '.jpg';

        if( file_exists( $processed_filename ) )
        {
            $image = imagecreatefromjpeg( $processed_filename );
        }
        else
        {

            $original_filename = $file_path . $file . '.jpg';

            $image = imagecreatefromjpeg( $original_filename );

            $original_width  = imagesx( $image );
            $original_height = imagesy( $image );

            if( ( $original_width / $width ) < ( $original_height / $height ) )
            {
                $new_width  = $width;
                $new_height = $original_height * ( $width / $original_width );
            }
            else
            {
                $new_height = $height;
                $new_width  = $original_width * ( $height / $original_height );
            }

            $temp = imagecreatetruecolor( $new_width, $new_height );

            imagecopyresampled( $temp, $image, 0, 0, 0, 0, $new_width, $new_height, $original_width, $original_height);

            $image = imagecreatetruecolor( $width, $height );

            $x = ( $new_width - $width ) / 2;
            $y = ( $new_height - $height ) / 2;

            imagecopyresampled( $image, $temp, 0, 0, $x, $y, $width, $height, $width, $height );

            imagejpeg( $image, $processed_filename );

        }

        header('Content-Type: image/jpeg');
        imagejpeg( $image );

    }

}

image::retrieve( $_GET['file'], $_GET['path'], $_GET['width'], $_GET['height'] );