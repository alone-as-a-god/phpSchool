<?php
    $conn = new mysqli("localhost","root","");
    if($conn->connect_error){
        die("Connection to database failed lmao");
    }
    $sql = "CREATE DATABASE IF NOT EXISTS twatter";
    if($conn->query($sql)=== True){
        //echo "Database loginDB works";
        $conn = new mysqli("localhost","root","","twatter");
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
    $sql = "CREATE TABLE IF NOT EXISTS posts(
        id INT PRIMARY KEY AUTO_INCREMENT,
        author VARCHAR(20) NOT NULL,
        content VARCHAR(280) NOT NULL,
        likes INT NOT NULL DEFAULT 0,
        time timestamp NOT NULL,
        FOREIGN KEY (author) REFERENCES users(username) ON DELETE CASCADE
        );";
    if($conn->query($sql)===True){
        //echo "Table users works";
    }else{
        echo "This shit broken lmaooooo " . $conn->error;
    }
    $sql = "CREATE TABLE IF NOT EXISTS likes(
        userid INT NOT NULL,
        postid INT NOT NULL,
        FOREIGN KEY(userid) REFERENCES users(id),
        FOREIGN KEY(postid) REFERENCES posts(id),
        PRIMARY KEY(postid, userid)
        );";
    if($conn->query($sql)===True){
        //echo "Table users works";
    }else{
        echo "This shit broken lmaooooo " . $conn->error;
    }

?>