<?php $html="";
$connection = mysqli_connect('localhost','root', '','db_online_lms');
if(isset($_POST['btn_delete']))
  {   
      //count the total no. of checkbox
      $counter  = $_POST['counter']; 
    
      for($i=1; $i<$counter; $i++)
        { 
          if(isset($_POST['xb'.$i])){
          $biid = $_POST['xb'.$i];
         $rs ="delete from tbl_bookissue where bookissue_id='$biid'";
          $q= mysqli_query($connection,$rs);
      }
       }
         }
include 'header.php'; 
$query= "select * from tbl_bookissue";
$rs = mysqli_query($connection,$query);
if($rs){
  $i=1;
while($row = mysqli_fetch_array($rs)){
  $bid = $row['book_name'];
  $query1= "select * from tbl_book where book_id='$bid'";
  $rs1 = mysqli_query($connection,$query1);
  $row1 = mysqli_fetch_array($rs1);
 $html .= '<tr>
  <td> <input type="checkbox" name="xb'.$i.'" value="'.$row['bookissue_id'].'"> </td>
  <td>'.$row['student_roll_no'].'</td>
  <td>'.$row['student_name'].'</td>
  <td>'.$row['class'].'</td> 
  <td>'.$row['student_contact_no'].'</td> 
  <td>'.$row1['book_name'].'</td>
  <td>'.$row['issue_date'].'</td>
  <td><a href="delbookissue.php?uid='.$row['bookissue_id'].'">DELETE </a>
  |<a href="editbookissue.php?uid='.$row['bookissue_id'].'">EDIT </a></td> 
 </tr>';
 $i++;
}  
}
else
  mysqli_error($connection);


?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <style>
a:link, a:visited {
  background-color: #ff4d4d;
  color: white;
  padding: 7px 7px;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: maroon;
}
</style>    

</head>
<body>

  <form name="fm1" method="post">       
<div id="page-wrapper">
  <br>
<div class="col-md-12">
   <h3>BOOK ISSUED RECORD LIST</h3><br>
  	<a href="addbookissue.php" class="btn btn-danger">Issue A Book</a><br><br>
  	<table  name="example" class="table table-hover" id="example1">
<thead>
  		<tr>
<th> <input type="checkbox" name="ab" onClick="checkAllOneOne(this)"> </th>

<th> S.Roll No </th>
<th> Student Name</th>
<th> Class</th>
<th> S.Contact no </th>
<th> Book Name </th>
<th> Isssue Date </th>
<th> Action </th>
</tr>
<thead>
<?php echo $html; ?>
  
  	</table>
    <input type="hidden" name="counter" value="<?php echo $i; ?>"> 
   <!-- <p align="center"><button type="submit" class="btn btn-danger" name="btn_delete">Delete All Records</button></p>-->
   <p align="center"> <input type="submit" name="btn_delete" class="btn btn-danger" value="DELETE SELECTED RECORD"></p>
  
  </div>	
</div> 
</form>
<?php include 'footer.php'; ?>

<script type="text/javascript">

function checkAllOneOne(ac)
{ 
 
  if(ac.checked == true)   
  { 
    var i = 0;
    var j = 1;
    
  
    for (i=1; i < document.fm1.elements.length-1; i++) 
    { 
      if(document.fm1.elements[i].name == "xb" + j)
      { 
        document.fm1.elements[i].checked = true;
        j++;
      }
    }
  }
  
  else if(ac.checked == false)
  {
    var i = 0;
    var j = 1;
    
    for (i=1; i < document.fm1.elements.length-1; i++) 
    {
      if(document.fm1.elements[i].name == "xb" +j)
      {
        document.fm1.elements[i].checked = false;
        j++;
      }
    }
  }
}

</script>
  
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" charset="utf8" 
    src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
    $(document).ready( function () {
    $('#example').dataTable();
} );
    </script>
    </body>
      </html>