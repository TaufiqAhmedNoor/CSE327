<?php include 'inc/header.php' ?>
 <!-- Search bar --> 
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
      <div class="col-md-8">
        <div class="input-group mb-3">
          <input type="text" id="search_text" class="form-control" placeholder="Enter Your Location" aria-label="Recipient's username" aria-describedby="basic-addon2">
          
        </div>
      </div>  
    </div>
  </div>
</section>
<div id="result"></div>

<!-- Javascript file -->

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
  
   // Matched keywords with database will show bellow

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