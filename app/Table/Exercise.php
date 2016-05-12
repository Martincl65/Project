<?php

namespace App\Table;

class Exercise extends Table{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $detail;
    /**
     * @var \DateTime
     */
    private $time;
    
    private $language;

    /**
     * @var string
     */
    protected static $table = 'Exercise';

    public function __construct(){
    }

    /**
     * @return int id
     */
    public function getId(){
        return $this->id;
    }

    /**
     * @return string title
     */
    public function getTitle(){
        return $this->title;
    }

    /**
     * @return string detail
     */
    public function getDetail(){
        return $this->detail;
    }

    /**
     * @return date|string
     */
    public function getTime(){
        return $this->time;
    }
    
    public function getLanguage(){
        return $this->language;
    }
    /**
     * @param string $title
     */
    public function setTitle($title){
        $this->title = $title;
    }

    /**
     * @param string $detail
     */
    public function setDetail($detail){
        $this->detail = $detail;
    }

    /**
     * @param $time
     */
    public function setTime($time){
        $this->time = $time;
    }

    public function setLanguage(){
        $this->language = $language;
    }

}