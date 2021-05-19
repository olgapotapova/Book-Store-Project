<?php
    /*The central configuration file
    that contains required parameters to establish a connection with the MySQL Server's database instance */
    $username = "d86295sa328613";
    $database = "d86295_bookstore";
    $password = "ZivuVZ0Ne1D";
    $servername = "d86295.mysql.zonevs.eu";
    $yhendus = new mysqli($servername, $username, $password, $database);
    /* Use UTF8 encoding for database */
    $yhendus -> set_charset("utf8");
    /*CREATE TABLE game (
        id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
        question VARCHAR(50),
        answer VARCHAR(50),
        usrAnswer VARCHAR(3),
        correct VARCHAR(10),
        submitdatetime VARCHAR(100)
        );
    
    /* CREATE TABLE cities ( id int PRIMARY KEY NOT NULL AUTO_INCREMENT, city VARCHAR(50) ); */    
    /* CREATE TABLE laulud( 
        id int NOT NULL AUTO_INCREMENT PRIMARY KEY,   
        pealkiri VARCHAR(50),
        punktid INT DEFAULT 0,
        lisamisaeg DATETIME,
        kommentaarid TEXT,
        avalik INT DEFAULT 1
    );*/
?>