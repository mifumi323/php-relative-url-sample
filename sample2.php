<?php

// sample for GuzzleHttp\Psr7\UriResolver::resolve
require_once 'vendor/autoload.php';

$base_uri = new GuzzleHttp\Psr7\Uri('http://user:pass@example.com/base/path/here/index.php?p=q');
$relative_uri = new GuzzleHttp\Psr7\Uri('.././/new/../././rel5.html');
$absolute_uri = GuzzleHttp\Psr7\UriResolver::resolve($base_uri, $relative_uri);
echo $absolute_uri; // http://user:pass@example.com/base/path//rel5.html
