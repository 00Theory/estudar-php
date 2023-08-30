<?php

declare(strict_types=1);

$pdo = require 'conectar.php';
$sql = 'insert into produtos(descricao) values(?)';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['descricao']);
$prepare->execute();

echo $prepare->rowCount();