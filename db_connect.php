<?php
/**
 * A class file to connect to database
 */
class DB_CONNECT {
   var $connect;
    // constructor
    function __construct() {
        // connecting to database
        $this->connect();
    }
 
    // destructor
    function __destruct() {
        // closing db connection
        $this->close();
    }
 
    /**
     * Function to connect with database
     */
    function connect() {
        // import database connection variables
        require_once __DIR__ . '/db_config.php';
 
        // Connecting to mysql database
        $connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());
 
        // Selecing database
        $db = mysqli_select_db($connect,DB_DATABASE) or die(mysqli_error($connect));
 
        // returing connection cursor
        return $connect;
    }
 
    /**
     * Function to close db connection
     */
    function close() {
        error_reporting(0);
        // closing db connection
        mysqli_close($connect);

    }
 
}
 
?>