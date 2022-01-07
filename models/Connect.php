<?php

/**
 * 
 * 
 */
class Connect {

    public $host;
    public $dbName;
    public $userName;
    public $password;
    public $options = array();

    public function __construct()
    {
        $this->loadConfigFile('config/bdd.ini');

    }

    private function loadConfigFile($pathFile) {
        $this->host     = 'localhost';
        $this->dbName   = 'mvc';
        $this->userName = 'localhost';
        $this->password = 'localhost';
    }


    public function connect()
    {

    }

}