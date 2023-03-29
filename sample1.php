<?php

// sample for GuzzleHttp\Psr7\UriResolver::resolve
require_once 'vendor/autoload.php';

$base_uri = new GuzzleHttp\Psr7\Uri('http://example.com/');
$relative_uri = new GuzzleHttp\Psr7\Uri('sample.php');
$absolute_uri = GuzzleHttp\Psr7\UriResolver::resolve($base_uri, $relative_uri);
echo $absolute_uri; // http://example.com/sample.php
