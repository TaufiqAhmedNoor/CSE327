<?php
/*make connection*/
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
?>

<html>

  <head>
    <title> Tasin</title>
  </head>
<!--connect with css, bootstrap and javascript-->
  <link rel="stylesheet" type = "text/css" href ="css/payment.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
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
<!--nav bar design-->
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
        
<!--check condition-->
<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span ></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span ></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
    <?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              
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
              
            </ul>
            </li>
            </li>
          </ul>


<?php
}
?>


        </div>

      </div>
    </nav>

 <?php

 /*calculation for payment*/
$getvalue = 0;
  foreach($_SESSION["cart"] as $keys => $values)
  {

    $F_ID = $values["food_id"];
    $foodname = $values["food_name"];
    $quantity = $values["food_quantity"];
    $price =  $values["food_price"];
    $total = ($values["food_quantity"] * $values["food_price"]);
    $R_ID = $values["R_ID"];
    $username = $_SESSION["login_user2"];
    $order_date = date('Y-m-d');
    
    $getvalue = $getvalue + $total;


    /*database connection*/

     $query = "INSERT INTO ORDERS (F_ID, foodname, price,  quantity, order_date, username, R_ID) 
              VALUES ('" . $F_ID . "','" . $foodname . "','" . $price . "','" . $quantity . "','" . $order_date . "','" . $username . "','" . $R_ID . "')";
             

              $success = $conn->query($query);         

      if(!$success)
      {
        ?>
        <div class="container">
          <div class="jumbotron">
            <h1>Something went wrong!</h1>
            <p>Try again later.</p>
          </div>
        </div>

        <?php
      }
      
  }

        ?>
        
        <br><br><br><br><br>
  <!--show ammount-->
<h1 class="text-center" id="finalAmount">Grand Total: <?php echo "$getvalue"; ?>Tk</h1>
<h5 class="text-center">No delivery charges applied</h5>
<br>
<h1 class="text-center">
<!--There are two option. online payment and cash on delivery-->
  <a href="onlinepay.php"><button class="btn btn-success"><span class="glyphicon glyphicon-credit-card"></span> Pay Online</button></a>
  <a href="COD.php"><button class="btn btn-success"><span class="glyphicon glyphicon-"></span> Cash On Delivery</button></a>
</h1>
        


<br><br><br><br><br><br>
        </body>
</html>
