<?php

require(__DIR__ . '/vendor/autoload.php');

use \HansDubois\Sonos\Request\NowPlaying;

$sonos = new \HansDubois\Sonos\Sonos('192.168.1.7', '1400');
$request = new NowPlaying();

$client = new \HansDubois\Sonos\Client();
$client->request($sonos, $request);

