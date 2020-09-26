<html>
<head>
    <title> Tasin </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/managersignup.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>


    <button onclick="topFunction()" id="myBtn" title="Go to top" style="background-color: darkblue;">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
    
  
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
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span ></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span ></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li class="active" ><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart  (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>) </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">

  <li> <input type="text" name=""  placeholder="search" class="form-control" style="width: 477px;
margin-top: 8px;">
           
            </li>

  <li><a href="http://localhost/Online_Food_Order"  style="background-color: darkblue; color: white;" role="button" aria-haspopup="true" aria-expanded="false"><span ></span> Home<span class="caret"></span></a></li>
            <li><a href="#" data-toggle="dropdown" style="background-color: darkblue; color: white;" role="button" aria-haspopup="true" aria-expanded="false"><span ></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu" style="background-color: darkblue;">
              <li> <a href="customersignup.php" style="color: white;"> User Sign-up</a></li>
          <!--     <li> <a href="managersignup.php" style="color: white;">Admin Sign-up</a></li> -->
           
            </ul>
            </li>

            <li><a href="#" data-toggle="dropdown" style="background-color: darkblue; color: white;" role="button" aria-haspopup="true" aria-expanded="false"><span ></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu" style="background-color: darkblue;">
              <li> <a href="customerlogin.php" style="color: white;"> User Login</a></li>
              <li> <a href="managerlogin.php" style="color: white;"> Admin Login</a></li>
              
            </ul>
            </li>

              <li><a href="https://www.youtube.com/channel/UCoqSjRl7lr2SFfwE-KV1uyQ" data-toggle="dropdown" style="background-color: darkblue; color: white;" role="button" aria-haspopup="true" aria-expanded="false"><span ></span> About Us <span class="caret"></span></a>

                <li><a href="https://www.youtube.com/channel/UCoqSjRl7lr2SFfwE-KV1uyQ" data-toggle="dropdown" style="background-color: darkblue; color: white;" role="button" aria-haspopup="true" aria-expanded="false"><span ></span> Contact Us <span class="caret"></span></a>
           
            </li>



          </ul>



<?php
}
?>


        </div>

      </div>
    </nav>

   



    <div class="container" style="margin-top: 4%; margin-bottom: 2%;">
      <div class="col-md-6">
          <img src="images/burger.jpg" style="width:100%; height: 580px;">
      </div>
      <div class="col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading" style="background-color: darkblue; text-align: center;"> Create Account </div>
        <div class="panel-body">
          
        <form role="form" action="customer_registered_success.php" method="POST">
         
          <div class="row">
          <div class="form-group col-xs-12">
            <label for="fullname"><span class="text-danger" style="margin-right: 5px;">*</span> Full Name: </label>
            <input class="form-control" id="fullname" type="text" name="fullname" placeholder="Your Full Name" required="" autofocus="">      
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Email: </label>
            <input class="form-control" id="username" type="email" name="username" placeholder="Email" required="">
                  
          </div>
        </div>

       <!--  <div class="row">
          <div class="form-group col-xs-12">
            <label for="email"><span class="text-danger" style="margin-right: 5px;">*</span> : </label>
            <input class="form-control" id="email" type="email" name="email" placeholder="Email" required="">
               
          </div>
        </div> -->

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="contact"><span class="text-danger" style="margin-right: 5px;">*</span> Contact: </label>
             <input class="form-control" id="contact" type="text" name="contact" placeholder="Contact" required="">      
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="address"><span class="text-danger" style="margin-right: 5px;">*</span> Address: </label>
           <input class="form-control" id="address" type="text" name="address" placeholder="Address" required="">     
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12">
            <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
             <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">  
          </div>
        </div>

        

        <div class="row">
          <div class="form-group col-xs-6">
              <button class="btn btn-primary" type="submit" style="background-color: darkblue;">Create Account</button>
          </div>

          <div class="form-group col-xs-6">
             <label style="margin-left: 5px;"><a href="customerlogin.php" style="color: darkblue;">Have an account? Login.</a></label>
          </div>

        </div>
        
      

        </form>

        </div>
        
      </div>
      
    </div>
    </div>
    <footer class="container-fluid bg-4 text-center" style="background-color: darkblue">
  <br>
  <p>   Testi Cafe &copy All Rights Reserved </p>
  <br>
  </footer>

    </body>
</html>