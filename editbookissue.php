<?php  $html="";$srn1="";$sn1="";$cls1="";$scn1="";$bn1="";$ide1="";
$connection = mysqli_connect('localhost','root', '','db_online_lms');
  include 'header.php';
$biid = $_GET['uid'];
$query="select * from tbl_bookissue where bookissue_id='$biid'";
$rs=mysqli_query($connection,$query);
$row=mysqli_fetch_array($rs); 
$srn=$row['student_roll_no'];
  $sn=$row['student_name'];
  $cls=$row['class'];
     $scn=$row['student_contact_no'];
     $ide=$row['issue_date'];
$query1= "select * from tbl_book";
$rs1 = mysqli_query($connection,$query1);
while($row = mysqli_fetch_array($rs1)){
 $html .= ' <option value='.$row['book_id'].'>'.$row['book_name'].' - '.$row['book_author'].'</option>';
}
if(isset($_POST['update']))
{
  $srn1=$_POST['student_roll_no'];
  $sn1=$_POST['student_name'];
  $cls1=$_POST['class'];
  $scn1=$_POST['student_contact_no'];
  $bn1=$_POST['book_name'];
     $ide1=$_POST['issue_date'];
   }
     {
$query="update tbl_bookissue set student_roll_no='$srn1',student_name='$sn1',class='$class',student_contact_no='$scn1',book_name='$bn1',issue_date='$ide1', where bookissue_id='$biid'";
$rs1=mysqli_query($connection,$query);
if ($rs1){
header ("location:bookissue.php"); }
else{
  echo mysqli_error($connection); }
}
?>  

<div id="page-wrapper">
  <br>
  <div class="col-md-12">
    <div class="col-md-3"></div>
    <div class="col-md-5">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3>Update Book Issued Record</h3>
        </div>
        <div class="panel-body">
           <form method="post" action="" class="form-inline" enctype="multipart/form-data">
            <div class="form-group">
              <label>S.Roll No</label><br>
              <input type="text" name="student_roll_no" value="<?php echo $srn;?>" required></input><br>
              <label>Student Name</label><br>
              <input type="text" name="student_name" value="<?php echo $sn;?>" required ></input><br>
              <label>class</label><br>
              <input type="text" name="class" required value="<?php echo $cls;?>"></input><br>
              <label>Student Contact no.</label><br>
              <input type="text" name="student_contact_no" required value="<?php echo $scn;?>"></input><br>
              <label>Book Name</label><br> 
              <Select name="book_name" required><?php echo $html; ?></select><br>
              <label>Issue Date</label><br>
              <input type="text" name="issue_date" value="<?php echo $ide?>" required></input> <br>  
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