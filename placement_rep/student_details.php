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
	          .latest-job h4{
	          	font-size: 1rem;
	          }
	          .uper{
	          	font-size: 1.5rem;
	          }
	          .all_from{
	            display: flex;
	            flex-direction: column;
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
      /* Google Font Link */
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
            color: var(--background);
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
            margin: auto;
          }
          .profile_icon{
            width: 200px;
            height: 200px;
            background-color: var(--background);
            font-size: 149px;
            padding: 5px;
            text-align: center;
            border-radius: 50%;
            font-weight: bolder;
            font-family: times;
              box-shadow: 2px 35px 45px red;
          }
          .full_profile{
            display: flex;
            background-image: linear-gradient(125deg,var(--background),white,whitesmoke) ;
            justify-content: space-around;
            margin: 10px;
            padding: 10px;
            border-radius: 20px;

          }
          .full_profile .from_get{
            padding: 5px 15px;
            font-size: 0.9rem;
          
          }
          .left_part{
            width: 30%;

          }
          .right_part{
            width: 30%;

          }
          @media (max-width: 920px) {
            .sidebar li .tooltip{
              display: none;
            }
            .profile_icon{
              order:  1;
              margin: auto;
              box-shadow: 2px 35px 45px red;
            }
            .full_profile{
              font-size: 0.9rem;
              width: 95%;
              flex-direction: column;
            }
            .left_part{
              margin-top:25px; 
              order: 2;
              width: 100%;
            }
            .right_part{
              margin-top: 25px;
              order: 3;
              width: 100%;
            }
          }
           @media (max-width: 400px) {
          .home-section .text{
            display: inline-block;
            color: #11101d;
            font-size: 1rem;
            font-weight: 500;
            margin: 8px
          }
          }
    </style>
  <title>Setplacement pr_update_from</title>
  <!-- Tell the browser to be responsive to screen width -->
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
        <a href="pr_dashboard.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="pr_update.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">profile update</span>
       </a>
       <span class="tooltip">profile upadte</span>
     </li>
     <li>
       <a href="send_masssge.php">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Messages</span>
       </a>
       <span class="tooltip">Messages</span>
     </li>
     <li>
       <a href="student_details.php">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Student details</span>
       </a>
       <span class="tooltip">Student details</span>
     </li>
     <li>
       <a href="comp_deatils.php">
         <i class='bx bx-folder' ></i>
         <span class="links_name">Company details</span>
       </a>
       <span class="tooltip">Comapany Details</span>
     </li>
     <li>
       <a href="pr_details.php">
         <i class='bx bx-list-ul'></i>
         <span class="links_name">List of placement rep</span>
       </a>
       <span class="tooltip">List of placement rep</span>
     </li>
     <li>
       <a href="pr_job_details.php">
         <i class='bx bxs-shopping-bags'></i>
         <span class="links_name">Job details</span>
       </a>
       <span class="tooltip">Job details</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <i class='bx bxs-user-pin'></i>
           <div class="name_job">
             <div class="name"><?php echo $_SESSION['user_name'];?></div>
             <div class="job">placemnet rep</div>
           </div>
         </div><a href="../log_out.php">
         <i class='bx bx-log-out' id="log_out" ></i></a>
     </li>
    </ul>
  </div>
  <!-- Content Wrapper. Contains page content -->
<section class="home-section">
  <div class="text"> Student Details <hr></div>

 <?php
 try{
        $stm5 = $conn->query("SELECT * FROM setplacement.student ");
            if($stm5->rowcount() > 0){
               
                while($row = $stm5->fetch()){
                  echo " <div class='full_profile'>";
                  $name=$row['name'];
                  echo "<div class='left_part'>";
                  echo "<div class='from_get'>Name : ".$row['name']."</div>";
                  echo "<div class='from_get'>Roll No : ".$row['rollNo']."</div>";
                  echo "<div class='from_get'>Email ID : ".$row['email']."</div>";
                  echo "<div class='from_get'>Gender : ".$row['gender']."</div>";
                  echo "<div class='from_get'>Mobile No : ".$row['mobileNo']."</div>";
                  if($row['ppo_details']==0){
                  echo "<div class='from_get'>PPO : No ppo</div>";
                  }
                  else{
                    echo "<div class='from_get'>PPO : No ppo</div>";
                    echo "<div class='from_get'>PPO ctc : ".$row['ppo_ctc']."</div>";
                  }
                  echo"</div>";
                  echo "<div class='right_part'> ";
                  echo "<div class='from_get'>Programme : ".$row['programme']."</div>";
                  echo "<div class='from_get'>Department : ".$row['depertment']."</div>";
                  echo "<div class='from_get'>Category : ".$row['category']."</div>";
                  echo "<div class='from_get address'>Parmenent Address : <br>".$row['parmenentAdress']."</div>";
                  echo "</div>";
                  echo "<div>";
                  echo "<div class='profile_icon'>$name[0]</div>";

                  try {
                    $rollNo=$row['rollNo'];
                    $pr_id=$_SESSION['user_id'];
                    $stmt=$conn->query("SELECT * FROM setplacement.maintains_student s WHERE s.rollNo=$rollNo AND s.pr_id=$pr_id ");
                    if($stmt ->rowcount() > 0){
                      while ($set=$stmt->fetch()) {
                       $approve_t=$set['approved'];
                      }
                    }
                    
                  } catch (Exception $e) {
                    echo $e->getMessage();
                  }
                  ?><br>
                  <form method="post" action="approve.php" <?php if($approve_t==='Y') echo "hidden";?> >
                    <input type="text" name="massage" placeholder="set a massage for it *" style="width: 195px;" required>
                    <br>
                    <select class="select_approve" name="approve_type">
                      <option value="Y">Yes</option>
                      <option value="N">No</option>
                      <option value="P">Pass</option>
                    </select>
                    <input type="number" name="rollNo" value="<?php echo $row['rollNo'] ;?>" hidden>
                    <input type="number" name="pr_id" value="<?php echo $_SESSION['user_id'] ;?>" hidden>
                    <input type="text" name="approve_t" value="<?php echo $approve_t; unset($approve_t); ?>" hidden>
                   <button class="btn" name="student_approve" value="1"> Approve </button> 
                  </form>
                  
                </div>
                  <?php
                   echo "</div>";
                }
               
            }else{
                echo "No Entries there";
            }
            echo "string";
        }catch(Exception $err){
            echo $err->getMessage();
        }

 ?>
</section>
</body>
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
</html>
