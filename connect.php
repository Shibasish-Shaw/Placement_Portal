<?php
$servername="localhost";
$username="root";
$password="";
$myDb="setplacement";
 try{
      $conn= new PDO("mysql:host=$servername; dpname=$myDb",$username,$password);
      //PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      //echo "connection ok ";
     //echo "<div style='width:100px; height:100px; background-color:green;border-radius: 50%;'></div>";
 }catch(PDOException $e){
      echo "Connection Faild :".$e->getMessage();
 }
?>