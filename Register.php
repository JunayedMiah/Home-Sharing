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
  <link rel="stylesheet" href="css/style.css">
  <script src="script.js">

    </script>
  <link rel="shortcut icon" type="image/x-icon" href="img/Wedding Couple.png">
  <title>Home Sharing</title>
</head>
<body>

  <!--NavBar-->
  <nav class="navbar navbar-dark navbar-expand-md " uk-sticky="top: 200; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
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
         <li class="nav-item active">    <!--active to make the home icon actv in nav-->
           <a class="nav-link" href="index.html">Home</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">Services</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="About.html">About Us</a>
         </li>
        <li class="nav-item">
           <a class="nav-link" href="Contact.html">Contact</a>
         </li>
         <li class="nav-item active">
             <a class="nav-link" href="Register.php">Account</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="admin_login.php">Admin</a>
             </li>
       </ul>
     </div>
   </div>
  </nav>


<!--Registration Form-->

<section class="py-5" id="registration" >
  <div class="container">
    <h5 class="py-5 display-4 text-center text-primary font-weight-bold">Register Here</h5>
    <div class="row">
      <div class="col-lg-6">
        <?php
              echo ErrorMessage();
              echo SuccessMessage();
         ?>
        <form class="form-group" name="myforms" onsubmit="return form_validation()" action="reg_backend.php" method="post" enctype="multipart/form-data"> <!--enctype for image extraction-->

           <div class="form-group">
           <label class="text-primary" for="">User Name</label>
           <input type="text" name="uname" class="form-control" value="">
         </div>
          <div class="form-group">
          <label class="text-primary" for="">Email</label>
          <input type="text" name="email" class="form-control" value="">
          </div>
          <div class="form-group">
          <label class="text-primary" for="">Password</label>
          <input type="password" name="password" class="form-control" value="">
          </div>
          <div class="form-group">
          <label class="text-primary" for="">Confirm Password</label>
          <input type="password" name="conpassword" class="form-control" value="">
          </div>

      </div>

      <div class="col-lg-6 ">

          <div class="form-group ml-3">
          <label class="text-primary" for="">Phone</label>
          <input type="text" name="phone" class="form-control" value="">
          </div>

          <div class="form-group ml-3 mt-2">
            <label class="text-primary" for="imageselect">Select Image</label>
            <div class="custom-file">
            <input class="custom-file-input" type="file" name="image" id="imageselect" class="form-control" value="">
            <label  for="imageselect" class="custom-file-label">Enter an Image</label>
            </div>
          </div>

          <div class="form-group ml-3">
          <label class="text-primary" for="">Address</label>
          <input type="text" name="address" class="form-control" value="">
          </div>

        <div class="ml-3 pt-3">
          <input type="submit" name="Submit" class="btn btn-primary" value="Submit">
        </div>
      </form>

      </div>
    </div>
  </div>
</section>





<!--Copyright-->
<section id="copyright" class="text-center py-3 text-light">
  <div class="container">
    <div class="row">
      <div class="col">
        <p class="lead mb-0">Copyright 2019 &copy; Home Sharing</p>
      </div>
    </div>
  </div>
</section>

<!-- popup for login -->
<div class="modal mt" id="loginModal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">User Login</h5>
          <button class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">

          <form>
            <div class="form-group">
              <label for="userename">Username</label>
              <input class="form-control" type="text" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input class="form-control" type="password" placeholder="Enter Password">
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="btn btn-warning">Login</button>

        </div>
        <hr>
        <p class="mx-2 px-2">Don't have an account?? </p>
        <p class="mx-2 mt-0 px-2">Click to <a href="Register.html">Register</a></p>


      </div>
    </div>
  </div>
<!-- pokpup for login -->

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/uikit.min.js"></script>
  <script src="js/uikit-icons.min.js"></script>
  <script src="js/navbar-fixed.js"></script>
</body>
</html>
