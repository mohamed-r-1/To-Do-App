<?php

// Connection

$conn = mysqli_connect("localhost", "root", "");

if(!$conn) {
    echo "connect error " . mysqli_connect_error($conn);
}

$sql = "CREATE DATABASE IF NOT EXISTS todoapp";

// To Make A Query

$result = mysqli_query($conn, $sql);

mysqli_close($conn);

// Create Tables

$conn = mysqli_connect("localhost", "root", "", "todoapp");

if(!$conn) {
    echo "connect error " . mysqli_connect_error($conn);
}

// Users
    // ID, Name, Email, Password
    // User ID Foreign Key
// Tasks
    // ID, Title, User_id
    // User ID Foreign Key

$sql = "CREATE TABLE `users` ( 

    id INT PRIMARY KEY AUTO_INCREMENT , 
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL UNIQUE

) ";

$sql = "CREATE TABLE IF NOT EXISTS tasks(

    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `title` VARCHAR(200) NOT NULL ,
    `user_id` INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES `users` (id)

)";

// To Make A Query

$result = mysqli_query($conn, $sql);

mysqli_close($conn);