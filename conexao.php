
<?php

$usuario1 = 'macimaq';
$senha1 = 'Wps.2023';
$database1 = 'macimaq';
$host1 = 'localhost';

$mysqli = new mysqli($hostname1, $usuario1, $senha1, $database1);
    if ($mysqli->connect_errno) {
        echo "error: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    } 
?>