<?php 
/*
Categories = > [Manage | Edit | Update | Add | Insert | Delete | Stats]
*/
$do = '';
if (isset($_GET['do'])) {
   $do=  $_GET['do'];
}else {
    $do='Manage';
}

//If the page is the main  
if ($do=='Manage') {
    echo "Welcome You are in manage category page";
    echo '<a href="page.php?do=Add">Add New Category </a>';
} elseif ($do == 'Add') {
    echo "Welcome You are in add category page";
}elseif ($do == 'Insert') {
    echo "Welcome you are in Insert page";
}

else{
    echo "Error, There's no page with this name";
}
