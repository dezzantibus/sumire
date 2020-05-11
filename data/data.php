<?php

/**
 * Class data
 *
 * The data classes are dynamic and contain the data of one row of the database
 * Any method in these classes will be STRICTLY for the immediate manipulation of
 * the data. For example displaying the date in a particular format or rounding
 * decimal numbers.
 */
abstract class data
{

    public static function encode_id( $id )
    {
        return base_convert( $id, 10, 36 );
    }

    public static function decode_id( $id )
    {
        return base_convert( $id, 36, 10 );
    }

    public static function clean_for_url( $string )
    {

        $search  = array( ' ', '&', '%', '?', '$', '+', 'ë', 'Ë', 'ç', '"', ',', "'", '(', ')', '.', '€',   '/', '\\', '<br>' );
        $replace = array( '-', '',  '',  '',  '',  '',  'e', 'E', 'c', '',  '',  '',  '',  '',  '',  'euro', '', '',   '' );

        return str_replace( $search, $replace, trim( $string ) );

    }
	
	public static function dateForDisplay( $in )
	{
		switch( date( 'D', strtotime( $in ) ) )
        {
            case 'Mon': $day = '月曜日 '; break;
            case 'Tue': $day = '火曜日 '; break;
            case 'Wed': $day = '水曜日 '; break;
            case 'Thu': $day = '木曜日 '; break;
            case 'Fri': $day = '金曜日 '; break;
            case 'Sat': $day = '土曜日 '; break;
            case 'Sun': $day = '日曜日 '; break;
            default: $day = '';
        }

        return $day . date( 'Y年 n月 j日', strtotime( $in ) );
	}

	public static function dateForLink( $in )
	{
        return date( 'Y-m-d', strtotime( $in ) );
	}

}