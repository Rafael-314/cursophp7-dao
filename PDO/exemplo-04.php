<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "Mcds_2016");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD where idusuario = :ID ");

$login = "joao";
$password = "qwerty";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterado OK!";

?>