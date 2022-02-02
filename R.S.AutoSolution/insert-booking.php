<?php
include 'config.php';
$owner_name = $_POST['owner_name'];
$vehicle_no = $_POST['vehicle_no'];
$contact_no = $_POST['contact_no'];
$service = $_POST['service'];
$sub_service=$_POST['sub_service'];
$book_date = $_POST['book_date'];
$book_time = $_POST['book_time'];

$btime = strtotime($book_time);
$b_time = date('H:i:s', $btime);


//$b_time = strtotime($book_time);

$sub="";  
foreach($sub_service as $item)  
   {  
      $sub.= $item.",";  
   }  

$sql = "INSERT INTO booking 
(name,vehicle_no,contact_no,service,sub_service,book_date,book_time)
VALUES
('$owner_name','$vehicle_no','$contact_no','$service','$sub','$book_date','$b_time')";

$con->query($sql);

header("Location:index.php");
?>