<?php
return array(
    //'ÅäÖÃÏî'=>'ÅäÖÃÖµ'
    'DB_TYPE'               =>  'mysql',     // ?????????
    'DB_HOST'               =>  'localhost', // ?????????
    'DB_NAME'               =>  'hfhouse',          // ???????
    'DB_USER'               =>  'root',      // ?????
    'DB_PWD'                =>  '',          // ????
    'URL_MODEL'             => 2,            //rewrite ???index.php???
    'TMPL_PARSE_STRING'     =>array(
        'CSSPATH'=>'/Public/css',
        'JSPATH'=>'/Public/js',
        'IMAPATH'=>'/Public/image',
    ),
    'LAYOUT_ON'             => true,
    'LAYOUT_NAME'           => 'layout',
    'CITY_DATA'             => array(
        array(
            'cityname'=>'ºÏ·Ê',
            'areas'=>array(
                'luyq',
                'baohq',
            )
        ),
        array(
            'cityname'=>'Îßºþ',
            'areas'=>array(
                'jiujq',
                'wuhx',
            )
        )
    )
);