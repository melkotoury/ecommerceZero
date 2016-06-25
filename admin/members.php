<?php

/*
===============================================
==Manage Members Page
==You Can Add| Edit | Delete Members from here
===============================================
*/

session_start();
  $pageTitle="Members";
if (isset($_SESSION['userName'])) {
  # code...
  include 'init.php';

  // main content for add , edit , delete Members

  $do= isset($_GET['do'])?$_GET['do']:'Manage';

  if ($do=='Manage') {
    // Manage  Page...
    echo "Welcome to Manage Page";

  }elseif ($do=='Edit') { ?>
    <!--Edit Page... --> 
    <h1 class="text-center">Edit Member</h1>

    <div class="container">
    <form class="form-horizontal form-group-lg">
    <!--Start username field -->
      <div class="form-group">
        <label class="col-sm-2 control-label">Username</label>
        <div class="col-sm-10">
          <input type="text" name="username"class="form-control" autocomplete="off">
        </div>
      </div>
          <!--End username field -->

             <!--Start password field -->
      <div class="form-group ">
        <label class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="text" name="password"class="form-control"  autocomplete=
          "new-password">
        </div>
      </div>
          <!--End password field -->

             <!--Start email field -->
      <div class="form-group">
        <label class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="email" name="email"class="form-control">
        </div>
      </div>
          <!--End email field -->

             <!--Start fullname field -->
      <div class="form-group">
        <label class="col-sm-2 control-label">Full Name</label>
        <div class="col-sm-10">
          <input type="text" name="fullname"class="form-control">
        </div>
      </div>
          <!--End fullname field -->

             <!--Start submit field -->
      <div class="form-group">
        
        <div class="col-sm-offset-2 col-sm-10">
          <input type="submit" value="Save"class="btn btn-primary btn-lg">
        </div>
      </div>
          <!--End submit field -->

    </form> 
    </div>


<?php
  }
  include $tpl. 'footer.php';

} else {
  # code...
  header('Location: index.php');
  exit();
}
 ?>
