<?php

require_once __DIR__ . '/vendor/autoload.php';

use PhpDAO\DAO\ContatoDAO;
use PhpDAO\model\Contato;

$contatodao = new ContatoDAO();

$contato = new Contato();
$contato->setNome("Nome novo");
$contato->setEmail("email@email.com");
$contato->setEndereco("Rua");
$contato->setDataNascimento("2009-08-05");

$contatodao->adicionaContato($contato);