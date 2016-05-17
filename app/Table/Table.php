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
                $statement .= ' WHERE '.$key.' LIKE :'.$key;
            }
            else {
                $statement .= ' AND '.$key.' LIKE :'.$key;
            }
            $i++;
        }

        $results = App::getDB()->prepare($statement, static::class, $parameters);
        return $results;
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
     * @param $parameters
     */
    public function add($parameters){
        $statement = 'INSERT INTO ' .static::$table. 'VALUE(' .$parameters. ')';
        $statement->prepare();
    }

    /**
     * @param $parameters
     * @param $values
     */
    public function update($parameters, $values){
        $parameters = ['id' => $id];
        $statement = 'UPDATE' .static::$table. 'SET' .$parameters. '=' .$values. 'WHERE id = :id';
        $statement->prepare();
    }

    /**
     * @param $id
     */
    public function delete ($id){
        $parameters = ['id' => $id];
        $statement = 'DELETE FROM' .static::$table. 'WHERE id = :id';
        $statement->prepare();

    }
}