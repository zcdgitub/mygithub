<?php
return array(
    'URL_MODEL'=>2,
	'S_TIME'			=>	10,
    'LOAD_EXT_CONFIG'   =>  'db,email,sdk,system',
	'MODULE_ALLOW_LIST' =>  array('Home','Admin'),
    'DEFAULT_MODULE'    =>  'Home',
    //'TMPL_FILE_DEPR'    =>  '_',
    'TMPL_PARSE_STRING' =>  array(
        '__JS__'    =>  '/Public/Js',
        '__CSS__'   =>  '/Public/Css',
        '__IMG__'   =>  '/Public/Img',    
        '__layer__'   => '/Public/Layer'     
    )
);

