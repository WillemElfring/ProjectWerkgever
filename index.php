<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';
include 'includes/functs.php';

// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'School Check');

// Display template: output html

$action=isset($_GET['action'])?$_GET['action']:'home';
switch($action){
    
    case 'home':
        $templateParser->display('home.tpl');
        break;
    case 'art':
        include 'model/select_all_items.php';
        $templateParser->assign('result',$result);
        $templateParser->display('art.tpl');

        break;
    case 'news':
        $templateParser->display('news.tpl');
        break;
}

