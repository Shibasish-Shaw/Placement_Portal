<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- ===== BOX ICONS ===== -->
  <link rel="stylesheet" href="css/log_in.css">
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
  <style type="text/css">
    
    /*log_in.css all here start*/
    /*===== GOOGLE FONTS =====*/
    @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap");

    /*===== VARIABLES CSS =====*/
    :root {
      /*===== Colores =====*/
      --first-color: #45b6f7;
      --first-color-dark: rgb(23, 87, 47);
      --first-color-light: #A49EAC;
      --first-color-lighten: #F2F2F2;
      --background:#45b6f7;
      --header:#4a555c;
      --header-text: white;

      /*===== Font and typography =====*/
      --body-font: 'Open Sans', sans-serif;
      --h1-font-size: 1.5rem;
      --normal-font-size: .938rem;
      --small-font-size: .813rem;
    }

    @media screen and (min-width: 768px) {
      :root {
        --normal-font-size: 1rem;
        --small-font-size: .875rem;
      }
    }

    /*===== BASE =====*/
    *,
    ::before,
    ::after {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: var(--body-font);
      font-size: var(--normal-font-size);
      color: var( --first-color-dark);
     /* background-color: var(--background);*/
      background-image: linear-gradient(var(--background),white);
      background-repeat: no-repeat;
    }

    h1 {
      margin: 0;
    }

    a {
      text-decoration: none;
    }

    img {
      padding-top: 25px;
      max-width: 100%;
      height: auto;
      display: block;
    }

    /*======header===*/
    #header__data {
      display: flex;
      justify-content: space-between;
      z-index:100;
      position: fixed;
      box-shadow: 0px 1px 5px var(--first-color-dark);
      width: 100%;
      background-color: var(--header);
    }
    #header__data .home{
      font-size: 2rem;
      padding: 1% 3% 1% 40%;
      width: 50%;
    }
    #header__data .home a{
      color: var(--first-color-lighten);
    }
    #header__data .head_icon {
      font-size: 1.6rem;
      padding-left: 6%;
      padding-top: 15px;
      padding-bottom: 15px;
      /* padding :10px; */
      color:var(--header-text);
      font-weight: 500;
      font-family: 'Times New Roman', Times, serif;
      font-variant-caps: small-caps;
    }
    #header__data .head_icon b{
      color: var(--background);
    }

    #header__data .name__data .copy__icon {
      font-size: 10px;
      /* color:red; */
    }

    /*===== LOGIN =====*/
    .login {
      display: grid;
      grid-template-columns: 100%;
      height: 100vh;
      margin-left: 1.5rem;
      margin-right: 1.5rem;
    }

    .login__content {
      display: grid;
    }

    .login__img {
      justify-self: center;
    }

    .login__img img {
      width: 310px;
      margin-top: 1.5rem;
    }

    .login__forms {
      position: relative;
      height: 368px;
    }

    .login__registre,
    .login__create {
      position: absolute;
      bottom: 1rem;
      width: 100%;
      background-color: var(--first-color-lighten);
      padding: 2rem 1rem;
      border-radius: 1rem;
      text-align: center;
      box-shadow: 0 8px 20px rgba(35, 0, 77, .2);
      animation-duration: .4s;
      animation-name: animate-login;
    }

    @keyframes animate-login {
      0% {
        transform: scale(1, 1);
      }

      50% {
        transform: scale(1.1, 1.1);
      }

      100% {
        transform: scale(1, 1);
      }
    }

    .login__title {
      font-size: var(--h1-font-size);
      margin-bottom: 2rem;
    }

    .login__box {
      display: grid;
      grid-template-columns: max-content 1fr;
      column-gap: .2rem;
      padding: 0.4rem 1rem;
      background-color: #FFF;
      margin-top: 1rem;
      border-radius: .5rem;
    }

    .login__icon {
      font-size: 1.5rem;
      color: var(--first-color);
    }

    .login__input {
      border: none;
      outline: none;
      font-size: var(--normal-font-size);
      font-weight: 700;
      color: var(--first-color-dark);
    }

    .login__input::placeholder {
      font-size: var(--normal-font-size);
      font-family: var(--body-font);
      color: var(--first-color-light);
    }

    .login__forgot {
      display: block;
      width: max-content;
      margin-left: auto;
      margin-top: .5rem;
      font-size: var(--small-font-size);
      font-weight: 600;
      color: var(--first-color-light);
    }

    .login__button {
      width: 100%;
      display: block;
      padding: 1rem;
      margin: 2rem 0;
      background-color: var(--first-color);
      color: #FFF;
      font-weight: 600;
      text-align: center;
      border-radius: .5rem;
      transition: .3s;
    }

    .login__button:hover {
      background-color: var(--first-color-dark);
    }

    .login__account,
    .login__signin,
    .login__signup {
      font-weight: 600;
      font-size: var(--small-font-size);
    }

    .sign__in__bottom {
      padding: 0px 0px 25px 0px;
    }

    .login__account {
      color: var(--first-color-dark);
    }

    .login__signin,
    .login__signup {
      color: var(--first-color);
      cursor: pointer;
    }

    .login__social {
      margin-top: 2rem;
    }

    .login__social-icon {
      font-size: 1.5rem;
      color: var(--first-color-dark);
      margin: 0 1.5rem;
    }

    /*Show login*/
    .block {
      display: block;
    }

    /*Hidden login*/
    .none {
      display: none;
    }

    /* ===== MEDIA QUERIES =====*/
    @media screen and (min-width: 576px) {
      .login__forms {
        width: 348px;
        justify-self: center;
      }
    }
    @media screen and (max-width: 370px){
      .login__forms{
        width: 370px;
        justify-self:center;
      }
      body{
        /* background-color: red; */
        width: 470px;
      }

    }

    @media screen and (min-width: 1024px) {
      .login {
        height: 100vh;
        overflow: hidden;
      }

      .login__content {
        grid-template-columns: repeat(2, max-content);
        justify-content: center;
        align-items: center;
        margin-left: 10rem;
      }

      .login__img {
        display: flex;
        width: 470px;
        height: 408px;
        background-color: var(--first-color-lighten);
        border-radius: 1rem;
        padding-left: 1rem;
      }

      .login__img img {
        width: 390px;
        margin-top: 0;
      }

      .login__registre,
      .login__create {
        left: -11rem;
      }

      .login__registre {
        bottom: -2rem;
      }

      .login__create {
        bottom: -5.5rem;
      }
    }
    /*log_in.css end here*/
  </style>

  <title>SetPlacement</title>
</head>

<body>
  <div id="header__data">
    <div class="head_icon"><b>S</b>et<b>P</b>lacement<b>.</b></div>
    <div class="home"><a href="index.php"><i class='bx bx-home'></i></a></div>
  </div>

  <div class="login" >
    <div class="login__content">
      <div class="login__img">
        <img src="css/img/img-login.svg" alt="">
      </div>

      <div class="login__forms">
        <form action="dashboard.php" method="POST" class=" login__registre" id="login-in">
          <h1 class="login__title">Sign In</h1>
          <div class="login__box">
            <i class='bx bx-user login__icon'></i>
            <input type="text" placeholder="Username" class="login__input" name="uname" required>
          </div>

          <div class="login__box">
            <i class='bx bx-lock-alt login__icon'></i>
            <input type="password" placeholder="Password" class="login__input" name="upassword" required>
          </div>

          <a href="#" class="login__forgot">Forgot password?</a>

          <input href="#" class="login__button" type="Submit" value="Sign In">

          <div class="sign__in__bottom">
            <span class="login__account">Don't have an Account ?</span>
            <span class="login__signin" id="sign-up">Sign Up</span>
          </div>
        </form>
        <form action="complete.php" class="login__create none" method="POST" id="login-up">
          <h1 class="login__title">Create Account</h1>

          <div class="login__box">
            <i class='bx bx-select-multiple login__icon'></i>
            <select class="login__input" required name="level">
              <option value="1">As a Student</option>
              <option value="2">As a company</option>
              <option value="3">As a Placement Representative</option>
            </select>
          </div>
          <div class="login__box">
            <i class='bx bx-user login__icon'></i>
            <input type="email" placeholder="Email" class="login__input" name="remail" required>
          </div>

          <div class="login__box">
            <i class='bx bx-lock-alt login__icon'></i>
            <input type="password" placeholder="Password" class="login__input"name="rupassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*?[!@\#$%^&*+`~|<>/]).{8,}" title="Must contain at least one number and one specail symbol and one uppercase and lowercase letter, and at least 8 or more characters" required>
          </div>

          <input class="login__button" value="Sign Up" type="submit">

          <div>
            <span class="login__account">Already have an Account ?</span>
            <span class="login__signup" id="sign-in">Sign In</span>
          </div>

          <div class="login__social">
            <a href="#" class="login__social-icon"><i class='bx bxl-facebook'></i></a>
            <a href="#" class="login__social-icon"><i class='bx bxl-twitter'></i></a>
            <a href="#" class="login__social-icon"><i class='bx bxl-google'></i></a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--===== MAIN JS =====-->
  <script>
    /*===== LOGIN SHOW and HIDDEN =====*/
    const signUp = document.getElementById('sign-up'),
      signIn = document.getElementById('sign-in'),
      loginIn = document.getElementById('login-in'),
      loginUp = document.getElementById('login-up')


    signUp.addEventListener('click', () => {
      // Remove classes first if they exist
      loginIn.classList.remove('block')
      loginUp.classList.remove('none')

      // Add classes
      loginIn.classList.toggle('none')
      loginUp.classList.toggle('block')
    })

    signIn.addEventListener('click', () => {
      // Remove classes first if they exist
      loginIn.classList.remove('none')
      loginUp.classList.remove('block')

      // Add classes
      loginIn.classList.toggle('block')
      loginUp.classList.toggle('none')
    })
  </script>
</body>

</html>