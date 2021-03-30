<?php
  require 'vendor/autoload.php';
  use Symfony\Component\HttpClient\HttpClient;
  use Goutte\Client;

  // Add a time out(tiempo de espera) of 60 seconds
  $client = new Client(HttpClient::create(['timeout' => 60]));
  // Go to the symfony.com website
  $crawler = $client->request('GET', 'http://www.symfony.com/blog/');

  // Get the latest post in this category and display the titles
  $crawler->filter('h2 > a')->each(function ($node) {
    print $node->text()."<br>";
  });