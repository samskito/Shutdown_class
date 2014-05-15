<?php

	/**
	* Shutdown class
	*
	* It uses the 'register_shutdown_function' function, it will execute the registered
	* function on shutdown (script finishes or on exit)
	*
	* @author geoffroybaumier
	* @version 1.0
	*
	*/ 
	
	class Shutdown {
		
		/**
		* Name of the shutdown function
		*
		* @access private
		* @type string
		*
		*/
		private $shutdown_function = 'shutdown';
		
		/**
		* Shutdown function message
		*
		* @access private
		* @type string
		*
		*/
		private $shutdown_message = 'Script ended.';
		
		/**
		* Constructor
		*
		* @param string $content - message to display
		* @param string $custom_shutdown_function - alternate shutdown function
		* @use $this->register
		*
		*/
		function __construct($content = NULL, $custom_shutdown_function = NULL) {
			// Set shutdown message
			$this->shutdown_message = $content ? $content : $this->shutdown_message;
			
			// Register the function
			$this->register($custom_shutdown_function);
		}
		
		/**
		* Register function - register the shutdown function
		*
		* @param string $custom_shutdown_function - alternate shutdown function
		* @access private
		* @use $this->shutdown_message
		* @use $this->shutdown_function
		*
		*/
		private function register($custom_shutdown_function = NULL) {
			
			// If the custom shutdown function is set
			if ($custom_shutdown_function && function_exists($custom_shutdown_function)) {
				register_shutdown_function($custom_shutdown_function, $this->shutdown_message);
			}
			else {
				register_shutdown_function(array($this, $this->shutdown_function), $this->shutdown_message);
			}
		}
		
		/**
		* Shutdown function
		*
		* @access public
		* @use $this->shutdown_message
		* 
		*/
		public function shutdown() {
			// Do other stuff here...
			echo $this->shutdown_message;
		}
	}