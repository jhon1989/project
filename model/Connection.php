<?php

/*
* crear conexion a la base de datos
*/

class Connection
{
    private $driver;
    private $host;
    private $user;
    private $password;
    private $database;

    public function getPropertie()
    {
        $config = require_once './config/config.php';

        $this->driver   = $config['driver'];
        $this->host    = $config['host'];
        $this->user     = $config['user'];
        $this->password = $config['password'];
        $this->database = $config['dbname'];
    }

    public function conexion()
    {
        $this->getPropertie();

        $conexion = new mysqli($this->host, $this->user , $this->password, $this->database);

        if ($conexion) {
           return $conexion;
        }
           return 'Connection failed';
    }
}
