<?php 

        require_once("connection.php ");

        if(isset($_GET['Del']))
        {
            $UserID = $_GET['Del'];
            $query = " delete from room_info where Room_id = '".$UserID."'";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:viewroom_info.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:viewroom_info.php");
        }

?>