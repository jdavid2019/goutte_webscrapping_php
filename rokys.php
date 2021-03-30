<?php
  require 'vendor/autoload.php';
  use Symfony\Component\HttpClient\HttpClient;
  use Goutte\Client;

  // Add a time out(tiempo de espera) of 60 seconds
  $client = new Client(HttpClient::create(['timeout' => 60]));
  // Go to the symfony.com website
  $crawler = $client->request('GET', 'https://rokys.com');

  // Get the latest post in this category and display the titles
 $crawler->filter('div > h3')->each(function ($node) {
  // print  json_encode($node->text());
  print $node->text().'<br>';
  });



