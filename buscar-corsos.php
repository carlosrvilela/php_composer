<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client();
$crawler = new Crawler();

$resposta = $client->request('Get', 'https://www.alura.com.br/cursos-online-programacao/php');
$html = $resposta->getBody();
$crawler->addHtmlContent($html);

$cursos = $crawler->filter('span.card-curso__nome');

foreach ($cursos as $curso) {
    print "$curso->textContent\n";
}