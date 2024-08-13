<?php $html="";
$connection = mysqli_connect('localhost','root', '','db_online_lms');
  include 'header.php';
$query= "select * from tbl_book";
$rs = mysqli_query($connection,$query);
while($row = mysqli_fetch_array($rs)){
 $html .= ' <option value='.$row['book_id'].'>'.$row['book_name']." - ".$row['book_author'].'</option>';
}
if(isset($_POST['submit']))
{
  $srn=$_POST['student_roll_no'];
  $sn=$_POST['student_name'];
  $cl=$_POST['class'];
  $scn=$_POST['student_contact_no'];
  $bid=$_POST['book_id'];
  $bn=$_POST['book_name'];
  $ide=$_POST['issue_date'];
$query="insert into tbl_bookissue (student_roll_no,student_name,class,student_contact_no,book_id,book_name,issue_date) values ('$srn','$sn','$cl','$scn','$bid','$bn','$ide')";
$rs1=mysqli_query($connection,$query);
if ($rs1)
header ("location:bookissue.php");
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
      echo "New Book Added Successfully";
    }?>
          <h3>Add Book Issue Record</h3>
        </div>
        <div class="panel-body">
           <form method="post" action="" class="form-inline" enctype="multipart/form-data">
            <div class="form-group">
              <label>S.Roll No</label><br>
              <input type="text" name="student_roll_no" required></input><br>
              <label>Student Name</label><br>
              <input type="text" name="student_name" required></input><br>
              <label>Class </label><br>
              <input type="text" name="class" required></input><br>
              <label>S.Contact No.</label><br>
              <input type="text" name="student_contact_no" required></input><br>
              <label>Book Name</label><br>
              <Select name="book_name" required><?php echo $html; ?></select><br>
              <label>Issue Date</label><br>
              <input type="date" name="issue_date" required></input> <br>  
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