Shutdown_class
==============

A simple register_shutdown_function PHP class for simple use.

1- Need to include the file 

    require_once('Shutdown.class.php');
    
2- Create an object 

    $shutdown = new Shutdown(); // Output default message
    $shutdown = new Shutdown('<br/>My output'); // Custom output
    $shutdown = new Shutdown('My output', 'alternate_shutdown_function'); // Custom output + custom function
