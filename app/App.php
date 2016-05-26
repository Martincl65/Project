<?php

namespace App;

class App {

    const DB_NAME = 'Project';
    const DB_USER = 'root';
    const DB_PASS = 'root';
    const DB_HOST = 'localhost';

    private static $database;

    public static function getDB(){

        if( self::$database === null){
            self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
        }

        return self::$database;
    }

    public function forbidden(){
        header('HTTP/1.0 403 Forbidden');
        die('Acces interdit');
    }

    public function notFound(){
        header('HTTP/1.0 404 Not Found');
        die('Page introuvable');
    }
}