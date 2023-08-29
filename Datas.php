<?php

    //Estudar DateTime
    date_default_timezone_set("America/Belem");

    /*
    --> P   representaçãp de período: vem antes de dia, mês, ano e semana.
    Y = anos
    M = meses
    D = dias
    W = semanas

    --> T representação de tempo: vem antes de hora, minuto e segundo.
    H horas
    M minutos
    S segundos
    */

    $data = new DateTime();
    $intervalo = new DateInterval('P5Y10M5DT10H50M10S'); // Período 5 anos 10 meses 5 dias e Tempo 10 horas 50 minutos 10 segundos
    $data->sub($intervalo);

    var_dump($data);

?>