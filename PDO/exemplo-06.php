<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "Mcds_2016");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

//$conn->rollback();
$conn->commit();

echo "Delete OK!";

?>