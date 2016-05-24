<?php

namespace App\Table;

use App\App;

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
     * @var Level
     */
    private $level;
    /**
     * @var \DateTime
     */
    private $totalTime;
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
        if(property_exists($this, 'id_level') && $this->level == NULL) {
            $this->level = Level::find($this->id_level);
        }
        return $this->level;
    }

    /**
     * @return array
     */
    public function getExercises(){
        $parameters = ['id' => $this->id];
        $statement = '
            SELECT Exercise.id, Exercise.title, Exercise.detail, Exercise.time, Exercise.id_language 
            FROM  Exercise
            JOIN Asso_Test_Exercise ON Exercise.id = Asso_Test_Exercise.id_exercise
            JOIN Test ON Asso_Test_Exercise.id_test = Test.id
            WHERE Test.id = :id
        ';
        $results = App::getDB()->prepare($statement, Exercise::class, $parameters);
        return $results;
    }

    public function getTotalTime() {
        return $this->totalTime;
    }

    /**
     * @param integer $id
     * @return mixed
     */
    public static function find($id){
        $parameters = ['id' => $id];
        $statement = '
            SELECT Test.id, Test.detail, Test.id_level, SEC_TO_TIME(SUM(TIME_TO_SEC(Exercise.time))) AS totalTime
            FROM '.static::$table.'
            JOIN Asso_Test_Exercise ON Test.id = Asso_Test_Exercise.id_test
            JOIN Exercise ON Asso_Test_Exercise.id_exercise = Exercise.id
            WHERE Test.id = :id
        ';
        $result = App::getDB()->prepare($statement, static::class, $parameters);
        return $result[0];
    }
}