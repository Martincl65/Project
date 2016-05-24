<?php

namespace App\Table;

class Developer extends Table{

    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $firstName;
    /**
     * @var string
     */
    private $lastName;
    /**
     * @var string
     */
    private $username;
    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    protected static $table = 'Developer';

    
    public function __construct(){
    }

    /**
     * @return int id
     */
    public function getId(){
        return $this->id;
    }

    /**
     * @return string firstName
     */
    public function getFirstName(){
        return $this->firstName;
    }

    /**
     * @return string lastName
     */
    public function getLastName(){
        return $this->lastName;
    }

    /**
     * @return string username
     */
    public function getUsername(){
        return $this->username;
    }

    /**
     * @return string password
     */
    public function getPassword(){
        return $this->password;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName){
        $this->lastName = $lastName;
    }
}