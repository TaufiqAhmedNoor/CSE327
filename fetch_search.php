<?php 
// Retriving restraurant name from database 
	$connect = mysqli_connect("localhost","root","","noor");
	if (isset($_POST['txt'])) {
		$sql = "SELECT * FROM restu WHERE res_title LIKE '%".$_POST['txt']."%'";
		
	}else{
		$sql = "SELECT * FROM restu";

	} 
	$result = mysqli_query($connect, $sql);
	$output ='';
	if (mysqli_num_rows($result) > 0 ) {
		$output .= '<section class="container-fluid container head">
    <h1 class="text-dark p-3">Popular Restaurants</h1>
    <div class="row">';
		while ($row = mysqli_fetch_array($result)) {
			$output .='<div class="col-md-4">
        <div class="card" style="width: 100%;">
          <a href="details.php?id='.$row['res_id'].'"><img class="card-img-top" src="images/'.$row['res_image'].'" alt="Card image cap" style="height:300px"></a>
          <div class="card-body">
            <div class="row">
              <p class="h6 pull-left col-md-9"><a href="details.php?id='.$row['res_id'].'">'.$row['res_title'].'</a></p>
              <p class=" col-md-3 pull-right">4.2(420)</p>
            </div>
            <p class="card-text h5 text-secondary">$$$ beef, soup, chiken, thai, ....</p>
          </div>
        </div>
        <br>
      </div>';
		}
		$output .= '</div></section>';
echo $output;
	}else{
		echo '<h1 class="text-danger p-5">No search found</h1>';
	}
		
 
?>
