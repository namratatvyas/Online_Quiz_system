<?php
session_start();
if(isset($_SESSION['username']) && (!isset($_SESSION['key']))){
   header('location:account.php?q=1');
}
else if(isset($_SESSION['username']) && isset($_SESSION['key']) && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39'){
   header('location:dash.php?q=0');
}
else{}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="favicon.ico" type="image/bg1" sizes="16x16">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/> 
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php
if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
}
?>
<script>
function validateForm() {
  var y = document.forms["form"]["name"].value; 
  if (y == null || y == "") {
    document.getElementById("errormsg").innerHTML="Name must be filled out.";
    return false;
  }
  var br = document.forms["form"]["branch"].value;
  if (br == "") {
    document.getElementById("errormsg").innerHTML="Please select your branch";
    return false;
  }
  if (m.length < 10) {
    document.getElementById("errormsg").innerHTML="Passwordr must be 12 digits long";
    return false;
  }
  var g = document.forms["form"]["gender"].value;
  if (g=="") {
    document.getElementById("errormsg").innerHTML="Please select your gender";
    return false;
  }
  var x = document.forms["form"]["username"].value;
  if (x.length == 0) {
    document.getElementById("errormsg").innerHTML="Please enter a valid username";
    return false;
  }
  if (x.length < 4) {
    document.getElementById("errormsg").innerHTML="Username must be at least 4 characters long";
    return false;
  }
  var m = document.forms["form"]["phno"].value;
  if (m.length != 10) {
    document.getElementById("errormsg").innerHTML="Phone number must be 10 digits long";
    return false;
  }
  var a = document.forms["form"]["password"].value;
  if(a == null || a == ""){
    document.getElementById("errormsg").innerHTML="Password must be filled out";
    return false;
  }
  if(a.length<4 || a.length>15){
    document.getElementById("errormsg").innerHTML="Passwords must be 4 to 15 characters long.";
    return false;
  }
  var b = document.forms["form"]["cpassword"].value;
  if (a!=b){
    document.getElementById("errormsg").innerHTML="Passwords must match.";
    return false;
  }
}
</script>
</head>

<body>

	<div class="bg1">
<div class="row">

<div class="col-md-7"></div>
<div class="col-md-4 panel"> 
  <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <h3 align="center">Registration Form</h3>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <div id="errormsg" style="font-size:14px;font-family:calibri;font-weight:normal;color:red"><?php
if (@$_GET['q7']) {
    echo '<p style="color:red;font-size:15px;">' . @$_GET['q7'];
}
?></div>
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text" value="<?php
if (isset($_GET['name']))
{
echo $_GET['name'];
}?>">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="rollno"></label>  
  <div class="col-md-12">
  <input id="rollno" name="rollno" placeholder="Enter your Roll no (Ex.732116104***)" class="form-control input-md" type="text" value="<?php
if (isset($_GET['rollno']))
{
echo $_GET['rollno'];
}?>">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Select your gender" class="form-control input-md" >
   <option value="" <?php
if (!isset($_GET['gender']))
    echo "selected";
?>>Select Gender</option>
  <option value="M" <?php
  if (isset($_GET['gender']))
  {
if ($_GET['gender'] == "M")
    echo "selected";
  }
?>>Male</option>
  <option value="F" <?php
  if (isset($_GET['gender']))
  {
if ($_GET['gender'] == "F")
    echo "selected";
  }
?>>Female</option> </select>
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="branch"></label>
  <div class="col-md-12">
    <select id="branch" name="branch" placeholder="Select your branch" class="form-control input-md" >
   <option value="" <?php
if (!isset($_GET['branch']))
    echo "selected";
?>>Select Branch</option>
  <option value="CSE" <?php
  if (isset($_GET['branch']))
  {
if ($_GET['branch'] == "CSE")
    echo "selected";
  }
  ?>>Computer Science and Engineering(B.TECH)</option>
  <option value="ECE" <?php
  if (isset($_GET['branch']))
  {
if ($_GET['branch'] == "ECE")
    echo "selected";
  }
?>>Electronics and Communication Engineering(B.TECH)</option>
  <option value="EEE" <?php
  if (isset($_GET['branch']))
  {
if ($_GET['branch'] == "EEE")
    echo "selected";
  }
?>>Electrical and Electronics Engineering(B.TECH)</option>
  <option value="IT" <?php
  if (isset($_GET['branch']))
  {
  if ($_GET['branch'] == "IT")
    echo "selected";
  }
?>>Information Technology(B.TECH)</option>
  <option value="CHEM" <?php
  if (isset($_GET['branch']))
  {
if ($_GET['branch'] == "CHEM")
    echo "selected";
  }
?>>Chemical Engineering(B.TECH)</option>
  <option value="CIVIL" <?php
  if (isset($_GET['branch']))
  {
if ($_GET['branch'] == "CIVIL")
    echo "selected";
  }
?>>Civil Engineering(B.TECH)</option> 
  <option value="MECH" <?php
  if (isset($_GET['branch']))
  {
if ($_GET['branch'] == "MECH")
    echo "selected";
  }
?>>Mechanical Engineering(B.TECH)</option> 
  <option value="ITCA" <?php
  if (isset($_GET['branch']))
  {
if ($_GET['branch'] == "ITCA")
    echo "selected";
  }
?>>Master of Computer Application(ITCA)</option> 
  <option value="IMSC" <?php
  if (isset($_GET['branch']))
  {
if ($_GET['branch'] == "IMSC")
    echo "selected";
  }
?>>Integrated MSc</option> </select>
  </input>
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label title1" for="username"></label>
  <div class="col-md-12">
    <input id="username" name="username" placeholder="Choose a username" class="form-control input-md" type="username" value="<?php
if (isset($_GET['username']))
{
echo $_GET['username'];
};
?>" style="<?php
if (isset($_GET['q7']))
    echo "border-color:red";
?>">

  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="phno"></label>  
  <div class="col-md-12">
  <input id="phno" name="phno" placeholder="Enter your mobile number" class="form-control input-md" type="number" value="<?php
if (isset($_GET['phno']))
{
echo $_GET['phno'];
}
?>">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control input-md" type="password">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12" style="text-align: center"> 
    <input  type="submit" value=" Register Now " class="btn btn-primary" style="text-align:center" />
  </div>
</div>

</fieldset>
</form>
</div>
</div></div>
</div>
</body>
</html>