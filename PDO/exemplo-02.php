<?php

$conn = new PDO("sqlsrv:Database=teste;server=localhost\SQLEXPRESS;ConectionPooling=0", "root", "Mcds_2016");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $row) {

	foreach ($row as $key => $value) {
		
		echo "<strong>".$key.":</strong>".$value."<br/>";

	}

	echo "====================================================<br/>";

?>