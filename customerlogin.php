    <?php
    /* make connection*/
include('login_u.php'); 

if(isset($_SESSION['login_user2'])){
header("location: index.php"); 
}
?>

<!DOCTYPE html>
<html>

  <head>
    <title> Tasin </title>
  </head>

 <!--connect with css, bootstrap and javascript-->
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>


   <!--javascript-->
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
 <!--nav abr design-->
 <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation" style="background-color: darkblue;
border-color: darkblue;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="index.php" style="color: white;">
       
        <img src="images/logo1.png"  class="navbar-brand" style="width: 322%;


height: 119px;
margin-left: -70px;
margin-top: -25px;">

        </a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
        

<?php

/*check condition*/
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span ></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
          </ul>
<?php
}

else {

  ?>
 <!--search option-->
<ul class="nav navbar-nav navbar-right">

  <li> <input type="text" name=""  placeholder="search" class="form-control" style="width: 477px;
margin-top: 8px;">
           
            </li>
 <!--connect to homepage-->
  <li><a href="http://localhost/noor-mvc/index.php"  style="background-color: darkblue; color: white;" role="button" aria-haspopup="true" aria-expanded="false"><span ></span> Home<span class="caret"></span></a></li>
            <li><a href="#" data-toggle="dropdown" style="background-color: darkblue; color: white;" role="button" aria-haspopup="true" aria-expanded="false"><span ></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu" style="background-color: darkblue;">
              <li> <a href="customersignup.php" style="color: white;"> User Sign-up</a></li>

             
            </ul>
            </li>

            <li><a href="#" data-toggle="dropdown" style="background-color: darkblue; color: white;" role="button" aria-haspopup="true" aria-expanded="false"><span ></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu" style="background-color: darkblue;">
              <li> <a href="customerlogin.php" style="color: white;"> User Login</a></li>
            </li>
              </ul>

<?php
}

?>

        </div>

      </div>
    </nav>

     <!--signup form-->

    <div class="container" style="margin-top: 4%; margin-bottom: 2%;">
       <div class="col-md-6">
          <img src="images/burger.jpg" style="width:100%; height: 580px;">
      </div>
      <div class="col-md-6">
        <label style="margin-left: 5px;color: red;"><span> <?php echo $error;  ?> </span></label>
      <div class="panel panel-primary">
        <div class="panel-heading" style="background-color: darkblue; text-align: center;"> Login </div>
        <div class="panel-body">
          
        <form action="" method="POST">
          
        <div class="row">
          <div class="form-group col-xs-12">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> email: </label>
             <input class="form-control" id="username" type="text" name="username" placeholder="email" required="" autofocus="">
                  
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
            <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">     
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
              <button class="btn btn-primary" name="submit" style="background-color: darkblue;" type="submit" value=" Login ">Login</button>
          </div>

           <div class="col-md-6">
              <label style="margin-left: 5px;"><a href="customersignup.php" style="color: darkblue;">Create a new account.</a></label>
          </div> 

        </div>
        
      

        </form>
        </div>     
      </div>      
    </div>
    </div>

    <footer class="container-fluid bg-4 text-center" style="background-color: darkblue">
  <br>
  <p>    Hotline:1121 </p>
  <br>
  </footer>



    </body>
</html>
