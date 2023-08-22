<?php

require_once __DIR__ . '/vendor/autoload.php';

use PhpDAO\DAO\ContatoDAO;

unset($argv[0]);
$id = $argv[1];

$contatodao = new ContatoDAO();

$contatoDel = $contatodao->show($id);
var_dump($contatoDel);
$contatodao->deletaContato($contatoDel);