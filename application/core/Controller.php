<?php

namespace application\core;

use application\core\View;

abstract class Controller {

    public $route;
    public $view;
    public $acl;

    public function __construct($route){ //при вызове в Router.php получаем параметры из routs.php
        $this->route = $route;//присвоим суда, будем использовать в других методах
        $this->view = new  View($route);
        $this->model = $this->loadModel($route['controller']);//модель имеет одинаковое название с контроллером
        if(!$this->checkRoots()){ //если метод вернет фолс то редиректим на логин
            $this->view->redirect('/account/login');
        }
        //по этому передаем в функцыю загрузки его название
    }

    public function checkCaptcha(){//проверяемкапчу
        if(is_numeric($_POST['captcha'])&&!(md5($_POST['captcha']) == $_SESSION['captcha'])){
            $vars = 'application/messages/captchaError.php';
            $this->view->render($this->route['title'], ['message' => $vars]);
            exit();
        }
    }

    public function checkData(){// проверяемданные формы, дополнительная проверка
                                // помимо той, что реализована с помощью Bootstrap
        if(isset($_POST['email'])&&!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $vars = 'application/messages/forgetEmail.php';//все сообщения лежат тут
            $this->view->render($this->route['title'], ['message' => $vars]);
            exit();
        }

        if(isset($_POST['name'])&&empty($_POST['name'])){
            $vars = 'application/messages/forgetName.php';//все сообщения лежат тут
            $this->view->render($this->route['title'], ['message' => $vars]);
            exit();
        }

        if(isset($_POST['email'])&&empty($_POST['email'])){
            $vars = 'application/messages/forgetEmail.php';
            $this->view->render($this->route['title'], ['message' => $vars]);
            exit();
        }
        if(isset($_POST['password'])&&empty($_POST['password'])){
            $vars = 'application/messages/forgetPassword.php';
            $this->view->render($this->route['title'], ['message' => $vars]);
            exit();
        }
    }


    public function checkRoots(){
        $this->acl = require $_SERVER['DOCUMENT_ROOT'].'/application/acl/'.$this->route['controller'].'.php';
        if($this->isAcl('all')){// проверяем, есть ли данный Экшен(страница) в массиве all в acl
            return true;//если да, летит тру
        }elseif (isset($_SESSION['user']['role']) == "auth" && $this->isAcl('auth')){// проверяем, есть ли данный Экшен(страница) в массиве auth в acl
            return true;//если да, летит тру                                и открыта ли сессия "auth"
        }elseif (isset($_SESSION['user']['role']) == 'admin' && $this->isAcl('admin')){// проверяем, есть ли данный Экшен(страница) в массиве admin в acl
            return true;//если да, летит тру                                и открыта ли сессия "admin"
        }
        return false;//в других случаях летит фолс.
    }

    public function isAcl($key){ //метод проверяет, есть ли в текущем массиве acl по ключу наша страница(то есть экшен)
        return (in_array($this->route['action'] , $this->acl[$key]));
    }
    
    public function addUser($user){
        $_SESSION['user']['name'] = $user[0]['name'];//и присваеваем нужные значения сессии
        $_SESSION['user']['role'] = $user[0]['role'];
        $_SESSION['user']['id'] = $user[0]['id'];
    }
    
    public function loadModel($name){
        $path = 'application\models\\'.ucfirst($name);//формируем маршрут к необходимой модели
        if(class_exists($path)){
            return new $path;
        }

    }


}
