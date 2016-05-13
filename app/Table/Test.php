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
     * @var int
     */
    private $level;
    /**
     * @var string
     */
    protected static $table = 'Test';


    public function __construct(/*$detail = ''*/){
        //$this->detail = $detail;
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

    /**
     * @return Level
     */
    public function getLevel(){
        return Level::find($this->level);
    }

    

}