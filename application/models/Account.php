<?php
namespace application\models;

use application\core\Model;

class Account extends Model {

    public function findUser($email , $password = []){
        if(!empty($password)){
            $sql = 'SELECT * FROM users WHERE email = "'.$email.'" AND password = "'.$password.'"';
        }else {
            $sql = 'SELECT * FROM users WHERE email = "'.$email.'"';
        }

        $result = $this->db->query($sql);
//        debug($result);
        return $result;
    }

    public function registerUser($name,$password,$email){
        $sql = 'INSERT INTO users (name , password , email , role) VALUES ("'.$name.'" , "'.$password.'" , "'.$email.'" , "auth")';
        $this->db->query($sql);
    }

}