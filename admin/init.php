<?php
include 'connect.php';
// Routes
$tpl ='includes/templates/' ; //Templates Directory
$lang='includes/languages/'; //Languages Directory
$func ='includes/functions/'; //Fuction Directory
$css = 'layout/css/' ; // CSS Directory
$js = 'layout/js/'; //JS Directory
$img='layout/img/';//Images Directory

//include the important files
include $func.'functions.php';

include $lang.'en.php';
include $tpl.'header.php' ;
//Include navbar on all pages except the one with $noNavbar variable
if(!isset($noNavbar)){
include $tpl.'navbar.php' ;
}
