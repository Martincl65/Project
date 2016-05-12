<?php

namespace App\Table;

class Level extends Table{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $label;

    /**
     * Level constructor.
     * @param string $label
     */
    public function __construct($label=''){
        $this->label=$label;
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
}