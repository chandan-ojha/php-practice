<?php

//connect to MySQL Database
class Database
{
    public $connection;

    public function __construct($config, $username = 'root', $password = '')
    {

        // $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";
        // $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};user=root;charset={$config['charset']}";

        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {

        $statement = $this->connection->prepare($query);

        $statement->execute($params);

        return $statement;
    }
}
