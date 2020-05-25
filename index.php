<?php
include_once 'db.php';
$con = new DB_con();

// data insert code starts here.
if(isset($_POST['order'])) {
    $name = $_POST['fname'];
    $lname = $_POST['lname'];
    $person = $_POST['orperson'];
    $table = $_POST['ortable'];
    $time = $_POST['ortime'];
    $date = $_POST['ordate'];
 
	$sql =$con->insert($name,$lname,$person,$table,$time,$date);

	if($sql){
		echo "<script>alert('Data inserted');</script>";
	}else {
		echo "<script>alert('Data not inserted');</script>";
	}
}
?>

 <!DOCTYPE html>
 <html>
 <body>
	<form method="post">
		<input type="text" name="fname" placeholder="First Name">
		<input type="text" name="lname" placeholder="Last Name">
		<input type="number" name="orperson" placeholder="Person(s)">
		<input type="number" name="ortable" placeholder="Table #">
		<input type="time" name="ortime" placeholder="Time">
		<input type="date" name="ordate" placeholder="Date">
		<input type="button" name="order" value="Order">
	</form>
 </body>
 </html>