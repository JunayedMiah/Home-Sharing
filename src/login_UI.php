<?php require_once("include/function.php"); ?>
<?php require_once("include/session.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/uikit.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style2.css">
  <link rel="shortcut icon" type="image/x-icon" href="img/Wedding Couple.png">
  <title>Wedding Service</title>
</head>
<body>
  <!--NavBar-->
 <nav class="navbar navbar-dark navbar-expand-md "  uk-sticky="top: 200; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
   <!--navbar-expand-md for horizontal nav on medium to upper --> <!--navbar-dark for text white -->
   <div class="container ">
     <a href="index.html" class="navbar-brand text-primary pr-6 mr-3 "><h1 class="text-primary">Home Sharing</h1></a>
     <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarnav">
       <!--navbar-toggler to bring toggler on small device -->
       <!--data-target="#nav1" to call an id nav1 form div below.... small device -->
       <span class="navbar-toggler-icon"></span>
       <!--navbar-toggler-icon to bring toggler icon on small device -->

     </button>
     <div id="navbarnav" class="collapse navbar-collapse ">
       <!--collapse to remove home,... from nav.. small device fact -->
       <ul class="navbar-nav  ml-auto"><!--navbar-nav to remove bulletpoint from nav -->
         <li class="nav-item ">    <!--active to make the home icon actv in nav-->
           <a class="nav-link" href="index.html">Home</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="services.html">Services</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="About.html">About Us</a>
         </li>
        <li class="nav-item">
           <a class="nav-link" href="Contact.html">Contact</a>
         </li>
         <li class="nav-item active">
             <a class="nav-link" href="login_UI.php">Account</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="admin_login.php">Admin</a>
             </li>
       </ul>
     </div>
   </div>
</nav>


<!--Login-->
<section class="py-5 ">
  <div class="container">
    <div class="row">
      <div class="offset-md-3 col-md-6" style="min-height:400px; ">
        <div class="card bg-secondary text-light">
          <div class="card-header">
            <h4 class="text-light">Welcome Back </h4>
              </div>
            <div class="card-body bg-dark">

              <?php
                    echo ErrorMessage();
                    echo SuccessMessage();
               ?>


            <form class="" action="login_act.php" method="post">
              <div class="form-group">
                <label for="Username">Username</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text text-white bg-info "><i class="fas fa-user"></i></span>
                  </div>
                  <input type="text" class="form-control" name="email"  placeholder="Enter Your Email" id="username" value>
                </div>
              </div>
              <div class="form-group">
                <label for="Password">Password</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text text-white bg-info "><i class="fas fa-lock"></i></span>
                  </div>
                  <input type="password" class="form-control" name="Password" placeholder="Enter Your password"  id="password" value>
                </div>
              </div>
              <input type="submit" class="btn btn-info btn-block" name="Submit"  value="Login ">
              <hr>
              <p class="mx-2 px-2">Don't have an account?? </p>
              <p class="mx-2 mt-0 px-2">Click to <a href="Register.php">Register</a></p>
           </form>
        </div>

      </div>
    </div>

  </div>
</section>


<!--Login-->

<!--Copyright-->
<section id="copyright" class="text-center py-3 text-light">
  <div class="container">
    <div class="row">
      <div class="col">
        <p class="lead mb-0">Copyright 2019 &copy; Kh Shohag</p>
      </div>
    </div>
  </div>
</section>





  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/uikit.min.js"></script>
  <script src="js/uikit-icons.min.js"></script>
</body>
</html>
