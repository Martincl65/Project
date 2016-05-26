<?php

namespace App\Table;

class Developer extends Table{

    /** @var int */
    private $id;

    /** @var string */
    private $firstName;

    /** @var string */
    private $lastName;

    /** @var string */
    private $username;

    /** @var string */
    private $password;

    /** @var Test */
    private $test;

    /** @var string */
    protected static $table = 'Developer';

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
     * @return Test
     */
    public function getTest(){
        if(property_exists($this, 'id_test') && $this->test == NULL){
            $this->test = Test::find($this->id_test);
        }
        return $this->test;
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