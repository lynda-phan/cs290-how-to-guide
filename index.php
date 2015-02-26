<?php

require 'vendor/autoload.php';

use Flintstone\Flintstone;

$longUrlDB = Flintstone::load('longUrls', array('dir' => dirname(__FILE__) . '/database'));
$shortUrlDB = Flintstone::load('shortUrls', array('dir' => dirname(__FILE__) . '/database'));

$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig()
));

//options for debugging and caching twig template files
$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
    'cache' => dirname(__FILE__) . '/cache'
);

$app->get('/', function () use ($app) {
    $app->render('index.twig');
});

$app->post('/shorten', function () use ($app, $longUrlDB, $shortUrlDB) {
    $longUrl = $app->request->post('url');

    // check to see if long url hash exist in db
    $longUrlHash = md5($longUrl);
    $shortUrlKey = $longUrlDB->get($longUrlHash);

    // long url hash does not exist in db
    if (empty($shortUrlKey)) {
        $shortUrlKey = uniqid();

        // Set key to longUrlHash for shortUrlKey value.
        $longUrlDB->set($longUrlHash, $shortUrlKey);

        // Set key to shortUrlKey for longUrl value.
        $shortUrlDB->set($shortUrlKey, $longUrl);
    }

    $app->render('shorten.twig', array(
        'shortUrlKey' => $shortUrlKey
    ));
});

$app->get('/s/:shortKey', function($shortKey) use ($app, $shortUrlDB) {
    $longUrl = $shortUrlDB->get($shortKey);

    if (empty($longUrl)) {
        echo "No long url for short key.";
    } else {
        $app->response->headers->set('Location', $longUrl);
    }
});

$app->run();
