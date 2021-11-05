<?php
session_start();
// error_reporting(0);
include('../admin/include/config.php');
include('../admin/include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{	
	$eid=$_GET['editid'];
	$patname=$_POST['patname'];
	$patcontact=$_POST['patcontact'];
	$patemail=$_POST['patemail'];
	$gender=$_POST['gender'];
	$pataddress=$_POST['pataddress'];
	$patage=$_POST['patage'];
	$medhis=$_POST['medhis'];
	$pressure=$_POST['pressure'];
	$temperature=$_POST['temperature'];
	$sugar=$_POST['sugar'];
	$sql=mysqli_query($con,"update tblpatient set PatientName='$patname',PatientContno='$patcontact',PatientEmail='$patemail',PatientGender='$gender',PatientAdd='$pataddress',PatientAge='$patage',PatientMedhis='$medhis',blood_sugar='$sugar',temperature='$temperature',blood_pressure='$pressure' where ID='$eid'");
	if($sql)
	{
	echo "<script>alert('Patient info updated Successfully');</script>";
	header('location:manage-patient.php');

	}
}
?>
<?php include('head.php') ?>
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
<h1 class="mainTitle">Nurse | Add Patient</h1>
</div>
<ol class="breadcrumb">
<li>
<span>Patient</span>
</li>
<li class="active">
<span>Add Patient</span>
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
<h5 class="panel-title">Add Patient</h5>
</div>
<div class="panel-body">
<form role="form" name="" method="post">
<?php
 $eid=$_GET['editid'];
$ret=mysqli_query($con,"select * from tblpatient where ID='$eid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<div class="form-group">
<label for="doctorname">
Patient Name
</label>
<input type="text" name="patname" class="form-control"  value="<?php  echo $row['PatientName'];?>" required="true">
</div>
<div class="form-group">
<label for="fess">
 Patient Contact no
</label>
<input type="text" name="patcontact" class="form-control"  value="<?php  echo $row['PatientContno'];?>" required="true" maxlength="10" pattern="[0-9]+">
</div>
<div class="form-group">
<label for="fess">
Patient Email
</label>
<input type="email" id="patemail" name="patemail" class="form-control"  value="<?php  echo $row['PatientEmail'];?>" readonly='true'>
<span id="email-availability-status"></span>
</div>
<div class="form-group">
              <label class="control-label">Gender: </label>
              <?php  if($row['Gender']=="Female"){ ?>
              <input type="radio" name="gender" id="gender" value="Female" checked="true">Female
              <input type="radio" name="gender" id="gender" value="male">Male
              <?php } else { ?>
              <label>
              <input type="radio" name="gender" id="gender" value="Male" checked="true">Male
              <input type="radio" name="gender" id="gender" value="Female">Female
              </label>
             <?php } ?>
            </div>
<div class="form-group">
<label for="address">
Patient Address
</label>
<textarea name="pataddress" class="form-control" required="true"><?php  echo $row['PatientAdd'];?></textarea>
</div>
<div class="form-group">
<label for="fess">
 Patient Age
</label>
<input type="text" name="patage" class="form-control"  value="<?php  echo $row['PatientAge'];?>" required="true">
</div>

<div class="form-group">
<label for="fess">
 Medical History
</label>
<textarea type="text" name="medhis" class="form-control"  placeholder="Enter Patient Medical History(if any)" required="true"><?php  echo $row['PatientMedhis'];?></textarea>
</div>	

<div class="form-group">
<label for="fess">
 Blood sugar
</label>
<textarea type="text" name="sugar" class="form-control"  placeholder="Enter Blood Sugar" required="true"><?php  echo $row['blood_sugar'];?></textarea>
</div>

<div class="form-group">
<label for="fess">
 Temperature
</label>
<textarea type="text" name="temperature" class="form-control"  placeholder="Enter Patient Temperature" required="true"><?php  echo $row['temperature'];?></textarea>
</div>
<div class="form-group">
<label for="fess">
 Body Pressure
</label>
<textarea type="text" name="pressure" class="form-control"  placeholder="Enter Patient Blood Pressure" required="true"><?php  echo $row['blood_pressure'];?></textarea>
</div>

<div class="form-group">
<label for="fess">
 Creation Date
</label>
<input type="text" class="form-control"  value="<?php  echo $row['CreationDate'];?>" readonly='true'>
</div>
<?php } ?>
<button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">
Update
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
				<?php include("script.php") ?>
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
