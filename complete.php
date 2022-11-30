 
<?php
session_start();
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
 <style type="text/css">
    :root{
            --background:#45b6f7;
            --header:#4a555c;
            --footer: #131521;
            --head_font_color: white;
            --foot_font_color: whitesmoke;
          }
          *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins" , sans-serif;
          }
          html{
            background-image: linear-gradient(15deg,white,var(--background));
            width: 100%;
            background-repeat: no-repeat;
            
          }
 </style>
</head>
<body>
<?php
$next=0;
if(isset($_POST['level']) && isset($_POST['rupassword']) && isset($_POST['remail'])){
  try{
  $sql="INSERT INTO setplacement.log_in(email_id,passwords,levels) VALUES (:email,:passw, :level)";
  $stmt=$conn->prepare($sql);
  $stmt->execute(array(
    ':email'=>$_POST['remail'],
    ':passw'=>md5($_POST['rupassword']),
    ':level'=> $_POST['level']
  ));

  $_SESSION['email_id']=$_POST['remail'];

     if($_POST['level']==1){
      header('Location:student/std_from.php');
    }
   if($_POST['level']==2){
     header('Location:company/comp_from.php');
    }
   if($_POST['level']==3){
     header('Location:placement_rep/pr_from.php');
    }
    unset($_POST);
    print_r($_POST);
    echo "data inserted";

    }catch(Exception $err){
       echo '<script>alert("your email id there in this data base");</script>';
       echo '<script>location.replace("log_in.php")</script>';
    }
}
?>


  
</body>
</html>

