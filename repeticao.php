<?php
/*
$consoles = ['xboxSX', 'playstation5', 'switch'];

$enderecoPessoas = [
    'pessoa1' => array(
        'cep' => "1321311",
        'cidade' => "Belém"
    ), 
    'pessoa2' =>[
        'cep' => "3132213",
        'cidade' => "Itaituba"
    ]
];

print_r($enderecoPessoas["pessoa1"]['cidade']);
print "\n";
print_r($enderecoPessoas['pessoa2']['cidade']);

if (isset($enderecoPessoas["pessoa1"]['cidade'])){
    echo "\nAchou " , $enderecoPessoas["pessoa1"]['cidade'];
}
else{
    echo "\nNão achou!";
}
*/

/*
$arrayNumeros = [54, 26, 93, 17, 77, 31, 44, 55, 20];
print_r($arrayNumeros);

for($i = 0; $i < count($arrayNumeros); $i++){
    for($j = 0; $j < count($arrayNumeros) - $i - 1; $j++){

        if ($arrayNumeros[$j] > $arrayNumeros[$j + 1]){
            
            echo "Item trocado => ";
            $varTemp = $arrayNumeros[$j];
            $arrayNumeros[$j] = $arrayNumeros[$j + 1];
            $arrayNumeros[$j + 1] = $varTemp;
            echo "Iteração " . $i . " - Trocou: " . $arrayNumeros[$j] . " da posição: " . ($j) . " por: " . $arrayNumeros[$j + 1] . " da posição: " . $j + 1 . "\n";
        }
    }
}

print_r ($arrayNumeros);
*/

/*
$arr = [0,1,2,3,4,5,6,7,8,9];

foreach($arr as $indice => $value){

    if ($value % 2 == 1){
        break; // interrompe-se o loop;
        //continue; // passa para a próxima iteração.
    }
    echo "valor do índice : " . $indice . " valor : " . $value . "\n";
}
*/

$frutas = ["banana", 'kiwi', 'pêra', 'mamão'];
$contador = count($frutas);

$i = 0;
while ($i < $contador){

    if ($frutas[$i] == "pêra"){
        break;
    }
    echo $frutas[$i] . "\n";

    $i++;
}

do {
    echo $frutas[$i] . "\n";

    $i++;


} while ($i < $contador);
?>