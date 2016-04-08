<?php 
session_start();
$pageTitle='Dashboard';

if(isset($_SESSION['userName'])){
include 'init.php';
include $tpl.'footer.php';

} else{
	
	header('Location:index.php');
}
?>
