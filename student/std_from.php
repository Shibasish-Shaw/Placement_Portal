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
            width:80%;
            position: absolute;
            left:10%;
            right: 10%;
            padding: 20px;
          }
          .col-md-6{
            padding: 26px;
            width: 100%; 
          }
          .all_from{
            display: flex;
            justify-content: space-between;
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
    @media screen and (max-width: 726px) {
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
  <title>Setplacement registration_from</title>
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
                <h4>First Name: </h4>
              </div>
              <div class="form-group">
                <input class="form-control input-lg" type="text" id="fname" name="fname" placeholder="First Name *" required>
              </div> 
                <div class="form-group">
                <h4>Last Name: </h4>
                </div>
                <div class="form-group">
                <input class="form-control input-lg" type="text" id="lname" name="lname" placeholder="Last Name *" required>
                </div>
                <div class="form-group">
                <h4>E-Mail Address: </h4>
                </div>
                <div class="form-group">
                <input class="form-control input-lg" type="text" id="email" name="email" placeholder="<?php echo $_SESSION['email_id'];?>" value="<?php echo $_SESSION['email_id'];?>" >
                </div>            
                <div class="form-group">
                <h4>Gender :  </h4>
                </div>
                <div class="form-group">
                <select class="form-control input-lg" id="gender_set" name="gender"  required>
                  <option value="M">Male *</option>
                  <option value="F">Femal *</option>
                  <option value="O">Other *</option>
                </select>
                </div>
                 <div class="form-group">
                <h4>Programme : </h4>
                </div>  
                <div class="form-group">
                <select class="form-control form-group " name="programme" required >
                  <option value="BTech">BTech</option>
                  <option value="MTech">MTech</option>
                   <option value="M.Sc">M.Sc</option>
                  <option value="M.A">M.A</option>
                  <option value="BDes">BDes</option>
                  <option value="MDes">MDes</option>
                  <option value="PhD">PhD</option>
                </select>
                </div>
                <div class="form-group">
                <h4>Department : </h4>
                </div>
                <div class="form-group">
                <select class="form-control form-group input-lg" name="dept" required >
                  <option value="Bioscience & Bioengineering">Biosciences & Bioengineering</option>
                  <option value="Chemincal Engineering">Chemincal Engineering</option>
                  <option value="Chemistry">Chemistry</option>
                  <option value="Civil Engineering">Civil Engineering</option>
                  <option value="Computer Science">Computer Science and Engineering</option>
                  <option value="Design">Design</option>
                  <option value="Electronics & Electrical">Electronics & Electrical</option>
                  <option value="Humanities and social Science">Humanities and social science</option>
                  <option value="Mathematics">Mathematics</option>
                  <option value="Mechanical Engineering">Mechanical Engineering</option>
                  <option value="Physics">Physics</option>
                </select>
                </div>
                <div class="form-group">
                <h4>Cpi : </h4>
                </div>
                <div class="form-group">
                <input class="form-control input-lg" type="number" step="0.01" id="cpi" name="cpi" placeholder="Current cpi *" required>
                </div> 
                <div class="form-group">
                <h4>Upload Your Resume: </h4>
                </div>  
                <div class="form-group">
                <label style="color: #10161A;">File Format PDF Only!</label>
                <input type="file" name="resume" class="btn btn-raised btn-link" required>
                </div>                  

            </div>            
            <div class="col-md-6 latest-job ">
              <div class="form-group">
                <h4> Catagory: </h4>
                </div>
                <div class="form-group">
                <input class="form-control input-lg" type="text" id="catagory" name="catagory" placeholder="catagory">
                </div> 
                <div class="form-group">
                <h4>Contact No: </h4>
                </div>  
              <div class="form-group">
                <input class="form-control input-lg" type="text" name="contactno" placeholder="Phone Number *">
              </div>
              <div class="form-group">
                <h4>Address: </h4>
                </div>  
              <div class="form-group">
                <textarea class="form-control input-lg" rows="4" id="address" name="address" placeholder="Address *"></textarea>
              </div>
               
              <div class="form-group">
                <h4>PPO details: </h4>
                </div>  
                <div class="form-group">
                <select class="form-control input-lg" name="ppo_details">
                  <option value="1">YES*</option>
                  <option value="0">NO*</option>
                </select>
              </div>
              <div class="form-group">
                <h4>ppo_ctc: </h4>
                </div>  
              <div class="form-group">
                 <input type="number" name="ppo_ctc"
                 class="form-control input-lg" placeholder="Enter ppo_ctc *">
              </div>
              <div class="form-group">
                <h4>Roll No: </h4>
                </div>                
              <div class="form-group">
                <input class="form-control input-lg" type="text"  name="rollno" placeholder="Enter Roll No *">
              </div>
                <div class=" checkbox">
                <input type="checkbox" style="justify-content: left;"> I accept terms & conditions
              </div>
              
              
              <div class="form-group  col-md-12">
                <button class="btn btn-flat btn-lg ">Register</button>
              </div>  
            
               
            </div>
          </div>
          </form>
          
        </div>
      </div>
    </section>
  </div>
<?php
//print_r($_POST);
if( isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['gender']) && isset($_POST['programme']) && isset($_POST['dept']) && isset($_POST['cpi']) && isset($_POST['catagory']) && isset($_POST['contactno']) && isset($_POST['address']) && isset($_POST['ppo_ctc']) && isset($_POST['rollno'])&& isset($_POST['ppo_details'])){
  echo "string";
   $name=$_POST['fname']." ".$_POST['lname'];     
try{
 $sql="INSERT INTO setplacement.student(rollNo , email ,gender ,mobileNo,name ,programme,cpi ,depertment ,category ,parmenentAdress ,ppo_details ,ppo_ctc) 
 VALUES(:rollNo,:email,:gender,:mobileNo,:name,:programme,:cpi,:depertment,:category,:parmenentAdress,:ppo_details,:ppo_ctc)";
  $stmt=$conn->prepare($sql);
  $stmt->execute(array(
      ':rollNo'=> $_POST['rollno'],
      ':email' => $_POST['email'],
      ':gender'=> $_POST['gender'],
      ':mobileNo'=>$_POST['contactno'],
      ':name'=> $name,
      ':programme'=> $_POST['programme'],
      ':cpi' => $_POST['cpi'],
      ':depertment'=>$_POST['dept'],
      ':category'=>$_POST['catagory'],
      ':parmenentAdress' => $_POST['address'],
      ':ppo_details'=>$_POST['ppo_details'],
      ':ppo_ctc'=> $_POST['ppo_ctc']
  ));
  //echo "<pre>";
  //print_r($_FILES);
  //echo "</pre>";
      $cv_no=1;
  //set pdf here
  $pdf=$_FILES['resume']['name'];
  $pdf_type=$_FILES['resume']['type'];
  $pdf_size=$_FILES['resume']['size'];
  $pdf_temp_loc=$_FILES['resume']['tmp_name'];
  $pdf_store="cv_data/".$_POST['rollno']."_".$cv_no.".pdf";
  move_uploaded_file($pdf_temp_loc, $pdf_store);
  try{
  $sql="INSERT INTO setplacement.cv(rollNo,cv_no,cv_data) VALUES(:rollNo,:cv_no,:cv_data)";
  $stmt=$conn->prepare($sql);
  echo "string";
  $stmt->execute(array(
      ':rollNo'=> $_POST['rollno'],
      ':cv_no' => $cv_no,
      ':cv_data'=> $pdf_store
  ));
  }catch(Exception $err){
    echo $err->getMessage();
  }


  echo "done";
  header('Location:../log_in.php');
  unset($_POST);
      }catch(Exception $err){
        echo $err->getMessage();
    } 
  }
  ?>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
</body>
</html>
