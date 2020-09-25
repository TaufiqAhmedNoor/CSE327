<?php include 'inc/header.php' ?>
<?php 
// Here we  get all menu of the restaurants by its id 

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $getValue = $Menu->getMenuByResId($_GET['id']);
  }
  
 ?>

 <!-- Here we set the bg of menu page -->
<section class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div style="background-image: url(images/bro.jpg);background-size: cover;">
          <h2 class="p-5 text-center">Menu</h2>
        </div>
        
      </div>
  </div>
</section>

<!-- Here we made the layout of the items and cash memo. -->
<section class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="row">
          <table class="table">
          	<thead class="bg-warning text-light">
          		<th>Item</th>
          		<th>Title</th>
          		<th>Price(Tk) </th>
          		<th>Quantity</th>
          		<th>Total(Tk)</th>
          	</thead>
          	<tbody>
    <?php 
        if ($getValue) {
          $count_one = 0;
          $count_two = 100;
          while ($row = mysqli_fetch_array($getValue)) {
            $count_one++;
            $count_two++;
    ?>
        <tr id="<?php echo $count_one; ?>">
                <td><img width="80" src="images/<?php echo $row['item_image'] ?>"></td>
                <td><?php echo $row['item_name'] ?></td>
                <td><?php echo $row['item_price'] ?></td>
                <td>
                  <div class="input-group main" id="<?php echo $count_two ?>">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-danger bminus"  data-type="minus">
                          <span class="fa fa-minus"></span>
                        </button>
                    </span>
                    <input type="text" name="quant" readonly class="qnty" value="0" min="1" max="100" size="2">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-success bplus" data-type="plus" data-field="quant[2]">
                            <span class="fa fa-plus"></span>
                        </button>
                    </span>
                </div>
                </td>
                <td class="subtotal">0</td>
              </tr>
      <?php    }
        }
     ?>
          

          	</tbody>
          </table>
        </div>
      </div>
      <div class="col-md-5">
        <div class="pl-3">
         	<ul class="list-group">
				<li class="list-group-item list-group-item-secondary">Cart Sub total <span class="pull-right" id="totalAmount">150Tk</span></li>
				<li class="list-group-item mt-3 list-group-item-secondary">Tax <span class="pull-right">10%</span></li>
				<li class="list-group-item mt-3 list-group-item-secondary">Shipping cost <span class="pull-right">Free</span></li>
				<li class="list-group-item mt-3 list-group-item-secondary">Total <span class="pull-right" id="finalAmount">150tk</span></li>
			</ul>
        </div>
        <br>
        <br>
        <button class="btn btn-primary pull-right">checkout</button>
      </div>
  </div>
</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jry.js"></script>
<script type="text/javascript">
$(document).ready(function(){

// Because of this code we can decrease the Quantity of the item
  $( ".bminus" ).on('click',function() {
    $div = $(this).closest('div');
    $tr = $(this).closest('tr');
    var getid = $div.attr("id");
    var getValueid = $tr.attr("id");
    $pvalue = parseInt($div.find("input").val());
    $pvalue = $pvalue-1;
    $value = parseInt($tr.find("td:nth-child(3)").text());
    $value *= $pvalue;
    if ($pvalue >= 0) {
      $("#"+getid+" input").val($pvalue);
      $("#"+getValueid+" td:nth-child(5)").text($value);
    }
    empty();
  });
  // Because of this code we can Increase the Quantity of the item
  $( ".bplus" ).on('click',function() {
    $div = $(this).closest('div');
    $tr = $(this).closest('tr');
    var getid = $div.attr("id");
    var getValueid = $tr.attr("id");
    $pvalue = parseInt($div.find("input").val());
    $pvalue = $pvalue+1;
    $value = parseInt($tr.find("td:nth-child(3)").text());
    $value *= $pvalue;
    $("#"+getid+" input").val($pvalue);
    $("#"+getValueid+" td:nth-child(5)").text($value);
    empty();
  });
  empty();
  // Here we are adding the total taka and adding the 10% tax to it
  function empty(){
    var total = 0,finalAmount;
    $(".subtotal").each(function () {
        total += parseInt($(this).text());
    });
    avg = total * 0.1;
    finalAmount = avg + total;
    $('#totalAmount').text(total);
    $('#finalAmount').text(finalAmount);
  }
    

});
    
</script>
  </body>
</html>