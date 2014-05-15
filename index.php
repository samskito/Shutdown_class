<?php
	
	/**
	* Index file that load the Shutdown class and implements it
	*
	*/
	
	// Load the class
	require_once('Shutdown.class.php');
	
	// create an object
	$shutdown = new Shutdown();
	$shutdown = new Shutdown('<br/>My output');
	$shutdown = new Shutdown('My output', 'alternate_shutdown_function');
	
	// Here is an alternate shutdwn function
	function alternate_shutdown_function ($content = NULL) {
		echo '<br/>This is an alternate shutdown function, here is the content : '.$content;
	}