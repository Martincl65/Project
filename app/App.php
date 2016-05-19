<?php

namespace App;

class App {

    const DB_NAME = 'Project';
    const DB_USER = 'root';
    const DB_PASS = 'amc56';
    const DB_HOST = 'localhost';

    private static $database;

    public static function getDB(){

        if( self::$database === null){
            self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
        }

        return self::$database;
    }
}