<?php
include 'config.php';
if(isset($_POST['serviceid'])) {

    $id=$_POST['serviceid'];
    $query = "SELECT * FROM booking_sub_service WHERE service_id = '$id'";
    $result=mysqli_query($con,$query);
    $count=mysqli_num_rows($result);
   

    if($count > 0) {
        while($row = mysqli_fetch_array($result)){
            //echo'<option  value="'.$row['sub_service_id'].'">'.$row['sub_service_name'].'</option>';
              echo'<input  type ="checkbox" name="sub_service[]" class="defaultCheckbox" value="'.$row['sub_service_id'].'">'.$row['sub_service_name'].'';
              echo '<br>';
              echo'<label   name="sub_service[]" class="defaultCheckbox" value="'.$row['sub_service_id'].'">'.$row['sub_description'].'</label>';
              echo '<br>';
            //echo '<div><input type="checkbox" name="checked[]" value="'.$row['sub_service_id'].'">'.$row['sub_service_name'].'</div>';
         
          // echo '<label><input type="checkbox" value="'.$row['sub_service_id'].'">'.$row['sub_service_name'].'</label>';
        }
    }

}



?>
