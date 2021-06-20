<?php

$carros = [
    'AA-BB-12' => [
        'marca' => 'WOLKS',
        'modelo' => 'GOLF'

    ],

    'AA-BB-13' => [
        'marca' => 'OPEL',
        'modelo' => 'S10'

    ],

    'AA-BB-14' => [
        'marca' => 'PORSCHE',
        'modelo' => 'CARRERA'

    ],
];


foreach ($carros as $placa => $infos) {
    
    echo $placa . ' ' . $infos['marca'] . '-' .  $infos['modelo'] . PHP_EOL;
};


?>