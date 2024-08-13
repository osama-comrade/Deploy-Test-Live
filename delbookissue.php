<?php
$connection = mysqli_connect('localhost','root', '','db_online_lms');
$tid = $_GET['uid'];
$data= "select * from tbl_bookissue where bookissue_id='$tid'";
$result=mysqli_query($connection,$data);
$row=mysqli_fetch_array($result);
$rs ="delete from tbl_bookissue where bookissue_id='$tid'";
mysqli_query($connection,$rs);
 header ("location:bookissue.php");
?>