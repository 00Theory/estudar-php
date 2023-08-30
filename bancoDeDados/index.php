<?php

require 'BancoDeDados.php';

$produto = new Produto();

switch ($_GET['operacao']){
    case 'listagem':

        var_dump($produto->list());
        echo '<h3> Produtos: </h3>';

        foreach ($produto->list() as $value){
            echo 'Id: ' . $value['id'] . '<br> Descrição: ' . $value['descricao'] . '<hr>';
        }

        break;

    case 'inserção':

        $status = $produto->insert('Produto teste do Marco 01');

        if (!$status){
            echo 'Não foi possível executar a operação';
            return false;
        }

        echo "Registro Inserido com Sucesso!";

        break;

    case 'update':

        $status = $produto->update('Produto Alterado do Marco', 6);

        if (!$status){
            echo 'Não foi possível executar a operação';
            return false;
        }

        echo "Registro Atualizado com Sucesso!";
        break;

    case 'delete':
        $status = $produto->delete(2);

        if (!$status){
            echo 'Não foi possível executar a operação';
            return false;
        }

        echo "Registro Removido com Sucesso";

        break;
}
