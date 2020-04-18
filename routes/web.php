<?php

use \Lunanimous\Rpc\NimiqClient;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    try {
        $config = [
            'scheme' => 'http',
            'host' => env('NODE_HOST', 'localhost'),
            'port' => env('NODE_PORT', 8648),
            'user' => env('NODE_USERNAME', null),
            'password' => env('NODE_PASSWORD', null),
            'timeout' => false,
        ];

        $client = new NimiqClient($config);

        $isOnline = true;
        $blockNumber = $client->getBlockNumber();
        $peerCount = $client->getPeerCount();
        $mempoolTransactions = $client->getMempool()->total;
    } catch (Exception $exception) {
        $isOnline = false;
        $blockNumber = 'n/a';
        $peerCount = 'n/a';
        $mempoolTransactions = 'n/a';
    }


    return $router->app->make('view')->make('home')->with([
        'isOnline' => $isOnline,
        'blockNumber' => $blockNumber,
        'peerCount' => $peerCount,
        'mempoolTransactions' => $mempoolTransactions
    ]);
});
