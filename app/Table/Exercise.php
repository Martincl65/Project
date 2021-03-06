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
    /**
     * @var Language
     */
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
     * @return string
     */
    public function getTime(){
        return $this->time;
    }

    /**
     * @return Language|NULL
     */
    public function getLanguage(){
        if(property_exists($this, 'id_language') && $this->language == NULL){
            $this->language = Language::find($this->id_language);
        }
        return $this->language;
    }
    /**
     * @param string $title
     */
    public function setTitle($title){
        $this->title = $title;
    }

    /**
     * @param int $id
     */
    public function setId($id){
        $this->id = $id;
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

    public function setLanguage($language){
        $this->language = $language;
    }

}