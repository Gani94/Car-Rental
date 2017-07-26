<?php
session_start();
$reg=$_GET['reg'];
$con=mysqli_connect("localhost","root","root","car_rental");

$display_data = mysqli_query($con,"SELECT * FROM car, inventory where car.car_id=inventory.car_id and number_plate='$reg'");
while ($row = mysqli_fetch_array($display_data)){

	echo "<p>Enter Price below</p>"
	echo "<input type='text' class='form-control' val=".$row[price]."name='update_price' id='update_price' /><span id='emptyp' style='color:red'></span>";
	echo "</br>";

	echo "<p>Enter new image address below</p>"
	echo "<input type='text' class='form-control' val=".$row[image]."name='update_image' id='update_image' /><span id='emptyp2' style='color:red'></span>";
	echo "</br>";




}

mysqli_close($con);
?>