<?php
session_start();
require_once'../connect.php';
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
          .logo_name b{
            color: var(--background);
          }
          .sidebar{
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            width: 78px;
            background: var(--header);
            padding: 6px 14px;
            z-index: 99;
            transition: all 0.5s ease;
          }
          .sidebar.open{
            width: 250px;
          }
          .sidebar .logo-details{
            height: 60px;
            display: flex;
            align-items: center;
            position: relative;
          }
          .sidebar .logo-details .icon{
            opacity: 0;
            transition: all 0.5s ease;
          }
          .sidebar .logo-details .logo_name{
            color: var(--head_font_color);
            font-size: 20px;
            font-weight: 600;
            opacity: 0;
            transition: all 0.5s ease;
          }
          .sidebar.open .logo-details .icon,
          .sidebar.open .logo-details .logo_name{
            opacity: 1;
          }
          .sidebar .logo-details #btn{
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            font-size: 29px;
            transition: all 0.4s ease;
            font-size: 23px;
            text-align: center;
            cursor: pointer;
            transition: all 0.5s ease;
          }
          .sidebar.open .logo-details #btn{
            text-align: right;
          }
          .sidebar i{
            color: var(--head_font_color);
            height: 60px;
            min-width: 50px;
            font-size: 28px;
            text-align: center;
            line-height: 60px;
          }
          .sidebar .nav-list{
            margin-top: 20px;
            height: 100%;
          }
          .sidebar li{
            position: relative;
            margin: 8px 0;
            list-style: none;
          }
          .sidebar li .tooltip{
            position: absolute;
            top: -20px;
            left: calc(100% + 15px);
            z-index: 3;
            background: var(--head_font_color);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 15px;
            font-weight: 400;
            opacity: 0;
            white-space: nowrap;
            pointer-events: none;
            transition: 0s;
          }
          .sidebar li:hover .tooltip{
            opacity: 1;
            pointer-events: auto;
            transition: all 0.4s ease;
            top: 50%;
            transform: translateY(-50%);
          }
          .sidebar.open li .tooltip{
            display: none;
          }
          .sidebar input{
            font-size: 15px;
            color: var(--head_font_color);
            font-weight: 400;
            outline: none;
            height: 50px;
            width: 100%;
            width: 50px;
            border: none;
            border-radius: 12px;
            transition: all 0.5s ease;
            background: #1d1b31;
          }
          .sidebar.open input{
            padding: 0 20px 0 50px;
            width: 100%;
          }
          .sidebar .bx-search{
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            font-size: 22px;
            background: var(--background);
            color: var(--head_font_color);
          }
          .sidebar.open .bx-search:hover{
            background: #1d1b31;
            color: var(--head_font_color);
          }
          .sidebar .bx-search:hover{
            background: var(--head_font_color);
            color: var(--background);
          }
          .sidebar li a{
            display: flex;
            height: 100%;
            width: 100%;
            border-radius: 12px;
            align-items: center;
            text-decoration: none;
            transition: all 0.4s ease;
            background: var(--background);
          }
          .sidebar li a:hover{
            background: var(--head_font_color);
          }
          .sidebar li a .links_name{
            color: var(--head_font_color);
            font-size: 15px;
            font-weight: 400;
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: 0.4s;
          }
          .sidebar.open li a .links_name{
            opacity: 1;
            pointer-events: auto;
          }
          .sidebar li a:hover .links_name,
          .sidebar li a:hover i{
            transition: all 0.5s ease;
            color: white;
          }
          .sidebar li i{
            height: 50px;
            line-height: 50px;
            font-size: 18px;
            border-radius: 12px;
          }
          .sidebar li.profile{
            position: fixed;
            height: 60px;
            width: 78px;
            left: 0;
            bottom: -8px;
            padding: 10px 14px;
            background: var(--background);
            transition: all 0.5s ease;
            overflow: hidden;
          }
          .sidebar.open li.profile{
            width: 250px;
          }
          .sidebar li .profile-details{
            display: flex;
            align-items: center;
            flex-wrap: nowrap;
          }
          .sidebar li img{
            height: 45px;
            width: 45px;
            object-fit: cover;
            border-radius: 6px;
            margin-right: 10px;
          }
          .sidebar li.profile .name,
          .sidebar li.profile .job{
            font-size: 15px;
            font-weight: 400;
            color: var(--head_font_color);
            white-space: nowrap;
          }
          .sidebar li.profile .job{
            font-size: 12px;
          }
          .sidebar .profile #log_out{
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            background: var(--background);
            width: 100%;
            height: 60px;
            line-height: 60px;
            border-radius: 0px;
            transition: all 0.5s ease;
          }
          .sidebar.open .profile #log_out{
            width: 50px;
            background: none;
          }
          .home-section{
            position: relative;
            background-image: linear-gradient(25deg, white,whitesmoke,var(--background));
            min-height: 100vh;
            top: 0;
            left: 78px;
            width: calc(100% - 78px);
            transition: all 0.5s ease;
            z-index: 2;
          }
          .sidebar.open ~ .home-section{
            left: 78px;
            width: calc(100% - 78px);
          }
          .home-section .text{
            display: inline-block;
            color: #11101d;
            font-size: 25px;
            font-weight: 500;
            margin: 18px
          }
          @media (max-width: 620px) {
            .sidebar li .tooltip{
              display: none;
            }
          }
           @media (max-width: 400px) {
          .home-section .text{
            display: inline-block;
            color: #11101d;
            font-size: 12px;
            font-weight: 500;
            margin: 8px
          }
          }

    </style>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   </head>
<body>
    <div class="sidebar">
    <div class="logo-details">
        <div class="logo_name"><b>S</b>et<b>P</b>lacement<b>.</b></div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="std_dashboard.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="std_update.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">Update profile</span>
       </a>
       <span class="tooltip">update Profile</span>
     </li>
     <li>
       <a href="std_massage.php">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Messages</span>
       </a>
       <span class="tooltip">Messages</span>
     </li>
     <li>
       <a href="std_prv_job.php">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Applied Job</span>
       </a>
       <span class="tooltip">Applied Job</span>
     </li>
     <li>
       <a href="std_job_apply.php">
         <i class='bx bxs-shopping-bags'></i>
         <span class="links_name">Jobs for Apply </span>
       </a>
       <span class="tooltip">Jobs For Apply</span>
     </li>
     <li>
       <a href="std_offer.php">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Offers</span>
       </a>
       <span class="tooltip">Offer from company</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <i class='bx bxs-user-pin'></i>
           <div class="name_job">
             <div class="name"><?php echo $_SESSION['user_name'];?></div>
             <div class="job">Student</div>
           </div>
         </div>
         <a href="../log_out.php">
         <i class='bx bx-log-out' id="log_out" ></i></a>
     </li>
    </ul>
  </div>

<?php

try {
  $rollNo=$_SESSION['user_id'];
  $stmt=$conn->query("SELECT * FROM setplacement.maintains_student s WHERE s.rollNo=$rollNo ");
  if($stmt ->rowcount() > 0){
  while ($set=$stmt->fetch()) {
      //  print_r($set);
  $approve_t=$set['approved'];
     }
    }
  } catch (Exception $e) {
      echo $e->getMessage();
}
?>

<div class="content-wrapper home-section" style="margin-left: 0px;">

    <section class="content-header">
      <div class="container">
        <?php
          if(isset($approve_t) && $approve_t==='Y'){
             echo "You are not able to update your profile because your account is Verified .";
            }
          ?>
        <div class="row latest-job margin-top-50 margin-bottom-20 bg-white"  <?php   if(isset($approve_t) && $approve_t==='Y'){
             echo "hidden";
            } ?> >
          
          <h2 class="text-center margin-bottom-20 margin-top-20 uper">update Your Profile</h2>
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
                <input class="form-control input-lg" type="text"  name="rollno" placeholder="Enter Roll No * " value=<?php echo $_SESSION['user_id']; ?>>
              </div>
              <div class="form-group  col-md-12">
                <button class="btn btn-flat btn-lg ">Submit</button>
              </div>               
            </div>
          </div>
          </form>
<?php

//print_r($_POST);
if( isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['gender']) && isset($_POST['programme']) && isset($_POST['dept']) && isset($_POST['cpi']) && isset($_POST['catagory']) && isset($_POST['contactno']) && isset($_POST['address']) && isset($_POST['ppo_ctc']) && isset($_POST['rollno'])&& isset($_POST['ppo_details'])){
  echo 'ok now';
  $name=$_POST['fname']." ".$_POST['lname'];
  $email=$_POST['email'];
  $gender=$_POST['gender'];
  $programme=$_POST['programme'];
  $contactno=$_POST['contactno'];
  $catagory=$_POST['catagory'];
  $dept=$_POST['dept'];
  $address=$_POST['address'];
  $cpi=$_POST['cpi'];
  $ppo_details=$_POST['ppo_details'];
  $ppo_ctc=$_POST['ppo_ctc'];
  $user_id=$_SESSION['user_id'];

try{
  $sql="UPDATE setplacement.student "." SET name= \"$name\", email=\"$email\", gender=\"$gender\", programme=\"$programme\",mobileNo=\"$contactno\", category=\"$catagory\", depertment=\"$dept \",parmenentAdress=\"$address\",ppo_details=\"$ppo_details\", cpi=$cpi ,ppo_ctc=\" $ppo_ctc\" "." WHERE rollno =$user_id";
  //echo $sql;
  $stmt =$conn->prepare($sql);
  $stmt->execute();
  echo $stmt->rowCount();
  echo "done";
  header('Location:std_dashboard.php');
  unset($_POST);
      }catch(Exception $err){
        echo $err->getMessage();
    } 
}
unset($_POST);
?>
          
        </div>
      </div>
    </section>
  </div>

  <script type="text/javascript">
    /*for side bar in dashboard*/
      let sidebar = document.querySelector(".sidebar");
      let closeBtn = document.querySelector("#btn");
      let searchBtn = document.querySelector(".bx-search");

      closeBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("open");
        menuBtnChange();//calling the function(optional)
      });

      searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
      });

      // following are the code to change sidebar button(optional)
      function menuBtnChange() {
       if(sidebar.classList.contains("open")){
         closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
       }else {
         closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
       }
      }
  </script>

</body>
</html>
