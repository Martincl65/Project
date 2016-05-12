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
     * Response constructor.
     * @param string $content
     */
    public function __construct($content=''){
        $this->content = $content;
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
}