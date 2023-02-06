<?php

namespace application\core;

use application\core\View;

abstract class Controller
{
    // переменная для получения массива значения controller и action
    public $route;

    // переменная для передачи $route со значением массива controller и action в класс View
    public $view;

    // опраделение массива переменных в файле view.php
    public $vars = [
        'main' => '',
        'about' => '',
        'contact' => '',
        'phpinfo' => '',
    ];

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = new View($route);
        // debug($this->route);
    }
}