<?php

$qualSuaIdade = 25;


$idadeCriança = 12;
$IdadeMaior = 18;
$IdadeMelhor = 65;

if ($qualSuaIdade < $idadeCriança) {
    
    echo "Criança";

} elseif ($qualSuaIdade < $IdadeMaior) {

    echo "adulto";

} else {

    echo "idoso";

}

echo "<br>";

echo ($qualSuaIdade < $IdadeMaior)?"Menor de Idade":"Maior de idade";


?>