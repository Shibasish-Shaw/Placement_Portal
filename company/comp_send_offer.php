<?php
session_start();
require_once'../connect.php';
print_r($_POST);

$job_id=$_POST['job_id'];
$rollNo=$_POST['rollNo'];
$offer_ctc=$_POST['offer_ctc'];
$offerlastdate=$_POST['offerlastdate'];
$aecepted='N';
echo $job_id;
echo $rollNo;
echo $offer_ctc;
echo $offerlastdate;

try{
  $sql="INSERT INTO setplacement.offers ( rollNo, job_id,offer_ctc,offerlastdate,aecepted) VALUES(:rollNo,:job_id,:offer_ctc,:offerlastdate, :aecepted)";
  $stmt=$conn->prepare($sql);
  echo "string";
  $stmt->execute(array(
      ':rollNo'=> $rollNo,
      ':job_id' => $job_id,
      ':offer_ctc'=>$offer_ctc,
      ':offerlastdate'=> $offerlastdate,
      ':aecepted' => $aecepted
  ));
  echo '<script>location.replace("comp_prev_job.php")</script>';

  }catch(Exception $err){
        echo $err->getMessage();
  }
  ?>