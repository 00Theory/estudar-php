<?php

$pdo = require 'conectar.php';
$sql = 'update produtos set descricao = ? where id = ?';

$prepare = $pdo->prepare($sql);

$prepare -> bindParam(1, $_GET['descricao']);
$prepare -> bindParam(2, $_GET['id']);

$prepare->execute();

echo $prepare->rowCount();