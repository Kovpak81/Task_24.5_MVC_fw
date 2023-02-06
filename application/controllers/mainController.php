<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        // опраделение массива переменных в файле view.php
        $this->vars['main'] = 'red';
        
        // подключение метода из класса View, который подключает дефолтную страницу, передаем значение $title
        $this->view->render('Главная страница', $this->vars);


    }

    public function contactAction()
    {
        $this->vars['contact'] = 'red';
        $this->view->render('Страница контактов', $this->vars);
    }
    
    public function aboutAction()
    {
        $this->vars['about'] = 'red';
        $this->view->render('Страница контакт', $this->vars);
    }

    public function phpinfoAction()
    {
        $this->vars['phpinfo'] = 'red';
        $this->view->render('Страница', $this->vars);
    }
}