<?php $html="";
session_start();
if($_SESSION ['username'] =="")
  header("location:login.php");
echo $_SESSION ['username'];
  include 'header.php';
  include '/config/function.php';
?>          
<div id="page-wrapper">
  <br>
  <div class="col-md-12">
  	<a href="addteacher.php" class="btn btn-success">Teacher</a><br><br>
  	<table class="table table-hover">
  		<tr>
  			<th>#</th>
  			<th>Teacher Name</th>
  			<th>Teacher Password</th>
        <th>Teacher Address</th>
        <th>Actions</th>
  		</tr>
      <?php 
        $data = fetch_teacher("teacher");
        while($row = mysqli_fetch_array($data)){
          ?>
          <tr>
            <td><?php echo $row['Teacher_Id']; ?></td>
            <td><?php echo $row['Teacher_Name']; ?></td>
            <td><?php echo $row['Teacher_Password']; ?></td>
            <td><?php echo $row['Teacher_Email']; ?></td>
            <td>
              <a href="del.php?Teacher_Id=<?php echo $row['Teacher_Id']; ?>"><span class="btn btn-danger">Delete</span></a>|
              <a href="edit.php?Teacher_Id=<?php echo $row['Teacher_Id']; ?>"><span class="btn btn-success">Edit</span></a>
            </td>
          </tr>

          <?php
        }
       ?>
  	</table>
  </div>	
</div> 
<?php include 'footer.php'; ?>