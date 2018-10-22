<?php
/* Spara user i databas:
1. Hantera post variabler: $_POST
2. Koppling till databas: PDO
3. Spara user i databas */


$pdo = new PDO(
    "mysql:host=localhost;dbname=fed18;charset=utf8",
    "root",
    "root"
);

?>