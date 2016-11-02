<?php require_once("include/header.php");
require_once("include/config.php");
 if ($_SESSION["auth"]!="true"){
   
    session_destroy();
    header('location:login.php');
  }
  echo "toda";
  print_r($_SESSION);
?> 

  <body >

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project-ALFA</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="edit_profile.php">Edit Profile</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" id="changePassword_atag"><span class="glyphicon glyphicon-user"></span>Change Password</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container" style="display:none; height: 200px: width: 150px;" id="changePassword_div">
       <div class="row">
         <div class="col-md-8"></div>
         <div class="col-md-4">
            <form class="form-signin">
            <h3 class="text-justify">Change Password Form</h3>
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="oldPassword_id" class="form-control" placeholder="Old Password" required autofocus>
                <input type="password" id="newPassword_id" class="form-control" placeholder="New Password" required>
                <button class="btn btn-lg btn-primary btn-block btn-signin" id="change_button" type="submit">Submit</button>
            </form>
            
        </div>
        </div>
        </div>
    <div class="container">
      <img src="<?php echo $_SESSION["u_data"]["profile_picture"];?>">
      <ul>
        <?php foreach ($_SESSION["u_data"] as $key => $value) {
              echo "<li>".$key." : ".$value."</li>";
        }?>
      </ul>
    </div>
     <script src ="js/jquery.js"></script>
     <script>
       var id = <?php echo $_SESSION["u_data"]["reg_id"] ?>;
     </script>
     <script src="js/changePassword.js"></script>