<?php
session_start();
?>
<?php

$db=new mysqli("localhost","root","root","car_rental");
$cars = mysqli_query($db,"SELECT number_plate,image,company,model,price,availability FROM car c,inventory i where c.car_id = i.car_id");
$count = 0;
while ($row = mysqli_fetch_array($cars))
{	
	if($row[availability]>=0){
	$count = $count +1;
	echo "<div class='row'>";
	echo '<div class="col-sm-4"><img src="'.$row['image'].'"style="width:250px;height:180px;"><p>'.$row['company'].'
	'.$row['model'].'</br>$'.$row['price'].'</br>Availability='.$row['availability'].'</div>' ;

	if($count == 3){
		$count =0;
		echo "</div>";
		echo "<div class='row'>";
		
		}
	}
}
mysqli_close($db);
?>

