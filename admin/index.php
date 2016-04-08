<?php 
session_start();
$noNavbar= '';
if(isset($_SESSION['userName'])){
	header('location: dashboard.php');//Redirect to dashboard page if session already exists
}
include 'init.php';
include $tpl.'header.php';

//check if user comming from http post request
if($_SERVER['REQUEST_METHOD']=='POST'){
$username=$_POST['user'];
	$password=$_POST['pass'];
	$hashedPass= sha1($password);

	//check if user exist in database
	$stmt = $con->prepare("SELECT userName, password FROM users WHERE userName = ? AND password = ? AND groupID = 1" );
	$stmt->execute(array($username ,$hashedPass));
	$count = $stmt->rowCount();

	//Check if count > 0 , this will mean database contain record about this username
	if($count>0){
		$_SESSION['userName']=$username;//register session name
		header('location: dashboard.php');//redirect to dashboard page
		exit();

	}
	
}
?>

<form class="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	<h4 class="text-center">Admin Login</h4>
	<input class="form-control " type="text" name="user" value="" placeholder="Username" autocomplete="off">
	<input class="form-control " type="password" name="pass" value="" placeholder="Password" autocomplete="new-password">
	<input class="btn  btn-primary btn-block " type="submit" name="" value="login">
 	
</form>
<?php 
include $tpl.'footer.php';

?>