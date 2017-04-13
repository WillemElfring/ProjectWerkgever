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
        $templateParser->display('head.tpl');
        $templateParser->display('home.tpl');
        $templateParser->display('footer.tpl');
        break;
    case 'art':


        include 'model/get_allAlbums.php';
        $albumItemList = [];

        foreach ($albumList as $album){
            include 'model/select_album.php';
            $album['items'] = $items;
            $albumItemList[] = $album;
        }
//        echo '<pre>';
//
//        print_r($albumItemList);
//        echo '</pre>';

        $templateParser->assign('getAlbum',$albumItemList);

        $templateParser->display('head2.tpl');

        $templateParser->display('art.tpl');
        $templateParser->display('footer.tpl');

        break;
    case 'news':
        $templateParser->display('head2.tpl');
        $templateParser->display('news.tpl');
        $templateParser->display('footer.tpl');

        break;

    case 'contact':
        $templateParser->display('head2.tpl');
        $templateParser->display('contact.tpl');
        $templateParser->display('footer.tpl');

        break;

    case 'about':
        $templateParser->display('head2.tpl');
        $templateParser->display('about.tpl');
        $templateParser->display('footer.tpl');

        break;
}

