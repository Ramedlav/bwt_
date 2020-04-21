<?php

namespace application\models;

use application\core\Model;

class Main extends Model {

    public function getAll(){
        $result = $this->db->query('SELECT name FROM users');
        return $result;
    }

}