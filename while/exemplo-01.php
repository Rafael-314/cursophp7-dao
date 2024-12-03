<?php

$condição = true;

while ($condição) {

    $numero = rand(1, 10);

    if ($numero === 3) {

        echo "TRÊS!!!";
        $condição = false;

    } else {

        echo $numero . " ";

    }

}


?>