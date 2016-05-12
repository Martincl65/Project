<?php

namespace App\Table;

class Test extends Table{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $detail;

    /**
     * @param string $detail
     */
    public function __construct($detail = ''){
        $this->detail = $detail;
    }

    /**
     * @return int
     */
    public function getId(){
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDetail(){
        return $this->detail;
    }

    /**
     * @param string $detail
     */
    public function setDetail($detail){
        $this->detail = $detail;
    }
    /*
    public function display(){
        $res = 'SELECT e.title Exercice, e.language langage, e.detail description, e.time temps, t.level niveau FROM Test t INNER JOIN Exercise e ON e.id = t.id WHERE t.id='1'';
        return $res;
    }
    */

}