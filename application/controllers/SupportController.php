<?php
namespace application\controllers;

use application\core\Controller;

class SupportController extends Controller {

    public function showAction(){
        $vars = $this->model->showRequests();

        $this->view->render("поддержка" , $vars);
    }

    public function sendAction(){

        if(!empty($_POST['captcha'])&&!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['request'])&&filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $this->checkCaptcha();
            $this->model->sendRequest($_POST['name'] , $_POST['email'] , $_POST['request']);
            $this->view->render("Сообщение отправлено");
        }else{
            $this->checkData();

            $this->view->render($this->route['title']);
        }
    }
}