<?php $html="";
$connection = mysqli_connect('localhost','root', '','db_online_lms');
if(isset($_POST['btn_delete']))
  {   
      //count the total no. of checkbox
      $counter  = $_POST['counter']; 

    
      for($i=1; $i<$counter; $i++)
        { 
          if(isset($_POST['xb'.$i])){
          $sid = $_POST['xb'.$i];
         $rs ="delete from tbl_book where book_Id='$sid'";
          $q= mysqli_query($connection,$rs);
      }
       }
         }
include 'header.php'; 
$connection = mysqli_connect('localhost','root', '','db_online_lms');
$query= "select * from tbl_book";
$rs = mysqli_query($connection,$query);
if($rs){
  $i=1;
while($row = mysqli_fetch_array($rs)){
 $html .= '<tr>
  <td> <input type="checkbox" name="xb'.$i.'" value="'.$row['book_id'].'"> </td>
  <td>'.$row['book_name'].'</td>
  <td>'.$row['book_author'].'</td>
  <td>'.$row['book_description'].'</td>
  <td><a href="delbook.php?uid='.$row['book_id'].'">DELETE </a>
  |<a href="editbook.php?uid='.$row['book_id'].'">EDIT </a></td>
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

   <form name="fm1" method="post">       
<div id="page-wrapper">
  <br>
<div class="col-md-12">
   <h3>BOOKS RECORD LIST</h3><br>
    <a href="addbook.php" class="btn btn-danger">Add New Book Record</a><br><br>
<table  name="example" class="table table-hover">
<thead>
      <tr>
<th> <input type="checkbox" name="ab" onClick="checkAllOneOne(this)"> </th>
<th> Book Name</th>
<th> Book Author </th>
<th> Book Description</th>
<th> Action </th>
</tr>
<?php echo $html ?> 
  
    </table>
    <input type="hidden" name="counter" value="<?php echo $i; ?>"> 
   <!-- <p align="center"><button type="submit" class="btn btn-danger" name="btn_delete">Delete All Records</button></p>-->
   <p align="center"> <input type="submit" name="btn_delete" class="btn btn-danger" value="DELETE SELECTED RECORD"></p>
  
  </div>
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
