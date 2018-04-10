<?php

require_once("vendor/autoload.php");

use Hammershark\SignalR\Client;

$client = new Client("wss://beta.bittrex.com/signalr", ["c2"]);


$client->on("c2", "SubscribeToSummaryDeltas", function($data) {
    echo 'TEST';
});

$client->run();