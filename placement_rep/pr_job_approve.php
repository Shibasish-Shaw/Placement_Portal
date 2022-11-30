 <?php
session_start();
require_once '../connect.php';
?>

<?php
echo "<pre>";
print_r($_POST);

$comments=$_POST['massage'];
$job_id=$_POST['job_id'];
$pr_id=$_POST['pr_id'];
 $approved= $_POST['approve_type'];
//student data approve
if(isset($_POST['job_approve']) && $_POST['job_approve']==1){
if($_POST['approve_t']==='P' ||  $_POST['approve_t']==='N'){

try {
	$sql="UPDATE setplacement.maintains_job "." SET comments= \"$comments\", approved =\"$approved \" , pr_id=$pr_id "." WHERE job_id =$job_id ";
  echo $sql;
  $stmt =$conn->prepare($sql);
  $stmt->execute();
  echo $stmt->rowCount();
  echo "done";
  
  unset($_POST);
   header('Location:pr_job_details.php');
	
} catch (Exception $e) {
	echo $e->getMessage();
}

}else{
try {
		
$sql="INSERT INTO setplacement.maintains_job(comments,job_id,pr_id,approved) VALUES(:comments,:job_id,:pr_id,:approved)";
  $stmt=$conn->prepare($sql);
  echo "string";
  $stmt->execute(array(
  	':comments'=>$_POST['massage'],
      ':job_id'=> $_POST['job_id'],
      ':pr_id' => $_POST['pr_id'],
      ':approved'=> $_POST['approve_type']
  ));
  header('Location:pr_job_details.php');
 // echo '<script>location.replace("pr_job_details.php")</script>';
}
catch(Exception $err){
    echo $err->getMessage();
  }
}}

?>