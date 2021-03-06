<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{	
	// $docid=$_SESSION['id'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$cpassword=$_POST['cpassword'];
	// $pataddress=$_POST['pataddress'];
	// $patage=$_POST['patage'];
	// $medhis=$_POST['medhis'];
	
	$sql=mysqli_query($con,"insert into admin(username,password,email) values('$username','$password','$email')");
	if($sql)
	{
	echo "<script>alert('Admin info added Successfully');</script>";
	header('location:add-admin.php');

}else{
	echo "<script>alert('Error');</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Add Another Administrator</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />

	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#patemail").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
<div class="app-content">
<?php include('include/header.php');?>
						
<div class="main-content" >
<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
<section id="page-title">
<div class="row">
<div class="col-sm-8">
<h1 class="mainTitle">Admin |Criminal</h1>
</div>
<ol class="breadcrumb">
<li>
<span>Criminal</span>
</li>
<li class="active">
<span>Add Criminal</span>
</li>
</ol>
</div>
</section>
<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<div class="row margin-top-30">
<div class="col-lg-8 col-md-12">
<div class="panel panel-white">
<div class="panel-heading">
<h5 class="panel-title">Add Administrator</h5>
</div>
<div class="panel-body">
<form role="form" name="" method="post">

<div class="form-group">
<label for="doctorname">
 Username
</label>
<input type="text" name="username" class="form-control"  placeholder="Enter Username" required="true">
</div>
<div class="form-group">
<label for="fess">
Admin Email Address
</label>
<input type="email" id="patemail" name="email" class="form-control"  placeholder="Enter Email" required="true" onBlur="userAvailability()">
<span id="user-availability-status1" style="font-size:12px;"></span>
</div>

<!-- Add as superadmin or normal admin -->

<!-- <div class="form-group">
<label for="fess">
Admin Privilege(super admin/normal admin)
</label><br>
<select>
	<option>Superadmin</option>
	<option>Normal Admin</option>
</select>
</div> -->

<div class="form-group">
<label for="fess">
Password
</label>
<input type="password" name="password" class="form-control"  placeholder="Enter Password" required="true"  >
</div>
<div class="form-group">
<label for="fess">
Confirm Password
</label>
<input type="password" name="cpassword" class="form-control"  placeholder="Confirm Password" required="true" >
</div>

<div class="form-group">

<!-- <div class="form-group">
<label for="fess">
 Medical History
</label>
<textarea type="text" name="medhis" class="form-control"  placeholder="Enter  Criminal Medical History(if any)" required="true"></textarea>
</div>	 -->

<button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">
Add
</button>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="panel panel-white">
</div>
</div>
</div>
</div>
</div>
</div>				
</div>
</div>
</div>
			<!-- start: FOOTER -->
<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
