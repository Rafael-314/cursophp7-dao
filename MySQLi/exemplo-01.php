<?php

$conn = new mysqli("localhost", "root", "Mcds_2016", "teste");

if ($conn->connect_error) {

    echo "Error: " . $conn->connect_error;

} else {
    echo "CONECTADO!";
}

$stmt = $conn->prepare("CREATE TABLE aaaa(numeros int);");

$stmt->execute();
?>