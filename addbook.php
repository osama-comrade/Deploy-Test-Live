<?php $html="";
$connection = mysqli_connect('localhost','root', '','db_online_lms');
  include 'header.php';
if(isset($_POST['submit']))
 {
  $Book_Name=$_POST['BName'];
  $Book_Author=$_POST['BAuthor'];
  $Book_Description=$_POST['BDescription'];
  
$query="insert into tbl_book(book_name,book_author,book_description)VALUES('$Book_Name','$Book_Author','$Book_Description')";
$rs2=mysqli_query($connection, $query);
if ($rs2)
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
          <?php if(isset($_POST['submit'])) 
    {
      echo "Data Add Successfully";
    }?>
          
          <h3>Add Book Record</h3>
        </div>
        <div class="panel-body">
           <form method="post" action="" class="form-inline">
            <div class="form-group">
         <label>General Details</label><br>
    <label>Book Name</label><br>
    <input type="text2" name="BName"required><br>
    <label>Book Author</label><br>
    <input type="text2" name="BAuthor" required><br>
    <label>Book Description</label><br>
    <textarea name="BDescription" id="message" class="form-control" rows="4" required></textarea>
    <br>
      </div><br><br>
            <div class="form-group">
              <div class="col-md-1"></div>
              <input type="submit" name="submit" value="Save" class="btn btn-danger col-md-offset-7">
            </div>
          </form>
        </div>  
      </div>
    </div>
    
  </div>  
</div> 
<?php include 'footer.php'; ?>