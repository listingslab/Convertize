<?php

/* Restful API for Convertize FrontEnd Developer Techical Test	
	by Chris Dorward @listingslab 
	for a more complete example of a PHP restful API, please see
	https://github.com/listingslab/OSFAPI
	*/

	header("Access-Control-Allow-Origin: *");
	error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
	ini_set('display_errors', '1'); //error_reporting(E_ALL); 

	$api = array();
	$api ['vs'] = '1.0.0';
	$api['query'] = $_GET;

	// TODO: Check that the query has the correct variables
	// Save the new user information to a database
	// send an email

	// Create the output which we'll send back as JSON
	$in_3_days = DateTime::createFromFormat( 'U', $date = strtotime("+3 day") );
	$api['in_3_days'] = $in_3_days->format( "l jS F, Y");

	print_r (json_encode($api));

	// print '<pre>';
	// print_r ($api);
	// print '</pre>';

?>



