<?php
$date_time = $_POST['date_time'];
$fullname = $_POST['fullname'];
$phonenumber = $_POST['phonenumber'];
$people = $_POST['people'];


//connection
$conn = new mysqli('localhost', 'root', '', 'restaurant');
if ($conn->connect_error) {
	# code...
	die('connection Failed : '.$conn->connect_error);


}else {
	# code...
	$stmt = $conn->prepare("INSERT into reservation (date_time, fullname, phonenumber, people) values (?, ?, ?, ?)");
$stmt->bind_param("ssii", $date_time, $fullname, $phonenumber, $people);
$stmt->execute();
echo "Table Booked successfully.......";
$stmt->close();
$conn->close();

}


?> 
