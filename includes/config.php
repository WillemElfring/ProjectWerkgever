<?php 

//This file contains configuration settings, like database settings
//For security reasons, this file should be placed in webroot

// Define project status
define('PROJECT_STATUS','development');

// Language settings (Dutch)
setlocale(LC_ALL, 'nl_NL');

// Database settings
    define('DB_HOST','localhost');
    define('DB_NAME','mydb');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
////
//define('DB_HOST','21319.hosts.ma-cloud.nl');
//define('DB_NAME','21319_');
//define('DB_USERNAME','4937-9449');
//define('DB_PASSWORD','dJ9nai2Q');

define('NR_ITEMS_PER_PAGE',4);
?>
