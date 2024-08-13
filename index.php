<?php
$print='';
$connection = mysqli_connect('Localhost','root', '','db_online_lms');
if(isset($_POST['Login']))
 {
  $print= "Invalid Username or Password";
  $choose= $_POST['Selectposition'];
  if($choose=="Admin"){
  $email=$_POST['email'];
  $password=$_POST['pword'];
$query="select * from tbl_admin where admin_email= '$email' And admin_password= '$password'";
$rs=mysqli_query($connection,$query);
$r=mysqli_num_rows($rs);
if($r==1)
 {
  $_SESSION["uname"] = $username;
  header ("location:admin/book.php");
}
else{
$print= "Invalid Username or Password";
}
}
else
{

  $email=$_POST['email'];
  $password=$_POST['pword'];
$query="select * from tbl_teacher where Teacher_Email= '$email' And Teacher_Password= '$password'";
$rs=mysqli_query($connection,$query);
$r=mysqli_num_rows($rs);
if($r==1)
{

  $rs1=mysqli_fetch_array($rs);
$tid=$rs1['Teacher_Id'];
  $_SESSION["uname"] = $username;
  $_SESSION["ttid"] = $tid;

  header ("location:../user/relevantClass.php");
}
else{
echo mysqli_error($connection);
}
}
}
 ?>


<html lang="en">
<link rel="icon" href="123.png" type="image/x-icon">
<head>
  <style>
    input[type=submit] {
  width: 20%;
  background-color: #343b42;
  color: white;
  margin-left: 1%;
  padding: 5px 5px 5px 5px;
  margin-top: 15%;
  width: 72%;
  height: 20%;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  position: absolute;
  font-size: 50%;
}

input[type=submit]:hover {
  background-color: maroon;
  color: white;
}
.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}

  </style>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="img/123.png" type="image/x-icon">
    <title>Flash Manager LMS</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"><i class="fa fa-play fa-rotate-271"></i> Flash LMS</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#page-top" class="page-scroll">Home</a></li>
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#trail" class="btn btn-custom page-scroll">Trail</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="container">
      <div class="row">
        <div class="intro-text">
          <h1>Flash MANAGER</h1>
          <p>Online Library Management System<br>(for School/College/University)</p>
          <a href="#about" class="btn btn-custom  page-scroll">Learn More</a> </div>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2>About LMS</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="img/about.jpg" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <p style="font-size: 15px">A Library Management System (LMS) gives access to and manages the resources in your library.​ A well-chosen system will increase your library’s efficiency, save valuable administration time, lead to a better educational experience for pupils and help develop independent learning.</p>
          <a href="#trail" class="btn btn-default btn-lg page-scroll">Free Trail</a> </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Section -->
<div id="trail">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Connect with Panel</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-xs-1 col-md-6"> <img src="img/QMS.png" class="img-responsive" alt="" style="height: 400px; width: 1500px"> </div>
      <div class="col-xs-12 col-md-6">
                <div class="col-xs-12 col-md-6">
      <form name="email" method="POST">
       <div class="row">   
          <div class="col-xs-0">
            <div class="form-group">
              <h4 style="color:maroon"><?php echo $print ?></h4>
              <label>Enter Your Email and Password to Login</label><br>
              <input type="text2" id="email" name="email" class="form-control" placeholder="Email" style="margin-left: 1%; width: 72%;" required></input>
              <input type="password" id="password-field" class="form-control" name="pword" placeholder="Password" style="margin-left: 1%; margin-top:1%; width: 72%;" required position=absolute""><span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span></input>
              <select  name="Selectposition" style="margin-top:1% ; margin-left: 1%; margin-right:500%;  width: 72%; position: absolute;" required class="form-control" >
                <OPTION>Select Level</OPTION>
                <OPTION>Admin</OPTION>
                <OPTION>Teacher</OPTION>
              <p style="margin-top:10%"><input type="submit" name="Login" value="LOGIN" class="form-control"></input></p>
            </div>
          </div>
        </div> 
      </form> <br></div>
      </div>
    </div>
  </div>
</div>
</div>
  </div></div></div>
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h6>Feedback</h6>
      <hr>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <div class="social">
        <ul>
          <li><a href="mailto:flashorganizationOnline@outlook.com"><i class="fa fa-envelope"></i></a></li>
          <li><a href="https://web.facebook.com/FlashOrganization.net"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://api.whatsapp.com/message/XPQ5BM67XAEWE1"><i class="fa fa-whatsapp"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
<div class="social"><a href="#page-top" class="fas fa-angle-double-up"></a></div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="fnav">
      <p>Copyright &copy; 2021 Flash Manager | Designed by <a href="https://WWWW.FACEBOOK.COM/flashorganization.NET" rel="nofollow">FlashOrganization</a> - Help Center</p>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
<script>
$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>