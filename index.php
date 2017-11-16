<?php

// Mark : DB connection

require_once( 'php/app.php' );

include_once 'RestService/Server.php';
include_once 'RestService/Client.php';
include_once 'RestService/InternalClient.php';
use RestService\Server;

Server::create('/')
->addGetRoute('list', function(){
	global $seo;
	return $seo->listAPI();
})
->run();