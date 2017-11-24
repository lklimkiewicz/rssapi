<?php

// Mark : DB connection

require_once( 'php/app.php' );

include_once 'RestService/Server.php';
include_once 'RestService/Client.php';
include_once 'RestService/InternalClient.php';
use RestService\Server;

Server::create('/')
->addGetRoute('list', function($fromNewsId){
	global $seo;
	return $seo->listAPI($fromNewsId);
})
->run();