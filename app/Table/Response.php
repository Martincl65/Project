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
     * @var Developer
     */
    private $developer;
    /**
     * @var Exercise
     */
    private $exercise;
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
     * @return Developer
     */
    public function getDeveloper(){
        if(property_exists($this, 'id_developer') && $this->developer == NULL) {
            $this->developer = Developer::find($this->id_developer);
        }
        return $this->developer;
    }

    /**
     * @@param Developer $developer
     */
    public function setDeveloper(Developer $developer){
        $this->developer = $developer;
    }

    /**
     * @return Exercise
     */
    public function getExercise(){
        if(property_exists($this, 'id_exercise') && $this->exercise == NULL){
            $this->exercise = Exercise::find($this->id_exercise);
        }
        return $this->exercise;
    }

    /**
     * @@param Exercise $exercise
     */
    public function setExercise(Exercise $exercise){
        $this->exercise = $exercise;
    }

    /**
     * Méthode permettant de convertir un objet en tableau
     * @return array
     */
    public function toArray(){
        if($this->id == NULL) {
            return array(
                'content' => $this->content,
                'id_exercise' => $this->exercise->getId(),
                'id_developer' => $this->developer->getId()
            );
        }
        else {
            return array(
                'id' => $this->id,
                'content' => $this->content
            );
        }

    }
}