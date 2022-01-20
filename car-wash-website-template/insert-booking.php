<?php
include 'config.php';
$owner_name = $_POST['owner_name'];
$vehicle_no = $_POST['vehicle_no'];
$contact_no = $_POST['contact_no'];
$service = $_POST['service'];
$book_date = $_POST['book_date'];
$book_time = $_POST['book_time'];

$btime = strtotime($book_time);
$b_time = date('H:i:s', $btime);


//$b_time = strtotime($book_time);

$sql = "INSERT INTO booking 
(name,vehicle_no,contact_no,service,book_date,book_time)
VALUES
('$owner_name','$vehicle_no','$contact_no','$service','$book_date','$b_time')";

$con->query($sql);

header("Location:index.php");
?>