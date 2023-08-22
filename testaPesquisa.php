<?php

require_once __DIR__ . '/vendor/autoload.php';

use PhpDAO\DAO\ContatoDAO;
use PhpDAO\model\Contato;

$contatodao = new ContatoDAO();
$contatos = $contatodao->listContato();

foreach ($contatos as $contatofor) {
    echo "id: " . $contatofor->getId() . " -> ";
    echo ($contatofor->getNome()) . PHP_EOL;
}