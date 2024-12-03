<?php

$conn = new mysqli("localhost", "root", "Mcds_2016", "teste");

if ($conn->connect_error) {

    echo "Error: " . $conn->connect_error;

} else {
    echo "CONECTADO!";
}

$result = $conn->query("SELECT * FROM aaaa;");

while ($row = $result->fetch_array()) {

    var_dump($row);

}