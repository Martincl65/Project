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


    public function __construct(array $data){
        $this->hydrate($data);
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

    public function register($content){
        $sql = 'INSERT INTO Response VALUE (' .$content. ')';
        return $sql;
    }
}