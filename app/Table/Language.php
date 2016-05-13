<?php

namespace App\Table;

class Language extends Table{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $label;
    /**
     * @var string
     */
    protected static $table = 'Language';


    public function __construct(){
    }

    /**
     * @return int id
     */
    public function getId(){
        return $this->id;
    }

    /**
     * @return string label
     */
    public function getLabel(){
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel($label){
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function __toString(){
        return $this->label;
    }
}