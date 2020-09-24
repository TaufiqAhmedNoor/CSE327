<!DOCTYPE html>
<html>
<head>
	<title>Noor project</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/glyphicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>	
<nav class="navbar navbar-light navbar-expand-sm" height="200" >
    <div class="container">
        <a href="index.html" class="navbar-brand" data-toggle="tooltip" title="FDS">
          <img class="img-fluid mx-auto deming" width="100" src="images/leaf.png" alt="">
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#menu" >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
           <span class="mr-auto"></span>
            <ul class="navbar-nav">
                 <li class="nav-item active middle_header" style="border: 1px solid grey;">
                     <a href="" class="nav-link"><span class="glyphicon glyphicon-home"></span> Login</a>
                 </li>
             </ul>
        </div>
     
    </div>
</nav>

<section class="container-fluid mainSelector">
  <div class="container pb-5">
    <div class="row">
      <div class="col-md-7">
        <h2 class="p-4 text-dark">Food Delivery from Dhaka’s Best <br>Restaurants</h2>
      </div>
      <div class="col-md-5">
        
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="input-group mb-3">
          <input type="text" id="search_text" class="form-control" placeholder="Enter The Restaurant Name" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-secondary" type="button">search</button>
          </div>
        </div>
      </div>  
    </div>
  </div>
</section>
<div id="result"></div>

<footer class="footer text-center text-light container-fluid bg-dark">
	<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="info">
						<ul class="nav nav-pills">
							<li><a href="" class="text-white"><i class="fa fa-phone"></i> +8801303411634 </a></li>
							<li><a href="" class="text-white"><i class="fa fa-envelope"></i> ahmed24077@gmail.com</a></li>
						</ul>
					</div>
					
				</div>
				<div class="col-md-6">
					<div class="pull-right">
						<button class="btn top_btn"><i class="fa fa-facebook"></i></button>
						<button class="btn top_btn"><i class="fa fa-twitter"></i></button>
						
					</div>
				</div>
			</div>
		</div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jry.js"></script>
<script >
  $(document).ready(function(){
    load_data();
    function load_data(txt)
     {
      $.ajax({
       url:"ajax/fetch_search.php",
       method:"POST",
       data:{txt:txt},
       success:function(data)
       {
        $('#result').html(data);
       }
      });
     }
  
    $('#search_text').keyup(function(){
      var txt = $(this).val();
      if (txt != '') {
        load_data(txt);
      }else{
        load_data();
      }
    });
      
  });
</script>
  </body>
</html>
