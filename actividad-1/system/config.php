<?php
    defined('BASEPATH') or exit('No se permite acceso directo');

    /* Valores URI */

    define('URI', $_SERVER['REQUEST_URI']);

    define('REQUEST_METHOD', $_SERVER['REQUEST_METHOD']);

    /* Valores CORE */
    define('CORE', 'system/core/');

    define('DEFAULT_CONTROLLER', 'Home');

    /* Valores de rutas */
    define('FOLDER_PATH', '/prueba_web/actividad-1/');

    define('PATH_CONTROLLERS', 'app/controllers/');

    define('PATH_VIEWS', FOLDER_PATH . 'app/views/');

    define('HELPER_PATH', 'system/helpers/');
    
    define('ROOT', $_SERVER['DOCUMENT_ROOT']);

    define('CSS_PATH', FOLDER_PATH . '/public/css/');

    define('LIBS_ROUTE', ROOT . FOLDER_PATH . 'system/libs/');

    /* Credenciales Base de datos */
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DB_NAME', 'actividad_1');

    /* Nivel de reporte de errores */
    define('ERROR_REPORTING_LEVEL', -1);
    
?>