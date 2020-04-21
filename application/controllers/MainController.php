<?php
namespace application\controllers;

use application\core\Controller;


class MainController extends Controller {

    public function indexAction(){
    $result = $this->model->getAll();
        $users = ['users' => $_SESSION['user']['name'], 'role' => $_SESSION['user']['role']];
        $this->view->render($this->route['title'], $users);
    }
}