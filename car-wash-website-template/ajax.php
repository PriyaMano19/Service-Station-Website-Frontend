<?php
include 'config.php';
if(isset($_POST['service_id'])) {

    $id=$_POST['service_id'];
    $query = "SELECT * FROM booking_sub_service WHERE service_id = '$id'";
    $result=mysqli_query($con,$query);
    $count=mysqli_num_rows($result);

    if($count > 0) {
        while($row = mysqli_fetch_array($result)){
            echo'<option value="'.$row['sub_service_id'].'">'.$row['sub_service_name'].'</option>';
           
        }
    }

}



?>