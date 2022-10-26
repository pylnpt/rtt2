<?php
    echo "Hello";  
    phpinfo();


    $servername = "localhost";
    $dbname = "webdb";
    $username = "webdb";
    $password = "webdb";

    $conn = new mysqli("localhost", "webdb","webdb", "webdb");

    // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
    // $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // return $dbConnection;

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";