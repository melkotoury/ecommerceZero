<?php 

//start the session 
session_start();

session_unset();//unset the variable and data of the session 
session_destroy();//Destroy the session 

header('Location: index.php');
exit();