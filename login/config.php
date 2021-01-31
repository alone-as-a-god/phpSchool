<?php
    $conn = new mysqli("localhost","root","");
    if($conn->connect_error){
        die("Connection to database failed lmao");
    }
    $sql = "CREATE DATABASE IF NOT EXISTS loginDB";
    if($conn->query($sql)=== True){
        //echo "Database loginDB works";
        $conn = new mysqli("localhost","root","","loginDB");
    }
    $sql = "CREATE TABLE IF NOT EXISTS users(
        id INT PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(20) UNIQUE NOT NULL,
        password VARCHAR(20) NOT NULL
        );";
    if($conn->query($sql)===True){
        //echo "Table users works";
    }else{
        echo "This shit broken lmaooooo " . $conn->error;
    }

?>