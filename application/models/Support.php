<?php
namespace application\models;

use application\core\Model;

class Support extends Model {

    public function showRequests() {
        $sql = 'SELECT * FROM support';
        $result = $this->db->query($sql);
        return $result;
    }

    public function sendRequest($name,$email,$request) {
        $sql = 'INSERT INTO support ( name , email , request) VALUES ("'.$name.'","'.$email.'","'.$request.'")';
        $result = $this->db->query($sql);
        return $result;
    }

}