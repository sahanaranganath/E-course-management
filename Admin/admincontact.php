<?php
if(!isset($_SESSION)){ 
  session_start(); 
}
define('TITLE', 'Admin contact');
define('PAGE', 'admincontact');
include('./adminInclude/header.php'); 
include('../dbConnection.php');

 if(isset($_SESSION['is_admin_login'])){
  $adminEmail = $_SESSION['adminLogEmail'];
 } else {
  echo "<script> location.href='../index.php'; </script>";
 }
 $adminEmail = $_SESSION['adminLogEmail'];
 if(isset($_REQUEST['adminPassUpdatebtn'])){
  if(($_REQUEST['adminPass'] == "")){
   // msg displayed if required field missing
   $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
    $sql = "SELECT * FROM admin WHERE admin_email='$adminEmail'";
    $result = $conn->query($sql);
    if($result->num_rows == 1){
     $adminPass = $_REQUEST['adminPass'];
     $sql = "UPDATE admin SET admin_pass = '$adminPass' WHERE admin_email = '$adminEmail'";
      if($conn->query($sql) == TRUE){
       // below msg display on form submit success
       $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
      } else {
       // below msg display on form submit failed
       $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
      }
    }
   }
}
 ?>


<div class="col-sm-9 mt-5">
    <!--Table-->
    <p class=" text-white p-2" style=" background-color:#ffcccb; font-weight: bold; font-size: 30px; margin-top: 20px">Queries/Contacts</p>
    <?php
      $sql = "SELECT * FROM contact";
      $result = $conn->query($sql);
      if($result->num_rows > 0){
       echo '<table class="table">
       <thead>
        <tr>
         <th scope="col"> Id</th>
         <th scope="col">Name</th>
         <th scope="col">Email</th>
         <th scope="col">Contact</th>
         <th scope="col">Description</th>
        </tr>
       </thead>
       <tbody>';
        while($row = $result->fetch_assoc()){
          echo '<tr>';
          echo '<th scope="row">'.$row["id"].'</th>';
          echo '<td>'. $row["firstname"].'</td>';
          echo '<td>'.$row["email"].'</td>';
          echo '<td>'.$row["contact"].'</td>';
          echo '<td>'.$row["description"].'</td>';
          echo '<td><form action="" method="POST" class="d-inline"><input type="hidden" name="id" value='. $row["id"] .'><button type="submit" class="btn btn-danger" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button></form></td>
         </tr>';
        }

        echo '</tbody>
        </table>';
      } else {
        echo "0 Result";
      }
      if(isset($_REQUEST['delete'])){
       $sql = "DELETE FROM contact WHERE id = {$_REQUEST['id']}";
       if($conn->query($sql) === TRUE){
         // echo "Record Deleted Successfully";
         // below code will refresh the page after deleting the record
         echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
         } else {
           echo "Unable to Delete Data";
         }
      }
     ?>
  </div>
 </div>  <!-- div Row close from header -->
</div>  <!-- div Conatiner-fluid close from header -->


<?php
include('./adminInclude/footer.php'); 
?>