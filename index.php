<?php

require __DIR__."/vendor/autoload.php";

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem([
    __DIR__.'/views',
]);

$twig = new Twig_Environment($loader,[
    //'cache' => null,
]);

$twig->render('article.html.twig');

$article = [
    'name' => 'BEST ARTICLE EVER XXX NOSCOPE MLG HARDCORE SHIT',
    'content' => 'some random shit about LoL and COD',
    'enabled' => true,
    'date' => new DateTime('now'),

];

echo $twig->render('article.html.twig', [
    'article' => $article,
]);