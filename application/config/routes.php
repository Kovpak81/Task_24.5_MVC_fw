<?php

// такой подход необходим для создания в роутере массива в виде: регулярное значение(это первые ключи в этом сложном массиве) = массиву controller и action. Регулярки необходимы для определения есть ли у нас определенная страница и если есть, то направление уже на определенную страницу из подмассива

return [

    'main/index' => [
        'controller' => 'main',
        'action' => 'index'
    ],

    'main/contact' => [
        'controller' => 'main',
        'action' => 'contact'
    ],

    'main/about' => [
        'controller' => 'main',
        'action' => 'about'
    ],

    'main/phpinfo' => [
        'controller' => 'main',
        'action' => 'phpinfo'
    ],

    'account/login' => [
        'controller' => 'account',
        'action' => 'login'
    ],

    'account/register' => [
        'controller' => 'account',
        'action' => 'register'
    ],
    
    'news/show' => [
        'controller' => 'news',
        'action' => 'show'
    ],

];