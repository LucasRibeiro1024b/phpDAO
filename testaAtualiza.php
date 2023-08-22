<?php

require_once __DIR__ . '/vendor/autoload.php';

use PhpDAO\DAO\ContatoDAO;

$contatodao = new ContatoDAO();

$id = readline("Id: ");

$contato = $contatodao->show($id);
var_dump($contato);

$nome = readline("Nome: ");

$contato->setNome($nome);

$contatodao->atualizaContato($contato);

var_dump($contatodao->show($id));

