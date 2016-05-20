<?php

namespace App\Table;

use App\Database;

class DBAuth {
    
    private $db;
    
    public function __construct(Database $db){
        $this->db = $db;
    }

    public function login($username, $password){
        $user = $this->db->prepare('SELECT * FROM User WHERE username = ?', [$username], null, true);
    }

    public function logged(){
        return isset($_SESSION['auth']);
    }

}

