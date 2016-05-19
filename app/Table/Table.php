<?php

namespace App\Table;

use App\App;

class Table {
    /**
     * @var string
     */
    protected static $table;


    /**
     * @return string
     */
    public static function getTable(){
        return static::$table;
    }

    /**
     * @param integer $id
     * @return mixed
     */
    public static function find($id){
        $parameters = ['id' => $id];
        $statement = 'SELECT * FROM '.static::$table.' WHERE id = :id ';
        $result = App::getDB()->prepare($statement, static::class, $parameters);
        return $result[0];
    }

    /**
     * @param array $parameters
     * @return array
     */
    public static function findBy($parameters = []){
        $statement = 'SELECT * FROM '.static::$table;
        $i = 0;
        //$comparator = '';
        foreach ($parameters as $key => $value) {
            if($i == 0) {
                $statement .= ' WHERE '.$key.' = :'.$key;
            }
            else {
                $statement .= ' AND '.$key.' = :'.$key;
            }
            $i++;
        }
        $results = App::getDB()->prepare($statement, static::class, $parameters);
        return $results;
    }

    /**
     * @param array $parameters
     * @return array
     */
    public static function findOneBy($parameters = []){
        $results = self::findBy($parameters);
        return (sizeof($results)) ? $results[0] : NULL;
    }

    /**
     * @return array
     */
    public static function findAll(){
        $statement = 'SELECT * FROM  '.static::$table;
        $results = App::getDB()->query($statement, static::class);
        return $results;
    }


    /**
     * @return bool
     */
    public function add(){
        $parameters = $this->toArray();
        $statement = 'INSERT INTO '.static::$table.' ('.implode(', ', array_keys($parameters)).') VALUES (:'.implode(', :', array_keys($parameters)).')';
        $execute = App::getDB()->prepare($statement, static::class, $parameters, true);
        return $execute;
    }

    /**
     * @return bool
     */
    public function update(){
        $parameters = $this->toArray();
        $statement = 'UPDATE '.static::$table.' SET';
        $i = 0;
        foreach ($parameters as $key => $value) {
            if($key != 'id') {
                if($i == 0) {
                    $statement .= ' ' . $key . ' = :' . $key;
                }
                else {
                    $statement .= ', ' . $key . ' = :' . $key;
                }
                $i++;
            }
        }
        $statement .=  ' WHERE id = :id';
        $execute = App::getDB()->prepare($statement, static::class, $parameters, true);
        return $execute;
    }

    /**
     * @param $id
     */
    public function delete ($id){
        
    }

    /**
     * Méthode permettant d'hydrater un objet (setter ses valeurs) grâce à un tableau de données
     * @param array $data
     */
    public function hydrate(array $data){
        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);
            if(method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    /**
     * Méthode permettant de convertir un objet en tableau
     * @return array
     */
    public function toArray(){
        return get_object_vars($this);
    }
}