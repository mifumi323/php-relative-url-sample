<?php

// sample for GuzzleHttp\Psr7\UriResolver::relativize
require_once 'vendor/autoload.php';

$base_uri = new GuzzleHttp\Psr7\Uri('http://example.com/');
$absolute_uri = new GuzzleHttp\Psr7\Uri('http://example.com/sample.php');
$relative_uri = GuzzleHttp\Psr7\UriResolver::relativize($base_uri, $absolute_uri);
echo $relative_uri; // sample.php
