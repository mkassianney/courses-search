#!/usr/bin/env php
<?php

require 'vendor/autoload.php';

use  Test\Searching\Search;
use \GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['verify' => false, 'base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$search = new Search($client, $crawler);
$cursos = $search->searching('/cursos-online-programacao/php');

foreach($cursos as $curso) {
    echo $curso . PHP_EOL;
}


