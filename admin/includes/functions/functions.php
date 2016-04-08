<?php 
/*
** Title Function that echo the page title in case the page 
** has the variable $pageTitle and echo default title for other page  
*/

 function getTitle()
{
    global $pageTitle;
    if (isset($pagetitle)) {
        echo $pageTitle;
    }else {
        echo 'Default';
    }
}