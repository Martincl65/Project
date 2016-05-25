<?php

namespace App\Table;

use App\Database;

class DBAuth {
    
    private $db;
    
    public function __construct(Database $db){
        $this->db = $db;
    }

    public function getUserId(){
        if($this->logged()){
            return $_SESSION['auth'];
        }
        return false;
    }

    public function login($username, $password){
        $results = $this->db->prepare('SELECT * FROM Developer WHERE username = ?', 'App\Table\Developer',[$username]);
        if(sizeof($results)) {
            /** @var Developer $user */
            $user = $results[0];
            if($user){
                if ($user->getPassword() === sha1($password)) {
                    $_SESSION['auth'] = $user->getId();
                    return true;
                }
            }

        }
        return false;
    }

    public function logged(){
        return isset($_SESSION['auth']);
    }

    public function logout(){
        session_destroy();
    }

}

