<?php
session_start();
require_once '../connect.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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
          	background-image: linear-gradient(15deg,white,var(--background));
            width: 100%;
            background-repeat: no-repeat;
          }
          .content-header{
          	width:50%;
          	position: absolute;
          	left:25%;
          	right: 25%;
            padding: 20px;
          }
          .col-md-6{
            padding: 26px;
            width: 100%; 
          }
          .all_from{
            display: flex;
            justify-content: space-between;
            flex-direction: column;
            padding: 5px;
           background-color: var(--background); 
           border-radius: 25px;
          }
          .form-group{
            text-align: left;
            margin:2px;
            width: 100%;
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
  <title>Setplacement comp_from</title>
  <!-- Tell the browser to be responsive to screen width -->
  
</head>
<body>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px;">

    <section class="content-header">
      <div class="container">
        <div class="row latest-job margin-top-50 margin-bottom-20 bg-white">
          <h2 class="text-center margin-bottom-20 margin-top-20 uper">Create Your Profile</h2>
          <form method="post" id="registerCandidates" action="" enctype="multipart/form-data">
            <div class="all_from">
            <div class="col-md-6 latest-job ">
            	<div class="form-group">
                <h4>Comapany Name: </h4>
            	</div>
           		<div class="form-group">
                <input class="form-control input-lg" type="text" id="cmp_name" name="comp_name" placeholder="Enter Comapany Name *" required>
            	</div> 
              	<div class="form-group">
                <h4>E-Mail Address: </h4>
                </div>
                <div class="form-group">
                <input class="form-control input-lg" type="text" id="email" name="email" placeholder="<?php echo $_SESSION['email_id'];?>" value="<?php echo $_SESSION['email_id'];?>" >
                </div>                 
            </div>            
            <div class="col-md-6 latest-job ">
                <div class="form-group">
                <h4>Contact No: </h4>
                </div>  
              <div class="form-group">
                <input class="form-control input-lg" type="text" id="contactno" name="contactno" minlength="10" maxlength="10"  placeholder="Phone Number *">
              </div>
              <div class="form-group">
                <h4>company deatils: </h4>
                </div>  
              <div class="form-group">
                <textarea class="form-control input-lg" rows="4" id="deatils" name="comp_details" placeholder="Enter company details *"></textarea>
              </div>              
              
              <div class="form-group  col-md-12">
                <button class="btn btn-flat btn-lg ">Submite</button>
              </div>  
            
               
            </div>
          </div>
          </form>
          
        </div>
      </div>
    </section>
<?php
if( isset($_POST['comp_name']) && isset($_POST['email']) && isset($_POST['contactno']) && isset($_POST['comp_details']) ){
  
try{
  $sql="INSERT INTO setplacement.company(cmp_name,details,contactNo,email) 
 VALUES(:cmp_name,:details,:contactNo,:email)";
  $stmt=$conn->prepare($sql);
  $stmt->execute(array(
      ':cmp_name'=> $_POST['comp_name'],
      ':email' => $_POST['email'],
      ':details'=> $_POST['comp_details'],
      ':contactNo'=>$_POST['contactno']
  ));
  unset($_POST);
  echo '<script>location.replace("../log_in.php")</script>';
      }catch(Exception $err){
        echo $err->getMessage();
    } 
}
unset($_POST);
?>

</body>
</html>
