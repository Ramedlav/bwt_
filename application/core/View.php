<?php

namespace application\core;

class View {
    public $path;
    public $route;
    public $layout = 'default';


    public function __construct($route){
        $this->route = $route;
        $this->path = $route['controller'].'/'.$route['action'];
    }

    public function render($title, $vars = []){
        extract($vars);//распаковываем массив на переменные
        $path = 'application/views/'.$this->path.'.php';//пишем путь к виду
        $nav = 'application/navitems/'.$this->route['action'].'Nav.php';//добавил меню из файла
        if (file_exists($path)){
            ob_start();//начало буфиризации контента
            require $nav;
            require $path;
            $content = ob_get_clean();//конец буфиризации
            require 'application/views/layouts/'.$this->layout.'.php';
        }else{
            echo "вид не найден ".$this->path;
        }
    }

    public function redirect($url){
        header('location: '.$url);//redirekt))
        exit;
    }

    public static function errorCode($code){
        http_response_code($code); //присваеваем новый код ошибки
        $path = 'application/views/errors/'.$code.'.php';// передаем путь к файлу с ошибкой и
        if(file_exists($path)){
            require $path; // тут его выводим на экран
        }
        exit;
    }
}