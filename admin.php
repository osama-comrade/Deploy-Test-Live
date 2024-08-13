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
  	<a href="addadmin.php" class="btn btn-success">Admin</a><br><br>
  	<table class="table table-hover">
  		<tr>
  			<th>#</th>
  			<th>Admin Name</th>
  			<th>Admin Password</th>
        <th>Admin Address</th>
        <th>Actions</th>
  		</tr>
      <?php 
        $data = fetch_admin("admin");
        while($row = mysqli_fetch_array($data)){
          ?>
          <tr>
            <td><?php echo $row['admin_id']; ?></td>
            <td><?php echo $row['admin_name']; ?></td>
            <td><?php echo $row['admin_password']; ?></td>
            <td><?php echo $row['admin_address']; ?></td>
            <td>
              <a href="del.php?admin_id=<?php echo $row['admin_id']; ?>"><span class="btn btn-danger">Delete</span></a>|
              <a href="edit.php?admin_id=<?php echo $row['admin_id']; ?>"><span class="btn btn-success">Edit</span></a>
            </td>
          </tr>

          <?php
        }
       ?>
  	</table>
  </div>	
</div> 
<?php include 'footer.php'; ?>