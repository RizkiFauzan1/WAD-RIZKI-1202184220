<?php 

namespace config;

class database {
    public function connect()
    {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'joki';
        $conn = mysqli_connect($host, $user, $pass, $db);
        return $conn;
    }
}