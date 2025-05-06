<?php

abstract class DbManager
{

    protected $bdd;

    private $host = 'localhost';
    private $dbName = 'exam_mvc';
    private $user = 'root';
    private $password = '';

    public function __construct()
    {
        $this->bdd = new \PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbName . ';charset=utf8',
            $this->user,
            $this->password);
        $this->bdd->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );
    }




}



?>