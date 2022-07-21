<?php
require 'vendor/autoload.php';

// Test::teste();
// exit();

use Projeto\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri'=>'https://www.alura.com.br']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$buscadorResponse = $buscador->buscar(url: '/cursos-online-programacao/php', filter_selector: 'span.card-curso__nome');

foreach ($buscadorResponse as $element){
    printBarraN($element);
}