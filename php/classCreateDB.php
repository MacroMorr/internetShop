<?php

class classCreateDB
{
    public string $serverName;
    public string $userName;
    public string $password;
    public string $dbName;
    public string $tableName;
    public $connection;

    // method constructor
    public function __construct ($dbName, $tableName, $serverName = 'localhost', $userName = 'root', $password = 'root')
    {
        $this->dbName = $dbName;
        $this->tableName = $tableName;
        $this->serverName = $serverName;
        $this->userName = $userName;
        $this->password = $password;

        // create connection
        $this->connection = mysqli_connect($serverName, $userName, $password);

        // check connection
        if (!$this->connection) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // create database
        $sqlCreate = "create database if not exists $dbName";

        //execute query
        if (mysqli_query($this->connection, $sqlCreate)) {
            $this->connection = mysqli_connect($serverName, $userName, $password, $dbName);

            // create new table
            $sql = "create table if not exists $tableName
            (
                id int(11) not null auto_increment primary key,
                product_name varchar(25) not null,
                product_price float,
                product_image varchar(255) 
            )";

            if (!mysqli_query($this->connection, $sql)) {
                echo "Error creating table: " . mysqli_error($this->connection);
            } else {
                return false;
            }
        }

    }

}

$database = new classCreateDB("test_shop", "grocery_basket");


