<?php

namespace App;

use App\Table\Response;
use App\Table\Table;

class Form {
    /**
     * @var array
     */
    private $data;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    public $surround = 'div';
    /**
     * @var Table
     */
    private $entity;

    /**
     * Form constructor.
     * @param string $name
     * @param Table $entity
     */
    public function __construct($name, Table $entity = NULL){
        $this->name = $name;
        $this->entity = $entity;
    }

    /**
     * @param $html
     * @return string
     */
    private function surround($html){
        return '<'.$this->surround.'>'.$html.'</'.$this->surround.'>';
    }

    /**
     * @param $index
     * @return mixed|null
     */
    public function getValue($index){
        if($this->entity != NULL) {
            $method = 'get' . ucfirst($index);
            return $this->entity->$method();
        }
        else if($this->data != NULL) {
            return $this->data[$index];
        }
        else NULL;
    }

    /**
     * @return string
     */
    public function getName(){
        return $this->name;
    }

    /**
     * @param string $type
     * @param string $name
     * @param array $attr
     * @return string
     */
    public function input($name, $type, $attr = array()){
        $html = '';
        if(sizeof($attr)){
            foreach ($attr as $key => $value) {
                $html .= $key.'="'.$value.'"';
            }
        }

        return $this->surround('<input type="'.$type.'" name="'.$this->name.'['.$name.']" value="' .$this->getValue($name) .'" '.$html.'>');
    }

    /**
     * @param string $name
     * @param array $attr
     * @return string
     */
    public function textArea($name, $attr = array()){
        $html = '';
        if(sizeof($attr)){
            foreach ($attr as $key => $value) {
                $html .= $key.'="'.$value.'"';
            }
        }
        return $this->surround('<textarea rows=25 name="'.$this->name.'['.$name.']" '.$html.'>'.$this->getValue($name).'</textarea>');
    }

    /**
     * @param array $attr
     * @return string
     */
    public function submit($attr = array()){
        $html = '';
        if(sizeof($attr)){
            foreach ($attr as $key => $value) {
                $html .= $key.'="'.$value.'"';
            }
        }
        return $this->surround('<button type="submit" class="btn btn-primary" '.$html.'>Enregistrer</button>');
    }

    /**
     * @return bool
     */
    public function isSubmitted(){
        if(isset($_POST[$this->name])){
            $this->data = $_POST[$this->name];
            if($this->entity != NULL) {
                $this->entity->hydrate($this->data);
            }
            return true;
        }
        else return false;
    }
}
