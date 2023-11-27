<?php

$username = "root";
$password = "";

$conn = new PDO("mysql:host=localhost;dbname=gemeente;", $username, $password);

$get_klachten = $conn->prepare("SELECT * FROM klachten");
$get_klachten->execute();
$klachten = $get_klachten->fetchAll();

var_dump($klachten);