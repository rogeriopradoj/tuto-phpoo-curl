<?php
require 'vendor/.composer/autoload.php';

require_once 'vendor/floomoon/phpoo-curl/lib/Curl/Autoloader.php';
Curl_Autoloader::register();

// Basic construct              
$client = new Curl_Client();

// Initialize with a url like the function curl_init('example.com')
$client = new Curl_Client('floomoon.org');

// Set the default configuration of the client
$client = new Curl_Client('http://universidade.caixa/aplicacoes/trilhasDesenvolvimento/zUI/acesso_trilhas_ajax?nu_trilha=332&acao=comparar&nu_usuario=C004397&data=01/01/2011', true);

$result = $client->execute();

var_dump($result);