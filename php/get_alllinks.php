<?php

//This file is autogenerated. See modules.json and autogenerator.py for details

/*
    get_alllinks.php

    MediaWiki API Demos
    Demo of `Alllinks` module: List links pointing to the given namespace.

    MIT License
*/

$endPoint = "https://en.wikipedia.org/w/api.php";
$params = [
    "action" => "query",
    "format" => "json",
    "list" => "alllinks",
    "alnamespace" => "0",
    "alunique" => "1"
];

$url = $endPoint . "?" . http_build_query( $params );

$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
$output = curl_exec( $ch );
curl_close( $ch );

$result = json_decode( $output, true );

foreach( $result["query"]["alllinks"] as $k => $v ) {
    echo( $v["title"] . "\n" );
}
