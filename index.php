<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="Author" content="Shibasish Shaw" >
     <meta name="description" content="Shibasish Shaw SetPlacement website for placement and zeroencode.web42.io">
     <meta http-equiv="refresh" content="500;">
     
        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link href='https://unpkg.com/boxicons@2.0.8/css/boxicons.min.css' rel='stylesheet'>
        
 <!-- Smooth Scroll -->
    <!-- <script>
        // Select all links with hashes
            $('a[href*="#"]')
            // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function(event) {
                // On-page links
                if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
                && 
                location.hostname == this.hostname
                ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                    scrollTop: target.offset().top
                    }, 1000, function() {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    };
                    });
                }
                }
            });

        </script> -->

    


        <style type="text/css">
            :root{
                --background:#45b6f7;
                --header:#4a555c;
                --footer: #131521;
                --head_font_color: white;
                --foot_font_color: whitesmoke;
                --head_font: 1.3rem;
                --body-font: 'Open Sans', sans-serif;
            }
            html{
                font-family: var(--body-font);
            }
            *{
            padding: 0;
            margin: 0;
            }

            .header{
                z-index: 10;
                width: 100%;
                position: fixed;
                padding: 15px 0px 15px 20px;
                font-size: var(--head_font);
                color: var(--head_font_color);
                background-color: var(--header);
                display: flex;
                justify-content: space-between;
            }
            .header .head_icon , .footer .head_icon{
                font-variant: small-caps;
                font-family: Times;
            }
            .header .head_icon b,.footer .head_icon b{
                color: var(--background);
            }
            .nav_head{
                color: var(--head_font_color);
                width: 70%;
                display: flex;
                justify-content: space-around;
                height: 25px;
            }
            .nav_head div a{
                text-decoration: none;
                color: var(--head_font_color);
            }
            .nav_head div:hover a::after {
                background-color: var(--background);
                content: "";
                display: block;
                width: 100%;
                text-align: center;
                height: 3px;
            }
            /*secton data*/
            .home_all{
                     background-image: linear-gradient(white,var(--background));
                /*background-color:var(--background) ;*/
                z-index: 1;
                /*height: 100vh;*/

            }

            /* cars css */
            .card {
            min-width: 306px;
            /* Add shadows to create the "card" effect */
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 30%;
            border-radius:5px;
            margin-top:10px;
            float: left;
            /*background-color:white;*/
            padding: 15px ;
            margin-left:10px;

            }
            .card h3{
                /*background-color: red; */
                text-align: center;
                text-shadow: 1px 1px white;
                font-style: cursive;

            }
            .card button{
                padding: 5px;
                position: relative;
                left: 80%;
            }
            .card p{
                padding:5px 0px;
            }

            /* On mouse-over, add a deeper shadow */
            .card:hover {
            box-shadow: 0 8px 100px rgba(0,0,0,0.2);
            }

            /* Add some padding inside the card container */
            .container {
            padding: 5px 16px;
           

            }
            .section2{
                display: flex;
                padding-bottom:30px;
                flex-wrap: wrap;
                justify-content: space-around;

            }
            .section1{
                width: 100%;
                height:300px;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                background-image: url("https://images.pexels.com/photos/1485894/pexels-photo-1485894.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
                position: relative;        
        
            }




            /*footer data start*/
            .footer{
                z-index:10;
                background-color: var(--footer);
                width: 100%;
                position: relative;
                padding-top:25px; 
                
            }
            .footer .footer__social{
                font-size: 1.5rem;
                color: var(--body-font);
            }
            .footer__container{
                color: var(--foot_font_color);
                width: 100%;
                display: flex;
                justify-content: space-around;
            }
            .footer__container li a{
                text-decoration: none;
                color: var(--foot_font_color);
            }
            .footer .head_icon {
                font-size: 21px;
            }
            .footer__copy{
                color: var(--foot_font_color);
                font-variant: small-caps;
                font-size: 15px;
                text-align: right;
                padding: 10px;
            }
            .footer__copy a{
                color: var(--background);
            }
            /*footer end data*/
            @media screen and (min-width:860px) {
                .nav__toggle{
                    display: none;
                }
            }

            @media screen and (max-width: 860px){
                .show{
                    background-color:var(--header);
                    padding: 285px 0px 20px 0px;
                    flex-direction: column;
                    height: 50vh;
                    justify-content: space-around;
                    transition: 5ms;
                    position:relative;
                }
                .nav_head{
                    position: fixed;
                    right:0%;
                    top:-40%;
                }
                .nav_head div {
                    font-variant: small-caps;
                    overflow: hidden;
                    text-align: center;
                    height: 25px;
                    width: 50%;
                }
                .nav__toggle{
                    position: absolute;
                    right: 45px;
                    color: var(--head_font);
                    font-size: 1.9rem;
                    cursor: pointer;
                }
                .nav_head div:hover  {
                background-color: var(--background);
                display: block;
                width: 100%;
                transition: 2s;
            }
            }
            @media screen and (max-width: 720px){
                    .footer__container{
                    flex-direction: column;
                    justify-content: space-around;
                    height: 456px;
                    text-align: center;
                }
                .section2{
                    flex-direction: column;
                    /*background-color: red;*/
                    width: 100%;
                    justify-content: space-around;

                }
                .card {
                    width: 80%;
                    /*background-color: green;*/
                    margin: auto;
                    margin-top:45px; 
                }

            }
            
        </style>
     <title>SetPlacement</title>
</head>
<body>
     <section class="header">
          <div class="head_icon" style="font-size: 1.8rem;"><b>S</b>et<b>P</b>lacement<b>.</b></div>
          <div class="nav_head" id="nav_head" >
               <div class="jobs"><a href="#section1">Jobs</a> </div>
               <div class="candidates"><a href="#section2">Candidates</a> </div>
               <div class="company"><a href="#section3">Company</a> </div>
               <div class="about_us"><a href="#section4">About Us</a></div>

               <?php
               if(isset($_SESSION['user_name'] )|| isset($_SESSION['email_id'])){
               echo'<div class="logt_out"><a href="log_out.php"><i class="bx bx-log-out" id="log_out" ></i> Log Out</a></div>';
                }
                else{
                 echo'<div class="login"><a href="log_in.php"><i class="bx bx-log-in"></i> Log in</a></div>';

                }

               ?>

                              
          </div>
          <div class="nav__toggle" id="nav-toggle">
            <i class='bx bx-menu'></i>
        </div>
     </section>
     <div class="home_all">
         <br>
         <br>
         <br>
          <!-- <div class="home_title"><h1>IITG Placement Protal</h1> -->
<!-- Backwall pager begains from here -->

    <div class="section1" >
                <div>
                    <br>
                    <br>
                   <!--<h1 style="position:absolute;">This is inside the backgeound</h1>-->
                </div>
    </div>
    
<!-- Cards  -->
        <div class="section2" >
        <div class="card">
            <h3>Alumni</h3>
            <div class="container">
                <p>Our Alumni have emerged successful and excelled in varied professions across the globe. This network is highly enriching for the growth of our community...</p>
                <button>Read More</button>
            </div>

        </div>
        <div class="card">
            <h3>Selection Process</h3>
            <div class="container">
                <p>All the students enrolled at Set Placement are selected after the rigorous screening process. It ensures that we nurture India’s few most brilliant minds.
                </p>
                <button>Read More</button>
            </div>

        </div>
        <div class="card">
            <h3>Ranking</h3>
            <div class="container">
                <p>Recognized as India’s No. 1 University, we strive for excellence. Our rankings are reflective of our steep progress</p>
                <button>Read More</button>
            </div>

        </div>
        <div class="card">
            <h3>Allround Devolopment</h3>
            <div class="container">
                <p> One’s skills, aptitude and perception reflect the personality of an individual. We offer numerous opportunities for multi dimensional growth of an individual</p>
                <button>Read More</button>
            </div>

        </div>
        <div class="card">
            <h3>Best Screening Process</h3>
            <div class="container">
                <p>Companies can proceed with their tests/screening process after finalizing the schedule in coordinance with Placement Office</p>
                <button>Read More</button>
            </div>

        </div>
        <div class="card">
            <h3>Interviews</h3>
            <div class="container">
                <p>Placement Office allots dates to organizations for campus interviews based on various details given by companies.</p>
                <button>Read More</button>
            </div>

        </div>
            </div>
        <!-- Cards End here -->


          </div>
     </div>






     
     <section class="footer">
            <div class="footer__container bd-grid">
                <div class="footer__content">
                <div class="head_icon"><b>S</b>et<b>P</b>lacement<b>.</b></div>
                    <span class="footer__description">placement <br>Protal</span>
                    <div>
                        <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Services</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Offers</a></li>
                        <li><a href="#" class="footer__link">Companies</a></li>
                        <li><a href="#" class="footer__link">About Us</a></li>
                        <li><a href="#" class="footer__link">Reserve your spot</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Information</h3>
                    <ul>
                        <li><a href="#" class="footer__link">Event</a></li>
                        <li><a href="#" class="footer__link">Contact us</a></li>
                        <li><a href="#" class="footer__link">Privacy policy</a></li>
                        <li><a href="#" class="footer__link">Terms of services</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Address</h3>
                    <ul>
                        <li>Rahara</li>
                        <li>kolkata-70015</li>
                        <li>4897916654</li>
                        <li>setplacement@email.com</li>
                    </ul>
                </div>
            </div>

            <p class="footer__copy">&#169; 2021 <a href="https://agayen.github.io/" >SetPlacement
            </a> . All right reserved</p>

     </section>
     <script type="text/javascript">
         
         /*===== MENU SHOW =====*/ 
        const showMenu = (toggleId, navId) =>{
             const toggle = document.getElementById(toggleId),
             nav = document.getElementById(navId)
         
             if(toggle && nav){
                 toggle.addEventListener('click', ()=>{
                     nav.classList.toggle('show')
                 })
             }
         }
         showMenu('nav-toggle','nav_head')
     </script>
     
</body>
</html>