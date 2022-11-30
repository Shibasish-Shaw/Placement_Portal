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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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
        <a href="comp_dashboard.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="comp_update.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">Update profile</span>
       </a>
       <span class="tooltip">Update profile</span>
     </li>
     <li>
       <a href="comp_massage.php">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Messages</span>
       </a>
       <span class="tooltip">Messages</span>
     </li>
     <li>
       <a href="comp_job_set.php">
         <i class='bx bxs-add-to-queue'></i>
         <span class="links_name"> Create a Job</span>
       </a>
       <span class="tooltip">Create a Job</span>
     </li>
     <li>
       <a href="comp_prev_job.php">
         <i class='bx bx-list-ul' ></i>
         <span class="links_name">Previus Job Details</span>
       </a>
       <span class="tooltip">Previus Job details</span>
     </li>
     <li>
       <a href="comp_offer.php">
         <i class='bx bx-list-check' ></i>
         <span class="links_name">Offer Send</span>
       </a>
       <span class="tooltip">Offer Send</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <i class='bx bxs-user-pin'></i>
           <div class="name_job">
             <div class="name"><?php echo $_SESSION['user_name'];?></div>
             <div class="job">Comapny</div>
           </div>
         </div><a href="../log_out.php">
         <i class='bx bx-log-out' id="log_out" ></i></a>
     </li>
    </ul>
  </div>
<div class="content-wrapper home-section" style="margin-left: 0px;">

    <section class="content-header">
      <div class="container">
        <div class="row latest-job margin-top-50 margin-bottom-20 bg-white">
          <h2 class="text-center margin-bottom-20 margin-top-20 uper">Set a Job Profile</h2>
          <form method="post" id="registerCandidates" action="" enctype="multipart/form-data">
            <div class="all_from">
            <div class="col-md-6 latest-job ">
              <div class="form-group">
                <h4>Designation : </h4>
              </div>
              <div class="form-group">
                <input class="form-control input-lg" type="text" id="dname" name="dname" placeholder="Designation *" required>
              </div> 
                <div class="form-group">
                <h4>Type of Job : </h4>
                </div>
                <div class="form-group">
                <select class="form-control input-lg" id="tpye_of_job" name="type_job"  required>
                  <option value="Full Time">Full Time </option>
                  <option value="Part Time">Part Time </option>
                </select>
                </div>
                <div class="form-group">
                <h4>Joining Date : </h4>
                </div>
                <div class="form-group">
                <input class="form-control input-lg" type="date" id="joining_date" name="joining_date" placeholder=" Enter date *" require>
                </div>            
                <div class="form-group">
                <h4>Last date to apply :  </h4>
                </div>
                <div class="form-group">
                <input class="form-control input-lg" type="date" id="tpye_of_job" name="last_date" placeholder=" Enter date *" required>
                </div>
                <div class="form-group">
                <h4>ctc : </h4>
                </div>
                <div class="form-group">
                <input class="form-control input-lg" type="number"  name="ctc" placeholder="Enter ctc in INR *" required>
                </div>
                <div class="form-group">
                <h4>Cpi cut off : </h4>
                </div>
                <div class="form-group">
                <input class="form-control input-lg" type="number" step="0.01" id="cpi" name="cpi" placeholder="Current cpi *" required>
                </div> 
                <div class="form-group">
                <h4>No of slot for selection : </h4>
                </div>
                <div class="form-group">
                <input class="form-control input-lg" type="number"  id="no_slot" name="no_slot" placeholder="Enter No of slot *" required>
                </div> 
                <div class="form-group">
                <h4>No of vacency : </h4>
                </div>
                <div class="form-group">
                <input class="form-control input-lg" type="number"  id="vacency" name="vacency" placeholder="Enter No of vacency*" required>
                </div> 

            </div>            
            <div class="col-md-6 latest-job ">
              <div class="form-group">
                <h4> Recomend Key : </h4>
                </div>
                <div class="form-group">
                <input class="form-control input-lg" type="text" id="rec_word" name="catagory" placeholder="to indentify the profile *" required>
                </div> 
              <div class="form-group">
                <h4>Details : </h4>
                </div>  
              <div class="form-group">
                <textarea class="form-control input-lg" rows="4" id="Details" name="details" placeholder="Enter Details about profile *" required></textarea>
              </div>
               
              <div class="form-group">
                <h4>Programme : </h4>
                </div>  
                <div class="form-group">
                <select class="form-control form-group multiple_select" name="Branches[]" required multiple>
                  <option value="All Programme">ALL Programme</option>
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
                <select class="form-control form-group input-lg multiple_select" name="dept[]" required multiple>
                  <option value="All dept">ALL DEPT</option>
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
             
              <div class="form-group  col-md-12">
                <button class="btn btn-flat btn-lg " style="position: relative; padding:3px 5px;margin-top: 25px;">Submit</button>
              </div>               
            </div>
          </div>
          </form>
<?php
if(isset($_POST['dname']) && isset($_POST['type_job']) && isset($_POST['joining_date']) && isset($_POST['last_date']) && isset($_POST['ctc']) && isset($_POST['cpi'])&& isset($_POST['vacency']) && isset($_POST['catagory']) && isset($_POST['details']) && isset($_POST['Branches']) && isset($_POST['dept'])){
  try{
  $sql="INSERT INTO setplacement.recomendation( cmp_id, recom_word,rec_key) VALUES(:cmp_id,:recom_word,:rec_key)";
  $stmt=$conn->prepare($sql);
  $stmt->execute(array(
      ':cmp_id'=> $_SESSION['user_id'],
      ':recom_word' => $_POST['dname'],
      ':rec_key'=> $_POST['catagory']
  ));
  }catch(Exception $err){
        echo $err->getMessage();
  }
  $rec_id=-1;
  $key=$_POST['catagory'];
  $word=$_POST['dname'];
  $cmp_id=$_SESSION['user_id'];
  try{
    $stmt=$conn->query("SELECT * FROM setplacement.recomendation r WHERE r.recom_word=\"$word \" AND r.rec_key= \"$key\" AND r.cmp_id=$cmp_id ");
    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
      $rec_id=$row['rec_id'];
    }

  }catch(Exception $err){
        echo $err->getMessage();
  }
  print_r($_POST);
//data insert for student from

 try{
  $curr_date=date("Y-m-d");
  $sql="INSERT INTO setplacement.job( ctc,lastDate,joiningDate,details,rec_id,typeJob,vacency,cpiCutOff,cmp_id,adertiseDate) VALUES(:ctc,:lastDate,:joiningDate,:details,:rec_id,:typeJob,:vacency,:cpiCutOff,:cmp_id,:adertiseDate)";
  $stmt=$conn->prepare($sql);
  $stmt->execute(array(
    ':ctc'=> $_POST['ctc'],
    ':lastDate'=>$_POST['last_date'],
    ':joiningDate' =>$_POST['joining_date'],
    ':details'=>$_POST['details'],
    ':rec_id'=>$rec_id,
    ':typeJob'=>$_POST['type_job'],
    ':cpiCutOff'=>$_POST['cpi'],
    ':cmp_id' =>$cmp_id,
    ':vacency'=>$_POST['vacency'],
    ':adertiseDate' =>$curr_date
  ));
 }catch(Exception $err){
        echo $err->getMessage();
  }
   try{
    $stmt=$conn->query("SELECT * FROM setplacement.job r WHERE  r.rec_id= $rec_id AND r.cmp_id=$cmp_id ");
    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
      $job_id=$row['job_id'];
      echo $job_id;
    }
    echo $job_id;
  }catch(Exception $err){
        echo $err->getMessage();
  }
//print_r($_POST['dept']);
//echo $_POST['dept'][0];
  //data in programme job
foreach ( $_POST['dept'] as $dept) {
  try { 
  $sql="INSERT INTO setplacement.programme_job( job_id, programme_name) VALUES(:job_id,:programme_name)";
  $stmt=$conn->prepare($sql);
  $stmt->execute(array(
      ':job_id'=> $job_id,
      ':programme_name' => $dept
  ));
  }catch(Exception $err){
        echo $err->getMessage();
  }
  //echo $dept;
}

  //data in depertment job
foreach ( $_POST['Branches'] as $ban) {
  try { 
  $sql="INSERT INTO setplacement.branch_job( job_id, branch_name) VALUES(:job_id,:branch_name)";
  $stmt=$conn->prepare($sql);
  $stmt->execute(array(
      ':job_id'=> $job_id,
      ':branch_name' => $ban
  ));
  echo "done";
  }catch(Exception $err){
        echo $err->getMessage();
  }
  //echo $ban;
}
$_SESSION['slot']=$_POST['no_slot'];
$_SESSION['job_id']=$job_id;
unset($_POST);
echo '<script>location.replace("slot_job_set.php")</script>';
}
?>
          
        </div>
      </div>
    </section>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript">
  $(".multiple_select").select2({
 /* maximumSelectionLength: 2 */
});
</script>

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