<?php

namespace App\Table;

class Response extends Table{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $content;
    /**
     * @var string
     */
    protected static $table = 'Response';


    public function __construct(){
    }

    /**
     * @return int id
     */
    public function getId(){
        return $this->id;
    }

    /**
     * @return string content
     */
    public function getContent(){
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content){
        $this->content = $content;
    }
    
    /**
     * Méthode permettant de convertir un objet en tableau
     * @return array
     */
    public function toArray(){
        return get_object_vars($this);
    }
}