<?php

/*
===============================================
==Manage Members Page
==You Can Add| Edit | Delete Members from here
===============================================
*/

session_start();
if (isset($_SESSION['userName'])) {
  # code...
  include 'init.php';

  // main content for add , edit , delete Members

  $do= isset($_GET['do'])?$_GET['do']:'Manage';

  if ($do=='Manage') {
    #Manage  Page...
    echo "Welcome to Manage Page";

  }elseif ($do=='Edit') {
    # Edit Page...
    echo "Welcome to Edit Page";
  }
  include $tpl. 'footer.php';

} else {
  # code...
  header('Location: index.php');
}
 ?>
