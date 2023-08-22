<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $variavel = 0;
    if ($variavel > 4){
        echo "Bom dia!\n";
    }
    else if ($variavel >= 1 && $variavel <= 4){
        echo "Boa tarde!";
    }
    else{
        echo "Boa dasdsads!\n";
    }
    
    
    $sorteio = rand(0,5);

    echo "Valor sorteado: " . $sorteio;
    switch($sorteio){
        case 0:
            echo " => Você ganhou 2 pontos";
            break;
        case 1:
            echo " => Você perdeu 1 ponto";
            break;
        case 2:
            echo " => Você ganhou um bônus! Ganhou 3 pontos!";
            break;
        default:
            echo " => Jogue novamente";
            break;
    }

    echo "\nValor sorteado: " . $sorteio;
    // Nesse caso sempre que a variável for 1,
    // o resultado será o primeiro case digitado
    switch($sorteio){
        case 1:
            echo " => Você ganhou 2 pontos";
            break;
        case 1:
            echo " => Você perdeu 1 ponto";
            break;
        case 1:
            echo " => Você ganhou um bônus! Ganhou 3 pontos!";
            break;
        default:
            echo " => Jogue novamente";
            break;
    }
?>
</body>
</html>
