<?php 
require_once("include/config.php"); 
if (empty($_SESSION["auth"])) {
  //print_r($_SESSION);
   session_destroy();
   echo "<script>alert('plz login firs redirecting to login page')</script>";
   header("location:index.php");
}
print_r($_SESSION);
?>
<?php require_once("include/header.php"); ?>
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
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li><a href="logout.php" id="login_button"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="row" style="margin-top: 20px">
      <div class="col-xs-6"></div>
      <div class="col-xs-3"><p>Edit Profile FORM</p></div>
      <div class="col-xs-3"></div>
    </div>

    <div class="container" style="margin-top: 20px; border: solid;">

      <form>
      
        <div class="form-group row" >
  <label for="name" class="col-xs-2 col-form-label">Name</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" name="fname" value="<?php echo $_SESSION["u_data"]["first_name"]?>" placeholder="<?php echo $_SESSION["u_data"]["first_name"]?>" onblur="empty(this,del_span,add_span);lengthy(this,del_span,add_span);alphabetz(this,del_span,add_span)" minlength="2"  id="fname_id" maxlength="7" required>
    <span id="fname_err" class=" help-block"> </span>
  </div>
  
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-xs-2 col-form-label">Last Name</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" value="<?php echo $_SESSION["u_data"]["last_name"]?>" placeholder="<?php echo $_SESSION["u_data"]["last_name"]?>" name="lname" placeholder="enter last name" minlength="2"  id="lname_id" required maxlength="50" onblur="empty(this,del_span,add_span); lengthy(this,del_span,add_span);alphabetz(this,del_span,add_span);">
    <span id="lname_err" class=" help-block"> </span>
  </div>

</div>
<div class="form-group row">
  <label for="example-email-input" class="col-xs-2 col-form-label">Father Name</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" name="father_name" value="<?php echo $_SESSION["u_data"]["father_name"]?>" placeholder="<?php echo $_SESSION["u_data"]["father_name"]?>" id="father_name_id" required maxlength="100" minlength="2" onblur="empty(this,del_span,add_span); lengthy(this,del_span,add_span); alphabetz(this,del_span,add_span);">
    <span id="father_name_err" class=" help-block"> </span>
  </div>
</div>
<div class="form-group row">
  <label for="mother_name" class="col-xs-2 col-form-label">Mother,s Name</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" name="mother_name"  id="mother_name_id" value="<?php echo $_SESSION["u_data"]["mother_name"]?>" placeholder="<?php echo $_SESSION["u_data"]["mother_name"]?>" required maxlength="100" minlength="2" onblur="empty(this,del_span,add_span); lengthy(this,del_span,add_span);alphabetz(this,del_span,add_span);">
    <span id="mother_name_err" class=" help-block"> </span>
  </div>
</div>
<div class="form-group row">
  <label for="email" class="col-xs-2 col-form-label">Email</label>
  <div class="col-xs-10">
    <input class="form-control" type="email"  id="email_id" value="<?php echo $_SESSION["u_data"]["email"]?>" placeholder="<?php echo $_SESSION["u_data"]["email"]?>" name="email" required minlength="5" maxlength="60" onblur="empty(this,del_span,add_span); lengthy(this,del_span,add_span); emailVal(this,del_span,add_span);">
    <span id="email_err" class=" help-block"> </span>
  </div>
</div>
<div class="form-group row">
  <label for="date" class="col-xs-2 col-form-label">Date</label>
  <div class="col-xs-10">
    <input class="form-control" type="date" date-format="yyyy-mm-dd" id="date_id" name="date" value="<?php echo $_SESSION["u_data"]["dob"]?>" placeholder="<?php echo $_SESSION["u_data"]["dob"]?>" required>
    <span id="date_err" class=" help-block"> </span>
  </div>
</div>
<div class="form-group row">
  <label for="date" class="col-xs-2 col-form-label">graduation year</label>
  <div class="col-xs-10">
    <input class="form-control" type="date" value="2011" date-format="yyyy" id="graduation_date_id" name="date" value="<?php echo $_SESSION["u_data"]["y_o_p"]?>" placeholder="<?php echo $_SESSION["u_data"]["y_o_p"]?>" required>
    <span id="date_err" class=" help-block"> </span>
  </div>
</div>
<div class="form-group row">
  <label class="col-xs-2 col-form-label"> Gender</label>
  <span id="gender_err" class=" help-block"> </span>
  <div class="col-xs-6">
    <div class="col-xs-3">
      <label>
         <input type="radio" name="gender" id="male_id" value="male">
         Male
         </label>
    </div>
    <div class="col-xs-3">
      <label>
        <input type="radio" name="gender" id="female_id" value="female">
         Female
  </label>
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-xs-2 col-form-label">Country</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" name="country" value="India" disabled  id="country_id" value="<?php echo $_SESSION["u_data"]["country"]?>" placeholder="<?php echo $_SESSION["u_data"]["country"]?>" required maxlength="50">
    <span id="country_err" class=" help-block"> </span>
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-xs-2 col-form-label">State</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" name="state"  id="state_id" value="<?php echo $_SESSION["u_data"]["state"]?>" value="<?php echo $_SESSION["u_data"]["state"]?>" required onblur="empty(this,del_span,add_span);alphabetz(this,del_span,add_span);" minlength="3" maxlength="50">
    <span id="state_err" class=" help-block"> </span>
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-xs-2 col-form-label">District</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" name="district"  id="district_id" value="<?php echo $_SESSION["u_data"]["district"]?>" placeholder="<?php echo $_SESSION["u_data"]["district"]?>" required onblur="empty(this,del_span,add_span);alphabetz(this,del_span,add_span);" minlength="3" maxlength="50">
    <span id="district_err" class=" help-block"> </span>
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-xs-2 col-form-label">City</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" name="city"  id="city_id" value="<?php echo $_SESSION["u_data"]["city"]?>" placeholder="<?php echo $_SESSION["u_data"]["city"]?>" required maxlength="50" onblur="empty(this,del_span,add_span); alphabetz(this,del_span,add_span);">
    <span id="city_err" class=" help-block"> </span>
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-xs-2 col-form-label"  ">Pin Code</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" name="pin"  id="pin_id" maxlength="6" minlength="6" value="<?php echo $_SESSION["u_data"]["pincode"]?>" placeholder="<?php echo $_SESSION["u_data"]["pincode"]?>" onblur="alphabetz(this,del_span,add_span); lengthy(this,del_span,add_span);";>
    <span id="pin_err" class=" help-block"> </span>
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-xs-2 col-form-label">Nationality</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" name="nationality"  id="nationality_id" value="<?php echo $_SESSION["u_data"]["nationality"]?>" placeholder="<?php echo $_SESSION["u_data"]["nationality"]?>" required maxlength="20">
    <span id="nationality_err" class=" help-block"> </span>
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-xs-2 col-form-label">Education</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" name="education"  id="education_id" value="<?php echo $_SESSION["u_data"]["education"]?>" placeholder="<?php echo $_SESSION["u_data"]["education"]?>" required maxlength="50" minlength="5" onblur="alphabetz(this,del_span,add_span); lengthy(this,del_span,add_span); empty(this,del_span,add_span);" >
    <span id="education_err" class=" help-block"> </span>
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-xs-2 col-form-label">University</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" name="university" placeholder="name of university"  id="university_id" required maxlength="50" value="<?php echo $_SESSION["u_data"]["board_university"]?>" placeholder="<?php echo $_SESSION["u_data"]["board_university"]?>" onblur="alphabetz(this,del_span,add_span); lengthy(this,del_span,add_span); empty(this,del_span,add_span);">
    <span id="university_err" class=" help-block"> </span>
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-xs-2 col-form-label">Telephone</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" name="phone"  id="phone_id" value="<?php echo $_SESSION["u_data"]["phone_no"]?>" value="<?php echo $_SESSION["u_data"]["phone_no"]?>" maxlength="10">
    <span id="phone_err" class=" help-block"> </span>
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-xs-2 col-form-label">Mobile Number</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" name="mobile" onblur="empty(this,del_span,add_span); contact(this,del_span,add_span);lengthy(this,del_span,add_span);" value="<?php echo $_SESSION["u_data"]["mobile_no"]?>" placeholder="<?php echo $_SESSION["u_data"]["mobile_no"]?>"id="mobile_id" required minlength="10" maxlength="10">
    <span id="mobile_err" class=" help-block"> </span>
  </div>
</div>
<div class="form-group row">
  <label class="col-xs-2 col-form-label"> Physically Disable</label>
  <span id="diablity_err" class=" help-block"> </span>
  <div class="col-xs-6">
    <div class="col-xs-3">
      <label>
         <input type="radio"  name="phy_disable" id="phy_disable_yes" value="1">
         Yes
         </label>
    </div>
    <div class="col-xs-3">
      <label>
        <input type="radio" name="phy_disable" id="phy_disable_no"  value="0" >
         No
  </label>
    </div>
    <div class="col-xs-6" id="disablity_discription_id">
      <div class="form-group row">
        <label for="example-tel-input" class="col-xs-2 col-form-label">Kind of Disability</label>
       <div class="col-xs-10">
    <input class="form-control" type="text" id="disablity_discription_value_id" name="disablity_discription" maxlength="20" value="<?php echo $_SESSION["u_data"]["phy_attribute_discription"]?>" >
    <span id="disablity_discription_err" class=" help-block"> </span>
  </div>
</div>
    </div>
  </div>
</div>
<div class="form-group row">
  <label for="password" class="col-xs-2 col-form-label"  >Relogion</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" placeholder="religioud affiliation"  name="religion" id="religion_id" required maxlength="10" minlength="4" value="<?php echo $_SESSION["u_data"]["religion"]?>" placeholder="<?php echo $_SESSION["u_data"]["religion"]?>" onblur="empty(this,del_span,add_span);lengthy(this,del_span,add_span)">
    <span id="religion_err" class=" help-block"> </span>
  </div>
</div>

<div class="form-group row">
  <div class="col-xs-10 col-xs-offset-2">
    <label class="checkbox-inline col-xs-1">
  <input  type="checkbox" id="term_id" value="" onclick="checkedx(this,event);" > </label>
  <p class="col-xs-8"><bold>i agree to the terms and condition </bold></p>
  <p id="err_msg_term"></p>
  <span id="term_err" class=" help-block"> </span>
</div>

<div class="form-group row">
    <div class="col-xs-3 col-xs-offset-2">
      <button type="submit" id="button_id" class="btn btn-primary" disabled onclick="final(event,this,del_span,add_span);" ">Sign in</button>
    </div>
  </div>
<a href="" id="buttox" class="btn btn-primary" value="button">
      </form>
      
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script src ="js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src ="js/update.js"></script>
  </body>
</html>