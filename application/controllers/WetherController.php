<?php
namespace application\controllers;

use application\core\Controller;

class WetherController extends Controller {


    public function wetherAction(){
        $ch = curl_init('https://www.gismeteo.ua/weather-zaporizhia-5093/');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);//ставим флаг, что бы сохраняло в переменную результат
        $html = curl_exec($ch);//получаем код всей страницы
        $str = '<!-- Header';
        $html_style = explode($str , $html);//отрезаем стили
        $html_style = $html_style[0];
        $str = '<div class="widget__container"';//
        $html = stristr($html,$str);//
        $str = 'widget__row widget__row_anchor'; //
        $html = explode($str , $html);// вырезаем необходимый нам контейнет
        $html_style .= $html[0];
        $find = 'widget__row{display:table;width:100%;height:100%';
        $repl = 'widget__row{display:table;width:35%;height:100%';
        $vars = str_replace($find, $repl, $html_style);// немного меняем стили, что бы было ровненько.
        $this->view->render($this->route['title'] , ['vars' => $vars]);//не знал что парсить,поэтому спарсил цеый контейнер со стилями
    }
}