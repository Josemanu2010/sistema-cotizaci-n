<?php

    $prepros = true;
    $composer = false;

    define('IS_LOCAL', in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']));
    define('PORT', '8848');
    define('URL', (IS_LOCAL ? $prepros ? 'http://127.0.0.1:'.PORT : 'http://127.0.0.1/' : '_url_production_'));    
    
    
    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', getcwd().DS);
    define('APP', ROOT.'app'.DS);
    
    define('ASSETS', ROOT.'asstes'.DS);
    define('CSS', URL.'asstes/css'.DS);
    define('JS', URL.'asstes/js'.DS);
    define('IMG', URL.'asstes/img'.DS);
    define('PLUGINS', URL.'asstes/plugins'.DS);

    define('TEMPLATES', ROOT.'templates'.DS);
    define('INCLUDES', TEMPLATES.'includes'.DS);
    define('MODULES', TEMPLATES.'modules'.DS);
    define('VIEWS', TEMPLATES.'views'.DS);

    
    define('', '');
    define('APP_NAME', 'Sistema de cotización');
    


    
    