<?php  $html="";
$connection = mysqli_connect('localhost','root', '','db_online_lms');
  include 'header.php';
$bid = $_GET['uid'];
$query="select * from tbl_book where book_id='$bid'";
$rs=mysqli_query($connection,$query);
$row=mysqli_fetch_array($rs); 
$tn=$row['book_name'];
  $tem=$row['book_author'];
  $tu=$row['book_description'];
if(isset($_POST['update']))
 {
  $book_name1=$_POST['BName'];
  $book_author1=$_POST['BAuthor'];
  $book_description1=$_POST['BDescription'];
$query1="update tbl_book set book_name='$book_name1',book_author='$book_author1',book_description='$book_description1'where book_id='$bid'";
$result1=mysqli_query($connection, $query1);
$rs1=mysqli_query($connection,$query1);
if ($rs1)
header ("location:book.php");
else
  echo mysqli_error($connection);
}
?>
<div id="page-wrapper">
  <br>
  <div class="col-md-12">
    <div class="col-md-3"></div>
    <div class="col-md-5">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3>Update Book Record</h3>
        </div>
        <div class="panel-body">
           <form method="post" action="" class="form-inline">
            <div class="form-group">
         <label>General Details</label><br>
         <label>Book Name</label><br>
    <input type="text2" name="BName"required value="<?php echo $tn;?>"><br>
    <label>Book Author</label><br>
    <input type="text2" name="BAuthor" required value="<?php echo $tem;?>"><br>
    <label>Book Description</label><br>
    <input type="text2" name="BDescription" required value="<?php echo $tu;?>"><br>
      </div><br><br>
            <div class="form-group">
              <div class="col-md-1"></div>
              <input type="submit" name="update" value="Update" class="btn btn-danger col-md-offset-7">
            </div>
          </form>
        </div>  
      </div>
    </div>
    
  </div>  
</div> 
<?php include 'footer.php'; ?>