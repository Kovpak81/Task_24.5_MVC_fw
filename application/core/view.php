<?php

namespace application\core;

class View
{
    public $path;

    // переменная для получения массива значения controller и action
    public $route;

    // переменная для страницы шаблона (дефолтная страница)
    public $layout = 'default';

    // получаем из контроллера (controller.php) переменную $route со значением массива controller и action
    public function __construct($route)
    {
        $this->route = $route;
        // проверка
        // debug($this->route); 

        // передаем переменной путь используя полученный массив в $route
        $this->path = $route['controller'].'/'.$route['action'];
        // проверка полученного пути
        // debug($this->path);
    }

    public function render($title, $vars = [])
    {
        // импортируем переменные из массива
        extract($vars);

        // копируем вид (view) в буфер и присваиваем переменной $content
        ob_start();

        // проверим на существование такого файла в директории view (а дефолтная страница будет по-любому)
        if(file_exists('application/view/'.$this->path.'.php'))
        {
            // подключаем путь, что по сути уже является переменной $content в странице шаблоне-дефолтной странице
            require 'application/view/'.$this->path.'.php';
            $content = ob_get_clean();

            // подключаем страницу шаблон (страница по умолчанию - дефолтная)
            require 'application/view/layouts/'.$this->layout.'.php';
        }
        else
        {
            echo 'Вид не найден: '.$this->path.'.php';
        }
    }

    public function redirect($url)
    {
        header('location: '.$url);
        exit;
    }

    // переменная $code передается из $router.php, когда возникает ошибка
    public static function errorCode($code)
    {
        http_response_code($code);
        require 'application/view/errors/'.$code.'.php'; 
        // выход, чтобы код дальше не выполнялся
        exit;
    }

}