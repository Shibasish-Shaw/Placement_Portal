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
	          	font-size: 0.9rem;
	          }
	          .uper{
	          	font-size: 1.2rem;
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
          	width:calc(100% - 78px) ;
            display: inline-block;
            color: #11101d;
            font-size: 25px;
            font-weight: 500;
            margin: auto;
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
              font-size: 16px;
              width: 100%;
              flex-direction: column;
            }
             
            .home-section .text{
            	width: 100%;
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
  <div class="content-wrapper home-section " style="margin-left: 0px;">
    <section class="content-header ">
      <div class="container text">
        <div class="row latest-job margin-top-50 margin-bottom-20 bg-white">
          <h2 class="text-center margin-bottom-20 margin-top-20 uper">Update Your Profile</h2>
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
                <h4>Enter depertment: </h4>
                </div>
                <div class="form-group">
                <input class="form-control input-lg" type="text" name="dept" placeholder="depertment*" required>
                </div>  
              	<div class="form-group">
                <h4>E-Mail Address: </h4>
                </div>
              	<div class="form-group">
                <input class="form-control input-lg" type="text" id="email" name="email" placeholder="<?php echo $_SESSION['email_id'];?>" value="<?php echo $_SESSION['email_id'];?>">
              	</div>            
            </div>            
            <div class="col-md-6 latest-job "> 
                <div class="form-group">
                <h4>Contact No: </h4>
                </div>  
              <div class="form-group">
                <input class="form-control input-lg" type="text" id="contactno" name="contactno" minlength="10" maxlength="10" placeholder="Phone Number *">
              </div>
              <div class="form-group  col-md-12">
                <button class="btn btn-flat btn-lg ">Submit</button>
              </div>     
            </div>
          </div>
          </form>
          
        </div>
      </div>
    </section>
<?php
if( isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['contactno']) && isset($_POST['dept']) ){
  $name=$_POST['fname']." ".$_POST['lname'];
  $contactno=$_POST['contactno'];
  $dept=$_POST['dept'];
  $user_id=$_SESSION['user_id'];
try{
  $sql="UPDATE setplacement.placement_rep "." SET name= \"$name\", depertment=\"$dept \",mobileNo=\"$contactno\" "." WHERE pr_id =$user_id";
  echo $sql;
  $stmt =$conn->prepare($sql);
  $stmt->execute();
  echo $stmt->rowCount();
  echo "done";
  header('Location:pr_dashboard.php');
  unset($_POST);
      }catch(Exception $err){
        echo $err->getMessage();
    } 
}
unset($_POST);
?>

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
