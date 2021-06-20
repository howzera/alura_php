<?php

$contasCorrentes = [

    '123.456.789-10' =>[
        'titular' => 'Raul Almeida',
        'saldo' => 984534

    ], 
    '123.456.789-11' =>[
        'titular' => 'Lara Teles',
        'saldo' => 9999999
    ],

    '123.456.789-12' =>[
        'titular' => 'Mari Livia',
        'saldo' => 500000
    ]
];

$contasCorrentes['123.456.789-13'] = [
    'titular' => 'Claudio Francisco',
    'saldo' => 10000000

];



foreach($contasCorrentes as $cpf => $conta)  {

    echo $cpf . '  ' . $conta['titular'] . PHP_EOL;

}


?>