<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if (isset($_POST['submit'])) {

    $criminalID = $_POST['criminalid'];
    $caseDescription = $_POST['caseDescription'];
    $policeID = $_POST['policeID'];
    $status = $_POST['status'];
    $cid = $_POST['cid'];

    $sql = mysqli_query($con, "insert into cases(criminalID,caseDescription,investigationStatus,policeID,cid) values('$criminalID','$caseDescription','$status','$policeID','$cid')");
    if ($sql) {
        echo "<script>alert('criminal info added Successfully');</script>";
        header('location:add-criminal.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Add Case</title>

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
                data: 'email=' + $("#patemail").val(),
                type: "POST",
                success: function(data) {
                    $("#user-availability-status1").html(data);
                    $("#loaderIcon").hide();
                },
                error: function() {}
            });
        }
    </script>
</head>

<body>
    <div id="app">
        <?php include('include/sidebar.php'); ?>
        <div class="app-content">
            <?php include('include/header.php'); ?>

            <div class="main-content">
                <div class="wrap-content container" id="container">
                    <!-- start: PAGE TITLE -->
                    <section id="page-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h1 class="mainTitle">Admin |Add case</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span>Cases</span>
                                </li>
                                <li class="active">
                                    <span>Add Cases</span>
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
                                                <h5 class="panel-title">Add Case</h5>
                                            </div>
                                            <div class="panel-body">
                                                <form role="form" name="" method="post">

                                                    <div class="form-group">
                                                        <label for="doctorname">
                                                            Case Description
                                                        </label>
                                                        <textarea name="CaseDescription" class="form-control" placeholder="Enter Case Description" required="true"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="policepecialization">
                                                            Case Category
                                                        </label>
                                                        <select name="cid" class="form-control" required="true">
                                                            <option value="">Choose Crime category</option>
                                                            <?php $ret = mysqli_query($con, "select * from crime");
                                                            while ($row = mysqli_fetch_array($ret)) {
                                                            ?>
                                                                <option value="<?php echo htmlentities($row['id']); ?>">
                                                                    <?php echo htmlentities($row['cname']); ?>
                                                                </option>
                                                            <?php } ?>

                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="policepecialization">
                                                            Status Of Investigation
                                                        </label>
                                                        <select name="policeid" class="form-control" required="true">
                                                            <option value="">Status Of Investigation</option>

                                                            <option value="ongoing">
                                                                ongoing
                                                            </option>
                                                            <option value="completed">
                                                                completed
                                                            </option>
                                                            <option value="pending">
                                                                pending
                                                            </option>

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="policepecialization">
                                                            Assign a police
                                                        </label>
                                                        <select name="policeid" class="form-control" required="true">
                                                            <option value="">Assign police</option>
                                                            <?php $ret = mysqli_query($con, "select * from police");
                                                            while ($row = mysqli_fetch_array($ret)) {
                                                            ?>
                                                                <option value="<?php echo htmlentities($row['id']); ?>">
                                                                    <?php echo htmlentities($row['policeName']); ?>
                                                                </option>
                                                            <?php } ?>

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="policepecialization">
                                                            Criminal
                                                        </label>
                                                        <select name="criminalid" class="form-control" required="true">
                                                            <option value="">Add criminal to case</option>
                                                            <?php $ret = mysqli_query($con, "select * from tblcriminal");
                                                            while ($row = mysqli_fetch_array($ret)) {
                                                            ?>
                                                                <option value="<?php echo htmlentities($row['ID']); ?>">
                                                                    <?php echo htmlentities($row['criminalName']); ?>
                                                                </option>
                                                            <?php } ?>

                                                        </select>
                                                    </div>

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
    <?php include('include/footer.php'); ?>
    <!-- end: FOOTER -->

    <!-- start: SETTINGS -->
    <?php include('include/setting.php'); ?>

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