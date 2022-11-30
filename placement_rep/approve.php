<?php
session_start();
require_once '../connect.php';
?>

<?php
echo "<pre>";
print_r($_POST);
$comments=$_POST['massage'];
$rollNo= $_POST['rollNo'];
$pr_id =$_POST['pr_id'];
$approved= $_POST['approve_type'];

//student data approve
if(isset($_POST['student_approve']) && $_POST['student_approve']==1){
if($_POST['approve_t']==='P' ||  $_POST['approve_t']==='N'){
try {
  $sql="UPDATE setplacement.maintains_student "." SET comments= \"$comments\", approved =\"$approved \" , pr_id=$pr_id "." WHERE rollNo =$rollNo ";
  
  $stmt =$conn->prepare($sql);
  $stmt->execute();
  echo $stmt->rowCount();
  echo "done";
  
  unset($_POST);
   header('Location:student_details.php');

  
} catch (Exception $e) {
  echo $e->getMessage();
}

}else{
try {	
$sql="INSERT INTO setplacement.maintains_student(comments,rollNo,pr_id,approved) VALUES(:comments,:rollNo,:pr_id,:approved)";
  $stmt=$conn->prepare($sql);
  echo "string";
  $stmt->execute(array(
  	':comments'=>$_POST['massage'],
      ':rollNo'=> $_POST['rollNo'],
      ':pr_id' => $_POST['pr_id'],
      ':approved'=> $_POST['approve_type']
  ));
  unset($_FILES);
  header('Location:student_details.php');
 // echo '<script>location.replace("student_details.php")</script>';
}
catch(Exception $err){
    echo $err->getMessage();
  }
  }
}

?>