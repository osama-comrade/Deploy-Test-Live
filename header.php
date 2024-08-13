<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=10.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <link rel="icon" href="../FlashManagerLMS/img/123.png" type="image/x-icon">
    <title>Flash Manager LMS</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php"><i class="icon fa fa-play"></i> Flash Manager</a>
           <button onclick="goBack()" class="btn btn-danger" style="margin-left:3%;margin-top:3%;">Go Back</button>
         <div id="sideNav" href="">
		</div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
           
                    <a href="logout.php" class="btn btn-danger" style="margin-right:15%;margin-top:12%;">
          <span class="glyphicon glyphicon-eye-close"></span> Logout
        </a>
                </li>
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="book.php"><i class="fa fa-book"></i>Books List</a>
                    </li>
                    <li>
                        <a href="bookissue.php"><i class="fa fa-qrcode"></i>Book Issue</a>
                    </li>					 
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <script>
function goBack() {
  window.history.back();
}
</script>