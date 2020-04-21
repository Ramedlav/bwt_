<?php
namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller {

    protected $name;
    protected $password;
    protected $email;


    public function loginAction(){

        if (isset($_POST['logout'])){ //проверяем, послали ли нам форму для выхода
            session_destroy();//если да, то кончаем сессию
            $this->view->redirect('/account/login');//и редиректим на логин
        }

        if(isset($_SESSION['user'])){$this->view->redirect('/');}//редирект если сессия есть

        $this->checkData();

        if(!empty($_POST['email'])&&!empty($_POST['password'])){//при полуении данных
            $user = $this->model->findUser($_POST['email'] , $_POST['password'] );//выполняем поиск пользователя в базе

            if(!empty($user)){//если юзера нашли

                $this->addUser($user);
                $this->view->redirect('/');
            }else{
                $vars = 'application/messages/wrongLogin.php';
                $this->view->render($this->route['title'] , ['message' => $vars]); exit;}
        }
        $this->view->render($this->route['title']);// передаем тайтл

    }


    public function registerAction(){

        if(isset($_SESSION['user'])){$this->view->redirect('/');}//редирект если сессия есть

        if(!empty($_POST['name'])&&!empty($_POST['password'])&&!empty($_POST['email'])){
            $user = $this->model->findUser($_POST['email']);
            if(!empty($user)){
                //не перенес проверкув checkData() потому что совпадение по почте нужно для логина
                $vars = 'application/messages/userExist.php';
                $this->view->render("Регистрация",['message' => $vars]);
                exit();
            }else{
                $this->model->registerUser($_POST['name'],$_POST['password'],$_POST['email']);
                $user = $this->model->findUser( $_POST['email']);
                $this->addUser($user);
                $this->view->redirect('/');//тут устроим проверку или не тут)) еще не знаю
            }
        }else{
            $this->checkData();
        }
        $this->view->render("регистрация");
    }

}
