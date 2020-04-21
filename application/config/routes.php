<?php
return[
    '' => [
        'controller' => 'main',
        'action' => 'index',
        'title' => 'Главная страница',
    ],

    'account/login' => [
        'controller' => 'account',
        'action' => 'login',
        'title' => 'Вход',
    ],

    'account/register' => [
        'controller' => 'account',
        'action' => 'register',
        'title' => 'Регистрация',
    ],

    'support/show' => [
    'controller' => 'support',
        'action' => 'show',
        'title' => 'Поддержка',
    ],

    'support/send' => [
        'controller' => 'support',
        'action' => 'send',
        'title' => 'Поддержка',
    ],

    'wether/wether' => [
        'controller' => 'wether',
        'action' => 'wether',
        'title' => 'Погода сегодня',
    ],

];