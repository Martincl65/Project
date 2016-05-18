<?php

namespace App;

use \PDO;

class Database{

    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    public function __construct($db_name, $db_user = 'root', $db_pass = 'amc56', $db_host = 'localhost'){
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    /**
     * @return \PDO
     */
    private function getPDO(){
        $pdo = new PDO('mysql:dbname='.$this->db_name.';host='.$this->db_host, $this->db_user, $this->db_pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->pdo = $pdo;
        return $pdo;
    }

    /**
     * @param string $statement
     * @param string $className
     * @return array
     */
    public function query($statement, $className){
        $req = $this->getPDO()->query($statement);
        return $req->fetchAll(\PDO::FETCH_CLASS, $className);
    }

    /**
     * @param string $statement
     * @param array $parameters
     * @param string $className
     * @param bool $execute
     * @return bool|array
     */
    public function prepare($statement, $className, $parameters = [], $execute = false){
        $req = $this->getPDO()->prepare($statement);
        if(sizeof($parameters)){
            $req->execute($parameters);
        }
        return ($execute == false) ? $req->fetchAll(\PDO::FETCH_CLASS, $className) : true;
    }
}