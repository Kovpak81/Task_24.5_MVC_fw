<?php

// проект настроен: начало работы пишем в браузере (при запушенном хосте) пусто или main/index, или main/contact, или main/about, или main/phpinfo

require 'application/lib/dev.php'; 

use application\core\Router;

// делаем автоподключение файлов .php
spl_autoload_register(function($class)
{
    $path = str_replace('\\', '/', $class).'.php';
    if(file_exists($path))
    {
        require $path;
    }
}
);

session_start();


// класс роутер у меня не статический! на данном этапе фреймворка, так удобнее
$router = new Router;
$router->run();