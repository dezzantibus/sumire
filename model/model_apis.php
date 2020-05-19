<?php

class model_apis extends model
{

    static public function covid_id()
    {

        $file = 'https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-andamento-nazionale/dpc-covid19-ita-andamento-nazionale.csv';

        $data = array_map( 'str_getcsv', file( $file ) );

        $data_today     = $data[ count( $data ) - 2 ];
        $data_yesterday = $data[ count( $data ) - 3 ];

        $data = array(
            'data'                => data_news_article::dateForDisplay( substr( $data_today[0], 0, 10 ) ),
            'variazione_positivi' => $data_today[7],
            'nuovi_positivi'      => $data_today[8],
            'nuovi_morti'         => $data_today[10] - $data_yesterday[10],
            'nuovi_tamponi'       => $data_today[12] - $data_yesterday[12],
        );

        return $data;

    }

}