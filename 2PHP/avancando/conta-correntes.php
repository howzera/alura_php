<?php

$conta1 = [
    'titular' => 'Raul Almeida',
    'saldo' => 984534
];

$conta2 = [
    'titular' => 'Lara Teles',
    'saldo' => 9999999
];

$conta3 = [
    'titular' => 'Mari Livia',
    'saldo' => 500000
];


$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++)    {

    echo $contasCorrentes[$i]['titular'] . PHP_EOL;

}

?>