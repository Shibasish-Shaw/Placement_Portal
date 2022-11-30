<?php
session_start();
require_once "../connect.php";
$no_slot=$_SESSION['slot'];
$job_id=$_SESSION['job_id'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SetPlacement dashboard </title>
    <link rel="stylesheet" href="css/dashboard.css">
    <style type="text/css">
      /* Google Font Link */
          @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
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
            height: 100%;
            background-image: linear-gradient(35deg,white,var(--background));
            width: 100%;
            background-repeat: no-repeat;
          }
          .logo_name b{
            color: var(--background);
          }
          .content-header{
            width:40%;
            position: absolute;
            left:25%;
            right: 25%;
            /*background-color: red;*/
            margin-top: 90px;
          }
          .col-md-6{
            padding: 26px;
            width: 100%; 
          }
          .all_from{

            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 25px;
           background-color: var(--background); 
           border-radius: 25px;
          }
          .form-group{
            text-align: left;
            margin:5px;
            width: 100%;
          }
          .half_from{
          	text-align: right;
          	width: 100%;
          }
          .two_set{
            margin: 5px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
          }
          .form-group input, .form-group textarea{
            width: 100%;
          }
          .text-center{
            text-align: center;
            color: var(--header);
          }
          .text-center .uper{
            font-variant: small-caps;
          }
          input, textarea, select{
            border-radius: 5px;
          border: none;
          padding: 5px;
            outline: none;
           font-size: 1rem;
           font-weight: 700;
          color: black;
          /*border-bottom: 1px solid black;*/
          background-color: rgba(1,1,1,0.1);
          }
          input:hover , textarea:hover{
            background-color: white;
          }
          .btn{
            width: 106px;
            padding: 5px;
          }
              /* ===== MEDIA QUERIES =====*/
          @media screen and (max-width: 826px) {
            .all_from{
              display: flex;
              flex-direction: column;
              }
            .content-header{
              padding: 5px;
              width: 90%;
              left: 5%;
              right: 5%;
            }
          }
          @media screen and (max-width: 420px) {
            .all_from{
              display: flex;
              flex-direction: column;
            }
            .content-header{
              padding: 5px;
              width: 100%;
              left: 0%;
              right: 0%;
            }
          }
     </style>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   </head>
<body>      
  <div class="content-wrapper" style="margin-left: 0px;">
    <section class="content-header home-section">
      <div class="container">
        <div class="row latest-job margin-top-50 margin-bottom-20 bg-white">
          <h2 class="text-center margin-bottom-20 margin-top-20 uper">ADD slot for this job Profile</h2>
          <form method="post" id="registerCandidates" action="" enctype="multipart/form-data">
          	<?php
          	echo '<div class="all_from">';
          	for($i=0;$i<$no_slot;$i++){
            echo "<select class='form-group' name='slot[]' required >
            		<option>PPT </option>
            		<option>Technical Test</option>
            		<option>Coding Test </option>
            		<option>Aptitude Test</option>
            		<option>Group Discussions</option>
            		<option>Online Interview</option>
            		<option>On Campus Intervew </option>
            	</select>
              <div class='two_set'>
              <div>
            	<input type='date' name='slot_date[]' class='half_from' required>
              </div>
              <div>
            	<input type='time' name='slot_time[]' class='half_from' required>
              </div>
              </div>";
        	}
          echo '<button class="btn">Submit</button>';
        	echo '</div>';
            ?>
          </form>
      </div>
  </div>
</section>
</div>

</body>
</html>

 
<?php
//print_r($_POST);
echo $job_id;
if(isset($_POST['slot'])&& isset($_POST['slot_date']) && isset($_POST['slot_time'])){
for ( $it=0;$it<4;$it++) {
  try { 
  $sql="INSERT INTO setplacement.slot(slot_type,slot_date,slot_time, job_id) VALUES(:slot_type,:slot_date,:slot_time,:job_id)";
  $stmt=$conn->prepare($sql);
  $stmt->execute(array(
    ':slot_type' => $_POST['slot'][$it],
    ':slot_date' =>$_POST['slot_date'][$it],
    ':slot_time'=>$_POST['slot_time'][$it],
    ':job_id'=> $job_id
  ));
  }catch(Exception $err){
        echo $err->getMessage();
  }
  //echo $dept;
}
echo '<script>location.replace("comp_dashboard.php")</script>';
unset($_POST);
}


?>